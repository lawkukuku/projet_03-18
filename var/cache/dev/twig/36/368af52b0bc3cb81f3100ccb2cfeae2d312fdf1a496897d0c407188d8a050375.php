<?php

/* forum/ajout_sujet.html.twig */
class __TwigTemplate_b33fd14e88ff272389eca684aafd1ff9a10c9a18ad68f8613bf260b873352e55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "forum/ajout_sujet.html.twig", 1);
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
        $__internal_1903424bf44eb964d51533eb4ae1fa72b04012c65a0fdc4cbcd3814e08e7644f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1903424bf44eb964d51533eb4ae1fa72b04012c65a0fdc4cbcd3814e08e7644f->enter($__internal_1903424bf44eb964d51533eb4ae1fa72b04012c65a0fdc4cbcd3814e08e7644f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "forum/ajout_sujet.html.twig"));

        $__internal_c351b57207081badf86a4a8d15183dca53db6792230fed64a955ac9d42c8383b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c351b57207081badf86a4a8d15183dca53db6792230fed64a955ac9d42c8383b->enter($__internal_c351b57207081badf86a4a8d15183dca53db6792230fed64a955ac9d42c8383b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "forum/ajout_sujet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1903424bf44eb964d51533eb4ae1fa72b04012c65a0fdc4cbcd3814e08e7644f->leave($__internal_1903424bf44eb964d51533eb4ae1fa72b04012c65a0fdc4cbcd3814e08e7644f_prof);

        
        $__internal_c351b57207081badf86a4a8d15183dca53db6792230fed64a955ac9d42c8383b->leave($__internal_c351b57207081badf86a4a8d15183dca53db6792230fed64a955ac9d42c8383b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_076b2bb4dd553d83b508f87b91af7ede821b6508346f36b7962beb0870a86d21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_076b2bb4dd553d83b508f87b91af7ede821b6508346f36b7962beb0870a86d21->enter($__internal_076b2bb4dd553d83b508f87b91af7ede821b6508346f36b7962beb0870a86d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_66ae7ff0f76f93b7830b8961741262fcb44d50ec59bec4ed5a8552fb9cfde990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66ae7ff0f76f93b7830b8961741262fcb44d50ec59bec4ed5a8552fb9cfde990->enter($__internal_66ae7ff0f76f93b7830b8961741262fcb44d50ec59bec4ed5a8552fb9cfde990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container bg-faded\">
        ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "


        <div class=\"row\">
            <div class=\"col-md-1 col-sm-1\"></div>
            <div class=\"col-md-10 col-sm-10 connection-container\">

                <h1 class=\"ajout-produit-place\" style=\"color: #1d1e1f\">Ajouter un sujet</h1>
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), 'errors');
        echo "

                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), "titre", array()), 'label', array("label_attr" => array("class" => "conn-lab", "style" => "color: #1d1e1f"), "label" => "Titre"));
        echo "
                <span style=\"color: red\">";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "titre", array()), 'errors');
        echo "</span>
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "titre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                <br/>

                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), "description", array()), 'label', array("label_attr" => array("class" => "conn-lab", "style" => "color: #1d1e1f"), "label" => "Description"));
        echo "
                <span style=\"color: red\">";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), "description", array()), 'errors');
        echo "</span>
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                <br/>
                <br/>

                <button class=\"form-control conn-login\" type=\"submit\">Valider</button>
                <br/>
                <br/>
            </div>
        </div>

        ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->getSourceContext()); })()), 'form_end');
        echo "
    </div>

";
        
        $__internal_66ae7ff0f76f93b7830b8961741262fcb44d50ec59bec4ed5a8552fb9cfde990->leave($__internal_66ae7ff0f76f93b7830b8961741262fcb44d50ec59bec4ed5a8552fb9cfde990_prof);

        
        $__internal_076b2bb4dd553d83b508f87b91af7ede821b6508346f36b7962beb0870a86d21->leave($__internal_076b2bb4dd553d83b508f87b91af7ede821b6508346f36b7962beb0870a86d21_prof);

    }

    public function getTemplateName()
    {
        return "forum/ajout_sujet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 33,  91 => 23,  87 => 22,  83 => 21,  77 => 18,  73 => 17,  69 => 16,  64 => 14,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}

    <div class=\"container bg-faded\">
        {{ form_start(form) }}


        <div class=\"row\">
            <div class=\"col-md-1 col-sm-1\"></div>
            <div class=\"col-md-10 col-sm-10 connection-container\">

                <h1 class=\"ajout-produit-place\" style=\"color: #1d1e1f\">Ajouter un sujet</h1>
                {{ form_errors(form) }}

                {{ form_label(form.titre, \"Titre\", {'label_attr': {'class': 'conn-lab', 'style': 'color: #1d1e1f'}}) }}
                <span style=\"color: red\">{{ form_errors(form.titre) }}</span>
                {{ form_widget(form.titre, {'attr': {'class': 'form-control'}}) }}
                <br/>

                {{ form_label(form.description, \"Description\", {'label_attr': {'class': 'conn-lab', 'style': 'color: #1d1e1f'}}) }}
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
    </div>

{% endblock %}", "forum/ajout_sujet.html.twig", "/home/yas/Documents/symfony/projet_fin_etude/templates/forum/ajout_sujet.html.twig");
    }
}
