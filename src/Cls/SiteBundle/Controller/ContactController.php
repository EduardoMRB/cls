<?php

namespace Cls\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Cls\SiteBundle\Entity\Contact;

class ContactController extends Controller
{
    public function indexAction()
    {
    	$form = $this->createForm('cls_type_contact');

        return $this->render('ClsSiteBundle:Contact:index.html.twig', array(
        	'form' => $form->createView(),
    	));
    }

    public function sendAction(Request $request)
    {
    	$form = $this->createForm('cls_type_contact');

    	$form->handleRequest($request);

    	if ($form->isValid()) {
    		$formData = $form->getData();
    		$contact = new Contact();
    		$contact->setName($formData['name'])
    			->setEmail($formData['email'])
    			->setMessage($formData['message']);

			$emailNotification = $this->get('cls.contact.mailer');

			$emailNotification->sendMailNotification($contact);

			$this->get('session')->getFlashBag()->add('success', 'Obrigado por deixar sua mensagem');

			return $this->redirect($this->generateUrl('cls_home'));
    	}

    	return $this->render('ClsSiteBundle:Contact:index.html.twig', array(
    		'form' => $form->createView(),
		));
    }
}