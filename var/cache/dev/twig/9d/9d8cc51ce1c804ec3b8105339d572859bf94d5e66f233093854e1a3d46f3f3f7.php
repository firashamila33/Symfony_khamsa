<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ecbe7b828e68b6ac66dd8055421093c8040335ec4d16a68059162eba96164dd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2b3359767fc5deee943d10013cd73442713c13c85ff868a797c492df982238c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2b3359767fc5deee943d10013cd73442713c13c85ff868a797c492df982238c->enter($__internal_c2b3359767fc5deee943d10013cd73442713c13c85ff868a797c492df982238c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_d16e88aa9bd3898e8dc95493a6f7c5803e5317026f85c13a470ecb33f5b8d21c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d16e88aa9bd3898e8dc95493a6f7c5803e5317026f85c13a470ecb33f5b8d21c->enter($__internal_d16e88aa9bd3898e8dc95493a6f7c5803e5317026f85c13a470ecb33f5b8d21c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2b3359767fc5deee943d10013cd73442713c13c85ff868a797c492df982238c->leave($__internal_c2b3359767fc5deee943d10013cd73442713c13c85ff868a797c492df982238c_prof);

        
        $__internal_d16e88aa9bd3898e8dc95493a6f7c5803e5317026f85c13a470ecb33f5b8d21c->leave($__internal_d16e88aa9bd3898e8dc95493a6f7c5803e5317026f85c13a470ecb33f5b8d21c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9009fb89656469ac80d128fe2cc3c68c60a47975ad024c595a57b0b634d2b4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9009fb89656469ac80d128fe2cc3c68c60a47975ad024c595a57b0b634d2b4d->enter($__internal_c9009fb89656469ac80d128fe2cc3c68c60a47975ad024c595a57b0b634d2b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_49535e50acb35b6d75b99fa8cc9cfd989dfb600d9cfb36eecf8fb54505b0a54e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49535e50acb35b6d75b99fa8cc9cfd989dfb600d9cfb36eecf8fb54505b0a54e->enter($__internal_49535e50acb35b6d75b99fa8cc9cfd989dfb600d9cfb36eecf8fb54505b0a54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_49535e50acb35b6d75b99fa8cc9cfd989dfb600d9cfb36eecf8fb54505b0a54e->leave($__internal_49535e50acb35b6d75b99fa8cc9cfd989dfb600d9cfb36eecf8fb54505b0a54e_prof);

        
        $__internal_c9009fb89656469ac80d128fe2cc3c68c60a47975ad024c595a57b0b634d2b4d->leave($__internal_c9009fb89656469ac80d128fe2cc3c68c60a47975ad024c595a57b0b634d2b4d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea313df34438e7df30d0e476ec8abd7ab072e0234e39a20e118e780ba611ad41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea313df34438e7df30d0e476ec8abd7ab072e0234e39a20e118e780ba611ad41->enter($__internal_ea313df34438e7df30d0e476ec8abd7ab072e0234e39a20e118e780ba611ad41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_993a39cbdcd608bf0d5d95ef91e7bae120dbae4b9e9ddee03742183f655b65d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_993a39cbdcd608bf0d5d95ef91e7bae120dbae4b9e9ddee03742183f655b65d7->enter($__internal_993a39cbdcd608bf0d5d95ef91e7bae120dbae4b9e9ddee03742183f655b65d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_993a39cbdcd608bf0d5d95ef91e7bae120dbae4b9e9ddee03742183f655b65d7->leave($__internal_993a39cbdcd608bf0d5d95ef91e7bae120dbae4b9e9ddee03742183f655b65d7_prof);

        
        $__internal_ea313df34438e7df30d0e476ec8abd7ab072e0234e39a20e118e780ba611ad41->leave($__internal_ea313df34438e7df30d0e476ec8abd7ab072e0234e39a20e118e780ba611ad41_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
