<?php

/* TBFBundle:Skills:index.html.twig */
class __TwigTemplate_317a81689fec5d409f62db3c2b52faa6049e314cdda905fea23472bafce67c78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "TBFBundle:Skills:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_644376749d9a1cb39ef44ffb8ebfa4bf6d6ed43e045c8ad4142cdb347b8db838 = $this->env->getExtension("native_profiler");
        $__internal_644376749d9a1cb39ef44ffb8ebfa4bf6d6ed43e045c8ad4142cdb347b8db838->enter($__internal_644376749d9a1cb39ef44ffb8ebfa4bf6d6ed43e045c8ad4142cdb347b8db838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TBFBundle:Skills:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_644376749d9a1cb39ef44ffb8ebfa4bf6d6ed43e045c8ad4142cdb347b8db838->leave($__internal_644376749d9a1cb39ef44ffb8ebfa4bf6d6ed43e045c8ad4142cdb347b8db838_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_26d988de149f849ab542a2dcf5bcc8d9af2f9e36b96cfdabba9088c086afd31e = $this->env->getExtension("native_profiler");
        $__internal_26d988de149f849ab542a2dcf5bcc8d9af2f9e36b96cfdabba9088c086afd31e->enter($__internal_26d988de149f849ab542a2dcf5bcc8d9af2f9e36b96cfdabba9088c086afd31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Skill";
        
        $__internal_26d988de149f849ab542a2dcf5bcc8d9af2f9e36b96cfdabba9088c086afd31e->leave($__internal_26d988de149f849ab542a2dcf5bcc8d9af2f9e36b96cfdabba9088c086afd31e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2264bb12c916b23ce494a2d31246a93291c47effca0beab09619356dfd1918c8 = $this->env->getExtension("native_profiler");
        $__internal_2264bb12c916b23ce494a2d31246a93291c47effca0beab09619356dfd1918c8->enter($__internal_2264bb12c916b23ce494a2d31246a93291c47effca0beab09619356dfd1918c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("tbf_skills_add");
        echo "\">Ajouter une competence</a>
    <table class=\"table table-striped\">
        <thead>
            <th>Nom</th>
            <th>Description</th>
            <th class=\"text-center\">Modifier</th>
        <th class=\"text-center\">Suppression</th>
        </thead>
        <tbody>
        ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["skills"]) ? $context["skills"] : $this->getContext($context, "skills")));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            if (array_key_exists("skills", $context)) {
                // line 14
                echo "            <tr>
                <td>";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["skill"], "name", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["skill"], "description", array()), "html", null, true);
                echo "</td>
                <td class=\"text-center\"><a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tbf_skills_modify", array("id" => $this->getAttribute($context["skill"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></a></td>
                <td class=\"text-center\"><a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tbf_skills_remove", array("id" => $this->getAttribute($context["skill"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></a></td>
            </tr>
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </tbody>
    </table>
";
        
        $__internal_2264bb12c916b23ce494a2d31246a93291c47effca0beab09619356dfd1918c8->leave($__internal_2264bb12c916b23ce494a2d31246a93291c47effca0beab09619356dfd1918c8_prof);

    }

    public function getTemplateName()
    {
        return "TBFBundle:Skills:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 21,  86 => 18,  82 => 17,  78 => 16,  74 => 15,  71 => 14,  66 => 13,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
