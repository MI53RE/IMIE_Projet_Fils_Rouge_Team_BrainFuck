<?php

/* TBFBundle:Skills:add.html.twig */
class __TwigTemplate_be531ce546f1a3bc3a68b8657c4ce64c6b6dcccc559f8556d2025065bbc59bc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "TBFBundle:Skills:add.html.twig", 1);
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
        $__internal_b7051a75bb773727690a0ff7a3c3472b8d70369bc4b2ca505ddd420d4b710b83 = $this->env->getExtension("native_profiler");
        $__internal_b7051a75bb773727690a0ff7a3c3472b8d70369bc4b2ca505ddd420d4b710b83->enter($__internal_b7051a75bb773727690a0ff7a3c3472b8d70369bc4b2ca505ddd420d4b710b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TBFBundle:Skills:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7051a75bb773727690a0ff7a3c3472b8d70369bc4b2ca505ddd420d4b710b83->leave($__internal_b7051a75bb773727690a0ff7a3c3472b8d70369bc4b2ca505ddd420d4b710b83_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_13217c9cb2785d66cdc08198cea89240de6d5cd3a79e3d4638e8810d3d339f06 = $this->env->getExtension("native_profiler");
        $__internal_13217c9cb2785d66cdc08198cea89240de6d5cd3a79e3d4638e8810d3d339f06->enter($__internal_13217c9cb2785d66cdc08198cea89240de6d5cd3a79e3d4638e8810d3d339f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Skill";
        
        $__internal_13217c9cb2785d66cdc08198cea89240de6d5cd3a79e3d4638e8810d3d339f06->leave($__internal_13217c9cb2785d66cdc08198cea89240de6d5cd3a79e3d4638e8810d3d339f06_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e2d21f3cf677f1896ac82c65998522d68b610b433c9e1bf588036ac1f4641a8 = $this->env->getExtension("native_profiler");
        $__internal_0e2d21f3cf677f1896ac82c65998522d68b610b433c9e1bf588036ac1f4641a8->enter($__internal_0e2d21f3cf677f1896ac82c65998522d68b610b433c9e1bf588036ac1f4641a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div>
\t";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
\t</div>
";
        
        $__internal_0e2d21f3cf677f1896ac82c65998522d68b610b433c9e1bf588036ac1f4641a8->leave($__internal_0e2d21f3cf677f1896ac82c65998522d68b610b433c9e1bf588036ac1f4641a8_prof);

    }

    public function getTemplateName()
    {
        return "TBFBundle:Skills:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 5,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
