<?php

/* index/index.html.twig */
class __TwigTemplate_ecb6dd3505743ec40a658cb0062b5fa8c529793a63b91f00c8cfac1ddd0728a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_811c96427d265352ab977831cefd0b68a42973a27bc260117cc5696cfc177e37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_811c96427d265352ab977831cefd0b68a42973a27bc260117cc5696cfc177e37->enter($__internal_811c96427d265352ab977831cefd0b68a42973a27bc260117cc5696cfc177e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $__internal_542b684cfed1de47dff49bb5ddba772a017a7edbb32c518c12d369988de1b028 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_542b684cfed1de47dff49bb5ddba772a017a7edbb32c518c12d369988de1b028->enter($__internal_542b684cfed1de47dff49bb5ddba772a017a7edbb32c518c12d369988de1b028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_811c96427d265352ab977831cefd0b68a42973a27bc260117cc5696cfc177e37->leave($__internal_811c96427d265352ab977831cefd0b68a42973a27bc260117cc5696cfc177e37_prof);

        
        $__internal_542b684cfed1de47dff49bb5ddba772a017a7edbb32c518c12d369988de1b028->leave($__internal_542b684cfed1de47dff49bb5ddba772a017a7edbb32c518c12d369988de1b028_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_94a5b4227ba05663bcfff062b45509b12476c5e1e8c6e4cee75288c78417f8b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94a5b4227ba05663bcfff062b45509b12476c5e1e8c6e4cee75288c78417f8b7->enter($__internal_94a5b4227ba05663bcfff062b45509b12476c5e1e8c6e4cee75288c78417f8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_44ee46a646411f74a09293c35fc891d2c08511dc4d100fd5a5812f272a3fa8ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44ee46a646411f74a09293c35fc891d2c08511dc4d100fd5a5812f272a3fa8ef->enter($__internal_44ee46a646411f74a09293c35fc891d2c08511dc4d100fd5a5812f272a3fa8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

    <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\">
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits_carousel"]) || array_key_exists("produits_carousel", $context) ? $context["produits_carousel"] : (function () { throw new Twig_Error_Runtime('Variable "produits_carousel" does not exist.', 13, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 14
            echo "            <div class=\"carousel-item ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "importance", array()) == 2)) {
                echo " active ";
            }
            echo "\">
                <img class=\"d-block w-100 img-fluid carousel-index\" src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "image", array()))), "html", null, true);
            echo "\" alt=\"First slide\">
                <div class=\"carousel-caption d-md-block carousel-index-produits\">
                    <h3>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "nom", array()), "html", null, true);
            echo "</h3>
                    <p class=\"carousel-p\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "description", array()), "html", null, true);
            echo "</p>
                    <a  href=\"/produit/";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "slug", array()), "html", null, true);
            echo "\" class=\"btn btn-outline-success\">Voir ce produit</a>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </div>
        <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>

    <div class=\"row index\">
        <div class=\"col-md-2 gauche\"></div>
        <div class=\"col-md-8\">
            <h2 class=\"categorie-index\">Categories</h2>
            <div class=\"card-group\">
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 39, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 40
            echo "                    <div class=\"card  card-index\">
                        <a href=\"/categorie/";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["categorie"], "slug", array()), "html", null, true);
            echo "\"><img class=\"card-img-top img-fluid\" style=\"height: 15vh;\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("images/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["categorie"], "nom", array())) . ".jpg")), "html", null, true);
            echo "\" alt=\"Card image cap\"></a>
                        <div class=\"card-block\">
                            <h4 class=\"card-title\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["categorie"], "nom", array()), "html", null, true);
            echo "</h4>
                            <p class=\"card-text\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["categorie"], "description", array()), "html", null, true);
            echo "</p>
                            <a href=\"/categorie/";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["categorie"], "slug", array()), "html", null, true);
            echo "\" class=\"btn btn-primary\">Entrer</a>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            </div>
        </div>
        <div class=\"col-md-2\"></div>
    </div>

";
        
        $__internal_44ee46a646411f74a09293c35fc891d2c08511dc4d100fd5a5812f272a3fa8ef->leave($__internal_44ee46a646411f74a09293c35fc891d2c08511dc4d100fd5a5812f272a3fa8ef_prof);

        
        $__internal_94a5b4227ba05663bcfff062b45509b12476c5e1e8c6e4cee75288c78417f8b7->leave($__internal_94a5b4227ba05663bcfff062b45509b12476c5e1e8c6e4cee75288c78417f8b7_prof);

    }

    public function getTemplateName()
    {
        return "index/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 49,  134 => 45,  130 => 44,  126 => 43,  119 => 41,  116 => 40,  112 => 39,  94 => 23,  84 => 19,  80 => 18,  76 => 17,  71 => 15,  64 => 14,  60 => 13,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}


    <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\">
            {% for produit in produits_carousel %}
            <div class=\"carousel-item {% if produit.importance == 2 %} active {% endif %}\">
                <img class=\"d-block w-100 img-fluid carousel-index\" src=\"{{ asset('images/' ~ produit.image) }}\" alt=\"First slide\">
                <div class=\"carousel-caption d-md-block carousel-index-produits\">
                    <h3>{{ produit.nom }}</h3>
                    <p class=\"carousel-p\">{{ produit.description }}</p>
                    <a  href=\"/produit/{{ produit.slug }}\" class=\"btn btn-outline-success\">Voir ce produit</a>
                </div>
            </div>
            {% endfor %}
        </div>
        <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>

    <div class=\"row index\">
        <div class=\"col-md-2 gauche\"></div>
        <div class=\"col-md-8\">
            <h2 class=\"categorie-index\">Categories</h2>
            <div class=\"card-group\">
                {% for categorie in categories %}
                    <div class=\"card  card-index\">
                        <a href=\"/categorie/{{ categorie.slug }}\"><img class=\"card-img-top img-fluid\" style=\"height: 15vh;\" src=\"{{ asset('images/' ~ categorie.nom ~ '.jpg') }}\" alt=\"Card image cap\"></a>
                        <div class=\"card-block\">
                            <h4 class=\"card-title\">{{ categorie.nom }}</h4>
                            <p class=\"card-text\">{{ categorie.description }}</p>
                            <a href=\"/categorie/{{ categorie.slug }}\" class=\"btn btn-primary\">Entrer</a>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
        <div class=\"col-md-2\"></div>
    </div>

{% endblock %}", "index/index.html.twig", "/home/yas/Documents/symfony/projet_fin_etude/templates/index/index.html.twig");
    }
}
