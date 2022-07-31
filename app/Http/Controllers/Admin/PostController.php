<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File; 

class PostController extends Controller
{
    
    public function index()
    {
        $posts = Post::orderBy('created_at', 'DESC')->paginate('20');
        return view('admin.post.index', compact('posts'));
    }

    
    public function create()
    {
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.post.create', compact(['categories', 'tags']));
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:posts,title',
            'image' => 'required|image',
            'description' => 'required',
            'category' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $image = Storage::put('post', $request->file('image'));
        }

        $post = Post::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'image' => $image,
            'description' => $request->description,
            'category_id' => $request->category,
            'user_id' => auth()->user()->id,
            'published_at' => Carbon::now(),
        ]);

        $post->tags()->attach($request->tags);

        Session::flash('success', 'Post created successfully');

        return redirect()->back();
    }

    
    public function show(Post $post)
    {
        return view('admin.post.show', compact('post'));
    }

    
    public function edit(Post $post)
    {
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.post.edit', compact(['post', 'categories', 'tags']));
    }

    
    public function update(Request $request, Post $post)
    {
        // validation
        $this->validate($request, [
            'title' => "required|unique:posts,title, $post->id",
            'description' => 'required',
            'category' => 'required',
        ]);
        
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->description = $request->description;
        $post->category_id = $request->category;

        $post->tags()->sync($request->tags);

        $post = Post::findOrFail($post->id);
        $old_file = $post->image;
        if($request->hasFile('image')){
            if ($post->image != null) {
                $this->deleteFile($old_file);
            }
            $post->image = Storage::put('post', $request->file('image'));
        }

        

        $post->save();

        Session::flash('success', 'Post updated successfully');
        return redirect()->back();
    }

    
    public function destroy(Post $post)
    {
        if($post){
            if(file_exists(public_path($post->image))){
                unlink(public_path($post->image));
            }

            $post->delete();
            Session::flash('success', 'Post deleted successfully');
        }

        return redirect()->back();
    }

    private function deleteFile($path){
        if (Storage::exists($path)) {
            Storage::delete($path);
        }
    }
}
