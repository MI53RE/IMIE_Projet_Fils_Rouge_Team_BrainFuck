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
        $__internal_6d71757283396b55f6a855084203a7cd875cac9250932cfe3bc65bcd442fb964 = $this->env->getExtension("native_profiler");
        $__internal_6d71757283396b55f6a855084203a7cd875cac9250932cfe3bc65bcd442fb964->enter($__internal_6d71757283396b55f6a855084203a7cd875cac9250932cfe3bc65bcd442fb964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_6d71757283396b55f6a855084203a7cd875cac9250932cfe3bc65bcd442fb964->leave($__internal_6d71757283396b55f6a855084203a7cd875cac9250932cfe3bc65bcd442fb964_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5fa2996aa61f33a7353ecf431dea51322fcec02bf367f1490ff4e2ac5811712f = $this->env->getExtension("native_profiler");
        $__internal_5fa2996aa61f33a7353ecf431dea51322fcec02bf367f1490ff4e2ac5811712f->enter($__internal_5fa2996aa61f33a7353ecf431dea51322fcec02bf367f1490ff4e2ac5811712f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue !";
        
        $__internal_5fa2996aa61f33a7353ecf431dea51322fcec02bf367f1490ff4e2ac5811712f->leave($__internal_5fa2996aa61f33a7353ecf431dea51322fcec02bf367f1490ff4e2ac5811712f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1545f6bf544c09c078058bb7051211866f228dd645be361cfaf3a8fda34e8d72 = $this->env->getExtension("native_profiler");
        $__internal_1545f6bf544c09c078058bb7051211866f228dd645be361cfaf3a8fda34e8d72->enter($__internal_1545f6bf544c09c078058bb7051211866f228dd645be361cfaf3a8fda34e8d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_1545f6bf544c09c078058bb7051211866f228dd645be361cfaf3a8fda34e8d72->leave($__internal_1545f6bf544c09c078058bb7051211866f228dd645be361cfaf3a8fda34e8d72_prof);

    }

    // line 33
    public function block_menu($context, array $blocks = array())
    {
        $__internal_71bd8a6c354fcb36f852e0cfb4460eb137f21c97389652a60a8eeb1c4d1ebcfc = $this->env->getExtension("native_profiler");
        $__internal_71bd8a6c354fcb36f852e0cfb4460eb137f21c97389652a60a8eeb1c4d1ebcfc->enter($__internal_71bd8a6c354fcb36f852e0cfb4460eb137f21c97389652a60a8eeb1c4d1ebcfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 34
        echo "                            ";
        $this->loadTemplate("menu.html.twig", "base.html.twig", 34)->display($context);
        // line 35
        echo "                        ";
        
        $__internal_71bd8a6c354fcb36f852e0cfb4460eb137f21c97389652a60a8eeb1c4d1ebcfc->leave($__internal_71bd8a6c354fcb36f852e0cfb4460eb137f21c97389652a60a8eeb1c4d1ebcfc_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_8045e989bdfac948e266515f5d9f3d69f9d09e6a5e8e933de0fb1c7b912c3bee = $this->env->getExtension("native_profiler");
        $__internal_8045e989bdfac948e266515f5d9f3d69f9d09e6a5e8e933de0fb1c7b912c3bee->enter($__internal_8045e989bdfac948e266515f5d9f3d69f9d09e6a5e8e933de0fb1c7b912c3bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8045e989bdfac948e266515f5d9f3d69f9d09e6a5e8e933de0fb1c7b912c3bee->leave($__internal_8045e989bdfac948e266515f5d9f3d69f9d09e6a5e8e933de0fb1c7b912c3bee_prof);

    }

    // line 143
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ca68e01d7570889384d23b611d9c17af3db155add2c47d19ddbf258077284681 = $this->env->getExtension("native_profiler");
        $__internal_ca68e01d7570889384d23b611d9c17af3db155add2c47d19ddbf258077284681->enter($__internal_ca68e01d7570889384d23b611d9c17af3db155add2c47d19ddbf258077284681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_ca68e01d7570889384d23b611d9c17af3db155add2c47d19ddbf258077284681->leave($__internal_ca68e01d7570889384d23b611d9c17af3db155add2c47d19ddbf258077284681_prof);

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
