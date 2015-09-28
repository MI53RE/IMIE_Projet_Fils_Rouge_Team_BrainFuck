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
        $__internal_418a2881f1c62c658e3407d516019fbbeff1eab72d3351a2d91d73a4ef08972e = $this->env->getExtension("native_profiler");
        $__internal_418a2881f1c62c658e3407d516019fbbeff1eab72d3351a2d91d73a4ef08972e->enter($__internal_418a2881f1c62c658e3407d516019fbbeff1eab72d3351a2d91d73a4ef08972e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 1
        echo "<div class=\"container\">
    <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
    </div>
    <div class=\"navbar-collapse collapse\"> 
        <ul class=\"nav navbar-nav navbar-left\">
            <li role=\"presentation\">
                <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("tbf_homepage");
        echo "\">Accueil</a>
            </li>
            <li role=\"presentation\">
                <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("tbf_skills_index");
        echo "\">Compétences</a>
            </li>
            <li role=\"presentation\">
                <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("tbf_projects");
        echo "\">Projets</a>
            </li>
            <li role=\"presentation\">
                <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("tbf_users_index");
        echo "\">Utilisateurs</a>
            </li>
            <li role=\"presentation\">
            </li>
        </ul>
    </div>
</div>

";
        
        $__internal_418a2881f1c62c658e3407d516019fbbeff1eab72d3351a2d91d73a4ef08972e->leave($__internal_418a2881f1c62c658e3407d516019fbbeff1eab72d3351a2d91d73a4ef08972e_prof);

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
        return array (  54 => 22,  48 => 19,  42 => 16,  36 => 13,  22 => 1,);
    }
}
