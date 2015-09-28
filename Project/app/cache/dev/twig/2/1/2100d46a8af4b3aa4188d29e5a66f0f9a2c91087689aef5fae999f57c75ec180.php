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
        $__internal_8f0869eebc94dddd32d249f01d21338183271347528aba1037bd359d2a215a0d = $this->env->getExtension("native_profiler");
        $__internal_8f0869eebc94dddd32d249f01d21338183271347528aba1037bd359d2a215a0d->enter($__internal_8f0869eebc94dddd32d249f01d21338183271347528aba1037bd359d2a215a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8f0869eebc94dddd32d249f01d21338183271347528aba1037bd359d2a215a0d->leave($__internal_8f0869eebc94dddd32d249f01d21338183271347528aba1037bd359d2a215a0d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_60efdc113694b4274492cea06d2d7b3178c9a5224a393ffdc45a42e083b7bf27 = $this->env->getExtension("native_profiler");
        $__internal_60efdc113694b4274492cea06d2d7b3178c9a5224a393ffdc45a42e083b7bf27->enter($__internal_60efdc113694b4274492cea06d2d7b3178c9a5224a393ffdc45a42e083b7bf27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue !";
        
        $__internal_60efdc113694b4274492cea06d2d7b3178c9a5224a393ffdc45a42e083b7bf27->leave($__internal_60efdc113694b4274492cea06d2d7b3178c9a5224a393ffdc45a42e083b7bf27_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c427d63e611a993754a39717b173e207987673aa5caa94d3b53ccc4999d53a3b = $this->env->getExtension("native_profiler");
        $__internal_c427d63e611a993754a39717b173e207987673aa5caa94d3b53ccc4999d53a3b->enter($__internal_c427d63e611a993754a39717b173e207987673aa5caa94d3b53ccc4999d53a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c427d63e611a993754a39717b173e207987673aa5caa94d3b53ccc4999d53a3b->leave($__internal_c427d63e611a993754a39717b173e207987673aa5caa94d3b53ccc4999d53a3b_prof);

    }

    // line 43
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ca4ed770921140e9dcb9d3274f89d944f92191bb185aa0773564f3695c341fd1 = $this->env->getExtension("native_profiler");
        $__internal_ca4ed770921140e9dcb9d3274f89d944f92191bb185aa0773564f3695c341fd1->enter($__internal_ca4ed770921140e9dcb9d3274f89d944f92191bb185aa0773564f3695c341fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 44
        echo "                            ";
        $this->loadTemplate("menu.html.twig", "base.html.twig", 44)->display($context);
        // line 45
        echo "                        ";
        
        $__internal_ca4ed770921140e9dcb9d3274f89d944f92191bb185aa0773564f3695c341fd1->leave($__internal_ca4ed770921140e9dcb9d3274f89d944f92191bb185aa0773564f3695c341fd1_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f61dc4dcfdc93495c71fbf9ea3d104bdc60ef33fb84323bb0fc3141f5479f63 = $this->env->getExtension("native_profiler");
        $__internal_0f61dc4dcfdc93495c71fbf9ea3d104bdc60ef33fb84323bb0fc3141f5479f63->enter($__internal_0f61dc4dcfdc93495c71fbf9ea3d104bdc60ef33fb84323bb0fc3141f5479f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0f61dc4dcfdc93495c71fbf9ea3d104bdc60ef33fb84323bb0fc3141f5479f63->leave($__internal_0f61dc4dcfdc93495c71fbf9ea3d104bdc60ef33fb84323bb0fc3141f5479f63_prof);

    }

    // line 153
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7221ba2d3b195dc9be48afadbd85f3e45a0bfe567b741f29260a1f588319d577 = $this->env->getExtension("native_profiler");
        $__internal_7221ba2d3b195dc9be48afadbd85f3e45a0bfe567b741f29260a1f588319d577->enter($__internal_7221ba2d3b195dc9be48afadbd85f3e45a0bfe567b741f29260a1f588319d577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_7221ba2d3b195dc9be48afadbd85f3e45a0bfe567b741f29260a1f588319d577->leave($__internal_7221ba2d3b195dc9be48afadbd85f3e45a0bfe567b741f29260a1f588319d577_prof);

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
