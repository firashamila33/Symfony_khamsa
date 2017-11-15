<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_fe4127636ff3437d49fb74bcb18710e782bb94e031d351582a33ca45f397e730 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_28455d98bced7efb88e062657dc439e7712d483094c0afd007d6b7bd962a3e9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28455d98bced7efb88e062657dc439e7712d483094c0afd007d6b7bd962a3e9d->enter($__internal_28455d98bced7efb88e062657dc439e7712d483094c0afd007d6b7bd962a3e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_7dc6566d1b3fc82c3181cbba7b61997808c364f03d1fd6226e33f157eef5fd1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dc6566d1b3fc82c3181cbba7b61997808c364f03d1fd6226e33f157eef5fd1e->enter($__internal_7dc6566d1b3fc82c3181cbba7b61997808c364f03d1fd6226e33f157eef5fd1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28455d98bced7efb88e062657dc439e7712d483094c0afd007d6b7bd962a3e9d->leave($__internal_28455d98bced7efb88e062657dc439e7712d483094c0afd007d6b7bd962a3e9d_prof);

        
        $__internal_7dc6566d1b3fc82c3181cbba7b61997808c364f03d1fd6226e33f157eef5fd1e->leave($__internal_7dc6566d1b3fc82c3181cbba7b61997808c364f03d1fd6226e33f157eef5fd1e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5b6473a0b6c83eaff424f98c4a94f8d6fd03d79119e043daf901fe471b629753 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b6473a0b6c83eaff424f98c4a94f8d6fd03d79119e043daf901fe471b629753->enter($__internal_5b6473a0b6c83eaff424f98c4a94f8d6fd03d79119e043daf901fe471b629753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a10335ca81321af333131075ebba900d14cd3368a7497587d1134f6707c56d56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a10335ca81321af333131075ebba900d14cd3368a7497587d1134f6707c56d56->enter($__internal_a10335ca81321af333131075ebba900d14cd3368a7497587d1134f6707c56d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_a10335ca81321af333131075ebba900d14cd3368a7497587d1134f6707c56d56->leave($__internal_a10335ca81321af333131075ebba900d14cd3368a7497587d1134f6707c56d56_prof);

        
        $__internal_5b6473a0b6c83eaff424f98c4a94f8d6fd03d79119e043daf901fe471b629753->leave($__internal_5b6473a0b6c83eaff424f98c4a94f8d6fd03d79119e043daf901fe471b629753_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
