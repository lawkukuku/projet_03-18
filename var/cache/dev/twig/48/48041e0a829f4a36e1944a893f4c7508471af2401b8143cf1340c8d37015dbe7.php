<?php

/* categorie/categorie.html.twig */
class __TwigTemplate_5ccdb819270f43d1adc87e625f78460d7eb718b7db0df03e592df0c0b7784f9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "categorie/categorie.html.twig", 1);
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
        $__internal_caf5371ee0df5510d03c00478511921699736254d9f02174d634774844714d66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caf5371ee0df5510d03c00478511921699736254d9f02174d634774844714d66->enter($__internal_caf5371ee0df5510d03c00478511921699736254d9f02174d634774844714d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categorie/categorie.html.twig"));

        $__internal_49d890f098dcfec45ad0bcfdb0d79d0062dad0f476f28efcb1ef2ad19fe7bf20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49d890f098dcfec45ad0bcfdb0d79d0062dad0f476f28efcb1ef2ad19fe7bf20->enter($__internal_49d890f098dcfec45ad0bcfdb0d79d0062dad0f476f28efcb1ef2ad19fe7bf20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categorie/categorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_caf5371ee0df5510d03c00478511921699736254d9f02174d634774844714d66->leave($__internal_caf5371ee0df5510d03c00478511921699736254d9f02174d634774844714d66_prof);

        
        $__internal_49d890f098dcfec45ad0bcfdb0d79d0062dad0f476f28efcb1ef2ad19fe7bf20->leave($__internal_49d890f098dcfec45ad0bcfdb0d79d0062dad0f476f28efcb1ef2ad19fe7bf20_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e49c79bd2282970a575b6f154a61074933565160076665ed384b34309bae097 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e49c79bd2282970a575b6f154a61074933565160076665ed384b34309bae097->enter($__internal_3e49c79bd2282970a575b6f154a61074933565160076665ed384b34309bae097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d06229486eb8b548ac931e639487a3f9dadd9c2643a28251a22ba1c983c104af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d06229486eb8b548ac931e639487a3f9dadd9c2643a28251a22ba1c983c104af->enter($__internal_d06229486eb8b548ac931e639487a3f9dadd9c2643a28251a22ba1c983c104af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

    <h1 class=\"produit-h1\">";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["titre"]) || array_key_exists("titre", $context) ? $context["titre"] : (function () { throw new Twig_Error_Runtime('Variable "titre" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
        echo "</h1>
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
            echo "                <div class=\"col-lg-4 col-md-6 col-sm-6 card-index\">
                    <div class=\"card\">
                        <img class=\"card-img-top\" src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "image", array()))), "html", null, true);
            echo "\" alt=\"Card image cap\">
                        <div class=\"card-block\">
                            <h4 class=\"card-title\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "nom", array()), "html", null, true);
            echo "</h4>
                            <p class=\"card-text\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "description", array()), "html", null, true);
            echo "</p>
                            <a href=\"/produit/";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "slug", array()), "html", null, true);
            echo "\" class=\"btn btn-primary\">Entrer</a>
                        </div>
                    </div>
                </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "            </div>
        </div>
        <div class=\"col-md-2\"></div>
    </div>

";
        
        $__internal_d06229486eb8b548ac931e639487a3f9dadd9c2643a28251a22ba1c983c104af->leave($__internal_d06229486eb8b548ac931e639487a3f9dadd9c2643a28251a22ba1c983c104af_prof);

        
        $__internal_3e49c79bd2282970a575b6f154a61074933565160076665ed384b34309bae097->leave($__internal_3e49c79bd2282970a575b6f154a61074933565160076665ed384b34309bae097_prof);

    }

    public function getTemplateName()
    {
        return "categorie/categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 23,  82 => 18,  78 => 17,  74 => 16,  69 => 14,  65 => 12,  61 => 11,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}


    <h1 class=\"produit-h1\">{{ titre }}</h1>
    <div class=\"row\">
        <div class=\"col-md-2\"></div>
        <div class=\"col-md-8 bg-faded\">
            <div class=\"row\">
    {% for produit in produits %}
                <div class=\"col-lg-4 col-md-6 col-sm-6 card-index\">
                    <div class=\"card\">
                        <img class=\"card-img-top\" src=\"{{ asset('images/' ~ produit.image) }}\" alt=\"Card image cap\">
                        <div class=\"card-block\">
                            <h4 class=\"card-title\">{{ produit.nom }}</h4>
                            <p class=\"card-text\">{{ produit.description }}</p>
                            <a href=\"/produit/{{ produit.slug }}\" class=\"btn btn-primary\">Entrer</a>
                        </div>
                    </div>
                </div>
        {% endfor %}
            </div>
        </div>
        <div class=\"col-md-2\"></div>
    </div>

{% endblock %}", "categorie/categorie.html.twig", "/home/yas/Documents/symfony/projet_fin_etude/templates/categorie/categorie.html.twig");
    }
}
