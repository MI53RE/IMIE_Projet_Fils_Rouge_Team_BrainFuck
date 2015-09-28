<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_0bfb1de3d43af555df72d3cc21c1b2fc46a0a44d5ec2f24bc765bec9f57c773e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df76c5dd4a530ab1fbe225f625c2e02a9dfb305258fc8cdb6f50554863dc59ff = $this->env->getExtension("native_profiler");
        $__internal_df76c5dd4a530ab1fbe225f625c2e02a9dfb305258fc8cdb6f50554863dc59ff->enter($__internal_df76c5dd4a530ab1fbe225f625c2e02a9dfb305258fc8cdb6f50554863dc59ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df76c5dd4a530ab1fbe225f625c2e02a9dfb305258fc8cdb6f50554863dc59ff->leave($__internal_df76c5dd4a530ab1fbe225f625c2e02a9dfb305258fc8cdb6f50554863dc59ff_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ef0843a5c6a911b20e6741eb68414cbb61620c7e7731265c081adc79b0ae987d = $this->env->getExtension("native_profiler");
        $__internal_ef0843a5c6a911b20e6741eb68414cbb61620c7e7731265c081adc79b0ae987d->enter($__internal_ef0843a5c6a911b20e6741eb68414cbb61620c7e7731265c081adc79b0ae987d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "
<form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    <label for=\"username\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

    <label for=\"password\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>
";
        
        $__internal_ef0843a5c6a911b20e6741eb68414cbb61620c7e7731265c081adc79b0ae987d->leave($__internal_ef0843a5c6a911b20e6741eb68414cbb61620c7e7731265c081adc79b0ae987d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 22,  76 => 20,  69 => 16,  64 => 14,  60 => 13,  55 => 11,  51 => 10,  48 => 9,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
