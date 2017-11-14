<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_f8c4b2763be726c2eb842e12ff386b8bc4bed3e7e5b42f30f21405f885508ed1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_bf680ed9d1d3548945d0325d8356ec9d8a21a7cd719b075353aaf40d9f3c0a75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf680ed9d1d3548945d0325d8356ec9d8a21a7cd719b075353aaf40d9f3c0a75->enter($__internal_bf680ed9d1d3548945d0325d8356ec9d8a21a7cd719b075353aaf40d9f3c0a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_9ba07a84edc224ba6676b30d21dde6eaf378ddd5fddcacf6ac547c1fa9d659cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ba07a84edc224ba6676b30d21dde6eaf378ddd5fddcacf6ac547c1fa9d659cf->enter($__internal_9ba07a84edc224ba6676b30d21dde6eaf378ddd5fddcacf6ac547c1fa9d659cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf680ed9d1d3548945d0325d8356ec9d8a21a7cd719b075353aaf40d9f3c0a75->leave($__internal_bf680ed9d1d3548945d0325d8356ec9d8a21a7cd719b075353aaf40d9f3c0a75_prof);

        
        $__internal_9ba07a84edc224ba6676b30d21dde6eaf378ddd5fddcacf6ac547c1fa9d659cf->leave($__internal_9ba07a84edc224ba6676b30d21dde6eaf378ddd5fddcacf6ac547c1fa9d659cf_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a62f77511f8270dc5bb8a2ea8128e5005d48f75fb7db9d2c0fe5a7ef28a07e54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a62f77511f8270dc5bb8a2ea8128e5005d48f75fb7db9d2c0fe5a7ef28a07e54->enter($__internal_a62f77511f8270dc5bb8a2ea8128e5005d48f75fb7db9d2c0fe5a7ef28a07e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_41dfc225d33f8e250d981e376f5044be1a64ee07f868286fbd3eb287deb37f4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41dfc225d33f8e250d981e376f5044be1a64ee07f868286fbd3eb287deb37f4c->enter($__internal_41dfc225d33f8e250d981e376f5044be1a64ee07f868286fbd3eb287deb37f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_41dfc225d33f8e250d981e376f5044be1a64ee07f868286fbd3eb287deb37f4c->leave($__internal_41dfc225d33f8e250d981e376f5044be1a64ee07f868286fbd3eb287deb37f4c_prof);

        
        $__internal_a62f77511f8270dc5bb8a2ea8128e5005d48f75fb7db9d2c0fe5a7ef28a07e54->leave($__internal_a62f77511f8270dc5bb8a2ea8128e5005d48f75fb7db9d2c0fe5a7ef28a07e54_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
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
", "FOSUserBundle:Registration:confirmed.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
