<?php

namespace Earls\LeaseBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RiskinfoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('rentabatement', 'text')
            ->add('exteriormaintenance', 'text')
            ->add('constructionid', 'entity', array(
                'class' => 'EarlsLeaseBundle:Constructiontypes',
                'property' => 'constructiontype'
            ))
            ->add('insuredby', 'entity', array(
                'class' => 'EarlsLeaseBundle:Owners',
                'property' => 'ownertype'
            ))
            //->add('restaurantid')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Earls\LeaseBundle\Entity\Riskinfo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'earls_leasebundle_riskinfo';
    }
}
