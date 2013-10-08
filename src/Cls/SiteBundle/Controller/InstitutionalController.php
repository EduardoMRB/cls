<?php

namespace Cls\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class InstitutionalController extends Controller
{
    public function indexAction()
    {
        return $this->render('ClsSiteBundle:Institutional:index.html.twig');
    }
}