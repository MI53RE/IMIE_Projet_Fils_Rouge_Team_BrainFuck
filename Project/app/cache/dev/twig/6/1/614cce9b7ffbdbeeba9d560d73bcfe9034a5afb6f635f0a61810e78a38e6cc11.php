<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_614cce9b7ffbdbeeba9d560d73bcfe9034a5afb6f635f0a61810e78a38e6cc11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_caf1233dc9dc083c0698739786745ff941438991d178b0abc18d76d1043403aa = $this->env->getExtension("native_profiler");
        $__internal_caf1233dc9dc083c0698739786745ff941438991d178b0abc18d76d1043403aa->enter($__internal_caf1233dc9dc083c0698739786745ff941438991d178b0abc18d76d1043403aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_caf1233dc9dc083c0698739786745ff941438991d178b0abc18d76d1043403aa->leave($__internal_caf1233dc9dc083c0698739786745ff941438991d178b0abc18d76d1043403aa_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a999079d0bf17e34ed91a2c29915888bb9f3be29f0dba2ab7b296afdd8d541e = $this->env->getExtension("native_profiler");
        $__internal_4a999079d0bf17e34ed91a2c29915888bb9f3be29f0dba2ab7b296afdd8d541e->enter($__internal_4a999079d0bf17e34ed91a2c29915888bb9f3be29f0dba2ab7b296afdd8d541e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
";
        // line 6
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 6)->display($context);
        
        $__internal_4a999079d0bf17e34ed91a2c29915888bb9f3be29f0dba2ab7b296afdd8d541e->leave($__internal_4a999079d0bf17e34ed91a2c29915888bb9f3be29f0dba2ab7b296afdd8d541e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 6,  40 => 5,  34 => 4,  11 => 1,);
    }
}
