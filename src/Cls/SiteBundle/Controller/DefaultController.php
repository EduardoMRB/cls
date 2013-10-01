<?php

namespace Cls\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ClsSiteBundle:Default:index.html.twig', array('name' => $name));
    }
}
