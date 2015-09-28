<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_dc0637d8125b25ee0c31243a035fa9365246be7e251f477bd13f46efba048f3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e8cf4dd3e7844c648b953b8d94af18e3cdc396f462093c260f3057a1bb93c43 = $this->env->getExtension("native_profiler");
        $__internal_5e8cf4dd3e7844c648b953b8d94af18e3cdc396f462093c260f3057a1bb93c43->enter($__internal_5e8cf4dd3e7844c648b953b8d94af18e3cdc396f462093c260f3057a1bb93c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e8cf4dd3e7844c648b953b8d94af18e3cdc396f462093c260f3057a1bb93c43->leave($__internal_5e8cf4dd3e7844c648b953b8d94af18e3cdc396f462093c260f3057a1bb93c43_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9d48828bbcf760d6724f1b28d455678bee14a53c292d1a2ff0256368b747e668 = $this->env->getExtension("native_profiler");
        $__internal_9d48828bbcf760d6724f1b28d455678bee14a53c292d1a2ff0256368b747e668->enter($__internal_9d48828bbcf760d6724f1b28d455678bee14a53c292d1a2ff0256368b747e668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9d48828bbcf760d6724f1b28d455678bee14a53c292d1a2ff0256368b747e668->leave($__internal_9d48828bbcf760d6724f1b28d455678bee14a53c292d1a2ff0256368b747e668_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3be1a8c0023afb534bab5f1f78bff99127a5378bb3dd4bd0053546617f1c90d0 = $this->env->getExtension("native_profiler");
        $__internal_3be1a8c0023afb534bab5f1f78bff99127a5378bb3dd4bd0053546617f1c90d0->enter($__internal_3be1a8c0023afb534bab5f1f78bff99127a5378bb3dd4bd0053546617f1c90d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3be1a8c0023afb534bab5f1f78bff99127a5378bb3dd4bd0053546617f1c90d0->leave($__internal_3be1a8c0023afb534bab5f1f78bff99127a5378bb3dd4bd0053546617f1c90d0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_695696950d72c43a90f5ce7f8a43bb38ff824e9294f1764df31fc2367d2846e2 = $this->env->getExtension("native_profiler");
        $__internal_695696950d72c43a90f5ce7f8a43bb38ff824e9294f1764df31fc2367d2846e2->enter($__internal_695696950d72c43a90f5ce7f8a43bb38ff824e9294f1764df31fc2367d2846e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_695696950d72c43a90f5ce7f8a43bb38ff824e9294f1764df31fc2367d2846e2->leave($__internal_695696950d72c43a90f5ce7f8a43bb38ff824e9294f1764df31fc2367d2846e2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
