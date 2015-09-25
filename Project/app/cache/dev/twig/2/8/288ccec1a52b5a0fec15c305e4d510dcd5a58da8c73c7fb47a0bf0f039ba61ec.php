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
        $__internal_796286098a3cae9e5b86ec84e97a6c8074ee94921cf0a36298989fa0d5f07b8c = $this->env->getExtension("native_profiler");
        $__internal_796286098a3cae9e5b86ec84e97a6c8074ee94921cf0a36298989fa0d5f07b8c->enter($__internal_796286098a3cae9e5b86ec84e97a6c8074ee94921cf0a36298989fa0d5f07b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
               <div>  
                    <a class=\"btn btn-cta-primary pull-right\" href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("tbf_connexion");
        echo "\"><i class=\"glyphicon glyphicon-user\"></i> Connexion</a>              
                </div>
                <div class=\"pull-middle\">
                    <form id=\"search\" action=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("tbf_search_result");
        echo "\" method=\"GET\">
                        <div class=\"input-group\">
                            <input class=\"form-control\" name=\"search\" type=\"text\" placeholder=\"Rechercher ...\"/>
                            <span class=\"input-group-btn\"> 
                                <button type=\"submit\" class=\"btn btn-primary\">Ok</button>
                            </span>
                        </div>
                    </form>
                </div>             
            </div><!--//container-->
        </header><!-- /header --> 
        <main>
            <div class=\"container sections-wrapper\">
                <div class=\"row\">    
                    <div class=\"col-12\">  
                        ";
        // line 43
        $this->displayBlock('menu', $context, $blocks);
        // line 46
        echo "                    </div><!--//col-12-->
                </div><!--//row-->
                    ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 146
        echo "            </div>   
        </main>
        <footer class=\"footer\">
            <div class=\"container text-center\">
                <small class=\"copyright\">IMIE PROJECT realisé par la team brain-fuck</small>
            </div><!--//container-->
        </footer><!--//footer--> 
        ";
        // line 153
        $this->displayBlock('javascripts', $context, $blocks);
        // line 160
        echo "    </body>
</html>";
        
        $__internal_796286098a3cae9e5b86ec84e97a6c8074ee94921cf0a36298989fa0d5f07b8c->leave($__internal_796286098a3cae9e5b86ec84e97a6c8074ee94921cf0a36298989fa0d5f07b8c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1fe7f49391748838fcb7022c7e2e8b360bb66ab309e1d9c79802874c26ca08d9 = $this->env->getExtension("native_profiler");
        $__internal_1fe7f49391748838fcb7022c7e2e8b360bb66ab309e1d9c79802874c26ca08d9->enter($__internal_1fe7f49391748838fcb7022c7e2e8b360bb66ab309e1d9c79802874c26ca08d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue !";
        
        $__internal_1fe7f49391748838fcb7022c7e2e8b360bb66ab309e1d9c79802874c26ca08d9->leave($__internal_1fe7f49391748838fcb7022c7e2e8b360bb66ab309e1d9c79802874c26ca08d9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aefff5e365dd19fc3dd4b85b8a5bbb9f57e1cdda891bb4951fb218d4b88099c8 = $this->env->getExtension("native_profiler");
        $__internal_aefff5e365dd19fc3dd4b85b8a5bbb9f57e1cdda891bb4951fb218d4b88099c8->enter($__internal_aefff5e365dd19fc3dd4b85b8a5bbb9f57e1cdda891bb4951fb218d4b88099c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_aefff5e365dd19fc3dd4b85b8a5bbb9f57e1cdda891bb4951fb218d4b88099c8->leave($__internal_aefff5e365dd19fc3dd4b85b8a5bbb9f57e1cdda891bb4951fb218d4b88099c8_prof);

    }

    // line 43
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1e25fd60f5539d1252875eb01bdd5a4273a5addd92450feb6673d2f1b4ffba07 = $this->env->getExtension("native_profiler");
        $__internal_1e25fd60f5539d1252875eb01bdd5a4273a5addd92450feb6673d2f1b4ffba07->enter($__internal_1e25fd60f5539d1252875eb01bdd5a4273a5addd92450feb6673d2f1b4ffba07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 44
        echo "                            ";
        $this->loadTemplate("menu.html.twig", "base.html.twig", 44)->display($context);
        // line 45
        echo "                        ";
        
        $__internal_1e25fd60f5539d1252875eb01bdd5a4273a5addd92450feb6673d2f1b4ffba07->leave($__internal_1e25fd60f5539d1252875eb01bdd5a4273a5addd92450feb6673d2f1b4ffba07_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5765fe22a9c5d6fe6260bd612432fab4936deed2a88524b00efeabeccfe4b78 = $this->env->getExtension("native_profiler");
        $__internal_b5765fe22a9c5d6fe6260bd612432fab4936deed2a88524b00efeabeccfe4b78->enter($__internal_b5765fe22a9c5d6fe6260bd612432fab4936deed2a88524b00efeabeccfe4b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 49
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
        
        $__internal_b5765fe22a9c5d6fe6260bd612432fab4936deed2a88524b00efeabeccfe4b78->leave($__internal_b5765fe22a9c5d6fe6260bd612432fab4936deed2a88524b00efeabeccfe4b78_prof);

    }

    // line 153
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c23dbdb5e556c0c9335fac835e1fbe859b81c2234a4415cc315f2184ac3e61f8 = $this->env->getExtension("native_profiler");
        $__internal_c23dbdb5e556c0c9335fac835e1fbe859b81c2234a4415cc315f2184ac3e61f8->enter($__internal_c23dbdb5e556c0c9335fac835e1fbe859b81c2234a4415cc315f2184ac3e61f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 154
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/TBF/plugins/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/TBF/plugins/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/TBF/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/TBF/plugins/jquery-rss/dist/jquery.rss.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/TBF/js/main.js"), "html", null, true);
        echo "\"></script>  
        ";
        
        $__internal_c23dbdb5e556c0c9335fac835e1fbe859b81c2234a4415cc315f2184ac3e61f8->leave($__internal_c23dbdb5e556c0c9335fac835e1fbe859b81c2234a4415cc315f2184ac3e61f8_prof);

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
        return array (  298 => 158,  294 => 157,  290 => 156,  286 => 155,  281 => 154,  275 => 153,  172 => 49,  166 => 48,  159 => 45,  156 => 44,  150 => 43,  141 => 11,  137 => 10,  133 => 9,  130 => 8,  128 => 7,  122 => 6,  110 => 5,  102 => 160,  100 => 153,  91 => 146,  89 => 48,  85 => 46,  83 => 43,  65 => 28,  59 => 25,  50 => 19,  42 => 14,  39 => 13,  37 => 6,  33 => 5,  27 => 1,);
    }
}
