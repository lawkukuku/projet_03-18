<?php

/* panier/panier.html.twig */
class __TwigTemplate_9150c299dc92721544d7f1623e74c76c7aa08a1860b275ad840f71c5d8708cac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "panier/panier.html.twig", 1);
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
        $__internal_301868e2f9aeae12cfb2197564c06dc259a77e77328e03c7f709da8ddd7c9645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_301868e2f9aeae12cfb2197564c06dc259a77e77328e03c7f709da8ddd7c9645->enter($__internal_301868e2f9aeae12cfb2197564c06dc259a77e77328e03c7f709da8ddd7c9645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "panier/panier.html.twig"));

        $__internal_c4cd29a221a91938315027249bc26debca01ed53e742b76b872ab3fd34300d98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4cd29a221a91938315027249bc26debca01ed53e742b76b872ab3fd34300d98->enter($__internal_c4cd29a221a91938315027249bc26debca01ed53e742b76b872ab3fd34300d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "panier/panier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_301868e2f9aeae12cfb2197564c06dc259a77e77328e03c7f709da8ddd7c9645->leave($__internal_301868e2f9aeae12cfb2197564c06dc259a77e77328e03c7f709da8ddd7c9645_prof);

        
        $__internal_c4cd29a221a91938315027249bc26debca01ed53e742b76b872ab3fd34300d98->leave($__internal_c4cd29a221a91938315027249bc26debca01ed53e742b76b872ab3fd34300d98_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0a423eba71221b9827bf34398334751e4507dd43189f04cba2b0fd837ae26d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0a423eba71221b9827bf34398334751e4507dd43189f04cba2b0fd837ae26d1->enter($__internal_c0a423eba71221b9827bf34398334751e4507dd43189f04cba2b0fd837ae26d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dab46f3407965c7aa9c8080f1366e1b119558d1d7d89cffd471f1bc249dc41d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dab46f3407965c7aa9c8080f1366e1b119558d1d7d89cffd471f1bc249dc41d2->enter($__internal_dab46f3407965c7aa9c8080f1366e1b119558d1d7d89cffd471f1bc249dc41d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

    <h1 class=\"produit-h1\">Panier</h1>
    <div class=\"row\">
        <div class=\"col-md-2\"></div>
        <div class=\"col-md-8 bg-faded\">
            <div class=\"row\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 11, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 12
            echo "                    <div class=\"col-lg-4 col-md-6 col-sm-6 card-index\">
                        <div class=\"card\">
                            <a href=\"/produit/";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "produit", array()), "slug", array()), "html", null, true);
            echo "\"><img style=\"max-width: 100%\" href=\"/produit/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "produit", array()), "slug", array()), "html", null, true);
            echo "\" class=\"card-img-top\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "produit", array()), "image", array()))), "html", null, true);
            echo "\" alt=\"Card image cap\"></a>
                            <div class=\"card-block\">
                                <h4 class=\"card-title\" style=\"text-align: center\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "produit", array()), "nom", array()), "html", null, true);
            echo "</h4>
                                <br/>
                                ";
            // line 18
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "quantite", array()), 'form_start');
            echo "
                                ";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "quantite", array()), 'errors');
            echo "

                                ";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "quantite", array()), "quantite", array()), 'label', array("label_attr" => array("class" => "produit-h3-normal"), "label" => "Quantite : "));
            echo "
                                <span style=\"color: red\">";
            // line 22
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "quantite", array()), "quantite", array()), 'errors');
            echo "</span>
                                ";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "quantite", array()), "quantite", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                <br/>
                                <button class=\"form-control\" type=\"submit\">Actualiser</button>
                                ";
            // line 26
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "quantite", array()), 'form_end');
            echo "
                                ";
            // line 27
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "suppr", array()), 'form_start');
            echo "
                                ";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "suppr", array()), 'errors');
            echo "
                                <button class=\"form-control badge-warning\" style=\"color: white\" type=\"submit\">supprimer</button>
                                ";
            // line 30
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "suppr", array()), 'form_end');
            echo "
                                <span class=\"produit-h3-normal\" style=\"margin-left: 30%\">Prix : </span><span class=\"produit-span\">\$";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "produit", array()), "prix", array()), "html", null, true);
            echo "</span>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            </div>
            ";
        // line 37
        if (((isset($context["ver"]) || array_key_exists("ver", $context) ? $context["ver"] : (function () { throw new Twig_Error_Runtime('Variable "ver" does not exist.', 37, $this->getSourceContext()); })()) == true)) {
            // line 38
            echo "            ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 38, $this->getSourceContext()); })()), 'form_start');
            echo "
            ";
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 39, $this->getSourceContext()); })()), 'errors');
            echo "
                <input type=\"hidden\" name=\"panier\" value=\"/panier\" />
            <button class=\"form-control badge-success\" style=\"text-align: center; color: white\" type=\"submit\">Acheter</button>
            ";
            // line 42
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 42, $this->getSourceContext()); })()), 'form_end');
            echo "
                ";
        }
        // line 44
        echo "        </div>
        <div class=\"col-md-2\"></div>
    </div>

