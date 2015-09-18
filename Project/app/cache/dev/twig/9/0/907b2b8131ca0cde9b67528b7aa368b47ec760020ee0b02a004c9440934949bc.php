<?php

/* TBFBundle:Skills:index.html.twig */
class __TwigTemplate_907b2b8131ca0cde9b67528b7aa368b47ec760020ee0b02a004c9440934949bc extends Twig_Template
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
        $__internal_81dd5791ae3c31b306f4d545ab974a4be569bdae74a7a051d9c16adce24ec2be = $this->env->getExtension("native_profiler");
        $__internal_81dd5791ae3c31b306f4d545ab974a4be569bdae74a7a051d9c16adce24ec2be->enter($__internal_81dd5791ae3c31b306f4d545ab974a4be569bdae74a7a051d9c16adce24ec2be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TBFBundle:Skills:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81dd5791ae3c31b306f4d545ab974a4be569bdae74a7a051d9c16adce24ec2be->leave($__internal_81dd5791ae3c31b306f4d545ab974a4be569bdae74a7a051d9c16adce24ec2be_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d097ab3273c26d3d97b19621e5ff01cdf21c20e29fd87fa719b534f02ea02e2 = $this->env->getExtension("native_profiler");
        $__internal_6d097ab3273c26d3d97b19621e5ff01cdf21c20e29fd87fa719b534f02ea02e2->enter($__internal_6d097ab3273c26d3d97b19621e5ff01cdf21c20e29fd87fa719b534f02ea02e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Skill";
        
        $__internal_6d097ab3273c26d3d97b19621e5ff01cdf21c20e29fd87fa719b534f02ea02e2->leave($__internal_6d097ab3273c26d3d97b19621e5ff01cdf21c20e29fd87fa719b534f02ea02e2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_df425b871354e5820421d727a5a157bc080e34f2b6b453dff85fa30f29a7ca7e = $this->env->getExtension("native_profiler");
        $__internal_df425b871354e5820421d727a5a157bc080e34f2b6b453dff85fa30f29a7ca7e->enter($__internal_df425b871354e5820421d727a5a157bc080e34f2b6b453dff85fa30f29a7ca7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_df425b871354e5820421d727a5a157bc080e34f2b6b453dff85fa30f29a7ca7e->leave($__internal_df425b871354e5820421d727a5a157bc080e34f2b6b453dff85fa30f29a7ca7e_prof);

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
