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
        $__internal_30e4409733c3381e2472331d7820281e38eb78f443a5f281174164088d35c5e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30e4409733c3381e2472331d7820281e38eb78f443a5f281174164088d35c5e5->enter($__internal_30e4409733c3381e2472331d7820281e38eb78f443a5f281174164088d35c5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_3a741216433df7ac8a119dfbc9f127cb7208fde42de829e931320856676afc8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a741216433df7ac8a119dfbc9f127cb7208fde42de829e931320856676afc8b->enter($__internal_3a741216433df7ac8a119dfbc9f127cb7208fde42de829e931320856676afc8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30e4409733c3381e2472331d7820281e38eb78f443a5f281174164088d35c5e5->leave($__internal_30e4409733c3381e2472331d7820281e38eb78f443a5f281174164088d35c5e5_prof);

        
        $__internal_3a741216433df7ac8a119dfbc9f127cb7208fde42de829e931320856676afc8b->leave($__internal_3a741216433df7ac8a119dfbc9f127cb7208fde42de829e931320856676afc8b_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_2505153dbf8cdfa3c7f4e4600f9c3fbc4f73dd79e2b0238b57ed9b35d53c6b07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2505153dbf8cdfa3c7f4e4600f9c3fbc4f73dd79e2b0238b57ed9b35d53c6b07->enter($__internal_2505153dbf8cdfa3c7f4e4600f9c3fbc4f73dd79e2b0238b57ed9b35d53c6b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_488f8d3eab35236f57d8c826143476a8ff182f66d2ce9412188abfa0f98944d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_488f8d3eab35236f57d8c826143476a8ff182f66d2ce9412188abfa0f98944d3->enter($__internal_488f8d3eab35236f57d8c826143476a8ff182f66d2ce9412188abfa0f98944d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_488f8d3eab35236f57d8c826143476a8ff182f66d2ce9412188abfa0f98944d3->leave($__internal_488f8d3eab35236f57d8c826143476a8ff182f66d2ce9412188abfa0f98944d3_prof);

        
        $__internal_2505153dbf8cdfa3c7f4e4600f9c3fbc4f73dd79e2b0238b57ed9b35d53c6b07->leave($__internal_2505153dbf8cdfa3c7f4e4600f9c3fbc4f73dd79e2b0238b57ed9b35d53c6b07_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4c4bcce99250ca0b3d45d0779b2c0bd8cc1c84e149baae09d1eeceee60636edd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c4bcce99250ca0b3d45d0779b2c0bd8cc1c84e149baae09d1eeceee60636edd->enter($__internal_4c4bcce99250ca0b3d45d0779b2c0bd8cc1c84e149baae09d1eeceee60636edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1336a9e1ac269fe82d1d7d01ef2a0448b3d1c8d20ce5adfa36e15b049f144754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1336a9e1ac269fe82d1d7d01ef2a0448b3d1c8d20ce5adfa36e15b049f144754->enter($__internal_1336a9e1ac269fe82d1d7d01ef2a0448b3d1c8d20ce5adfa36e15b049f144754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_1336a9e1ac269fe82d1d7d01ef2a0448b3d1c8d20ce5adfa36e15b049f144754->leave($__internal_1336a9e1ac269fe82d1d7d01ef2a0448b3d1c8d20ce5adfa36e15b049f144754_prof);

        
        $__internal_4c4bcce99250ca0b3d45d0779b2c0bd8cc1c84e149baae09d1eeceee60636edd->leave($__internal_4c4bcce99250ca0b3d45d0779b2c0bd8cc1c84e149baae09d1eeceee60636edd_prof);

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
