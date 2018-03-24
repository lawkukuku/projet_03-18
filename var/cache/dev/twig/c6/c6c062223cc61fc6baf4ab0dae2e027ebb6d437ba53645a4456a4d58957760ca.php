<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_762369728d99e6101d6afd8a4b0a1a1eadf795624c13a9da8b8332e84fda32fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_bc8509ee8c45d849762b3471bd45802d8437705c589b34b2b636c1c25eebadc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc8509ee8c45d849762b3471bd45802d8437705c589b34b2b636c1c25eebadc4->enter($__internal_bc8509ee8c45d849762b3471bd45802d8437705c589b34b2b636c1c25eebadc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f3b48fd413db61e924ad0a42f9b3d81bec4bcfa0713b6c5ac5bb19a743a91a8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3b48fd413db61e924ad0a42f9b3d81bec4bcfa0713b6c5ac5bb19a743a91a8d->enter($__internal_f3b48fd413db61e924ad0a42f9b3d81bec4bcfa0713b6c5ac5bb19a743a91a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc8509ee8c45d849762b3471bd45802d8437705c589b34b2b636c1c25eebadc4->leave($__internal_bc8509ee8c45d849762b3471bd45802d8437705c589b34b2b636c1c25eebadc4_prof);

        
        $__internal_f3b48fd413db61e924ad0a42f9b3d81bec4bcfa0713b6c5ac5bb19a743a91a8d->leave($__internal_f3b48fd413db61e924ad0a42f9b3d81bec4bcfa0713b6c5ac5bb19a743a91a8d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_62ff5a8e513982d04d330c2ea259fcf9331f205854902a683efce09616768e65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62ff5a8e513982d04d330c2ea259fcf9331f205854902a683efce09616768e65->enter($__internal_62ff5a8e513982d04d330c2ea259fcf9331f205854902a683efce09616768e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5ab84ac2a0ee0234bc8434be3d056fcfd63aa7ebd4e4ae49f56183f1d15eaa3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ab84ac2a0ee0234bc8434be3d056fcfd63aa7ebd4e4ae49f56183f1d15eaa3c->enter($__internal_5ab84ac2a0ee0234bc8434be3d056fcfd63aa7ebd4e4ae49f56183f1d15eaa3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5ab84ac2a0ee0234bc8434be3d056fcfd63aa7ebd4e4ae49f56183f1d15eaa3c->leave($__internal_5ab84ac2a0ee0234bc8434be3d056fcfd63aa7ebd4e4ae49f56183f1d15eaa3c_prof);

        
        $__internal_62ff5a8e513982d04d330c2ea259fcf9331f205854902a683efce09616768e65->leave($__internal_62ff5a8e513982d04d330c2ea259fcf9331f205854902a683efce09616768e65_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7ce2fcfa8b5030f5d7f7cff2610d7a786ae6ec0ee6bd2111d3802e67b8bf7e5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ce2fcfa8b5030f5d7f7cff2610d7a786ae6ec0ee6bd2111d3802e67b8bf7e5f->enter($__internal_7ce2fcfa8b5030f5d7f7cff2610d7a786ae6ec0ee6bd2111d3802e67b8bf7e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c2a340e076460f0ae6881deae115bceec83c8776a018126097f2cba43c0723dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2a340e076460f0ae6881deae115bceec83c8776a018126097f2cba43c0723dc->enter($__internal_c2a340e076460f0ae6881deae115bceec83c8776a018126097f2cba43c0723dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c2a340e076460f0ae6881deae115bceec83c8776a018126097f2cba43c0723dc->leave($__internal_c2a340e076460f0ae6881deae115bceec83c8776a018126097f2cba43c0723dc_prof);

        
        $__internal_7ce2fcfa8b5030f5d7f7cff2610d7a786ae6ec0ee6bd2111d3802e67b8bf7e5f->leave($__internal_7ce2fcfa8b5030f5d7f7cff2610d7a786ae6ec0ee6bd2111d3802e67b8bf7e5f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_395b8786a910acf6bd15936eb1538767476b3ddcf1047f1118d9ac4e58952473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_395b8786a910acf6bd15936eb1538767476b3ddcf1047f1118d9ac4e58952473->enter($__internal_395b8786a910acf6bd15936eb1538767476b3ddcf1047f1118d9ac4e58952473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8340f41f4eede276594bc37817efbc610d9585a14d20b03f27ae7c3f0f38d7d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8340f41f4eede276594bc37817efbc610d9585a14d20b03f27ae7c3f0f38d7d7->enter($__internal_8340f41f4eede276594bc37817efbc610d9585a14d20b03f27ae7c3f0f38d7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_8340f41f4eede276594bc37817efbc610d9585a14d20b03f27ae7c3f0f38d7d7->leave($__internal_8340f41f4eede276594bc37817efbc610d9585a14d20b03f27ae7c3f0f38d7d7_prof);

        
        $__internal_395b8786a910acf6bd15936eb1538767476b3ddcf1047f1118d9ac4e58952473->leave($__internal_395b8786a910acf6bd15936eb1538767476b3ddcf1047f1118d9ac4e58952473_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/yas/Documents/symfony/projet_fin_etude/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
