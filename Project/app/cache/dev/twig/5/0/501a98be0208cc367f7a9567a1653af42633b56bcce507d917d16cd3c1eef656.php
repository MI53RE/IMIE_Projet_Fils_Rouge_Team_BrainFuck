<?php

/* TBFBundle:Default:connexion.html.twig */
class __TwigTemplate_501a98be0208cc367f7a9567a1653af42633b56bcce507d917d16cd3c1eef656 extends Twig_Template
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
        $__internal_b7b1e4189b054a37dc1bc7a1a28d03165c32a49626953bbc39ade8dc77e0d412 = $this->env->getExtension("native_profiler");
        $__internal_b7b1e4189b054a37dc1bc7a1a28d03165c32a49626953bbc39ade8dc77e0d412->enter($__internal_b7b1e4189b054a37dc1bc7a1a28d03165c32a49626953bbc39ade8dc77e0d412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TBFBundle:Default:connexion.html.twig"));

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
        
        $__internal_b7b1e4189b054a37dc1bc7a1a28d03165c32a49626953bbc39ade8dc77e0d412->leave($__internal_b7b1e4189b054a37dc1bc7a1a28d03165c32a49626953bbc39ade8dc77e0d412_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa33e0e75d9d9a6b230c08b2cd5a6b377dd6ec6e40a9d048354401eec12c1037 = $this->env->getExtension("native_profiler");
        $__internal_fa33e0e75d9d9a6b230c08b2cd5a6b377dd6ec6e40a9d048354401eec12c1037->enter($__internal_fa33e0e75d9d9a6b230c08b2cd5a6b377dd6ec6e40a9d048354401eec12c1037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue !";
        
        $__internal_fa33e0e75d9d9a6b230c08b2cd5a6b377dd6ec6e40a9d048354401eec12c1037->leave($__internal_fa33e0e75d9d9a6b230c08b2cd5a6b377dd6ec6e40a9d048354401eec12c1037_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5de6a2da869b0edfa5263d11c082d930ae4c463d314c89287792242b13bf79d6 = $this->env->getExtension("native_profiler");
        $__internal_5de6a2da869b0edfa5263d11c082d930ae4c463d314c89287792242b13bf79d6->enter($__internal_5de6a2da869b0edfa5263d11c082d930ae4c463d314c89287792242b13bf79d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_5de6a2da869b0edfa5263d11c082d930ae4c463d314c89287792242b13bf79d6->leave($__internal_5de6a2da869b0edfa5263d11c082d930ae4c463d314c89287792242b13bf79d6_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f1b085267783e12d5b758baccf29799647c1c02bda0f0fa9434d017d06d6fb90 = $this->env->getExtension("native_profiler");
        $__internal_f1b085267783e12d5b758baccf29799647c1c02bda0f0fa9434d017d06d6fb90->enter($__internal_f1b085267783e12d5b758baccf29799647c1c02bda0f0fa9434d017d06d6fb90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_f1b085267783e12d5b758baccf29799647c1c02bda0f0fa9434d017d06d6fb90->leave($__internal_f1b085267783e12d5b758baccf29799647c1c02bda0f0fa9434d017d06d6fb90_prof);

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
