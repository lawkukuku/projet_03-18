<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d158e2b08ef8b91610718b3dafed6a761ce9f87179954f865edfd9e98a8e7bf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b89da67083c031985c6c1b626094b3e6b14d566f8e499c1819258c814f98b6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b89da67083c031985c6c1b626094b3e6b14d566f8e499c1819258c814f98b6e->enter($__internal_5b89da67083c031985c6c1b626094b3e6b14d566f8e499c1819258c814f98b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_e10b3bf11eab9d5949fb14bc715e7264d5a67111df01a4a74f41b18e8363d9ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e10b3bf11eab9d5949fb14bc715e7264d5a67111df01a4a74f41b18e8363d9ed->enter($__internal_e10b3bf11eab9d5949fb14bc715e7264d5a67111df01a4a74f41b18e8363d9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b89da67083c031985c6c1b626094b3e6b14d566f8e499c1819258c814f98b6e->leave($__internal_5b89da67083c031985c6c1b626094b3e6b14d566f8e499c1819258c814f98b6e_prof);

        
        $__internal_e10b3bf11eab9d5949fb14bc715e7264d5a67111df01a4a74f41b18e8363d9ed->leave($__internal_e10b3bf11eab9d5949fb14bc715e7264d5a67111df01a4a74f41b18e8363d9ed_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_201d9e7f2a4c9b5ccb59a55347b8dc1a9c0e4c1c7c975e2626d905f573fb3367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_201d9e7f2a4c9b5ccb59a55347b8dc1a9c0e4c1c7c975e2626d905f573fb3367->enter($__internal_201d9e7f2a4c9b5ccb59a55347b8dc1a9c0e4c1c7c975e2626d905f573fb3367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1b88fd29f70d9bf79aff1e71d7c05dda759b12deac3bed34ac08ce8de25dd6f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b88fd29f70d9bf79aff1e71d7c05dda759b12deac3bed34ac08ce8de25dd6f8->enter($__internal_1b88fd29f70d9bf79aff1e71d7c05dda759b12deac3bed34ac08ce8de25dd6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_1b88fd29f70d9bf79aff1e71d7c05dda759b12deac3bed34ac08ce8de25dd6f8->leave($__internal_1b88fd29f70d9bf79aff1e71d7c05dda759b12deac3bed34ac08ce8de25dd6f8_prof);

        
        $__internal_201d9e7f2a4c9b5ccb59a55347b8dc1a9c0e4c1c7c975e2626d905f573fb3367->leave($__internal_201d9e7f2a4c9b5ccb59a55347b8dc1a9c0e4c1c7c975e2626d905f573fb3367_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_306c0e369ff8d6030a730db0d4ec5c73e2d30cc06c0778514bebbb42d5213a1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_306c0e369ff8d6030a730db0d4ec5c73e2d30cc06c0778514bebbb42d5213a1a->enter($__internal_306c0e369ff8d6030a730db0d4ec5c73e2d30cc06c0778514bebbb42d5213a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8c4be94d81bed89ccc1230682fcbd06c92a748235befb149e512ce84fb13f3f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c4be94d81bed89ccc1230682fcbd06c92a748235befb149e512ce84fb13f3f4->enter($__internal_8c4be94d81bed89ccc1230682fcbd06c92a748235befb149e512ce84fb13f3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_8c4be94d81bed89ccc1230682fcbd06c92a748235befb149e512ce84fb13f3f4->leave($__internal_8c4be94d81bed89ccc1230682fcbd06c92a748235befb149e512ce84fb13f3f4_prof);

        
        $__internal_306c0e369ff8d6030a730db0d4ec5c73e2d30cc06c0778514bebbb42d5213a1a->leave($__internal_306c0e369ff8d6030a730db0d4ec5c73e2d30cc06c0778514bebbb42d5213a1a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_1867b52113f6b5326fa7596c7514ff201d6f978f07dc93b9237c860847f48c06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1867b52113f6b5326fa7596c7514ff201d6f978f07dc93b9237c860847f48c06->enter($__internal_1867b52113f6b5326fa7596c7514ff201d6f978f07dc93b9237c860847f48c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_66c5391bb76466b021ccfe57f966b35c25e84c10d8c535773abcc419fa082f33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66c5391bb76466b021ccfe57f966b35c25e84c10d8c535773abcc419fa082f33->enter($__internal_66c5391bb76466b021ccfe57f966b35c25e84c10d8c535773abcc419fa082f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_66c5391bb76466b021ccfe57f966b35c25e84c10d8c535773abcc419fa082f33->leave($__internal_66c5391bb76466b021ccfe57f966b35c25e84c10d8c535773abcc419fa082f33_prof);

        
        $__internal_1867b52113f6b5326fa7596c7514ff201d6f978f07dc93b9237c860847f48c06->leave($__internal_1867b52113f6b5326fa7596c7514ff201d6f978f07dc93b9237c860847f48c06_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/yas/Documents/symfony/projet_fin_etude/vendor/symfony/twig-bundle/Resources/views/Exception/exception_full.html.twig");
    }
}
