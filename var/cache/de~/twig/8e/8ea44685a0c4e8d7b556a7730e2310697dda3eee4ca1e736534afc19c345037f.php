<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_1dbba51ded70b2b65f0164c20bc79eabf9536dd18ccef5721b5e87215fcb9907 extends Twig_Template
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
        $__internal_50b4863703110bc607a297f30ffbf02036038f15a65a27c5969fc32087ed42eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50b4863703110bc607a297f30ffbf02036038f15a65a27c5969fc32087ed42eb->enter($__internal_50b4863703110bc607a297f30ffbf02036038f15a65a27c5969fc32087ed42eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_1ccd3fbe1fcf0d5792e808e10dbc7e0306b3ba5754adc5688549f8f5bc0f695a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ccd3fbe1fcf0d5792e808e10dbc7e0306b3ba5754adc5688549f8f5bc0f695a->enter($__internal_1ccd3fbe1fcf0d5792e808e10dbc7e0306b3ba5754adc5688549f8f5bc0f695a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50b4863703110bc607a297f30ffbf02036038f15a65a27c5969fc32087ed42eb->leave($__internal_50b4863703110bc607a297f30ffbf02036038f15a65a27c5969fc32087ed42eb_prof);

        
        $__internal_1ccd3fbe1fcf0d5792e808e10dbc7e0306b3ba5754adc5688549f8f5bc0f695a->leave($__internal_1ccd3fbe1fcf0d5792e808e10dbc7e0306b3ba5754adc5688549f8f5bc0f695a_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_48a13811762d276df176600922784ba4f57bf8c36c4511d1703344c6b464cf9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48a13811762d276df176600922784ba4f57bf8c36c4511d1703344c6b464cf9f->enter($__internal_48a13811762d276df176600922784ba4f57bf8c36c4511d1703344c6b464cf9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_309c230a178b0fb3f5d41ad259cae1491f790753cf8b935956472b7c8d819ce1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_309c230a178b0fb3f5d41ad259cae1491f790753cf8b935956472b7c8d819ce1->enter($__internal_309c230a178b0fb3f5d41ad259cae1491f790753cf8b935956472b7c8d819ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_309c230a178b0fb3f5d41ad259cae1491f790753cf8b935956472b7c8d819ce1->leave($__internal_309c230a178b0fb3f5d41ad259cae1491f790753cf8b935956472b7c8d819ce1_prof);

        
        $__internal_48a13811762d276df176600922784ba4f57bf8c36c4511d1703344c6b464cf9f->leave($__internal_48a13811762d276df176600922784ba4f57bf8c36c4511d1703344c6b464cf9f_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6fee7a04fa0abf47d345c4e7cfc721b38e4ed3b118d79cbf8f88d8f8bad63870 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fee7a04fa0abf47d345c4e7cfc721b38e4ed3b118d79cbf8f88d8f8bad63870->enter($__internal_6fee7a04fa0abf47d345c4e7cfc721b38e4ed3b118d79cbf8f88d8f8bad63870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3055550a395a324b0c422f43c6d660ae5572cfee86d99ac996e4fa3c6f9583ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3055550a395a324b0c422f43c6d660ae5572cfee86d99ac996e4fa3c6f9583ee->enter($__internal_3055550a395a324b0c422f43c6d660ae5572cfee86d99ac996e4fa3c6f9583ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_3055550a395a324b0c422f43c6d660ae5572cfee86d99ac996e4fa3c6f9583ee->leave($__internal_3055550a395a324b0c422f43c6d660ae5572cfee86d99ac996e4fa3c6f9583ee_prof);

        
        $__internal_6fee7a04fa0abf47d345c4e7cfc721b38e4ed3b118d79cbf8f88d8f8bad63870->leave($__internal_6fee7a04fa0abf47d345c4e7cfc721b38e4ed3b118d79cbf8f88d8f8bad63870_prof);

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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
