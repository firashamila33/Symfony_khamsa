<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_33f9ac9c995cf9cfe5fcdbb632f028965fb8ef0d4dc9c47bd5f1743bf7b628a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5343003e4e4a17e39a6de9a4244a968f324d251c6ab2495fb4b933525c2ac9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5343003e4e4a17e39a6de9a4244a968f324d251c6ab2495fb4b933525c2ac9c->enter($__internal_d5343003e4e4a17e39a6de9a4244a968f324d251c6ab2495fb4b933525c2ac9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_ef0dff391684dab86085f93bba222a9cdbe14103daff1e7febcdfe6b92c8a354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef0dff391684dab86085f93bba222a9cdbe14103daff1e7febcdfe6b92c8a354->enter($__internal_ef0dff391684dab86085f93bba222a9cdbe14103daff1e7febcdfe6b92c8a354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5343003e4e4a17e39a6de9a4244a968f324d251c6ab2495fb4b933525c2ac9c->leave($__internal_d5343003e4e4a17e39a6de9a4244a968f324d251c6ab2495fb4b933525c2ac9c_prof);

        
        $__internal_ef0dff391684dab86085f93bba222a9cdbe14103daff1e7febcdfe6b92c8a354->leave($__internal_ef0dff391684dab86085f93bba222a9cdbe14103daff1e7febcdfe6b92c8a354_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_39f8554cdcecde5a20332a4e5c21388402d8c47ef74b33a95b0c70af7c6dd7d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39f8554cdcecde5a20332a4e5c21388402d8c47ef74b33a95b0c70af7c6dd7d1->enter($__internal_39f8554cdcecde5a20332a4e5c21388402d8c47ef74b33a95b0c70af7c6dd7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3c5b102b945c0f3279b1798db4ddf91e0a93dff8fb932cee2c0541568421f0ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c5b102b945c0f3279b1798db4ddf91e0a93dff8fb932cee2c0541568421f0ca->enter($__internal_3c5b102b945c0f3279b1798db4ddf91e0a93dff8fb932cee2c0541568421f0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_3c5b102b945c0f3279b1798db4ddf91e0a93dff8fb932cee2c0541568421f0ca->leave($__internal_3c5b102b945c0f3279b1798db4ddf91e0a93dff8fb932cee2c0541568421f0ca_prof);

        
        $__internal_39f8554cdcecde5a20332a4e5c21388402d8c47ef74b33a95b0c70af7c6dd7d1->leave($__internal_39f8554cdcecde5a20332a4e5c21388402d8c47ef74b33a95b0c70af7c6dd7d1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
