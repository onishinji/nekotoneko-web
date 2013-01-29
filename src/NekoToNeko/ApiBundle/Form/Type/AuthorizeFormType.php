<?php

namespace NekoToNeko\ApiBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AuthorizeFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('client_id', 'hidden');
        $builder->add('response_type', 'hidden');
        $builder->add('redirect_uri', 'hidden');
        $builder->add('state', 'hidden');
        $builder->add('scope', 'hidden');
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'NekoToNeko\ApiBundle\Form\Model\Authorize'
        ));
    }

    public function getDefaultOptions(array $options)
    {
        return array('data_class' => 'NekoToNeko\ApiBundle\Form\Model\Authorize');
    }

    public function getName()
    {
        return 'nekotoneko_oauth_server_authorize';
    }
    
}
