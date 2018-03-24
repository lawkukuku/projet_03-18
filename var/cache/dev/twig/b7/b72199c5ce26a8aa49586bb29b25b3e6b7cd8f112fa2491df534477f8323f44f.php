<?php

/* produit/ajouter.html.twig */
class __TwigTemplate_33c12cc28188812fe21e604bfdde75e2539ec23e3b444c14baa34b72cf8d9b97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "produit/ajouter.html.twig", 1);
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
        $__internal_2aa877218fceeaa3c0a0b6f755a9150ad728b953408949547ad6507ed8f33401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa877218fceeaa3c0a0b6f755a9150ad728b953408949547ad6507ed8f33401->enter($__internal_2aa877218fceeaa3c0a0b6f755a9150ad728b953408949547ad6507ed8f33401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produit/ajouter.html.twig"));

        $__internal_4880904c1ce347d2771c034f85bf2032771d21f43160e7c72e593e20189fa36e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4880904c1ce347d2771c034f85bf2032771d21f43160e7c72e593e20189fa36e->enter($__internal_4880904c1ce347d2771c034f85bf2032771d21f43160e7c72e593e20189fa36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produit/ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2aa877218fceeaa3c0a0b6f755a9150ad728b953408949547ad6507ed8f33401->leave($__internal_2aa877218fceeaa3c0a0b6f755a9150ad728b953408949547ad6507ed8f33401_prof);

        
        $__internal_4880904c1ce347d2771c034f85bf2032771d21f43160e7c72e593e20189fa36e->leave($__internal_4880904c1ce347d2771c034f85bf2032771d21f43160e7c72e593e20189fa36e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_965ad80c3a73a770e18fc97a3417d4e81c53e2c52846a7ef5186e7511099a6f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_965ad80c3a73a770e18fc97a3417d4e81c53e2c52846a7ef5186e7511099a6f0->enter($__internal_965ad80c3a73a770e18fc97a3417d4e81c53e2c52846a7ef5186e7511099a6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ff2ccba1bbbe3324088081a266daaa3c6fc0dd0bd8b08c402a38d7f5c45ff63a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff2ccba1bbbe3324088081a266daaa3c6fc0dd0bd8b08c402a38d7f5c45ff63a->enter($__internal_ff2ccba1bbbe3324088081a266daaa3c6fc0dd0bd8b08c402a38d7f5c45ff63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'form_start');
        echo "


    <div class=\"row\">
        <div class=\"col-md-3 col-sm-1\"></div>
        <div class=\"col-md-6 col-sm-10 connection-container\">

            <h1 class=\"ajout-produit-place\">Ajouter un nouveau produit</h1>
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), 'errors');
        echo "

            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), "nom", array()), 'label', array("label_attr" => array("class" => "conn-lab"), "label" => "Nom"));
        echo "
            <span style=\"color: red\">";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), "nom", array()), 'errors');
        echo "</span>
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            <br/>

            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), "slug", array()), 'label', array("label_attr" => array("class" => "conn-lab"), "label" => "Slug"));
        echo "
            <span style=\"color: red\">";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), "slug", array()), 'errors');
        echo "</span>
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), "slug", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            <br/>

            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), "quantite", array()), 'label', array("label_attr" => array("class" => "conn-lab"), "label" => "Quantite"));
        echo "
            <span style=\"color: red\">";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), "quantite", array()), 'errors');
        echo "</span>
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), "quantite", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            <br/>

            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), "prix", array()), 'label', array("label_attr" => array("class" => "conn-lab"), "label" => "Prix"));
        echo "
            <span style=\"color: red\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), "prix", array()), 'errors');
        echo "</span>
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), "prix", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "<br/>

            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "categorie", array()), 'label', array("label_attr" => array("class" => "conn-lab"), "label" => "Categorie"));
        echo "
            <span style=\"color: red\">";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->getSourceContext()); })()), "categorie", array()), 'errors');
        echo "</span>
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), "categorie", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "<br/>

            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->getSourceContext()); })()), "image", array()), 'label', array("label_attr" => array("class" => "conn-lab"), "label" => "Image"));
        echo "
            <span style=\"color: red\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), "image", array()), 'errors');
        echo "</span>
            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), "image", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "<br/>

            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), "description", array()), 'label', array("label_attr" => array("class" => "conn-lab"), "label" => "Description"));
        echo "
            <span style=\"color: red\">";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), "description", array()), 'errors');
        echo "</span>
            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->getSourceContext()); })()), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            <br/>
            <br/>

            <button class=\"form-control conn-login\" type=\"submit\">Valider</button>
            <br/>
            <br/>
        </div>
    </div>

