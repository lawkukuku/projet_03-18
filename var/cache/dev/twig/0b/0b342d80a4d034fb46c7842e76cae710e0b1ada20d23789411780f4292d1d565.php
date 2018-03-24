<?php

/* produit/produit.html.twig */
class __TwigTemplate_8b3a06d678b91b2474c33111123b29d4d62e318286e171bae5f7201b109a5eb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "produit/produit.html.twig", 1);
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
        $__internal_36c90b50019c61290937cb51b85f9cbd79c3862e0981023099bd0cf59411efb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36c90b50019c61290937cb51b85f9cbd79c3862e0981023099bd0cf59411efb3->enter($__internal_36c90b50019c61290937cb51b85f9cbd79c3862e0981023099bd0cf59411efb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produit/produit.html.twig"));

        $__internal_e2abc81113e16449d556b4eeead352b14422b467ef52e13daa8a604563fbf413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2abc81113e16449d556b4eeead352b14422b467ef52e13daa8a604563fbf413->enter($__internal_e2abc81113e16449d556b4eeead352b14422b467ef52e13daa8a604563fbf413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produit/produit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36c90b50019c61290937cb51b85f9cbd79c3862e0981023099bd0cf59411efb3->leave($__internal_36c90b50019c61290937cb51b85f9cbd79c3862e0981023099bd0cf59411efb3_prof);

        
        $__internal_e2abc81113e16449d556b4eeead352b14422b467ef52e13daa8a604563fbf413->leave($__internal_e2abc81113e16449d556b4eeead352b14422b467ef52e13daa8a604563fbf413_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_77e484ec37565295679cd1fbc0e6ed219f05da3579386df0b3b2709c60aaa764 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77e484ec37565295679cd1fbc0e6ed219f05da3579386df0b3b2709c60aaa764->enter($__internal_77e484ec37565295679cd1fbc0e6ed219f05da3579386df0b3b2709c60aaa764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_99870377191151f898095b755254de7feea96fff709b679dd75a21bef92835a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99870377191151f898095b755254de7feea96fff709b679dd75a21bef92835a0->enter($__internal_99870377191151f898095b755254de7feea96fff709b679dd75a21bef92835a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"container\">
    <div class=\"bg-faded\">
        <div class=\"row\">
            <div class=\"col-md-1\"></div>
            <div class=\"col-md-10\">
                <h1 class=\"produit-h1\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 10, $this->getSourceContext()); })()), "nom", array()), "html", null, true);
        echo "</h1>
                <div class=\"row\">
                    <div class=\"col-md-7\">
                        <img class=\"produit-image\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 13, $this->getSourceContext()); })()), "image", array()))), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"col-md-5\">
                        <span class=\"produit-span\">Quantite disponible : </span><span class=\"produit-span\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 16, $this->getSourceContext()); })()), "quantite", array()), "html", null, true);
        echo "</span>
                        <br/>
                        ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 18, $this->getSourceContext()); })()), 'form_start');
        echo "
                        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 19, $this->getSourceContext()); })()), 'errors');
        echo "

                        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 21, $this->getSourceContext()); })()), "quantite", array()), 'label', array("label_attr" => array("class" => "produit-h3-normal"), "label" => "Quantite : "));
        echo "
                        <span style=\"color: red\">";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 22, $this->getSourceContext()); })()), "quantite", array()), 'errors');
        echo "</span>
                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 23, $this->getSourceContext()); })()), "quantite", array()), 'widget', array("attr" => array("class" => "form-control", "value" => "1")));
        echo "
                        <br/>
                        <button class=\"form-control\" type=\"submit\">Ajouter au panier</button>
                        ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 26, $this->getSourceContext()); })()), 'form_end');
        echo "
                        <br/>
                        <span class=\"produit-h3-normal\">Prix : </span><span class=\"produit-span\">\$";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 28, $this->getSourceContext()); })()), "prix", array()), "html", null, true);
        echo "</span>
                    </div>
                    <div class=\"col-md-1\"></div>
                </div>
                <h3 class=\"produit-h3\">Description du produit</h3>
                <p class=\"produit-p\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 33, $this->getSourceContext()); })()), "description", array()), "html", null, true);
        echo "</p>
                <br/>
                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires_sous"]) || array_key_exists("commentaires_sous", $context) ? $context["commentaires_sous"] : (function () { throw new Twig_Error_Runtime('Variable "commentaires_sous" does not exist.', 35, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 36
            echo "                    <ol class=\"breadcrumb\">
                        <img src=\"";
            // line 37
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
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["commentaire"], 2, array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["sous"]) {
                // line 41
                echo "                            <ol class=\"breadcrumb\">
                                <img src=\"";
                // line 42
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
            // line 45
            echo "
                        ";
            // line 46
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->getSourceContext(), $context["commentaire"], 1, array(), "array"), 'form_start');
            echo "
                        <span style=\"color: red\">";
            // line 47
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["commentaire"], 1, array(), "array"), "contenue_sous", array()), 'errors');
            echo "</span>
                        ";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["commentaire"], 1, array(), "array"), "contenue_sous", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "repondre ...")));
            echo "
                        ";
            // line 49
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->getSourceContext(), $context["commentaire"], 1, array(), "array"), 'form_end');
            echo "
                    </div>
                    <br/>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "

                ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->getSourceContext()); })()), 'form_start');
        echo "


                <span style=\"color: red\">";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->getSourceContext()); })()), "contenue", array()), 'errors');
        echo "</span>
                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 59, $this->getSourceContext()); })()), "contenue", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                <button class=\"form-control\" type=\"submit\">Commenter</button>

                ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 63, $this->getSourceContext()); })()), 'form_end');
        echo "
            </div>
            <div class=\"col-md-1\"></div>
        </div>
    </div>
