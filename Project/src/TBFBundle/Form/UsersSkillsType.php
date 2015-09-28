<?php

namespace TBFBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class UsersSkillsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('level', 'choice', array(
        'choices' => array(
            '1' => 1,
            '2' => 2,
            '3' => 3,
            '4' => 4,
            '5' => 5,
            )))
            ->add('skills','entity', array(
                'class' => 'TBFBundle:Skills',
                'property' => 'name',
                'query_builder' => function (\Doctrine\ORM\EntityRepository $repo) {
                    $qb = $repo->createQueryBuilder('s');
                    return $qb;
                }))
            ->add('Ajouter une compétence', 'button', array(
                'attr' => array('class' => 'newSkill'),
            ));
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function setOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TBFBundle\Entity\UsersSkills'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tbfbundle_usersskills';
    }
}
