<?php

namespace Cls\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    public function indexAction()
    {
    	$form = $this->createForm('cls_type_contact');

        return $this->render('ClsSiteBundle:Contact:index.html.twig', array(
        	'form' => $form->createView(),
    	));
    }
}