<?php

/* base.html.twig */
class __TwigTemplate_92eaad1125c94b8a15e7ef01bc7dca1e41386a0e95702d35683249679596075d extends Twig_Template
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
        $__internal_98720a1cf1127d95aca7c7f81257bada0ac713ba08747b4f334b0047731d8a37 = $this->env->getExtension("native_profiler");
        $__internal_98720a1cf1127d95aca7c7f81257bada0ac713ba08747b4f334b0047731d8a37->enter($__internal_98720a1cf1127d95aca7c7f81257bada0ac713ba08747b4f334b0047731d8a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_98720a1cf1127d95aca7c7f81257bada0ac713ba08747b4f334b0047731d8a37->leave($__internal_98720a1cf1127d95aca7c7f81257bada0ac713ba08747b4f334b0047731d8a37_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_76d92845a059764daf0c82c399ec2e70d4f174bf7f5831d8f0bc98b69468fcbd = $this->env->getExtension("native_profiler");
        $__internal_76d92845a059764daf0c82c399ec2e70d4f174bf7f5831d8f0bc98b69468fcbd->enter($__internal_76d92845a059764daf0c82c399ec2e70d4f174bf7f5831d8f0bc98b69468fcbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue !";
        
        $__internal_76d92845a059764daf0c82c399ec2e70d4f174bf7f5831d8f0bc98b69468fcbd->leave($__internal_76d92845a059764daf0c82c399ec2e70d4f174bf7f5831d8f0bc98b69468fcbd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_039bf57efb04dd387f5c28e42b0da91aa770fe579fd03b69163f76f8618bca30 = $this->env->getExtension("native_profiler");
        $__internal_039bf57efb04dd387f5c28e42b0da91aa770fe579fd03b69163f76f8618bca30->enter($__internal_039bf57efb04dd387f5c28e42b0da91aa770fe579fd03b69163f76f8618bca30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_039bf57efb04dd387f5c28e42b0da91aa770fe579fd03b69163f76f8618bca30->leave($__internal_039bf57efb04dd387f5c28e42b0da91aa770fe579fd03b69163f76f8618bca30_prof);

    }

    // line 43
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e3d0ef8f224cc08cda9d10c00909f69269cf3ccf924a991f0c4049aa73209370 = $this->env->getExtension("native_profiler");
        $__internal_e3d0ef8f224cc08cda9d10c00909f69269cf3ccf924a991f0c4049aa73209370->enter($__internal_e3d0ef8f224cc08cda9d10c00909f69269cf3ccf924a991f0c4049aa73209370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 44
        echo "                            ";
        $this->loadTemplate("menu.html.twig", "base.html.twig", 44)->display($context);
        // line 45
        echo "                        ";
        
        $__internal_e3d0ef8f224cc08cda9d10c00909f69269cf3ccf924a991f0c4049aa73209370->leave($__internal_e3d0ef8f224cc08cda9d10c00909f69269cf3ccf924a991f0c4049aa73209370_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_0705c46bca46354f4c4ab4a6081ad3b6db4893ca5ea4117831ea10f54b036b67 = $this->env->getExtension("native_profiler");
        $__internal_0705c46bca46354f4c4ab4a6081ad3b6db4893ca5ea4117831ea10f54b036b67->enter($__internal_0705c46bca46354f4c4ab4a6081ad3b6db4893ca5ea4117831ea10f54b036b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0705c46bca46354f4c4ab4a6081ad3b6db4893ca5ea4117831ea10f54b036b67->leave($__internal_0705c46bca46354f4c4ab4a6081ad3b6db4893ca5ea4117831ea10f54b036b67_prof);

    }

    // line 153
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7c4fe96ba579628818545589f9a4ad0ebda8a3ad3c60e0d7b245ae838ee3859c = $this->env->getExtension("native_profiler");
        $__internal_7c4fe96ba579628818545589f9a4ad0ebda8a3ad3c60e0d7b245ae838ee3859c->enter($__internal_7c4fe96ba579628818545589f9a4ad0ebda8a3ad3c60e0d7b245ae838ee3859c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_7c4fe96ba579628818545589f9a4ad0ebda8a3ad3c60e0d7b245ae838ee3859c->leave($__internal_7c4fe96ba579628818545589f9a4ad0ebda8a3ad3c60e0d7b245ae838ee3859c_prof);

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
