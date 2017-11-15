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
        $__internal_62b809c6007d409c75e4ca0e57896b6ab9760c2575b63d9f93b045478f8052dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62b809c6007d409c75e4ca0e57896b6ab9760c2575b63d9f93b045478f8052dd->enter($__internal_62b809c6007d409c75e4ca0e57896b6ab9760c2575b63d9f93b045478f8052dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_2fc1fc69278a0dbd82eb2a34ee033c368515d4c839c659dbb338c991f69ae288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fc1fc69278a0dbd82eb2a34ee033c368515d4c839c659dbb338c991f69ae288->enter($__internal_2fc1fc69278a0dbd82eb2a34ee033c368515d4c839c659dbb338c991f69ae288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62b809c6007d409c75e4ca0e57896b6ab9760c2575b63d9f93b045478f8052dd->leave($__internal_62b809c6007d409c75e4ca0e57896b6ab9760c2575b63d9f93b045478f8052dd_prof);

        
        $__internal_2fc1fc69278a0dbd82eb2a34ee033c368515d4c839c659dbb338c991f69ae288->leave($__internal_2fc1fc69278a0dbd82eb2a34ee033c368515d4c839c659dbb338c991f69ae288_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_0b285a3308dab83c9be78c23163d6c174d452f28cfd82cbe3c58cdfdaf9b6018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b285a3308dab83c9be78c23163d6c174d452f28cfd82cbe3c58cdfdaf9b6018->enter($__internal_0b285a3308dab83c9be78c23163d6c174d452f28cfd82cbe3c58cdfdaf9b6018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_165333157f13a25cbc1b108ef9cab21d7e33db743053744991099c294b82b0a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_165333157f13a25cbc1b108ef9cab21d7e33db743053744991099c294b82b0a1->enter($__internal_165333157f13a25cbc1b108ef9cab21d7e33db743053744991099c294b82b0a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_165333157f13a25cbc1b108ef9cab21d7e33db743053744991099c294b82b0a1->leave($__internal_165333157f13a25cbc1b108ef9cab21d7e33db743053744991099c294b82b0a1_prof);

        
        $__internal_0b285a3308dab83c9be78c23163d6c174d452f28cfd82cbe3c58cdfdaf9b6018->leave($__internal_0b285a3308dab83c9be78c23163d6c174d452f28cfd82cbe3c58cdfdaf9b6018_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bc76ebba3b355e91016ccf6382adc9cc4f649a619b962bb3c885a63dfa161b9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc76ebba3b355e91016ccf6382adc9cc4f649a619b962bb3c885a63dfa161b9a->enter($__internal_bc76ebba3b355e91016ccf6382adc9cc4f649a619b962bb3c885a63dfa161b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_177dde379e5280bb90d68fa4a98e6820f54100ecfd624175631d8c14d028aed9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_177dde379e5280bb90d68fa4a98e6820f54100ecfd624175631d8c14d028aed9->enter($__internal_177dde379e5280bb90d68fa4a98e6820f54100ecfd624175631d8c14d028aed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_177dde379e5280bb90d68fa4a98e6820f54100ecfd624175631d8c14d028aed9->leave($__internal_177dde379e5280bb90d68fa4a98e6820f54100ecfd624175631d8c14d028aed9_prof);

        
        $__internal_bc76ebba3b355e91016ccf6382adc9cc4f649a619b962bb3c885a63dfa161b9a->leave($__internal_bc76ebba3b355e91016ccf6382adc9cc4f649a619b962bb3c885a63dfa161b9a_prof);

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
