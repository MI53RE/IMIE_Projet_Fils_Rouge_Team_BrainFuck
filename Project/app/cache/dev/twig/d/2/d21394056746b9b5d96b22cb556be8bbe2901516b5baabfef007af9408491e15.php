<?php

/* TBFBundle:Default:index.html.twig */
class __TwigTemplate_d21394056746b9b5d96b22cb556be8bbe2901516b5baabfef007af9408491e15 extends Twig_Template
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
        $__internal_e746cbda4df32f3bc696b0a26474107996b4276ee5267f28bb60ee8cc16567cd = $this->env->getExtension("native_profiler");
        $__internal_e746cbda4df32f3bc696b0a26474107996b4276ee5267f28bb60ee8cc16567cd->enter($__internal_e746cbda4df32f3bc696b0a26474107996b4276ee5267f28bb60ee8cc16567cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TBFBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e746cbda4df32f3bc696b0a26474107996b4276ee5267f28bb60ee8cc16567cd->leave($__internal_e746cbda4df32f3bc696b0a26474107996b4276ee5267f28bb60ee8cc16567cd_prof);

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
