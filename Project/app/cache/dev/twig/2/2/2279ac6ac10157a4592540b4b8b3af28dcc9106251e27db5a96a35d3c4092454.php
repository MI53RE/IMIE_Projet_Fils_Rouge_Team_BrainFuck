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
        $__internal_146025c1748690274a997e1cf0ea75b1a49a330945629e6606e033b829556fce = $this->env->getExtension("native_profiler");
        $__internal_146025c1748690274a997e1cf0ea75b1a49a330945629e6606e033b829556fce->enter($__internal_146025c1748690274a997e1cf0ea75b1a49a330945629e6606e033b829556fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TBFBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_146025c1748690274a997e1cf0ea75b1a49a330945629e6606e033b829556fce->leave($__internal_146025c1748690274a997e1cf0ea75b1a49a330945629e6606e033b829556fce_prof);

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
