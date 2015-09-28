<?php

/* TBFBundle:Users:index.html.twig */
class __TwigTemplate_614f910de0b793e6c0a6988d0cc6e2008f59f1715b90119b6bf1901c1e16078a extends Twig_Template
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
        $__internal_23fccb3b8dfee121a7fa136a848fbcb3466ee3bb557622630d241bcafdd91e96 = $this->env->getExtension("native_profiler");
        $__internal_23fccb3b8dfee121a7fa136a848fbcb3466ee3bb557622630d241bcafdd91e96->enter($__internal_23fccb3b8dfee121a7fa136a848fbcb3466ee3bb557622630d241bcafdd91e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TBFBundle:Users:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23fccb3b8dfee121a7fa136a848fbcb3466ee3bb557622630d241bcafdd91e96->leave($__internal_23fccb3b8dfee121a7fa136a848fbcb3466ee3bb557622630d241bcafdd91e96_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_903690c33dc63325133805af457807e6fe1c4dec18b25738f605e4ba793f1446 = $this->env->getExtension("native_profiler");
        $__internal_903690c33dc63325133805af457807e6fe1c4dec18b25738f605e4ba793f1446->enter($__internal_903690c33dc63325133805af457807e6fe1c4dec18b25738f605e4ba793f1446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "User";
        
        $__internal_903690c33dc63325133805af457807e6fe1c4dec18b25738f605e4ba793f1446->leave($__internal_903690c33dc63325133805af457807e6fe1c4dec18b25738f605e4ba793f1446_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_72725245d4d0b58bea6947ad6e0e76c445758f0ea2d55cd4feec781322468524 = $this->env->getExtension("native_profiler");
        $__internal_72725245d4d0b58bea6947ad6e0e76c445758f0ea2d55cd4feec781322468524->enter($__internal_72725245d4d0b58bea6947ad6e0e76c445758f0ea2d55cd4feec781322468524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("tbf_users_add");
        echo "\">Ajouter un utilisateur</a>

    <table class=\"table table-striped\">
    <thead>
    <th>Nom</th>
    <th>Prénom</th>
   ";
        // line 11
        echo "    <th>Projets</th>
    <th>Compétences</th>
    <th class=\"text-center\">Modifier</th>
    <th class=\"text-center\">Suppression</th>
    </thead>
    <tbody>s
    ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            if (array_key_exists("users", $context)) {
                // line 18
                echo "        <tr>
            <td>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstname", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastname", array()), "html", null, true);
                echo "</td>
           ";
                // line 22
                echo "
            ";
                // line 24
                echo "            ";
                // line 25
                echo "            <td class=\"text-center\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tbf_users_modify", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></a></td>
            <td class=\"text-center\"><a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tbf_users_remove", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></a></td>
        </tr>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_72725245d4d0b58bea6947ad6e0e76c445758f0ea2d55cd4feec781322468524->leave($__internal_72725245d4d0b58bea6947ad6e0e76c445758f0ea2d55cd4feec781322468524_prof);

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
        return array (  97 => 26,  92 => 25,  90 => 24,  87 => 22,  83 => 20,  79 => 19,  76 => 18,  71 => 17,  63 => 11,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
