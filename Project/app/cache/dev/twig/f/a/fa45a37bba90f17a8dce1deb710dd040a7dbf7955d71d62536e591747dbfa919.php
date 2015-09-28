<?php

/* ::base.html.twig */
class __TwigTemplate_fa45a37bba90f17a8dce1deb710dd040a7dbf7955d71d62536e591747dbfa919 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95217394ec415b0e6e30a793283c82a1e47801736d56206556ebd3d13cbb3ff4 = $this->env->getExtension("native_profiler");
        $__internal_95217394ec415b0e6e30a793283c82a1e47801736d56206556ebd3d13cbb3ff4->enter($__internal_95217394ec415b0e6e30a793283c82a1e47801736d56206556ebd3d13cbb3ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
    ";
        // line 17
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 19
        echo "        <header class=\"header\">
            <div class=\"container\"> 
                <img class=\"profile-image img-responsive pull-left\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/img/logo.png"), "html", null, true);
        echo "\" alt=\"James Lee\" />
                <div class=\"profile-content pull-left\">
                    <h1 class=\"name\">IMIE PROJECT</h1>
                    <h2 class=\"desc\">Projets et compétences</h2>   
                </div><!--//profile-->
               <div>  
                    <a class=\"btn btn-cta-primary input-file-bt pull-right\" href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("tbf_login");
        echo "\"><i class=\"glyphicon glyphicon-user\"></i> Connexion</a>              
                </div>
                <div class=\"pull-middle\">
                    <form id=\"search\" action=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("tbf_search_result");
        echo "\" method=\"GET\">
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
            
                <div class=\"row navigation\">    
                    <div class=\"navbar navbar-default\" role=\"navigation\">  
                        ";
        // line 45
        $this->displayBlock('menu', $context, $blocks);
        // line 48
        echo "                    </div>
                </div><!--//row navigation-->
                    ";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 149
        echo "            </div>   
        </main>
        <footer class=\"footer\">
            <div class=\"container text-center\">
                <small class=\"copyright\">IMIE PROJECT realisé par la team brain-fuck</small>
            </div><!--//container-->
        </footer><!--//footer--> 
        ";
        // line 156
        $this->displayBlock('javascripts', $context, $blocks);
        // line 163
        echo "    </body>
