<?php

/* menu.html.twig */
class __TwigTemplate_710279bdd64c6ea44926d1a8f1ce50194baf21851391a2daa80e025626bb754f extends Twig_Template
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
        $__internal_e27783ab35570e118daa8f850645c0697563617a41a8de6d75f2b545f84bbef8 = $this->env->getExtension("native_profiler");
        $__internal_e27783ab35570e118daa8f850645c0697563617a41a8de6d75f2b545f84bbef8->enter($__internal_e27783ab35570e118daa8f850645c0697563617a41a8de6d75f2b545f84bbef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

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
        
        $__internal_e27783ab35570e118daa8f850645c0697563617a41a8de6d75f2b545f84bbef8->leave($__internal_e27783ab35570e118daa8f850645c0697563617a41a8de6d75f2b545f84bbef8_prof);

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
