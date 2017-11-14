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
        $__internal_241e3ec02490efbe090d2c5a202b89b1ae5ec0b3d17244e4377d65811b07b785 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_241e3ec02490efbe090d2c5a202b89b1ae5ec0b3d17244e4377d65811b07b785->enter($__internal_241e3ec02490efbe090d2c5a202b89b1ae5ec0b3d17244e4377d65811b07b785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_96cb56e9a103bb7917ea8f49d487a09b95dcede09ddc70fc0270e6b3a88756fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96cb56e9a103bb7917ea8f49d487a09b95dcede09ddc70fc0270e6b3a88756fc->enter($__internal_96cb56e9a103bb7917ea8f49d487a09b95dcede09ddc70fc0270e6b3a88756fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_241e3ec02490efbe090d2c5a202b89b1ae5ec0b3d17244e4377d65811b07b785->leave($__internal_241e3ec02490efbe090d2c5a202b89b1ae5ec0b3d17244e4377d65811b07b785_prof);

        
        $__internal_96cb56e9a103bb7917ea8f49d487a09b95dcede09ddc70fc0270e6b3a88756fc->leave($__internal_96cb56e9a103bb7917ea8f49d487a09b95dcede09ddc70fc0270e6b3a88756fc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8cfff625c6aabd293b2d701c95153432c08b47175f10322c60bc064c710a0116 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cfff625c6aabd293b2d701c95153432c08b47175f10322c60bc064c710a0116->enter($__internal_8cfff625c6aabd293b2d701c95153432c08b47175f10322c60bc064c710a0116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2d281ec9d10d5fe95d385bf99ebd20036e6f3ae50cde45618df8e5b450d721c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d281ec9d10d5fe95d385bf99ebd20036e6f3ae50cde45618df8e5b450d721c1->enter($__internal_2d281ec9d10d5fe95d385bf99ebd20036e6f3ae50cde45618df8e5b450d721c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2d281ec9d10d5fe95d385bf99ebd20036e6f3ae50cde45618df8e5b450d721c1->leave($__internal_2d281ec9d10d5fe95d385bf99ebd20036e6f3ae50cde45618df8e5b450d721c1_prof);

        
        $__internal_8cfff625c6aabd293b2d701c95153432c08b47175f10322c60bc064c710a0116->leave($__internal_8cfff625c6aabd293b2d701c95153432c08b47175f10322c60bc064c710a0116_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_44df97e4067619a3878c2f6416a04c30323d19fa7d1712a24fbf982e92ddad47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44df97e4067619a3878c2f6416a04c30323d19fa7d1712a24fbf982e92ddad47->enter($__internal_44df97e4067619a3878c2f6416a04c30323d19fa7d1712a24fbf982e92ddad47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bcc4f654eac21b97c323bbd2a0e9193a8d62989e42a3a591c9d2ddfd0b104d64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcc4f654eac21b97c323bbd2a0e9193a8d62989e42a3a591c9d2ddfd0b104d64->enter($__internal_bcc4f654eac21b97c323bbd2a0e9193a8d62989e42a3a591c9d2ddfd0b104d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bcc4f654eac21b97c323bbd2a0e9193a8d62989e42a3a591c9d2ddfd0b104d64->leave($__internal_bcc4f654eac21b97c323bbd2a0e9193a8d62989e42a3a591c9d2ddfd0b104d64_prof);

        
        $__internal_44df97e4067619a3878c2f6416a04c30323d19fa7d1712a24fbf982e92ddad47->leave($__internal_44df97e4067619a3878c2f6416a04c30323d19fa7d1712a24fbf982e92ddad47_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6f118229ea7e6b570b4c88c07ccea59248615ba4782964088c9e5aa70e07e987 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f118229ea7e6b570b4c88c07ccea59248615ba4782964088c9e5aa70e07e987->enter($__internal_6f118229ea7e6b570b4c88c07ccea59248615ba4782964088c9e5aa70e07e987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8c2d87b1dafde1ecdd35909338135f79a576b9daff43df38d131949b9e726c21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c2d87b1dafde1ecdd35909338135f79a576b9daff43df38d131949b9e726c21->enter($__internal_8c2d87b1dafde1ecdd35909338135f79a576b9daff43df38d131949b9e726c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8c2d87b1dafde1ecdd35909338135f79a576b9daff43df38d131949b9e726c21->leave($__internal_8c2d87b1dafde1ecdd35909338135f79a576b9daff43df38d131949b9e726c21_prof);

        
        $__internal_6f118229ea7e6b570b4c88c07ccea59248615ba4782964088c9e5aa70e07e987->leave($__internal_6f118229ea7e6b570b4c88c07ccea59248615ba4782964088c9e5aa70e07e987_prof);

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
