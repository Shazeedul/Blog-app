<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Auth::user();
        // dd($profile);
        return view('website.profile', compact('profile'));
    }
}
