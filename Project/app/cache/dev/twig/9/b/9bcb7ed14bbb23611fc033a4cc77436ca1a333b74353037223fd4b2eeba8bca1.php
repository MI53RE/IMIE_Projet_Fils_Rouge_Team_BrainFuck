<?php

/* TBFBundle:Skills:index.html.twig */
class __TwigTemplate_9bcb7ed14bbb23611fc033a4cc77436ca1a333b74353037223fd4b2eeba8bca1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "TBFBundle:Skills:index.html.twig", 1);
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
        $__internal_1bf6b99c3b7002d052d7e671584f8b5579cfb7b1ab9000c6b474f0202f6a05b2 = $this->env->getExtension("native_profiler");
        $__internal_1bf6b99c3b7002d052d7e671584f8b5579cfb7b1ab9000c6b474f0202f6a05b2->enter($__internal_1bf6b99c3b7002d052d7e671584f8b5579cfb7b1ab9000c6b474f0202f6a05b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TBFBundle:Skills:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bf6b99c3b7002d052d7e671584f8b5579cfb7b1ab9000c6b474f0202f6a05b2->leave($__internal_1bf6b99c3b7002d052d7e671584f8b5579cfb7b1ab9000c6b474f0202f6a05b2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4228425b75e53a1bb2ffefec194cf58acde9ed9741a48ba561ddf60bec31c96b = $this->env->getExtension("native_profiler");
        $__internal_4228425b75e53a1bb2ffefec194cf58acde9ed9741a48ba561ddf60bec31c96b->enter($__internal_4228425b75e53a1bb2ffefec194cf58acde9ed9741a48ba561ddf60bec31c96b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Skill";
        
        $__internal_4228425b75e53a1bb2ffefec194cf58acde9ed9741a48ba561ddf60bec31c96b->leave($__internal_4228425b75e53a1bb2ffefec194cf58acde9ed9741a48ba561ddf60bec31c96b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b96af8799cbe6fc287473cd0f2dd0f263f55187e5dcc8cd80232ca9623e9a30 = $this->env->getExtension("native_profiler");
        $__internal_1b96af8799cbe6fc287473cd0f2dd0f263f55187e5dcc8cd80232ca9623e9a30->enter($__internal_1b96af8799cbe6fc287473cd0f2dd0f263f55187e5dcc8cd80232ca9623e9a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container skills\">
    <a class=\"btn btn-cta-primary input-file-bt pull-left\" href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("tbf_skills_add");
        echo "\">Ajouter une competence</a>
    <table class=\"table table-striped\">
        <thead>
            <th>Nom</th>
            <th>Description</th>
            <th class=\"text-center\">Modifier</th>
        <th class=\"text-center\">Suppression</th>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["skills"]) ? $context["skills"] : $this->getContext($context, "skills")));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            if (array_key_exists("skills", $context)) {
                // line 15
                echo "            <tr>
                <td>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["skill"], "name", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["skill"], "description", array()), "html", null, true);
                echo "</td>
                <td class=\"text-center\"><a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tbf_skills_modify", array("id" => $this->getAttribute($context["skill"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></a></td>
                <td class=\"text-center\"><a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tbf_skills_remove", array("id" => $this->getAttribute($context["skill"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></a></td>
            </tr>
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </tbody>
    </table>
</div>
";
        
        $__internal_1b96af8799cbe6fc287473cd0f2dd0f263f55187e5dcc8cd80232ca9623e9a30->leave($__internal_1b96af8799cbe6fc287473cd0f2dd0f263f55187e5dcc8cd80232ca9623e9a30_prof);

    }

    public function getTemplateName()
    {
        return "TBFBundle:Skills:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 22,  88 => 19,  84 => 18,  80 => 17,  76 => 16,  73 => 15,  68 => 14,  56 => 5,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
