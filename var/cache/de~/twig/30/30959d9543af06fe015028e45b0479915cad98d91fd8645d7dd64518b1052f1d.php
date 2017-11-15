<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_e047258892315a23f246645d32c3fa076f3f11e2ec2c488c876357a29d2e1c11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_683cdedfdb4712ca633c8986736432d3bdaced990b2e89fe37a9399beab286f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_683cdedfdb4712ca633c8986736432d3bdaced990b2e89fe37a9399beab286f7->enter($__internal_683cdedfdb4712ca633c8986736432d3bdaced990b2e89fe37a9399beab286f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_06041dc22b2954d56f27fddacf5e7b92d33723b12a006f9945450d4ff6a8f853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06041dc22b2954d56f27fddacf5e7b92d33723b12a006f9945450d4ff6a8f853->enter($__internal_06041dc22b2954d56f27fddacf5e7b92d33723b12a006f9945450d4ff6a8f853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_683cdedfdb4712ca633c8986736432d3bdaced990b2e89fe37a9399beab286f7->leave($__internal_683cdedfdb4712ca633c8986736432d3bdaced990b2e89fe37a9399beab286f7_prof);

        
        $__internal_06041dc22b2954d56f27fddacf5e7b92d33723b12a006f9945450d4ff6a8f853->leave($__internal_06041dc22b2954d56f27fddacf5e7b92d33723b12a006f9945450d4ff6a8f853_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_40b6582349799b5e2b5476e51721f4677b6170a4b94269de0b55670270a03434 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40b6582349799b5e2b5476e51721f4677b6170a4b94269de0b55670270a03434->enter($__internal_40b6582349799b5e2b5476e51721f4677b6170a4b94269de0b55670270a03434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_12c54fd14c51006404322cb39eb4e0b7416abb1dcfac80bfe175d51fa0bd1360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12c54fd14c51006404322cb39eb4e0b7416abb1dcfac80bfe175d51fa0bd1360->enter($__internal_12c54fd14c51006404322cb39eb4e0b7416abb1dcfac80bfe175d51fa0bd1360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_12c54fd14c51006404322cb39eb4e0b7416abb1dcfac80bfe175d51fa0bd1360->leave($__internal_12c54fd14c51006404322cb39eb4e0b7416abb1dcfac80bfe175d51fa0bd1360_prof);

        
        $__internal_40b6582349799b5e2b5476e51721f4677b6170a4b94269de0b55670270a03434->leave($__internal_40b6582349799b5e2b5476e51721f4677b6170a4b94269de0b55670270a03434_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f7aead21e98634d45072b9e87ac2b7ff6b0f3191a65d5abb9407a9859c7c2847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7aead21e98634d45072b9e87ac2b7ff6b0f3191a65d5abb9407a9859c7c2847->enter($__internal_f7aead21e98634d45072b9e87ac2b7ff6b0f3191a65d5abb9407a9859c7c2847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_675bf124bb452ceece832e756d9197b26177c735cf59311cf1eda7fe724844a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_675bf124bb452ceece832e756d9197b26177c735cf59311cf1eda7fe724844a3->enter($__internal_675bf124bb452ceece832e756d9197b26177c735cf59311cf1eda7fe724844a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_675bf124bb452ceece832e756d9197b26177c735cf59311cf1eda7fe724844a3->leave($__internal_675bf124bb452ceece832e756d9197b26177c735cf59311cf1eda7fe724844a3_prof);

        
        $__internal_f7aead21e98634d45072b9e87ac2b7ff6b0f3191a65d5abb9407a9859c7c2847->leave($__internal_f7aead21e98634d45072b9e87ac2b7ff6b0f3191a65d5abb9407a9859c7c2847_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a0ff02ba58ce6ee7da04ac72d6997a9a83b736b6147b4f15f6e85ae6fc4188fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0ff02ba58ce6ee7da04ac72d6997a9a83b736b6147b4f15f6e85ae6fc4188fe->enter($__internal_a0ff02ba58ce6ee7da04ac72d6997a9a83b736b6147b4f15f6e85ae6fc4188fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_83ccbcedda2b6ad2f607b71daf2068023b4f4b75fcd1cb32eab6d71e66f5c3ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83ccbcedda2b6ad2f607b71daf2068023b4f4b75fcd1cb32eab6d71e66f5c3ed->enter($__internal_83ccbcedda2b6ad2f607b71daf2068023b4f4b75fcd1cb32eab6d71e66f5c3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_83ccbcedda2b6ad2f607b71daf2068023b4f4b75fcd1cb32eab6d71e66f5c3ed->leave($__internal_83ccbcedda2b6ad2f607b71daf2068023b4f4b75fcd1cb32eab6d71e66f5c3ed_prof);

        
        $__internal_a0ff02ba58ce6ee7da04ac72d6997a9a83b736b6147b4f15f6e85ae6fc4188fe->leave($__internal_a0ff02ba58ce6ee7da04ac72d6997a9a83b736b6147b4f15f6e85ae6fc4188fe_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
