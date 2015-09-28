<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_0292bf185c8dcbc5c1720afcb8607716160e48da5545ce21c02f06aede5ccaa9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b74a5a1b35793effd669692b660136256439d91b36cd7157cd4d192e50907654 = $this->env->getExtension("native_profiler");
        $__internal_b74a5a1b35793effd669692b660136256439d91b36cd7157cd4d192e50907654->enter($__internal_b74a5a1b35793effd669692b660136256439d91b36cd7157cd4d192e50907654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b74a5a1b35793effd669692b660136256439d91b36cd7157cd4d192e50907654->leave($__internal_b74a5a1b35793effd669692b660136256439d91b36cd7157cd4d192e50907654_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_449a849539d6a6786541fb3eb9b5e732ce19198827b37f2d3bf005cd53c11d48 = $this->env->getExtension("native_profiler");
        $__internal_449a849539d6a6786541fb3eb9b5e732ce19198827b37f2d3bf005cd53c11d48->enter($__internal_449a849539d6a6786541fb3eb9b5e732ce19198827b37f2d3bf005cd53c11d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<div class=\"container confirmed\">
    <p class=\"save\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Utilisateur enregistré", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 8
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 9
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        // line 11
        echo "</div>
";
        
        $__internal_449a849539d6a6786541fb3eb9b5e732ce19198827b37f2d3bf005cd53c11d48->leave($__internal_449a849539d6a6786541fb3eb9b5e732ce19198827b37f2d3bf005cd53c11d48_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 11,  49 => 9,  47 => 8,  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
