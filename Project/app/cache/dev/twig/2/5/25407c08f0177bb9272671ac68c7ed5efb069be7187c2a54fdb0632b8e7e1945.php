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
        $__internal_2ec8d986ad40a11f4d050f97f6b2c3c2e508a62697c674aa0e75cfd1990c992b = $this->env->getExtension("native_profiler");
        $__internal_2ec8d986ad40a11f4d050f97f6b2c3c2e508a62697c674aa0e75cfd1990c992b->enter($__internal_2ec8d986ad40a11f4d050f97f6b2c3c2e508a62697c674aa0e75cfd1990c992b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TBFBundle:Projects:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ec8d986ad40a11f4d050f97f6b2c3c2e508a62697c674aa0e75cfd1990c992b->leave($__internal_2ec8d986ad40a11f4d050f97f6b2c3c2e508a62697c674aa0e75cfd1990c992b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa30ebadbf270dfd3bf139ea03e7c6f5fd1a8f2a3b03dd333dbd35924475a3aa = $this->env->getExtension("native_profiler");
        $__internal_aa30ebadbf270dfd3bf139ea03e7c6f5fd1a8f2a3b03dd333dbd35924475a3aa->enter($__internal_aa30ebadbf270dfd3bf139ea03e7c6f5fd1a8f2a3b03dd333dbd35924475a3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Project";
        
        $__internal_aa30ebadbf270dfd3bf139ea03e7c6f5fd1a8f2a3b03dd333dbd35924475a3aa->leave($__internal_aa30ebadbf270dfd3bf139ea03e7c6f5fd1a8f2a3b03dd333dbd35924475a3aa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_264cf5c388d37754e6d6030f6783b91e7feae2d10b0c72c225ab9ddd57a6e7a7 = $this->env->getExtension("native_profiler");
        $__internal_264cf5c388d37754e6d6030f6783b91e7feae2d10b0c72c225ab9ddd57a6e7a7->enter($__internal_264cf5c388d37754e6d6030f6783b91e7feae2d10b0c72c225ab9ddd57a6e7a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<h2>Project!</h2>
\t<div>
\t\t<h3>Projects</h3>
\t\t<table>
\t\t\t<tr>
\t\t\t\t<th>Project's Name</th>
\t\t\t\t<th>Project's Status</th>
\t\t\t\t<th>Project's Members</th>
\t\t\t</tr>
\t\t\t";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) ? $context["projects"] : $this->getContext($context, "projects")));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 14
            echo "\t\t\t<tr>
\t\t\t\t<td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "state", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["project"], "members", array()), "count", array()), "html", null, true);
            echo "</td>
\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t</table>
\t</div>
";
        
        $__internal_264cf5c388d37754e6d6030f6783b91e7feae2d10b0c72c225ab9ddd57a6e7a7->leave($__internal_264cf5c388d37754e6d6030f6783b91e7feae2d10b0c72c225ab9ddd57a6e7a7_prof);

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
        return array (  88 => 20,  79 => 17,  75 => 16,  71 => 15,  68 => 14,  64 => 13,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
