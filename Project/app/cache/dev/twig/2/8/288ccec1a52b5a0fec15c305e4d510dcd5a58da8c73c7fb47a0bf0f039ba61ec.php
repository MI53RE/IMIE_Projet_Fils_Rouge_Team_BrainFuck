<?php

/* base.html.twig */
class __TwigTemplate_288ccec1a52b5a0fec15c305e4d510dcd5a58da8c73c7fb47a0bf0f039ba61ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_000c21bd6257428e18e945afee34b0b6472aeced9c716cb4339e1aec057de78d = $this->env->getExtension("native_profiler");
        $__internal_000c21bd6257428e18e945afee34b0b6472aeced9c716cb4339e1aec057de78d->enter($__internal_000c21bd6257428e18e945afee34b0b6472aeced9c716cb4339e1aec057de78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <header class=\"header\">
            <div class=\"container\"> 
                <img class=\"profile-image img-responsive pull-left\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/img/logo.png"), "html", null, true);
        echo "\" alt=\"James Lee\" />
                <div class=\"profile-content pull-left\">
                    <h1 class=\"name\">IMIE PROJECT</h1>
                    <h2 class=\"desc\">Projets et compétences</h2>   
                </div><!--//profile-->
                <form action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("tbf_search_result");
        echo "\" method=\"GET\">
                    <input name=\"search\" type=\"text\" placeholder=\"recherche...\"/>
                    <button>Vas chercher!</button>
                </form>
                <div>  
                    <a class=\"btn btn-cta-primary pull-right\" href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("tbf_connexion");
        echo "\"><i class=\"glyphicon glyphicon-user\"></i> Connexion</a>              
                </div>             
            </div><!--//container-->
        </header><!-- /header --> 
        <main>
            <div class=\"container sections-wrapper\">
                <div class=\"row\">    
                    <div class=\"col-12\">  
                        ";
        // line 37
        $this->displayBlock('menu', $context, $blocks);
        // line 40
        echo "                    </div><!--//col-12-->
                </div><!--//row-->
                    ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 140
        echo "            </div>   
        </main>
        <footer class=\"footer\">
            <div class=\"container text-center\">
                <small class=\"copyright\">IMIE PROJECT realisé par la team brain-fuck</small>
            </div><!--//container-->
        </footer><!--//footer--> 
        ";
        // line 147
        $this->displayBlock('javascripts', $context, $blocks);
        // line 154
        echo "    </body>
