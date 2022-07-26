<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    
    public function index()
    {
        $tags = Tag::orderBy('created_at', 'DESC')->paginate('20');
        return view('admin.tag.index', compact('tags'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show(Tag $tag)
    {
        //
    }

    
    public function edit(Tag $tag)
    {
        //
    }

    
    public function update(Request $request, Tag $tag)
    {
        //
    }

    
    public function destroy(Tag $tag)
    {
        //
    }
}
