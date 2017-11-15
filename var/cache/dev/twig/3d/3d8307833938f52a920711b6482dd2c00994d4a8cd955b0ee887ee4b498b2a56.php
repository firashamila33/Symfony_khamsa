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
        $__internal_a8f825d4c210a14cb67dfb2d9d21f9dada6129eaf936672e26abc23d9e32d1bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8f825d4c210a14cb67dfb2d9d21f9dada6129eaf936672e26abc23d9e32d1bd->enter($__internal_a8f825d4c210a14cb67dfb2d9d21f9dada6129eaf936672e26abc23d9e32d1bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_5aeb201aa2546da046b70b90c02d197b6d750168bfd6ebb2fdef98ad6be97fb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aeb201aa2546da046b70b90c02d197b6d750168bfd6ebb2fdef98ad6be97fb2->enter($__internal_5aeb201aa2546da046b70b90c02d197b6d750168bfd6ebb2fdef98ad6be97fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8f825d4c210a14cb67dfb2d9d21f9dada6129eaf936672e26abc23d9e32d1bd->leave($__internal_a8f825d4c210a14cb67dfb2d9d21f9dada6129eaf936672e26abc23d9e32d1bd_prof);

        
        $__internal_5aeb201aa2546da046b70b90c02d197b6d750168bfd6ebb2fdef98ad6be97fb2->leave($__internal_5aeb201aa2546da046b70b90c02d197b6d750168bfd6ebb2fdef98ad6be97fb2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6853c0636966e9b5b02bc9a40421ebac9460ca08c4b61b4170ecdbdf286272dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6853c0636966e9b5b02bc9a40421ebac9460ca08c4b61b4170ecdbdf286272dc->enter($__internal_6853c0636966e9b5b02bc9a40421ebac9460ca08c4b61b4170ecdbdf286272dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_14369511f265c6581a3fec2c312756ad2768e65e4af929ffefbcf9c757c7c534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14369511f265c6581a3fec2c312756ad2768e65e4af929ffefbcf9c757c7c534->enter($__internal_14369511f265c6581a3fec2c312756ad2768e65e4af929ffefbcf9c757c7c534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_14369511f265c6581a3fec2c312756ad2768e65e4af929ffefbcf9c757c7c534->leave($__internal_14369511f265c6581a3fec2c312756ad2768e65e4af929ffefbcf9c757c7c534_prof);

        
        $__internal_6853c0636966e9b5b02bc9a40421ebac9460ca08c4b61b4170ecdbdf286272dc->leave($__internal_6853c0636966e9b5b02bc9a40421ebac9460ca08c4b61b4170ecdbdf286272dc_prof);

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
