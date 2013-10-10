<?php

namespace Cls\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EquipmentController extends Controller
{
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $equipmentManager = $em->getRepository('ClsSiteBundle:Equipment');

        $equipment = $equipmentManager->findBy(array('enabled' => true));

        return $this->render('ClsSiteBundle:Equipment:list.html.twig', array(
            'equipment' => $equipment,
        ));
    }
}