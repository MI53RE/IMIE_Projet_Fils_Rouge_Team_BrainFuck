<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_3a55946b0c692b021d3589c81f0c2e9840ffb9e65699d786d620ff8f9a4482f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_882fdc0dfbb34edef88d1e89e4f5e4e0e3934fe85a35289aa422fbd1cbd64572 = $this->env->getExtension("native_profiler");
        $__internal_882fdc0dfbb34edef88d1e89e4f5e4e0e3934fe85a35289aa422fbd1cbd64572->enter($__internal_882fdc0dfbb34edef88d1e89e4f5e4e0e3934fe85a35289aa422fbd1cbd64572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_882fdc0dfbb34edef88d1e89e4f5e4e0e3934fe85a35289aa422fbd1cbd64572->leave($__internal_882fdc0dfbb34edef88d1e89e4f5e4e0e3934fe85a35289aa422fbd1cbd64572_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
