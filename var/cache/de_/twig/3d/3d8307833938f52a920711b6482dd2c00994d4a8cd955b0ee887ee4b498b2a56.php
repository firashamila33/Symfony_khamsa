<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_3c2ae9dcff54c1037b8c0154f96c7eed1df6ce4b90b793587949987c61f1132a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_cd0faf606a429e23e0fce2db9fb61d4d69242f1e904e4946bc11092bd69c6a38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd0faf606a429e23e0fce2db9fb61d4d69242f1e904e4946bc11092bd69c6a38->enter($__internal_cd0faf606a429e23e0fce2db9fb61d4d69242f1e904e4946bc11092bd69c6a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_a9fffa78304a920f4d19ef0e5c47c5f27db11401ba39e80c88113bb1cea82d67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9fffa78304a920f4d19ef0e5c47c5f27db11401ba39e80c88113bb1cea82d67->enter($__internal_a9fffa78304a920f4d19ef0e5c47c5f27db11401ba39e80c88113bb1cea82d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd0faf606a429e23e0fce2db9fb61d4d69242f1e904e4946bc11092bd69c6a38->leave($__internal_cd0faf606a429e23e0fce2db9fb61d4d69242f1e904e4946bc11092bd69c6a38_prof);

        
        $__internal_a9fffa78304a920f4d19ef0e5c47c5f27db11401ba39e80c88113bb1cea82d67->leave($__internal_a9fffa78304a920f4d19ef0e5c47c5f27db11401ba39e80c88113bb1cea82d67_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3c3351c996322ccbdea899fafbaf2005e5648143a81f1a1fb7141c2ac556a68e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c3351c996322ccbdea899fafbaf2005e5648143a81f1a1fb7141c2ac556a68e->enter($__internal_3c3351c996322ccbdea899fafbaf2005e5648143a81f1a1fb7141c2ac556a68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7a95dcfd653cfc5390f11bdec3414a5ccf2d39b334be5ffb2dedc748c37f02af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a95dcfd653cfc5390f11bdec3414a5ccf2d39b334be5ffb2dedc748c37f02af->enter($__internal_7a95dcfd653cfc5390f11bdec3414a5ccf2d39b334be5ffb2dedc748c37f02af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_7a95dcfd653cfc5390f11bdec3414a5ccf2d39b334be5ffb2dedc748c37f02af->leave($__internal_7a95dcfd653cfc5390f11bdec3414a5ccf2d39b334be5ffb2dedc748c37f02af_prof);

        
        $__internal_3c3351c996322ccbdea899fafbaf2005e5648143a81f1a1fb7141c2ac556a68e->leave($__internal_3c3351c996322ccbdea899fafbaf2005e5648143a81f1a1fb7141c2ac556a68e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
