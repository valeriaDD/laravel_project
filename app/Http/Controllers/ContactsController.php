<?php

namespace App\Http\Controllers;

use App\Http\Request\ContactsRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;


class ContactsController extends Controller
{
    public function index() {
        return view('ContactPage.contactPage');
    }

    public function send(ContactsRequest $request): RedirectResponse
    {

        $data = $request->validated();
        
        \Log::debug('test',$data);

        \Mail::send('Emails.ContactUs',
                    [
                        'email' => $data['email'],
                        'name' => $data['name'],
                        'messageText' => $data['message']
                    ], 

                    function (Message $message) use ($data){
 
                             $message->subject('User Message ' . $data['email']);
                             $message->to('tech@lotus.app');
                             $message->from('dontReply@lotus.app', 'Lotus');
        });
        

        return redirect()->route('contacts');
    }
}
