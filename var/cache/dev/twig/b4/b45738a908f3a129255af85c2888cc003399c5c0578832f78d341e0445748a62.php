<?php

/* registration/register.html.twig */
class __TwigTemplate_652fa5f465a8f7fa42517391545dccf4a446668ab69cd00148349ce738852566 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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
        $__internal_ef406fa8b695c642558f408348d54cae576054c65af9237673e465124b35a4d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef406fa8b695c642558f408348d54cae576054c65af9237673e465124b35a4d3->enter($__internal_ef406fa8b695c642558f408348d54cae576054c65af9237673e465124b35a4d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_46c143da180e6c99edbfbb00804ecb99110bda5a971f6adf1dbf3ed16d120c08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46c143da180e6c99edbfbb00804ecb99110bda5a971f6adf1dbf3ed16d120c08->enter($__internal_46c143da180e6c99edbfbb00804ecb99110bda5a971f6adf1dbf3ed16d120c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef406fa8b695c642558f408348d54cae576054c65af9237673e465124b35a4d3->leave($__internal_ef406fa8b695c642558f408348d54cae576054c65af9237673e465124b35a4d3_prof);

        
        $__internal_46c143da180e6c99edbfbb00804ecb99110bda5a971f6adf1dbf3ed16d120c08->leave($__internal_46c143da180e6c99edbfbb00804ecb99110bda5a971f6adf1dbf3ed16d120c08_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2a3d16df3dcbda47b49390b7c038fa157775dc1439ec12d990b8e41e8a6221b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2a3d16df3dcbda47b49390b7c038fa157775dc1439ec12d990b8e41e8a6221b->enter($__internal_a2a3d16df3dcbda47b49390b7c038fa157775dc1439ec12d990b8e41e8a6221b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dc71fda8ea859e2037fb75108eed284fe1c93002a80ba4f6f330d377f2b3f477 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc71fda8ea859e2037fb75108eed284fe1c93002a80ba4f6f330d377f2b3f477->enter($__internal_dc71fda8ea859e2037fb75108eed284fe1c93002a80ba4f6f330d377f2b3f477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new Twig_Error_Runtime('Variable "form1" does not exist.', 7, $this->getSourceContext()); })()), 'form_start');
        echo "





    <div class=\"row\">
        <div class=\"col-md-3 col-sm-1\"></div>
        <div class=\"col-md-6 col-sm-10 connection-container\">

            <h1 class=\"connection-place\">Inscription</h1>
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new Twig_Error_Runtime('Variable "form1" does not exist.', 18, $this->getSourceContext()); })()), 'errors');
        echo "

            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new Twig_Error_Runtime('Variable "form1" does not exist.', 20, $this->getSourceContext()); })()), "username", array()), 'label', array("label_attr" => array("class" => "conn-lab"), "label" => "Identifiant"));
        echo "
            <span style=\"color: red\">";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new Twig_Error_Runtime('Variable "form1" does not exist.', 21, $this->getSourceContext()); })()), "username", array()), 'errors');
        echo "</span>
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new Twig_Error_Runtime('Variable "form1" does not exist.', 22, $this->getSourceContext()); })()), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            <br/>

            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new Twig_Error_Runtime('Variable "form1" does not exist.', 25, $this->getSourceContext()); })()), "email", array()), 'label', array("label_attr" => array("class" => "conn-lab"), "label" => "Email"));
        echo "
            <span style=\"color: red\">";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new Twig_Error_Runtime('Variable "form1" does not exist.', 26, $this->getSourceContext()); })()), "email", array()), 'errors');
        echo "</span>
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new Twig_Error_Runtime('Variable "form1" does not exist.', 27, $this->getSourceContext()); })()), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            <br/>

            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new Twig_Error_Runtime('Variable "form1" does not exist.', 30, $this->getSourceContext()); })()), "plainPassword", array()), "first", array()), 'label', array("label_attr" => array("class" => "conn-lab"), "label" => "Mot de passe"));
        echo "
            <span style=\"color: red\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new Twig_Error_Runtime('Variable "form1" does not exist.', 31, $this->getSourceContext()); })()), "plainPassword", array()), "first", array()), 'errors');
        echo "</span>
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new Twig_Error_Runtime('Variable "form1" does not exist.', 32, $this->getSourceContext()); })()), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            <br/>

            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new Twig_Error_Runtime('Variable "form1" does not exist.', 35, $this->getSourceContext()); })()), "plainPassword", array()), "second", array()), 'label', array("label_attr" => array("class" => "conn-lab"), "label" => "Retapez le mot de passe"));
        echo "
            <span style=\"color: red\">";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new Twig_Error_Runtime('Variable "form1" does not exist.', 36, $this->getSourceContext()); })()), "plainPassword", array()), "second", array()), 'errors');
        echo "</span>
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new Twig_Error_Runtime('Variable "form1" does not exist.', 37, $this->getSourceContext()); })()), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            <br/>
            <br/>

            <button class=\"form-control conn-login\" type=\"submit\">Valider</button>
            <br/>
            <br/>
        </div>
    </div>

    ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new Twig_Error_Runtime('Variable "form1" does not exist.', 47, $this->getSourceContext()); })()), 'form_end');
        echo "

