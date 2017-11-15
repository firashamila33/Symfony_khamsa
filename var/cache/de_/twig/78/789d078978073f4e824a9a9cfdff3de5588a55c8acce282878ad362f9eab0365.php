<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_9999e561e97c7d82641790bb34f8bc4755632d88fa346b3928b7f70f606bf09e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_af89acb3ec1af0cb1bad9bfc86fd868fbef1e9a84829cb17ccaf5bd848264c17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af89acb3ec1af0cb1bad9bfc86fd868fbef1e9a84829cb17ccaf5bd848264c17->enter($__internal_af89acb3ec1af0cb1bad9bfc86fd868fbef1e9a84829cb17ccaf5bd848264c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_a13e95c19907556e01a3a70d141098b9e6af4d6865c495db2a5c9374f8e998a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a13e95c19907556e01a3a70d141098b9e6af4d6865c495db2a5c9374f8e998a2->enter($__internal_a13e95c19907556e01a3a70d141098b9e6af4d6865c495db2a5c9374f8e998a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af89acb3ec1af0cb1bad9bfc86fd868fbef1e9a84829cb17ccaf5bd848264c17->leave($__internal_af89acb3ec1af0cb1bad9bfc86fd868fbef1e9a84829cb17ccaf5bd848264c17_prof);

        
        $__internal_a13e95c19907556e01a3a70d141098b9e6af4d6865c495db2a5c9374f8e998a2->leave($__internal_a13e95c19907556e01a3a70d141098b9e6af4d6865c495db2a5c9374f8e998a2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_48815c19950d63cd228af0dff761e4b7a36537989423251b9fda3ae3e0c73aba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48815c19950d63cd228af0dff761e4b7a36537989423251b9fda3ae3e0c73aba->enter($__internal_48815c19950d63cd228af0dff761e4b7a36537989423251b9fda3ae3e0c73aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_374f69ad92279d364bac9fb6e9f1a928c067207b7812923867631900f2f49882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_374f69ad92279d364bac9fb6e9f1a928c067207b7812923867631900f2f49882->enter($__internal_374f69ad92279d364bac9fb6e9f1a928c067207b7812923867631900f2f49882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_374f69ad92279d364bac9fb6e9f1a928c067207b7812923867631900f2f49882->leave($__internal_374f69ad92279d364bac9fb6e9f1a928c067207b7812923867631900f2f49882_prof);

        
        $__internal_48815c19950d63cd228af0dff761e4b7a36537989423251b9fda3ae3e0c73aba->leave($__internal_48815c19950d63cd228af0dff761e4b7a36537989423251b9fda3ae3e0c73aba_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_15a273bf28a1cdfc23ec88b74774ab965db0112b483613993745a339a0797502 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15a273bf28a1cdfc23ec88b74774ab965db0112b483613993745a339a0797502->enter($__internal_15a273bf28a1cdfc23ec88b74774ab965db0112b483613993745a339a0797502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a3126bcbb9d05e0202e43371b114215c547cf2245114b2faff90f8b80401792f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3126bcbb9d05e0202e43371b114215c547cf2245114b2faff90f8b80401792f->enter($__internal_a3126bcbb9d05e0202e43371b114215c547cf2245114b2faff90f8b80401792f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a3126bcbb9d05e0202e43371b114215c547cf2245114b2faff90f8b80401792f->leave($__internal_a3126bcbb9d05e0202e43371b114215c547cf2245114b2faff90f8b80401792f_prof);

        
        $__internal_15a273bf28a1cdfc23ec88b74774ab965db0112b483613993745a339a0797502->leave($__internal_15a273bf28a1cdfc23ec88b74774ab965db0112b483613993745a339a0797502_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_325e9b3c774e11e8ed09cc03e22561a9a79e94255fb01f1a616d460f8890d378 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_325e9b3c774e11e8ed09cc03e22561a9a79e94255fb01f1a616d460f8890d378->enter($__internal_325e9b3c774e11e8ed09cc03e22561a9a79e94255fb01f1a616d460f8890d378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a50967a90a00ba81bcb13720df351d71b503beed53fdf62887ca84dfea4cc1c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a50967a90a00ba81bcb13720df351d71b503beed53fdf62887ca84dfea4cc1c6->enter($__internal_a50967a90a00ba81bcb13720df351d71b503beed53fdf62887ca84dfea4cc1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a50967a90a00ba81bcb13720df351d71b503beed53fdf62887ca84dfea4cc1c6->leave($__internal_a50967a90a00ba81bcb13720df351d71b503beed53fdf62887ca84dfea4cc1c6_prof);

        
        $__internal_325e9b3c774e11e8ed09cc03e22561a9a79e94255fb01f1a616d460f8890d378->leave($__internal_325e9b3c774e11e8ed09cc03e22561a9a79e94255fb01f1a616d460f8890d378_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
