<?php

namespace Cls\SiteBundle\Mail;

use Cls\SiteBundle\Entity\ContactInterface;
use Symfony\Component\Templating\EngineInterface;

class ContactMail implements EmailNotificationInterface
{
    protected $mailer;

    /**
     * @var EngineInterface
     */
    protected $templating;

    protected $from;

    public function __construct($mailer, EngineInterface $templating, $from)
    {
        $this->mailer = $mailer;
        $this->templating = $templating;
        $this->from = $from;
    }

    public function sendMailNotification(ContactInterface $contact)
    {
        $rendered = $this->templating->render('ClsSiteBundle:Contact:contact.txt.twig', array(
            'contact' => $contact,
        ));

        $message = \Swift_Message::newInstance()
            ->setSubject('CLS - Formulário de contato')
            ->setFrom($this->from)
            ->setTo('claudio.silva@clsmontagens.com.br')
            ->setBody($rendered);

        $this->mailer->send($message);
    }
}