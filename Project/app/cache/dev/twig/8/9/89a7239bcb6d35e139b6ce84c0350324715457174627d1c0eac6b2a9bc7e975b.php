<?php

/* TBFBundle:Projects:index.html.twig */
class __TwigTemplate_89a7239bcb6d35e139b6ce84c0350324715457174627d1c0eac6b2a9bc7e975b extends Twig_Template
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
        $__internal_08cef96046e41c7058df05aca7168c24e1922673327a4facb86127a656254f8d = $this->env->getExtension("native_profiler");
        $__internal_08cef96046e41c7058df05aca7168c24e1922673327a4facb86127a656254f8d->enter($__internal_08cef96046e41c7058df05aca7168c24e1922673327a4facb86127a656254f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TBFBundle:Projects:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08cef96046e41c7058df05aca7168c24e1922673327a4facb86127a656254f8d->leave($__internal_08cef96046e41c7058df05aca7168c24e1922673327a4facb86127a656254f8d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b142014d3181503be0a509a3a2a47b108063fcf479cbe4bea9ffb20179961ee5 = $this->env->getExtension("native_profiler");
        $__internal_b142014d3181503be0a509a3a2a47b108063fcf479cbe4bea9ffb20179961ee5->enter($__internal_b142014d3181503be0a509a3a2a47b108063fcf479cbe4bea9ffb20179961ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Project";
        
        $__internal_b142014d3181503be0a509a3a2a47b108063fcf479cbe4bea9ffb20179961ee5->leave($__internal_b142014d3181503be0a509a3a2a47b108063fcf479cbe4bea9ffb20179961ee5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_16fcff8ee9d923edd19918f11e99bb21b2e1b2e51f8bc01ffc5cf63a35c042b7 = $this->env->getExtension("native_profiler");
        $__internal_16fcff8ee9d923edd19918f11e99bb21b2e1b2e51f8bc01ffc5cf63a35c042b7->enter($__internal_16fcff8ee9d923edd19918f11e99bb21b2e1b2e51f8bc01ffc5cf63a35c042b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_16fcff8ee9d923edd19918f11e99bb21b2e1b2e51f8bc01ffc5cf63a35c042b7->leave($__internal_16fcff8ee9d923edd19918f11e99bb21b2e1b2e51f8bc01ffc5cf63a35c042b7_prof);

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
