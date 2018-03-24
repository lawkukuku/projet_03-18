<?php

/* forum/consult_sujet.html.twig */
class __TwigTemplate_e3ec8d810a218e6bb151944d22de5e1964199759cbe2bf56fa2aa4b32e70ba24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "forum/consult_sujet.html.twig", 1);
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
        $__internal_5567a0a8e799c24c17a2dcd1778c0ff278546cd98bada447eb808f5d745f71ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5567a0a8e799c24c17a2dcd1778c0ff278546cd98bada447eb808f5d745f71ea->enter($__internal_5567a0a8e799c24c17a2dcd1778c0ff278546cd98bada447eb808f5d745f71ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "forum/consult_sujet.html.twig"));

        $__internal_885b2b07db1c2d8edcc64b56cf1beaa4903283cc8475d9236eb86a81f049b869 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_885b2b07db1c2d8edcc64b56cf1beaa4903283cc8475d9236eb86a81f049b869->enter($__internal_885b2b07db1c2d8edcc64b56cf1beaa4903283cc8475d9236eb86a81f049b869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "forum/consult_sujet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5567a0a8e799c24c17a2dcd1778c0ff278546cd98bada447eb808f5d745f71ea->leave($__internal_5567a0a8e799c24c17a2dcd1778c0ff278546cd98bada447eb808f5d745f71ea_prof);

        
        $__internal_885b2b07db1c2d8edcc64b56cf1beaa4903283cc8475d9236eb86a81f049b869->leave($__internal_885b2b07db1c2d8edcc64b56cf1beaa4903283cc8475d9236eb86a81f049b869_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_862b568bc217775bbae3a7c99bfca50db22ee1e3b46ec006da6740d739481497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_862b568bc217775bbae3a7c99bfca50db22ee1e3b46ec006da6740d739481497->enter($__internal_862b568bc217775bbae3a7c99bfca50db22ee1e3b46ec006da6740d739481497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b12d92a1f32916de3251fd4104b81633ff52e04a7241c7563936fdd20267a25a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b12d92a1f32916de3251fd4104b81633ff52e04a7241c7563936fdd20267a25a->enter($__internal_b12d92a1f32916de3251fd4104b81633ff52e04a7241c7563936fdd20267a25a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container bg-faded\">
            <br/>
            <div class=\"card\" style=\"\">
                <div class=\"card-block\">
                    <h1 style=\"text-align: center\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new Twig_Error_Runtime('Variable "sujet" does not exist.', 9, $this->getSourceContext()); })()), "titre", array()), "html", null, true);
        echo "</h1>
                    <br/>
                    <p class=\"card-text\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new Twig_Error_Runtime('Variable "sujet" does not exist.', 11, $this->getSourceContext()); })()), "description", array()), "html", null, true);
        echo "</p>
                    <div class=\"row\">
                        <div class=\"col-md-5\"> par: <b>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new Twig_Error_Runtime('Variable "sujet" does not exist.', 13, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
        echo " </b> le ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new Twig_Error_Runtime('Variable "sujet" does not exist.', 13, $this->getSourceContext()); })()), "date", array()), "html", null, true);
        echo "</div>
                        <div class=\"col-md-5\"></div>
                        <div class=\"col-md-2\"></div>
                    </div>

                </div>
            </div>



        <br/>
    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires_sous"]) || array_key_exists("commentaires_sous", $context) ? $context["commentaires_sous"] : (function () { throw new Twig_Error_Runtime('Variable "commentaires_sous" does not exist.', 24, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 25
            echo "        <ol class=\"breadcrumb\">
            <img src=\"";
            // line 26
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["commentaire"], 0, array(), "array"), "user", array()), "image", array()) == "")) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/photo.jpg"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["commentaire"], 0, array(), "array"), "user", array()), "image", array()))), "html", null, true);
            }
            echo "\" style=\"height: 30px; border-radius: 30px\" /><b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["commentaire"], 0, array(), "array"), "user", array()), "username", array()), "html", null, true);
            echo ": </b> le ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["commentaire"], 0, array(), "array"), "date", array()), "html", null, true);
            echo "<p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["commentaire"], 0, array(), "array"), "contenue", array()), "html", null, true);
            echo "</p>
        </ol>
        <div style=\"margin-left: 60px\">
        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["commentaire"], 2, array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["sous"]) {
                // line 30
                echo "            <ol class=\"breadcrumb\">
                <img src=\"";
                // line 31
                if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["sous"], "user", array()), "image", array()) == "")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/photo.jpg"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["sous"], "user", array()), "image", array()))), "html", null, true);
                }
                echo "\" style=\"height: 30px; border-radius: 30px\" /><b>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["sous"], "user", array()), "username", array()), "html", null, true);
                echo ": </b> le ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sous"], "date", array()), "html", null, true);
                echo "<p>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sous"], "contenue", array()), "html", null, true);
                echo "</p>
            </ol>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sous'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "
        ";
            // line 35
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->getSourceContext(), $context["commentaire"], 1, array(), "array"), 'form_start');
            echo "
        <span style=\"color: red\">";
            // line 36
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["commentaire"], 1, array(), "array"), "contenue_sous", array()), 'errors');
            echo "</span>
        ";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["commentaire"], 1, array(), "array"), "contenue_sous", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "repondre ...")));
            echo "
        ";
            // line 38
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->getSourceContext(), $context["commentaire"], 1, array(), "array"), 'form_end');
            echo "
        </div>
        <br/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "

        ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->getSourceContext()); })()), 'form_start');
        echo "


                <span style=\"color: red\">";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()), "contenue", array()), 'errors');
        echo "</span>
                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), "contenue", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                <button class=\"form-control\" type=\"submit\">Commenter</button>

        ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->getSourceContext()); })()), 'form_end');
        echo "




    </div>

