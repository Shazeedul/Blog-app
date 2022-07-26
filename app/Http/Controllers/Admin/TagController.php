<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class TagController extends Controller
{
    
    public function index()
    {
        $tags = Tag::orderBy('created_at', 'DESC')->paginate('20');
        return view('admin.tag.index', compact('tags'));
    }

    
    public function create()
    {
        return view('admin.tag.create');
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:tags,name',
        ]);

        Tag::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-'),
            'description' => $request->description,
        ]);

        Session::flash('success', 'Tag created successfully');

        return redirect()->back();
    }

    
    public function show(Tag $tag)
    {
        //
    }

    
    public function edit(Tag $tag)
    {
        return view('admin.tag.edit', compact('tag'));
    }

    
    public function update(Request $request, Tag $tag)
    {
        // validation
        $this->validate($request, [
            'name' => "required|unique:tags,name,$tag->id",
        ]);

        $tag->name = $request->name;
        $tag->slug = Str::slug($request->name, '-');
        $tag->description = $request->description;
        $tag->save();

        Session::flash('success', 'Tag updated successfully');
        return redirect()->back();
    }

    
    public function destroy(Tag $tag)
    {
        if($tag){
            $tag->delete();

            Session::flash('success', 'Tag deleted successfully');
            return redirect()->route('tags.index');
        }
    }
}
