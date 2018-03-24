<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_219a3942dfcbf1129f8e80bceef0559f6f3487dc103eed07dc3bb6cede39db50 extends Twig_Template
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
        $__internal_dcce71bc7788239546eef823a3649d1a4fc74cfe33be9403a11a99ec2c4231e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcce71bc7788239546eef823a3649d1a4fc74cfe33be9403a11a99ec2c4231e9->enter($__internal_dcce71bc7788239546eef823a3649d1a4fc74cfe33be9403a11a99ec2c4231e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_b3aeeeff9fd785771d6bf535c4bbe0f1d6a5d22399365686d80b380609a7bcf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3aeeeff9fd785771d6bf535c4bbe0f1d6a5d22399365686d80b380609a7bcf3->enter($__internal_b3aeeeff9fd785771d6bf535c4bbe0f1d6a5d22399365686d80b380609a7bcf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_dcce71bc7788239546eef823a3649d1a4fc74cfe33be9403a11a99ec2c4231e9->leave($__internal_dcce71bc7788239546eef823a3649d1a4fc74cfe33be9403a11a99ec2c4231e9_prof);

        
        $__internal_b3aeeeff9fd785771d6bf535c4bbe0f1d6a5d22399365686d80b380609a7bcf3->leave($__internal_b3aeeeff9fd785771d6bf535c4bbe0f1d6a5d22399365686d80b380609a7bcf3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "/home/yas/Documents/symfony/projet_fin_etude/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.css.twig");
    }
}