</div>

";
        
        $__internal_99870377191151f898095b755254de7feea96fff709b679dd75a21bef92835a0->leave($__internal_99870377191151f898095b755254de7feea96fff709b679dd75a21bef92835a0_prof);

        
        $__internal_77e484ec37565295679cd1fbc0e6ed219f05da3579386df0b3b2709c60aaa764->leave($__internal_77e484ec37565295679cd1fbc0e6ed219f05da3579386df0b3b2709c60aaa764_prof);

    }

    public function getTemplateName()
    {
        return "produit/produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 63,  203 => 59,  199 => 58,  193 => 55,  189 => 53,  179 => 49,  175 => 48,  171 => 47,  167 => 46,  164 => 45,  145 => 42,  142 => 41,  138 => 40,  122 => 37,  119 => 36,  115 => 35,  110 => 33,  102 => 28,  97 => 26,  91 => 23,  87 => 22,  83 => 21,  78 => 19,  74 => 18,  69 => 16,  63 => 13,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}

<div class=\"container\">
    <div class=\"bg-faded\">
        <div class=\"row\">
            <div class=\"col-md-1\"></div>
            <div class=\"col-md-10\">
                <h1 class=\"produit-h1\">{{ produit.nom }}</h1>
                <div class=\"row\">
                    <div class=\"col-md-7\">
                        <img class=\"produit-image\" src=\"{{ asset('images/' ~ produit.image) }}\">
                    </div>
                    <div class=\"col-md-5\">
                        <span class=\"produit-span\">Quantite disponible : </span><span class=\"produit-span\">{{ produit.quantite }}</span>
                        <br/>
                        {{ form_start(panier) }}
                        {{ form_errors(panier) }}

                        {{ form_label(panier.quantite, \"Quantite : \", {'label_attr': {'class': 'produit-h3-normal'}}) }}
                        <span style=\"color: red\">{{ form_errors(panier.quantite) }}</span>
                        {{ form_widget(panier.quantite, {'attr': {'class': 'form-control', 'value': '1'}}) }}
                        <br/>
                        <button class=\"form-control\" type=\"submit\">Ajouter au panier</button>
                        {{ form_end(panier) }}
                        <br/>
                        <span class=\"produit-h3-normal\">Prix : </span><span class=\"produit-span\">\${{ produit.prix }}</span>
                    </div>
                    <div class=\"col-md-1\"></div>
                </div>
                <h3 class=\"produit-h3\">Description du produit</h3>
                <p class=\"produit-p\">{{ produit.description }}</p>
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
            <div class=\"col-md-1\"></div>
        </div>
    </div>
</div>

{% endblock %}", "produit/produit.html.twig", "/home/yas/Documents/symfony/projet_fin_etude/templates/produit/produit.html.twig");
    }
}
