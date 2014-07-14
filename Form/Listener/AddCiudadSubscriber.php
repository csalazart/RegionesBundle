<?php

namespace SfVen\Bundle\RegionesBundle\Form\Listener;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\Exception\OutOfBoundsException;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * @author Manuel Aguirre <programador.manuel@gmail.com>
 */
class AddCiudadSubscriber implements EventSubscriberInterface
{

    /**
     *
     * @var array
     */
    protected $options;

    public function __construct(array $options = array())
    {
        $this->init($options);
    }

    protected function init(array $options)
    {
        $resolver = new OptionsResolver();

        $this->setDefaultOptions($resolver);

        $this->options = $resolver->resolve($options);
    }

    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::POST_SET_DATA => 'addForm',
            FormEvents::SUBMIT => 'addForm',
        );
    }

    public function addForm(FormEvent $event, $name)
    {
        $form = $event->getForm();
        $data = $event->getData();

        if (!isset($form[$this->options['estado_name']])) {
            throw new OutOfBoundsException(sprintf('Child "(estado_name => %s)" passed to AddCiudadSubscriber does not exist.', $this->options['estado_name']));
        }

        $estado = $form[$this->options['estado_name']]->getData();

        $form->add($this->options['name'], $this->options['type'], array(
            'query_builder' => function(EntityRepository $er) use ($estado) {
        return $er->createQueryBuilder('ciudad')
                        ->where('ciudad.estado = :val')
                        ->setParameter('val', $estado);
    }
                ) + $this->options['options']);
    }

    public function setDefaultOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'name' => 'ciudad',
            'type' => 'ciudad',
            'options' => array(),
            'estado_name' => 'estado',
        ));
    }

}
