<?php

/*
 * 
 */

namespace SfVen\Bundle\RegionesBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 *
 * @author Manuel Aguirre <programador.manuel@gmail.com>
 */
class EstadoType extends AbstractType
{

    public function getName()
    {
        return 'estado';
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver);
        
        $resolver->setDefaults(array(
            'class' => 'SfVenRegionesBundle:Estado',
        ));
    }

    public function getParent()
    {
        return 'entity';
    }

}