";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_ff2ccba1bbbe3324088081a266daaa3c6fc0dd0bd8b08c402a38d7f5c45ff63a->leave($__internal_ff2ccba1bbbe3324088081a266daaa3c6fc0dd0bd8b08c402a38d7f5c45ff63a_prof);

        
        $__internal_965ad80c3a73a770e18fc97a3417d4e81c53e2c52846a7ef5186e7511099a6f0->leave($__internal_965ad80c3a73a770e18fc97a3417d4e81c53e2c52846a7ef5186e7511099a6f0_prof);

    }

    public function getTemplateName()
    {
        return "produit/ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 54,  157 => 44,  153 => 43,  149 => 42,  144 => 40,  140 => 39,  136 => 38,  131 => 36,  127 => 35,  123 => 34,  118 => 32,  114 => 31,  110 => 30,  104 => 27,  100 => 26,  96 => 25,  90 => 22,  86 => 21,  82 => 20,  76 => 17,  72 => 16,  68 => 15,  63 => 13,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}

{{ form_start(form) }}


    <div class=\"row\">
        <div class=\"col-md-3 col-sm-1\"></div>
        <div class=\"col-md-6 col-sm-10 connection-container\">

            <h1 class=\"ajout-produit-place\">Ajouter un nouveau produit</h1>
            {{ form_errors(form) }}

            {{ form_label(form.nom, \"Nom\", {'label_attr': {'class': 'conn-lab'}}) }}
            <span style=\"color: red\">{{ form_errors(form.nom) }}</span>
            {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}
            <br/>

            {{ form_label(form.slug, \"Slug\", {'label_attr': {'class': 'conn-lab'}}) }}
            <span style=\"color: red\">{{ form_errors(form.slug) }}</span>
            {{ form_widget(form.slug, {'attr': {'class': 'form-control'}}) }}
            <br/>

            {{ form_label(form.quantite, \"Quantite\", {'label_attr': {'class': 'conn-lab'}}) }}
            <span style=\"color: red\">{{ form_errors(form.quantite) }}</span>
            {{ form_widget(form.quantite, {'attr': {'class': 'form-control'}}) }}
            <br/>

            {{ form_label(form.prix, \"Prix\", {'label_attr': {'class': 'conn-lab'}}) }}
            <span style=\"color: red\">{{ form_errors(form.prix) }}</span>
            {{ form_widget(form.prix, {'attr': {'class': 'form-control'}}) }}<br/>

            {{ form_label(form.categorie, \"Categorie\", {'label_attr': {'class': 'conn-lab'}}) }}
            <span style=\"color: red\">{{ form_errors(form.categorie) }}</span>
            {{ form_widget(form.categorie, {'attr': {'class': 'form-control'}}) }}<br/>

            {{ form_label(form.image, \"Image\", {'label_attr': {'class': 'conn-lab'}}) }}
            <span style=\"color: red\">{{ form_errors(form.image) }}</span>
            {{ form_widget(form.image, {'attr': {'class': 'form-control'}}) }}<br/>

            {{ form_label(form.description, \"Description\", {'label_attr': {'class': 'conn-lab'}}) }}
            <span style=\"color: red\">{{ form_errors(form.description) }}</span>
            {{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}
            <br/>
            <br/>

            <button class=\"form-control conn-login\" type=\"submit\">Valider</button>
            <br/>
            <br/>
        </div>
    </div>

{{ form_end(form) }}
{% endblock %}", "produit/ajouter.html.twig", "/home/yas/Documents/symfony/projet_fin_etude/templates/produit/ajouter.html.twig");
    }
}
