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
        $__internal_db34f3a368c3050c92273f62f34f6e9fb5dd20cdf665b963eb3de978ec75f639 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db34f3a368c3050c92273f62f34f6e9fb5dd20cdf665b963eb3de978ec75f639->enter($__internal_db34f3a368c3050c92273f62f34f6e9fb5dd20cdf665b963eb3de978ec75f639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_9fc0f0b4575b775965842e2936afd042dd1cf3111351e6fe32d941238d9aa47b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc0f0b4575b775965842e2936afd042dd1cf3111351e6fe32d941238d9aa47b->enter($__internal_9fc0f0b4575b775965842e2936afd042dd1cf3111351e6fe32d941238d9aa47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db34f3a368c3050c92273f62f34f6e9fb5dd20cdf665b963eb3de978ec75f639->leave($__internal_db34f3a368c3050c92273f62f34f6e9fb5dd20cdf665b963eb3de978ec75f639_prof);

        
        $__internal_9fc0f0b4575b775965842e2936afd042dd1cf3111351e6fe32d941238d9aa47b->leave($__internal_9fc0f0b4575b775965842e2936afd042dd1cf3111351e6fe32d941238d9aa47b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_30a943dcf22342a3b44d4af58e284d8ca709cad2ae3b9c3e249c2dd2348ee835 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30a943dcf22342a3b44d4af58e284d8ca709cad2ae3b9c3e249c2dd2348ee835->enter($__internal_30a943dcf22342a3b44d4af58e284d8ca709cad2ae3b9c3e249c2dd2348ee835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_796be3d3ef66e71242e1f17102f2230c63f834465282fc83ddea5f93b807a616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_796be3d3ef66e71242e1f17102f2230c63f834465282fc83ddea5f93b807a616->enter($__internal_796be3d3ef66e71242e1f17102f2230c63f834465282fc83ddea5f93b807a616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_796be3d3ef66e71242e1f17102f2230c63f834465282fc83ddea5f93b807a616->leave($__internal_796be3d3ef66e71242e1f17102f2230c63f834465282fc83ddea5f93b807a616_prof);

        
        $__internal_30a943dcf22342a3b44d4af58e284d8ca709cad2ae3b9c3e249c2dd2348ee835->leave($__internal_30a943dcf22342a3b44d4af58e284d8ca709cad2ae3b9c3e249c2dd2348ee835_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_34eda0998c9be61b2aaf11813090d0882b50e433c0d16ac5911d8b9450d866ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34eda0998c9be61b2aaf11813090d0882b50e433c0d16ac5911d8b9450d866ef->enter($__internal_34eda0998c9be61b2aaf11813090d0882b50e433c0d16ac5911d8b9450d866ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1b7bc8933e3ad93989c4dd78479ec1bef2fe755b34d1657b6ac4b3b3929c84f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b7bc8933e3ad93989c4dd78479ec1bef2fe755b34d1657b6ac4b3b3929c84f3->enter($__internal_1b7bc8933e3ad93989c4dd78479ec1bef2fe755b34d1657b6ac4b3b3929c84f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1b7bc8933e3ad93989c4dd78479ec1bef2fe755b34d1657b6ac4b3b3929c84f3->leave($__internal_1b7bc8933e3ad93989c4dd78479ec1bef2fe755b34d1657b6ac4b3b3929c84f3_prof);

        
        $__internal_34eda0998c9be61b2aaf11813090d0882b50e433c0d16ac5911d8b9450d866ef->leave($__internal_34eda0998c9be61b2aaf11813090d0882b50e433c0d16ac5911d8b9450d866ef_prof);

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
