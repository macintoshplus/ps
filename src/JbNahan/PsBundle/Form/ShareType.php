<?php

namespace JbNahan\PsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ShareType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dest')
            ->add('autoDeleteAt')
            ->add('viewTime')
            ->add('viewMaxCount')
            ->add('valitityTime')
            ->add('key')
            ->add('viewCount')
            ->add('album')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'JbNahan\PsBundle\Entity\Share'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'jbnahan_psbundle_share';
    }
}
