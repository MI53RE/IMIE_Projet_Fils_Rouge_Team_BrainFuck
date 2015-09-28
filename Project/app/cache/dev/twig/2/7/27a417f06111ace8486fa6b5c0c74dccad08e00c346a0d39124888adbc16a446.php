<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_27a417f06111ace8486fa6b5c0c74dccad08e00c346a0d39124888adbc16a446 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08ccb44d88a50bb87a657066ba71820ab5b42c3e66df300dc07ed2724a9c96f0 = $this->env->getExtension("native_profiler");
        $__internal_08ccb44d88a50bb87a657066ba71820ab5b42c3e66df300dc07ed2724a9c96f0->enter($__internal_08ccb44d88a50bb87a657066ba71820ab5b42c3e66df300dc07ed2724a9c96f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08ccb44d88a50bb87a657066ba71820ab5b42c3e66df300dc07ed2724a9c96f0->leave($__internal_08ccb44d88a50bb87a657066ba71820ab5b42c3e66df300dc07ed2724a9c96f0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f23bff9c202f781557f87f0f4ff3c31fd34bbb09230ee3e490458708504132a8 = $this->env->getExtension("native_profiler");
        $__internal_f23bff9c202f781557f87f0f4ff3c31fd34bbb09230ee3e490458708504132a8->enter($__internal_f23bff9c202f781557f87f0f4ff3c31fd34bbb09230ee3e490458708504132a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_f23bff9c202f781557f87f0f4ff3c31fd34bbb09230ee3e490458708504132a8->leave($__internal_f23bff9c202f781557f87f0f4ff3c31fd34bbb09230ee3e490458708504132a8_prof);

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
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
