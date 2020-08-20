<?php

namespace App\Mail;

use Mail;
use \Swift_Mailer;
use \Swift_SmtpTransport;

class EmailHelper 
{
    public static function sendEmailBabazaMailServer($data, $email, $subj)
    {
        // Backup your default mailer
        $backup = Mail::getSwiftMailer();

        // Setup your gmail mailer
        $transport = new Swift_SmtpTransport('mail.babaza.vn', 587, 'tls');
        $transport->setUsername('tuyendung@babaza.vn');
        $transport->setPassword('Anhduong@789');
        // Any other mailer configuration stuff needed...

        $gmail = new Swift_Mailer($transport);

        // Set the mailer as gmail
        Mail::setSwiftMailer($gmail);

        $emailTo = $email[count($email) - 1];
        $emailBcc = [];
        for ($idx = 0; $idx < count($email) - 1 ; $idx++) { 
            array_push($emailBcc, $email[$idx]);
        }

        Mail::send('email.index', $data, function ($message) use ($emailTo, $emailBcc, $subj) {
            $message->to($emailTo);
            $message->subject($subj);
            $message->from('tuyendung@babaza.vn', 'Babaza');
            $message->bcc($emailBcc);
        });

        // Restore your original mailer
        Mail::setSwiftMailer($backup);
    }

    public static function sendEmailSendGridBabazavn ( $data, $email, $subj) 
    {
        // Backup your default mailer
        $backup = Mail::getSwiftMailer();

        // Setup your gmail mailer
        $transport = new Swift_SmtpTransport('smtp.sendgrid.net', 587, 'tls');
        $transport->setUsername('babazavn');
        $transport->setPassword('Anhduong@789');
        // Any other mailer configuration stuff needed...

        $gmail = new Swift_Mailer($transport);

        // Set the mailer as gmail
        Mail::setSwiftMailer($gmail);

        Mail::send('email.index', $data, function ($message) use ($email, $subj) {
            $message->to($email);
            $message->subject($subj);
            $message->from('ai@babaza.vn', 'Babaza');
        });

        // Restore your original mailer
        Mail::setSwiftMailer($backup);
    }

    public static function sendEmailSendGridCrashrp($data, $email, $subj)
    {
        // Backup your default mailer
        $backup = Mail::getSwiftMailer();

        // Setup your gmail mailer
        $transport = new Swift_SmtpTransport('smtp.gmail.com', 587, 'tls');
        $transport->setUsername('babazavn@gmail.com');
        $transport->setPassword('Anhduong@789');
        // Any other mailer configuration stuff needed...

        $gmail = new Swift_Mailer($transport);

        // Set the mailer as gmail
        Mail::setSwiftMailer($gmail);

        Mail::send('email.index', $data, function ($message) use ($email, $subj) {
            $message->to($email);
            $message->subject($subj);
            $message->from('ai@babaza.vn', 'Babaza');
        });

        // Restore your original mailer
        Mail::setSwiftMailer($backup);
    }
}
