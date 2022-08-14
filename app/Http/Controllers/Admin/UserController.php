<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    
    public function index()
    {
        $users = User::latest()->paginate(20);

        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'description' => $request->description,
        ]);

        Session::flash('success', 'User created successfully');
        return redirect()->back();
    }

    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => "required|email|unique:users,email, $user->id",
            'password' => 'sometimes|nullable|min:8',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->description = $request->description;
        $user->save();

        Session::flash('success', 'User updated successfully');
        return redirect()->back();
    }

    
    public function destroy(User $user)
    {
        if($user){
            $user->delete();
            Session::flash('success', 'User deleted successfully');
        }
        return redirect()->back();
    }

    public function profile(){
        $user = auth()->user();

        return view('admin.user.profile', compact('user'));
    }

    public function profile_update(Request $request){
        $user = auth()->user();

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => "required|email|unique:users,email, $user->id",
            'password' => 'sometimes|nullable|min:8',
            'image'=> 'sometimes|nullable|image|max:2048',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->description = $request->description;

        if($request->has('password') && $request->password !== null){
            $user->password = Hash::make($request->password);
        }

        $old_file = $user->image;
        if($request->hasFile('image')){
            if ($user->image != null) {
                $this->deleteFile($old_file);
            }
            $user->image = Storage::put('user', $request->file('image'));
        }
        $user->save();

        Session::flash('success', 'User profile updated successfully');
        return redirect()->back();
    }

    private function deleteFile($path){
        if (Storage::exists($path)) {
            Storage::delete($path);
        }
    }
}