";
        
        $__internal_b12d92a1f32916de3251fd4104b81633ff52e04a7241c7563936fdd20267a25a->leave($__internal_b12d92a1f32916de3251fd4104b81633ff52e04a7241c7563936fdd20267a25a_prof);

        
        $__internal_862b568bc217775bbae3a7c99bfca50db22ee1e3b46ec006da6740d739481497->leave($__internal_862b568bc217775bbae3a7c99bfca50db22ee1e3b46ec006da6740d739481497_prof);

    }

    public function getTemplateName()
    {
        return "forum/consult_sujet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 52,  170 => 48,  166 => 47,  160 => 44,  156 => 42,  146 => 38,  142 => 37,  138 => 36,  134 => 35,  131 => 34,  112 => 31,  109 => 30,  105 => 29,  89 => 26,  86 => 25,  82 => 24,  66 => 13,  61 => 11,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}

    <div class=\"container bg-faded\">
            <br/>
            <div class=\"card\" style=\"\">
                <div class=\"card-block\">
                    <h1 style=\"text-align: center\">{{ sujet.titre }}</h1>
                    <br/>
                    <p class=\"card-text\">{{ sujet.description }}</p>
                    <div class=\"row\">
                        <div class=\"col-md-5\"> par: <b>{{ sujet.user.username }} </b> le {{ sujet.date }}</div>
                        <div class=\"col-md-5\"></div>
                        <div class=\"col-md-2\"></div>
                    </div>

                </div>
            </div>



        <br/>
    {% for commentaire in commentaires_sous %}
        <ol class=\"breadcrumb\">
            <img src=\"{% if commentaire[0].user.image == \"\" %}{{ asset('images/photo.jpg') }}{% else %}{{ asset('images/' ~ commentaire[0].user.image) }}{% endif %}\" style=\"height: 30px; border-radius: 30px\" /><b>{{ commentaire[0].user.username }}: </b> le {{ commentaire[0].date }}<p>{{ commentaire[0].contenue }}</p>
        </ol>
        <div style=\"margin-left: 60px\">
        {% for sous in commentaire[2] %}
            <ol class=\"breadcrumb\">
                <img src=\"{% if sous.user.image == \"\" %}{{ asset('images/photo.jpg') }}{% else %}{{ asset('images/' ~ sous.user.image) }}{% endif %}\" style=\"height: 30px; border-radius: 30px\" /><b>{{ sous.user.username }}: </b> le {{ sous.date }}<p>{{ sous.contenue }}</p>
            </ol>
        {% endfor %}

        {{ form_start(commentaire[1]) }}
        <span style=\"color: red\">{{ form_errors(commentaire[1].contenue_sous) }}</span>
        {{ form_widget(commentaire[1].contenue_sous, {'attr': {'class': 'form-control', 'placeholder': 'repondre ...'}}) }}
        {{ form_end(commentaire[1]) }}
        </div>
        <br/>
        {% endfor %}


        {{ form_start(form) }}


                <span style=\"color: red\">{{ form_errors(form.contenue) }}</span>
                {{ form_widget(form.contenue, {'attr': {'class': 'form-control'}}) }}

                <button class=\"form-control\" type=\"submit\">Commenter</button>

        {{ form_end(form) }}




    </div>

{% endblock %}", "forum/consult_sujet.html.twig", "/home/yas/Documents/symfony/projet_fin_etude/templates/forum/consult_sujet.html.twig");
    }
}
