<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_d22e295c2758cf96e267b42f10277be6a7d3f5a205f2497b7b57248d04f87c42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
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
        $__internal_b45c97f4d9ac17b4190ccee79e957966b9068835dae0923b96b1fab399b8d94e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b45c97f4d9ac17b4190ccee79e957966b9068835dae0923b96b1fab399b8d94e->enter($__internal_b45c97f4d9ac17b4190ccee79e957966b9068835dae0923b96b1fab399b8d94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_221ab8eab3f1997c6fe38690c026654ccfdab09305a5fcbed333b2b83049f640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_221ab8eab3f1997c6fe38690c026654ccfdab09305a5fcbed333b2b83049f640->enter($__internal_221ab8eab3f1997c6fe38690c026654ccfdab09305a5fcbed333b2b83049f640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b45c97f4d9ac17b4190ccee79e957966b9068835dae0923b96b1fab399b8d94e->leave($__internal_b45c97f4d9ac17b4190ccee79e957966b9068835dae0923b96b1fab399b8d94e_prof);

        
        $__internal_221ab8eab3f1997c6fe38690c026654ccfdab09305a5fcbed333b2b83049f640->leave($__internal_221ab8eab3f1997c6fe38690c026654ccfdab09305a5fcbed333b2b83049f640_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_f49cacb71d82b3764a157e6ecf409d6ddc76398c343be8c2eed58a1899513d23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f49cacb71d82b3764a157e6ecf409d6ddc76398c343be8c2eed58a1899513d23->enter($__internal_f49cacb71d82b3764a157e6ecf409d6ddc76398c343be8c2eed58a1899513d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_b47ed87f6f58f41a9ff8ebbd40c7f97e093288fb95d9b1b8b6c4a7d3b0ed4c5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b47ed87f6f58f41a9ff8ebbd40c7f97e093288fb95d9b1b8b6c4a7d3b0ed4c5c->enter($__internal_b47ed87f6f58f41a9ff8ebbd40c7f97e093288fb95d9b1b8b6c4a7d3b0ed4c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_b47ed87f6f58f41a9ff8ebbd40c7f97e093288fb95d9b1b8b6c4a7d3b0ed4c5c->leave($__internal_b47ed87f6f58f41a9ff8ebbd40c7f97e093288fb95d9b1b8b6c4a7d3b0ed4c5c_prof);

        
        $__internal_f49cacb71d82b3764a157e6ecf409d6ddc76398c343be8c2eed58a1899513d23->leave($__internal_f49cacb71d82b3764a157e6ecf409d6ddc76398c343be8c2eed58a1899513d23_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4ea778a29de01f8918953894588158903ef250c04ef98452ba4326e2a43491a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ea778a29de01f8918953894588158903ef250c04ef98452ba4326e2a43491a8->enter($__internal_4ea778a29de01f8918953894588158903ef250c04ef98452ba4326e2a43491a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6b942165d0acad9b10b7a7b63fe5cc4604bede5716945ba406ec19445931f2ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b942165d0acad9b10b7a7b63fe5cc4604bede5716945ba406ec19445931f2ed->enter($__internal_6b942165d0acad9b10b7a7b63fe5cc4604bede5716945ba406ec19445931f2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_6b942165d0acad9b10b7a7b63fe5cc4604bede5716945ba406ec19445931f2ed->leave($__internal_6b942165d0acad9b10b7a7b63fe5cc4604bede5716945ba406ec19445931f2ed_prof);

        
        $__internal_4ea778a29de01f8918953894588158903ef250c04ef98452ba4326e2a43491a8->leave($__internal_4ea778a29de01f8918953894588158903ef250c04ef98452ba4326e2a43491a8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
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
", "@WebProfiler/Profiler/info.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
