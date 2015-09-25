<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_74eb9ffc3ffce6ef1a80b16064cc692a855cf376d5223990108c47fae824182c extends Twig_Template
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
        $__internal_024acb6c24ce510a738e9ac4b4ebda49920e26746e7f524b20fd2867caaf7eaa = $this->env->getExtension("native_profiler");
        $__internal_024acb6c24ce510a738e9ac4b4ebda49920e26746e7f524b20fd2867caaf7eaa->enter($__internal_024acb6c24ce510a738e9ac4b4ebda49920e26746e7f524b20fd2867caaf7eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_024acb6c24ce510a738e9ac4b4ebda49920e26746e7f524b20fd2867caaf7eaa->leave($__internal_024acb6c24ce510a738e9ac4b4ebda49920e26746e7f524b20fd2867caaf7eaa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_398727e0ff40ec87b12e28f98911b57b25b706fe56a72a4d6fe1c542c2221223 = $this->env->getExtension("native_profiler");
        $__internal_398727e0ff40ec87b12e28f98911b57b25b706fe56a72a4d6fe1c542c2221223->enter($__internal_398727e0ff40ec87b12e28f98911b57b25b706fe56a72a4d6fe1c542c2221223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_398727e0ff40ec87b12e28f98911b57b25b706fe56a72a4d6fe1c542c2221223->leave($__internal_398727e0ff40ec87b12e28f98911b57b25b706fe56a72a4d6fe1c542c2221223_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a1b4b96ace3f64a45ffe48354d92171512ee6a56bab7f7468945d1ffd854fdc = $this->env->getExtension("native_profiler");
        $__internal_8a1b4b96ace3f64a45ffe48354d92171512ee6a56bab7f7468945d1ffd854fdc->enter($__internal_8a1b4b96ace3f64a45ffe48354d92171512ee6a56bab7f7468945d1ffd854fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8a1b4b96ace3f64a45ffe48354d92171512ee6a56bab7f7468945d1ffd854fdc->leave($__internal_8a1b4b96ace3f64a45ffe48354d92171512ee6a56bab7f7468945d1ffd854fdc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_befe24f642a9859e3ac3abc22b8dc5f1ea5e66f7a430f7ff4f3cf8df048c4e41 = $this->env->getExtension("native_profiler");
        $__internal_befe24f642a9859e3ac3abc22b8dc5f1ea5e66f7a430f7ff4f3cf8df048c4e41->enter($__internal_befe24f642a9859e3ac3abc22b8dc5f1ea5e66f7a430f7ff4f3cf8df048c4e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_befe24f642a9859e3ac3abc22b8dc5f1ea5e66f7a430f7ff4f3cf8df048c4e41->leave($__internal_befe24f642a9859e3ac3abc22b8dc5f1ea5e66f7a430f7ff4f3cf8df048c4e41_prof);

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
