<?php

/* TBFBundle:Default:index.html.twig */
class __TwigTemplate_2279ac6ac10157a4592540b4b8b3af28dcc9106251e27db5a96a35d3c4092454 extends Twig_Template
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
        $__internal_d4f0dc68413a1091cb99c24fa707f2e8e96c4ebb6209ca591797cc6190d1af45 = $this->env->getExtension("native_profiler");
        $__internal_d4f0dc68413a1091cb99c24fa707f2e8e96c4ebb6209ca591797cc6190d1af45->enter($__internal_d4f0dc68413a1091cb99c24fa707f2e8e96c4ebb6209ca591797cc6190d1af45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TBFBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4f0dc68413a1091cb99c24fa707f2e8e96c4ebb6209ca591797cc6190d1af45->leave($__internal_d4f0dc68413a1091cb99c24fa707f2e8e96c4ebb6209ca591797cc6190d1af45_prof);

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
