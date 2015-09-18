<?php

/* TBFBundle:Projects:index.html.twig */
class __TwigTemplate_710137952416b21f75962683957cdeb360140a82ce7060de6bc72e1e0f9c27fb extends Twig_Template
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
        $__internal_9a8bab3a5abf5bad2bdc8095d28b6cef1991f40eeb0f81987f6eed7bc28d3bad = $this->env->getExtension("native_profiler");
        $__internal_9a8bab3a5abf5bad2bdc8095d28b6cef1991f40eeb0f81987f6eed7bc28d3bad->enter($__internal_9a8bab3a5abf5bad2bdc8095d28b6cef1991f40eeb0f81987f6eed7bc28d3bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TBFBundle:Projects:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a8bab3a5abf5bad2bdc8095d28b6cef1991f40eeb0f81987f6eed7bc28d3bad->leave($__internal_9a8bab3a5abf5bad2bdc8095d28b6cef1991f40eeb0f81987f6eed7bc28d3bad_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6f8bc83963de2ee5a48810b1d805aa0820df5c6377b4fdea3500805000b3e2c = $this->env->getExtension("native_profiler");
        $__internal_f6f8bc83963de2ee5a48810b1d805aa0820df5c6377b4fdea3500805000b3e2c->enter($__internal_f6f8bc83963de2ee5a48810b1d805aa0820df5c6377b4fdea3500805000b3e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Project";
        
        $__internal_f6f8bc83963de2ee5a48810b1d805aa0820df5c6377b4fdea3500805000b3e2c->leave($__internal_f6f8bc83963de2ee5a48810b1d805aa0820df5c6377b4fdea3500805000b3e2c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_58682cac7e9b0ed7646dd6839cd7d5a68831d1c2b295b8a6fdd425d477b99500 = $this->env->getExtension("native_profiler");
        $__internal_58682cac7e9b0ed7646dd6839cd7d5a68831d1c2b295b8a6fdd425d477b99500->enter($__internal_58682cac7e9b0ed7646dd6839cd7d5a68831d1c2b295b8a6fdd425d477b99500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_58682cac7e9b0ed7646dd6839cd7d5a68831d1c2b295b8a6fdd425d477b99500->leave($__internal_58682cac7e9b0ed7646dd6839cd7d5a68831d1c2b295b8a6fdd425d477b99500_prof);

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
