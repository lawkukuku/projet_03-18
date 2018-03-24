<?php

/* form_div_layout.html.twig */
class __TwigTemplate_960c1a48a65c97dae2a08bf81de08521c0123d12e6123f74c1dfbaddb32c4d75 extends Twig_Template
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
            'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'range_widget' => array($this, 'block_range_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'tel_widget' => array($this, 'block_tel_widget'),
            'color_widget' => array($this, 'block_color_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
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
        $__internal_99f6f867fdbecf1e8331cd7fbb3ad1214566c98595a2f36381618370d1316849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99f6f867fdbecf1e8331cd7fbb3ad1214566c98595a2f36381618370d1316849->enter($__internal_99f6f867fdbecf1e8331cd7fbb3ad1214566c98595a2f36381618370d1316849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        $__internal_cbb17123482cffcba1ed0f04093f0ff2905ab317a8d957c09139840b07c28310 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbb17123482cffcba1ed0f04093f0ff2905ab317a8d957c09139840b07c28310->enter($__internal_cbb17123482cffcba1ed0f04093f0ff2905ab317a8d957c09139840b07c28310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

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
        // line 87
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 91
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 108
        $this->displayBlock('date_widget', $context, $blocks);
        // line 122
        $this->displayBlock('time_widget', $context, $blocks);
        // line 133
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 168
        $this->displayBlock('number_widget', $context, $blocks);
        // line 174
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 179
        $this->displayBlock('money_widget', $context, $blocks);
        // line 183
        $this->displayBlock('url_widget', $context, $blocks);
        // line 188
        $this->displayBlock('search_widget', $context, $blocks);
        // line 193
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 198
        $this->displayBlock('password_widget', $context, $blocks);
        // line 203
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 208
        $this->displayBlock('email_widget', $context, $blocks);
        // line 213
        $this->displayBlock('range_widget', $context, $blocks);
        // line 218
        $this->displayBlock('button_widget', $context, $blocks);
        // line 234
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 239
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 244
        $this->displayBlock('tel_widget', $context, $blocks);
        // line 249
        $this->displayBlock('color_widget', $context, $blocks);
        // line 256
        $this->displayBlock('form_label', $context, $blocks);
        // line 278
        $this->displayBlock('button_label', $context, $blocks);
        // line 282
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 290
        $this->displayBlock('form_row', $context, $blocks);
        // line 298
        $this->displayBlock('button_row', $context, $blocks);
        // line 304
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 310
        $this->displayBlock('form', $context, $blocks);
        // line 316
        $this->displayBlock('form_start', $context, $blocks);
        // line 330
        $this->displayBlock('form_end', $context, $blocks);
        // line 337
        $this->displayBlock('form_errors', $context, $blocks);
        // line 347
        $this->displayBlock('form_rest', $context, $blocks);
        // line 368
        echo "
";
        // line 371
        $this->displayBlock('form_rows', $context, $blocks);
        // line 377
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 384
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 389
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 394
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_99f6f867fdbecf1e8331cd7fbb3ad1214566c98595a2f36381618370d1316849->leave($__internal_99f6f867fdbecf1e8331cd7fbb3ad1214566c98595a2f36381618370d1316849_prof);

        
        $__internal_cbb17123482cffcba1ed0f04093f0ff2905ab317a8d957c09139840b07c28310->leave($__internal_cbb17123482cffcba1ed0f04093f0ff2905ab317a8d957c09139840b07c28310_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_fe84cae45c6f100bcfff1eebcb1beb714b033c887417082e8aa805214dbec3ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe84cae45c6f100bcfff1eebcb1beb714b033c887417082e8aa805214dbec3ef->enter($__internal_fe84cae45c6f100bcfff1eebcb1beb714b033c887417082e8aa805214dbec3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_9f3bff61ca872f973f3db817fdce27c1abcf77c003f0f516fef1d3ce96a6ffd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f3bff61ca872f973f3db817fdce27c1abcf77c003f0f516fef1d3ce96a6ffd5->enter($__internal_9f3bff61ca872f973f3db817fdce27c1abcf77c003f0f516fef1d3ce96a6ffd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 4, $this->getSourceContext()); })())) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_9f3bff61ca872f973f3db817fdce27c1abcf77c003f0f516fef1d3ce96a6ffd5->leave($__internal_9f3bff61ca872f973f3db817fdce27c1abcf77c003f0f516fef1d3ce96a6ffd5_prof);

        
        $__internal_fe84cae45c6f100bcfff1eebcb1beb714b033c887417082e8aa805214dbec3ef->leave($__internal_fe84cae45c6f100bcfff1eebcb1beb714b033c887417082e8aa805214dbec3ef_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_e73f8400cddd650308b4508c5e71123e54ac54004b7903a25dfea05b8a78bd9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e73f8400cddd650308b4508c5e71123e54ac54004b7903a25dfea05b8a78bd9d->enter($__internal_e73f8400cddd650308b4508c5e71123e54ac54004b7903a25dfea05b8a78bd9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_eb44329f0b9b6bf2075a2f4a95b461b38321be3e43fc48d22c219a11d8602363 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb44329f0b9b6bf2075a2f4a95b461b38321be3e43fc48d22c219a11d8602363->enter($__internal_eb44329f0b9b6bf2075a2f4a95b461b38321be3e43fc48d22c219a11d8602363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 12, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_eb44329f0b9b6bf2075a2f4a95b461b38321be3e43fc48d22c219a11d8602363->leave($__internal_eb44329f0b9b6bf2075a2f4a95b461b38321be3e43fc48d22c219a11d8602363_prof);

        
        $__internal_e73f8400cddd650308b4508c5e71123e54ac54004b7903a25dfea05b8a78bd9d->leave($__internal_e73f8400cddd650308b4508c5e71123e54ac54004b7903a25dfea05b8a78bd9d_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_9fc53611129f244de11044beda7f60a1e1d0e04a7bef2e863de49ac145153bfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc53611129f244de11044beda7f60a1e1d0e04a7bef2e863de49ac145153bfc->enter($__internal_9fc53611129f244de11044beda7f60a1e1d0e04a7bef2e863de49ac145153bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_3a798dcf0c0d8cd35ef9d7f02a5b15cbebbaee162a2d2ff642f965760c9d3cae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a798dcf0c0d8cd35ef9d7f02a5b15cbebbaee162a2d2ff642f965760c9d3cae->enter($__internal_3a798dcf0c0d8cd35ef9d7f02a5b15cbebbaee162a2d2ff642f965760c9d3cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()))) {
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_3a798dcf0c0d8cd35ef9d7f02a5b15cbebbaee162a2d2ff642f965760c9d3cae->leave($__internal_3a798dcf0c0d8cd35ef9d7f02a5b15cbebbaee162a2d2ff642f965760c9d3cae_prof);

        
        $__internal_9fc53611129f244de11044beda7f60a1e1d0e04a7bef2e863de49ac145153bfc->leave($__internal_9fc53611129f244de11044beda7f60a1e1d0e04a7bef2e863de49ac145153bfc_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_132b60c62bd23e1b892c00fca6dc27721544884c7d3ec1afbf1cf51dd1ee6199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_132b60c62bd23e1b892c00fca6dc27721544884c7d3ec1afbf1cf51dd1ee6199->enter($__internal_132b60c62bd23e1b892c00fca6dc27721544884c7d3ec1afbf1cf51dd1ee6199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_29d62008639dd433e38a3d53c31d13e6b94cb711a3a74066086c66a7a8265b3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29d62008639dd433e38a3d53c31d13e6b94cb711a3a74066086c66a7a8265b3a->enter($__internal_29d62008639dd433e38a3d53c31d13e6b94cb711a3a74066086c66a7a8265b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 28, $this->getSourceContext()); })()), array("data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 28, $this->getSourceContext()); })()), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_29d62008639dd433e38a3d53c31d13e6b94cb711a3a74066086c66a7a8265b3a->leave($__internal_29d62008639dd433e38a3d53c31d13e6b94cb711a3a74066086c66a7a8265b3a_prof);

        
        $__internal_132b60c62bd23e1b892c00fca6dc27721544884c7d3ec1afbf1cf51dd1ee6199->leave($__internal_132b60c62bd23e1b892c00fca6dc27721544884c7d3ec1afbf1cf51dd1ee6199_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_d0758e4f9686af1f3b9fd6da955b2bc87f6e4ab2b0f6ac1e9f8d5d7323c875cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0758e4f9686af1f3b9fd6da955b2bc87f6e4ab2b0f6ac1e9f8d5d7323c875cc->enter($__internal_d0758e4f9686af1f3b9fd6da955b2bc87f6e4ab2b0f6ac1e9f8d5d7323c875cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_a7f6ce71d3dfa984b3d94a211ebb0574db4cfe47e9fd4f7b2202ff121ddbad6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7f6ce71d3dfa984b3d94a211ebb0574db4cfe47e9fd4f7b2202ff121ddbad6a->enter($__internal_a7f6ce71d3dfa984b3d94a211ebb0574db4cfe47e9fd4f7b2202ff121ddbad6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
        echo "</textarea>";
        
        $__internal_a7f6ce71d3dfa984b3d94a211ebb0574db4cfe47e9fd4f7b2202ff121ddbad6a->leave($__internal_a7f6ce71d3dfa984b3d94a211ebb0574db4cfe47e9fd4f7b2202ff121ddbad6a_prof);

        
        $__internal_d0758e4f9686af1f3b9fd6da955b2bc87f6e4ab2b0f6ac1e9f8d5d7323c875cc->leave($__internal_d0758e4f9686af1f3b9fd6da955b2bc87f6e4ab2b0f6ac1e9f8d5d7323c875cc_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_e676eefd45e5483ffac430fe060c2c83a7e8905b8c616064104c957268fc6841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e676eefd45e5483ffac430fe060c2c83a7e8905b8c616064104c957268fc6841->enter($__internal_e676eefd45e5483ffac430fe060c2c83a7e8905b8c616064104c957268fc6841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        $__internal_9589ebd7568025c3b1e4dfa9c95a3320e7de1bbf4e81c5c4dfc139a47847ab2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9589ebd7568025c3b1e4dfa9c95a3320e7de1bbf4e81c5c4dfc139a47847ab2a->enter($__internal_9589ebd7568025c3b1e4dfa9c95a3320e7de1bbf4e81c5c4dfc139a47847ab2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 38, $this->getSourceContext()); })())) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_9589ebd7568025c3b1e4dfa9c95a3320e7de1bbf4e81c5c4dfc139a47847ab2a->leave($__internal_9589ebd7568025c3b1e4dfa9c95a3320e7de1bbf4e81c5c4dfc139a47847ab2a_prof);

        
        $__internal_e676eefd45e5483ffac430fe060c2c83a7e8905b8c616064104c957268fc6841->leave($__internal_e676eefd45e5483ffac430fe060c2c83a7e8905b8c616064104c957268fc6841_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_70bf8b80771473495ebb7866e7efc8e9ed76e2e344fdc732faf5b2b41434c213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70bf8b80771473495ebb7866e7efc8e9ed76e2e344fdc732faf5b2b41434c213->enter($__internal_70bf8b80771473495ebb7866e7efc8e9ed76e2e344fdc732faf5b2b41434c213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_f60342d8bddb9157d067d922a97e1e59a2a896dad99c132ca4422504ea921044 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f60342d8bddb9157d067d922a97e1e59a2a896dad99c132ca4422504ea921044->enter($__internal_f60342d8bddb9157d067d922a97e1e59a2a896dad99c132ca4422504ea921044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 49, $this->getSourceContext()); })())));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_f60342d8bddb9157d067d922a97e1e59a2a896dad99c132ca4422504ea921044->leave($__internal_f60342d8bddb9157d067d922a97e1e59a2a896dad99c132ca4422504ea921044_prof);

        
        $__internal_70bf8b80771473495ebb7866e7efc8e9ed76e2e344fdc732faf5b2b41434c213->leave($__internal_70bf8b80771473495ebb7866e7efc8e9ed76e2e344fdc732faf5b2b41434c213_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_57905328129665a04830fc4c7e10fb3bc5a1e100e7d598046a179c535a0526ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57905328129665a04830fc4c7e10fb3bc5a1e100e7d598046a179c535a0526ae->enter($__internal_57905328129665a04830fc4c7e10fb3bc5a1e100e7d598046a179c535a0526ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_7253f1d8268ae011f0eb81dab1f72f5cf7776f8e5c47861e8ead3af30101fbcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7253f1d8268ae011f0eb81dab1f72f5cf7776f8e5c47861e8ead3af30101fbcb->enter($__internal_7253f1d8268ae011f0eb81dab1f72f5cf7776f8e5c47861e8ead3af30101fbcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if ((((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 55, $this->getSourceContext()); })()) && (null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 55, $this->getSourceContext()); })()))) &&  !(isset($context["placeholder_in_choices"]) || array_key_exists("placeholder_in_choices", $context) ? $context["placeholder_in_choices"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder_in_choices" does not exist.', 55, $this->getSourceContext()); })())) &&  !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 55, $this->getSourceContext()); })())) && ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "size", array(), "any", true, true) || (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 55, $this->getSourceContext()); })()), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 59, $this->getSourceContext()); })()))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 60, $this->getSourceContext()); })()) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 60, $this->getSourceContext()); })())))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })()) != "")) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 60, $this->getSourceContext()); })()) === false)) ? ((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 60, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 62, $this->getSourceContext()); })())) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 63, $this->getSourceContext()); })());
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 65, $this->getSourceContext()); })())) > 0) &&  !(null === (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 65, $this->getSourceContext()); })())))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 66, $this->getSourceContext()); })()), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 69, $this->getSourceContext()); })());
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_7253f1d8268ae011f0eb81dab1f72f5cf7776f8e5c47861e8ead3af30101fbcb->leave($__internal_7253f1d8268ae011f0eb81dab1f72f5cf7776f8e5c47861e8ead3af30101fbcb_prof);

        
        $__internal_57905328129665a04830fc4c7e10fb3bc5a1e100e7d598046a179c535a0526ae->leave($__internal_57905328129665a04830fc4c7e10fb3bc5a1e100e7d598046a179c535a0526ae_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_a8d6112593d5878559215fba23fad24f4ba35b12f07a3f48478de79d8ce84952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8d6112593d5878559215fba23fad24f4ba35b12f07a3f48478de79d8ce84952->enter($__internal_a8d6112593d5878559215fba23fad24f4ba35b12f07a3f48478de79d8ce84952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        $__internal_8db90fa92810bc3c55347488dd93cdbf51b3f27c9a1958793741aa43b5901073 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8db90fa92810bc3c55347488dd93cdbf51b3f27c9a1958793741aa43b5901073->enter($__internal_8db90fa92810bc3c55347488dd93cdbf51b3f27c9a1958793741aa43b5901073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 75, $this->getSourceContext()); })()));
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
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 77, $this->getSourceContext()); })()) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 77, $this->getSourceContext()); })())))), "html", null, true);
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
                echo "<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array())) {
                    $__internal_d80a49cf331f869558e6bc1c2d232ac43298bc355870f93ba5e9da43f39baccb = array("attr" => twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array()));
                    if (!is_array($__internal_d80a49cf331f869558e6bc1c2d232ac43298bc355870f93ba5e9da43f39baccb)) {
                        throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                    }
                    $context['_parent'] = $context;
                    $context = array_merge($context, $__internal_d80a49cf331f869558e6bc1c2d232ac43298bc355870f93ba5e9da43f39baccb);
                    $this->displayBlock("attributes", $context, $blocks);
                    $context = $context['_parent'];
                }
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 82, $this->getSourceContext()); })()))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 82, $this->getSourceContext()); })()) === false)) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 82, $this->getSourceContext()); })())))), "html", null, true);
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
        
        $__internal_8db90fa92810bc3c55347488dd93cdbf51b3f27c9a1958793741aa43b5901073->leave($__internal_8db90fa92810bc3c55347488dd93cdbf51b3f27c9a1958793741aa43b5901073_prof);

        
        $__internal_a8d6112593d5878559215fba23fad24f4ba35b12f07a3f48478de79d8ce84952->leave($__internal_a8d6112593d5878559215fba23fad24f4ba35b12f07a3f48478de79d8ce84952_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_774aca5046117801a21c61f6a37f56e31e2a38fa55fd5d497ef8223ff3c671d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_774aca5046117801a21c61f6a37f56e31e2a38fa55fd5d497ef8223ff3c671d4->enter($__internal_774aca5046117801a21c61f6a37f56e31e2a38fa55fd5d497ef8223ff3c671d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_b500d5536379af51701c4c08dc0b212293bd2b9494becb6e79af10bf3d910a29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b500d5536379af51701c4c08dc0b212293bd2b9494becb6e79af10bf3d910a29->enter($__internal_b500d5536379af51701c4c08dc0b212293bd2b9494becb6e79af10bf3d910a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 88
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 88, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 88, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_b500d5536379af51701c4c08dc0b212293bd2b9494becb6e79af10bf3d910a29->leave($__internal_b500d5536379af51701c4c08dc0b212293bd2b9494becb6e79af10bf3d910a29_prof);

        
        $__internal_774aca5046117801a21c61f6a37f56e31e2a38fa55fd5d497ef8223ff3c671d4->leave($__internal_774aca5046117801a21c61f6a37f56e31e2a38fa55fd5d497ef8223ff3c671d4_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_491738f0613aae2a1e2e6fc4c44a1c03b1adc636d8e120bd953c6a17b5b393b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_491738f0613aae2a1e2e6fc4c44a1c03b1adc636d8e120bd953c6a17b5b393b3->enter($__internal_491738f0613aae2a1e2e6fc4c44a1c03b1adc636d8e120bd953c6a17b5b393b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_26e8bdccb76f98cc14ae1bce0fb72d15554f84d4093f124a60e81a6206121e10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26e8bdccb76f98cc14ae1bce0fb72d15554f84d4093f124a60e81a6206121e10->enter($__internal_26e8bdccb76f98cc14ae1bce0fb72d15554f84d4093f124a60e81a6206121e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 92
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 92, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 92, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_26e8bdccb76f98cc14ae1bce0fb72d15554f84d4093f124a60e81a6206121e10->leave($__internal_26e8bdccb76f98cc14ae1bce0fb72d15554f84d4093f124a60e81a6206121e10_prof);

        
        $__internal_491738f0613aae2a1e2e6fc4c44a1c03b1adc636d8e120bd953c6a17b5b393b3->leave($__internal_491738f0613aae2a1e2e6fc4c44a1c03b1adc636d8e120bd953c6a17b5b393b3_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_be512db4bd55035d65de3fa7c22cebba9b5696d429c6c5ad6e9de49c6c87e98b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be512db4bd55035d65de3fa7c22cebba9b5696d429c6c5ad6e9de49c6c87e98b->enter($__internal_be512db4bd55035d65de3fa7c22cebba9b5696d429c6c5ad6e9de49c6c87e98b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_9b64502f0e052857f2cef6949ada9160b7149b58e9898ce4ae6b4925aee28f41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b64502f0e052857f2cef6949ada9160b7149b58e9898ce4ae6b4925aee28f41->enter($__internal_9b64502f0e052857f2cef6949ada9160b7149b58e9898ce4ae6b4925aee28f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 96
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 96, $this->getSourceContext()); })()) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 100
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 100, $this->getSourceContext()); })()), "date", array()), 'errors');
            // line 101
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), "time", array()), 'errors');
            // line 102
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 102, $this->getSourceContext()); })()), "date", array()), 'widget');
            // line 103
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 103, $this->getSourceContext()); })()), "time", array()), 'widget');
            // line 104
            echo "</div>";
        }
        
        $__internal_9b64502f0e052857f2cef6949ada9160b7149b58e9898ce4ae6b4925aee28f41->leave($__internal_9b64502f0e052857f2cef6949ada9160b7149b58e9898ce4ae6b4925aee28f41_prof);

        
        $__internal_be512db4bd55035d65de3fa7c22cebba9b5696d429c6c5ad6e9de49c6c87e98b->leave($__internal_be512db4bd55035d65de3fa7c22cebba9b5696d429c6c5ad6e9de49c6c87e98b_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_ab301c6bc78938e1c90558f79ec051348deb2adbb251fb03e0f10d7b4ae0ffae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab301c6bc78938e1c90558f79ec051348deb2adbb251fb03e0f10d7b4ae0ffae->enter($__internal_ab301c6bc78938e1c90558f79ec051348deb2adbb251fb03e0f10d7b4ae0ffae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_1ca8847720ed572428fb36c91a292a4322a359b7a6173566e837294f8c17bf2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ca8847720ed572428fb36c91a292a4322a359b7a6173566e837294f8c17bf2b->enter($__internal_1ca8847720ed572428fb36c91a292a4322a359b7a6173566e837294f8c17bf2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 109
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 109, $this->getSourceContext()); })()) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 113
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "date_pattern" does not exist.', 113, $this->getSourceContext()); })()), array("{{ year }}" =>             // line 114
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 114, $this->getSourceContext()); })()), "year", array()), 'widget'), "{{ month }}" =>             // line 115
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 115, $this->getSourceContext()); })()), "month", array()), 'widget'), "{{ day }}" =>             // line 116
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 116, $this->getSourceContext()); })()), "day", array()), 'widget')));
            // line 118
            echo "</div>";
        }
        
        $__internal_1ca8847720ed572428fb36c91a292a4322a359b7a6173566e837294f8c17bf2b->leave($__internal_1ca8847720ed572428fb36c91a292a4322a359b7a6173566e837294f8c17bf2b_prof);

        
        $__internal_ab301c6bc78938e1c90558f79ec051348deb2adbb251fb03e0f10d7b4ae0ffae->leave($__internal_ab301c6bc78938e1c90558f79ec051348deb2adbb251fb03e0f10d7b4ae0ffae_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_ebb3abbc59d7d36096e610939612dd1b4b59a20be3f16b9859173f67417f35a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebb3abbc59d7d36096e610939612dd1b4b59a20be3f16b9859173f67417f35a6->enter($__internal_ebb3abbc59d7d36096e610939612dd1b4b59a20be3f16b9859173f67417f35a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_1b435a7daacced23cc532230e5f05e0fa22ebf18006478340c8b3510fe8d2d38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b435a7daacced23cc532230e5f05e0fa22ebf18006478340c8b3510fe8d2d38->enter($__internal_1b435a7daacced23cc532230e5f05e0fa22ebf18006478340c8b3510fe8d2d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 123
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 123, $this->getSourceContext()); })()) == "single_text")) {
            // line 124
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 126
            $context["vars"] = ((((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 126, $this->getSourceContext()); })()) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 127
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 128
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "hour", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 128, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "minute", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            }
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 128, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "second", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            }
            // line 129
            echo "        </div>";
        }
        
        $__internal_1b435a7daacced23cc532230e5f05e0fa22ebf18006478340c8b3510fe8d2d38->leave($__internal_1b435a7daacced23cc532230e5f05e0fa22ebf18006478340c8b3510fe8d2d38_prof);

        
        $__internal_ebb3abbc59d7d36096e610939612dd1b4b59a20be3f16b9859173f67417f35a6->leave($__internal_ebb3abbc59d7d36096e610939612dd1b4b59a20be3f16b9859173f67417f35a6_prof);

    }

    // line 133
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_baaaec9c810e605d59497fdba348c44cfaed86a0716de889c126053b6510106f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baaaec9c810e605d59497fdba348c44cfaed86a0716de889c126053b6510106f->enter($__internal_baaaec9c810e605d59497fdba348c44cfaed86a0716de889c126053b6510106f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_9fba9eac53f5f2d7a37ea32afafc1c2e174dea6efe3f75dfa0c50e5e96671eba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fba9eac53f5f2d7a37ea32afafc1c2e174dea6efe3f75dfa0c50e5e96671eba->enter($__internal_9fba9eac53f5f2d7a37ea32afafc1c2e174dea6efe3f75dfa0c50e5e96671eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 134
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 134, $this->getSourceContext()); })()) == "single_text")) {
            // line 135
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 137
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 138
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 138, $this->getSourceContext()); })()), 'errors');
            // line 139
            echo "<table class=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) || array_key_exists("table_class", $context) ? $context["table_class"] : (function () { throw new Twig_Error_Runtime('Variable "table_class" does not exist.', 139, $this->getSourceContext()); })()), "")) : ("")), "html", null, true);
            echo "\">
                <thead>
                    <tr>";
            // line 142
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 142, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 142, $this->getSourceContext()); })()), "years", array()), 'label');
                echo "</th>";
            }
            // line 143
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 143, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->getSourceContext()); })()), "months", array()), 'label');
                echo "</th>";
            }
            // line 144
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 144, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 144, $this->getSourceContext()); })()), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 145
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 145, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 145, $this->getSourceContext()); })()), "days", array()), 'label');
                echo "</th>";
            }
            // line 146
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 146, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 146, $this->getSourceContext()); })()), "hours", array()), 'label');
                echo "</th>";
            }
            // line 147
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 147, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 147, $this->getSourceContext()); })()), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 148
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 148, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 148, $this->getSourceContext()); })()), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 149
            echo "</tr>
                </thead>
                <tbody>
                    <tr>";
            // line 153
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 153, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 153, $this->getSourceContext()); })()), "years", array()), 'widget');
                echo "</td>";
            }
            // line 154
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 154, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 154, $this->getSourceContext()); })()), "months", array()), 'widget');
                echo "</td>";
            }
            // line 155
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 155, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 155, $this->getSourceContext()); })()), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 156
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 156, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 156, $this->getSourceContext()); })()), "days", array()), 'widget');
                echo "</td>";
            }
            // line 157
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 157, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 157, $this->getSourceContext()); })()), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 158
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 158, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 158, $this->getSourceContext()); })()), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 159
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 159, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 159, $this->getSourceContext()); })()), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 160
            echo "</tr>
                </tbody>
            </table>";
            // line 163
            if ((isset($context["with_invert"]) || array_key_exists("with_invert", $context) ? $context["with_invert"] : (function () { throw new Twig_Error_Runtime('Variable "with_invert" does not exist.', 163, $this->getSourceContext()); })())) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 163, $this->getSourceContext()); })()), "invert", array()), 'widget');
            }
            // line 164
            echo "</div>";
        }
        
        $__internal_9fba9eac53f5f2d7a37ea32afafc1c2e174dea6efe3f75dfa0c50e5e96671eba->leave($__internal_9fba9eac53f5f2d7a37ea32afafc1c2e174dea6efe3f75dfa0c50e5e96671eba_prof);

        
        $__internal_baaaec9c810e605d59497fdba348c44cfaed86a0716de889c126053b6510106f->leave($__internal_baaaec9c810e605d59497fdba348c44cfaed86a0716de889c126053b6510106f_prof);

    }

    // line 168
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_8d18031bc1278ff21949f11afb9d07f5b97e049adc5b84ade0ad474aab2ee706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d18031bc1278ff21949f11afb9d07f5b97e049adc5b84ade0ad474aab2ee706->enter($__internal_8d18031bc1278ff21949f11afb9d07f5b97e049adc5b84ade0ad474aab2ee706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_87e347698178d38d524ce7eec4c184af7b7a9f5f7b57d68ae0c346396c533524 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87e347698178d38d524ce7eec4c184af7b7a9f5f7b57d68ae0c346396c533524->enter($__internal_87e347698178d38d524ce7eec4c184af7b7a9f5f7b57d68ae0c346396c533524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 170, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_87e347698178d38d524ce7eec4c184af7b7a9f5f7b57d68ae0c346396c533524->leave($__internal_87e347698178d38d524ce7eec4c184af7b7a9f5f7b57d68ae0c346396c533524_prof);

        
        $__internal_8d18031bc1278ff21949f11afb9d07f5b97e049adc5b84ade0ad474aab2ee706->leave($__internal_8d18031bc1278ff21949f11afb9d07f5b97e049adc5b84ade0ad474aab2ee706_prof);

    }

    // line 174
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_278ecb6be8b69f80178e23551e30486eddf514aa7990804db9ae0a1d9b49abdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_278ecb6be8b69f80178e23551e30486eddf514aa7990804db9ae0a1d9b49abdb->enter($__internal_278ecb6be8b69f80178e23551e30486eddf514aa7990804db9ae0a1d9b49abdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        $__internal_71a3215c2e1181d174871ea5516f769b4e0c919201c69ab59729615ccfadd2f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71a3215c2e1181d174871ea5516f769b4e0c919201c69ab59729615ccfadd2f6->enter($__internal_71a3215c2e1181d174871ea5516f769b4e0c919201c69ab59729615ccfadd2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 175, $this->getSourceContext()); })()), "number")) : ("number"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_71a3215c2e1181d174871ea5516f769b4e0c919201c69ab59729615ccfadd2f6->leave($__internal_71a3215c2e1181d174871ea5516f769b4e0c919201c69ab59729615ccfadd2f6_prof);

        
        $__internal_278ecb6be8b69f80178e23551e30486eddf514aa7990804db9ae0a1d9b49abdb->leave($__internal_278ecb6be8b69f80178e23551e30486eddf514aa7990804db9ae0a1d9b49abdb_prof);

    }

    // line 179
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_21ca4b39c1d622e155474a1239e88e6420c0112f4555d4e547b75d1a3813aac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21ca4b39c1d622e155474a1239e88e6420c0112f4555d4e547b75d1a3813aac1->enter($__internal_21ca4b39c1d622e155474a1239e88e6420c0112f4555d4e547b75d1a3813aac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_5f79da10538eed5aeeec604b6ce33d51fc793373311eb00d641cb3cb01db4fee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f79da10538eed5aeeec604b6ce33d51fc793373311eb00d641cb3cb01db4fee->enter($__internal_5f79da10538eed5aeeec604b6ce33d51fc793373311eb00d641cb3cb01db4fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 180
        echo twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 180, $this->getSourceContext()); })()), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_5f79da10538eed5aeeec604b6ce33d51fc793373311eb00d641cb3cb01db4fee->leave($__internal_5f79da10538eed5aeeec604b6ce33d51fc793373311eb00d641cb3cb01db4fee_prof);

        
        $__internal_21ca4b39c1d622e155474a1239e88e6420c0112f4555d4e547b75d1a3813aac1->leave($__internal_21ca4b39c1d622e155474a1239e88e6420c0112f4555d4e547b75d1a3813aac1_prof);

    }

    // line 183
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_2d754e6a8e7ce8221fd7fcd01c6aa9f69f0d6011118f0dd81464a7fcf775ce83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d754e6a8e7ce8221fd7fcd01c6aa9f69f0d6011118f0dd81464a7fcf775ce83->enter($__internal_2d754e6a8e7ce8221fd7fcd01c6aa9f69f0d6011118f0dd81464a7fcf775ce83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        $__internal_ac44354d5bbc7020d15d8ea0ce2bf7d4430d8bc9cd8614824fb57b1b2a7073cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac44354d5bbc7020d15d8ea0ce2bf7d4430d8bc9cd8614824fb57b1b2a7073cc->enter($__internal_ac44354d5bbc7020d15d8ea0ce2bf7d4430d8bc9cd8614824fb57b1b2a7073cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 184
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 184, $this->getSourceContext()); })()), "url")) : ("url"));
        // line 185
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_ac44354d5bbc7020d15d8ea0ce2bf7d4430d8bc9cd8614824fb57b1b2a7073cc->leave($__internal_ac44354d5bbc7020d15d8ea0ce2bf7d4430d8bc9cd8614824fb57b1b2a7073cc_prof);

        
        $__internal_2d754e6a8e7ce8221fd7fcd01c6aa9f69f0d6011118f0dd81464a7fcf775ce83->leave($__internal_2d754e6a8e7ce8221fd7fcd01c6aa9f69f0d6011118f0dd81464a7fcf775ce83_prof);

    }

    // line 188
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_6fd812d7c856dbeadc3db80d52d807bd5a963d67348a4173dff665701be57466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fd812d7c856dbeadc3db80d52d807bd5a963d67348a4173dff665701be57466->enter($__internal_6fd812d7c856dbeadc3db80d52d807bd5a963d67348a4173dff665701be57466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        $__internal_519fb09091ddf82e024d81134773816b527cdf29976aa9073d6b4c2d18bee9b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_519fb09091ddf82e024d81134773816b527cdf29976aa9073d6b4c2d18bee9b4->enter($__internal_519fb09091ddf82e024d81134773816b527cdf29976aa9073d6b4c2d18bee9b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 189
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 189, $this->getSourceContext()); })()), "search")) : ("search"));
        // line 190
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_519fb09091ddf82e024d81134773816b527cdf29976aa9073d6b4c2d18bee9b4->leave($__internal_519fb09091ddf82e024d81134773816b527cdf29976aa9073d6b4c2d18bee9b4_prof);

        
        $__internal_6fd812d7c856dbeadc3db80d52d807bd5a963d67348a4173dff665701be57466->leave($__internal_6fd812d7c856dbeadc3db80d52d807bd5a963d67348a4173dff665701be57466_prof);

    }

    // line 193
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_f811afdf2c231b31750d264ae0375de53ef8eef5c1e46541093bdeacc144f4ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f811afdf2c231b31750d264ae0375de53ef8eef5c1e46541093bdeacc144f4ec->enter($__internal_f811afdf2c231b31750d264ae0375de53ef8eef5c1e46541093bdeacc144f4ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_2b1e288c45f9a487d5eb0a1378a0bfca15d85d2b27099cddcd32ee6283c48d1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b1e288c45f9a487d5eb0a1378a0bfca15d85d2b27099cddcd32ee6283c48d1c->enter($__internal_2b1e288c45f9a487d5eb0a1378a0bfca15d85d2b27099cddcd32ee6283c48d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 194, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 195
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_2b1e288c45f9a487d5eb0a1378a0bfca15d85d2b27099cddcd32ee6283c48d1c->leave($__internal_2b1e288c45f9a487d5eb0a1378a0bfca15d85d2b27099cddcd32ee6283c48d1c_prof);

        
        $__internal_f811afdf2c231b31750d264ae0375de53ef8eef5c1e46541093bdeacc144f4ec->leave($__internal_f811afdf2c231b31750d264ae0375de53ef8eef5c1e46541093bdeacc144f4ec_prof);

    }

    // line 198
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_ace0324480af0294fb519b0d454f1c69208088c2802817e6925ab7e50b0f22d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ace0324480af0294fb519b0d454f1c69208088c2802817e6925ab7e50b0f22d4->enter($__internal_ace0324480af0294fb519b0d454f1c69208088c2802817e6925ab7e50b0f22d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        $__internal_87d6d9352188b8972d73bcc456ca9b50ac47971beb52835c7aa9761b8ea23fc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87d6d9352188b8972d73bcc456ca9b50ac47971beb52835c7aa9761b8ea23fc1->enter($__internal_87d6d9352188b8972d73bcc456ca9b50ac47971beb52835c7aa9761b8ea23fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 199, $this->getSourceContext()); })()), "password")) : ("password"));
        // line 200
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_87d6d9352188b8972d73bcc456ca9b50ac47971beb52835c7aa9761b8ea23fc1->leave($__internal_87d6d9352188b8972d73bcc456ca9b50ac47971beb52835c7aa9761b8ea23fc1_prof);

        
        $__internal_ace0324480af0294fb519b0d454f1c69208088c2802817e6925ab7e50b0f22d4->leave($__internal_ace0324480af0294fb519b0d454f1c69208088c2802817e6925ab7e50b0f22d4_prof);

    }

    // line 203
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_87a30f39e083245d0f69bf20ddc6110346365b31d010e740393e264d5a4eeeed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87a30f39e083245d0f69bf20ddc6110346365b31d010e740393e264d5a4eeeed->enter($__internal_87a30f39e083245d0f69bf20ddc6110346365b31d010e740393e264d5a4eeeed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        $__internal_43f818d34a575fa131843234b7b9bcb1fccd031d6c8f8266142e70130734f4f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43f818d34a575fa131843234b7b9bcb1fccd031d6c8f8266142e70130734f4f5->enter($__internal_43f818d34a575fa131843234b7b9bcb1fccd031d6c8f8266142e70130734f4f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 204, $this->getSourceContext()); })()), "hidden")) : ("hidden"));
        // line 205
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_43f818d34a575fa131843234b7b9bcb1fccd031d6c8f8266142e70130734f4f5->leave($__internal_43f818d34a575fa131843234b7b9bcb1fccd031d6c8f8266142e70130734f4f5_prof);

        
        $__internal_87a30f39e083245d0f69bf20ddc6110346365b31d010e740393e264d5a4eeeed->leave($__internal_87a30f39e083245d0f69bf20ddc6110346365b31d010e740393e264d5a4eeeed_prof);

    }

    // line 208
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_9b7f3912338f5e6567efbd22c989591f47f879380dc4c2e355dc689ed2c9aad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b7f3912338f5e6567efbd22c989591f47f879380dc4c2e355dc689ed2c9aad0->enter($__internal_9b7f3912338f5e6567efbd22c989591f47f879380dc4c2e355dc689ed2c9aad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_99f83afe248672cc02da2dcd5bb92c5adc3a1d6a3f829aea8a8ac5ff66035e30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99f83afe248672cc02da2dcd5bb92c5adc3a1d6a3f829aea8a8ac5ff66035e30->enter($__internal_99f83afe248672cc02da2dcd5bb92c5adc3a1d6a3f829aea8a8ac5ff66035e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 209
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 209, $this->getSourceContext()); })()), "email")) : ("email"));
        // line 210
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_99f83afe248672cc02da2dcd5bb92c5adc3a1d6a3f829aea8a8ac5ff66035e30->leave($__internal_99f83afe248672cc02da2dcd5bb92c5adc3a1d6a3f829aea8a8ac5ff66035e30_prof);

        
        $__internal_9b7f3912338f5e6567efbd22c989591f47f879380dc4c2e355dc689ed2c9aad0->leave($__internal_9b7f3912338f5e6567efbd22c989591f47f879380dc4c2e355dc689ed2c9aad0_prof);

    }

    // line 213
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_b54cc34c4829a3b56eb48b3ac1a9c421164164504ca023c78a1045ca46e1b7d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b54cc34c4829a3b56eb48b3ac1a9c421164164504ca023c78a1045ca46e1b7d5->enter($__internal_b54cc34c4829a3b56eb48b3ac1a9c421164164504ca023c78a1045ca46e1b7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        $__internal_9cec018062220e4440b2e430f28e7111104bdcf265692dcb6390d56b2c88a606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cec018062220e4440b2e430f28e7111104bdcf265692dcb6390d56b2c88a606->enter($__internal_9cec018062220e4440b2e430f28e7111104bdcf265692dcb6390d56b2c88a606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 214
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 214, $this->getSourceContext()); })()), "range")) : ("range"));
        // line 215
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_9cec018062220e4440b2e430f28e7111104bdcf265692dcb6390d56b2c88a606->leave($__internal_9cec018062220e4440b2e430f28e7111104bdcf265692dcb6390d56b2c88a606_prof);

        
        $__internal_b54cc34c4829a3b56eb48b3ac1a9c421164164504ca023c78a1045ca46e1b7d5->leave($__internal_b54cc34c4829a3b56eb48b3ac1a9c421164164504ca023c78a1045ca46e1b7d5_prof);

    }

    // line 218
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_c1ea4c2031053a42fabb67daab7bb6457aea0422d2d71080ade87c22c7893c96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1ea4c2031053a42fabb67daab7bb6457aea0422d2d71080ade87c22c7893c96->enter($__internal_c1ea4c2031053a42fabb67daab7bb6457aea0422d2d71080ade87c22c7893c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_2b03cec02ff04f87a1736430120f6e90eadbd8066c6809642855a895ba758ade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b03cec02ff04f87a1736430120f6e90eadbd8066c6809642855a895ba758ade->enter($__internal_2b03cec02ff04f87a1736430120f6e90eadbd8066c6809642855a895ba758ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 219
        if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 219, $this->getSourceContext()); })()))) {
            // line 220
            if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 220, $this->getSourceContext()); })()))) {
                // line 221
                $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 221, $this->getSourceContext()); })()), array("%name%" =>                 // line 222
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 222, $this->getSourceContext()); })()), "%id%" =>                 // line 223
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 223, $this->getSourceContext()); })())));
            } elseif ((            // line 225
(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 225, $this->getSourceContext()); })()) === false)) {
                // line 226
                $context["translation_domain"] = false;
            } else {
                // line 228
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 228, $this->getSourceContext()); })()));
            }
        }
        // line 231
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 231, $this->getSourceContext()); })()), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 231, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 231, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 231, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 231, $this->getSourceContext()); })())))), "html", null, true);
        echo "</button>";
        
        $__internal_2b03cec02ff04f87a1736430120f6e90eadbd8066c6809642855a895ba758ade->leave($__internal_2b03cec02ff04f87a1736430120f6e90eadbd8066c6809642855a895ba758ade_prof);

        
        $__internal_c1ea4c2031053a42fabb67daab7bb6457aea0422d2d71080ade87c22c7893c96->leave($__internal_c1ea4c2031053a42fabb67daab7bb6457aea0422d2d71080ade87c22c7893c96_prof);

    }

    // line 234
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_08fffc7d54a86956022613c0ab34b8bb306afebf81d4273bc11276b81d0acd6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08fffc7d54a86956022613c0ab34b8bb306afebf81d4273bc11276b81d0acd6a->enter($__internal_08fffc7d54a86956022613c0ab34b8bb306afebf81d4273bc11276b81d0acd6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        $__internal_a7cebcc4cbf65be4c86e91f9ef108a47ab95ee05c6ec9555685af0b099b4abab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7cebcc4cbf65be4c86e91f9ef108a47ab95ee05c6ec9555685af0b099b4abab->enter($__internal_a7cebcc4cbf65be4c86e91f9ef108a47ab95ee05c6ec9555685af0b099b4abab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 235
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 235, $this->getSourceContext()); })()), "submit")) : ("submit"));
        // line 236
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_a7cebcc4cbf65be4c86e91f9ef108a47ab95ee05c6ec9555685af0b099b4abab->leave($__internal_a7cebcc4cbf65be4c86e91f9ef108a47ab95ee05c6ec9555685af0b099b4abab_prof);

        
        $__internal_08fffc7d54a86956022613c0ab34b8bb306afebf81d4273bc11276b81d0acd6a->leave($__internal_08fffc7d54a86956022613c0ab34b8bb306afebf81d4273bc11276b81d0acd6a_prof);

    }

    // line 239
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_b76039c8d48a69e0a95128dafe0c1021717d2bb6d2614734f80e023fc7aee7b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b76039c8d48a69e0a95128dafe0c1021717d2bb6d2614734f80e023fc7aee7b4->enter($__internal_b76039c8d48a69e0a95128dafe0c1021717d2bb6d2614734f80e023fc7aee7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        $__internal_b368e1e0ca51c945e25fe89ff616c1c423888a0cb8812bf1c1cd007e95354f6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b368e1e0ca51c945e25fe89ff616c1c423888a0cb8812bf1c1cd007e95354f6e->enter($__internal_b368e1e0ca51c945e25fe89ff616c1c423888a0cb8812bf1c1cd007e95354f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 240
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 240, $this->getSourceContext()); })()), "reset")) : ("reset"));
        // line 241
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_b368e1e0ca51c945e25fe89ff616c1c423888a0cb8812bf1c1cd007e95354f6e->leave($__internal_b368e1e0ca51c945e25fe89ff616c1c423888a0cb8812bf1c1cd007e95354f6e_prof);

        
        $__internal_b76039c8d48a69e0a95128dafe0c1021717d2bb6d2614734f80e023fc7aee7b4->leave($__internal_b76039c8d48a69e0a95128dafe0c1021717d2bb6d2614734f80e023fc7aee7b4_prof);

    }

    // line 244
    public function block_tel_widget($context, array $blocks = array())
    {
        $__internal_0b4740c28e24e305331cd2f19e4364cc377f0ba770153b02faf824e8f9c6b17f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b4740c28e24e305331cd2f19e4364cc377f0ba770153b02faf824e8f9c6b17f->enter($__internal_0b4740c28e24e305331cd2f19e4364cc377f0ba770153b02faf824e8f9c6b17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        $__internal_df322d21cee568774432efca8813932b2a8dd1ce3423e20b90c83035d890d9d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df322d21cee568774432efca8813932b2a8dd1ce3423e20b90c83035d890d9d0->enter($__internal_df322d21cee568774432efca8813932b2a8dd1ce3423e20b90c83035d890d9d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        // line 245
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 245, $this->getSourceContext()); })()), "tel")) : ("tel"));
        // line 246
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_df322d21cee568774432efca8813932b2a8dd1ce3423e20b90c83035d890d9d0->leave($__internal_df322d21cee568774432efca8813932b2a8dd1ce3423e20b90c83035d890d9d0_prof);

        
        $__internal_0b4740c28e24e305331cd2f19e4364cc377f0ba770153b02faf824e8f9c6b17f->leave($__internal_0b4740c28e24e305331cd2f19e4364cc377f0ba770153b02faf824e8f9c6b17f_prof);

    }

    // line 249
    public function block_color_widget($context, array $blocks = array())
    {
        $__internal_dd37973aa6f7e5e2ab20df771e1ae81286145f8f7bd76cb293251c8c55938fc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd37973aa6f7e5e2ab20df771e1ae81286145f8f7bd76cb293251c8c55938fc3->enter($__internal_dd37973aa6f7e5e2ab20df771e1ae81286145f8f7bd76cb293251c8c55938fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        $__internal_47705f504341617ad86945d34d3202077ebba6aa3ba7ff54ab29b2af7cb125ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47705f504341617ad86945d34d3202077ebba6aa3ba7ff54ab29b2af7cb125ff->enter($__internal_47705f504341617ad86945d34d3202077ebba6aa3ba7ff54ab29b2af7cb125ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        // line 250
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 250, $this->getSourceContext()); })()), "color")) : ("color"));
        // line 251
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_47705f504341617ad86945d34d3202077ebba6aa3ba7ff54ab29b2af7cb125ff->leave($__internal_47705f504341617ad86945d34d3202077ebba6aa3ba7ff54ab29b2af7cb125ff_prof);

        
        $__internal_dd37973aa6f7e5e2ab20df771e1ae81286145f8f7bd76cb293251c8c55938fc3->leave($__internal_dd37973aa6f7e5e2ab20df771e1ae81286145f8f7bd76cb293251c8c55938fc3_prof);

    }

    // line 256
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_5152e2571411172594c67982be7b8c0e4b9c6627c043f99ea9a2b5b06158c767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5152e2571411172594c67982be7b8c0e4b9c6627c043f99ea9a2b5b06158c767->enter($__internal_5152e2571411172594c67982be7b8c0e4b9c6627c043f99ea9a2b5b06158c767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_87bd57098804f48dd5b402f0fbd46c630fe1bfa942f8866c9b453da7df58bf6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87bd57098804f48dd5b402f0fbd46c630fe1bfa942f8866c9b453da7df58bf6a->enter($__internal_87bd57098804f48dd5b402f0fbd46c630fe1bfa942f8866c9b453da7df58bf6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 257
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 257, $this->getSourceContext()); })()) === false)) {
            // line 258
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 258, $this->getSourceContext()); })())) {
                // line 259
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 259, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 259, $this->getSourceContext()); })())));
            }
            // line 261
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 261, $this->getSourceContext()); })())) {
                // line 262
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 262, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 264
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 264, $this->getSourceContext()); })()))) {
                // line 265
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 265, $this->getSourceContext()); })()))) {
                    // line 266
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 266, $this->getSourceContext()); })()), array("%name%" =>                     // line 267
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 267, $this->getSourceContext()); })()), "%id%" =>                     // line 268
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 268, $this->getSourceContext()); })())));
                } else {
                    // line 271
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 271, $this->getSourceContext()); })()));
                }
            }
            // line 274
            echo "<";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 274, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            if ((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 274, $this->getSourceContext()); })())) {
                $__internal_16137a4657c49f7d05f7a2221cdd31a1d00a182686a6e4c735c2f9f0b6a16996 = array("attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 274, $this->getSourceContext()); })()));
                if (!is_array($__internal_16137a4657c49f7d05f7a2221cdd31a1d00a182686a6e4c735c2f9f0b6a16996)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_16137a4657c49f7d05f7a2221cdd31a1d00a182686a6e4c735c2f9f0b6a16996);
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 274, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 274, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 274, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 274, $this->getSourceContext()); })())))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 274, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            echo ">";
        }
        
        $__internal_87bd57098804f48dd5b402f0fbd46c630fe1bfa942f8866c9b453da7df58bf6a->leave($__internal_87bd57098804f48dd5b402f0fbd46c630fe1bfa942f8866c9b453da7df58bf6a_prof);

        
        $__internal_5152e2571411172594c67982be7b8c0e4b9c6627c043f99ea9a2b5b06158c767->leave($__internal_5152e2571411172594c67982be7b8c0e4b9c6627c043f99ea9a2b5b06158c767_prof);

    }

    // line 278
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_b63ffdf1eb6085b43f18af8959ee09b1bbde1ed856697fe93699fa3f394e9559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b63ffdf1eb6085b43f18af8959ee09b1bbde1ed856697fe93699fa3f394e9559->enter($__internal_b63ffdf1eb6085b43f18af8959ee09b1bbde1ed856697fe93699fa3f394e9559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        $__internal_ac5b5a5b80a230025cbb58b3d367044da974b5b724c6a13dcd447be3d16bdc46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac5b5a5b80a230025cbb58b3d367044da974b5b724c6a13dcd447be3d16bdc46->enter($__internal_ac5b5a5b80a230025cbb58b3d367044da974b5b724c6a13dcd447be3d16bdc46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_ac5b5a5b80a230025cbb58b3d367044da974b5b724c6a13dcd447be3d16bdc46->leave($__internal_ac5b5a5b80a230025cbb58b3d367044da974b5b724c6a13dcd447be3d16bdc46_prof);

        
        $__internal_b63ffdf1eb6085b43f18af8959ee09b1bbde1ed856697fe93699fa3f394e9559->leave($__internal_b63ffdf1eb6085b43f18af8959ee09b1bbde1ed856697fe93699fa3f394e9559_prof);

    }

    // line 282
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_9f158d51c7c9e047e6a4ec27a9b670185c49f99f845c30a12df4388835d0681d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f158d51c7c9e047e6a4ec27a9b670185c49f99f845c30a12df4388835d0681d->enter($__internal_9f158d51c7c9e047e6a4ec27a9b670185c49f99f845c30a12df4388835d0681d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        $__internal_8742b022df87cf03e804bee7f0d0977d35c7a88d95ecdf9b7ac8723dab81f381 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8742b022df87cf03e804bee7f0d0977d35c7a88d95ecdf9b7ac8723dab81f381->enter($__internal_8742b022df87cf03e804bee7f0d0977d35c7a88d95ecdf9b7ac8723dab81f381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 287
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_8742b022df87cf03e804bee7f0d0977d35c7a88d95ecdf9b7ac8723dab81f381->leave($__internal_8742b022df87cf03e804bee7f0d0977d35c7a88d95ecdf9b7ac8723dab81f381_prof);

        
        $__internal_9f158d51c7c9e047e6a4ec27a9b670185c49f99f845c30a12df4388835d0681d->leave($__internal_9f158d51c7c9e047e6a4ec27a9b670185c49f99f845c30a12df4388835d0681d_prof);

    }

    // line 290
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_f4ac7f1c0c3650cd14a626a54170c317d668a5ba9b2369664757c4fa364a04b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4ac7f1c0c3650cd14a626a54170c317d668a5ba9b2369664757c4fa364a04b2->enter($__internal_f4ac7f1c0c3650cd14a626a54170c317d668a5ba9b2369664757c4fa364a04b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_131f3c50b975303c8b37ce6ca3e5471689c666dea1cab67c61967d7e7735318c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_131f3c50b975303c8b37ce6ca3e5471689c666dea1cab67c61967d7e7735318c->enter($__internal_131f3c50b975303c8b37ce6ca3e5471689c666dea1cab67c61967d7e7735318c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 291
        echo "<div>";
        // line 292
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 292, $this->getSourceContext()); })()), 'label');
        // line 293
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 293, $this->getSourceContext()); })()), 'errors');
        // line 294
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 294, $this->getSourceContext()); })()), 'widget');
        // line 295
        echo "</div>";
        
        $__internal_131f3c50b975303c8b37ce6ca3e5471689c666dea1cab67c61967d7e7735318c->leave($__internal_131f3c50b975303c8b37ce6ca3e5471689c666dea1cab67c61967d7e7735318c_prof);

        
        $__internal_f4ac7f1c0c3650cd14a626a54170c317d668a5ba9b2369664757c4fa364a04b2->leave($__internal_f4ac7f1c0c3650cd14a626a54170c317d668a5ba9b2369664757c4fa364a04b2_prof);

    }

    // line 298
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_439e532bb4495b3d71a1a4cb51fa955c36bcd65e59c18523d1af4eb6f5de43d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_439e532bb4495b3d71a1a4cb51fa955c36bcd65e59c18523d1af4eb6f5de43d6->enter($__internal_439e532bb4495b3d71a1a4cb51fa955c36bcd65e59c18523d1af4eb6f5de43d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_61c7161d0ff7c482dc43df41ce72341cc98daf1c803d23adddef45a2666e70da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61c7161d0ff7c482dc43df41ce72341cc98daf1c803d23adddef45a2666e70da->enter($__internal_61c7161d0ff7c482dc43df41ce72341cc98daf1c803d23adddef45a2666e70da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 299
        echo "<div>";
        // line 300
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 300, $this->getSourceContext()); })()), 'widget');
        // line 301
        echo "</div>";
        
        $__internal_61c7161d0ff7c482dc43df41ce72341cc98daf1c803d23adddef45a2666e70da->leave($__internal_61c7161d0ff7c482dc43df41ce72341cc98daf1c803d23adddef45a2666e70da_prof);

        
        $__internal_439e532bb4495b3d71a1a4cb51fa955c36bcd65e59c18523d1af4eb6f5de43d6->leave($__internal_439e532bb4495b3d71a1a4cb51fa955c36bcd65e59c18523d1af4eb6f5de43d6_prof);

    }

    // line 304
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_b9dee9fb5aa2961e8c84e59317e92584a5b9a9cf122dab8dcf89cae38cf707ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9dee9fb5aa2961e8c84e59317e92584a5b9a9cf122dab8dcf89cae38cf707ac->enter($__internal_b9dee9fb5aa2961e8c84e59317e92584a5b9a9cf122dab8dcf89cae38cf707ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_4c51e005ffc7bc4fba09470edbca7d6feb9d3bfe2b48d2c364cc02d8364c2fd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c51e005ffc7bc4fba09470edbca7d6feb9d3bfe2b48d2c364cc02d8364c2fd4->enter($__internal_4c51e005ffc7bc4fba09470edbca7d6feb9d3bfe2b48d2c364cc02d8364c2fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 305
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 305, $this->getSourceContext()); })()), 'widget');
        
        $__internal_4c51e005ffc7bc4fba09470edbca7d6feb9d3bfe2b48d2c364cc02d8364c2fd4->leave($__internal_4c51e005ffc7bc4fba09470edbca7d6feb9d3bfe2b48d2c364cc02d8364c2fd4_prof);

        
        $__internal_b9dee9fb5aa2961e8c84e59317e92584a5b9a9cf122dab8dcf89cae38cf707ac->leave($__internal_b9dee9fb5aa2961e8c84e59317e92584a5b9a9cf122dab8dcf89cae38cf707ac_prof);

    }

    // line 310
    public function block_form($context, array $blocks = array())
    {
        $__internal_e21c1263aa4d4bdb01b6ed3db670e9f2ec0848c1ea853840e7a907547200c592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e21c1263aa4d4bdb01b6ed3db670e9f2ec0848c1ea853840e7a907547200c592->enter($__internal_e21c1263aa4d4bdb01b6ed3db670e9f2ec0848c1ea853840e7a907547200c592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_988f455ac92b907f755c20bb078adc08a50eff9a4db55922b8e333c89c36ae97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_988f455ac92b907f755c20bb078adc08a50eff9a4db55922b8e333c89c36ae97->enter($__internal_988f455ac92b907f755c20bb078adc08a50eff9a4db55922b8e333c89c36ae97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 311
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 311, $this->getSourceContext()); })()), 'form_start');
        // line 312
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 312, $this->getSourceContext()); })()), 'widget');
        // line 313
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 313, $this->getSourceContext()); })()), 'form_end');
        
        $__internal_988f455ac92b907f755c20bb078adc08a50eff9a4db55922b8e333c89c36ae97->leave($__internal_988f455ac92b907f755c20bb078adc08a50eff9a4db55922b8e333c89c36ae97_prof);

        
        $__internal_e21c1263aa4d4bdb01b6ed3db670e9f2ec0848c1ea853840e7a907547200c592->leave($__internal_e21c1263aa4d4bdb01b6ed3db670e9f2ec0848c1ea853840e7a907547200c592_prof);

    }

    // line 316
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_06657fc3980e82f80db6e79e5e00da29e9bc9b7769a6fa062114af08d58558f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06657fc3980e82f80db6e79e5e00da29e9bc9b7769a6fa062114af08d58558f1->enter($__internal_06657fc3980e82f80db6e79e5e00da29e9bc9b7769a6fa062114af08d58558f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_344da48ac2d6f0e042c8e4b4ca9316c7bc18f69378ce870832969e3a76a23564 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_344da48ac2d6f0e042c8e4b4ca9316c7bc18f69378ce870832969e3a76a23564->enter($__internal_344da48ac2d6f0e042c8e4b4ca9316c7bc18f69378ce870832969e3a76a23564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 317
        twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 317, $this->getSourceContext()); })()), "setMethodRendered", array(), "method");
        // line 318
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 318, $this->getSourceContext()); })()));
        // line 319
        if (twig_in_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 319, $this->getSourceContext()); })()), array(0 => "GET", 1 => "POST"))) {
            // line 320
            $context["form_method"] = (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 320, $this->getSourceContext()); })());
        } else {
            // line 322
            $context["form_method"] = "POST";
        }
        // line 324
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 324, $this->getSourceContext()); })()), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 324, $this->getSourceContext()); })())), "html", null, true);
        echo "\"";
        if (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 324, $this->getSourceContext()); })()) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 324, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 324, $this->getSourceContext()); })()));
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
        if ((isset($context["multipart"]) || array_key_exists("multipart", $context) ? $context["multipart"] : (function () { throw new Twig_Error_Runtime('Variable "multipart" does not exist.', 324, $this->getSourceContext()); })())) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 325
        if (((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 325, $this->getSourceContext()); })()) != (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 325, $this->getSourceContext()); })()))) {
            // line 326
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 326, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />";
        }
        
        $__internal_344da48ac2d6f0e042c8e4b4ca9316c7bc18f69378ce870832969e3a76a23564->leave($__internal_344da48ac2d6f0e042c8e4b4ca9316c7bc18f69378ce870832969e3a76a23564_prof);

        
        $__internal_06657fc3980e82f80db6e79e5e00da29e9bc9b7769a6fa062114af08d58558f1->leave($__internal_06657fc3980e82f80db6e79e5e00da29e9bc9b7769a6fa062114af08d58558f1_prof);

    }

    // line 330
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_8410a61a5a2153a4e160b1a520edd8f988f56127728bdf5c4512ceb835359ed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8410a61a5a2153a4e160b1a520edd8f988f56127728bdf5c4512ceb835359ed6->enter($__internal_8410a61a5a2153a4e160b1a520edd8f988f56127728bdf5c4512ceb835359ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        $__internal_c2220bc6aa86e8693a4ba4c726c74d8fedc0b0c454ff3f5960b3780120eb83ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2220bc6aa86e8693a4ba4c726c74d8fedc0b0c454ff3f5960b3780120eb83ae->enter($__internal_c2220bc6aa86e8693a4ba4c726c74d8fedc0b0c454ff3f5960b3780120eb83ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 331
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) || array_key_exists("render_rest", $context) ? $context["render_rest"] : (function () { throw new Twig_Error_Runtime('Variable "render_rest" does not exist.', 331, $this->getSourceContext()); })()))) {
            // line 332
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 332, $this->getSourceContext()); })()), 'rest');
        }
        // line 334
        echo "</form>";
        
        $__internal_c2220bc6aa86e8693a4ba4c726c74d8fedc0b0c454ff3f5960b3780120eb83ae->leave($__internal_c2220bc6aa86e8693a4ba4c726c74d8fedc0b0c454ff3f5960b3780120eb83ae_prof);

        
        $__internal_8410a61a5a2153a4e160b1a520edd8f988f56127728bdf5c4512ceb835359ed6->leave($__internal_8410a61a5a2153a4e160b1a520edd8f988f56127728bdf5c4512ceb835359ed6_prof);

    }

    // line 337
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_0610dcd8fae9063faa6746de604ede26e4b803a1461c435796e6d781e8294423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0610dcd8fae9063faa6746de604ede26e4b803a1461c435796e6d781e8294423->enter($__internal_0610dcd8fae9063faa6746de604ede26e4b803a1461c435796e6d781e8294423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_97395ce74f00f17ed7a16cc82290fed89026bd93ff8581d7661eb9cb68ffc1e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97395ce74f00f17ed7a16cc82290fed89026bd93ff8581d7661eb9cb68ffc1e1->enter($__internal_97395ce74f00f17ed7a16cc82290fed89026bd93ff8581d7661eb9cb68ffc1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 338
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 338, $this->getSourceContext()); })())) > 0)) {
            // line 339
            echo "<ul>";
            // line 340
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 340, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 341
                echo "<li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 343
            echo "</ul>";
        }
        
        $__internal_97395ce74f00f17ed7a16cc82290fed89026bd93ff8581d7661eb9cb68ffc1e1->leave($__internal_97395ce74f00f17ed7a16cc82290fed89026bd93ff8581d7661eb9cb68ffc1e1_prof);

        
        $__internal_0610dcd8fae9063faa6746de604ede26e4b803a1461c435796e6d781e8294423->leave($__internal_0610dcd8fae9063faa6746de604ede26e4b803a1461c435796e6d781e8294423_prof);

    }

    // line 347
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_bd7cafe28cd6ea9c6ab99a3192d935cc1fa52ea73959099e1b667cc4c019b0be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd7cafe28cd6ea9c6ab99a3192d935cc1fa52ea73959099e1b667cc4c019b0be->enter($__internal_bd7cafe28cd6ea9c6ab99a3192d935cc1fa52ea73959099e1b667cc4c019b0be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        $__internal_8aed6e1e6fc3fc995c22d1001fd23e1a5eabba767766ebbbb7c6d57e7067c154 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aed6e1e6fc3fc995c22d1001fd23e1a5eabba767766ebbbb7c6d57e7067c154->enter($__internal_8aed6e1e6fc3fc995c22d1001fd23e1a5eabba767766ebbbb7c6d57e7067c154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 348
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 348, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 349
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "rendered", array())) {
                // line 350
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 354
        if (( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 354, $this->getSourceContext()); })()), "methodRendered", array()) && Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 354, $this->getSourceContext()); })())))) {
            // line 355
            twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 355, $this->getSourceContext()); })()), "setMethodRendered", array(), "method");
            // line 356
            $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 356, $this->getSourceContext()); })()));
            // line 357
            if (twig_in_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 357, $this->getSourceContext()); })()), array(0 => "GET", 1 => "POST"))) {
                // line 358
                $context["form_method"] = (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 358, $this->getSourceContext()); })());
            } else {
                // line 360
                $context["form_method"] = "POST";
            }
            // line 363
            if (((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 363, $this->getSourceContext()); })()) != (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 363, $this->getSourceContext()); })()))) {
                // line 364
                echo "<input type=\"hidden\" name=\"_method\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 364, $this->getSourceContext()); })()), "html", null, true);
                echo "\" />";
            }
        }
        
        $__internal_8aed6e1e6fc3fc995c22d1001fd23e1a5eabba767766ebbbb7c6d57e7067c154->leave($__internal_8aed6e1e6fc3fc995c22d1001fd23e1a5eabba767766ebbbb7c6d57e7067c154_prof);

        
        $__internal_bd7cafe28cd6ea9c6ab99a3192d935cc1fa52ea73959099e1b667cc4c019b0be->leave($__internal_bd7cafe28cd6ea9c6ab99a3192d935cc1fa52ea73959099e1b667cc4c019b0be_prof);

    }

    // line 371
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_e926fd3acffb065e6fe4acbf33cb9ef78711f268e0eb30805a1867b6d3a2b54c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e926fd3acffb065e6fe4acbf33cb9ef78711f268e0eb30805a1867b6d3a2b54c->enter($__internal_e926fd3acffb065e6fe4acbf33cb9ef78711f268e0eb30805a1867b6d3a2b54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        $__internal_a1eaa564934b198631f456726842f1b902d7f449f8b50f3ffc8188cc3ba0fe9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1eaa564934b198631f456726842f1b902d7f449f8b50f3ffc8188cc3ba0fe9d->enter($__internal_a1eaa564934b198631f456726842f1b902d7f449f8b50f3ffc8188cc3ba0fe9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 372
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 372, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 373
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_a1eaa564934b198631f456726842f1b902d7f449f8b50f3ffc8188cc3ba0fe9d->leave($__internal_a1eaa564934b198631f456726842f1b902d7f449f8b50f3ffc8188cc3ba0fe9d_prof);

        
        $__internal_e926fd3acffb065e6fe4acbf33cb9ef78711f268e0eb30805a1867b6d3a2b54c->leave($__internal_e926fd3acffb065e6fe4acbf33cb9ef78711f268e0eb30805a1867b6d3a2b54c_prof);

    }

    // line 377
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_242e1d4d1bfa4ddf8a8d8382f62dc52a7ffd3310b6db7d6607d0ea84fbe5312f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_242e1d4d1bfa4ddf8a8d8382f62dc52a7ffd3310b6db7d6607d0ea84fbe5312f->enter($__internal_242e1d4d1bfa4ddf8a8d8382f62dc52a7ffd3310b6db7d6607d0ea84fbe5312f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_297c8ec398709742f5f3c3fc74bc6309b087f6ff70016578fbbc44c92fcbc0a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_297c8ec398709742f5f3c3fc74bc6309b087f6ff70016578fbbc44c92fcbc0a6->enter($__internal_297c8ec398709742f5f3c3fc74bc6309b087f6ff70016578fbbc44c92fcbc0a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 378
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 378, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 378, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        // line 379
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 379, $this->getSourceContext()); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 380
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 380, $this->getSourceContext()); })())) {
            echo " required=\"required\"";
        }
        // line 381
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_297c8ec398709742f5f3c3fc74bc6309b087f6ff70016578fbbc44c92fcbc0a6->leave($__internal_297c8ec398709742f5f3c3fc74bc6309b087f6ff70016578fbbc44c92fcbc0a6_prof);

        
        $__internal_242e1d4d1bfa4ddf8a8d8382f62dc52a7ffd3310b6db7d6607d0ea84fbe5312f->leave($__internal_242e1d4d1bfa4ddf8a8d8382f62dc52a7ffd3310b6db7d6607d0ea84fbe5312f_prof);

    }

    // line 384
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_3fb9dbd7f268f6f84f446c6a0975393f5bdc6e4ceaf2858efff9f7d3b5b9f78a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fb9dbd7f268f6f84f446c6a0975393f5bdc6e4ceaf2858efff9f7d3b5b9f78a->enter($__internal_3fb9dbd7f268f6f84f446c6a0975393f5bdc6e4ceaf2858efff9f7d3b5b9f78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        $__internal_cef839daeeca3206b01b7264937a395c514edeeddf976328ccda39182b0b16eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cef839daeeca3206b01b7264937a395c514edeeddf976328ccda39182b0b16eb->enter($__internal_cef839daeeca3206b01b7264937a395c514edeeddf976328ccda39182b0b16eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 385
        if ( !twig_test_empty((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 385, $this->getSourceContext()); })()))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 385, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        // line 386
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_cef839daeeca3206b01b7264937a395c514edeeddf976328ccda39182b0b16eb->leave($__internal_cef839daeeca3206b01b7264937a395c514edeeddf976328ccda39182b0b16eb_prof);

        
        $__internal_3fb9dbd7f268f6f84f446c6a0975393f5bdc6e4ceaf2858efff9f7d3b5b9f78a->leave($__internal_3fb9dbd7f268f6f84f446c6a0975393f5bdc6e4ceaf2858efff9f7d3b5b9f78a_prof);

    }

    // line 389
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_c746c9f997392022c6645d7a6f0a3746523fff0033e8f3be900d04dac8245953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c746c9f997392022c6645d7a6f0a3746523fff0033e8f3be900d04dac8245953->enter($__internal_c746c9f997392022c6645d7a6f0a3746523fff0033e8f3be900d04dac8245953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        $__internal_00dd5c17d1c6b9fafbf864ba151615d887bbe2fdeb6ed2903cee18a3c048a576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00dd5c17d1c6b9fafbf864ba151615d887bbe2fdeb6ed2903cee18a3c048a576->enter($__internal_00dd5c17d1c6b9fafbf864ba151615d887bbe2fdeb6ed2903cee18a3c048a576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 390
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 390, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 390, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 390, $this->getSourceContext()); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 391
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_00dd5c17d1c6b9fafbf864ba151615d887bbe2fdeb6ed2903cee18a3c048a576->leave($__internal_00dd5c17d1c6b9fafbf864ba151615d887bbe2fdeb6ed2903cee18a3c048a576_prof);

        
        $__internal_c746c9f997392022c6645d7a6f0a3746523fff0033e8f3be900d04dac8245953->leave($__internal_c746c9f997392022c6645d7a6f0a3746523fff0033e8f3be900d04dac8245953_prof);

    }

    // line 394
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_ec011e444dd8da7b0e39e85650c7fe0183c9a07c4b6e0a5eeb49a1cb5aed6042 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec011e444dd8da7b0e39e85650c7fe0183c9a07c4b6e0a5eeb49a1cb5aed6042->enter($__internal_ec011e444dd8da7b0e39e85650c7fe0183c9a07c4b6e0a5eeb49a1cb5aed6042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        $__internal_cc25f14a2fccb571c68e4411e0e5914b25977ddce60c553483e58f60c873348b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc25f14a2fccb571c68e4411e0e5914b25977ddce60c553483e58f60c873348b->enter($__internal_cc25f14a2fccb571c68e4411e0e5914b25977ddce60c553483e58f60c873348b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 395
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 395, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 396
            echo " ";
            // line 397
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 398
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 398, $this->getSourceContext()); })()) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 398, $this->getSourceContext()); })())))), "html", null, true);
                echo "\"";
            } elseif ((            // line 399
$context["attrvalue"] === true)) {
                // line 400
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 401
$context["attrvalue"] === false)) {
                // line 402
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_cc25f14a2fccb571c68e4411e0e5914b25977ddce60c553483e58f60c873348b->leave($__internal_cc25f14a2fccb571c68e4411e0e5914b25977ddce60c553483e58f60c873348b_prof);

        
        $__internal_ec011e444dd8da7b0e39e85650c7fe0183c9a07c4b6e0a5eeb49a1cb5aed6042->leave($__internal_ec011e444dd8da7b0e39e85650c7fe0183c9a07c4b6e0a5eeb49a1cb5aed6042_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1658 => 402,  1656 => 401,  1651 => 400,  1649 => 399,  1644 => 398,  1642 => 397,  1640 => 396,  1636 => 395,  1627 => 394,  1617 => 391,  1608 => 390,  1599 => 389,  1589 => 386,  1583 => 385,  1574 => 384,  1564 => 381,  1560 => 380,  1556 => 379,  1550 => 378,  1541 => 377,  1527 => 373,  1523 => 372,  1514 => 371,  1500 => 364,  1498 => 363,  1495 => 360,  1492 => 358,  1490 => 357,  1488 => 356,  1486 => 355,  1484 => 354,  1477 => 350,  1475 => 349,  1471 => 348,  1462 => 347,  1451 => 343,  1443 => 341,  1439 => 340,  1437 => 339,  1435 => 338,  1426 => 337,  1416 => 334,  1413 => 332,  1411 => 331,  1402 => 330,  1389 => 326,  1387 => 325,  1360 => 324,  1357 => 322,  1354 => 320,  1352 => 319,  1350 => 318,  1348 => 317,  1339 => 316,  1329 => 313,  1327 => 312,  1325 => 311,  1316 => 310,  1306 => 305,  1297 => 304,  1287 => 301,  1285 => 300,  1283 => 299,  1274 => 298,  1264 => 295,  1262 => 294,  1260 => 293,  1258 => 292,  1256 => 291,  1247 => 290,  1237 => 287,  1228 => 282,  1211 => 278,  1184 => 274,  1180 => 271,  1177 => 268,  1176 => 267,  1175 => 266,  1173 => 265,  1171 => 264,  1168 => 262,  1166 => 261,  1163 => 259,  1161 => 258,  1159 => 257,  1150 => 256,  1140 => 251,  1138 => 250,  1129 => 249,  1119 => 246,  1117 => 245,  1108 => 244,  1098 => 241,  1096 => 240,  1087 => 239,  1077 => 236,  1075 => 235,  1066 => 234,  1050 => 231,  1046 => 228,  1043 => 226,  1041 => 225,  1039 => 223,  1038 => 222,  1037 => 221,  1035 => 220,  1033 => 219,  1024 => 218,  1014 => 215,  1012 => 214,  1003 => 213,  993 => 210,  991 => 209,  982 => 208,  972 => 205,  970 => 204,  961 => 203,  951 => 200,  949 => 199,  940 => 198,  929 => 195,  927 => 194,  918 => 193,  908 => 190,  906 => 189,  897 => 188,  887 => 185,  885 => 184,  876 => 183,  866 => 180,  857 => 179,  847 => 176,  845 => 175,  836 => 174,  826 => 171,  824 => 170,  815 => 168,  804 => 164,  800 => 163,  796 => 160,  790 => 159,  784 => 158,  778 => 157,  772 => 156,  766 => 155,  760 => 154,  754 => 153,  749 => 149,  743 => 148,  737 => 147,  731 => 146,  725 => 145,  719 => 144,  713 => 143,  707 => 142,  701 => 139,  699 => 138,  695 => 137,  692 => 135,  690 => 134,  681 => 133,  670 => 129,  660 => 128,  655 => 127,  653 => 126,  650 => 124,  648 => 123,  639 => 122,  628 => 118,  626 => 116,  625 => 115,  624 => 114,  623 => 113,  619 => 112,  616 => 110,  614 => 109,  605 => 108,  594 => 104,  592 => 103,  590 => 102,  588 => 101,  586 => 100,  582 => 99,  579 => 97,  577 => 96,  568 => 95,  548 => 92,  539 => 91,  519 => 88,  510 => 87,  469 => 82,  466 => 80,  464 => 79,  462 => 78,  457 => 77,  455 => 76,  438 => 75,  429 => 74,  419 => 71,  417 => 70,  415 => 69,  409 => 66,  407 => 65,  405 => 64,  403 => 63,  401 => 62,  392 => 60,  390 => 59,  383 => 58,  380 => 56,  378 => 55,  369 => 54,  359 => 51,  353 => 49,  351 => 48,  347 => 47,  343 => 46,  334 => 45,  323 => 41,  320 => 39,  318 => 38,  309 => 37,  295 => 34,  286 => 33,  276 => 30,  273 => 28,  271 => 27,  262 => 26,  252 => 23,  250 => 22,  248 => 21,  245 => 19,  243 => 18,  239 => 17,  230 => 16,  210 => 13,  208 => 12,  199 => 11,  188 => 7,  185 => 5,  183 => 4,  174 => 3,  164 => 394,  162 => 389,  160 => 384,  158 => 377,  156 => 371,  153 => 368,  151 => 347,  149 => 337,  147 => 330,  145 => 316,  143 => 310,  141 => 304,  139 => 298,  137 => 290,  135 => 282,  133 => 278,  131 => 256,  129 => 249,  127 => 244,  125 => 239,  123 => 234,  121 => 218,  119 => 213,  117 => 208,  115 => 203,  113 => 198,  111 => 193,  109 => 188,  107 => 183,  105 => 179,  103 => 174,  101 => 168,  99 => 133,  97 => 122,  95 => 108,  93 => 95,  91 => 91,  89 => 87,  87 => 74,  85 => 54,  83 => 45,  81 => 37,  79 => 33,  77 => 26,  75 => 16,  73 => 11,  71 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Widgets #}

{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
    <div {{ block('widget_container_attributes') }}>
        {%- if form is rootform -%}
            {{ form_errors(form) }}
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
    {% if prototype is defined %}
        {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
    {% endif %}
    {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
    {% if expanded %}
        {{- block('choice_widget_expanded') -}}
    {% else %}
        {{- block('choice_widget_collapsed') -}}
    {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
        {{- form_widget(child) -}}
        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice.attr %}{% with { attr: choice.attr } %}{{ block('attributes') }}{% endwith %}{% endif %}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock radio_widget -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <table class=\"{{ table_class|default('') }}\">
                <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                </tbody>
            </table>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{%- block number_widget -%}
    {# type=\"number\" doesn't work with floats #}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
    {%- set type = type|default('number') -%}
    {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
    {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
    {%- set type = type|default('url') -%}
    {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
    {%- set type = type|default('search') -%}
    {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
    {%- set type = type|default('password') -%}
    {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
    {%- set type = type|default('hidden') -%}
    {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
    {%- set type = type|default('email') -%}
    {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block range_widget -%}
    {% set type = type|default('range') %}
    {{- block('form_widget_simple') -}}
{%- endblock range_widget %}

{%- block button_widget -%}
    {%- if label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- elseif label is same as(false) -%}
            {% set translation_domain = false %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {{ block('button_widget') }}
{%- endblock reset_widget -%}

{%- block tel_widget -%}
    {%- set type = type|default('tel') -%}
    {{ block('form_widget_simple') }}
{%- endblock tel_widget -%}

{%- block color_widget -%}
    {%- set type = type|default('color') -%}
    {{ block('form_widget_simple') }}
{%- endblock color_widget -%}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <{{ element|default('label') }}{% if label_attr %}{% with { attr: label_attr } %}{{ block('attributes') }}{% endwith %}{% endif %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</{{ element|default('label') }}>
    {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
    {#
    No need to render the errors here, as all errors are mapped
    to the first child (see RepeatedTypeValidatorExtension).
    #}
    {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
    <div>
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock form_row -%}

{%- block button_row -%}
    <div>
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
    {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
    {{ form_start(form) }}
        {{- form_widget(form) -}}
    {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
    {%- do form.setMethodRendered() -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
    <form name=\"{{ name }}\" method=\"{{ form_method|lower }}\"{% if action != '' %} action=\"{{ action }}\"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
    {%- if not render_rest is defined or render_rest -%}
        {{ form_rest(form) }}
    {%- endif -%}
    </form>
{%- endblock form_end -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
    <ul>
        {%- for error in errors -%}
            <li>{{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
    {% for child in form -%}
        {% if not child.rendered %}
            {{- form_row(child) -}}
        {% endif %}
    {%- endfor -%}

    {% if not form.methodRendered and form is rootform %}
        {%- do form.setMethodRendered() -%}
        {% set method = method|upper %}
        {%- if method in [\"GET\", \"POST\"] -%}
            {% set form_method = method %}
        {%- else -%}
            {% set form_method = \"POST\" %}
        {%- endif -%}

        {%- if form_method != method -%}
            <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
        {%- endif -%}
    {% endif -%}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
    {% for child in form %}
        {{- form_row(child) -}}
    {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"
    {%- if disabled %} disabled=\"disabled\"{% endif -%}
    {%- if required %} required=\"required\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
    {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
    {{ block('attributes') }}
{%- endblock button_attributes -%}

{% block attributes -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}
", "form_div_layout.html.twig", "/home/yas/Documents/symfony/projet_fin_etude/vendor/symfony/twig-bridge/Resources/views/Form/form_div_layout.html.twig");
    }
}
