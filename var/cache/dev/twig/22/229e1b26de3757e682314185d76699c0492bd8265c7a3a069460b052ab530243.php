<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_67a3b3d2f18b98fc95bd7ad9bf721dc5da9c603c0673fad56cc4bc6eb9175635 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34ea0f320936eaae9b4fac5d1d67b2e296f7e7b196f694245b2b4247f3eb31bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34ea0f320936eaae9b4fac5d1d67b2e296f7e7b196f694245b2b4247f3eb31bb->enter($__internal_34ea0f320936eaae9b4fac5d1d67b2e296f7e7b196f694245b2b4247f3eb31bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_bd8ebe50d81b8677535a33103ad567016a6a21ed6d1cc4168bd4b7abf437eec0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd8ebe50d81b8677535a33103ad567016a6a21ed6d1cc4168bd4b7abf437eec0->enter($__internal_bd8ebe50d81b8677535a33103ad567016a6a21ed6d1cc4168bd4b7abf437eec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34ea0f320936eaae9b4fac5d1d67b2e296f7e7b196f694245b2b4247f3eb31bb->leave($__internal_34ea0f320936eaae9b4fac5d1d67b2e296f7e7b196f694245b2b4247f3eb31bb_prof);

        
        $__internal_bd8ebe50d81b8677535a33103ad567016a6a21ed6d1cc4168bd4b7abf437eec0->leave($__internal_bd8ebe50d81b8677535a33103ad567016a6a21ed6d1cc4168bd4b7abf437eec0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1fe11e00d47ca0c629919785ee59decf6ada4e507c482e7a0abcb94734e34e93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fe11e00d47ca0c629919785ee59decf6ada4e507c482e7a0abcb94734e34e93->enter($__internal_1fe11e00d47ca0c629919785ee59decf6ada4e507c482e7a0abcb94734e34e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9b9577c5e284432e2fd056507c7dae7a53c007df841f77dd68d1064fcd9bb437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b9577c5e284432e2fd056507c7dae7a53c007df841f77dd68d1064fcd9bb437->enter($__internal_9b9577c5e284432e2fd056507c7dae7a53c007df841f77dd68d1064fcd9bb437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_9b9577c5e284432e2fd056507c7dae7a53c007df841f77dd68d1064fcd9bb437->leave($__internal_9b9577c5e284432e2fd056507c7dae7a53c007df841f77dd68d1064fcd9bb437_prof);

        
        $__internal_1fe11e00d47ca0c629919785ee59decf6ada4e507c482e7a0abcb94734e34e93->leave($__internal_1fe11e00d47ca0c629919785ee59decf6ada4e507c482e7a0abcb94734e34e93_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9641912391616a74b9b063dcf46ebc0a31677a523f3c0ac507094052689e6e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9641912391616a74b9b063dcf46ebc0a31677a523f3c0ac507094052689e6e5->enter($__internal_b9641912391616a74b9b063dcf46ebc0a31677a523f3c0ac507094052689e6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6876a5a1861a27722e2621a80b03064be26258d401a5298719e9dacb26e0b8aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6876a5a1861a27722e2621a80b03064be26258d401a5298719e9dacb26e0b8aa->enter($__internal_6876a5a1861a27722e2621a80b03064be26258d401a5298719e9dacb26e0b8aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_6876a5a1861a27722e2621a80b03064be26258d401a5298719e9dacb26e0b8aa->leave($__internal_6876a5a1861a27722e2621a80b03064be26258d401a5298719e9dacb26e0b8aa_prof);

        
        $__internal_b9641912391616a74b9b063dcf46ebc0a31677a523f3c0ac507094052689e6e5->leave($__internal_b9641912391616a74b9b063dcf46ebc0a31677a523f3c0ac507094052689e6e5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
