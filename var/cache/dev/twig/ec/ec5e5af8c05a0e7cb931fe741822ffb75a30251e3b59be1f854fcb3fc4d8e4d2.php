<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_f9f2d8642ca428b80d9ea39f1b0de12e79596217ca76aab44a01e3cc360abcd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66839ee431932e0e09d7c7d72f6d46bbb37d46d6e0a71b33269e094eb54c3fb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66839ee431932e0e09d7c7d72f6d46bbb37d46d6e0a71b33269e094eb54c3fb9->enter($__internal_66839ee431932e0e09d7c7d72f6d46bbb37d46d6e0a71b33269e094eb54c3fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_2a87ec0a1d694f25cd4b575bcd5af06ec146820d8bdee1d77bb034951a673a7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a87ec0a1d694f25cd4b575bcd5af06ec146820d8bdee1d77bb034951a673a7a->enter($__internal_2a87ec0a1d694f25cd4b575bcd5af06ec146820d8bdee1d77bb034951a673a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66839ee431932e0e09d7c7d72f6d46bbb37d46d6e0a71b33269e094eb54c3fb9->leave($__internal_66839ee431932e0e09d7c7d72f6d46bbb37d46d6e0a71b33269e094eb54c3fb9_prof);

        
        $__internal_2a87ec0a1d694f25cd4b575bcd5af06ec146820d8bdee1d77bb034951a673a7a->leave($__internal_2a87ec0a1d694f25cd4b575bcd5af06ec146820d8bdee1d77bb034951a673a7a_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_7dc28e6cf336841471172556676e129aecca91d7993c6bb6702f4579f65b9e88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dc28e6cf336841471172556676e129aecca91d7993c6bb6702f4579f65b9e88->enter($__internal_7dc28e6cf336841471172556676e129aecca91d7993c6bb6702f4579f65b9e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_9d9d526815d7410967a1715be862af5eb6c9df96b7a9133aa8cda14c9987aaa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d9d526815d7410967a1715be862af5eb6c9df96b7a9133aa8cda14c9987aaa9->enter($__internal_9d9d526815d7410967a1715be862af5eb6c9df96b7a9133aa8cda14c9987aaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_9d9d526815d7410967a1715be862af5eb6c9df96b7a9133aa8cda14c9987aaa9->leave($__internal_9d9d526815d7410967a1715be862af5eb6c9df96b7a9133aa8cda14c9987aaa9_prof);

        
        $__internal_7dc28e6cf336841471172556676e129aecca91d7993c6bb6702f4579f65b9e88->leave($__internal_7dc28e6cf336841471172556676e129aecca91d7993c6bb6702f4579f65b9e88_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2ed0af3e627d20303629025b9564439af67f7cb1c6c0a007f7d977b7ba3bbd07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ed0af3e627d20303629025b9564439af67f7cb1c6c0a007f7d977b7ba3bbd07->enter($__internal_2ed0af3e627d20303629025b9564439af67f7cb1c6c0a007f7d977b7ba3bbd07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_03f263a0aed3fe4d1d2a78311aa03823d5d7668dc7d2e56a5660ed873b088a58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03f263a0aed3fe4d1d2a78311aa03823d5d7668dc7d2e56a5660ed873b088a58->enter($__internal_03f263a0aed3fe4d1d2a78311aa03823d5d7668dc7d2e56a5660ed873b088a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_03f263a0aed3fe4d1d2a78311aa03823d5d7668dc7d2e56a5660ed873b088a58->leave($__internal_03f263a0aed3fe4d1d2a78311aa03823d5d7668dc7d2e56a5660ed873b088a58_prof);

        
        $__internal_2ed0af3e627d20303629025b9564439af67f7cb1c6c0a007f7d977b7ba3bbd07->leave($__internal_2ed0af3e627d20303629025b9564439af67f7cb1c6c0a007f7d977b7ba3bbd07_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
