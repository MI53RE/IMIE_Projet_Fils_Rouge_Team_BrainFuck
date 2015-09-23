<?php

/* TBFBundle:Default:connexion.html.twig */
class __TwigTemplate_529ac645fb6a848c07292cdb944a28b4c44abd0cbd5bc99568960f5a530ef017 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8145fa7fba1ccd65e151aeb7a8d4a7a92b4f1f34d2fbe7fd2b04768c939885a = $this->env->getExtension("native_profiler");
        $__internal_f8145fa7fba1ccd65e151aeb7a8d4a7a92b4f1f34d2fbe7fd2b04768c939885a->enter($__internal_f8145fa7fba1ccd65e151aeb7a8d4a7a92b4f1f34d2fbe7fd2b04768c939885a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TBFBundle:Default:connexion.html.twig"));

        // line 1
        echo "<html>
  <head>
      <meta charset=\"UTF-8\" />
      <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
      ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
      <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
  </head>
  <body>
    <div id=\"loginModal\" class=\"modal show\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
            <h1 class=\"text-center\">Connexion</h1>
          </div>
          <div class=\"modal-body\">
            <form class=\"form col-md-12 center-block\">
              <div class=\"form-group\">
                <input type=\"text\" class=\"form-control input-lg\" placeholder=\"Identifiant\">
              </div>
              <div class=\"form-group\">
                <input type=\"password\" class=\"form-control input-lg\" placeholder=\"Mot de passe\">
              </div>
              <div class=\"form-group\">
                <button class=\"btn btn-primary btn-lg btn-block\">Valider</button>
                <span class=\"pull-right\"><a href=\"#\">Demander un identifiant ?</a></span>
              </div>
            </form>
          </div>
          <div class=\"modal-footer\">
            <div class=\"col-md-12\">
              <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("tbf_homepage");
        echo "\"><button class=\"btn btn-cta-primary\" data-dismiss=\"modal\" aria-hidden=\"true\">Annuler</button></a>
            </div>\t
          </div>
        </div>
      </div>
    </div>
    ";
        // line 44
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "  </body>
</html>";
        
        $__internal_f8145fa7fba1ccd65e151aeb7a8d4a7a92b4f1f34d2fbe7fd2b04768c939885a->leave($__internal_f8145fa7fba1ccd65e151aeb7a8d4a7a92b4f1f34d2fbe7fd2b04768c939885a_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ad53cb4a250a5e3045b10bb9dd58ffe1411ffcd7703b7538d9d1a5f7eda196e = $this->env->getExtension("native_profiler");
        $__internal_5ad53cb4a250a5e3045b10bb9dd58ffe1411ffcd7703b7538d9d1a5f7eda196e->enter($__internal_5ad53cb4a250a5e3045b10bb9dd58ffe1411ffcd7703b7538d9d1a5f7eda196e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue !";
        
        $__internal_5ad53cb4a250a5e3045b10bb9dd58ffe1411ffcd7703b7538d9d1a5f7eda196e->leave($__internal_5ad53cb4a250a5e3045b10bb9dd58ffe1411ffcd7703b7538d9d1a5f7eda196e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5f2906fe1b4a47d455ea94ee5a7ead11516e9c4aed9d3f95392e6a0f56ac40bc = $this->env->getExtension("native_profiler");
        $__internal_5f2906fe1b4a47d455ea94ee5a7ead11516e9c4aed9d3f95392e6a0f56ac40bc->enter($__internal_5f2906fe1b4a47d455ea94ee5a7ead11516e9c4aed9d3f95392e6a0f56ac40bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "         ";
        // line 7
        echo "          <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/TBF/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
          <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/TBF/plugins/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\">
          <link id=\"theme-style\" rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/TBF/css/styles.css"), "html", null, true);
        echo "\">
      ";
        
        $__internal_5f2906fe1b4a47d455ea94ee5a7ead11516e9c4aed9d3f95392e6a0f56ac40bc->leave($__internal_5f2906fe1b4a47d455ea94ee5a7ead11516e9c4aed9d3f95392e6a0f56ac40bc_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dac9dd090aed4c2da4805b6c07a2713935bedebd62ef76b0fd6df02f5670b9e7 = $this->env->getExtension("native_profiler");
        $__internal_dac9dd090aed4c2da4805b6c07a2713935bedebd62ef76b0fd6df02f5670b9e7->enter($__internal_dac9dd090aed4c2da4805b6c07a2713935bedebd62ef76b0fd6df02f5670b9e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/TBF/plugins/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/TBF/plugins/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/TBF/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/TBF/plugins/jquery-rss/dist/jquery.rss.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/TBF/js/main.js"), "html", null, true);
        echo "\"></script>  
    ";
        
        $__internal_dac9dd090aed4c2da4805b6c07a2713935bedebd62ef76b0fd6df02f5670b9e7->leave($__internal_dac9dd090aed4c2da4805b6c07a2713935bedebd62ef76b0fd6df02f5670b9e7_prof);

    }

    public function getTemplateName()
    {
        return "TBFBundle:Default:connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 49,  144 => 48,  140 => 47,  136 => 46,  131 => 45,  125 => 44,  116 => 9,  112 => 8,  107 => 7,  105 => 6,  99 => 5,  87 => 4,  79 => 51,  77 => 44,  68 => 38,  39 => 12,  36 => 11,  34 => 5,  30 => 4,  25 => 1,);
    }
}
