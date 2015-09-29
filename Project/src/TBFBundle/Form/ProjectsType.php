<?php

namespace TBFBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProjectsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('description')            
            ->add('skills','entity', array(
                'expanded' => true,
                'multiple' => true,
                'class' => 'TBFBundle:Skills',
                'property' => 'name',
                'query_builder' => function (\Doctrine\ORM\EntityRepository $repo) {
                     $qb = $repo->createQueryBuilder('s');
                     return $qb;
                }))
            ->add('ajouter', 'submit')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function setOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TBF\BackBundle\Entity\Projects'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tbf_backbundle_projects';
    }
}
