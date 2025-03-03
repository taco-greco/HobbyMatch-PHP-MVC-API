<?php

namespace src\Service;

use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mime\Email;

class MailService
{
    private Mailer $mailer;

    public function __construct()
    {
        $transport =
            Transport::fromDsn("smtp://bdc86d7026d040:889aad0f8ed259@sandbox.smtp.mailtrap.io:2525");
        $this->mailer = new Mailer($transport);
    }

    // $to peut être soit un mail (String) ou un ensemble de mail (array)
    public function send(array|String $from, array|String $to, String $subjet, String
    $html)
    {
        //Concevoir le message
        $email = (new Email())
            ->from($from)
            ->to($to)
            ->subject($subjet)
            ->html($html);
        //Envoyer le message
        $this->mailer->send($email);
    }
}
