<?php

/* TBFBundle:Default:index.html.twig */
class __TwigTemplate_2b19062bf2cb363a36c26c49de702f93814bf3685dd9432093ea82264d63ee6c extends Twig_Template
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
        $__internal_c0ffc3cacdf7791a40371336d8795c719c816dd7aaa081396715c7fdd7a679fd = $this->env->getExtension("native_profiler");
        $__internal_c0ffc3cacdf7791a40371336d8795c719c816dd7aaa081396715c7fdd7a679fd->enter($__internal_c0ffc3cacdf7791a40371336d8795c719c816dd7aaa081396715c7fdd7a679fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TBFBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0ffc3cacdf7791a40371336d8795c719c816dd7aaa081396715c7fdd7a679fd->leave($__internal_c0ffc3cacdf7791a40371336d8795c719c816dd7aaa081396715c7fdd7a679fd_prof);

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
