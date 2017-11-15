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
        $__internal_24f7d38d084ebd15e0ca3d7ba916dc678e002f067e6da33e1160ff884f9a333d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24f7d38d084ebd15e0ca3d7ba916dc678e002f067e6da33e1160ff884f9a333d->enter($__internal_24f7d38d084ebd15e0ca3d7ba916dc678e002f067e6da33e1160ff884f9a333d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_59b1b242ff276be45e2aa787e6f270f76582ec044e28a318b2fd5ee1602b6630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b1b242ff276be45e2aa787e6f270f76582ec044e28a318b2fd5ee1602b6630->enter($__internal_59b1b242ff276be45e2aa787e6f270f76582ec044e28a318b2fd5ee1602b6630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24f7d38d084ebd15e0ca3d7ba916dc678e002f067e6da33e1160ff884f9a333d->leave($__internal_24f7d38d084ebd15e0ca3d7ba916dc678e002f067e6da33e1160ff884f9a333d_prof);

        
        $__internal_59b1b242ff276be45e2aa787e6f270f76582ec044e28a318b2fd5ee1602b6630->leave($__internal_59b1b242ff276be45e2aa787e6f270f76582ec044e28a318b2fd5ee1602b6630_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_90d47287d87cb77e1a4af8ccdd86088f5bf28f11ca2a60e7f915f8e91725ee1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90d47287d87cb77e1a4af8ccdd86088f5bf28f11ca2a60e7f915f8e91725ee1c->enter($__internal_90d47287d87cb77e1a4af8ccdd86088f5bf28f11ca2a60e7f915f8e91725ee1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f3e7dde76076fba3ea89415f847dad36f780499004d9d1cd427f58876a258107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e7dde76076fba3ea89415f847dad36f780499004d9d1cd427f58876a258107->enter($__internal_f3e7dde76076fba3ea89415f847dad36f780499004d9d1cd427f58876a258107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f3e7dde76076fba3ea89415f847dad36f780499004d9d1cd427f58876a258107->leave($__internal_f3e7dde76076fba3ea89415f847dad36f780499004d9d1cd427f58876a258107_prof);

        
        $__internal_90d47287d87cb77e1a4af8ccdd86088f5bf28f11ca2a60e7f915f8e91725ee1c->leave($__internal_90d47287d87cb77e1a4af8ccdd86088f5bf28f11ca2a60e7f915f8e91725ee1c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_32bfcead324db0fbfffaf7f330c338416c829860d37dd354ce247241299be57a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32bfcead324db0fbfffaf7f330c338416c829860d37dd354ce247241299be57a->enter($__internal_32bfcead324db0fbfffaf7f330c338416c829860d37dd354ce247241299be57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_50826e889f5d567f4e76a8b7aacb8340e02db6e8dadad909e65b062636212412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50826e889f5d567f4e76a8b7aacb8340e02db6e8dadad909e65b062636212412->enter($__internal_50826e889f5d567f4e76a8b7aacb8340e02db6e8dadad909e65b062636212412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_50826e889f5d567f4e76a8b7aacb8340e02db6e8dadad909e65b062636212412->leave($__internal_50826e889f5d567f4e76a8b7aacb8340e02db6e8dadad909e65b062636212412_prof);

        
        $__internal_32bfcead324db0fbfffaf7f330c338416c829860d37dd354ce247241299be57a->leave($__internal_32bfcead324db0fbfffaf7f330c338416c829860d37dd354ce247241299be57a_prof);

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
