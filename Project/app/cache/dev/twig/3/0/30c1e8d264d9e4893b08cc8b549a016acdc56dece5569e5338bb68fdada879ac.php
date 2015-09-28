<?php

/* TBFBundle:Search:result.html.twig */
class __TwigTemplate_30c1e8d264d9e4893b08cc8b549a016acdc56dece5569e5338bb68fdada879ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "TBFBundle:Search:result.html.twig", 1);
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
        $__internal_e91022489deee3f10b5b55d29142e05480bb7961ef62ce5282736748b0b67080 = $this->env->getExtension("native_profiler");
        $__internal_e91022489deee3f10b5b55d29142e05480bb7961ef62ce5282736748b0b67080->enter($__internal_e91022489deee3f10b5b55d29142e05480bb7961ef62ce5282736748b0b67080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TBFBundle:Search:result.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e91022489deee3f10b5b55d29142e05480bb7961ef62ce5282736748b0b67080->leave($__internal_e91022489deee3f10b5b55d29142e05480bb7961ef62ce5282736748b0b67080_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_88e6d03ac1a6c9c1329516538eb03d104cde5848ea4724fd1cf5e3facc8a2fb4 = $this->env->getExtension("native_profiler");
        $__internal_88e6d03ac1a6c9c1329516538eb03d104cde5848ea4724fd1cf5e3facc8a2fb4->enter($__internal_88e6d03ac1a6c9c1329516538eb03d104cde5848ea4724fd1cf5e3facc8a2fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Result";
        
        $__internal_88e6d03ac1a6c9c1329516538eb03d104cde5848ea4724fd1cf5e3facc8a2fb4->leave($__internal_88e6d03ac1a6c9c1329516538eb03d104cde5848ea4724fd1cf5e3facc8a2fb4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_36e34e408cf381a8bc45bb46d02b711741e6c2d190388805453ff2b39eed2659 = $this->env->getExtension("native_profiler");
        $__internal_36e34e408cf381a8bc45bb46d02b711741e6c2d190388805453ff2b39eed2659->enter($__internal_36e34e408cf381a8bc45bb46d02b711741e6c2d190388805453ff2b39eed2659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Résultat de la recherche</h1>
    ";
        // line 5
        if ((isset($context["projects"]) ? $context["projects"] : $this->getContext($context, "projects"))) {
            // line 6
            echo "    <h2>Résultat de projet(s):</h2>
    <table>
        <thead>
            <th>Nom</th>
            <th>Description</th>
            <th>Membre(s)</th>
            <th>Compétance(s) requise(s)</th>
            <th>Etat</th>
        </thead>
        <tbody>
            ";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) ? $context["projects"] : $this->getContext($context, "projects")));
            foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                // line 17
                echo "                <tr>
                    <td><a href=\"\">";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "name", array()), "html", null, true);
                echo "</a></td>
                    <td><a href=\"\">";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "description", array()), "html", null, true);
                echo "</a></td>
                    <td>
                        <ul>
                        ";
                // line 22
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["project"], "members", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                    // line 23
                    echo "                            <li><a href=\"\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "firstname", array()), "html", null, true);
                    echo "</a></li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo " 
                        </ul>
                    </td>
                    <td>
                        <ul>
                        ";
                // line 29
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["project"], "skills", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["requiredSkill"]) {
                    // line 30
                    echo "                            <li><a href=\"\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["requiredSkill"], "name", array()), "html", null, true);
                    echo "</a></li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['requiredSkill'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo " 
                        </ul>
                    </td>
                    <td><a href=\"\">";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "state", array()), "html", null, true);
                echo "</a></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "        </tbody>
    </table>
    ";
        } else {
            // line 40
            echo "        <h2>Aucun résultat pour les projets</h2>
    ";
        }
        // line 42
        echo "
    ";
        // line 44
        echo "
    ";
        // line 45
        if ((isset($context["skills"]) ? $context["skills"] : $this->getContext($context, "skills"))) {
            // line 46
            echo "    <h2>Résultat de compétence(s):</h2>
    <table>
        <thead>
            <th>Nom</th>
            <th>Description</th>
            <th>Utilisateur(s) ayants cette(ces) compétence(s)</th>
        </thead>
        <tbody>
            ";
            // line 54
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["skills"]) ? $context["skills"] : $this->getContext($context, "skills")));
            foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
                // line 55
                echo "                <tr>
                    <td><a href=\"\">";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["skill"], "name", array()), "html", null, true);
                echo "</a></td>
                    <td><a href=\"\">";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["skill"], "description", array()), "html", null, true);
                echo "</a></td>
                    <td>
                        <ul>
                        ";
                // line 60
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["skill"], "users", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["users"]) {
                    // line 61
                    echo "                            <li><a href=\"\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["users"], "firstname", array()), "html", null, true);
                    echo "</a></li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['users'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo " 
                        </ul>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "        </tbody>
    </table>
    ";
        } else {
            // line 70
            echo "        <h2>Aucun résultat pour les compétences</h2>
    ";
        }
        // line 72
        echo "
    ";
        // line 74
        echo "
    ";
        // line 75
        if ((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users"))) {
            // line 76
            echo "    <h2>Résultat d'utilisateur(s):</h2>
    <table>
        <thead>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Compétence(s)</th>
            <th>projet(s) en cour(s)</th>
        </thead>
        <tbody>
            ";
            // line 85
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 86
                echo "                <tr>
                    <td><a href=\"\">";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstname", array()), "html", null, true);
                echo "</a></td>
                    <td><a href=\"\">";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastname", array()), "html", null, true);
                echo "</a></td>
                    <td>
                        <ul>
                        ";
                // line 91
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "projects", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["projects"]) {
                    // line 92
                    echo "                            <li><a href=\"\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["projects"], "name", array()), "html", null, true);
                    echo "</a></li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projects'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                echo " 
                        </ul>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "        </tbody>
    </table>
    ";
        } else {
            // line 101
            echo "        <h2>Aucun résultat pour les utilisateurs</h2>
    ";
        }
        
        $__internal_36e34e408cf381a8bc45bb46d02b711741e6c2d190388805453ff2b39eed2659->leave($__internal_36e34e408cf381a8bc45bb46d02b711741e6c2d190388805453ff2b39eed2659_prof);

    }

    public function getTemplateName()
    {
        return "TBFBundle:Search:result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 101,  269 => 98,  259 => 93,  250 => 92,  246 => 91,  240 => 88,  236 => 87,  233 => 86,  229 => 85,  218 => 76,  216 => 75,  213 => 74,  210 => 72,  206 => 70,  201 => 67,  191 => 62,  182 => 61,  178 => 60,  172 => 57,  168 => 56,  165 => 55,  161 => 54,  151 => 46,  149 => 45,  146 => 44,  143 => 42,  139 => 40,  134 => 37,  125 => 34,  120 => 31,  111 => 30,  107 => 29,  100 => 24,  91 => 23,  87 => 22,  81 => 19,  77 => 18,  74 => 17,  70 => 16,  58 => 6,  56 => 5,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
