<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_b4e2d60e55be02fc778d18c3fd6b526036a0312e7b4370a0b39f11c33fc4a0b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_626e67ab0899a557cd06d2446f68b0dd83358d79e4a1a449c6a1623f351f4e23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_626e67ab0899a557cd06d2446f68b0dd83358d79e4a1a449c6a1623f351f4e23->enter($__internal_626e67ab0899a557cd06d2446f68b0dd83358d79e4a1a449c6a1623f351f4e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_7fe21cbd4e2f691198b9f4a5910981526140dde5cffe7a372344cc0befbd230c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fe21cbd4e2f691198b9f4a5910981526140dde5cffe7a372344cc0befbd230c->enter($__internal_7fe21cbd4e2f691198b9f4a5910981526140dde5cffe7a372344cc0befbd230c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_626e67ab0899a557cd06d2446f68b0dd83358d79e4a1a449c6a1623f351f4e23->leave($__internal_626e67ab0899a557cd06d2446f68b0dd83358d79e4a1a449c6a1623f351f4e23_prof);

        
        $__internal_7fe21cbd4e2f691198b9f4a5910981526140dde5cffe7a372344cc0befbd230c->leave($__internal_7fe21cbd4e2f691198b9f4a5910981526140dde5cffe7a372344cc0befbd230c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3230c926e7b54695a7b2ae8ba25964ef4f539db968dcea3e1614333dece83dff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3230c926e7b54695a7b2ae8ba25964ef4f539db968dcea3e1614333dece83dff->enter($__internal_3230c926e7b54695a7b2ae8ba25964ef4f539db968dcea3e1614333dece83dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_257854a42752726b735a2303ee07f2949467c3bcadedfa9f90f098d519deab72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_257854a42752726b735a2303ee07f2949467c3bcadedfa9f90f098d519deab72->enter($__internal_257854a42752726b735a2303ee07f2949467c3bcadedfa9f90f098d519deab72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_257854a42752726b735a2303ee07f2949467c3bcadedfa9f90f098d519deab72->leave($__internal_257854a42752726b735a2303ee07f2949467c3bcadedfa9f90f098d519deab72_prof);

        
        $__internal_3230c926e7b54695a7b2ae8ba25964ef4f539db968dcea3e1614333dece83dff->leave($__internal_3230c926e7b54695a7b2ae8ba25964ef4f539db968dcea3e1614333dece83dff_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_cab87493a1826cff87e51e4a23b99aa3b634ea222146df831b58428cdd6b7c1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cab87493a1826cff87e51e4a23b99aa3b634ea222146df831b58428cdd6b7c1c->enter($__internal_cab87493a1826cff87e51e4a23b99aa3b634ea222146df831b58428cdd6b7c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aee0b515eca530e7aed6d6180dede2a623b641f9156ad4c210fbe3d6ba1757dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aee0b515eca530e7aed6d6180dede2a623b641f9156ad4c210fbe3d6ba1757dc->enter($__internal_aee0b515eca530e7aed6d6180dede2a623b641f9156ad4c210fbe3d6ba1757dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_aee0b515eca530e7aed6d6180dede2a623b641f9156ad4c210fbe3d6ba1757dc->leave($__internal_aee0b515eca530e7aed6d6180dede2a623b641f9156ad4c210fbe3d6ba1757dc_prof);

        
        $__internal_cab87493a1826cff87e51e4a23b99aa3b634ea222146df831b58428cdd6b7c1c->leave($__internal_cab87493a1826cff87e51e4a23b99aa3b634ea222146df831b58428cdd6b7c1c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
