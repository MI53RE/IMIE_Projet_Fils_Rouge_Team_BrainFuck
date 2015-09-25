<?php

/* TBFBundle:Skills:index.html.twig */
class __TwigTemplate_353ab66bd59b774a3b8d1548afcb384aa65a89d170678420ae1c5c8428e4aced extends Twig_Template
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
        $__internal_a6dad26b8580d7b95fd5b7d08218fdcdbb1bbf2fea3fc55f530c2e9e0abbca02 = $this->env->getExtension("native_profiler");
        $__internal_a6dad26b8580d7b95fd5b7d08218fdcdbb1bbf2fea3fc55f530c2e9e0abbca02->enter($__internal_a6dad26b8580d7b95fd5b7d08218fdcdbb1bbf2fea3fc55f530c2e9e0abbca02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TBFBundle:Skills:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6dad26b8580d7b95fd5b7d08218fdcdbb1bbf2fea3fc55f530c2e9e0abbca02->leave($__internal_a6dad26b8580d7b95fd5b7d08218fdcdbb1bbf2fea3fc55f530c2e9e0abbca02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_735f7a38070f40e7ac16e94b40c81da2dc64c2032d57533c57574b03d59c40d8 = $this->env->getExtension("native_profiler");
        $__internal_735f7a38070f40e7ac16e94b40c81da2dc64c2032d57533c57574b03d59c40d8->enter($__internal_735f7a38070f40e7ac16e94b40c81da2dc64c2032d57533c57574b03d59c40d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Skill";
        
        $__internal_735f7a38070f40e7ac16e94b40c81da2dc64c2032d57533c57574b03d59c40d8->leave($__internal_735f7a38070f40e7ac16e94b40c81da2dc64c2032d57533c57574b03d59c40d8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2375709099575000456d0ca63d77eb161df68317db7b664452a6357210acbf9 = $this->env->getExtension("native_profiler");
        $__internal_f2375709099575000456d0ca63d77eb161df68317db7b664452a6357210acbf9->enter($__internal_f2375709099575000456d0ca63d77eb161df68317db7b664452a6357210acbf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <a href=\"";
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
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["skills"]) ? $context["skills"] : $this->getContext($context, "skills")));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            if (array_key_exists("skills", $context)) {
                // line 14
                echo "            <tr>
                <td>";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["skill"], "name", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["skill"], "description", array()), "html", null, true);
                echo "</td>
                <td class=\"text-center\"><a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tbf_skills_modify", array("id" => $this->getAttribute($context["skill"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></a></td>
                <td class=\"text-center\"><a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tbf_skills_remove", array("id" => $this->getAttribute($context["skill"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></a></td>
            </tr>
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </tbody>
    </table>
";
        
        $__internal_f2375709099575000456d0ca63d77eb161df68317db7b664452a6357210acbf9->leave($__internal_f2375709099575000456d0ca63d77eb161df68317db7b664452a6357210acbf9_prof);

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
        return array (  96 => 21,  86 => 18,  82 => 17,  78 => 16,  74 => 15,  71 => 14,  66 => 13,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
