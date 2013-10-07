<?php

namespace Cls\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EstimateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        	->add('email', 'email')
        	->add('name', null, array(
        		'label' => 'Nome',
    		))
        	->add('phone', null, array(
        		'label' => 'Telefone',
        		'required' => false,
    		))
        	->add('file', null, array(
        		'label' => 'Arquivo',
        		'required' => false,
    		))
        	->add('description', 'textarea', array(
        		'label' => 'Observações',
        		'required' => false,
    		))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cls\SiteBundle\Entity\Estimate',
        ));
    }

    public function getName()
    {
        return 'cls_type_estimate';
    }
}