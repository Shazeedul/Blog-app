<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    
    public function index()
    {
        //
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show(Setting $setting)
    {
        //
    }

    
    public function edit(Setting $setting)
    {
        $setting = Setting::first();
        
        return view('admin.setting.edit', compact('setting'));
    }

    
    public function update(Request $request, Setting $setting)
    {
        $this->validate($request, [
            'name' => 'required',
            'copyright' => 'required',
        ]);

        $setting = Setting::first();
        $setting->update($request->all());
        // $setting = Setting::findOrFail($setting->id);
        $old_file = $setting->site_logo;

        // if($request->hasFile('site_logo')){
        //     $image = $request->site_logo;
        //     $image_new_name = time() . '.' . $image->getClientOriginalExtension();
        //     $image->move('storage/setting/', $image_new_name);
        //     $setting->site_logo = '/storage/setting/' . $image_new_name;
        //     $setting->save();
        // }

        if($request->hasFile('site_logo')){
            if ($setting->site_logo != null) {
                $this->deleteFile($old_file);
            }
            $setting->site_logo = Storage::put('setting', $request->file('site_logo'));
            
        }
        $setting->save();
        Session::flash('success', 'Setting updated successfully');
        return redirect()->back();
    }

    
    public function destroy(Setting $setting)
    {
        //
    }

    private function deleteFile($path){
        if (Storage::exists($path)) {
            Storage::delete($path);
        }
    }
}
