<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_5e9d2a917f2c817f4afb99a7cacba51c5c8c869aeb92f39934fe777f2b285a8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_972fd4da777df0b5161274a62003be76a4c0db975bdb5fdb2e06a670184e6ed5 = $this->env->getExtension("native_profiler");
        $__internal_972fd4da777df0b5161274a62003be76a4c0db975bdb5fdb2e06a670184e6ed5->enter($__internal_972fd4da777df0b5161274a62003be76a4c0db975bdb5fdb2e06a670184e6ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_972fd4da777df0b5161274a62003be76a4c0db975bdb5fdb2e06a670184e6ed5->leave($__internal_972fd4da777df0b5161274a62003be76a4c0db975bdb5fdb2e06a670184e6ed5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c587bb3e77e2cf36aee2f1670090c45c69bf668d8270d34a6e17fb7379b4e60c = $this->env->getExtension("native_profiler");
        $__internal_c587bb3e77e2cf36aee2f1670090c45c69bf668d8270d34a6e17fb7379b4e60c->enter($__internal_c587bb3e77e2cf36aee2f1670090c45c69bf668d8270d34a6e17fb7379b4e60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
<div id=\"loginModal\" class=\"modal show\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          \t<div class=\"modal-header\">
            \t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
            \t<h1 class=\"text-center\">Connexion</h1>
          \t</div>
              \t<form class=\"form col-md-12 center-block\" action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\"> 
\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"form-control input-lg\" placeholder=\"Identifiant\"/>

\t\t\t\t\t    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control input-lg\" placeholder=\"Mot de passe\" />

\t\t\t\t\t    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t\t\t\t    <label for=\"remember_me\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Se souvenir de moi", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t\t\t</div>
\t    \t\t\t<div class=\"form-group\">
\t        \t\t\t<button class=\"btn btn-primary btn-lg btn-block\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">Valider</button>
\t        \t\t\t<span class=\"pull-right\"><a href=\"#\">Demander un identifiant ?</a></span>
\t        \t\t</div>
\t        \t</form>\t
        \t
        \t<div class=\"modal-footer\">
            \t<div class=\"col-md-12\">
              \t\t<a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("tbf_homepage");
        echo "\"><button class=\"btn btn-cta-primary\" data-dismiss=\"modal\" aria-hidden=\"true\">Annuler</button></a>
            \t</div>\t
          \t</div>
        </div>
    </div>
</div>


";
        
        $__internal_c587bb3e77e2cf36aee2f1670090c45c69bf668d8270d34a6e17fb7379b4e60c->leave($__internal_c587bb3e77e2cf36aee2f1670090c45c69bf668d8270d34a6e17fb7379b4e60c_prof);

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
        return array (  91 => 35,  81 => 28,  75 => 25,  67 => 20,  62 => 18,  58 => 17,  48 => 9,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
