<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b94cbf7701a9ddbec739aaa0a4aa465c9b0e1a0464606c118985069f7a08e0e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bebbf24dd00e89087226ebd84efc36b79d98f9e9480abed7c2e98c46e3f16191 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bebbf24dd00e89087226ebd84efc36b79d98f9e9480abed7c2e98c46e3f16191->enter($__internal_bebbf24dd00e89087226ebd84efc36b79d98f9e9480abed7c2e98c46e3f16191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d0f4d2bc79dd673d2bedce3418174d408e32c76f71653f3ed9cd52cfdcc8cf13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0f4d2bc79dd673d2bedce3418174d408e32c76f71653f3ed9cd52cfdcc8cf13->enter($__internal_d0f4d2bc79dd673d2bedce3418174d408e32c76f71653f3ed9cd52cfdcc8cf13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bebbf24dd00e89087226ebd84efc36b79d98f9e9480abed7c2e98c46e3f16191->leave($__internal_bebbf24dd00e89087226ebd84efc36b79d98f9e9480abed7c2e98c46e3f16191_prof);

        
        $__internal_d0f4d2bc79dd673d2bedce3418174d408e32c76f71653f3ed9cd52cfdcc8cf13->leave($__internal_d0f4d2bc79dd673d2bedce3418174d408e32c76f71653f3ed9cd52cfdcc8cf13_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9f67f1e24588289643e2c533d4af739560e3be1cfa73cfd2e57a373924c7580e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f67f1e24588289643e2c533d4af739560e3be1cfa73cfd2e57a373924c7580e->enter($__internal_9f67f1e24588289643e2c533d4af739560e3be1cfa73cfd2e57a373924c7580e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b35c1da200bcfffb948d5e49de0f94dbe857307e9a7e5b237959cb4b6865af18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b35c1da200bcfffb948d5e49de0f94dbe857307e9a7e5b237959cb4b6865af18->enter($__internal_b35c1da200bcfffb948d5e49de0f94dbe857307e9a7e5b237959cb4b6865af18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b35c1da200bcfffb948d5e49de0f94dbe857307e9a7e5b237959cb4b6865af18->leave($__internal_b35c1da200bcfffb948d5e49de0f94dbe857307e9a7e5b237959cb4b6865af18_prof);

        
        $__internal_9f67f1e24588289643e2c533d4af739560e3be1cfa73cfd2e57a373924c7580e->leave($__internal_9f67f1e24588289643e2c533d4af739560e3be1cfa73cfd2e57a373924c7580e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3ef7c3ca2af764286bc22e5f15ede6e7d30c32087beb07984f99a214489554e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ef7c3ca2af764286bc22e5f15ede6e7d30c32087beb07984f99a214489554e9->enter($__internal_3ef7c3ca2af764286bc22e5f15ede6e7d30c32087beb07984f99a214489554e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_37851a752513657ad7720e0ef365a0bd662f7d2426746ef75f542a22633b3411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37851a752513657ad7720e0ef365a0bd662f7d2426746ef75f542a22633b3411->enter($__internal_37851a752513657ad7720e0ef365a0bd662f7d2426746ef75f542a22633b3411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_37851a752513657ad7720e0ef365a0bd662f7d2426746ef75f542a22633b3411->leave($__internal_37851a752513657ad7720e0ef365a0bd662f7d2426746ef75f542a22633b3411_prof);

        
        $__internal_3ef7c3ca2af764286bc22e5f15ede6e7d30c32087beb07984f99a214489554e9->leave($__internal_3ef7c3ca2af764286bc22e5f15ede6e7d30c32087beb07984f99a214489554e9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_36dfb3864657932e9b20211e1f0ffb41397ea7c45fe8a44867926dd07b49ab25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36dfb3864657932e9b20211e1f0ffb41397ea7c45fe8a44867926dd07b49ab25->enter($__internal_36dfb3864657932e9b20211e1f0ffb41397ea7c45fe8a44867926dd07b49ab25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9566d28196e0a4f2c8ef9b305ed32301060056e7c90dcd13f354b3d22cbd8655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9566d28196e0a4f2c8ef9b305ed32301060056e7c90dcd13f354b3d22cbd8655->enter($__internal_9566d28196e0a4f2c8ef9b305ed32301060056e7c90dcd13f354b3d22cbd8655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9566d28196e0a4f2c8ef9b305ed32301060056e7c90dcd13f354b3d22cbd8655->leave($__internal_9566d28196e0a4f2c8ef9b305ed32301060056e7c90dcd13f354b3d22cbd8655_prof);

        
        $__internal_36dfb3864657932e9b20211e1f0ffb41397ea7c45fe8a44867926dd07b49ab25->leave($__internal_36dfb3864657932e9b20211e1f0ffb41397ea7c45fe8a44867926dd07b49ab25_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
