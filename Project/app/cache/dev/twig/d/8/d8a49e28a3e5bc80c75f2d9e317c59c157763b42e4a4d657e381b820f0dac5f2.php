<?php

/* TBFBundle:Skills:add.html.twig */
class __TwigTemplate_d8a49e28a3e5bc80c75f2d9e317c59c157763b42e4a4d657e381b820f0dac5f2 extends Twig_Template
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
        $__internal_e4029ccff820d46d85fd31ef6230ecdbbaeacbdcfc70898fb68b6f4d1c54fbab = $this->env->getExtension("native_profiler");
        $__internal_e4029ccff820d46d85fd31ef6230ecdbbaeacbdcfc70898fb68b6f4d1c54fbab->enter($__internal_e4029ccff820d46d85fd31ef6230ecdbbaeacbdcfc70898fb68b6f4d1c54fbab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TBFBundle:Skills:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4029ccff820d46d85fd31ef6230ecdbbaeacbdcfc70898fb68b6f4d1c54fbab->leave($__internal_e4029ccff820d46d85fd31ef6230ecdbbaeacbdcfc70898fb68b6f4d1c54fbab_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c84dbb8f92ba6d35d16e298f95be768879c86a95f89caa4b0f268bce15892828 = $this->env->getExtension("native_profiler");
        $__internal_c84dbb8f92ba6d35d16e298f95be768879c86a95f89caa4b0f268bce15892828->enter($__internal_c84dbb8f92ba6d35d16e298f95be768879c86a95f89caa4b0f268bce15892828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Skill";
        
        $__internal_c84dbb8f92ba6d35d16e298f95be768879c86a95f89caa4b0f268bce15892828->leave($__internal_c84dbb8f92ba6d35d16e298f95be768879c86a95f89caa4b0f268bce15892828_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c5eec63ba75e686e0f23a0a3349ba2b7efd6afaa42839df4abccb3ba838d97a = $this->env->getExtension("native_profiler");
        $__internal_1c5eec63ba75e686e0f23a0a3349ba2b7efd6afaa42839df4abccb3ba838d97a->enter($__internal_1c5eec63ba75e686e0f23a0a3349ba2b7efd6afaa42839df4abccb3ba838d97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div>
\t";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
\t</div>
";
        
        $__internal_1c5eec63ba75e686e0f23a0a3349ba2b7efd6afaa42839df4abccb3ba838d97a->leave($__internal_1c5eec63ba75e686e0f23a0a3349ba2b7efd6afaa42839df4abccb3ba838d97a_prof);

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
