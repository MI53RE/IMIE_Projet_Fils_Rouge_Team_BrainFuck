<?php

/* TBFBundle:Skills:add.html.twig */
class __TwigTemplate_a5ee04b61acf1c6ad10ae4f15541db770265921155cd1a49b22bfbdb048b354f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "TBFBundle:Skills:add.html.twig", 1);
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
        $__internal_336697d5642ab0664abb7fea1a2018f13fa12f25020a91606632cdeae3af74ed = $this->env->getExtension("native_profiler");
        $__internal_336697d5642ab0664abb7fea1a2018f13fa12f25020a91606632cdeae3af74ed->enter($__internal_336697d5642ab0664abb7fea1a2018f13fa12f25020a91606632cdeae3af74ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TBFBundle:Skills:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_336697d5642ab0664abb7fea1a2018f13fa12f25020a91606632cdeae3af74ed->leave($__internal_336697d5642ab0664abb7fea1a2018f13fa12f25020a91606632cdeae3af74ed_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ee22b09a9c14864e6d9441d356445fbe67ac7b1a5443a5e92ff0063bdd97cd1 = $this->env->getExtension("native_profiler");
        $__internal_8ee22b09a9c14864e6d9441d356445fbe67ac7b1a5443a5e92ff0063bdd97cd1->enter($__internal_8ee22b09a9c14864e6d9441d356445fbe67ac7b1a5443a5e92ff0063bdd97cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Skill";
        
        $__internal_8ee22b09a9c14864e6d9441d356445fbe67ac7b1a5443a5e92ff0063bdd97cd1->leave($__internal_8ee22b09a9c14864e6d9441d356445fbe67ac7b1a5443a5e92ff0063bdd97cd1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_857baa515a03005f553db11dc49320def9404a07b10657629c50d082aa5b1285 = $this->env->getExtension("native_profiler");
        $__internal_857baa515a03005f553db11dc49320def9404a07b10657629c50d082aa5b1285->enter($__internal_857baa515a03005f553db11dc49320def9404a07b10657629c50d082aa5b1285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container skillsadd\">
\t";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
\t</div>
";
        
        $__internal_857baa515a03005f553db11dc49320def9404a07b10657629c50d082aa5b1285->leave($__internal_857baa515a03005f553db11dc49320def9404a07b10657629c50d082aa5b1285_prof);

    }

    public function getTemplateName()
    {
        return "TBFBundle:Skills:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 5,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
