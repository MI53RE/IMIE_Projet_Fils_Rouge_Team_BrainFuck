<?php

/* TBFBundle:Skills:add.html.twig */
class __TwigTemplate_20b26d7ff401fbd5a3ff58dabd94ad8a8f61a6615d63d58c804dbcdfd850cc62 extends Twig_Template
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
        $__internal_b720b197316454466d1ec6d49d98e2c2bb41ae26262eae7c3b975399ca420b01 = $this->env->getExtension("native_profiler");
        $__internal_b720b197316454466d1ec6d49d98e2c2bb41ae26262eae7c3b975399ca420b01->enter($__internal_b720b197316454466d1ec6d49d98e2c2bb41ae26262eae7c3b975399ca420b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TBFBundle:Skills:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b720b197316454466d1ec6d49d98e2c2bb41ae26262eae7c3b975399ca420b01->leave($__internal_b720b197316454466d1ec6d49d98e2c2bb41ae26262eae7c3b975399ca420b01_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4b20e7d1dc7ca3f247ab773f57766e2b0b9f017271343f0976fad1bcc05d5ba = $this->env->getExtension("native_profiler");
        $__internal_c4b20e7d1dc7ca3f247ab773f57766e2b0b9f017271343f0976fad1bcc05d5ba->enter($__internal_c4b20e7d1dc7ca3f247ab773f57766e2b0b9f017271343f0976fad1bcc05d5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Skill";
        
        $__internal_c4b20e7d1dc7ca3f247ab773f57766e2b0b9f017271343f0976fad1bcc05d5ba->leave($__internal_c4b20e7d1dc7ca3f247ab773f57766e2b0b9f017271343f0976fad1bcc05d5ba_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e47c9882f7e64d10a3139e957fd677ede5a33acdf315ee9de3e3279c4fedddac = $this->env->getExtension("native_profiler");
        $__internal_e47c9882f7e64d10a3139e957fd677ede5a33acdf315ee9de3e3279c4fedddac->enter($__internal_e47c9882f7e64d10a3139e957fd677ede5a33acdf315ee9de3e3279c4fedddac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div>
\t";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
\t</div>
";
        
        $__internal_e47c9882f7e64d10a3139e957fd677ede5a33acdf315ee9de3e3279c4fedddac->leave($__internal_e47c9882f7e64d10a3139e957fd677ede5a33acdf315ee9de3e3279c4fedddac_prof);

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
