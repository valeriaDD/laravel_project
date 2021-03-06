<?php

namespace App\Http\Controllers;

use App\Http\Request\ContactsRequest;
use App\Services\ContactUsMailer;
use Illuminate\Http\RedirectResponse;
use Log;


class ContactsController extends Controller
{
    public function index() {
        return view('ContactPage.contactPage');
    }

    public function send(ContactsRequest $request, ContactUsMailer $mailer): RedirectResponse
    {

        $data = $request->validated();

        Log::debug('test',$data);

        $mailer->send($data);


        return redirect()->back()->with('status', 'Mesajul a fost trimis cu success!');
    }
}
