<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_0c6f019c0116fe79658c4e5f753edb14cc4941be85118b28f76f2810a28bfea2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78a5981f041a2a66a394048b0ba3200a80f2c89c0e1c9d056851a1ea7227a9c5 = $this->env->getExtension("native_profiler");
        $__internal_78a5981f041a2a66a394048b0ba3200a80f2c89c0e1c9d056851a1ea7227a9c5->enter($__internal_78a5981f041a2a66a394048b0ba3200a80f2c89c0e1c9d056851a1ea7227a9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78a5981f041a2a66a394048b0ba3200a80f2c89c0e1c9d056851a1ea7227a9c5->leave($__internal_78a5981f041a2a66a394048b0ba3200a80f2c89c0e1c9d056851a1ea7227a9c5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b46f9eec9d94c5ef5aa6963bfe77440b408376da338dd432517a8426f9ca290e = $this->env->getExtension("native_profiler");
        $__internal_b46f9eec9d94c5ef5aa6963bfe77440b408376da338dd432517a8426f9ca290e->enter($__internal_b46f9eec9d94c5ef5aa6963bfe77440b408376da338dd432517a8426f9ca290e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_b46f9eec9d94c5ef5aa6963bfe77440b408376da338dd432517a8426f9ca290e->leave($__internal_b46f9eec9d94c5ef5aa6963bfe77440b408376da338dd432517a8426f9ca290e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
