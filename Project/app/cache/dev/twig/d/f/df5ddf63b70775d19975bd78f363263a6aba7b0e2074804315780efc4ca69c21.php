<?php

/* menu.html.twig */
class __TwigTemplate_df5ddf63b70775d19975bd78f363263a6aba7b0e2074804315780efc4ca69c21 extends Twig_Template
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
        $__internal_5ee274c950f7e23bad13be57de046635920b2f92bd7d364211eaa274b2e0070e = $this->env->getExtension("native_profiler");
        $__internal_5ee274c950f7e23bad13be57de046635920b2f92bd7d364211eaa274b2e0070e->enter($__internal_5ee274c950f7e23bad13be57de046635920b2f92bd7d364211eaa274b2e0070e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

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
    <form class=\"\" id=\"search\">
        <input type=\"text\" placeholder=\"Search...\"/>
        <button>Vas chercher!</button>
    </form>
</nav>";
        
        $__internal_5ee274c950f7e23bad13be57de046635920b2f92bd7d364211eaa274b2e0070e->leave($__internal_5ee274c950f7e23bad13be57de046635920b2f92bd7d364211eaa274b2e0070e_prof);

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
