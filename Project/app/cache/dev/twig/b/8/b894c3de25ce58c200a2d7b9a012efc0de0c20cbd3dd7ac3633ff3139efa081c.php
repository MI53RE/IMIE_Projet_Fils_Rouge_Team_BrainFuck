<?php

/* TBFBundle:Projects:form.html.twig */
class __TwigTemplate_b894c3de25ce58c200a2d7b9a012efc0de0c20cbd3dd7ac3633ff3139efa081c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "TBFBundle:Projects:form.html.twig", 1);
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
        $__internal_8c84d17a07e209cb38d9453d91262e3b185ca48d03ae91890c15bc7919f81b6c = $this->env->getExtension("native_profiler");
        $__internal_8c84d17a07e209cb38d9453d91262e3b185ca48d03ae91890c15bc7919f81b6c->enter($__internal_8c84d17a07e209cb38d9453d91262e3b185ca48d03ae91890c15bc7919f81b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TBFBundle:Projects:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c84d17a07e209cb38d9453d91262e3b185ca48d03ae91890c15bc7919f81b6c->leave($__internal_8c84d17a07e209cb38d9453d91262e3b185ca48d03ae91890c15bc7919f81b6c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e41bb08574bcab0dddd647d71169d47e15f2d5821cdbc235e2ce1cd10be6c38c = $this->env->getExtension("native_profiler");
        $__internal_e41bb08574bcab0dddd647d71169d47e15f2d5821cdbc235e2ce1cd10be6c38c->enter($__internal_e41bb08574bcab0dddd647d71169d47e15f2d5821cdbc235e2ce1cd10be6c38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projects";
        
        $__internal_e41bb08574bcab0dddd647d71169d47e15f2d5821cdbc235e2ce1cd10be6c38c->leave($__internal_e41bb08574bcab0dddd647d71169d47e15f2d5821cdbc235e2ce1cd10be6c38c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd65aeebf35a4f53e219616a6baed5033ebdb3438cd126a074f2354f647bf604 = $this->env->getExtension("native_profiler");
        $__internal_fd65aeebf35a4f53e219616a6baed5033ebdb3438cd126a074f2354f647bf604->enter($__internal_fd65aeebf35a4f53e219616a6baed5033ebdb3438cd126a074f2354f647bf604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div>
\t";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
\t</div>
";
        
        $__internal_fd65aeebf35a4f53e219616a6baed5033ebdb3438cd126a074f2354f647bf604->leave($__internal_fd65aeebf35a4f53e219616a6baed5033ebdb3438cd126a074f2354f647bf604_prof);

    }

    public function getTemplateName()
    {
        return "TBFBundle:Projects:form.html.twig";
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
