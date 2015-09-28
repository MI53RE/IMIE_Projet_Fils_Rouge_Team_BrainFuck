<?php

/* TBFBundle:Projects:index.html.twig */
class __TwigTemplate_e06927859abd9a9ef8d8a13866026502caeb6d4458174e676a1cbb4a9bc2df77 extends Twig_Template
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
        $__internal_815f9ca389c22b4e1c3c8e2d4ea2b11431020890ef7feb2c52078cd7fde1a887 = $this->env->getExtension("native_profiler");
        $__internal_815f9ca389c22b4e1c3c8e2d4ea2b11431020890ef7feb2c52078cd7fde1a887->enter($__internal_815f9ca389c22b4e1c3c8e2d4ea2b11431020890ef7feb2c52078cd7fde1a887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TBFBundle:Projects:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_815f9ca389c22b4e1c3c8e2d4ea2b11431020890ef7feb2c52078cd7fde1a887->leave($__internal_815f9ca389c22b4e1c3c8e2d4ea2b11431020890ef7feb2c52078cd7fde1a887_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5818a84a3693ffd6c1aad50318c63989ba33021a7a6b54f84578cbc89c7d55b4 = $this->env->getExtension("native_profiler");
        $__internal_5818a84a3693ffd6c1aad50318c63989ba33021a7a6b54f84578cbc89c7d55b4->enter($__internal_5818a84a3693ffd6c1aad50318c63989ba33021a7a6b54f84578cbc89c7d55b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Project";
        
        $__internal_5818a84a3693ffd6c1aad50318c63989ba33021a7a6b54f84578cbc89c7d55b4->leave($__internal_5818a84a3693ffd6c1aad50318c63989ba33021a7a6b54f84578cbc89c7d55b4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_202336312ffd548b179f428a5be21ce45156ef887cd7cca3a4027cf84b37c1c5 = $this->env->getExtension("native_profiler");
        $__internal_202336312ffd548b179f428a5be21ce45156ef887cd7cca3a4027cf84b37c1c5->enter($__internal_202336312ffd548b179f428a5be21ce45156ef887cd7cca3a4027cf84b37c1c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container project\">
\t<h2>Project!</h2>
\t<div>
\t\t<h3>Projects</h3>
\t\t<table>
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
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t</table>
\t</div>
</div>
";
        
        $__internal_202336312ffd548b179f428a5be21ce45156ef887cd7cca3a4027cf84b37c1c5->leave($__internal_202336312ffd548b179f428a5be21ce45156ef887cd7cca3a4027cf84b37c1c5_prof);

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
        return array (  89 => 21,  80 => 18,  76 => 17,  72 => 16,  69 => 15,  65 => 14,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
