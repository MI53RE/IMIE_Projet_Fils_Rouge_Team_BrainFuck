<?php

/* base.html.twig */
class __TwigTemplate_235bff308fcd10624e223411c7573e11d205ff894ba2145d8a26b940ad035f6d extends Twig_Template
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
        $__internal_fa454ee07fdbbbac6c072388c79a2359b778e0245f6fd929ea2842ea6cfb2ed2 = $this->env->getExtension("native_profiler");
        $__internal_fa454ee07fdbbbac6c072388c79a2359b778e0245f6fd929ea2842ea6cfb2ed2->enter($__internal_fa454ee07fdbbbac6c072388c79a2359b778e0245f6fd929ea2842ea6cfb2ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                    <a class=\"btn btn-cta-primary pull-right\" href=\"#\" target=\"_blank\"><i class=\"glyphicon glyphicon-user\"></i> Connexion</a>              
                </div>
                
             </div><!--//container-->
        </header><!-- /header --> 
        <main>
            <div class=\"container sections-wrapper\">
                <div class=\"row\">    
                    <div class=\"col-12\">  
                        ";
        // line 33
        $this->displayBlock('menu', $context, $blocks);
        // line 36
        echo "                    </div><!--//col-12-->
                </div><!--//row-->
                    ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 136
        echo "            </div>   
        </main>
        <footer class=\"footer\">
            <div class=\"container text-center\">
                <small class=\"copyright\">IMIE PROJECT realisé par la team brain-fuck</small>
            </div><!--//container-->
        </footer><!--//footer--> 
        ";
        // line 143
        $this->displayBlock('javascripts', $context, $blocks);
        // line 150
        echo "    </body>
</html>
";
        
        $__internal_fa454ee07fdbbbac6c072388c79a2359b778e0245f6fd929ea2842ea6cfb2ed2->leave($__internal_fa454ee07fdbbbac6c072388c79a2359b778e0245f6fd929ea2842ea6cfb2ed2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b764d90f70110e98419f7ed972b7409d46605a1400445ab32b53f51df7c66e92 = $this->env->getExtension("native_profiler");
        $__internal_b764d90f70110e98419f7ed972b7409d46605a1400445ab32b53f51df7c66e92->enter($__internal_b764d90f70110e98419f7ed972b7409d46605a1400445ab32b53f51df7c66e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue !";
        
        $__internal_b764d90f70110e98419f7ed972b7409d46605a1400445ab32b53f51df7c66e92->leave($__internal_b764d90f70110e98419f7ed972b7409d46605a1400445ab32b53f51df7c66e92_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0e70e7c399579fb02fcff575a7d945d4ed359b603e82cd3824472e348f5120a1 = $this->env->getExtension("native_profiler");
        $__internal_0e70e7c399579fb02fcff575a7d945d4ed359b603e82cd3824472e348f5120a1->enter($__internal_0e70e7c399579fb02fcff575a7d945d4ed359b603e82cd3824472e348f5120a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_0e70e7c399579fb02fcff575a7d945d4ed359b603e82cd3824472e348f5120a1->leave($__internal_0e70e7c399579fb02fcff575a7d945d4ed359b603e82cd3824472e348f5120a1_prof);

    }

    // line 33
    public function block_menu($context, array $blocks = array())
    {
        $__internal_32e29f2ee141f0c4b68159c41863f0a5a890ac9daf2fc759506619f10483677b = $this->env->getExtension("native_profiler");
        $__internal_32e29f2ee141f0c4b68159c41863f0a5a890ac9daf2fc759506619f10483677b->enter($__internal_32e29f2ee141f0c4b68159c41863f0a5a890ac9daf2fc759506619f10483677b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 34
        echo "                            ";
        $this->loadTemplate("menu.html.twig", "base.html.twig", 34)->display($context);
        // line 35
        echo "                        ";
        
        $__internal_32e29f2ee141f0c4b68159c41863f0a5a890ac9daf2fc759506619f10483677b->leave($__internal_32e29f2ee141f0c4b68159c41863f0a5a890ac9daf2fc759506619f10483677b_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_611e7c017243f5030e35cdd83414216b57fd66a13dea89c18201db13264af1eb = $this->env->getExtension("native_profiler");
        $__internal_611e7c017243f5030e35cdd83414216b57fd66a13dea89c18201db13264af1eb->enter($__internal_611e7c017243f5030e35cdd83414216b57fd66a13dea89c18201db13264af1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 39
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
        
        $__internal_611e7c017243f5030e35cdd83414216b57fd66a13dea89c18201db13264af1eb->leave($__internal_611e7c017243f5030e35cdd83414216b57fd66a13dea89c18201db13264af1eb_prof);

    }

    // line 143
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2321d2ce9ad470f3e5a2f0a7714e68e1bdcc11465ff0dc0b2ccb71fd66d22848 = $this->env->getExtension("native_profiler");
        $__internal_2321d2ce9ad470f3e5a2f0a7714e68e1bdcc11465ff0dc0b2ccb71fd66d22848->enter($__internal_2321d2ce9ad470f3e5a2f0a7714e68e1bdcc11465ff0dc0b2ccb71fd66d22848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 144
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/TBF/plugins/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/TBF/plugins/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/TBF/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/TBF/plugins/jquery-rss/dist/jquery.rss.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/TBF/js/main.js"), "html", null, true);
        echo "\"></script>  
        ";
        
        $__internal_2321d2ce9ad470f3e5a2f0a7714e68e1bdcc11465ff0dc0b2ccb71fd66d22848->leave($__internal_2321d2ce9ad470f3e5a2f0a7714e68e1bdcc11465ff0dc0b2ccb71fd66d22848_prof);

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
        return array (  283 => 148,  279 => 147,  275 => 146,  271 => 145,  266 => 144,  260 => 143,  157 => 39,  151 => 38,  144 => 35,  141 => 34,  135 => 33,  126 => 11,  122 => 10,  118 => 9,  115 => 8,  113 => 7,  107 => 6,  95 => 5,  86 => 150,  84 => 143,  75 => 136,  73 => 38,  69 => 36,  67 => 33,  50 => 19,  42 => 14,  39 => 13,  37 => 6,  33 => 5,  27 => 1,);
    }
}
