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
        $__internal_ea0729ea7dbb8a2ed82df04cc7b281415b2ec0e094d56d5a586c507fbecf8550 = $this->env->getExtension("native_profiler");
        $__internal_ea0729ea7dbb8a2ed82df04cc7b281415b2ec0e094d56d5a586c507fbecf8550->enter($__internal_ea0729ea7dbb8a2ed82df04cc7b281415b2ec0e094d56d5a586c507fbecf8550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("tbf_users_index");
        echo "\">Utilisateurs</a>
        </li>
        <li role=\"presentation\">
          
        </li>
    </ul>
</nav>";
        
        $__internal_ea0729ea7dbb8a2ed82df04cc7b281415b2ec0e094d56d5a586c507fbecf8550->leave($__internal_ea0729ea7dbb8a2ed82df04cc7b281415b2ec0e094d56d5a586c507fbecf8550_prof);

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
