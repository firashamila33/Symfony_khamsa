<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_e965ccd0d2068a933877998fbf0b3764e67c6816941340f78771894ea42780ab extends Twig_Template
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
        $__internal_e3015cf5984b3dec146e9d425fe195d8044bb5e851bc12ccbc7d54eec02365dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3015cf5984b3dec146e9d425fe195d8044bb5e851bc12ccbc7d54eec02365dc->enter($__internal_e3015cf5984b3dec146e9d425fe195d8044bb5e851bc12ccbc7d54eec02365dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_2dad6d50419f17dc9483fa85a6b180d74ad4b1ee013f912b6982e59422237291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dad6d50419f17dc9483fa85a6b180d74ad4b1ee013f912b6982e59422237291->enter($__internal_2dad6d50419f17dc9483fa85a6b180d74ad4b1ee013f912b6982e59422237291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3015cf5984b3dec146e9d425fe195d8044bb5e851bc12ccbc7d54eec02365dc->leave($__internal_e3015cf5984b3dec146e9d425fe195d8044bb5e851bc12ccbc7d54eec02365dc_prof);

        
        $__internal_2dad6d50419f17dc9483fa85a6b180d74ad4b1ee013f912b6982e59422237291->leave($__internal_2dad6d50419f17dc9483fa85a6b180d74ad4b1ee013f912b6982e59422237291_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_03904d4e363586f7ffe49da95cdd6008a31acde8beecdd9b502291c7f0ec1c62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03904d4e363586f7ffe49da95cdd6008a31acde8beecdd9b502291c7f0ec1c62->enter($__internal_03904d4e363586f7ffe49da95cdd6008a31acde8beecdd9b502291c7f0ec1c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_27033fbf13aba21bfdd0c380d49de3a647196019082b3f3b7a6b8f306a305749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27033fbf13aba21bfdd0c380d49de3a647196019082b3f3b7a6b8f306a305749->enter($__internal_27033fbf13aba21bfdd0c380d49de3a647196019082b3f3b7a6b8f306a305749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_27033fbf13aba21bfdd0c380d49de3a647196019082b3f3b7a6b8f306a305749->leave($__internal_27033fbf13aba21bfdd0c380d49de3a647196019082b3f3b7a6b8f306a305749_prof);

        
        $__internal_03904d4e363586f7ffe49da95cdd6008a31acde8beecdd9b502291c7f0ec1c62->leave($__internal_03904d4e363586f7ffe49da95cdd6008a31acde8beecdd9b502291c7f0ec1c62_prof);

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
", "@FOSUser/Registration/confirmed.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
