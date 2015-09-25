<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_2b3233ef95553d1437ad9c93a9901d653ccbb9f895c740fd66f0b48f90afe766 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c46f61b761752c113c0df8ab74d6a948055937bfb136f88845f97164fc1f47a = $this->env->getExtension("native_profiler");
        $__internal_8c46f61b761752c113c0df8ab74d6a948055937bfb136f88845f97164fc1f47a->enter($__internal_8c46f61b761752c113c0df8ab74d6a948055937bfb136f88845f97164fc1f47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c46f61b761752c113c0df8ab74d6a948055937bfb136f88845f97164fc1f47a->leave($__internal_8c46f61b761752c113c0df8ab74d6a948055937bfb136f88845f97164fc1f47a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c28367713595541f5296fa466b4305b87dc0fa605ddc53acf38c8c79f2e06413 = $this->env->getExtension("native_profiler");
        $__internal_c28367713595541f5296fa466b4305b87dc0fa605ddc53acf38c8c79f2e06413->enter($__internal_c28367713595541f5296fa466b4305b87dc0fa605ddc53acf38c8c79f2e06413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c28367713595541f5296fa466b4305b87dc0fa605ddc53acf38c8c79f2e06413->leave($__internal_c28367713595541f5296fa466b4305b87dc0fa605ddc53acf38c8c79f2e06413_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bda4c9fd513f3fda5e0594737a7c83b9efb9c77cf66d3115f2eae3921fbc63ec = $this->env->getExtension("native_profiler");
        $__internal_bda4c9fd513f3fda5e0594737a7c83b9efb9c77cf66d3115f2eae3921fbc63ec->enter($__internal_bda4c9fd513f3fda5e0594737a7c83b9efb9c77cf66d3115f2eae3921fbc63ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bda4c9fd513f3fda5e0594737a7c83b9efb9c77cf66d3115f2eae3921fbc63ec->leave($__internal_bda4c9fd513f3fda5e0594737a7c83b9efb9c77cf66d3115f2eae3921fbc63ec_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f71571c03d4814b4fdfe060a24b6a09fecd7e6f76018fffb7bc3fb0b1f188b7 = $this->env->getExtension("native_profiler");
        $__internal_9f71571c03d4814b4fdfe060a24b6a09fecd7e6f76018fffb7bc3fb0b1f188b7->enter($__internal_9f71571c03d4814b4fdfe060a24b6a09fecd7e6f76018fffb7bc3fb0b1f188b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9f71571c03d4814b4fdfe060a24b6a09fecd7e6f76018fffb7bc3fb0b1f188b7->leave($__internal_9f71571c03d4814b4fdfe060a24b6a09fecd7e6f76018fffb7bc3fb0b1f188b7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
