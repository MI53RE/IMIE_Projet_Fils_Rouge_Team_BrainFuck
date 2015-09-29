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
            ->add('name', 'text', array('label' => 'Nom', 'attr'=> array('class' => 'form-control input-lg' )))
            ->add('description', 'text', array('label' => 'Description', 'attr'=> array('class' => 'form-control input-lg' )))           
            ->add('skills','entity', array(
                'expanded' => true,
                'multiple' => true,
                'class' => 'TBFBundle:Skills',
                'property' => 'name',
                'query_builder' => function (\Doctrine\ORM\EntityRepository $repo) {
                     $qb = $repo->createQueryBuilder('s');
                     return $qb;
                }))
            ->add('ajouter', 'submit', array('attr'=> array('class' => 'btn btn-primary btn-lgskills pull-left' )))
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
