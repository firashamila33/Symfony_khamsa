<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b34f6132a302dbc4e7232c48b3bb92cd18a2e7471a7dde2b061fcf5477679f50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48ae3b2025310f65e597dc534f58dac350d28d67d62e33d31d071db6162222d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48ae3b2025310f65e597dc534f58dac350d28d67d62e33d31d071db6162222d5->enter($__internal_48ae3b2025310f65e597dc534f58dac350d28d67d62e33d31d071db6162222d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_58d1293cb9a8de6663b77287e413840f325c69d0754036ea4d478475c721b7b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58d1293cb9a8de6663b77287e413840f325c69d0754036ea4d478475c721b7b3->enter($__internal_58d1293cb9a8de6663b77287e413840f325c69d0754036ea4d478475c721b7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48ae3b2025310f65e597dc534f58dac350d28d67d62e33d31d071db6162222d5->leave($__internal_48ae3b2025310f65e597dc534f58dac350d28d67d62e33d31d071db6162222d5_prof);

        
        $__internal_58d1293cb9a8de6663b77287e413840f325c69d0754036ea4d478475c721b7b3->leave($__internal_58d1293cb9a8de6663b77287e413840f325c69d0754036ea4d478475c721b7b3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ed7bf3d0bdd79ad4a198ba3acbb33b257d3add5c90f3cc1fdc35fc537bb97e28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed7bf3d0bdd79ad4a198ba3acbb33b257d3add5c90f3cc1fdc35fc537bb97e28->enter($__internal_ed7bf3d0bdd79ad4a198ba3acbb33b257d3add5c90f3cc1fdc35fc537bb97e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6b7230907799557d1e9260a9653c5944e12a4f54e2b8c6b693328d68cead038a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b7230907799557d1e9260a9653c5944e12a4f54e2b8c6b693328d68cead038a->enter($__internal_6b7230907799557d1e9260a9653c5944e12a4f54e2b8c6b693328d68cead038a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_6b7230907799557d1e9260a9653c5944e12a4f54e2b8c6b693328d68cead038a->leave($__internal_6b7230907799557d1e9260a9653c5944e12a4f54e2b8c6b693328d68cead038a_prof);

        
        $__internal_ed7bf3d0bdd79ad4a198ba3acbb33b257d3add5c90f3cc1fdc35fc537bb97e28->leave($__internal_ed7bf3d0bdd79ad4a198ba3acbb33b257d3add5c90f3cc1fdc35fc537bb97e28_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_1a083ae3e5b551113a21a71b112f0569ff1df3aa7afd4e0ab1fcde299723ff02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a083ae3e5b551113a21a71b112f0569ff1df3aa7afd4e0ab1fcde299723ff02->enter($__internal_1a083ae3e5b551113a21a71b112f0569ff1df3aa7afd4e0ab1fcde299723ff02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_da2d6054cb9a02df0b860b67d1ba5fa4ce8b3f8d17e65834385b08633e677247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da2d6054cb9a02df0b860b67d1ba5fa4ce8b3f8d17e65834385b08633e677247->enter($__internal_da2d6054cb9a02df0b860b67d1ba5fa4ce8b3f8d17e65834385b08633e677247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_da2d6054cb9a02df0b860b67d1ba5fa4ce8b3f8d17e65834385b08633e677247->leave($__internal_da2d6054cb9a02df0b860b67d1ba5fa4ce8b3f8d17e65834385b08633e677247_prof);

        
        $__internal_1a083ae3e5b551113a21a71b112f0569ff1df3aa7afd4e0ab1fcde299723ff02->leave($__internal_1a083ae3e5b551113a21a71b112f0569ff1df3aa7afd4e0ab1fcde299723ff02_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9dd34e3b9fa49e22b0e5d7e5db85d336448780456bc70264c54f22eb2ea0a1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9dd34e3b9fa49e22b0e5d7e5db85d336448780456bc70264c54f22eb2ea0a1a->enter($__internal_d9dd34e3b9fa49e22b0e5d7e5db85d336448780456bc70264c54f22eb2ea0a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a5e7ca3c56dea99950f8ab24e85ae46a2d51fa005cd400aa60484c2c60b48755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e7ca3c56dea99950f8ab24e85ae46a2d51fa005cd400aa60484c2c60b48755->enter($__internal_a5e7ca3c56dea99950f8ab24e85ae46a2d51fa005cd400aa60484c2c60b48755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_a5e7ca3c56dea99950f8ab24e85ae46a2d51fa005cd400aa60484c2c60b48755->leave($__internal_a5e7ca3c56dea99950f8ab24e85ae46a2d51fa005cd400aa60484c2c60b48755_prof);

        
        $__internal_d9dd34e3b9fa49e22b0e5d7e5db85d336448780456bc70264c54f22eb2ea0a1a->leave($__internal_d9dd34e3b9fa49e22b0e5d7e5db85d336448780456bc70264c54f22eb2ea0a1a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
