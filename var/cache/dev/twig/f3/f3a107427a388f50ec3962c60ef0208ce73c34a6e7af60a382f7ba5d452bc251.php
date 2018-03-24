<?php

/* security/login.html.twig */
class __TwigTemplate_8fe92dc69599051cc2a94ad311e0d7f6c7623c6a3e62a837cb76d1c66071aa05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
        $__internal_3d0d994a6167c22848b1eac8feae18ba53bcd3c9d4b16c17103d40970f3bc0b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d0d994a6167c22848b1eac8feae18ba53bcd3c9d4b16c17103d40970f3bc0b2->enter($__internal_3d0d994a6167c22848b1eac8feae18ba53bcd3c9d4b16c17103d40970f3bc0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_b0b08ac8ce24d0494aa0bd7e428c3f0ec04fda78c0442093eb38f7b4b601b326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0b08ac8ce24d0494aa0bd7e428c3f0ec04fda78c0442093eb38f7b4b601b326->enter($__internal_b0b08ac8ce24d0494aa0bd7e428c3f0ec04fda78c0442093eb38f7b4b601b326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d0d994a6167c22848b1eac8feae18ba53bcd3c9d4b16c17103d40970f3bc0b2->leave($__internal_3d0d994a6167c22848b1eac8feae18ba53bcd3c9d4b16c17103d40970f3bc0b2_prof);

        
        $__internal_b0b08ac8ce24d0494aa0bd7e428c3f0ec04fda78c0442093eb38f7b4b601b326->leave($__internal_b0b08ac8ce24d0494aa0bd7e428c3f0ec04fda78c0442093eb38f7b4b601b326_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_789780262b997c6133d0dbf8477c1da7ad9ab195a3e8b88efffa66e18b70264e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_789780262b997c6133d0dbf8477c1da7ad9ab195a3e8b88efffa66e18b70264e->enter($__internal_789780262b997c6133d0dbf8477c1da7ad9ab195a3e8b88efffa66e18b70264e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c9ba9826e0f59368c5c561ea64c12cb8e97e3db1954327630a422c3edac12148 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9ba9826e0f59368c5c561ea64c12cb8e97e3db1954327630a422c3edac12148->enter($__internal_c9ba9826e0f59368c5c561ea64c12cb8e97e3db1954327630a422c3edac12148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "


    <form action=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-1\"></div>
            <div class=\"col-md-6 col-sm-10 connection-container\">
                <h1 class=\"connection-place\">Connexion</h1>
                <label class=\"conn-lab\" for=\"username\">Identifiant:</label>
                <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 12, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />

                <br/>
                <label class=\"conn-lab\" for=\"password\">Mot de passe:</label>
                <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" />

                <span style=\"color: red\">";
        // line 18
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 18, $this->getSourceContext()); })())) {
            // line 19
            echo "                <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 19, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 19, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 21
        echo "                </span>
                <br/>
                <br/>

                ";
        // line 30
        echo "
                <button class=\"form-control conn-login\" type=\"submit\">login</button>
            </div>
        </div>
    </form>

";
        
        $__internal_c9ba9826e0f59368c5c561ea64c12cb8e97e3db1954327630a422c3edac12148->leave($__internal_c9ba9826e0f59368c5c561ea64c12cb8e97e3db1954327630a422c3edac12148_prof);

        
        $__internal_789780262b997c6133d0dbf8477c1da7ad9ab195a3e8b88efffa66e18b70264e->leave($__internal_789780262b997c6133d0dbf8477c1da7ad9ab195a3e8b88efffa66e18b70264e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 30,  80 => 21,  74 => 19,  72 => 18,  63 => 12,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block body %}



    <form action=\"{{ path('login') }}\" method=\"post\">
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-1\"></div>
            <div class=\"col-md-6 col-sm-10 connection-container\">
                <h1 class=\"connection-place\">Connexion</h1>
                <label class=\"conn-lab\" for=\"username\">Identifiant:</label>
                <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

                <br/>
                <label class=\"conn-lab\" for=\"password\">Mot de passe:</label>
                <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" />

                <span style=\"color: red\">{% if error %}
                <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                    {% endif %}
                </span>
                <br/>
                <br/>

                {#
                    If you want to control the URL the user
                    is redirected to on success (more details below)
                    <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
                #}

                <button class=\"form-control conn-login\" type=\"submit\">login</button>
            </div>
        </div>
    </form>

{% endblock %}", "security/login.html.twig", "/home/yas/Documents/symfony/projet_fin_etude/templates/security/login.html.twig");
    }
}
