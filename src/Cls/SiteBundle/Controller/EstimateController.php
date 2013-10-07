<?php

namespace Cls\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Cls\SiteBundle\Entity\Estimate;

class EstimateController extends Controller
{
    /**
     * Display form for create a new estimate resource
     * 
     * @return Response
     */
    public function indexAction()
    {
        $estimate = new Estimate();
        $form = $this->createForm('cls_type_estimate', $estimate);

        return $this->render('ClsSiteBundle:Estimate:index.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}