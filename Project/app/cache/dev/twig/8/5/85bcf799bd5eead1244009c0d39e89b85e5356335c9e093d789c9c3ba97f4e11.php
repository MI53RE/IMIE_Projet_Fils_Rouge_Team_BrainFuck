<?php

/* form_div_layout.html.twig */
class __TwigTemplate_85bcf799bd5eead1244009c0d39e89b85e5356335c9e093d789c9c3ba97f4e11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_enctype' => array($this, 'block_form_enctype'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f983bb176dc065efa11d29ff79d016c055bf6b52b3c62981a7ca755fda51265 = $this->env->getExtension("native_profiler");
        $__internal_7f983bb176dc065efa11d29ff79d016c055bf6b52b3c62981a7ca755fda51265->enter($__internal_7f983bb176dc065efa11d29ff79d016c055bf6b52b3c62981a7ca755fda51265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 88
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 92
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 96
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 109
        $this->displayBlock('date_widget', $context, $blocks);
        // line 123
        $this->displayBlock('time_widget', $context, $blocks);
        // line 134
        $this->displayBlock('number_widget', $context, $blocks);
        // line 140
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 145
        $this->displayBlock('money_widget', $context, $blocks);
        // line 149
        $this->displayBlock('url_widget', $context, $blocks);
        // line 154
        $this->displayBlock('search_widget', $context, $blocks);
        // line 159
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 164
        $this->displayBlock('password_widget', $context, $blocks);
        // line 169
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 174
        $this->displayBlock('email_widget', $context, $blocks);
        // line 179
        $this->displayBlock('button_widget', $context, $blocks);
        // line 193
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 198
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 205
        $this->displayBlock('form_label', $context, $blocks);
        // line 227
        $this->displayBlock('button_label', $context, $blocks);
        // line 231
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 239
        $this->displayBlock('form_row', $context, $blocks);
        // line 247
        $this->displayBlock('button_row', $context, $blocks);
        // line 253
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 259
        $this->displayBlock('form', $context, $blocks);
        // line 265
        $this->displayBlock('form_start', $context, $blocks);
        // line 278
        $this->displayBlock('form_end', $context, $blocks);
        // line 285
        $this->displayBlock('form_enctype', $context, $blocks);
        // line 289
        $this->displayBlock('form_errors', $context, $blocks);
        // line 299
        $this->displayBlock('form_rest', $context, $blocks);
        // line 306
        echo "
";
        // line 309
        $this->displayBlock('form_rows', $context, $blocks);
        // line 315
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 332
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 346
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 360
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_7f983bb176dc065efa11d29ff79d016c055bf6b52b3c62981a7ca755fda51265->leave($__internal_7f983bb176dc065efa11d29ff79d016c055bf6b52b3c62981a7ca755fda51265_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_212e53c7b95f2d37b7d4fe72c6685c8b5a91771f7db98e61d22e83f821b2c551 = $this->env->getExtension("native_profiler");
        $__internal_212e53c7b95f2d37b7d4fe72c6685c8b5a91771f7db98e61d22e83f821b2c551->enter($__internal_212e53c7b95f2d37b7d4fe72c6685c8b5a91771f7db98e61d22e83f821b2c551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_212e53c7b95f2d37b7d4fe72c6685c8b5a91771f7db98e61d22e83f821b2c551->leave($__internal_212e53c7b95f2d37b7d4fe72c6685c8b5a91771f7db98e61d22e83f821b2c551_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_04184c0fece2640acef68997b7078d1310ccddeefa470e7d7b0a6f05c380d3db = $this->env->getExtension("native_profiler");
        $__internal_04184c0fece2640acef68997b7078d1310ccddeefa470e7d7b0a6f05c380d3db->enter($__internal_04184c0fece2640acef68997b7078d1310ccddeefa470e7d7b0a6f05c380d3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_04184c0fece2640acef68997b7078d1310ccddeefa470e7d7b0a6f05c380d3db->leave($__internal_04184c0fece2640acef68997b7078d1310ccddeefa470e7d7b0a6f05c380d3db_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_217211ba2a7443c5a79e8372d6bef88ea9ccd169a5e31945c4130c7575b6e951 = $this->env->getExtension("native_profiler");
        $__internal_217211ba2a7443c5a79e8372d6bef88ea9ccd169a5e31945c4130c7575b6e951->enter($__internal_217211ba2a7443c5a79e8372d6bef88ea9ccd169a5e31945c4130c7575b6e951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()))) {
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_217211ba2a7443c5a79e8372d6bef88ea9ccd169a5e31945c4130c7575b6e951->leave($__internal_217211ba2a7443c5a79e8372d6bef88ea9ccd169a5e31945c4130c7575b6e951_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_83bc0096dd413a3522b92f8421627aa36bc8cb3a0cc46d8cc8751d00104e596b = $this->env->getExtension("native_profiler");
        $__internal_83bc0096dd413a3522b92f8421627aa36bc8cb3a0cc46d8cc8751d00104e596b->enter($__internal_83bc0096dd413a3522b92f8421627aa36bc8cb3a0cc46d8cc8751d00104e596b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_83bc0096dd413a3522b92f8421627aa36bc8cb3a0cc46d8cc8751d00104e596b->leave($__internal_83bc0096dd413a3522b92f8421627aa36bc8cb3a0cc46d8cc8751d00104e596b_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_322f5ca03075abd834000b5d467c3fbe00ddfb1cbbb09588b7b4d7dbcc387eda = $this->env->getExtension("native_profiler");
        $__internal_322f5ca03075abd834000b5d467c3fbe00ddfb1cbbb09588b7b4d7dbcc387eda->enter($__internal_322f5ca03075abd834000b5d467c3fbe00ddfb1cbbb09588b7b4d7dbcc387eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_322f5ca03075abd834000b5d467c3fbe00ddfb1cbbb09588b7b4d7dbcc387eda->leave($__internal_322f5ca03075abd834000b5d467c3fbe00ddfb1cbbb09588b7b4d7dbcc387eda_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_480ccd7ca8ccb3148067f270bdcaf6178a462670449c2e389ed9c562a8a11cdd = $this->env->getExtension("native_profiler");
        $__internal_480ccd7ca8ccb3148067f270bdcaf6178a462670449c2e389ed9c562a8a11cdd->enter($__internal_480ccd7ca8ccb3148067f270bdcaf6178a462670449c2e389ed9c562a8a11cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_480ccd7ca8ccb3148067f270bdcaf6178a462670449c2e389ed9c562a8a11cdd->leave($__internal_480ccd7ca8ccb3148067f270bdcaf6178a462670449c2e389ed9c562a8a11cdd_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_9471c5e884d5cf1ee4e7504eb13052c5c4d1c8b11fb456e80af02e624c4a1141 = $this->env->getExtension("native_profiler");
        $__internal_9471c5e884d5cf1ee4e7504eb13052c5c4d1c8b11fb456e80af02e624c4a1141->enter($__internal_9471c5e884d5cf1ee4e7504eb13052c5c4d1c8b11fb456e80af02e624c4a1141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_9471c5e884d5cf1ee4e7504eb13052c5c4d1c8b11fb456e80af02e624c4a1141->leave($__internal_9471c5e884d5cf1ee4e7504eb13052c5c4d1c8b11fb456e80af02e624c4a1141_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_5f0102d2c129bb3392ece6d817765bf56d792811d1766c8fcb4f4fa5d9327ad0 = $this->env->getExtension("native_profiler");
        $__internal_5f0102d2c129bb3392ece6d817765bf56d792811d1766c8fcb4f4fa5d9327ad0->enter($__internal_5f0102d2c129bb3392ece6d817765bf56d792811d1766c8fcb4f4fa5d9327ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if (((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) &&  !(isset($context["placeholder_in_choices"]) ? $context["placeholder_in_choices"] : $this->getContext($context, "placeholder_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")) != "")) ? ($this->env->getExtension('translator')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_5f0102d2c129bb3392ece6d817765bf56d792811d1766c8fcb4f4fa5d9327ad0->leave($__internal_5f0102d2c129bb3392ece6d817765bf56d792811d1766c8fcb4f4fa5d9327ad0_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_03f63cdf7bcfdf5069986c5a243e2bcf57826b7065614eaff1a389c620787043 = $this->env->getExtension("native_profiler");
        $__internal_03f63cdf7bcfdf5069986c5a243e2bcf57826b7065614eaff1a389c620787043->enter($__internal_03f63cdf7bcfdf5069986c5a243e2bcf57826b7065614eaff1a389c620787043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($context["group_label"]) : ($this->env->getExtension('translator')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                $context["attr"] = $this->getAttribute($context["choice"], "attr", array());
                // line 83
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\" ";
                $this->displayBlock("attributes", $context, $blocks);
                if ($this->env->getExtension('form')->isSelectedChoice($context["choice"], (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('translator')->trans($this->getAttribute($context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_03f63cdf7bcfdf5069986c5a243e2bcf57826b7065614eaff1a389c620787043->leave($__internal_03f63cdf7bcfdf5069986c5a243e2bcf57826b7065614eaff1a389c620787043_prof);

    }

    // line 88
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_bf88919f7bb616b1d9777ab3d19691a80c983770eaaa029e620e82b5f3a94495 = $this->env->getExtension("native_profiler");
        $__internal_bf88919f7bb616b1d9777ab3d19691a80c983770eaaa029e620e82b5f3a94495->enter($__internal_bf88919f7bb616b1d9777ab3d19691a80c983770eaaa029e620e82b5f3a94495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 89
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_bf88919f7bb616b1d9777ab3d19691a80c983770eaaa029e620e82b5f3a94495->leave($__internal_bf88919f7bb616b1d9777ab3d19691a80c983770eaaa029e620e82b5f3a94495_prof);

    }

    // line 92
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_73be5b1db1ff50e098eb283ba3943e8af4a2bb996d42f14eded29fea8a0cc246 = $this->env->getExtension("native_profiler");
        $__internal_73be5b1db1ff50e098eb283ba3943e8af4a2bb996d42f14eded29fea8a0cc246->enter($__internal_73be5b1db1ff50e098eb283ba3943e8af4a2bb996d42f14eded29fea8a0cc246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 93
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_73be5b1db1ff50e098eb283ba3943e8af4a2bb996d42f14eded29fea8a0cc246->leave($__internal_73be5b1db1ff50e098eb283ba3943e8af4a2bb996d42f14eded29fea8a0cc246_prof);

    }

    // line 96
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_474cce4f8a8f14c14bba87412b160551108d6ec6b4d2335d34da887759f7ba93 = $this->env->getExtension("native_profiler");
        $__internal_474cce4f8a8f14c14bba87412b160551108d6ec6b4d2335d34da887759f7ba93->enter($__internal_474cce4f8a8f14c14bba87412b160551108d6ec6b4d2335d34da887759f7ba93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 97
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 98
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 100
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 101
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 102
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 103
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
            // line 104
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget');
            // line 105
            echo "</div>";
        }
        
        $__internal_474cce4f8a8f14c14bba87412b160551108d6ec6b4d2335d34da887759f7ba93->leave($__internal_474cce4f8a8f14c14bba87412b160551108d6ec6b4d2335d34da887759f7ba93_prof);

    }

    // line 109
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_054cb29a6887c82a154be8c773c78f1d803e5d03c3a96fafa51f96d79321a36c = $this->env->getExtension("native_profiler");
        $__internal_054cb29a6887c82a154be8c773c78f1d803e5d03c3a96fafa51f96d79321a36c->enter($__internal_054cb29a6887c82a154be8c773c78f1d803e5d03c3a96fafa51f96d79321a36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 110
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 111
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 113
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 114
            echo strtr((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 115
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 116
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 117
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 119
            echo "</div>";
        }
        
        $__internal_054cb29a6887c82a154be8c773c78f1d803e5d03c3a96fafa51f96d79321a36c->leave($__internal_054cb29a6887c82a154be8c773c78f1d803e5d03c3a96fafa51f96d79321a36c_prof);

    }

    // line 123
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_480ff1be3f8e9a750912d9e1277c170cad852633f4f9947d3e53af602daf8f82 = $this->env->getExtension("native_profiler");
        $__internal_480ff1be3f8e9a750912d9e1277c170cad852633f4f9947d3e53af602daf8f82->enter($__internal_480ff1be3f8e9a750912d9e1277c170cad852633f4f9947d3e53af602daf8f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 124
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 125
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 127
            $context["vars"] = ((((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 128
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 129
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            // line 130
            echo "        </div>";
        }
        
        $__internal_480ff1be3f8e9a750912d9e1277c170cad852633f4f9947d3e53af602daf8f82->leave($__internal_480ff1be3f8e9a750912d9e1277c170cad852633f4f9947d3e53af602daf8f82_prof);

    }

    // line 134
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_31a9cef8fe01398ebc3f9931a5ff1fa6dc7663ff993af9b2a4e0d7454c4ea746 = $this->env->getExtension("native_profiler");
        $__internal_31a9cef8fe01398ebc3f9931a5ff1fa6dc7663ff993af9b2a4e0d7454c4ea746->enter($__internal_31a9cef8fe01398ebc3f9931a5ff1fa6dc7663ff993af9b2a4e0d7454c4ea746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 136
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 137
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_31a9cef8fe01398ebc3f9931a5ff1fa6dc7663ff993af9b2a4e0d7454c4ea746->leave($__internal_31a9cef8fe01398ebc3f9931a5ff1fa6dc7663ff993af9b2a4e0d7454c4ea746_prof);

    }

    // line 140
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_c354ac09d34dbfde785dc427cb00f5420ad2363142fe6d90bc8fbe48535b7f53 = $this->env->getExtension("native_profiler");
        $__internal_c354ac09d34dbfde785dc427cb00f5420ad2363142fe6d90bc8fbe48535b7f53->enter($__internal_c354ac09d34dbfde785dc427cb00f5420ad2363142fe6d90bc8fbe48535b7f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 141
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "number")) : ("number"));
        // line 142
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_c354ac09d34dbfde785dc427cb00f5420ad2363142fe6d90bc8fbe48535b7f53->leave($__internal_c354ac09d34dbfde785dc427cb00f5420ad2363142fe6d90bc8fbe48535b7f53_prof);

    }

    // line 145
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_530a30d691bf2400b54ef6f890510ebf96fc61da066e5ea42a67808f0d43ca7d = $this->env->getExtension("native_profiler");
        $__internal_530a30d691bf2400b54ef6f890510ebf96fc61da066e5ea42a67808f0d43ca7d->enter($__internal_530a30d691bf2400b54ef6f890510ebf96fc61da066e5ea42a67808f0d43ca7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 146
        echo strtr((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_530a30d691bf2400b54ef6f890510ebf96fc61da066e5ea42a67808f0d43ca7d->leave($__internal_530a30d691bf2400b54ef6f890510ebf96fc61da066e5ea42a67808f0d43ca7d_prof);

    }

    // line 149
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_985bba1f4212195d5417a3b3b6a40b6bd28acd30a4b7b21462d4c2f1c4e9105b = $this->env->getExtension("native_profiler");
        $__internal_985bba1f4212195d5417a3b3b6a40b6bd28acd30a4b7b21462d4c2f1c4e9105b->enter($__internal_985bba1f4212195d5417a3b3b6a40b6bd28acd30a4b7b21462d4c2f1c4e9105b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 150
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "url")) : ("url"));
        // line 151
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_985bba1f4212195d5417a3b3b6a40b6bd28acd30a4b7b21462d4c2f1c4e9105b->leave($__internal_985bba1f4212195d5417a3b3b6a40b6bd28acd30a4b7b21462d4c2f1c4e9105b_prof);

    }

    // line 154
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_dcae32dccff309c418151c0879025446bc2c9af1862de823053cf1d3374267bd = $this->env->getExtension("native_profiler");
        $__internal_dcae32dccff309c418151c0879025446bc2c9af1862de823053cf1d3374267bd->enter($__internal_dcae32dccff309c418151c0879025446bc2c9af1862de823053cf1d3374267bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 155
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "search")) : ("search"));
        // line 156
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_dcae32dccff309c418151c0879025446bc2c9af1862de823053cf1d3374267bd->leave($__internal_dcae32dccff309c418151c0879025446bc2c9af1862de823053cf1d3374267bd_prof);

    }

    // line 159
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_560f091cc26793472702ee96960698ce3a45c426daf4749f00fd46577004f1b0 = $this->env->getExtension("native_profiler");
        $__internal_560f091cc26793472702ee96960698ce3a45c426daf4749f00fd46577004f1b0->enter($__internal_560f091cc26793472702ee96960698ce3a45c426daf4749f00fd46577004f1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 160
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 161
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_560f091cc26793472702ee96960698ce3a45c426daf4749f00fd46577004f1b0->leave($__internal_560f091cc26793472702ee96960698ce3a45c426daf4749f00fd46577004f1b0_prof);

    }

    // line 164
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_61592656be2b57acbeb4e9014d82ff5fb9c9fb2fc66aaf0985ad79666bf74bd0 = $this->env->getExtension("native_profiler");
        $__internal_61592656be2b57acbeb4e9014d82ff5fb9c9fb2fc66aaf0985ad79666bf74bd0->enter($__internal_61592656be2b57acbeb4e9014d82ff5fb9c9fb2fc66aaf0985ad79666bf74bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 165
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "password")) : ("password"));
        // line 166
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_61592656be2b57acbeb4e9014d82ff5fb9c9fb2fc66aaf0985ad79666bf74bd0->leave($__internal_61592656be2b57acbeb4e9014d82ff5fb9c9fb2fc66aaf0985ad79666bf74bd0_prof);

    }

    // line 169
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_53b9ca1c9648680d4f4a009dfe1cb071286fd1a2a624292021f8a230caf004a8 = $this->env->getExtension("native_profiler");
        $__internal_53b9ca1c9648680d4f4a009dfe1cb071286fd1a2a624292021f8a230caf004a8->enter($__internal_53b9ca1c9648680d4f4a009dfe1cb071286fd1a2a624292021f8a230caf004a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_53b9ca1c9648680d4f4a009dfe1cb071286fd1a2a624292021f8a230caf004a8->leave($__internal_53b9ca1c9648680d4f4a009dfe1cb071286fd1a2a624292021f8a230caf004a8_prof);

    }

    // line 174
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_22ffda384e9fce92bf322296e3b4678438fea40affd6c6532430c1e4cc7e51fd = $this->env->getExtension("native_profiler");
        $__internal_22ffda384e9fce92bf322296e3b4678438fea40affd6c6532430c1e4cc7e51fd->enter($__internal_22ffda384e9fce92bf322296e3b4678438fea40affd6c6532430c1e4cc7e51fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "email")) : ("email"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_22ffda384e9fce92bf322296e3b4678438fea40affd6c6532430c1e4cc7e51fd->leave($__internal_22ffda384e9fce92bf322296e3b4678438fea40affd6c6532430c1e4cc7e51fd_prof);

    }

    // line 179
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_005393d24115dd241fb1e269aca555c88d9bc0183e17821d8f5f978964e41dea = $this->env->getExtension("native_profiler");
        $__internal_005393d24115dd241fb1e269aca555c88d9bc0183e17821d8f5f978964e41dea->enter($__internal_005393d24115dd241fb1e269aca555c88d9bc0183e17821d8f5f978964e41dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 180
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 181
            if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                // line 182
                $context["label"] = strtr((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                 // line 183
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                 // line 184
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            } else {
                // line 187
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            }
        }
        // line 190
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "</button>";
        
        $__internal_005393d24115dd241fb1e269aca555c88d9bc0183e17821d8f5f978964e41dea->leave($__internal_005393d24115dd241fb1e269aca555c88d9bc0183e17821d8f5f978964e41dea_prof);

    }

    // line 193
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_daf80387f3897a6c696a1e7476e9210aa943abd82d9d6ebf8abe877d25108f72 = $this->env->getExtension("native_profiler");
        $__internal_daf80387f3897a6c696a1e7476e9210aa943abd82d9d6ebf8abe877d25108f72->enter($__internal_daf80387f3897a6c696a1e7476e9210aa943abd82d9d6ebf8abe877d25108f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 195
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_daf80387f3897a6c696a1e7476e9210aa943abd82d9d6ebf8abe877d25108f72->leave($__internal_daf80387f3897a6c696a1e7476e9210aa943abd82d9d6ebf8abe877d25108f72_prof);

    }

    // line 198
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_aff6bec95fae2129c5fd201b29b6842381e650d776a6cf6387c7618aa103f288 = $this->env->getExtension("native_profiler");
        $__internal_aff6bec95fae2129c5fd201b29b6842381e650d776a6cf6387c7618aa103f288->enter($__internal_aff6bec95fae2129c5fd201b29b6842381e650d776a6cf6387c7618aa103f288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 200
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_aff6bec95fae2129c5fd201b29b6842381e650d776a6cf6387c7618aa103f288->leave($__internal_aff6bec95fae2129c5fd201b29b6842381e650d776a6cf6387c7618aa103f288_prof);

    }

    // line 205
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_5f8754fed45332de99eda2e2ec0af1c52edfc4fc54543e66c70d551f465cc9f6 = $this->env->getExtension("native_profiler");
        $__internal_5f8754fed45332de99eda2e2ec0af1c52edfc4fc54543e66c70d551f465cc9f6->enter($__internal_5f8754fed45332de99eda2e2ec0af1c52edfc4fc54543e66c70d551f465cc9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 206
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 207
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 208
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            }
            // line 210
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 211
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 213
            echo "        ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 214
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 215
                    $context["label"] = strtr((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 216
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 217
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 220
                    $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 223
            echo "<label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</label>";
        }
        
        $__internal_5f8754fed45332de99eda2e2ec0af1c52edfc4fc54543e66c70d551f465cc9f6->leave($__internal_5f8754fed45332de99eda2e2ec0af1c52edfc4fc54543e66c70d551f465cc9f6_prof);

    }

    // line 227
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_aa95e6a164b0a1c2ee9d4770539cadb69044b391451f540e329047564cbece27 = $this->env->getExtension("native_profiler");
        $__internal_aa95e6a164b0a1c2ee9d4770539cadb69044b391451f540e329047564cbece27->enter($__internal_aa95e6a164b0a1c2ee9d4770539cadb69044b391451f540e329047564cbece27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_aa95e6a164b0a1c2ee9d4770539cadb69044b391451f540e329047564cbece27->leave($__internal_aa95e6a164b0a1c2ee9d4770539cadb69044b391451f540e329047564cbece27_prof);

    }

    // line 231
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_c40949aa8c8d752ae3edc399d2183b68410bbf8645afe316aafc29a410dc7906 = $this->env->getExtension("native_profiler");
        $__internal_c40949aa8c8d752ae3edc399d2183b68410bbf8645afe316aafc29a410dc7906->enter($__internal_c40949aa8c8d752ae3edc399d2183b68410bbf8645afe316aafc29a410dc7906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 236
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_c40949aa8c8d752ae3edc399d2183b68410bbf8645afe316aafc29a410dc7906->leave($__internal_c40949aa8c8d752ae3edc399d2183b68410bbf8645afe316aafc29a410dc7906_prof);

    }

    // line 239
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_cda21724fdcbabbd6d32be8f9479ec679bea934ed463aaff70a17d7fcdb60b7e = $this->env->getExtension("native_profiler");
        $__internal_cda21724fdcbabbd6d32be8f9479ec679bea934ed463aaff70a17d7fcdb60b7e->enter($__internal_cda21724fdcbabbd6d32be8f9479ec679bea934ed463aaff70a17d7fcdb60b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 240
        echo "<div>";
        // line 241
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 242
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 243
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 244
        echo "</div>";
        
        $__internal_cda21724fdcbabbd6d32be8f9479ec679bea934ed463aaff70a17d7fcdb60b7e->leave($__internal_cda21724fdcbabbd6d32be8f9479ec679bea934ed463aaff70a17d7fcdb60b7e_prof);

    }

    // line 247
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_d0df7ae09a71e364a347364ed9dde558131ed97c4d68ed48c6d733668d47f23c = $this->env->getExtension("native_profiler");
        $__internal_d0df7ae09a71e364a347364ed9dde558131ed97c4d68ed48c6d733668d47f23c->enter($__internal_d0df7ae09a71e364a347364ed9dde558131ed97c4d68ed48c6d733668d47f23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 248
        echo "<div>";
        // line 249
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 250
        echo "</div>";
        
        $__internal_d0df7ae09a71e364a347364ed9dde558131ed97c4d68ed48c6d733668d47f23c->leave($__internal_d0df7ae09a71e364a347364ed9dde558131ed97c4d68ed48c6d733668d47f23c_prof);

    }

    // line 253
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_af8fa2c5900ca408a8f9d67f8baa9cc1a12f698189ce2a99c4c31a662aeb6afd = $this->env->getExtension("native_profiler");
        $__internal_af8fa2c5900ca408a8f9d67f8baa9cc1a12f698189ce2a99c4c31a662aeb6afd->enter($__internal_af8fa2c5900ca408a8f9d67f8baa9cc1a12f698189ce2a99c4c31a662aeb6afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 254
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        
        $__internal_af8fa2c5900ca408a8f9d67f8baa9cc1a12f698189ce2a99c4c31a662aeb6afd->leave($__internal_af8fa2c5900ca408a8f9d67f8baa9cc1a12f698189ce2a99c4c31a662aeb6afd_prof);

    }

    // line 259
    public function block_form($context, array $blocks = array())
    {
        $__internal_18800531640cc345496062b35dfe6f4f10c9c0f99a5520583e83d90afbfd4872 = $this->env->getExtension("native_profiler");
        $__internal_18800531640cc345496062b35dfe6f4f10c9c0f99a5520583e83d90afbfd4872->enter($__internal_18800531640cc345496062b35dfe6f4f10c9c0f99a5520583e83d90afbfd4872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 260
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        // line 261
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 262
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_18800531640cc345496062b35dfe6f4f10c9c0f99a5520583e83d90afbfd4872->leave($__internal_18800531640cc345496062b35dfe6f4f10c9c0f99a5520583e83d90afbfd4872_prof);

    }

    // line 265
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_592041e19414a3376fef2974e52278ed5db039bb56dde9f1174d3b0d63027bb5 = $this->env->getExtension("native_profiler");
        $__internal_592041e19414a3376fef2974e52278ed5db039bb56dde9f1174d3b0d63027bb5->enter($__internal_592041e19414a3376fef2974e52278ed5db039bb56dde9f1174d3b0d63027bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 266
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")));
        // line 267
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 268
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method"));
        } else {
            // line 270
            $context["form_method"] = "POST";
        }
        // line 272
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method"))), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
        echo "\"";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 273
        if (((isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method")) != (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) {
            // line 274
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "html", null, true);
            echo "\" />";
        }
        
        $__internal_592041e19414a3376fef2974e52278ed5db039bb56dde9f1174d3b0d63027bb5->leave($__internal_592041e19414a3376fef2974e52278ed5db039bb56dde9f1174d3b0d63027bb5_prof);

    }

    // line 278
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_8153469985fb9577f45b1e29c29b5185587ae84fedc0cdcb877113a8aa97d737 = $this->env->getExtension("native_profiler");
        $__internal_8153469985fb9577f45b1e29c29b5185587ae84fedc0cdcb877113a8aa97d737->enter($__internal_8153469985fb9577f45b1e29c29b5185587ae84fedc0cdcb877113a8aa97d737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 279
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) ? $context["render_rest"] : $this->getContext($context, "render_rest")))) {
            // line 280
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        }
        // line 282
        echo "</form>";
        
        $__internal_8153469985fb9577f45b1e29c29b5185587ae84fedc0cdcb877113a8aa97d737->leave($__internal_8153469985fb9577f45b1e29c29b5185587ae84fedc0cdcb877113a8aa97d737_prof);

    }

    // line 285
    public function block_form_enctype($context, array $blocks = array())
    {
        $__internal_8b1f1e0aeacc11f167969eec4eb19ef5620493e0a6a64ea7a4ea4d87982b897b = $this->env->getExtension("native_profiler");
        $__internal_8b1f1e0aeacc11f167969eec4eb19ef5620493e0a6a64ea7a4ea4d87982b897b->enter($__internal_8b1f1e0aeacc11f167969eec4eb19ef5620493e0a6a64ea7a4ea4d87982b897b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_enctype"));

        // line 286
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo "enctype=\"multipart/form-data\"";
        }
        
        $__internal_8b1f1e0aeacc11f167969eec4eb19ef5620493e0a6a64ea7a4ea4d87982b897b->leave($__internal_8b1f1e0aeacc11f167969eec4eb19ef5620493e0a6a64ea7a4ea4d87982b897b_prof);

    }

    // line 289
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_5d5d08ef088c55c78d0bed961a6388b98fab9d911bb0546ffc6f121700e45e00 = $this->env->getExtension("native_profiler");
        $__internal_5d5d08ef088c55c78d0bed961a6388b98fab9d911bb0546ffc6f121700e45e00->enter($__internal_5d5d08ef088c55c78d0bed961a6388b98fab9d911bb0546ffc6f121700e45e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 290
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 291
            echo "<ul>";
            // line 292
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 293
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 295
            echo "</ul>";
        }
        
        $__internal_5d5d08ef088c55c78d0bed961a6388b98fab9d911bb0546ffc6f121700e45e00->leave($__internal_5d5d08ef088c55c78d0bed961a6388b98fab9d911bb0546ffc6f121700e45e00_prof);

    }

    // line 299
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_1160dc475c85dcd1e7ba1ce0ecb5ac734c45bb84d8d23b51dfb540dbdb2ec645 = $this->env->getExtension("native_profiler");
        $__internal_1160dc475c85dcd1e7ba1ce0ecb5ac734c45bb84d8d23b51dfb540dbdb2ec645->enter($__internal_1160dc475c85dcd1e7ba1ce0ecb5ac734c45bb84d8d23b51dfb540dbdb2ec645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 300
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 301
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 302
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_1160dc475c85dcd1e7ba1ce0ecb5ac734c45bb84d8d23b51dfb540dbdb2ec645->leave($__internal_1160dc475c85dcd1e7ba1ce0ecb5ac734c45bb84d8d23b51dfb540dbdb2ec645_prof);

    }

    // line 309
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_c1dcbc15c73fdffc5c00c2053342ad8dd0c63a4ecced0c47e5dc2c6b86539a45 = $this->env->getExtension("native_profiler");
        $__internal_c1dcbc15c73fdffc5c00c2053342ad8dd0c63a4ecced0c47e5dc2c6b86539a45->enter($__internal_c1dcbc15c73fdffc5c00c2053342ad8dd0c63a4ecced0c47e5dc2c6b86539a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 310
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 311
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_c1dcbc15c73fdffc5c00c2053342ad8dd0c63a4ecced0c47e5dc2c6b86539a45->leave($__internal_c1dcbc15c73fdffc5c00c2053342ad8dd0c63a4ecced0c47e5dc2c6b86539a45_prof);

    }

    // line 315
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_c4ae77994ff93fe24815645e26acdf94875aa8ccabe1d0ee01aa582096f2be1e = $this->env->getExtension("native_profiler");
        $__internal_c4ae77994ff93fe24815645e26acdf94875aa8ccabe1d0ee01aa582096f2be1e->enter($__internal_c4ae77994ff93fe24815645e26acdf94875aa8ccabe1d0ee01aa582096f2be1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 316
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        // line 317
        if ((isset($context["read_only"]) ? $context["read_only"] : $this->getContext($context, "read_only"))) {
            echo " readonly=\"readonly\"";
        }
        // line 318
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 319
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 320
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 321
            echo " ";
            // line 322
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 323
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\"";
            } elseif ((            // line 324
$context["attrvalue"] === true)) {
                // line 325
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 326
$context["attrvalue"] === false)) {
                // line 327
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_c4ae77994ff93fe24815645e26acdf94875aa8ccabe1d0ee01aa582096f2be1e->leave($__internal_c4ae77994ff93fe24815645e26acdf94875aa8ccabe1d0ee01aa582096f2be1e_prof);

    }

    // line 332
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_f465114d5ced47256c3e429f08d5b8419ac73aacb41f8ae92982963c23440f46 = $this->env->getExtension("native_profiler");
        $__internal_f465114d5ced47256c3e429f08d5b8419ac73aacb41f8ae92982963c23440f46->enter($__internal_f465114d5ced47256c3e429f08d5b8419ac73aacb41f8ae92982963c23440f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 333
        if ( !twig_test_empty((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 334
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 335
            echo " ";
            // line 336
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 337
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\"";
            } elseif ((            // line 338
$context["attrvalue"] === true)) {
                // line 339
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 340
$context["attrvalue"] === false)) {
                // line 341
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_f465114d5ced47256c3e429f08d5b8419ac73aacb41f8ae92982963c23440f46->leave($__internal_f465114d5ced47256c3e429f08d5b8419ac73aacb41f8ae92982963c23440f46_prof);

    }

    // line 346
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_9dfdfd8b69739026a4a095295b13325b8a6aa00ccd7ccba07c8e6f74fdcaa884 = $this->env->getExtension("native_profiler");
        $__internal_9dfdfd8b69739026a4a095295b13325b8a6aa00ccd7ccba07c8e6f74fdcaa884->enter($__internal_9dfdfd8b69739026a4a095295b13325b8a6aa00ccd7ccba07c8e6f74fdcaa884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 347
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 348
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 349
            echo " ";
            // line 350
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 351
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\"";
            } elseif ((            // line 352
$context["attrvalue"] === true)) {
                // line 353
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 354
$context["attrvalue"] === false)) {
                // line 355
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_9dfdfd8b69739026a4a095295b13325b8a6aa00ccd7ccba07c8e6f74fdcaa884->leave($__internal_9dfdfd8b69739026a4a095295b13325b8a6aa00ccd7ccba07c8e6f74fdcaa884_prof);

    }

    // line 360
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_af9d10dfda025a0e8afcff70736be4fe074403069ffd7ababdac222bd24de8a9 = $this->env->getExtension("native_profiler");
        $__internal_af9d10dfda025a0e8afcff70736be4fe074403069ffd7ababdac222bd24de8a9->enter($__internal_af9d10dfda025a0e8afcff70736be4fe074403069ffd7ababdac222bd24de8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 361
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 362
            echo " ";
            // line 363
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 364
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\"";
            } elseif ((            // line 365
$context["attrvalue"] === true)) {
                // line 366
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 367
$context["attrvalue"] === false)) {
                // line 368
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_af9d10dfda025a0e8afcff70736be4fe074403069ffd7ababdac222bd24de8a9->leave($__internal_af9d10dfda025a0e8afcff70736be4fe074403069ffd7ababdac222bd24de8a9_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1269 => 368,  1267 => 367,  1262 => 366,  1260 => 365,  1255 => 364,  1253 => 363,  1251 => 362,  1247 => 361,  1241 => 360,  1226 => 355,  1224 => 354,  1219 => 353,  1217 => 352,  1212 => 351,  1210 => 350,  1208 => 349,  1204 => 348,  1195 => 347,  1189 => 346,  1174 => 341,  1172 => 340,  1167 => 339,  1165 => 338,  1160 => 337,  1158 => 336,  1156 => 335,  1152 => 334,  1146 => 333,  1140 => 332,  1125 => 327,  1123 => 326,  1118 => 325,  1116 => 324,  1111 => 323,  1109 => 322,  1107 => 321,  1103 => 320,  1099 => 319,  1095 => 318,  1091 => 317,  1085 => 316,  1079 => 315,  1068 => 311,  1064 => 310,  1058 => 309,  1046 => 302,  1044 => 301,  1040 => 300,  1034 => 299,  1026 => 295,  1018 => 293,  1014 => 292,  1012 => 291,  1010 => 290,  1004 => 289,  995 => 286,  989 => 285,  982 => 282,  979 => 280,  977 => 279,  971 => 278,  961 => 274,  959 => 273,  935 => 272,  932 => 270,  929 => 268,  927 => 267,  925 => 266,  919 => 265,  912 => 262,  910 => 261,  908 => 260,  902 => 259,  895 => 254,  889 => 253,  882 => 250,  880 => 249,  878 => 248,  872 => 247,  865 => 244,  863 => 243,  861 => 242,  859 => 241,  857 => 240,  851 => 239,  844 => 236,  838 => 231,  827 => 227,  804 => 223,  800 => 220,  797 => 217,  796 => 216,  795 => 215,  793 => 214,  790 => 213,  787 => 211,  784 => 210,  781 => 208,  779 => 207,  777 => 206,  771 => 205,  764 => 200,  762 => 199,  756 => 198,  749 => 195,  747 => 194,  741 => 193,  728 => 190,  724 => 187,  721 => 184,  720 => 183,  719 => 182,  717 => 181,  715 => 180,  709 => 179,  702 => 176,  700 => 175,  694 => 174,  687 => 171,  685 => 170,  679 => 169,  672 => 166,  670 => 165,  664 => 164,  656 => 161,  654 => 160,  648 => 159,  641 => 156,  639 => 155,  633 => 154,  626 => 151,  624 => 150,  618 => 149,  611 => 146,  605 => 145,  598 => 142,  596 => 141,  590 => 140,  583 => 137,  581 => 136,  575 => 134,  567 => 130,  557 => 129,  552 => 128,  550 => 127,  547 => 125,  545 => 124,  539 => 123,  531 => 119,  529 => 117,  528 => 116,  527 => 115,  526 => 114,  522 => 113,  519 => 111,  517 => 110,  511 => 109,  503 => 105,  501 => 104,  499 => 103,  497 => 102,  495 => 101,  491 => 100,  488 => 98,  486 => 97,  480 => 96,  463 => 93,  457 => 92,  440 => 89,  434 => 88,  405 => 83,  403 => 82,  400 => 80,  398 => 79,  396 => 78,  391 => 77,  389 => 76,  372 => 75,  366 => 74,  359 => 71,  357 => 70,  355 => 69,  349 => 66,  347 => 65,  345 => 64,  343 => 63,  341 => 62,  332 => 60,  330 => 59,  323 => 58,  320 => 56,  318 => 55,  312 => 54,  305 => 51,  299 => 49,  297 => 48,  293 => 47,  289 => 46,  283 => 45,  275 => 41,  272 => 39,  270 => 38,  264 => 37,  253 => 34,  247 => 33,  240 => 30,  237 => 28,  235 => 27,  229 => 26,  222 => 23,  220 => 22,  218 => 21,  215 => 19,  213 => 18,  209 => 17,  203 => 16,  186 => 13,  184 => 12,  178 => 11,  170 => 7,  167 => 5,  165 => 4,  159 => 3,  152 => 360,  150 => 346,  148 => 332,  146 => 315,  144 => 309,  141 => 306,  139 => 299,  137 => 289,  135 => 285,  133 => 278,  131 => 265,  129 => 259,  127 => 253,  125 => 247,  123 => 239,  121 => 231,  119 => 227,  117 => 205,  115 => 198,  113 => 193,  111 => 179,  109 => 174,  107 => 169,  105 => 164,  103 => 159,  101 => 154,  99 => 149,  97 => 145,  95 => 140,  93 => 134,  91 => 123,  89 => 109,  87 => 96,  85 => 92,  83 => 88,  81 => 74,  79 => 54,  77 => 45,  75 => 37,  73 => 33,  71 => 26,  69 => 16,  67 => 11,  65 => 3,);
    }
}