";
        
        $__internal_dc71fda8ea859e2037fb75108eed284fe1c93002a80ba4f6f330d377f2b3f477->leave($__internal_dc71fda8ea859e2037fb75108eed284fe1c93002a80ba4f6f330d377f2b3f477_prof);

        
        $__internal_a2a3d16df3dcbda47b49390b7c038fa157775dc1439ec12d990b8e41e8a6221b->leave($__internal_a2a3d16df3dcbda47b49390b7c038fa157775dc1439ec12d990b8e41e8a6221b_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 47,  121 => 37,  117 => 36,  113 => 35,  107 => 32,  103 => 31,  99 => 30,  93 => 27,  89 => 26,  85 => 25,  79 => 22,  75 => 21,  71 => 20,  66 => 18,  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}



{% block body %}

    {{ form_start(form1) }}





    <div class=\"row\">
        <div class=\"col-md-3 col-sm-1\"></div>
        <div class=\"col-md-6 col-sm-10 connection-container\">

            <h1 class=\"connection-place\">Inscription</h1>
            {{ form_errors(form1) }}

            {{ form_label(form1.username, \"Identifiant\", {'label_attr': {'class': 'conn-lab'}}) }}
            <span style=\"color: red\">{{ form_errors(form1.username) }}</span>
            {{ form_widget(form1.username, {'attr': {'class': 'form-control'}}) }}
            <br/>

            {{ form_label(form1.email, \"Email\", {'label_attr': {'class': 'conn-lab'}}) }}
            <span style=\"color: red\">{{ form_errors(form1.email) }}</span>
            {{ form_widget(form1.email, {'attr': {'class': 'form-control'}}) }}
            <br/>

            {{ form_label(form1.plainPassword.first, \"Mot de passe\", {'label_attr': {'class': 'conn-lab'}}) }}
            <span style=\"color: red\">{{ form_errors(form1.plainPassword.first) }}</span>
            {{ form_widget(form1.plainPassword.first, {'attr': {'class': 'form-control'}}) }}
            <br/>

            {{ form_label(form1.plainPassword.second, \"Retapez le mot de passe\", {'label_attr': {'class': 'conn-lab'}}) }}
            <span style=\"color: red\">{{ form_errors(form1.plainPassword.second) }}</span>
            {{ form_widget(form1.plainPassword.second, {'attr': {'class': 'form-control'}}) }}
            <br/>
            <br/>

            <button class=\"form-control conn-login\" type=\"submit\">Valider</button>
            <br/>
            <br/>
        </div>
    </div>

    {{ form_end(form1) }}

{% endblock %}", "registration/register.html.twig", "/home/yas/Documents/symfony/projet_fin_etude/templates/registration/register.html.twig");
    }
}