</html>
";
        
        $__internal_000c21bd6257428e18e945afee34b0b6472aeced9c716cb4339e1aec057de78d->leave($__internal_000c21bd6257428e18e945afee34b0b6472aeced9c716cb4339e1aec057de78d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff6e1699fee5633488fa48a459f1a935afc356ac2354f400d2088575a83d39c0 = $this->env->getExtension("native_profiler");
        $__internal_ff6e1699fee5633488fa48a459f1a935afc356ac2354f400d2088575a83d39c0->enter($__internal_ff6e1699fee5633488fa48a459f1a935afc356ac2354f400d2088575a83d39c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue !";
        
        $__internal_ff6e1699fee5633488fa48a459f1a935afc356ac2354f400d2088575a83d39c0->leave($__internal_ff6e1699fee5633488fa48a459f1a935afc356ac2354f400d2088575a83d39c0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e1491c8f67c388ef8d2839b1a8704b9607a20c03e07c47ff2aea68ca6a411e34 = $this->env->getExtension("native_profiler");
        $__internal_e1491c8f67c388ef8d2839b1a8704b9607a20c03e07c47ff2aea68ca6a411e34->enter($__internal_e1491c8f67c388ef8d2839b1a8704b9607a20c03e07c47ff2aea68ca6a411e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "           ";
        // line 8
        echo "
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/TBF/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/TBF/plugins/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\">
            <link id=\"theme-style\" rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/TBF/css/styles.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_e1491c8f67c388ef8d2839b1a8704b9607a20c03e07c47ff2aea68ca6a411e34->leave($__internal_e1491c8f67c388ef8d2839b1a8704b9607a20c03e07c47ff2aea68ca6a411e34_prof);

    }

    // line 37
    public function block_menu($context, array $blocks = array())
    {
        $__internal_28ab9ff8cd0924c95fe8fb1048206f8984e165afaa1512d68665b0cfc04245e5 = $this->env->getExtension("native_profiler");
        $__internal_28ab9ff8cd0924c95fe8fb1048206f8984e165afaa1512d68665b0cfc04245e5->enter($__internal_28ab9ff8cd0924c95fe8fb1048206f8984e165afaa1512d68665b0cfc04245e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 38
        echo "                            ";
        $this->loadTemplate("menu.html.twig", "base.html.twig", 38)->display($context);
        // line 39
        echo "                        ";
        
        $__internal_28ab9ff8cd0924c95fe8fb1048206f8984e165afaa1512d68665b0cfc04245e5->leave($__internal_28ab9ff8cd0924c95fe8fb1048206f8984e165afaa1512d68665b0cfc04245e5_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_411b5b740c05393cde9da39dae91b9f5c7fe3b1cd7593dd105f37a44a06b44a1 = $this->env->getExtension("native_profiler");
        $__internal_411b5b740c05393cde9da39dae91b9f5c7fe3b1cd7593dd105f37a44a06b44a1->enter($__internal_411b5b740c05393cde9da39dae91b9f5c7fe3b1cd7593dd105f37a44a06b44a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 43
        echo "

                        <div class=\"container sections-wrapper\">
                            <div class=\"row\">
                                <div class=\"primary col-md-6 col-sm-12 col-xs-12\">
                                    <section class=\"about section\">
                                        <div class=\"section-inner\">
                                            <h2 class=\"heading\">News</h2>
                                            <div class=\"content\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                jdhfkjsdhfkdjhfkdjshfkdsjhfkdshjfkdsjhfkdsjhfkdsjhfkdjhfkdshjfk</p>
                                            </div><!--//content-->
                                        </div><!--//section-inner-->                 
                                    </section><!--//section-->
                                </div><!--//primary-->
                                <div class=\"secondary col-md-6 col-sm-12 col-xs-12\">
                                    <aside class=\"skills aside section\">
                                        <div class=\"section-inner\">
                                            <h2 class=\"heading\">Projet 1</h2>
                                            <div class=\"content\">
                                                <p class=\"intro\">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            </div><!--//content-->  
                                        </div><!--//section-inner-->                 
                                    </aside><!--//section-->
                                    <aside class=\"skills aside section\">
                                        <div class=\"section-inner\">
                                            <h2 class=\"heading\">Projet 2</h2>
                                            <div class=\"content\">
                                                <p class=\"intro\">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            </div><!--//content-->  
                                        </div><!--//section-inner-->                 
                                    </aside><!--//section-->
                                    <aside class=\"skills aside section\">
                                        <div class=\"section-inner\">
                                            <h2 class=\"heading\">Projet 3</h2>
                                            <div class=\"content\">
                                                <p class=\"intro\">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            </div><!--//content-->  
                                        </div><!--//section-inner-->                 
                                    </aside><!--//section-->
                                </div><!--//secondary-->    
                            </div><!--//row-->
                        </div><!--//sections-wrapper-->



                    ";
        
        $__internal_411b5b740c05393cde9da39dae91b9f5c7fe3b1cd7593dd105f37a44a06b44a1->leave($__internal_411b5b740c05393cde9da39dae91b9f5c7fe3b1cd7593dd105f37a44a06b44a1_prof);

    }

    // line 147
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2b3892b7c77f8afbcbac7e85f9e60c526235d71bc8506fcd718a24bb22411b89 = $this->env->getExtension("native_profiler");
        $__internal_2b3892b7c77f8afbcbac7e85f9e60c526235d71bc8506fcd718a24bb22411b89->enter($__internal_2b3892b7c77f8afbcbac7e85f9e60c526235d71bc8506fcd718a24bb22411b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 148
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/TBF/plugins/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/TBF/plugins/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/TBF/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/TBF/plugins/jquery-rss/dist/jquery.rss.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/TBF/js/main.js"), "html", null, true);
        echo "\"></script>  
        ";
        
        $__internal_2b3892b7c77f8afbcbac7e85f9e60c526235d71bc8506fcd718a24bb22411b89->leave($__internal_2b3892b7c77f8afbcbac7e85f9e60c526235d71bc8506fcd718a24bb22411b89_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 152,  289 => 151,  285 => 150,  281 => 149,  276 => 148,  270 => 147,  167 => 43,  161 => 42,  154 => 39,  151 => 38,  145 => 37,  136 => 11,  132 => 10,  128 => 9,  125 => 8,  123 => 7,  117 => 6,  105 => 5,  96 => 154,  94 => 147,  85 => 140,  83 => 42,  79 => 40,  77 => 37,  66 => 29,  58 => 24,  50 => 19,  42 => 14,  39 => 13,  37 => 6,  33 => 5,  27 => 1,);
    }
}
