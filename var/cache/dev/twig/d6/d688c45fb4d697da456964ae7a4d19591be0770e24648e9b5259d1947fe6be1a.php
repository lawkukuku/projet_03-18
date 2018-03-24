<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_0e607283b7a685241a2e647d7db11e3c36962efc4d879fa714a8c5956977f9e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a6dbcd4de33c83dc38331fad888626b462f8267df1aac42d5edc6851fac9858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a6dbcd4de33c83dc38331fad888626b462f8267df1aac42d5edc6851fac9858->enter($__internal_8a6dbcd4de33c83dc38331fad888626b462f8267df1aac42d5edc6851fac9858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c2b42d68fa49963856906dc4197e449c513c559fb20a82ec57f4fd2830c6762c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2b42d68fa49963856906dc4197e449c513c559fb20a82ec57f4fd2830c6762c->enter($__internal_c2b42d68fa49963856906dc4197e449c513c559fb20a82ec57f4fd2830c6762c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a6dbcd4de33c83dc38331fad888626b462f8267df1aac42d5edc6851fac9858->leave($__internal_8a6dbcd4de33c83dc38331fad888626b462f8267df1aac42d5edc6851fac9858_prof);

        
        $__internal_c2b42d68fa49963856906dc4197e449c513c559fb20a82ec57f4fd2830c6762c->leave($__internal_c2b42d68fa49963856906dc4197e449c513c559fb20a82ec57f4fd2830c6762c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aed571958f0e7d0d53bd6e0318225189c590a7d4f0091e1a7b7c45ab9920737b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aed571958f0e7d0d53bd6e0318225189c590a7d4f0091e1a7b7c45ab9920737b->enter($__internal_aed571958f0e7d0d53bd6e0318225189c590a7d4f0091e1a7b7c45ab9920737b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_703e202c021a986c0b3fcb306890ce8e71c1e255c8b9a1a30b576bf79c0e6571 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_703e202c021a986c0b3fcb306890ce8e71c1e255c8b9a1a30b576bf79c0e6571->enter($__internal_703e202c021a986c0b3fcb306890ce8e71c1e255c8b9a1a30b576bf79c0e6571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_703e202c021a986c0b3fcb306890ce8e71c1e255c8b9a1a30b576bf79c0e6571->leave($__internal_703e202c021a986c0b3fcb306890ce8e71c1e255c8b9a1a30b576bf79c0e6571_prof);

        
        $__internal_aed571958f0e7d0d53bd6e0318225189c590a7d4f0091e1a7b7c45ab9920737b->leave($__internal_aed571958f0e7d0d53bd6e0318225189c590a7d4f0091e1a7b7c45ab9920737b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_24be36bb83a0834c691d86fb478dc4697f27fad8e0579a1c0fb040fae034192b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24be36bb83a0834c691d86fb478dc4697f27fad8e0579a1c0fb040fae034192b->enter($__internal_24be36bb83a0834c691d86fb478dc4697f27fad8e0579a1c0fb040fae034192b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bea8e2a84e71e4c18ebf22776e75ecafcf550fbe91ef0cbfdd4c07e5f94a1c21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bea8e2a84e71e4c18ebf22776e75ecafcf550fbe91ef0cbfdd4c07e5f94a1c21->enter($__internal_bea8e2a84e71e4c18ebf22776e75ecafcf550fbe91ef0cbfdd4c07e5f94a1c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_bea8e2a84e71e4c18ebf22776e75ecafcf550fbe91ef0cbfdd4c07e5f94a1c21->leave($__internal_bea8e2a84e71e4c18ebf22776e75ecafcf550fbe91ef0cbfdd4c07e5f94a1c21_prof);

        
        $__internal_24be36bb83a0834c691d86fb478dc4697f27fad8e0579a1c0fb040fae034192b->leave($__internal_24be36bb83a0834c691d86fb478dc4697f27fad8e0579a1c0fb040fae034192b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d7240ee8d2654cce3f44b65037bfa01d09ae0f757f3a52fcba8233fd1c8f8524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7240ee8d2654cce3f44b65037bfa01d09ae0f757f3a52fcba8233fd1c8f8524->enter($__internal_d7240ee8d2654cce3f44b65037bfa01d09ae0f757f3a52fcba8233fd1c8f8524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_de894948da8fbdcc4a83e37a76dbf37d81939511e62d60cebda5e73bf851e417 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de894948da8fbdcc4a83e37a76dbf37d81939511e62d60cebda5e73bf851e417->enter($__internal_de894948da8fbdcc4a83e37a76dbf37d81939511e62d60cebda5e73bf851e417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_de894948da8fbdcc4a83e37a76dbf37d81939511e62d60cebda5e73bf851e417->leave($__internal_de894948da8fbdcc4a83e37a76dbf37d81939511e62d60cebda5e73bf851e417_prof);

        
        $__internal_d7240ee8d2654cce3f44b65037bfa01d09ae0f757f3a52fcba8233fd1c8f8524->leave($__internal_d7240ee8d2654cce3f44b65037bfa01d09ae0f757f3a52fcba8233fd1c8f8524_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/yas/Documents/symfony/projet_fin_etude/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
