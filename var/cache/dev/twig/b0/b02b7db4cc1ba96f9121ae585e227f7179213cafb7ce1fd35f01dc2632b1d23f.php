<?php

/* base.html.twig */
class __TwigTemplate_02df2f51bca6ed0e6368c515b705c5790cfcb4c8bae2c318787744ed5e4c51d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1fe6d6805f01261b6ff9c631ddeeaa2103baab78f0201368004088a8cb40f5e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fe6d6805f01261b6ff9c631ddeeaa2103baab78f0201368004088a8cb40f5e1->enter($__internal_1fe6d6805f01261b6ff9c631ddeeaa2103baab78f0201368004088a8cb40f5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e6622618af0da764a5794856e555efd3f379a04f882fcc7af935b7d3a2faa3ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6622618af0da764a5794856e555efd3f379a04f882fcc7af935b7d3a2faa3ed->enter($__internal_e6622618af0da764a5794856e555efd3f379a04f882fcc7af935b7d3a2faa3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "</head>
<body class=\"bg\">
<nav class=\"navbar navbar-toggleable-md navbar-light bg-faded \">
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
        <a class=\"navbar-brand\" href=\"/index.php\">Place d'audio</a>
        <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"/index.php\">Index<span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/panier\">Panier</a>
            </li>
            ";
        // line 24
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 25
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/administration\">administration</a>
                </li>
            ";
        }
        // line 29
        echo "            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/forum\">forum</a>
            </li>
            ";
        // line 32
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 33
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/parametre\">parametre</a>
                </li>
            ";
        }
        // line 37
        echo "        </ul>

        ";
        // line 39
        if (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 39, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "_route"), "method") != "login") && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 39, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "_route"), "method") != "registration"))) {
            // line 40
            echo "        <div class=\"navbar-collapse justify-content-center\" id=\"collapsingNavbar\">


            ";
            // line 43
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["recherche"]) || array_key_exists("recherche", $context) ? $context["recherche"] : (function () { throw new Twig_Error_Runtime('Variable "recherche" does not exist.', 43, $this->getSourceContext()); })()), 'form_start', array("attr" => array("class" => "form-inline my-2 my-lg-0")));
            echo "
            ";
            // line 44
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["recherche"]) || array_key_exists("recherche", $context) ? $context["recherche"] : (function () { throw new Twig_Error_Runtime('Variable "recherche" does not exist.', 44, $this->getSourceContext()); })()), "recherche", array()), 'widget', array("attr" => array("class" => "form-control mr-sm-2", "placeholder" => "Rechercher")));
            echo "
            <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Valider</button>
            ";
            // line 46
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["recherche"]) || array_key_exists("recherche", $context) ? $context["recherche"] : (function () { throw new Twig_Error_Runtime('Variable "recherche" does not exist.', 46, $this->getSourceContext()); })()), 'form_end');
            echo "
        </div>
        ";
        }
        // line 49
        echo "
        ";
        // line 50
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 51
            echo "            ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 51, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "_route"), "method") == "administration")) {
                // line 52
                echo "                <a  class=\"btn btn-primary\" href=\"/administation/ajout_produit\">Ajouter un produit</a>
            ";
            }
            // line 54
            echo "            ";
            if (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 54, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "_route"), "method") == "forum") || (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 54, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "_route"), "method") == "consulter_sujet"))) {
                // line 55
                echo "                <a  class=\"btn btn-primary\" href=\"/forum/ajouter\">Ajouter un sujet</a>
            ";
            }
            // line 57
            echo "            <a class=\"btn btn-warning\" href=\"/logout\">Deconnection</a>


        ";
        } else {
            // line 61
            echo "            ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 61, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "_route"), "method") != "login")) {
                // line 62
                echo "                <a class=\"btn btn-success my-2 my-lg-0\" href=\"/login\">Connection</a>
            ";
            }
            // line 64
            echo "            ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 64, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "_route"), "method") != "registration")) {
                // line 65
                echo "                <a class=\"btn btn-primary my-2 my-lg-0\" href=\"/register\">Inscription</a>
            ";
            }
            // line 67
            echo "        ";
        }
        // line 68
        echo "    </div>
</nav>
";
        // line 70
        $this->displayBlock('body', $context, $blocks);
        // line 73
        $this->displayBlock('javascripts', $context, $blocks);
        // line 86
        echo "</body>
