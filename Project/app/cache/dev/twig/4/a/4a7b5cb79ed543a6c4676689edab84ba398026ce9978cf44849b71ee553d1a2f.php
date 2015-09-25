<?php

/* TBFBundle:Default:index.html.twig */
class __TwigTemplate_4a7b5cb79ed543a6c4676689edab84ba398026ce9978cf44849b71ee553d1a2f extends Twig_Template
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
        $__internal_c97cf584ca1b70e02ee210ba85127dd19324f6faa27c40f981f702c0956819b2 = $this->env->getExtension("native_profiler");
        $__internal_c97cf584ca1b70e02ee210ba85127dd19324f6faa27c40f981f702c0956819b2->enter($__internal_c97cf584ca1b70e02ee210ba85127dd19324f6faa27c40f981f702c0956819b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TBFBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c97cf584ca1b70e02ee210ba85127dd19324f6faa27c40f981f702c0956819b2->leave($__internal_c97cf584ca1b70e02ee210ba85127dd19324f6faa27c40f981f702c0956819b2_prof);

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
