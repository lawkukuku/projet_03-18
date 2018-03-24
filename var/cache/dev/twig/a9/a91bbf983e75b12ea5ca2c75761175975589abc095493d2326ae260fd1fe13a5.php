<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_d7a3d06bcdba6a0373b5e8c136abe1ec591bf4540ea813d0eb65e386cc39ed96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c09492ec930481628042f22ad92915df3132c5d88ff4c302ded4cb6c71ccd909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c09492ec930481628042f22ad92915df3132c5d88ff4c302ded4cb6c71ccd909->enter($__internal_c09492ec930481628042f22ad92915df3132c5d88ff4c302ded4cb6c71ccd909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_0955e472048a3e102fef2a4f69d50006a7a774dd777e6c676e526ef9dd481fde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0955e472048a3e102fef2a4f69d50006a7a774dd777e6c676e526ef9dd481fde->enter($__internal_0955e472048a3e102fef2a4f69d50006a7a774dd777e6c676e526ef9dd481fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c09492ec930481628042f22ad92915df3132c5d88ff4c302ded4cb6c71ccd909->leave($__internal_c09492ec930481628042f22ad92915df3132c5d88ff4c302ded4cb6c71ccd909_prof);

        
        $__internal_0955e472048a3e102fef2a4f69d50006a7a774dd777e6c676e526ef9dd481fde->leave($__internal_0955e472048a3e102fef2a4f69d50006a7a774dd777e6c676e526ef9dd481fde_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_539189a494bc0e64d8e24ef67e95e58c97cf79bdeab68a8b34f95fe7ce964c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_539189a494bc0e64d8e24ef67e95e58c97cf79bdeab68a8b34f95fe7ce964c34->enter($__internal_539189a494bc0e64d8e24ef67e95e58c97cf79bdeab68a8b34f95fe7ce964c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b82895bfa4bb1b92905b7de197b1c2a33e3e66be7f82706564d76151a26bc132 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b82895bfa4bb1b92905b7de197b1c2a33e3e66be7f82706564d76151a26bc132->enter($__internal_b82895bfa4bb1b92905b7de197b1c2a33e3e66be7f82706564d76151a26bc132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_b82895bfa4bb1b92905b7de197b1c2a33e3e66be7f82706564d76151a26bc132->leave($__internal_b82895bfa4bb1b92905b7de197b1c2a33e3e66be7f82706564d76151a26bc132_prof);

        
        $__internal_539189a494bc0e64d8e24ef67e95e58c97cf79bdeab68a8b34f95fe7ce964c34->leave($__internal_539189a494bc0e64d8e24ef67e95e58c97cf79bdeab68a8b34f95fe7ce964c34_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_cce104246ddf51b3168bd7c80092aeca409e08ab2ae2ec3adce8cc254942a5c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cce104246ddf51b3168bd7c80092aeca409e08ab2ae2ec3adce8cc254942a5c8->enter($__internal_cce104246ddf51b3168bd7c80092aeca409e08ab2ae2ec3adce8cc254942a5c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3603031a4e7f3d5583df6f1b32d53c790e308c0ed79952b4de1021040c555898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3603031a4e7f3d5583df6f1b32d53c790e308c0ed79952b4de1021040c555898->enter($__internal_3603031a4e7f3d5583df6f1b32d53c790e308c0ed79952b4de1021040c555898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_3603031a4e7f3d5583df6f1b32d53c790e308c0ed79952b4de1021040c555898->leave($__internal_3603031a4e7f3d5583df6f1b32d53c790e308c0ed79952b4de1021040c555898_prof);

        
        $__internal_cce104246ddf51b3168bd7c80092aeca409e08ab2ae2ec3adce8cc254942a5c8->leave($__internal_cce104246ddf51b3168bd7c80092aeca409e08ab2ae2ec3adce8cc254942a5c8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/home/yas/Documents/symfony/projet_fin_etude/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/open.html.twig");
    }
}