</html>
";
        
        $__internal_1fe6d6805f01261b6ff9c631ddeeaa2103baab78f0201368004088a8cb40f5e1->leave($__internal_1fe6d6805f01261b6ff9c631ddeeaa2103baab78f0201368004088a8cb40f5e1_prof);

        
        $__internal_e6622618af0da764a5794856e555efd3f379a04f882fcc7af935b7d3a2faa3ed->leave($__internal_e6622618af0da764a5794856e555efd3f379a04f882fcc7af935b7d3a2faa3ed_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cbcc7c4c3d1b4d4adbe4d4cb072da55bc9b04cc31f804722006dfc60812f16c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbcc7c4c3d1b4d4adbe4d4cb072da55bc9b04cc31f804722006dfc60812f16c6->enter($__internal_cbcc7c4c3d1b4d4adbe4d4cb072da55bc9b04cc31f804722006dfc60812f16c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3e39fc692d938aea74f04abff27bcb6c062410e13fbf369252ff9ec13f7f7876 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e39fc692d938aea74f04abff27bcb6c062410e13fbf369252ff9ec13f7f7876->enter($__internal_3e39fc692d938aea74f04abff27bcb6c062410e13fbf369252ff9ec13f7f7876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "bienvenue";
        
        $__internal_3e39fc692d938aea74f04abff27bcb6c062410e13fbf369252ff9ec13f7f7876->leave($__internal_3e39fc692d938aea74f04abff27bcb6c062410e13fbf369252ff9ec13f7f7876_prof);

        
        $__internal_cbcc7c4c3d1b4d4adbe4d4cb072da55bc9b04cc31f804722006dfc60812f16c6->leave($__internal_cbcc7c4c3d1b4d4adbe4d4cb072da55bc9b04cc31f804722006dfc60812f16c6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e9e2e409ddc080e50ecbfe7823e0e97c513856c4726307db465ce15a5b7df67b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9e2e409ddc080e50ecbfe7823e0e97c513856c4726307db465ce15a5b7df67b->enter($__internal_e9e2e409ddc080e50ecbfe7823e0e97c513856c4726307db465ce15a5b7df67b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_32c26756f6f5788e00e634a1acc5a811e378898f696526308c6c188233a60a3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32c26756f6f5788e00e634a1acc5a811e378898f696526308c6c188233a60a3b->enter($__internal_32c26756f6f5788e00e634a1acc5a811e378898f696526308c6c188233a60a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/css/app.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_32c26756f6f5788e00e634a1acc5a811e378898f696526308c6c188233a60a3b->leave($__internal_32c26756f6f5788e00e634a1acc5a811e378898f696526308c6c188233a60a3b_prof);

        
        $__internal_e9e2e409ddc080e50ecbfe7823e0e97c513856c4726307db465ce15a5b7df67b->leave($__internal_e9e2e409ddc080e50ecbfe7823e0e97c513856c4726307db465ce15a5b7df67b_prof);

    }

    // line 70
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b6a361d209bf872363025c4e2cd54abc8f9f12fbad3ddb6820a9a6271ece17b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b6a361d209bf872363025c4e2cd54abc8f9f12fbad3ddb6820a9a6271ece17b->enter($__internal_1b6a361d209bf872363025c4e2cd54abc8f9f12fbad3ddb6820a9a6271ece17b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_81da44e4857875f8ed3cf226127f3433c388237c6249f6a07576554434a7367f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81da44e4857875f8ed3cf226127f3433c388237c6249f6a07576554434a7367f->enter($__internal_81da44e4857875f8ed3cf226127f3433c388237c6249f6a07576554434a7367f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 71
        echo "
";
        
        $__internal_81da44e4857875f8ed3cf226127f3433c388237c6249f6a07576554434a7367f->leave($__internal_81da44e4857875f8ed3cf226127f3433c388237c6249f6a07576554434a7367f_prof);

        
        $__internal_1b6a361d209bf872363025c4e2cd54abc8f9f12fbad3ddb6820a9a6271ece17b->leave($__internal_1b6a361d209bf872363025c4e2cd54abc8f9f12fbad3ddb6820a9a6271ece17b_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a138e60300da8bfc7dfa8321d9c2d8b375079c435666c2e44210cbef17a9c8ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a138e60300da8bfc7dfa8321d9c2d8b375079c435666c2e44210cbef17a9c8ad->enter($__internal_a138e60300da8bfc7dfa8321d9c2d8b375079c435666c2e44210cbef17a9c8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_163668b22770100a1f6854b41039837fbfffab101b90f43afb68c5f7615b1aeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_163668b22770100a1f6854b41039837fbfffab101b90f43afb68c5f7615b1aeb->enter($__internal_163668b22770100a1f6854b41039837fbfffab101b90f43afb68c5f7615b1aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.12.4.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/app.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function() {
            \$('#example').DataTable();
        } );
    </script>
";
        
        $__internal_163668b22770100a1f6854b41039837fbfffab101b90f43afb68c5f7615b1aeb->leave($__internal_163668b22770100a1f6854b41039837fbfffab101b90f43afb68c5f7615b1aeb_prof);

        
        $__internal_a138e60300da8bfc7dfa8321d9c2d8b375079c435666c2e44210cbef17a9c8ad->leave($__internal_a138e60300da8bfc7dfa8321d9c2d8b375079c435666c2e44210cbef17a9c8ad_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 79,  249 => 77,  245 => 76,  241 => 75,  236 => 74,  227 => 73,  216 => 71,  207 => 70,  194 => 7,  185 => 6,  167 => 5,  155 => 86,  153 => 73,  151 => 70,  147 => 68,  144 => 67,  140 => 65,  137 => 64,  133 => 62,  130 => 61,  124 => 57,  120 => 55,  117 => 54,  113 => 52,  110 => 51,  108 => 50,  105 => 49,  99 => 46,  94 => 44,  90 => 43,  85 => 40,  83 => 39,  79 => 37,  73 => 33,  71 => 32,  66 => 29,  60 => 25,  58 => 24,  41 => 9,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}bienvenue{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('build/css/app.css') }}\">
    {% endblock %}
</head>
<body class=\"bg\">
<nav class=\"navbar navbar-toggleable-md navbar-light bg-faded \">
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
        <a class=\"navbar-brand\" href=\"/index.php\">Place d'audio</a>
        <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"/index.php\">Index<span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/panier\">Panier</a>
            </li>
            {% if is_granted('ROLE_ADMIN') %}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/administration\">administration</a>
                </li>
            {% endif %}
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/forum\">forum</a>
            </li>
            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/parametre\">parametre</a>
                </li>
            {% endif %}
        </ul>

        {% if app.request.get('_route') != 'login' and app.request.get('_route') != 'registration' %}
        <div class=\"navbar-collapse justify-content-center\" id=\"collapsingNavbar\">


            {{ form_start(recherche, {'attr': {'class': 'form-inline my-2 my-lg-0'}}) }}
            {{ form_widget(recherche.recherche, {'attr': {'class': 'form-control mr-sm-2', 'placeholder': 'Rechercher'}}) }}
            <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Valider</button>
            {{ form_end(recherche) }}
        </div>
        {% endif %}

        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            {% if app.request.get('_route') == 'administration' %}
                <a  class=\"btn btn-primary\" href=\"/administation/ajout_produit\">Ajouter un produit</a>
            {% endif %}
            {% if app.request.get('_route') == 'forum' or app.request.get('_route') == 'consulter_sujet' %}
                <a  class=\"btn btn-primary\" href=\"/forum/ajouter\">Ajouter un sujet</a>
            {% endif %}
            <a class=\"btn btn-warning\" href=\"/logout\">Deconnection</a>


        {% else %}
            {% if app.request.get('_route') != 'login' %}
                <a class=\"btn btn-success my-2 my-lg-0\" href=\"/login\">Connection</a>
            {% endif %}
            {% if app.request.get('_route') != 'registration' %}
                <a class=\"btn btn-primary my-2 my-lg-0\" href=\"/register\">Inscription</a>
            {% endif %}
        {% endif %}
    </div>
</nav>
{% block body %}

{% endblock %}
{% block javascripts %}
    <script src=\"{{ asset('js/jquery-1.12.4.js') }}\"></script>
    <script src=\"{{ asset('js/popper.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('js/jquery.dataTables.min.js') }}\"></script>

    <script src=\"{{ asset('build/js/app.js') }}\"></script>
    <script>
        \$(document).ready(function() {
            \$('#example').DataTable();
        } );
    </script>
{% endblock %}
</body>
</html>
", "base.html.twig", "/home/yas/Documents/symfony/projet_fin_etude/templates/base.html.twig");
    }
}
