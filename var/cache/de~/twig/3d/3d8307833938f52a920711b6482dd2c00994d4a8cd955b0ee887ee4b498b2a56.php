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
        $__internal_6c32debb8267c6900cf48c22c3d132c1bcc647ff183998a6bc9de08c0bb0b0e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c32debb8267c6900cf48c22c3d132c1bcc647ff183998a6bc9de08c0bb0b0e7->enter($__internal_6c32debb8267c6900cf48c22c3d132c1bcc647ff183998a6bc9de08c0bb0b0e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_41b63b846e8e409824e1b2b795bbe5cd88db8bd88dd4b18b3e38571c0e256568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41b63b846e8e409824e1b2b795bbe5cd88db8bd88dd4b18b3e38571c0e256568->enter($__internal_41b63b846e8e409824e1b2b795bbe5cd88db8bd88dd4b18b3e38571c0e256568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c32debb8267c6900cf48c22c3d132c1bcc647ff183998a6bc9de08c0bb0b0e7->leave($__internal_6c32debb8267c6900cf48c22c3d132c1bcc647ff183998a6bc9de08c0bb0b0e7_prof);

        
        $__internal_41b63b846e8e409824e1b2b795bbe5cd88db8bd88dd4b18b3e38571c0e256568->leave($__internal_41b63b846e8e409824e1b2b795bbe5cd88db8bd88dd4b18b3e38571c0e256568_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_45e0bda0dac27a67ec148f34328f37c170574c58a0d9500a8038b16606973696 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45e0bda0dac27a67ec148f34328f37c170574c58a0d9500a8038b16606973696->enter($__internal_45e0bda0dac27a67ec148f34328f37c170574c58a0d9500a8038b16606973696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bf40e420c05635f79eedfd3449960fb6d10d0f532c39670bb07e52079eab0c5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf40e420c05635f79eedfd3449960fb6d10d0f532c39670bb07e52079eab0c5d->enter($__internal_bf40e420c05635f79eedfd3449960fb6d10d0f532c39670bb07e52079eab0c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_bf40e420c05635f79eedfd3449960fb6d10d0f532c39670bb07e52079eab0c5d->leave($__internal_bf40e420c05635f79eedfd3449960fb6d10d0f532c39670bb07e52079eab0c5d_prof);

        
        $__internal_45e0bda0dac27a67ec148f34328f37c170574c58a0d9500a8038b16606973696->leave($__internal_45e0bda0dac27a67ec148f34328f37c170574c58a0d9500a8038b16606973696_prof);

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
