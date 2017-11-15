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
        $__internal_1d4b441ccb8ed9c96f16b4d212d08f70b7070204cc7c356bce78edd8fa2bb91d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d4b441ccb8ed9c96f16b4d212d08f70b7070204cc7c356bce78edd8fa2bb91d->enter($__internal_1d4b441ccb8ed9c96f16b4d212d08f70b7070204cc7c356bce78edd8fa2bb91d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_719617aa523440dabf8a0a6d14e2108763acb42c90ab90948641001b30d8b87a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_719617aa523440dabf8a0a6d14e2108763acb42c90ab90948641001b30d8b87a->enter($__internal_719617aa523440dabf8a0a6d14e2108763acb42c90ab90948641001b30d8b87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d4b441ccb8ed9c96f16b4d212d08f70b7070204cc7c356bce78edd8fa2bb91d->leave($__internal_1d4b441ccb8ed9c96f16b4d212d08f70b7070204cc7c356bce78edd8fa2bb91d_prof);

        
        $__internal_719617aa523440dabf8a0a6d14e2108763acb42c90ab90948641001b30d8b87a->leave($__internal_719617aa523440dabf8a0a6d14e2108763acb42c90ab90948641001b30d8b87a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_712511e594ce19c0884f99d8032cf42993297e2040d117bcc6c7f74fafa2a160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_712511e594ce19c0884f99d8032cf42993297e2040d117bcc6c7f74fafa2a160->enter($__internal_712511e594ce19c0884f99d8032cf42993297e2040d117bcc6c7f74fafa2a160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_71b7d0c35157751ecad988726d4a687094bb2ee24b6556ec259fcc5eba63a192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71b7d0c35157751ecad988726d4a687094bb2ee24b6556ec259fcc5eba63a192->enter($__internal_71b7d0c35157751ecad988726d4a687094bb2ee24b6556ec259fcc5eba63a192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_71b7d0c35157751ecad988726d4a687094bb2ee24b6556ec259fcc5eba63a192->leave($__internal_71b7d0c35157751ecad988726d4a687094bb2ee24b6556ec259fcc5eba63a192_prof);

        
        $__internal_712511e594ce19c0884f99d8032cf42993297e2040d117bcc6c7f74fafa2a160->leave($__internal_712511e594ce19c0884f99d8032cf42993297e2040d117bcc6c7f74fafa2a160_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4bfa6b5a17873a50d89d7b37b77bf102860ebd3644ac38974b4cf236df17fb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4bfa6b5a17873a50d89d7b37b77bf102860ebd3644ac38974b4cf236df17fb5->enter($__internal_a4bfa6b5a17873a50d89d7b37b77bf102860ebd3644ac38974b4cf236df17fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b68e47f28af892bb8ddafbd1aed7a0993f18c4facda87accfe05d76abde2ff4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b68e47f28af892bb8ddafbd1aed7a0993f18c4facda87accfe05d76abde2ff4d->enter($__internal_b68e47f28af892bb8ddafbd1aed7a0993f18c4facda87accfe05d76abde2ff4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b68e47f28af892bb8ddafbd1aed7a0993f18c4facda87accfe05d76abde2ff4d->leave($__internal_b68e47f28af892bb8ddafbd1aed7a0993f18c4facda87accfe05d76abde2ff4d_prof);

        
        $__internal_a4bfa6b5a17873a50d89d7b37b77bf102860ebd3644ac38974b4cf236df17fb5->leave($__internal_a4bfa6b5a17873a50d89d7b37b77bf102860ebd3644ac38974b4cf236df17fb5_prof);

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
