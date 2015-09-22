<?php

/* menu.html.twig */
class __TwigTemplate_b95bee7c6e436305540644eda1b83f86cc50efaa2c5527ce3b7384bc61c86061 extends Twig_Template
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
        $__internal_7c8e4f09fb9989c0a4ab944b50f53211991230813acd3bbfd2ccf3b272ce4ae8 = $this->env->getExtension("native_profiler");
        $__internal_7c8e4f09fb9989c0a4ab944b50f53211991230813acd3bbfd2ccf3b272ce4ae8->enter($__internal_7c8e4f09fb9989c0a4ab944b50f53211991230813acd3bbfd2ccf3b272ce4ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

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
        
        $__internal_7c8e4f09fb9989c0a4ab944b50f53211991230813acd3bbfd2ccf3b272ce4ae8->leave($__internal_7c8e4f09fb9989c0a4ab944b50f53211991230813acd3bbfd2ccf3b272ce4ae8_prof);

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
