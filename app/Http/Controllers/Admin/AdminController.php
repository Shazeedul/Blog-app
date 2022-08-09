<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $posts = Post::orderBy('created_at', 'DESC')->take(10)->get();
        $postCount = Post::all()->count();
        $categoryCount = Category::all()->count();
        $tagCount = Tag::all()->count();
        $userCount = User::all()->count();
        return view('admin.dashboard', compact(['posts', 'postCount', 'categoryCount', 'tagCount', 'userCount']));
    }
}
