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
        $__internal_80a0f56122830271401a1eb21d9f283aa714fd2f9c8abda3759566612341ec22 = $this->env->getExtension("native_profiler");
        $__internal_80a0f56122830271401a1eb21d9f283aa714fd2f9c8abda3759566612341ec22->enter($__internal_80a0f56122830271401a1eb21d9f283aa714fd2f9c8abda3759566612341ec22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TBFBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80a0f56122830271401a1eb21d9f283aa714fd2f9c8abda3759566612341ec22->leave($__internal_80a0f56122830271401a1eb21d9f283aa714fd2f9c8abda3759566612341ec22_prof);

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
