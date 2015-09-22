<?php

/* TBFBundle:Users:index.html.twig */
class __TwigTemplate_be3bde92a4821cb399a4f23ef69e0edad9416bb202869e3601781b4cc701b927 extends Twig_Template
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
        $__internal_c13e2afe38e14f41cc53b02cb6b134a5711e3bfb844b6c6350be24f0e8fae7e1 = $this->env->getExtension("native_profiler");
        $__internal_c13e2afe38e14f41cc53b02cb6b134a5711e3bfb844b6c6350be24f0e8fae7e1->enter($__internal_c13e2afe38e14f41cc53b02cb6b134a5711e3bfb844b6c6350be24f0e8fae7e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TBFBundle:Users:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c13e2afe38e14f41cc53b02cb6b134a5711e3bfb844b6c6350be24f0e8fae7e1->leave($__internal_c13e2afe38e14f41cc53b02cb6b134a5711e3bfb844b6c6350be24f0e8fae7e1_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a035d3698695582f14e82ca9227d1496002d4db3f72d541a6008b25a1c5dee9 = $this->env->getExtension("native_profiler");
        $__internal_9a035d3698695582f14e82ca9227d1496002d4db3f72d541a6008b25a1c5dee9->enter($__internal_9a035d3698695582f14e82ca9227d1496002d4db3f72d541a6008b25a1c5dee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "User";
        
        $__internal_9a035d3698695582f14e82ca9227d1496002d4db3f72d541a6008b25a1c5dee9->leave($__internal_9a035d3698695582f14e82ca9227d1496002d4db3f72d541a6008b25a1c5dee9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a90bbf891a05d42e369c59c50c6beec08d0003517c9eb6cf49c02d9519cf6e63 = $this->env->getExtension("native_profiler");
        $__internal_a90bbf891a05d42e369c59c50c6beec08d0003517c9eb6cf49c02d9519cf6e63->enter($__internal_a90bbf891a05d42e369c59c50c6beec08d0003517c9eb6cf49c02d9519cf6e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "Users will be here!
";
        
        $__internal_a90bbf891a05d42e369c59c50c6beec08d0003517c9eb6cf49c02d9519cf6e63->leave($__internal_a90bbf891a05d42e369c59c50c6beec08d0003517c9eb6cf49c02d9519cf6e63_prof);

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
