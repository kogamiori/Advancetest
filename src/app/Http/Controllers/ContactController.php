<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request as Psr7Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view ('index');
    
    }
    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['name', 'email', 'post-code', 'address', 'bill', 'content']);
        return view('confirm', compact('contact'));
    }
    public function store(ContactRequest $request)
    {
        $contact = $request->only(['name', 'email', 'post-code', 'address', 'bill', 'content']);
        Contact::create ($contact);
        return view('thanks');
    }
}
