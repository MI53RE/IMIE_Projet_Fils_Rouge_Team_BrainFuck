<?php

/* TBFBundle:Skills:index.html.twig */
class __TwigTemplate_74bfe21a8f360fd384976d4aad85b5d2218b4d1bba6ae4b1abefbe72f1bcb0c2 extends Twig_Template
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
        $__internal_d4074f192f46cc4ed6780bcd29c9977e2201ab83da443cdd857f1fcae51660ad = $this->env->getExtension("native_profiler");
        $__internal_d4074f192f46cc4ed6780bcd29c9977e2201ab83da443cdd857f1fcae51660ad->enter($__internal_d4074f192f46cc4ed6780bcd29c9977e2201ab83da443cdd857f1fcae51660ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TBFBundle:Skills:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4074f192f46cc4ed6780bcd29c9977e2201ab83da443cdd857f1fcae51660ad->leave($__internal_d4074f192f46cc4ed6780bcd29c9977e2201ab83da443cdd857f1fcae51660ad_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f904e0248ceff1d3b91cc6b26b183bf6e8fdf1e211573e485f2785cd6f3e5f13 = $this->env->getExtension("native_profiler");
        $__internal_f904e0248ceff1d3b91cc6b26b183bf6e8fdf1e211573e485f2785cd6f3e5f13->enter($__internal_f904e0248ceff1d3b91cc6b26b183bf6e8fdf1e211573e485f2785cd6f3e5f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Skill";
        
        $__internal_f904e0248ceff1d3b91cc6b26b183bf6e8fdf1e211573e485f2785cd6f3e5f13->leave($__internal_f904e0248ceff1d3b91cc6b26b183bf6e8fdf1e211573e485f2785cd6f3e5f13_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ecb7e6ab23662295a9e921c492f5f81cd453e543700be22adc65b7bcab855b28 = $this->env->getExtension("native_profiler");
        $__internal_ecb7e6ab23662295a9e921c492f5f81cd453e543700be22adc65b7bcab855b28->enter($__internal_ecb7e6ab23662295a9e921c492f5f81cd453e543700be22adc65b7bcab855b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ecb7e6ab23662295a9e921c492f5f81cd453e543700be22adc65b7bcab855b28->leave($__internal_ecb7e6ab23662295a9e921c492f5f81cd453e543700be22adc65b7bcab855b28_prof);

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
