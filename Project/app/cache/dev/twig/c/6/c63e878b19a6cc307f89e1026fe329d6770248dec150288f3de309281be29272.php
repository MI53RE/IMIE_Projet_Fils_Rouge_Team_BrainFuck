<?php

/* menu.html.twig */
class __TwigTemplate_c63e878b19a6cc307f89e1026fe329d6770248dec150288f3de309281be29272 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_20d61d9c6473a7ff38dce2db09fbc4cae39f5e352742f078f224464acee4a461 = $this->env->getExtension("native_profiler");
        $__internal_20d61d9c6473a7ff38dce2db09fbc4cae39f5e352742f078f224464acee4a461->enter($__internal_20d61d9c6473a7ff38dce2db09fbc4cae39f5e352742f078f224464acee4a461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 1
        echo "<nav>
    <ul class=\"nav nav-tabs\">
        <li role=\"presentation\">
            <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("tbf_homepage");
        echo "\">Accueil</a>
        </li>
        <li role=\"presentation\">
            <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("tbf_skills_index");
        echo "\">Compétences</a>
        </li>
        <li role=\"presentation\">
            <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("tbf_projects");
        echo "\">Projets</a>
        </li>
        <li role=\"presentation\">
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("tbf_users");
        echo "\">Utilisateurs</a>
        </li>
        <li role=\"presentation\">
          
        </li>
    </ul>
</nav>";
        
        $__internal_20d61d9c6473a7ff38dce2db09fbc4cae39f5e352742f078f224464acee4a461->leave($__internal_20d61d9c6473a7ff38dce2db09fbc4cae39f5e352742f078f224464acee4a461_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 13,  39 => 10,  33 => 7,  27 => 4,  22 => 1,);
    }
}