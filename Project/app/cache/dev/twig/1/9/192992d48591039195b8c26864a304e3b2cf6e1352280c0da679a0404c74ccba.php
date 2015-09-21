<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_192992d48591039195b8c26864a304e3b2cf6e1352280c0da679a0404c74ccba extends Twig_Template
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
        $__internal_610ed9785a66174535a3c8cae6921dc7b0c0e32578739cf0e23b0544f3ef1cd6 = $this->env->getExtension("native_profiler");
        $__internal_610ed9785a66174535a3c8cae6921dc7b0c0e32578739cf0e23b0544f3ef1cd6->enter($__internal_610ed9785a66174535a3c8cae6921dc7b0c0e32578739cf0e23b0544f3ef1cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

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
        
        $__internal_610ed9785a66174535a3c8cae6921dc7b0c0e32578739cf0e23b0544f3ef1cd6->leave($__internal_610ed9785a66174535a3c8cae6921dc7b0c0e32578739cf0e23b0544f3ef1cd6_prof);

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
