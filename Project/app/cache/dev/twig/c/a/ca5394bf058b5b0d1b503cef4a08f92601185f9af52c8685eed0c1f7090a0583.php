<?php

/* TBFBundle:Projects:details.html.twig */
class __TwigTemplate_ca5394bf058b5b0d1b503cef4a08f92601185f9af52c8685eed0c1f7090a0583 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "TBFBundle:Projects:details.html.twig", 1);
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
        $__internal_82ceaa0b355cfe62dfe6d4e9adc593aadd5c790b4f31f8d6817e29922c991647 = $this->env->getExtension("native_profiler");
        $__internal_82ceaa0b355cfe62dfe6d4e9adc593aadd5c790b4f31f8d6817e29922c991647->enter($__internal_82ceaa0b355cfe62dfe6d4e9adc593aadd5c790b4f31f8d6817e29922c991647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TBFBundle:Projects:details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82ceaa0b355cfe62dfe6d4e9adc593aadd5c790b4f31f8d6817e29922c991647->leave($__internal_82ceaa0b355cfe62dfe6d4e9adc593aadd5c790b4f31f8d6817e29922c991647_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_489f72b7b28f7ba478a87de74c3995a1769aa156ddde179f053a0205b0dbf9e9 = $this->env->getExtension("native_profiler");
        $__internal_489f72b7b28f7ba478a87de74c3995a1769aa156ddde179f053a0205b0dbf9e9->enter($__internal_489f72b7b28f7ba478a87de74c3995a1769aa156ddde179f053a0205b0dbf9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Project";
        
        $__internal_489f72b7b28f7ba478a87de74c3995a1769aa156ddde179f053a0205b0dbf9e9->leave($__internal_489f72b7b28f7ba478a87de74c3995a1769aa156ddde179f053a0205b0dbf9e9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_729e3581be79021ead4bf53df9bf24eefe48bb22c96553b93664453b0aeb8bc5 = $this->env->getExtension("native_profiler");
        $__internal_729e3581be79021ead4bf53df9bf24eefe48bb22c96553b93664453b0aeb8bc5->enter($__internal_729e3581be79021ead4bf53df9bf24eefe48bb22c96553b93664453b0aeb8bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<h2>Project!</h2>
\t<div>
\t\t<h3>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), 0, array(), "array"), "name", array()), "html", null, true);
        echo "</h3>
\t\t<h4>Members</h4>
\t\t<table>
\t\t\t<tr>
\t\t\t\t<th>Firstname</th>
\t\t\t\t<th>Lastname</th>
\t\t\t</tr>
\t\t\t";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), 0, array(), "array"), "members", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            if ($this->getAttribute($this->getAttribute((isset($context["project"]) ? $context["project"] : null), 0, array(), "array", false, true), "members", array(), "any", true, true)) {
                // line 14
                echo "\t\t\t<tr><td> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "firstname", array()), "html", null, true);
                echo " </td><td> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "lastname", array()), "html", null, true);
                echo " </td></tr>
\t\t\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t\t</table>
\t\t<table>
\t\t\t<tr>
\t\t\t\t<th>Required skill(s)</th>
\t\t\t</tr>
\t\t\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), 0, array(), "array"), "skills", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            if ($this->getAttribute($this->getAttribute((isset($context["project"]) ? $context["project"] : null), 0, array(), "array", false, true), "skills", array(), "any", true, true)) {
                echo "}
\t\t\t\t<tr><td> ";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["skill"], "name", array()), "html", null, true);
                echo " </td></tr>
\t\t\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t</table>
\t\t<div>
\t\t\t<h4>Project description</h4>
\t\t\t<p> ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), 0, array(), "array"), "description", array()), "html", null, true);
        echo " <p>
\t\t</div>
\t</div>
";
        
        $__internal_729e3581be79021ead4bf53df9bf24eefe48bb22c96553b93664453b0aeb8bc5->leave($__internal_729e3581be79021ead4bf53df9bf24eefe48bb22c96553b93664453b0aeb8bc5_prof);

    }

    public function getTemplateName()
    {
        return "TBFBundle:Projects:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 27,  107 => 24,  98 => 22,  91 => 21,  84 => 16,  72 => 14,  67 => 13,  57 => 6,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
