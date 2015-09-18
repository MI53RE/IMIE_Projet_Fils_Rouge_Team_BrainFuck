<?php

/* TBFBundle:Users:index.html.twig */
class __TwigTemplate_a76b0712741ee1101456da60485e7ddf1404031ccc70efdce49579d0aae25bcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "TBFBundle:Users:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6d17848de6f37c983403def01fe7662ade896fdb3090ccdfafa8a14aa843838 = $this->env->getExtension("native_profiler");
        $__internal_d6d17848de6f37c983403def01fe7662ade896fdb3090ccdfafa8a14aa843838->enter($__internal_d6d17848de6f37c983403def01fe7662ade896fdb3090ccdfafa8a14aa843838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TBFBundle:Users:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6d17848de6f37c983403def01fe7662ade896fdb3090ccdfafa8a14aa843838->leave($__internal_d6d17848de6f37c983403def01fe7662ade896fdb3090ccdfafa8a14aa843838_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c02f067be8e5829cdebcfcc18b11aed7c23b19d4d4e013ac10a97cacb48f041 = $this->env->getExtension("native_profiler");
        $__internal_5c02f067be8e5829cdebcfcc18b11aed7c23b19d4d4e013ac10a97cacb48f041->enter($__internal_5c02f067be8e5829cdebcfcc18b11aed7c23b19d4d4e013ac10a97cacb48f041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "User";
        
        $__internal_5c02f067be8e5829cdebcfcc18b11aed7c23b19d4d4e013ac10a97cacb48f041->leave($__internal_5c02f067be8e5829cdebcfcc18b11aed7c23b19d4d4e013ac10a97cacb48f041_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7ab2c9e554e884a1caf91418e2ecb8e675fbf921b986447ea3a67b741ec98f8 = $this->env->getExtension("native_profiler");
        $__internal_e7ab2c9e554e884a1caf91418e2ecb8e675fbf921b986447ea3a67b741ec98f8->enter($__internal_e7ab2c9e554e884a1caf91418e2ecb8e675fbf921b986447ea3a67b741ec98f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "Users will be here!
";
        
        $__internal_e7ab2c9e554e884a1caf91418e2ecb8e675fbf921b986447ea3a67b741ec98f8->leave($__internal_e7ab2c9e554e884a1caf91418e2ecb8e675fbf921b986447ea3a67b741ec98f8_prof);

    }

    public function getTemplateName()
    {
        return "TBFBundle:Users:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