</html>";
        
        $__internal_95217394ec415b0e6e30a793283c82a1e47801736d56206556ebd3d13cbb3ff4->leave($__internal_95217394ec415b0e6e30a793283c82a1e47801736d56206556ebd3d13cbb3ff4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1a3f2c14b08d7e33eefee3172ac0ab4746f33d15afdec731bc6f7a30278a115f = $this->env->getExtension("native_profiler");
        $__internal_1a3f2c14b08d7e33eefee3172ac0ab4746f33d15afdec731bc6f7a30278a115f->enter($__internal_1a3f2c14b08d7e33eefee3172ac0ab4746f33d15afdec731bc6f7a30278a115f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "IMIE PROJECT-Accueil";
        
        $__internal_1a3f2c14b08d7e33eefee3172ac0ab4746f33d15afdec731bc6f7a30278a115f->leave($__internal_1a3f2c14b08d7e33eefee3172ac0ab4746f33d15afdec731bc6f7a30278a115f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_938c1ca59d197cbd0fbd7a238a686c9b6562c71e914a1f7912dff127a0ca3acd = $this->env->getExtension("native_profiler");
        $__internal_938c1ca59d197cbd0fbd7a238a686c9b6562c71e914a1f7912dff127a0ca3acd->enter($__internal_938c1ca59d197cbd0fbd7a238a686c9b6562c71e914a1f7912dff127a0ca3acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_938c1ca59d197cbd0fbd7a238a686c9b6562c71e914a1f7912dff127a0ca3acd->leave($__internal_938c1ca59d197cbd0fbd7a238a686c9b6562c71e914a1f7912dff127a0ca3acd_prof);

    }

    // line 17
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_062ca3d3fa6f5cf0b9a7dacae4ef158ffd0096aba0506f6cd985ab1ccf74488d = $this->env->getExtension("native_profiler");
        $__internal_062ca3d3fa6f5cf0b9a7dacae4ef158ffd0096aba0506f6cd985ab1ccf74488d->enter($__internal_062ca3d3fa6f5cf0b9a7dacae4ef158ffd0096aba0506f6cd985ab1ccf74488d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 18
        echo "    ";
        
        $__internal_062ca3d3fa6f5cf0b9a7dacae4ef158ffd0096aba0506f6cd985ab1ccf74488d->leave($__internal_062ca3d3fa6f5cf0b9a7dacae4ef158ffd0096aba0506f6cd985ab1ccf74488d_prof);

    }

    // line 45
    public function block_menu($context, array $blocks = array())
    {
        $__internal_631f131a9610e32c4c62c92eee8d54fc1e813bf826996193d8a56a843ea4cc7f = $this->env->getExtension("native_profiler");
        $__internal_631f131a9610e32c4c62c92eee8d54fc1e813bf826996193d8a56a843ea4cc7f->enter($__internal_631f131a9610e32c4c62c92eee8d54fc1e813bf826996193d8a56a843ea4cc7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 46
        echo "                            ";
        $this->loadTemplate("menu.html.twig", "::base.html.twig", 46)->display($context);
        // line 47
        echo "                        ";
        
        $__internal_631f131a9610e32c4c62c92eee8d54fc1e813bf826996193d8a56a843ea4cc7f->leave($__internal_631f131a9610e32c4c62c92eee8d54fc1e813bf826996193d8a56a843ea4cc7f_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd39fd0a2908f72f475e69fe13b16745db3fb0fd4dce84c462296abfc88839d3 = $this->env->getExtension("native_profiler");
        $__internal_dd39fd0a2908f72f475e69fe13b16745db3fb0fd4dce84c462296abfc88839d3->enter($__internal_dd39fd0a2908f72f475e69fe13b16745db3fb0fd4dce84c462296abfc88839d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 51
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
                        </div>
                       



                    ";
        
        $__internal_dd39fd0a2908f72f475e69fe13b16745db3fb0fd4dce84c462296abfc88839d3->leave($__internal_dd39fd0a2908f72f475e69fe13b16745db3fb0fd4dce84c462296abfc88839d3_prof);

    }

    // line 156
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1946de3142510c1a29b69ab6cd97dd68e2e22bd735364eb4ad686e0313c3b670 = $this->env->getExtension("native_profiler");
        $__internal_1946de3142510c1a29b69ab6cd97dd68e2e22bd735364eb4ad686e0313c3b670->enter($__internal_1946de3142510c1a29b69ab6cd97dd68e2e22bd735364eb4ad686e0313c3b670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 157
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/TBF/plugins/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/TBF/plugins/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/TBF/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/TBF/plugins/jquery-rss/dist/jquery.rss.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/TBF/js/main.js"), "html", null, true);
        echo "\"></script>  
        ";
        
        $__internal_1946de3142510c1a29b69ab6cd97dd68e2e22bd735364eb4ad686e0313c3b670->leave($__internal_1946de3142510c1a29b69ab6cd97dd68e2e22bd735364eb4ad686e0313c3b670_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 161,  313 => 160,  309 => 159,  305 => 158,  300 => 157,  294 => 156,  190 => 51,  184 => 50,  177 => 47,  174 => 46,  168 => 45,  161 => 18,  155 => 17,  146 => 11,  142 => 10,  138 => 9,  135 => 8,  133 => 7,  127 => 6,  115 => 5,  107 => 163,  105 => 156,  96 => 149,  94 => 50,  90 => 48,  88 => 45,  70 => 30,  64 => 27,  55 => 21,  51 => 19,  49 => 17,  43 => 14,  40 => 13,  38 => 6,  34 => 5,  28 => 1,);
    }
}
