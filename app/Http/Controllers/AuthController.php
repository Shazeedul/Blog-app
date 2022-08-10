<?php

namespace App\Http\Controllers;

use App\Models\Authentication;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    function register(){
        return view('auth.register');
    }

    public function store(Request $request){
        $request->validate([
            'fname' => 'required|string|max:50',
            'lname' => 'required|string|max:50',
            'email' => 'required|string|email|max:150|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        Authentication::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return back()->with('success', 'New User has been successfuly added');
    }

    public function check(Request $request){
        

        $request->validate([
            'email' => 'required|email|email:rfc,dns',
            'password' => 'required|string|min:8|max:12',
        ]);
        
        if(auth()->attempt(array('email' => $request->email, 'password' => $request->password)))
        {
            if (auth()->user()->role == 1) {
                return redirect()->intended('admin/dashboard');
            }else{
                return redirect()->intended('/');
            }
        }else{
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }
        

        
        
    }

    public function logout(Request $request){
        // Auth::logout();
        $request->session()->flush();
        return redirect('login');
    }
}
