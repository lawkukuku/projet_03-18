<?php

/* parametre/parametre.html.twig */
class __TwigTemplate_cc57140aa299c83ba8f808db8c44dfc034c9b153ef6eaa6cdc2b6f2b1b5e165b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "parametre/parametre.html.twig", 1);
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
        $__internal_3fe8e82ca4caa219863574a12dc723b31f91d5bfc2275ff0cd1f8ab001ef9694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fe8e82ca4caa219863574a12dc723b31f91d5bfc2275ff0cd1f8ab001ef9694->enter($__internal_3fe8e82ca4caa219863574a12dc723b31f91d5bfc2275ff0cd1f8ab001ef9694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "parametre/parametre.html.twig"));

        $__internal_c73bd2480cc8fd93590eb1cd636ef34c902de07dd6faf2139c7d905548fee5a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c73bd2480cc8fd93590eb1cd636ef34c902de07dd6faf2139c7d905548fee5a3->enter($__internal_c73bd2480cc8fd93590eb1cd636ef34c902de07dd6faf2139c7d905548fee5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "parametre/parametre.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fe8e82ca4caa219863574a12dc723b31f91d5bfc2275ff0cd1f8ab001ef9694->leave($__internal_3fe8e82ca4caa219863574a12dc723b31f91d5bfc2275ff0cd1f8ab001ef9694_prof);

        
        $__internal_c73bd2480cc8fd93590eb1cd636ef34c902de07dd6faf2139c7d905548fee5a3->leave($__internal_c73bd2480cc8fd93590eb1cd636ef34c902de07dd6faf2139c7d905548fee5a3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b4b17ed92f5adca8867c2ac1aeeb8ba5a87fb33c500539f1fa6ab81191ee59a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b4b17ed92f5adca8867c2ac1aeeb8ba5a87fb33c500539f1fa6ab81191ee59a->enter($__internal_9b4b17ed92f5adca8867c2ac1aeeb8ba5a87fb33c500539f1fa6ab81191ee59a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_63b2f5725382fb5fe66c3b0e24e171bf4deecc1263bd16661d9740a4abfa5831 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63b2f5725382fb5fe66c3b0e24e171bf4deecc1263bd16661d9740a4abfa5831->enter($__internal_63b2f5725382fb5fe66c3b0e24e171bf4deecc1263bd16661d9740a4abfa5831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container bg-faded\">
        <h1 class=\"produit-h1\">Parametre</h1>
        <div style=\"margin-top: 60px\"></div>

        ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new Twig_Error_Runtime('Variable "image" does not exist.', 9, $this->getSourceContext()); })()), 'form_start');
        echo "
        <div class=\"row\" style=\"margin-top: 30px\">

            <div class=\"col-md-5 col-sm-5 col-xs-5\"><h3 class=\"param\">Image: </h3></div>
            <div class=\"col-md-5 col-sm-5 col-xs-5\"><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . (isset($context["img"]) || array_key_exists("img", $context) ? $context["img"] : (function () { throw new Twig_Error_Runtime('Variable "img" does not exist.', 13, $this->getSourceContext()); })()))), "html", null, true);
        echo "\" class=\"img-fluid\">";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new Twig_Error_Runtime('Variable "image" does not exist.', 13, $this->getSourceContext()); })()), "image", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "")));
        echo "</div>
            <div class=\"col-md-2 col-sm-2 col-xs-2\"><button type=\"submit\" class=\"btn btn-secondary btn-sm\" role=\"button\" aria-pressed=\"true\">Modifier</button></div>

        </div>
        ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new Twig_Error_Runtime('Variable "image" does not exist.', 17, $this->getSourceContext()); })()), 'form_end');
        echo "

        ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["identifiant"]) || array_key_exists("identifiant", $context) ? $context["identifiant"] : (function () { throw new Twig_Error_Runtime('Variable "identifiant" does not exist.', 19, $this->getSourceContext()); })()), 'form_start');
        echo "
        <div class=\"row\" style=\"margin-top: 30px\">

            <div class=\"col-md-5 col-sm-5 col-xs-5\"><h3 class=\"param\">Identifiant: </h3></div>
            <div class=\"col-md-5 col-sm-5 col-xs-5\">";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["identifiant"]) || array_key_exists("identifiant", $context) ? $context["identifiant"] : (function () { throw new Twig_Error_Runtime('Variable "identifiant" does not exist.', 23, $this->getSourceContext()); })()), "identifiant", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
            <div class=\"col-md-2 col-sm-2 col-xs-2\"><button type=\"submit\" class=\"btn btn-secondary btn-sm\" role=\"button\" aria-pressed=\"true\">Modifier</button></div>

        </div>
        ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["identifiant"]) || array_key_exists("identifiant", $context) ? $context["identifiant"] : (function () { throw new Twig_Error_Runtime('Variable "identifiant" does not exist.', 27, $this->getSourceContext()); })()), 'form_end');
        echo "
        ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new Twig_Error_Runtime('Variable "email" does not exist.', 28, $this->getSourceContext()); })()), 'form_start');
        echo "
        <div class=\"row\" style=\"margin-top: 30px\">

            <div class=\"col-md-5 col-sm-5 col-xs-5\"><h3 class=\"param\">Email: </h3></div>
            <div class=\"col-md-5 col-sm-5 col-xs-5\">";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new Twig_Error_Runtime('Variable "email" does not exist.', 32, $this->getSourceContext()); })()), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
            <div class=\"col-md-2 col-sm-2 col-xs-2\"><button type=\"submit\" class=\"btn btn-secondary btn-sm\" role=\"button\" aria-pressed=\"true\">Modifier</button></div>

        </div>
        ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new Twig_Error_Runtime('Variable "email" does not exist.', 36, $this->getSourceContext()); })()), 'form_end');
        echo "

        ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["pass"]) || array_key_exists("pass", $context) ? $context["pass"] : (function () { throw new Twig_Error_Runtime('Variable "pass" does not exist.', 38, $this->getSourceContext()); })()), 'form_start');
        echo "
        <div class=\"row\" style=\"margin-top: 30px\">

            <div class=\"col-md-5 col-sm-5 col-xs-5\"><h3 class=\"param\">Mot de passe: </h3></div>
            <div class=\"col-md-5 col-sm-5 col-xs-5\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pass"]) || array_key_exists("pass", $context) ? $context["pass"] : (function () { throw new Twig_Error_Runtime('Variable "pass" does not exist.', 42, $this->getSourceContext()); })()), "mot_de_passe", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "********")));
        echo "</div>
            <div class=\"col-md-2 col-sm-2 col-xs-2\"><button type=\"submit\" class=\"btn btn-secondary btn-sm\" role=\"button\" aria-pressed=\"true\">Modifier</button></div>

        </div>
        ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["pass"]) || array_key_exists("pass", $context) ? $context["pass"] : (function () { throw new Twig_Error_Runtime('Variable "pass" does not exist.', 46, $this->getSourceContext()); })()), 'form_end');
        echo "

    </div>

