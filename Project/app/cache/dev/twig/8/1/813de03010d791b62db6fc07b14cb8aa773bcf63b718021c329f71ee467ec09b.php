<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_813de03010d791b62db6fc07b14cb8aa773bcf63b718021c329f71ee467ec09b extends Twig_Template
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
        $__internal_77b4295ddc8728189433ef6d9b162c46a075b9f460bd79c3bdafb2fe388ee6d1 = $this->env->getExtension("native_profiler");
        $__internal_77b4295ddc8728189433ef6d9b162c46a075b9f460bd79c3bdafb2fe388ee6d1->enter($__internal_77b4295ddc8728189433ef6d9b162c46a075b9f460bd79c3bdafb2fe388ee6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77b4295ddc8728189433ef6d9b162c46a075b9f460bd79c3bdafb2fe388ee6d1->leave($__internal_77b4295ddc8728189433ef6d9b162c46a075b9f460bd79c3bdafb2fe388ee6d1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7538c2a5c3552d15c85342c19ded65ad7cf516a24ad36734f51fda5fe22191ab = $this->env->getExtension("native_profiler");
        $__internal_7538c2a5c3552d15c85342c19ded65ad7cf516a24ad36734f51fda5fe22191ab->enter($__internal_7538c2a5c3552d15c85342c19ded65ad7cf516a24ad36734f51fda5fe22191ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7538c2a5c3552d15c85342c19ded65ad7cf516a24ad36734f51fda5fe22191ab->leave($__internal_7538c2a5c3552d15c85342c19ded65ad7cf516a24ad36734f51fda5fe22191ab_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c5377869feaf8c050942138b83d3242fdcfd4c27d3cfcab46a18e6fb7520293 = $this->env->getExtension("native_profiler");
        $__internal_4c5377869feaf8c050942138b83d3242fdcfd4c27d3cfcab46a18e6fb7520293->enter($__internal_4c5377869feaf8c050942138b83d3242fdcfd4c27d3cfcab46a18e6fb7520293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4c5377869feaf8c050942138b83d3242fdcfd4c27d3cfcab46a18e6fb7520293->leave($__internal_4c5377869feaf8c050942138b83d3242fdcfd4c27d3cfcab46a18e6fb7520293_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_23a7ed52f5ee5c7d7cc06e9d23d4c25f28b08d81861f5d18ea49447bc3a6aede = $this->env->getExtension("native_profiler");
        $__internal_23a7ed52f5ee5c7d7cc06e9d23d4c25f28b08d81861f5d18ea49447bc3a6aede->enter($__internal_23a7ed52f5ee5c7d7cc06e9d23d4c25f28b08d81861f5d18ea49447bc3a6aede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_23a7ed52f5ee5c7d7cc06e9d23d4c25f28b08d81861f5d18ea49447bc3a6aede->leave($__internal_23a7ed52f5ee5c7d7cc06e9d23d4c25f28b08d81861f5d18ea49447bc3a6aede_prof);

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
