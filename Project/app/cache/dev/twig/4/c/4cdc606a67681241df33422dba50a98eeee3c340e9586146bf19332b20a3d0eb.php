<?php

/* TBFBundle:Projects:index.html.twig */
class __TwigTemplate_4cdc606a67681241df33422dba50a98eeee3c340e9586146bf19332b20a3d0eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "TBFBundle:Projects:index.html.twig", 1);
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
        $__internal_cdfd98ee5eb91136a6cee87757e21ca804948f8cc68c3f696b3ffcca9eb5e240 = $this->env->getExtension("native_profiler");
        $__internal_cdfd98ee5eb91136a6cee87757e21ca804948f8cc68c3f696b3ffcca9eb5e240->enter($__internal_cdfd98ee5eb91136a6cee87757e21ca804948f8cc68c3f696b3ffcca9eb5e240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TBFBundle:Projects:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdfd98ee5eb91136a6cee87757e21ca804948f8cc68c3f696b3ffcca9eb5e240->leave($__internal_cdfd98ee5eb91136a6cee87757e21ca804948f8cc68c3f696b3ffcca9eb5e240_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7fdb47061c07d751d54e9b858fdbf618235ba4c00276f459374826f4c669270 = $this->env->getExtension("native_profiler");
        $__internal_a7fdb47061c07d751d54e9b858fdbf618235ba4c00276f459374826f4c669270->enter($__internal_a7fdb47061c07d751d54e9b858fdbf618235ba4c00276f459374826f4c669270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Project";
        
        $__internal_a7fdb47061c07d751d54e9b858fdbf618235ba4c00276f459374826f4c669270->leave($__internal_a7fdb47061c07d751d54e9b858fdbf618235ba4c00276f459374826f4c669270_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ed18bd03fb0ebf46b871a6e41064974a256c869411b7623e80cb54ab5f0f46d = $this->env->getExtension("native_profiler");
        $__internal_8ed18bd03fb0ebf46b871a6e41064974a256c869411b7623e80cb54ab5f0f46d->enter($__internal_8ed18bd03fb0ebf46b871a6e41064974a256c869411b7623e80cb54ab5f0f46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"container project\">

    <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("tbf_projects_add");
        echo "\">Créer un projet</a>

\t<h2>Project!</h2>
\t<div>
\t\t<h3>Projects</h3>
\t\t<table class=\"table table-striped\">
\t\t\t<tr>
\t\t\t\t<th>Project's Name</th>
\t\t\t\t<th>Project's Status</th>
\t\t\t\t<th>Project's Members</th>
\t\t\t</tr>
\t\t\t";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) ? $context["projects"] : $this->getContext($context, "projects")));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            if (array_key_exists("projects", $context)) {
                // line 19
                echo "\t\t\t<tr>
\t\t\t\t<td><a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tbf_projects_details", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
                echo "\"><span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "name", array()), "html", null, true);
                echo "</span></a></td>
\t\t\t\t<td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "stateList", array(0 => $this->getAttribute($context["project"], "state", array())), "method"), "html", null, true);
                echo "</td>
\t\t\t\t<td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["project"], "members", array()), "count", array()), "html", null, true);
                echo "</td>
                <td class=\"text-center\"><a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tbf_projects_modify", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></a></td>
                <td class=\"text-center\"><a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tbf_projects_remove", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></a></td>
\t\t\t</tr>
\t\t\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t</table>
\t</div>
</div>
";
        
        $__internal_8ed18bd03fb0ebf46b871a6e41064974a256c869411b7623e80cb54ab5f0f46d->leave($__internal_8ed18bd03fb0ebf46b871a6e41064974a256c869411b7623e80cb54ab5f0f46d_prof);

    }

    public function getTemplateName()
    {
        return "TBFBundle:Projects:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 27,  98 => 24,  94 => 23,  90 => 22,  86 => 21,  80 => 20,  77 => 19,  72 => 18,  58 => 7,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
