<?php

/* base.html.twig */
class __TwigTemplate_ebb8fad9fcac1ce20f06f68b43357f6889826bc4df0509c8f11b58a361986dc3 extends Twig_Template
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
        $__internal_b606f617df8ce4ea3716109f98d5d0bfdd8fd2debcbccfdc543a7859a0b86edc = $this->env->getExtension("native_profiler");
        $__internal_b606f617df8ce4ea3716109f98d5d0bfdd8fd2debcbccfdc543a7859a0b86edc->enter($__internal_b606f617df8ce4ea3716109f98d5d0bfdd8fd2debcbccfdc543a7859a0b86edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                    <a class=\"btn btn-cta-primary pull-right\" href=\"#\" target=\"_blank\"><i class=\"glyphicon glyphicon-user\"></i> Connexion</a>              
                </div>
        </header><!-- /header --> 
        <main>
            <div class=\"container sections-wrapper\">
                <div class=\"row\">    
                    <div class=\"col-12\">  
                        ";
        // line 35
        $this->displayBlock('menu', $context, $blocks);
        // line 38
        echo "                    </div><!--//col-12-->
                </div><!--//row-->
                    ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 138
        echo "            </div>   
        </main>
        <footer class=\"footer\">
            <div class=\"container text-center\">
                <small class=\"copyright\">IMIE PROJECT realisé par la team brain-fuck</small>
            </div><!--//container-->
        </footer><!--//footer--> 
        ";
        // line 145
        $this->displayBlock('javascripts', $context, $blocks);
        // line 152
        echo "    </body>
</html>
";
        
        $__internal_b606f617df8ce4ea3716109f98d5d0bfdd8fd2debcbccfdc543a7859a0b86edc->leave($__internal_b606f617df8ce4ea3716109f98d5d0bfdd8fd2debcbccfdc543a7859a0b86edc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a48ac1f8c91edc9e62e2d76ab389c6bb965bc04a2e7e0f401bd018a909a1c0c0 = $this->env->getExtension("native_profiler");
        $__internal_a48ac1f8c91edc9e62e2d76ab389c6bb965bc04a2e7e0f401bd018a909a1c0c0->enter($__internal_a48ac1f8c91edc9e62e2d76ab389c6bb965bc04a2e7e0f401bd018a909a1c0c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue !";
        
        $__internal_a48ac1f8c91edc9e62e2d76ab389c6bb965bc04a2e7e0f401bd018a909a1c0c0->leave($__internal_a48ac1f8c91edc9e62e2d76ab389c6bb965bc04a2e7e0f401bd018a909a1c0c0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8e65d77651e251e14931b542494e20d0df1a142d7da6c2fe528a555790373298 = $this->env->getExtension("native_profiler");
        $__internal_8e65d77651e251e14931b542494e20d0df1a142d7da6c2fe528a555790373298->enter($__internal_8e65d77651e251e14931b542494e20d0df1a142d7da6c2fe528a555790373298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_8e65d77651e251e14931b542494e20d0df1a142d7da6c2fe528a555790373298->leave($__internal_8e65d77651e251e14931b542494e20d0df1a142d7da6c2fe528a555790373298_prof);

    }

    // line 35
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c26dd50f7744248233853779de4c2b2af6f6961c881939c8a30ace97ec029d1a = $this->env->getExtension("native_profiler");
        $__internal_c26dd50f7744248233853779de4c2b2af6f6961c881939c8a30ace97ec029d1a->enter($__internal_c26dd50f7744248233853779de4c2b2af6f6961c881939c8a30ace97ec029d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 36
        echo "                            ";
        $this->loadTemplate("menu.html.twig", "base.html.twig", 36)->display($context);
        // line 37
        echo "                        ";
        
        $__internal_c26dd50f7744248233853779de4c2b2af6f6961c881939c8a30ace97ec029d1a->leave($__internal_c26dd50f7744248233853779de4c2b2af6f6961c881939c8a30ace97ec029d1a_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0f6399e879753bc29ac64eb148e67e20f385ea3598ce854831e72ae8a116a1b = $this->env->getExtension("native_profiler");
        $__internal_f0f6399e879753bc29ac64eb148e67e20f385ea3598ce854831e72ae8a116a1b->enter($__internal_f0f6399e879753bc29ac64eb148e67e20f385ea3598ce854831e72ae8a116a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 41
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
        
        $__internal_f0f6399e879753bc29ac64eb148e67e20f385ea3598ce854831e72ae8a116a1b->leave($__internal_f0f6399e879753bc29ac64eb148e67e20f385ea3598ce854831e72ae8a116a1b_prof);

    }

    // line 145
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_847f1a0030899caceb5442accc3476efa29261e65969c2f73e144a60463fd4b0 = $this->env->getExtension("native_profiler");
        $__internal_847f1a0030899caceb5442accc3476efa29261e65969c2f73e144a60463fd4b0->enter($__internal_847f1a0030899caceb5442accc3476efa29261e65969c2f73e144a60463fd4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 146
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/TBF/plugins/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/TBF/plugins/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/TBF/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/TBF/plugins/jquery-rss/dist/jquery.rss.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/TBF/js/main.js"), "html", null, true);
        echo "\"></script>  
        ";
        
        $__internal_847f1a0030899caceb5442accc3476efa29261e65969c2f73e144a60463fd4b0->leave($__internal_847f1a0030899caceb5442accc3476efa29261e65969c2f73e144a60463fd4b0_prof);

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
        return array (  288 => 150,  284 => 149,  280 => 148,  276 => 147,  271 => 146,  265 => 145,  162 => 41,  156 => 40,  149 => 37,  146 => 36,  140 => 35,  131 => 11,  127 => 10,  123 => 9,  120 => 8,  118 => 7,  112 => 6,  100 => 5,  91 => 152,  89 => 145,  80 => 138,  78 => 40,  74 => 38,  72 => 35,  58 => 24,  50 => 19,  42 => 14,  39 => 13,  37 => 6,  33 => 5,  27 => 1,);
    }
}
