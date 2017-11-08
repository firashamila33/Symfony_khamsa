<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_df1eea32ac45c26714fde6c35f0d10bf76799cffda4dd231db62c984af10f748 extends Twig_Template
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
        $__internal_463f0c4425b5a2bceaa31dbf3c283f36f68200527dc1af5b3f8ea7545645b344 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_463f0c4425b5a2bceaa31dbf3c283f36f68200527dc1af5b3f8ea7545645b344->enter($__internal_463f0c4425b5a2bceaa31dbf3c283f36f68200527dc1af5b3f8ea7545645b344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_53c9d05aa6e2fe85e3086990281befe33993661e02fe466f926679dc37830fc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53c9d05aa6e2fe85e3086990281befe33993661e02fe466f926679dc37830fc0->enter($__internal_53c9d05aa6e2fe85e3086990281befe33993661e02fe466f926679dc37830fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_463f0c4425b5a2bceaa31dbf3c283f36f68200527dc1af5b3f8ea7545645b344->leave($__internal_463f0c4425b5a2bceaa31dbf3c283f36f68200527dc1af5b3f8ea7545645b344_prof);

        
        $__internal_53c9d05aa6e2fe85e3086990281befe33993661e02fe466f926679dc37830fc0->leave($__internal_53c9d05aa6e2fe85e3086990281befe33993661e02fe466f926679dc37830fc0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dab8aa8eac81810970a4f3657f491e407562fb82b43f53fccfd0d15d97ce9b32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dab8aa8eac81810970a4f3657f491e407562fb82b43f53fccfd0d15d97ce9b32->enter($__internal_dab8aa8eac81810970a4f3657f491e407562fb82b43f53fccfd0d15d97ce9b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_380953190a9b08b2af1e05c66b3d471fe80daaf8f73527f5af2ec87443da326d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_380953190a9b08b2af1e05c66b3d471fe80daaf8f73527f5af2ec87443da326d->enter($__internal_380953190a9b08b2af1e05c66b3d471fe80daaf8f73527f5af2ec87443da326d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_380953190a9b08b2af1e05c66b3d471fe80daaf8f73527f5af2ec87443da326d->leave($__internal_380953190a9b08b2af1e05c66b3d471fe80daaf8f73527f5af2ec87443da326d_prof);

        
        $__internal_dab8aa8eac81810970a4f3657f491e407562fb82b43f53fccfd0d15d97ce9b32->leave($__internal_dab8aa8eac81810970a4f3657f491e407562fb82b43f53fccfd0d15d97ce9b32_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_12445c194303ba8787650e369093631d6deba6c249edec8177999273519ec9f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12445c194303ba8787650e369093631d6deba6c249edec8177999273519ec9f3->enter($__internal_12445c194303ba8787650e369093631d6deba6c249edec8177999273519ec9f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6160cf1d39dac05e3be2b2dfa309e064100943437a5abdee0cb56395f9df2f0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6160cf1d39dac05e3be2b2dfa309e064100943437a5abdee0cb56395f9df2f0b->enter($__internal_6160cf1d39dac05e3be2b2dfa309e064100943437a5abdee0cb56395f9df2f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6160cf1d39dac05e3be2b2dfa309e064100943437a5abdee0cb56395f9df2f0b->leave($__internal_6160cf1d39dac05e3be2b2dfa309e064100943437a5abdee0cb56395f9df2f0b_prof);

        
        $__internal_12445c194303ba8787650e369093631d6deba6c249edec8177999273519ec9f3->leave($__internal_12445c194303ba8787650e369093631d6deba6c249edec8177999273519ec9f3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_816acc5b9fb409c78255c958e27c8a91f741ee69fd7d2a2e9ec1ea7e352c7bca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_816acc5b9fb409c78255c958e27c8a91f741ee69fd7d2a2e9ec1ea7e352c7bca->enter($__internal_816acc5b9fb409c78255c958e27c8a91f741ee69fd7d2a2e9ec1ea7e352c7bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_697f51c05094d2a7a3a7f18352e6524fb7ae681452d0b3808ddd350a05dac404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_697f51c05094d2a7a3a7f18352e6524fb7ae681452d0b3808ddd350a05dac404->enter($__internal_697f51c05094d2a7a3a7f18352e6524fb7ae681452d0b3808ddd350a05dac404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_697f51c05094d2a7a3a7f18352e6524fb7ae681452d0b3808ddd350a05dac404->leave($__internal_697f51c05094d2a7a3a7f18352e6524fb7ae681452d0b3808ddd350a05dac404_prof);

        
        $__internal_816acc5b9fb409c78255c958e27c8a91f741ee69fd7d2a2e9ec1ea7e352c7bca->leave($__internal_816acc5b9fb409c78255c958e27c8a91f741ee69fd7d2a2e9ec1ea7e352c7bca_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