";
        
        $__internal_dab46f3407965c7aa9c8080f1366e1b119558d1d7d89cffd471f1bc249dc41d2->leave($__internal_dab46f3407965c7aa9c8080f1366e1b119558d1d7d89cffd471f1bc249dc41d2_prof);

        
        $__internal_c0a423eba71221b9827bf34398334751e4507dd43189f04cba2b0fd837ae26d1->leave($__internal_c0a423eba71221b9827bf34398334751e4507dd43189f04cba2b0fd837ae26d1_prof);

    }

    public function getTemplateName()
    {
        return "panier/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 44,  147 => 42,  141 => 39,  136 => 38,  134 => 37,  131 => 36,  120 => 31,  116 => 30,  111 => 28,  107 => 27,  103 => 26,  97 => 23,  93 => 22,  89 => 21,  84 => 19,  80 => 18,  75 => 16,  66 => 14,  62 => 12,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}


    <h1 class=\"produit-h1\">Panier</h1>
    <div class=\"row\">
        <div class=\"col-md-2\"></div>
        <div class=\"col-md-8 bg-faded\">
            <div class=\"row\">
                {% for produit in produits %}
                    <div class=\"col-lg-4 col-md-6 col-sm-6 card-index\">
                        <div class=\"card\">
                            <a href=\"/produit/{{ produit.produit.slug }}\"><img style=\"max-width: 100%\" href=\"/produit/{{ produit.produit.slug }}\" class=\"card-img-top\" src=\"{{ asset('images/' ~ produit.produit.image) }}\" alt=\"Card image cap\"></a>
                            <div class=\"card-block\">
                                <h4 class=\"card-title\" style=\"text-align: center\">{{ produit.produit.nom }}</h4>
                                <br/>
                                {{ form_start(produit.quantite) }}
                                {{ form_errors(produit.quantite) }}

                                {{ form_label(produit.quantite.quantite, \"Quantite : \", {'label_attr': {'class': 'produit-h3-normal'}}) }}
                                <span style=\"color: red\">{{ form_errors(produit.quantite.quantite) }}</span>
                                {{ form_widget(produit.quantite.quantite, {'attr': {'class': 'form-control'}}) }}
                                <br/>
                                <button class=\"form-control\" type=\"submit\">Actualiser</button>
                                {{ form_end(produit.quantite) }}
                                {{ form_start(produit.suppr) }}
                                {{ form_errors(produit.suppr) }}
                                <button class=\"form-control badge-warning\" style=\"color: white\" type=\"submit\">supprimer</button>
                                {{ form_end(produit.suppr) }}
                                <span class=\"produit-h3-normal\" style=\"margin-left: 30%\">Prix : </span><span class=\"produit-span\">\${{ produit.produit.prix }}</span>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
            {% if ver == true %}
            {{ form_start(facture) }}
            {{ form_errors(facture) }}
                <input type=\"hidden\" name=\"panier\" value=\"/panier\" />
            <button class=\"form-control badge-success\" style=\"text-align: center; color: white\" type=\"submit\">Acheter</button>
            {{ form_end(facture) }}
                {% endif %}
        </div>
        <div class=\"col-md-2\"></div>
    </div>

{% endblock %}", "panier/panier.html.twig", "/home/yas/Documents/symfony/projet_fin_etude/templates/panier/panier.html.twig");
    }
}
