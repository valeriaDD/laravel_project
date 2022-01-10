<?php

namespace App\Http\Controllers;

use App\Http\Request\ContactsRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index() {
        return view('ContactPage.contactPage');
    }

    public function send(ContactsRequest $request): RedirectResponse
    {
        //dd($request->validated());
        \Log::debug('test',$request->validated());
        

        return redirect()->route('contacts');
    }
}
