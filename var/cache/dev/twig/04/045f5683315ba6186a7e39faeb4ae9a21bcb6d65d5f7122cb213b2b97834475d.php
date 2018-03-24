<?php

/* forum/forum.html.twig */
class __TwigTemplate_dc96de40451385deb86cd6307b3346e178979fdb5f6c1168af5ba5b64368c158 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "forum/forum.html.twig", 1);
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
        $__internal_a15ef18b32c09b2f5f1540531e9a6342cd47dc30315240a69bb915f558855b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a15ef18b32c09b2f5f1540531e9a6342cd47dc30315240a69bb915f558855b05->enter($__internal_a15ef18b32c09b2f5f1540531e9a6342cd47dc30315240a69bb915f558855b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "forum/forum.html.twig"));

        $__internal_5a1fcc59189268f75da655a10ed685ba7fe71e91964fb63cce578c2a753a0718 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a1fcc59189268f75da655a10ed685ba7fe71e91964fb63cce578c2a753a0718->enter($__internal_5a1fcc59189268f75da655a10ed685ba7fe71e91964fb63cce578c2a753a0718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "forum/forum.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a15ef18b32c09b2f5f1540531e9a6342cd47dc30315240a69bb915f558855b05->leave($__internal_a15ef18b32c09b2f5f1540531e9a6342cd47dc30315240a69bb915f558855b05_prof);

        
        $__internal_5a1fcc59189268f75da655a10ed685ba7fe71e91964fb63cce578c2a753a0718->leave($__internal_5a1fcc59189268f75da655a10ed685ba7fe71e91964fb63cce578c2a753a0718_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1f90b8650b3061a6a80410cdea6f83458888490c398e311c947e57b51b91c8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1f90b8650b3061a6a80410cdea6f83458888490c398e311c947e57b51b91c8a->enter($__internal_c1f90b8650b3061a6a80410cdea6f83458888490c398e311c947e57b51b91c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1f0cfe4a6abbf5a9702526bf1b7f61b09e3d23ab0e6b57f1bc6f7028e3a01ce2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f0cfe4a6abbf5a9702526bf1b7f61b09e3d23ab0e6b57f1bc6f7028e3a01ce2->enter($__internal_1f0cfe4a6abbf5a9702526bf1b7f61b09e3d23ab0e6b57f1bc6f7028e3a01ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container bg-faded\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sujets"]) || array_key_exists("sujets", $context) ? $context["sujets"] : (function () { throw new Twig_Error_Runtime('Variable "sujets" does not exist.', 6, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sujet"]) {
            // line 7
            echo "        <br/>
        <div class=\"card\" style=\"\">
            <div class=\"card-block\">
                <h4 class=\"card-title\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sujet"], "titre", array()), "html", null, true);
            echo "</h4>
                <p class=\"card-text\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sujet"], "description", array()), "html", null, true);
            echo "</p>
                <div class=\"row\">
                    <div class=\"col-md-5\"> par: <b>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["sujet"], "user", array()), "username", array()), "html", null, true);
            echo " </b> le ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sujet"], "date", array()), "html", null, true);
            echo "</div>
                    <div class=\"col-md-5\"></div>
                    <div class=\"col-md-2\"><a href=\"/forum/consulter/";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sujet"], "slug", array()), "html", null, true);
            echo "\" class=\"btn btn-primary\" style=\"\">Voir le sujet</a></div>
                </div>

            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sujet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
        <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" target=\"_blank\">Open in new window</a>


    </div>

";
        
        $__internal_1f0cfe4a6abbf5a9702526bf1b7f61b09e3d23ab0e6b57f1bc6f7028e3a01ce2->leave($__internal_1f0cfe4a6abbf5a9702526bf1b7f61b09e3d23ab0e6b57f1bc6f7028e3a01ce2_prof);

        
        $__internal_c1f90b8650b3061a6a80410cdea6f83458888490c398e311c947e57b51b91c8a->leave($__internal_c1f90b8650b3061a6a80410cdea6f83458888490c398e311c947e57b51b91c8a_prof);

    }

    public function getTemplateName()
    {
        return "forum/forum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 22,  90 => 21,  78 => 15,  71 => 13,  66 => 11,  62 => 10,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}

    <div class=\"container bg-faded\">
        {% for sujet in sujets %}
        <br/>
        <div class=\"card\" style=\"\">
            <div class=\"card-block\">
                <h4 class=\"card-title\">{{ sujet.titre }}</h4>
                <p class=\"card-text\">{{ sujet.description }}</p>
                <div class=\"row\">
                    <div class=\"col-md-5\"> par: <b>{{ sujet.user.username }} </b> le {{ sujet.date }}</div>
                    <div class=\"col-md-5\"></div>
                    <div class=\"col-md-2\"><a href=\"/forum/consulter/{{ sujet.slug }}\" class=\"btn btn-primary\" style=\"\">Voir le sujet</a></div>
                </div>

            </div>
        </div>
        {% endfor %}

        <a href=\"{{ path('login') }}\" target=\"_blank\">Open in new window</a>


    </div>

{% endblock %}", "forum/forum.html.twig", "/home/yas/Documents/symfony/projet_fin_etude/templates/forum/forum.html.twig");
    }
}
