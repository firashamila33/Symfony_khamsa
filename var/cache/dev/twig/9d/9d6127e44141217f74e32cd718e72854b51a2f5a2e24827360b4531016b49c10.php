<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_9169c28b4e4a63aba191f400ca8630d69cd3303923ae83200ba609f79b8d4183 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce694280de4da3dff43faac44ca9bf4fd58d317c2cecbbf5e7f7ff5958e06a6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce694280de4da3dff43faac44ca9bf4fd58d317c2cecbbf5e7f7ff5958e06a6a->enter($__internal_ce694280de4da3dff43faac44ca9bf4fd58d317c2cecbbf5e7f7ff5958e06a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_0fdea3dc83c763ca6cbbb461b8c7e04da5d755d758697d9d08cd9d4503bf7ae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fdea3dc83c763ca6cbbb461b8c7e04da5d755d758697d9d08cd9d4503bf7ae0->enter($__internal_0fdea3dc83c763ca6cbbb461b8c7e04da5d755d758697d9d08cd9d4503bf7ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce694280de4da3dff43faac44ca9bf4fd58d317c2cecbbf5e7f7ff5958e06a6a->leave($__internal_ce694280de4da3dff43faac44ca9bf4fd58d317c2cecbbf5e7f7ff5958e06a6a_prof);

        
        $__internal_0fdea3dc83c763ca6cbbb461b8c7e04da5d755d758697d9d08cd9d4503bf7ae0->leave($__internal_0fdea3dc83c763ca6cbbb461b8c7e04da5d755d758697d9d08cd9d4503bf7ae0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_58a54062a68367b0b3f42be2b969ab04bc6855603a55ce1cb2d1a9f545f36e87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58a54062a68367b0b3f42be2b969ab04bc6855603a55ce1cb2d1a9f545f36e87->enter($__internal_58a54062a68367b0b3f42be2b969ab04bc6855603a55ce1cb2d1a9f545f36e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_848c9f441a278f0e1b4d6266144601b92907c6cb5fb3df252df520e9a298a880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_848c9f441a278f0e1b4d6266144601b92907c6cb5fb3df252df520e9a298a880->enter($__internal_848c9f441a278f0e1b4d6266144601b92907c6cb5fb3df252df520e9a298a880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_848c9f441a278f0e1b4d6266144601b92907c6cb5fb3df252df520e9a298a880->leave($__internal_848c9f441a278f0e1b4d6266144601b92907c6cb5fb3df252df520e9a298a880_prof);

        
        $__internal_58a54062a68367b0b3f42be2b969ab04bc6855603a55ce1cb2d1a9f545f36e87->leave($__internal_58a54062a68367b0b3f42be2b969ab04bc6855603a55ce1cb2d1a9f545f36e87_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
