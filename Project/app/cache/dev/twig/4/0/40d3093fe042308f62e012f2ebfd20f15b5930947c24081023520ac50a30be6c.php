<?php

/* menu.html.twig */
class __TwigTemplate_40d3093fe042308f62e012f2ebfd20f15b5930947c24081023520ac50a30be6c extends Twig_Template
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
        $__internal_f3ff0546c88b3c5c65e8b635d269e2d5fa8acaab313d5fe2cfa36ed22e9771cf = $this->env->getExtension("native_profiler");
        $__internal_f3ff0546c88b3c5c65e8b635d269e2d5fa8acaab313d5fe2cfa36ed22e9771cf->enter($__internal_f3ff0546c88b3c5c65e8b635d269e2d5fa8acaab313d5fe2cfa36ed22e9771cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

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
        
        $__internal_f3ff0546c88b3c5c65e8b635d269e2d5fa8acaab313d5fe2cfa36ed22e9771cf->leave($__internal_f3ff0546c88b3c5c65e8b635d269e2d5fa8acaab313d5fe2cfa36ed22e9771cf_prof);

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
