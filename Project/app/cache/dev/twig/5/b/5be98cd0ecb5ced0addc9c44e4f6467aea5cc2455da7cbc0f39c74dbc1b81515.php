<?php

/* TBFBundle:Default:index.html.twig */
class __TwigTemplate_5be98cd0ecb5ced0addc9c44e4f6467aea5cc2455da7cbc0f39c74dbc1b81515 extends Twig_Template
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
        $__internal_9b2f54ed7dace98cb914955a7f53afb171b89e95a055479a54f310a05b9515a4 = $this->env->getExtension("native_profiler");
        $__internal_9b2f54ed7dace98cb914955a7f53afb171b89e95a055479a54f310a05b9515a4->enter($__internal_9b2f54ed7dace98cb914955a7f53afb171b89e95a055479a54f310a05b9515a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TBFBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b2f54ed7dace98cb914955a7f53afb171b89e95a055479a54f310a05b9515a4->leave($__internal_9b2f54ed7dace98cb914955a7f53afb171b89e95a055479a54f310a05b9515a4_prof);

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
