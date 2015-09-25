<?php

/* menu.html.twig */
class __TwigTemplate_b45f87195b06766d4bd7a819bcce779f5481db4de6ae3d22e966a96e3f1c90fa extends Twig_Template
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
        $__internal_dd7a34247ee65302de9d608864eff152a3f68353cf951f77c02ccc33d9f31294 = $this->env->getExtension("native_profiler");
        $__internal_dd7a34247ee65302de9d608864eff152a3f68353cf951f77c02ccc33d9f31294->enter($__internal_dd7a34247ee65302de9d608864eff152a3f68353cf951f77c02ccc33d9f31294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

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
        
        $__internal_dd7a34247ee65302de9d608864eff152a3f68353cf951f77c02ccc33d9f31294->leave($__internal_dd7a34247ee65302de9d608864eff152a3f68353cf951f77c02ccc33d9f31294_prof);

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
