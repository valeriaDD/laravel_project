<?php

namespace App\Services;

use Illuminate\Mail\Mailer;
use Psr\Log\LoggerInterface;
use Illuminate\Mail\Message;

class AppointmentMailer{

    private Mailer $infrastructureMailer;
    private LoggerInterface $logger;

    public function __construct(Mailer $infrastructureMailer, LoggerInterface $logger){
         $this->infrastructureMailer = $infrastructureMailer;
         $this->logger = $logger;
    }
    
    public function send(array $data):void
    {
        $this->infrastructureMailer->send('Emails.AppointmentEmail',$data,
                
                    function (Message $message) use ($data){
 
                             $message->subject('User Message ' . $data['email']);
                             $message->to('admin@lotus.app');
                             $message->from('dontReply@lotus.app', 'Lotus');
        });
        $this->logger->info('A mail from dontReply@lotus.app to admin@lotus.app : User made an appointment!');
    }
}