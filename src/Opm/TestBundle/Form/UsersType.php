<?php

namespace Opm\TestBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class UsersType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
     $builder
            ->add('nom','text',array('label'=>'Nom:'))
            ->add('prenom','text',array('label'=>'Prenom:'))
            ->add('age','text',array('label'=>'Date Naissance:'))
            ->add('login','text',array('label'=>'Login:'))
            ->add('pwd','password',array('label'=>'Mot de passe:'))
            ->add('Fonction')
        ;
    }

    public function getName()
    {
        return 'opm_testbundle_userstype';
    }
}
