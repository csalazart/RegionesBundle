<?php

/*
 * 
 */

namespace SfVen\Bundle\RegionesBundle\Form\Type;

use Doctrine\ORM\EntityRepository;
use Exception;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 *
 * @author Manuel Aguirre <programador.manuel@gmail.com>
 */
class CiudadType extends AbstractType
{

    public function getName()
    {
        return 'ciudad';
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver);

        $resolver->setDefaults(array(
            'class' => 'SfVenRegionesBundle:Ciudad',
        ));
    }

    public function getParent()
    {
        return 'entity';
    }

}