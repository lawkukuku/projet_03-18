<?php

/* produit/administration.html.twig */
class __TwigTemplate_c9347881c6d2c8ba756dd7935b99808359a58f9961cf779229cccfbd01fdadb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "produit/administration.html.twig", 1);
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
        $__internal_31e617b862cae6551643ec14b1f49d3161340b788e3a9d04746713bcb333e36a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e617b862cae6551643ec14b1f49d3161340b788e3a9d04746713bcb333e36a->enter($__internal_31e617b862cae6551643ec14b1f49d3161340b788e3a9d04746713bcb333e36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produit/administration.html.twig"));

        $__internal_01f15e2bd0a0c3a1b96b2b5da5b6bd15df473c6d84a833d8d68e7cd6736e2f19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01f15e2bd0a0c3a1b96b2b5da5b6bd15df473c6d84a833d8d68e7cd6736e2f19->enter($__internal_01f15e2bd0a0c3a1b96b2b5da5b6bd15df473c6d84a833d8d68e7cd6736e2f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produit/administration.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31e617b862cae6551643ec14b1f49d3161340b788e3a9d04746713bcb333e36a->leave($__internal_31e617b862cae6551643ec14b1f49d3161340b788e3a9d04746713bcb333e36a_prof);

        
        $__internal_01f15e2bd0a0c3a1b96b2b5da5b6bd15df473c6d84a833d8d68e7cd6736e2f19->leave($__internal_01f15e2bd0a0c3a1b96b2b5da5b6bd15df473c6d84a833d8d68e7cd6736e2f19_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8af6cd75f53643f55319d3a39be79c7bcb708b29c3e64fa5701d83d624ff4a51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8af6cd75f53643f55319d3a39be79c7bcb708b29c3e64fa5701d83d624ff4a51->enter($__internal_8af6cd75f53643f55319d3a39be79c7bcb708b29c3e64fa5701d83d624ff4a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_689ee330e9f32e1607dfd850fc4ee030c43a1229061667ec65377922317e1a76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_689ee330e9f32e1607dfd850fc4ee030c43a1229061667ec65377922317e1a76->enter($__internal_689ee330e9f32e1607dfd850fc4ee030c43a1229061667ec65377922317e1a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
        <div class=\"col-md-1\"></div>
        <div class=\"col-md-10 bg-faded\">
            <table id=\"example\" class=\"table table-striped table-bordered\" style=\"background-color: white\" cellspacing=\"0\" width=\"100%\">
                <thead>
                <tr>
                    <th>Image</th>
                    <th>Nom</th>
                    <th>Slug</th>
                    <th>Prix</th>
                    <th>Quantite</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Image</th>
                    <th>Nom</th>
                    <th>Slug</th>
                    <th>Prix</th>
                    <th>Quantite</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
                </tfoot>
                <tbody>
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 32, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 33
            echo "                <tr>
                    <td><img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "image", array()))), "html", null, true);
            echo "\" style=\"max-height: 100px\"/></td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "nom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "slug", array()), "html", null, true);
            echo "</td>
                    <td>\$";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "prix", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "quantite", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "description", array()), "html", null, true);
            echo "</td>
                    <td><a href=\"/administration/modifier/";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "slug", array()), "html", null, true);
            echo "\" class=\"btn btn-primary\">Modifier</a><br/><a href=\"/administration/suppr/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "slug", array()), "html", null, true);
            echo "\" class=\"btn btn-danger\">Supprimer</a></td>
                </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                </tbody>
            </table>
        </div>
        <div class=\"col-md-1\"></div>
    </div>

";
        
        $__internal_689ee330e9f32e1607dfd850fc4ee030c43a1229061667ec65377922317e1a76->leave($__internal_689ee330e9f32e1607dfd850fc4ee030c43a1229061667ec65377922317e1a76_prof);

        
        $__internal_8af6cd75f53643f55319d3a39be79c7bcb708b29c3e64fa5701d83d624ff4a51->leave($__internal_8af6cd75f53643f55319d3a39be79c7bcb708b29c3e64fa5701d83d624ff4a51_prof);

    }

    public function getTemplateName()
    {
        return "produit/administration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 43,  110 => 40,  106 => 39,  102 => 38,  98 => 37,  94 => 36,  90 => 35,  86 => 34,  83 => 33,  79 => 32,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}

    <div class=\"row\">
        <div class=\"col-md-1\"></div>
        <div class=\"col-md-10 bg-faded\">
            <table id=\"example\" class=\"table table-striped table-bordered\" style=\"background-color: white\" cellspacing=\"0\" width=\"100%\">
                <thead>
                <tr>
                    <th>Image</th>
                    <th>Nom</th>
                    <th>Slug</th>
                    <th>Prix</th>
                    <th>Quantite</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Image</th>
                    <th>Nom</th>
                    <th>Slug</th>
                    <th>Prix</th>
                    <th>Quantite</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
                </tfoot>
                <tbody>
                {% for produit in produits %}
                <tr>
                    <td><img src=\"{{ asset('images/' ~ produit.image) }}\" style=\"max-height: 100px\"/></td>
                    <td>{{ produit.nom }}</td>
                    <td>{{ produit.slug }}</td>
                    <td>\${{ produit.prix }}</td>
                    <td>{{ produit.quantite }}</td>
                    <td>{{ produit.description }}</td>
                    <td><a href=\"/administration/modifier/{{ produit.slug }}\" class=\"btn btn-primary\">Modifier</a><br/><a href=\"/administration/suppr/{{ produit.slug }}\" class=\"btn btn-danger\">Supprimer</a></td>
                </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
        <div class=\"col-md-1\"></div>
    </div>

{% endblock %}", "produit/administration.html.twig", "/home/yas/Documents/symfony/projet_fin_etude/templates/produit/administration.html.twig");
    }
}
