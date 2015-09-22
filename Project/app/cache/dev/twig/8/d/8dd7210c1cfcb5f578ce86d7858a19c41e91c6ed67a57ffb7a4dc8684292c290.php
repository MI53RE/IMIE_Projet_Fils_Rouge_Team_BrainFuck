<?php

/* TBFBundle:Users:index.html.twig */
class __TwigTemplate_8dd7210c1cfcb5f578ce86d7858a19c41e91c6ed67a57ffb7a4dc8684292c290 extends Twig_Template
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
        $__internal_aed4085e6a24c0046612115b4e41d8433fc6b52a2069899a67a5d6691e85bdf4 = $this->env->getExtension("native_profiler");
        $__internal_aed4085e6a24c0046612115b4e41d8433fc6b52a2069899a67a5d6691e85bdf4->enter($__internal_aed4085e6a24c0046612115b4e41d8433fc6b52a2069899a67a5d6691e85bdf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TBFBundle:Users:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aed4085e6a24c0046612115b4e41d8433fc6b52a2069899a67a5d6691e85bdf4->leave($__internal_aed4085e6a24c0046612115b4e41d8433fc6b52a2069899a67a5d6691e85bdf4_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_99e29885ac02a67db07b4f7e8091ddb6590023defa6b11a2ed777964e0c95d4b = $this->env->getExtension("native_profiler");
        $__internal_99e29885ac02a67db07b4f7e8091ddb6590023defa6b11a2ed777964e0c95d4b->enter($__internal_99e29885ac02a67db07b4f7e8091ddb6590023defa6b11a2ed777964e0c95d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "User";
        
        $__internal_99e29885ac02a67db07b4f7e8091ddb6590023defa6b11a2ed777964e0c95d4b->leave($__internal_99e29885ac02a67db07b4f7e8091ddb6590023defa6b11a2ed777964e0c95d4b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c50e4f4254fde46185127fdfe6970d9dcb224dbe4c9e53b95dc40b4dd11bf20 = $this->env->getExtension("native_profiler");
        $__internal_1c50e4f4254fde46185127fdfe6970d9dcb224dbe4c9e53b95dc40b4dd11bf20->enter($__internal_1c50e4f4254fde46185127fdfe6970d9dcb224dbe4c9e53b95dc40b4dd11bf20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "Users will be here!
";
        
        $__internal_1c50e4f4254fde46185127fdfe6970d9dcb224dbe4c9e53b95dc40b4dd11bf20->leave($__internal_1c50e4f4254fde46185127fdfe6970d9dcb224dbe4c9e53b95dc40b4dd11bf20_prof);

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
