<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_dff87d1c4b86f36989703c98abf327382c9a6015e814891aac2cdd4eb94ab36a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4aa875259678bb2e14345234ecc6a0a87032112c5f2e52edb31b592f462154a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4aa875259678bb2e14345234ecc6a0a87032112c5f2e52edb31b592f462154a->enter($__internal_f4aa875259678bb2e14345234ecc6a0a87032112c5f2e52edb31b592f462154a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_b85587f3c0bc28972065abcfa835e104a155d76a6fdd3b07f577d5e1f671ef05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b85587f3c0bc28972065abcfa835e104a155d76a6fdd3b07f577d5e1f671ef05->enter($__internal_b85587f3c0bc28972065abcfa835e104a155d76a6fdd3b07f577d5e1f671ef05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4aa875259678bb2e14345234ecc6a0a87032112c5f2e52edb31b592f462154a->leave($__internal_f4aa875259678bb2e14345234ecc6a0a87032112c5f2e52edb31b592f462154a_prof);

        
        $__internal_b85587f3c0bc28972065abcfa835e104a155d76a6fdd3b07f577d5e1f671ef05->leave($__internal_b85587f3c0bc28972065abcfa835e104a155d76a6fdd3b07f577d5e1f671ef05_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_caa66b9846c54d565d86ccd4ce3e86423cb058969b9bf9cf79c5de973f5b8a96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caa66b9846c54d565d86ccd4ce3e86423cb058969b9bf9cf79c5de973f5b8a96->enter($__internal_caa66b9846c54d565d86ccd4ce3e86423cb058969b9bf9cf79c5de973f5b8a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9bf3f5e7cd1511f75213b51522048b0a147d372dee7636741c9853cf6325526b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bf3f5e7cd1511f75213b51522048b0a147d372dee7636741c9853cf6325526b->enter($__internal_9bf3f5e7cd1511f75213b51522048b0a147d372dee7636741c9853cf6325526b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_9bf3f5e7cd1511f75213b51522048b0a147d372dee7636741c9853cf6325526b->leave($__internal_9bf3f5e7cd1511f75213b51522048b0a147d372dee7636741c9853cf6325526b_prof);

        
        $__internal_caa66b9846c54d565d86ccd4ce3e86423cb058969b9bf9cf79c5de973f5b8a96->leave($__internal_caa66b9846c54d565d86ccd4ce3e86423cb058969b9bf9cf79c5de973f5b8a96_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/yas/Documents/symfony/projet_fin_etude/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
