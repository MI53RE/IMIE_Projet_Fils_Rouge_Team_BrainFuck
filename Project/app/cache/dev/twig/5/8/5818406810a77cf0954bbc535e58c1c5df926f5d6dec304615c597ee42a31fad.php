<?php

/* TBFBundle:Users:index.html.twig */
class __TwigTemplate_5818406810a77cf0954bbc535e58c1c5df926f5d6dec304615c597ee42a31fad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "TBFBundle:Users:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd2792807d5d78eec8da1a30554f0c8e9909c6486afd3c833afc7a7d067e7fd5 = $this->env->getExtension("native_profiler");
        $__internal_fd2792807d5d78eec8da1a30554f0c8e9909c6486afd3c833afc7a7d067e7fd5->enter($__internal_fd2792807d5d78eec8da1a30554f0c8e9909c6486afd3c833afc7a7d067e7fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TBFBundle:Users:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd2792807d5d78eec8da1a30554f0c8e9909c6486afd3c833afc7a7d067e7fd5->leave($__internal_fd2792807d5d78eec8da1a30554f0c8e9909c6486afd3c833afc7a7d067e7fd5_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a004ead5c156969b4cef24d0613dcdb8d139c4509e8cf23a411c4de0c3b8bc90 = $this->env->getExtension("native_profiler");
        $__internal_a004ead5c156969b4cef24d0613dcdb8d139c4509e8cf23a411c4de0c3b8bc90->enter($__internal_a004ead5c156969b4cef24d0613dcdb8d139c4509e8cf23a411c4de0c3b8bc90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "User";
        
        $__internal_a004ead5c156969b4cef24d0613dcdb8d139c4509e8cf23a411c4de0c3b8bc90->leave($__internal_a004ead5c156969b4cef24d0613dcdb8d139c4509e8cf23a411c4de0c3b8bc90_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_86f0d69d7bb0a6397c3c5a04bc5e55c31c433e7a9acf70e0ace2687dfdce6ab0 = $this->env->getExtension("native_profiler");
        $__internal_86f0d69d7bb0a6397c3c5a04bc5e55c31c433e7a9acf70e0ace2687dfdce6ab0->enter($__internal_86f0d69d7bb0a6397c3c5a04bc5e55c31c433e7a9acf70e0ace2687dfdce6ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "Users will be here!
";
        
        $__internal_86f0d69d7bb0a6397c3c5a04bc5e55c31c433e7a9acf70e0ace2687dfdce6ab0->leave($__internal_86f0d69d7bb0a6397c3c5a04bc5e55c31c433e7a9acf70e0ace2687dfdce6ab0_prof);

    }

    public function getTemplateName()
    {
        return "TBFBundle:Users:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
