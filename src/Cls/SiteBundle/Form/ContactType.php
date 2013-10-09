<?php

namespace Cls\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null, array(
                'label' => 'Nome',
            ))
            ->add('email', 'email')
            ->add('message', 'textarea', array(
                'label' => 'Mensagem',
            ))
        ;
    }

    public function getName()
    {
        return 'cls_type_contact';
    }
}