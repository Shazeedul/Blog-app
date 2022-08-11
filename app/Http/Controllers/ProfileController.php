<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Auth::user();
        $postCount = Auth::user()->posts->count();
        $posts = Post::with('category', 'user')->where('user_id', auth()->user()->id)->orderBy('created_at', 'DESC')->take(4)->get();
        $firstPosts2 = $posts->splice(0, 2);
        $lastPosts2 = $posts->splice(0);
        // dd($posts);
        return view('website.profile', compact(['profile', 'postCount', 'posts', 'firstPosts2', 'lastPosts2']));
    }
}
