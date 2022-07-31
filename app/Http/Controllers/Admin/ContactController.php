<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    
    public function index()
    {
        $messages = Contact::latest()->paginate(20);
        return view('admin.contact.index', compact('messages'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        $message = Contact::find($id);

        if($message){
            return view('admin.contact.show', compact('message'));
        }else {

            Session::flash('error', 'Contact message not found.');
            return redirect()->route('dashboard');
        }
    }

    
    public function edit(Contact $contact)
    {
        //
    }

    
    public function update(Request $request, Contact $contact)
    {
        //
    }

    
    public function destroy($id)
    {
        $contact = Contact::find($id);

        if($contact){
            $contact->delete();

            Session::flash('success', 'Message deleted successfully');
        }

        return redirect()->back();
    }
}
