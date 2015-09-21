<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d55d7abe5bca409e729b20f6f77132152a94c6b629b131c79e4f2eb7adaafbb3 extends Twig_Template
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
        $__internal_ad93c5e0a5fbe88c61e65f20380bf8b42f6befbd57f90d03b6c27e2fe87f1bd9 = $this->env->getExtension("native_profiler");
        $__internal_ad93c5e0a5fbe88c61e65f20380bf8b42f6befbd57f90d03b6c27e2fe87f1bd9->enter($__internal_ad93c5e0a5fbe88c61e65f20380bf8b42f6befbd57f90d03b6c27e2fe87f1bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad93c5e0a5fbe88c61e65f20380bf8b42f6befbd57f90d03b6c27e2fe87f1bd9->leave($__internal_ad93c5e0a5fbe88c61e65f20380bf8b42f6befbd57f90d03b6c27e2fe87f1bd9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5e944856d2af9d58d9aee5a3077c9f6ff246546ee5e35e5660e3c94f8fbbd5bd = $this->env->getExtension("native_profiler");
        $__internal_5e944856d2af9d58d9aee5a3077c9f6ff246546ee5e35e5660e3c94f8fbbd5bd->enter($__internal_5e944856d2af9d58d9aee5a3077c9f6ff246546ee5e35e5660e3c94f8fbbd5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5e944856d2af9d58d9aee5a3077c9f6ff246546ee5e35e5660e3c94f8fbbd5bd->leave($__internal_5e944856d2af9d58d9aee5a3077c9f6ff246546ee5e35e5660e3c94f8fbbd5bd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_38527110fc7578855d9e9925ab9939af06ba832e8a00af6e6e97545191585187 = $this->env->getExtension("native_profiler");
        $__internal_38527110fc7578855d9e9925ab9939af06ba832e8a00af6e6e97545191585187->enter($__internal_38527110fc7578855d9e9925ab9939af06ba832e8a00af6e6e97545191585187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_38527110fc7578855d9e9925ab9939af06ba832e8a00af6e6e97545191585187->leave($__internal_38527110fc7578855d9e9925ab9939af06ba832e8a00af6e6e97545191585187_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf13ff75917851549179c43419d943266404b28d54a2ae5b5669531360c95a1c = $this->env->getExtension("native_profiler");
        $__internal_cf13ff75917851549179c43419d943266404b28d54a2ae5b5669531360c95a1c->enter($__internal_cf13ff75917851549179c43419d943266404b28d54a2ae5b5669531360c95a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_cf13ff75917851549179c43419d943266404b28d54a2ae5b5669531360c95a1c->leave($__internal_cf13ff75917851549179c43419d943266404b28d54a2ae5b5669531360c95a1c_prof);

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
