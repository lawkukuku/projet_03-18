<?php

/* facture/facture.html.twig */
class __TwigTemplate_e32a416ef1f58c3a98bc03f0cd85b24a25b10d6e83b1e28cd54ef1a6b8bd18ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a33975486bc5a592dcefa8b57aa4c5e83ffc9157964efb9da27d913cc9501e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a33975486bc5a592dcefa8b57aa4c5e83ffc9157964efb9da27d913cc9501e1->enter($__internal_9a33975486bc5a592dcefa8b57aa4c5e83ffc9157964efb9da27d913cc9501e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "facture/facture.html.twig"));

        $__internal_8cc737dcd02872c0f3ebcdc6dd3dc448b18c151e55fcc2523632413aa0213cfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cc737dcd02872c0f3ebcdc6dd3dc448b18c151e55fcc2523632413aa0213cfc->enter($__internal_8cc737dcd02872c0f3ebcdc6dd3dc448b18c151e55fcc2523632413aa0213cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "facture/facture.html.twig"));

        // line 1
        echo "<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
    <h1 style=\"text-align: center\">Facture</h1>

    <p><span style=\"font-weight: bold\">Identifiant: </span> ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 24, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo " <br/> <span style=\"font-weight: bold\">Email: </span>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 24, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "<br/> <span style=\"font-weight: bold\">Date: </span>";
        echo twig_escape_filter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new Twig_Error_Runtime('Variable "date" does not exist.', 24, $this->getSourceContext()); })()), "html", null, true);
        echo "</p>

    <table>

        <tr>
            <th>Nom de produit</th>
            <th>quantite</th>
            <th>Prix unitaire</th>
            <th>Prix total</th>
        </tr>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 34, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 35
            echo "        <tr>

            <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "nom", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "quantite", array()), "html", null, true);
            echo "</td>
            <td>\$";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "prix_unite", array()), "html", null, true);
            echo "</td>
            <td>\$";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "total", array()), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
    </table>
    <div style=\"margin-left: 85%\">
        <span style=\"font-weight: bold;\">Total: </span>\$";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 46, $this->getSourceContext()); })()), "html", null, true);
        echo "
    </div>

</body>
</html>";
        
        $__internal_9a33975486bc5a592dcefa8b57aa4c5e83ffc9157964efb9da27d913cc9501e1->leave($__internal_9a33975486bc5a592dcefa8b57aa4c5e83ffc9157964efb9da27d913cc9501e1_prof);

        
        $__internal_8cc737dcd02872c0f3ebcdc6dd3dc448b18c151e55fcc2523632413aa0213cfc->leave($__internal_8cc737dcd02872c0f3ebcdc6dd3dc448b18c151e55fcc2523632413aa0213cfc_prof);

    }

    public function getTemplateName()
    {
        return "facture/facture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 46,  96 => 43,  87 => 40,  83 => 39,  79 => 38,  75 => 37,  71 => 35,  67 => 34,  50 => 24,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
    <h1 style=\"text-align: center\">Facture</h1>

    <p><span style=\"font-weight: bold\">Identifiant: </span> {{ user.username }} <br/> <span style=\"font-weight: bold\">Email: </span>{{ user.email }}<br/> <span style=\"font-weight: bold\">Date: </span>{{ date }}</p>

    <table>

        <tr>
            <th>Nom de produit</th>
            <th>quantite</th>
            <th>Prix unitaire</th>
            <th>Prix total</th>
        </tr>
        {% for produit in produits %}
        <tr>

            <td>{{ produit.nom }}</td>
            <td>{{ produit.quantite }}</td>
            <td>\${{ produit.prix_unite }}</td>
            <td>\${{ produit.total }}</td>
        </tr>
        {% endfor %}

    </table>
    <div style=\"margin-left: 85%\">
        <span style=\"font-weight: bold;\">Total: </span>\${{ total }}
    </div>

</body>
</html>", "facture/facture.html.twig", "/home/yas/Documents/symfony/projet_fin_etude/templates/facture/facture.html.twig");
    }
}
