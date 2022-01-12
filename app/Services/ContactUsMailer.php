<?php

namespace App\Services;

use Illuminate\Mail\Mailer;
use Psr\Log\LoggerInterface;
use Illuminate\Mail\Message;

class ContactUsMailer{

    private Mailer $infrastructureMailer;
    private LoggerInterface $logger;

    public function __construct(Mailer $infrastructureMailer, LoggerInterface $logger){
         $this->infrastructureMailer = $infrastructureMailer;
         $this->logger = $logger;
    }
    
    public function send(array $data):void
    {
        $this->infrastructureMailer->send('Emails.ContactUs',
                    [
                        'email' => $data['email'],
                        'name' => $data['name'],
                        'gender' => $data['gender'],
                        'messageText' => $data['messageText']
                    ], 

                    function (Message $message) use ($data){
 
                             $message->subject('User Message ' . $data['email']);
                             $message->to('tech@lotus.app');
                             $message->from('dontReply@lotus.app', 'Lotus');
        });
        $this->logger->info('Contact us Mail: A user have sent you a message!');
    }
}