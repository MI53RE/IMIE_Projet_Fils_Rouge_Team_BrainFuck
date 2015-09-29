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
        $__internal_a62199c0d888d1a9e1cdbe1bbc5e9ca3264488949c1dc89b346217b6a35911b3 = $this->env->getExtension("native_profiler");
        $__internal_a62199c0d888d1a9e1cdbe1bbc5e9ca3264488949c1dc89b346217b6a35911b3->enter($__internal_a62199c0d888d1a9e1cdbe1bbc5e9ca3264488949c1dc89b346217b6a35911b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a62199c0d888d1a9e1cdbe1bbc5e9ca3264488949c1dc89b346217b6a35911b3->leave($__internal_a62199c0d888d1a9e1cdbe1bbc5e9ca3264488949c1dc89b346217b6a35911b3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_07816caee75fc14446344d0bfd56d0742520c08358ab42005906337bae7d5f0e = $this->env->getExtension("native_profiler");
        $__internal_07816caee75fc14446344d0bfd56d0742520c08358ab42005906337bae7d5f0e->enter($__internal_07816caee75fc14446344d0bfd56d0742520c08358ab42005906337bae7d5f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_07816caee75fc14446344d0bfd56d0742520c08358ab42005906337bae7d5f0e->leave($__internal_07816caee75fc14446344d0bfd56d0742520c08358ab42005906337bae7d5f0e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa2c7d5a436a70d8c7f13494d3f0f972a0518af7619096ecb553763078939a84 = $this->env->getExtension("native_profiler");
        $__internal_aa2c7d5a436a70d8c7f13494d3f0f972a0518af7619096ecb553763078939a84->enter($__internal_aa2c7d5a436a70d8c7f13494d3f0f972a0518af7619096ecb553763078939a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_aa2c7d5a436a70d8c7f13494d3f0f972a0518af7619096ecb553763078939a84->leave($__internal_aa2c7d5a436a70d8c7f13494d3f0f972a0518af7619096ecb553763078939a84_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ea4e17982e3a0543bc5f1a54983cbfba5f707626e360303ec263f542e1944ce = $this->env->getExtension("native_profiler");
        $__internal_9ea4e17982e3a0543bc5f1a54983cbfba5f707626e360303ec263f542e1944ce->enter($__internal_9ea4e17982e3a0543bc5f1a54983cbfba5f707626e360303ec263f542e1944ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9ea4e17982e3a0543bc5f1a54983cbfba5f707626e360303ec263f542e1944ce->leave($__internal_9ea4e17982e3a0543bc5f1a54983cbfba5f707626e360303ec263f542e1944ce_prof);

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
