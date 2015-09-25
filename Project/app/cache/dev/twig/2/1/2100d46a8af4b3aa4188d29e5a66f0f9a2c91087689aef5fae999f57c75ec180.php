<?php

/* base.html.twig */
class __TwigTemplate_2100d46a8af4b3aa4188d29e5a66f0f9a2c91087689aef5fae999f57c75ec180 extends Twig_Template
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
        $__internal_7bd2902b487af505102de1135759c0af934c35574225b43e8ba3358d5d0a3f9a = $this->env->getExtension("native_profiler");
        $__internal_7bd2902b487af505102de1135759c0af934c35574225b43e8ba3358d5d0a3f9a->enter($__internal_7bd2902b487af505102de1135759c0af934c35574225b43e8ba3358d5d0a3f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                    <a class=\"btn btn-cta-primary input-file-bt pull-right\" href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("tbf_connexion");
        echo "\"><i class=\"glyphicon glyphicon-user\"></i> Connexion</a>              
                </div>
                <div class=\"pull-middle\">
                    <form id=\"search\" action=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("tbf_search_result");
        echo "\" method=\"POST\">
                        <div class=\"input-group\">
                            <input class=\"form-control input-sm input-file-sm\" name=\"search\" type=\"text\" placeholder=\"Rechercher ...\"/>
                            <span class=\"input-group-btn\"> 
                                <button type=\"submit\" class=\"btn btn-primary input-file-bt\">Ok</button>
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
        
        $__internal_7bd2902b487af505102de1135759c0af934c35574225b43e8ba3358d5d0a3f9a->leave($__internal_7bd2902b487af505102de1135759c0af934c35574225b43e8ba3358d5d0a3f9a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_faf4af64f26c2395441e3228edfbdf729ca2925bbaa9a66fbc3b15326f848394 = $this->env->getExtension("native_profiler");
        $__internal_faf4af64f26c2395441e3228edfbdf729ca2925bbaa9a66fbc3b15326f848394->enter($__internal_faf4af64f26c2395441e3228edfbdf729ca2925bbaa9a66fbc3b15326f848394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue !";
        
        $__internal_faf4af64f26c2395441e3228edfbdf729ca2925bbaa9a66fbc3b15326f848394->leave($__internal_faf4af64f26c2395441e3228edfbdf729ca2925bbaa9a66fbc3b15326f848394_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a36ffd5b05ecd71aea177471f435bec586f6b5111d9b02a1f4dda13182cfd88d = $this->env->getExtension("native_profiler");
        $__internal_a36ffd5b05ecd71aea177471f435bec586f6b5111d9b02a1f4dda13182cfd88d->enter($__internal_a36ffd5b05ecd71aea177471f435bec586f6b5111d9b02a1f4dda13182cfd88d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_a36ffd5b05ecd71aea177471f435bec586f6b5111d9b02a1f4dda13182cfd88d->leave($__internal_a36ffd5b05ecd71aea177471f435bec586f6b5111d9b02a1f4dda13182cfd88d_prof);

    }

    // line 43
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7b4775aa1214fcc6c7f12b32de22357b2b4cb86beaae57fb8e376a818e100c69 = $this->env->getExtension("native_profiler");
        $__internal_7b4775aa1214fcc6c7f12b32de22357b2b4cb86beaae57fb8e376a818e100c69->enter($__internal_7b4775aa1214fcc6c7f12b32de22357b2b4cb86beaae57fb8e376a818e100c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 44
        echo "                            ";
        $this->loadTemplate("menu.html.twig", "base.html.twig", 44)->display($context);
        // line 45
        echo "                        ";
        
        $__internal_7b4775aa1214fcc6c7f12b32de22357b2b4cb86beaae57fb8e376a818e100c69->leave($__internal_7b4775aa1214fcc6c7f12b32de22357b2b4cb86beaae57fb8e376a818e100c69_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_94f26a7facf92c0deed8a353dac1c56cbca60064623eada088faec91b496e723 = $this->env->getExtension("native_profiler");
        $__internal_94f26a7facf92c0deed8a353dac1c56cbca60064623eada088faec91b496e723->enter($__internal_94f26a7facf92c0deed8a353dac1c56cbca60064623eada088faec91b496e723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_94f26a7facf92c0deed8a353dac1c56cbca60064623eada088faec91b496e723->leave($__internal_94f26a7facf92c0deed8a353dac1c56cbca60064623eada088faec91b496e723_prof);

    }

    // line 153
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f27eecdfb5a4033d9a9b9510a528f0eaaca5827e627019237b6276073fac4fef = $this->env->getExtension("native_profiler");
        $__internal_f27eecdfb5a4033d9a9b9510a528f0eaaca5827e627019237b6276073fac4fef->enter($__internal_f27eecdfb5a4033d9a9b9510a528f0eaaca5827e627019237b6276073fac4fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_f27eecdfb5a4033d9a9b9510a528f0eaaca5827e627019237b6276073fac4fef->leave($__internal_f27eecdfb5a4033d9a9b9510a528f0eaaca5827e627019237b6276073fac4fef_prof);

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