";
        
        $__internal_63b2f5725382fb5fe66c3b0e24e171bf4deecc1263bd16661d9740a4abfa5831->leave($__internal_63b2f5725382fb5fe66c3b0e24e171bf4deecc1263bd16661d9740a4abfa5831_prof);

        
        $__internal_9b4b17ed92f5adca8867c2ac1aeeb8ba5a87fb33c500539f1fa6ab81191ee59a->leave($__internal_9b4b17ed92f5adca8867c2ac1aeeb8ba5a87fb33c500539f1fa6ab81191ee59a_prof);

    }

    public function getTemplateName()
    {
        return "parametre/parametre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 46,  121 => 42,  114 => 38,  109 => 36,  102 => 32,  95 => 28,  91 => 27,  84 => 23,  77 => 19,  72 => 17,  63 => 13,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}

    <div class=\"container bg-faded\">
        <h1 class=\"produit-h1\">Parametre</h1>
        <div style=\"margin-top: 60px\"></div>

        {{ form_start(image) }}
        <div class=\"row\" style=\"margin-top: 30px\">

            <div class=\"col-md-5 col-sm-5 col-xs-5\"><h3 class=\"param\">Image: </h3></div>
            <div class=\"col-md-5 col-sm-5 col-xs-5\"><img src=\"{{ asset('images/' ~ img) }}\" class=\"img-fluid\">{{ form_widget(image.image, {'attr': {'class': 'form-control', 'placeholder': ''}}) }}</div>
            <div class=\"col-md-2 col-sm-2 col-xs-2\"><button type=\"submit\" class=\"btn btn-secondary btn-sm\" role=\"button\" aria-pressed=\"true\">Modifier</button></div>

        </div>
        {{ form_end(image) }}

        {{ form_start(identifiant) }}
        <div class=\"row\" style=\"margin-top: 30px\">

            <div class=\"col-md-5 col-sm-5 col-xs-5\"><h3 class=\"param\">Identifiant: </h3></div>
            <div class=\"col-md-5 col-sm-5 col-xs-5\">{{ form_widget(identifiant.identifiant, {'attr': {'class': 'form-control'}}) }}</div>
            <div class=\"col-md-2 col-sm-2 col-xs-2\"><button type=\"submit\" class=\"btn btn-secondary btn-sm\" role=\"button\" aria-pressed=\"true\">Modifier</button></div>

        </div>
        {{ form_end(identifiant) }}
        {{ form_start(email) }}
        <div class=\"row\" style=\"margin-top: 30px\">

            <div class=\"col-md-5 col-sm-5 col-xs-5\"><h3 class=\"param\">Email: </h3></div>
            <div class=\"col-md-5 col-sm-5 col-xs-5\">{{ form_widget(email.email, {'attr': {'class': 'form-control'}}) }}</div>
            <div class=\"col-md-2 col-sm-2 col-xs-2\"><button type=\"submit\" class=\"btn btn-secondary btn-sm\" role=\"button\" aria-pressed=\"true\">Modifier</button></div>

        </div>
        {{ form_end(email) }}

        {{ form_start(pass) }}
        <div class=\"row\" style=\"margin-top: 30px\">

            <div class=\"col-md-5 col-sm-5 col-xs-5\"><h3 class=\"param\">Mot de passe: </h3></div>
            <div class=\"col-md-5 col-sm-5 col-xs-5\">{{ form_widget(pass.mot_de_passe, {'attr': {'class': 'form-control', 'placeholder': '********'}}) }}</div>
            <div class=\"col-md-2 col-sm-2 col-xs-2\"><button type=\"submit\" class=\"btn btn-secondary btn-sm\" role=\"button\" aria-pressed=\"true\">Modifier</button></div>

        </div>
        {{ form_end(pass) }}

    </div>

{% endblock %}", "parametre/parametre.html.twig", "/home/yas/Documents/symfony/projet_fin_etude/templates/parametre/parametre.html.twig");
    }
}
