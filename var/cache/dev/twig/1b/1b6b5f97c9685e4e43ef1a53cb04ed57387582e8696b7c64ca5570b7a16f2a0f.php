<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_e3765f28058efdfe543d71669643f4f48e496b7ed9907991c5002b63598cd51d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0ff37bce3886546663325686d592123dde3b900bf2a70d26e694296afc41f79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0ff37bce3886546663325686d592123dde3b900bf2a70d26e694296afc41f79->enter($__internal_f0ff37bce3886546663325686d592123dde3b900bf2a70d26e694296afc41f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_319bbc93139fae6a26843364ad2da30ae3873b868b4f7755a303799a805d64a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_319bbc93139fae6a26843364ad2da30ae3873b868b4f7755a303799a805d64a6->enter($__internal_319bbc93139fae6a26843364ad2da30ae3873b868b4f7755a303799a805d64a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_f0ff37bce3886546663325686d592123dde3b900bf2a70d26e694296afc41f79->leave($__internal_f0ff37bce3886546663325686d592123dde3b900bf2a70d26e694296afc41f79_prof);

        
        $__internal_319bbc93139fae6a26843364ad2da30ae3873b868b4f7755a303799a805d64a6->leave($__internal_319bbc93139fae6a26843364ad2da30ae3873b868b4f7755a303799a805d64a6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/home/yas/Documents/symfony/projet_fin_etude/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/header.html.twig");
    }
}
