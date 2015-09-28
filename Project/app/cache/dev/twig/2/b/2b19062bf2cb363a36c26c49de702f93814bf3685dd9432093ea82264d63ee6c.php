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
        $__internal_492f85153b849b137b2a46d91a9ef74fbf7735871a4dc79525acdffcd1b509b5 = $this->env->getExtension("native_profiler");
        $__internal_492f85153b849b137b2a46d91a9ef74fbf7735871a4dc79525acdffcd1b509b5->enter($__internal_492f85153b849b137b2a46d91a9ef74fbf7735871a4dc79525acdffcd1b509b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TBFBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_492f85153b849b137b2a46d91a9ef74fbf7735871a4dc79525acdffcd1b509b5->leave($__internal_492f85153b849b137b2a46d91a9ef74fbf7735871a4dc79525acdffcd1b509b5_prof);

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
