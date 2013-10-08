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
        $form = $this->createForm('cls_type_estimate');

        return $this->render('ClsSiteBundle:Estimate:index.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function createAction(Request $request)
    {
    	$form = $this->createForm('cls_type_estimate');
    	$form->handleRequest($request);

    	if (!$form->isValid()) {
    		return $this->render('ClsSiteBundle:Estimate:index.html.twig', array(
	            'form' => $form->createView(),
	        ));
    	}

    	$estimate = $form->getData();
    	$estimate->upload();
    	$em = $this->getDoctrine()->getManager();
    	$em->persist($estimate);
    	$em->flush();

    	$this->get('session')->getFlashBag()->add('success', 'Pedido de orçamento enviado, em breve entraremos em contato');

    	return $this->redirect($this->generateUrl('cls_home'));
    }
}