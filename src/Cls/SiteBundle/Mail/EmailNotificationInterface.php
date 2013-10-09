<?php

namespace Cls\SiteBundle\Mail;

use Cls\SiteBundle\Entity\ContactInterface;

interface EmailNotificationInterface
{
    public function sendMailNotification(ContactInterface $contact);
}