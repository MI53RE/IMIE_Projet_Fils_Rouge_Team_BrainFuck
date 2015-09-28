<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_9d92497eda8bc80e52ff44fd3048b9543bf6875132e4200f690ba020eaf9bbb7 extends Twig_Template
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
        $__internal_5f5b95ba78e5fc029863bd436db08047682a0c755632f5afffef8c700239e5a3 = $this->env->getExtension("native_profiler");
        $__internal_5f5b95ba78e5fc029863bd436db08047682a0c755632f5afffef8c700239e5a3->enter($__internal_5f5b95ba78e5fc029863bd436db08047682a0c755632f5afffef8c700239e5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
<div class=\"container register\">
<form action=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"form-group\">
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div class=\"form-group\">
        <button class=\"btn btn-primary btn-lg pull-middle\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ajouter utilisateur", array(), "FOSUserBundle"), "html", null, true);
        echo "\">Ajouter l'utilisateur</button>
    </div>
</form>
</div>

";
        
        $__internal_5f5b95ba78e5fc029863bd436db08047682a0c755632f5afffef8c700239e5a3->leave($__internal_5f5b95ba78e5fc029863bd436db08047682a0c755632f5afffef8c700239e5a3_prof);

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
        return array (  37 => 7,  32 => 5,  26 => 4,  22 => 2,);
    }
}
