<?php

/* TBFBundle:Users:index.html.twig */
class __TwigTemplate_8dd7210c1cfcb5f578ce86d7858a19c41e91c6ed67a57ffb7a4dc8684292c290 extends Twig_Template
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
        $__internal_6aabb83a02923d542dbec7ea01577d1f47138f0330e718e72745bf1b8f698024 = $this->env->getExtension("native_profiler");
        $__internal_6aabb83a02923d542dbec7ea01577d1f47138f0330e718e72745bf1b8f698024->enter($__internal_6aabb83a02923d542dbec7ea01577d1f47138f0330e718e72745bf1b8f698024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TBFBundle:Users:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6aabb83a02923d542dbec7ea01577d1f47138f0330e718e72745bf1b8f698024->leave($__internal_6aabb83a02923d542dbec7ea01577d1f47138f0330e718e72745bf1b8f698024_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b4721a5d0f16928ae27a92c7dad84ee5f8d1d249afe59dd9061f7a555f7f1ea = $this->env->getExtension("native_profiler");
        $__internal_1b4721a5d0f16928ae27a92c7dad84ee5f8d1d249afe59dd9061f7a555f7f1ea->enter($__internal_1b4721a5d0f16928ae27a92c7dad84ee5f8d1d249afe59dd9061f7a555f7f1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "User";
        
        $__internal_1b4721a5d0f16928ae27a92c7dad84ee5f8d1d249afe59dd9061f7a555f7f1ea->leave($__internal_1b4721a5d0f16928ae27a92c7dad84ee5f8d1d249afe59dd9061f7a555f7f1ea_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8168946ea5892644a2fe23e7ba7999818a442e5cd71cbedbec9e97f619bedd30 = $this->env->getExtension("native_profiler");
        $__internal_8168946ea5892644a2fe23e7ba7999818a442e5cd71cbedbec9e97f619bedd30->enter($__internal_8168946ea5892644a2fe23e7ba7999818a442e5cd71cbedbec9e97f619bedd30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "Users will be here!
";
        
        $__internal_8168946ea5892644a2fe23e7ba7999818a442e5cd71cbedbec9e97f619bedd30->leave($__internal_8168946ea5892644a2fe23e7ba7999818a442e5cd71cbedbec9e97f619bedd30_prof);

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
