<?php

namespace Cls\SiteBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

class EquipmentAdmin extends Admin
{
    public function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', null, array(
                'label' => 'Nome',
            ))
            ->add('description', null, array(
                'label' => 'Descrição',
            ))
            ->add('enabled', null, array(
            	'label' => 'Habilitado',
            	'attr' => array(
            		'checked' => true,
        		),
        	))
            ->add('image', 'file', array(
                'label' => 'Imagem',
                'required' => false,
            ))
        ;
    }

    public function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name', null, array(
                'label' => 'Nome',
            ))
            ->add('enabled', null, array(
            	'editable' => true,
            	'label' => 'Habilitado',
        	))
        ;   
    }

    public function prePersist($equipment)
    {
        $equipment->upload();
    }

    public function preUpdate($equipment)
    {
        $equipment->upload();
    }
}