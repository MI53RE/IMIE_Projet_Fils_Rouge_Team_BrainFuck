<?php

/* TBFBundle:Projects:index.html.twig */
class __TwigTemplate_25407c08f0177bb9272671ac68c7ed5efb069be7187c2a54fdb0632b8e7e1945 extends Twig_Template
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
        $__internal_48334d4e220c4a175e353e5a7346da00b955cec9eb1cd8fd4fc4b523ec763994 = $this->env->getExtension("native_profiler");
        $__internal_48334d4e220c4a175e353e5a7346da00b955cec9eb1cd8fd4fc4b523ec763994->enter($__internal_48334d4e220c4a175e353e5a7346da00b955cec9eb1cd8fd4fc4b523ec763994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TBFBundle:Projects:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48334d4e220c4a175e353e5a7346da00b955cec9eb1cd8fd4fc4b523ec763994->leave($__internal_48334d4e220c4a175e353e5a7346da00b955cec9eb1cd8fd4fc4b523ec763994_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e0f950deb979bcc54b0839588a77c012df7ebce982c9951389ec270239fc2a9 = $this->env->getExtension("native_profiler");
        $__internal_4e0f950deb979bcc54b0839588a77c012df7ebce982c9951389ec270239fc2a9->enter($__internal_4e0f950deb979bcc54b0839588a77c012df7ebce982c9951389ec270239fc2a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Project";
        
        $__internal_4e0f950deb979bcc54b0839588a77c012df7ebce982c9951389ec270239fc2a9->leave($__internal_4e0f950deb979bcc54b0839588a77c012df7ebce982c9951389ec270239fc2a9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_36a044790bb9669eb79ef1b2deb91807341cbee4c4240f5e1ac876097062947c = $this->env->getExtension("native_profiler");
        $__internal_36a044790bb9669eb79ef1b2deb91807341cbee4c4240f5e1ac876097062947c->enter($__internal_36a044790bb9669eb79ef1b2deb91807341cbee4c4240f5e1ac876097062947c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <a href=\"";
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
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) ? $context["projects"] : $this->getContext($context, "projects")));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            if (array_key_exists("projects", $context)) {
                // line 15
                echo "\t\t\t<tr>
\t\t\t\t<td>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "name", array()), "html", null, true);
                echo "</td>
\t\t\t\t<td>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "state", array()), "html", null, true);
                echo "</td>
\t\t\t\t<td>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["project"], "members", array()), "count", array()), "html", null, true);
                echo "</td>
\t\t\t</tr>
\t\t\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t</table>
\t</div>
";
        
        $__internal_36a044790bb9669eb79ef1b2deb91807341cbee4c4240f5e1ac876097062947c->leave($__internal_36a044790bb9669eb79ef1b2deb91807341cbee4c4240f5e1ac876097062947c_prof);

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
        return array (  93 => 21,  83 => 18,  79 => 17,  75 => 16,  72 => 15,  67 => 14,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
