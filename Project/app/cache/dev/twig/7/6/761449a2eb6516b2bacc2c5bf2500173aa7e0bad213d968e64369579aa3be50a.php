<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_761449a2eb6516b2bacc2c5bf2500173aa7e0bad213d968e64369579aa3be50a extends Twig_Template
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
        $__internal_5a330aaa45afebc1702752cc751e1fdb9155fb8ea157716346c88d6ae7c78ad3 = $this->env->getExtension("native_profiler");
        $__internal_5a330aaa45afebc1702752cc751e1fdb9155fb8ea157716346c88d6ae7c78ad3->enter($__internal_5a330aaa45afebc1702752cc751e1fdb9155fb8ea157716346c88d6ae7c78ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_5a330aaa45afebc1702752cc751e1fdb9155fb8ea157716346c88d6ae7c78ad3->leave($__internal_5a330aaa45afebc1702752cc751e1fdb9155fb8ea157716346c88d6ae7c78ad3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  31 => 4,  25 => 3,  22 => 2,);
    }
}
