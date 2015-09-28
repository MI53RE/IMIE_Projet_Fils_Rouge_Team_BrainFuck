<?php

/* TBFBundle:Skills:index.html.twig */
class __TwigTemplate_db07159b6ac14c9e5dccfe0199db3f6aec1f974adb4d02d95f764c7d7b99e671 extends Twig_Template
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
        $__internal_4487400c5c0a0ccc249fcfb65ec1977602abc57c9b78787470a390710f2ce8a9 = $this->env->getExtension("native_profiler");
        $__internal_4487400c5c0a0ccc249fcfb65ec1977602abc57c9b78787470a390710f2ce8a9->enter($__internal_4487400c5c0a0ccc249fcfb65ec1977602abc57c9b78787470a390710f2ce8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TBFBundle:Skills:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4487400c5c0a0ccc249fcfb65ec1977602abc57c9b78787470a390710f2ce8a9->leave($__internal_4487400c5c0a0ccc249fcfb65ec1977602abc57c9b78787470a390710f2ce8a9_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_37032c6256ad6a9b8405c7af44d3603a1a23d0ca5889fe60661c6c765411a252 = $this->env->getExtension("native_profiler");
        $__internal_37032c6256ad6a9b8405c7af44d3603a1a23d0ca5889fe60661c6c765411a252->enter($__internal_37032c6256ad6a9b8405c7af44d3603a1a23d0ca5889fe60661c6c765411a252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Skill";
        
        $__internal_37032c6256ad6a9b8405c7af44d3603a1a23d0ca5889fe60661c6c765411a252->leave($__internal_37032c6256ad6a9b8405c7af44d3603a1a23d0ca5889fe60661c6c765411a252_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d068a140d260781418e5aed2c10f4673f853268bb889f93188b87577da1584d8 = $this->env->getExtension("native_profiler");
        $__internal_d068a140d260781418e5aed2c10f4673f853268bb889f93188b87577da1584d8->enter($__internal_d068a140d260781418e5aed2c10f4673f853268bb889f93188b87577da1584d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d068a140d260781418e5aed2c10f4673f853268bb889f93188b87577da1584d8->leave($__internal_d068a140d260781418e5aed2c10f4673f853268bb889f93188b87577da1584d8_prof);

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
