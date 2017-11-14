<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_7d91c885d5a10281805a4f8f22fca804bfa4823eadcc8063f569633a965d44a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_97cf807ec5688eb177e6df2c561c5792e452f3dab22415738ed2b75aa286b9d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97cf807ec5688eb177e6df2c561c5792e452f3dab22415738ed2b75aa286b9d5->enter($__internal_97cf807ec5688eb177e6df2c561c5792e452f3dab22415738ed2b75aa286b9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_e9e7fdfebd1bb4fbe30b24e1da6c4d276a57134c4339c6920a5ec6657113c349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9e7fdfebd1bb4fbe30b24e1da6c4d276a57134c4339c6920a5ec6657113c349->enter($__internal_e9e7fdfebd1bb4fbe30b24e1da6c4d276a57134c4339c6920a5ec6657113c349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97cf807ec5688eb177e6df2c561c5792e452f3dab22415738ed2b75aa286b9d5->leave($__internal_97cf807ec5688eb177e6df2c561c5792e452f3dab22415738ed2b75aa286b9d5_prof);

        
        $__internal_e9e7fdfebd1bb4fbe30b24e1da6c4d276a57134c4339c6920a5ec6657113c349->leave($__internal_e9e7fdfebd1bb4fbe30b24e1da6c4d276a57134c4339c6920a5ec6657113c349_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ac21035fe1729888cb611cc2ba707220bea9e0be9f52e2c7fb0e875499142211 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac21035fe1729888cb611cc2ba707220bea9e0be9f52e2c7fb0e875499142211->enter($__internal_ac21035fe1729888cb611cc2ba707220bea9e0be9f52e2c7fb0e875499142211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_eb13a2889ef93f1ba7ec0ed5d100fd5f567011a3a819c5c7e2615dbc15b0b1c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb13a2889ef93f1ba7ec0ed5d100fd5f567011a3a819c5c7e2615dbc15b0b1c4->enter($__internal_eb13a2889ef93f1ba7ec0ed5d100fd5f567011a3a819c5c7e2615dbc15b0b1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_eb13a2889ef93f1ba7ec0ed5d100fd5f567011a3a819c5c7e2615dbc15b0b1c4->leave($__internal_eb13a2889ef93f1ba7ec0ed5d100fd5f567011a3a819c5c7e2615dbc15b0b1c4_prof);

        
        $__internal_ac21035fe1729888cb611cc2ba707220bea9e0be9f52e2c7fb0e875499142211->leave($__internal_ac21035fe1729888cb611cc2ba707220bea9e0be9f52e2c7fb0e875499142211_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8dd47740ea35cb2920a1a35d61e88e31bfa462f93d96496aec479047773afc21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dd47740ea35cb2920a1a35d61e88e31bfa462f93d96496aec479047773afc21->enter($__internal_8dd47740ea35cb2920a1a35d61e88e31bfa462f93d96496aec479047773afc21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3f0783ffb1defe0bdeec7191cd6fc0c3a9da30d8ea956b7608afb1c76818fc8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f0783ffb1defe0bdeec7191cd6fc0c3a9da30d8ea956b7608afb1c76818fc8d->enter($__internal_3f0783ffb1defe0bdeec7191cd6fc0c3a9da30d8ea956b7608afb1c76818fc8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_3f0783ffb1defe0bdeec7191cd6fc0c3a9da30d8ea956b7608afb1c76818fc8d->leave($__internal_3f0783ffb1defe0bdeec7191cd6fc0c3a9da30d8ea956b7608afb1c76818fc8d_prof);

        
        $__internal_8dd47740ea35cb2920a1a35d61e88e31bfa462f93d96496aec479047773afc21->leave($__internal_8dd47740ea35cb2920a1a35d61e88e31bfa462f93d96496aec479047773afc21_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a87659f06495f01ffd9eaa3221144c2b2364736cba4743b421b506f0d442a7ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a87659f06495f01ffd9eaa3221144c2b2364736cba4743b421b506f0d442a7ed->enter($__internal_a87659f06495f01ffd9eaa3221144c2b2364736cba4743b421b506f0d442a7ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9e170b2686e469ee018743b78732b639c186f17b93c97aeb28dfbed8315f8df9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e170b2686e469ee018743b78732b639c186f17b93c97aeb28dfbed8315f8df9->enter($__internal_9e170b2686e469ee018743b78732b639c186f17b93c97aeb28dfbed8315f8df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_9e170b2686e469ee018743b78732b639c186f17b93c97aeb28dfbed8315f8df9->leave($__internal_9e170b2686e469ee018743b78732b639c186f17b93c97aeb28dfbed8315f8df9_prof);

        
        $__internal_a87659f06495f01ffd9eaa3221144c2b2364736cba4743b421b506f0d442a7ed->leave($__internal_a87659f06495f01ffd9eaa3221144c2b2364736cba4743b421b506f0d442a7ed_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
