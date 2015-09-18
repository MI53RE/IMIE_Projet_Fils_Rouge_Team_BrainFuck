<?php

/* TBFBundle:Default:index.html.twig */
class __TwigTemplate_f5e6b37a37e02c23336dc7c56ee0396abe429792b7e69e22ef9068c4c98d4767 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "TBFBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64d5e3bbc009776773e18fa6db78a407e537963ef7c6efbab03f851e1f086c67 = $this->env->getExtension("native_profiler");
        $__internal_64d5e3bbc009776773e18fa6db78a407e537963ef7c6efbab03f851e1f086c67->enter($__internal_64d5e3bbc009776773e18fa6db78a407e537963ef7c6efbab03f851e1f086c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TBFBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64d5e3bbc009776773e18fa6db78a407e537963ef7c6efbab03f851e1f086c67->leave($__internal_64d5e3bbc009776773e18fa6db78a407e537963ef7c6efbab03f851e1f086c67_prof);

    }

    public function getTemplateName()
    {
        return "TBFBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
