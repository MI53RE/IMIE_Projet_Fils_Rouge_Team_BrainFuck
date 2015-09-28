<?php

/* TBFBundle:Users:index.html.twig */
class __TwigTemplate_5dfd90d5cb41164ce7435513834ca6c0b4d5c85d1e70b63d806ccbb3a6210d2f extends Twig_Template
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
        $__internal_469bc41a609cafe97aefcff98fc91572bd67ed3e0631945b87a69ae77298b7ff = $this->env->getExtension("native_profiler");
        $__internal_469bc41a609cafe97aefcff98fc91572bd67ed3e0631945b87a69ae77298b7ff->enter($__internal_469bc41a609cafe97aefcff98fc91572bd67ed3e0631945b87a69ae77298b7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TBFBundle:Users:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_469bc41a609cafe97aefcff98fc91572bd67ed3e0631945b87a69ae77298b7ff->leave($__internal_469bc41a609cafe97aefcff98fc91572bd67ed3e0631945b87a69ae77298b7ff_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_21dd15fbafbe02cb04164c604dcecf70aaa4c892465c27d40b7d111c072d5ba6 = $this->env->getExtension("native_profiler");
        $__internal_21dd15fbafbe02cb04164c604dcecf70aaa4c892465c27d40b7d111c072d5ba6->enter($__internal_21dd15fbafbe02cb04164c604dcecf70aaa4c892465c27d40b7d111c072d5ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "User";
        
        $__internal_21dd15fbafbe02cb04164c604dcecf70aaa4c892465c27d40b7d111c072d5ba6->leave($__internal_21dd15fbafbe02cb04164c604dcecf70aaa4c892465c27d40b7d111c072d5ba6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e312cf5b52208b768d60e852df94ccd46606d1a19305c580a7b88fc0348714d8 = $this->env->getExtension("native_profiler");
        $__internal_e312cf5b52208b768d60e852df94ccd46606d1a19305c580a7b88fc0348714d8->enter($__internal_e312cf5b52208b768d60e852df94ccd46606d1a19305c580a7b88fc0348714d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "Users will be here!
";
        
        $__internal_e312cf5b52208b768d60e852df94ccd46606d1a19305c580a7b88fc0348714d8->leave($__internal_e312cf5b52208b768d60e852df94ccd46606d1a19305c580a7b88fc0348714d8_prof);

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
