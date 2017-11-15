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
        $__internal_b1e4e9684387c807a4d22342077ceec69e69dd5cae8ad3a826fde360095d072e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1e4e9684387c807a4d22342077ceec69e69dd5cae8ad3a826fde360095d072e->enter($__internal_b1e4e9684387c807a4d22342077ceec69e69dd5cae8ad3a826fde360095d072e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_584d3ae9b61091df67a48980843aec3c131e84d91ad9ec6564b4c61d4fa4103e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_584d3ae9b61091df67a48980843aec3c131e84d91ad9ec6564b4c61d4fa4103e->enter($__internal_584d3ae9b61091df67a48980843aec3c131e84d91ad9ec6564b4c61d4fa4103e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1e4e9684387c807a4d22342077ceec69e69dd5cae8ad3a826fde360095d072e->leave($__internal_b1e4e9684387c807a4d22342077ceec69e69dd5cae8ad3a826fde360095d072e_prof);

        
        $__internal_584d3ae9b61091df67a48980843aec3c131e84d91ad9ec6564b4c61d4fa4103e->leave($__internal_584d3ae9b61091df67a48980843aec3c131e84d91ad9ec6564b4c61d4fa4103e_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_35b26c1aeda5ec092427d9b9b2c1c9f97c9c9999763bc26178982391ef4e14c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35b26c1aeda5ec092427d9b9b2c1c9f97c9c9999763bc26178982391ef4e14c1->enter($__internal_35b26c1aeda5ec092427d9b9b2c1c9f97c9c9999763bc26178982391ef4e14c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_2942ef030e309e8044afee99a2313fa917497446c108fb853ec6ef780bbe159a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2942ef030e309e8044afee99a2313fa917497446c108fb853ec6ef780bbe159a->enter($__internal_2942ef030e309e8044afee99a2313fa917497446c108fb853ec6ef780bbe159a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_2942ef030e309e8044afee99a2313fa917497446c108fb853ec6ef780bbe159a->leave($__internal_2942ef030e309e8044afee99a2313fa917497446c108fb853ec6ef780bbe159a_prof);

        
        $__internal_35b26c1aeda5ec092427d9b9b2c1c9f97c9c9999763bc26178982391ef4e14c1->leave($__internal_35b26c1aeda5ec092427d9b9b2c1c9f97c9c9999763bc26178982391ef4e14c1_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_172413bcd0d632339deff06f3818f2ecb9027d33ec494a0e763f5522f0b9e650 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_172413bcd0d632339deff06f3818f2ecb9027d33ec494a0e763f5522f0b9e650->enter($__internal_172413bcd0d632339deff06f3818f2ecb9027d33ec494a0e763f5522f0b9e650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6912f3ec9553207880929105ec57447541137af5d79520b0b6d11f86360dc32f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6912f3ec9553207880929105ec57447541137af5d79520b0b6d11f86360dc32f->enter($__internal_6912f3ec9553207880929105ec57447541137af5d79520b0b6d11f86360dc32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_6912f3ec9553207880929105ec57447541137af5d79520b0b6d11f86360dc32f->leave($__internal_6912f3ec9553207880929105ec57447541137af5d79520b0b6d11f86360dc32f_prof);

        
        $__internal_172413bcd0d632339deff06f3818f2ecb9027d33ec494a0e763f5522f0b9e650->leave($__internal_172413bcd0d632339deff06f3818f2ecb9027d33ec494a0e763f5522f0b9e650_prof);

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
