<?php

namespace Cls\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ImageGalleryController extends Controller
{
    public function indexAction()
    {
        return $this->render('ClsSiteBundle:Gallery:index.html.twig');
    }
}