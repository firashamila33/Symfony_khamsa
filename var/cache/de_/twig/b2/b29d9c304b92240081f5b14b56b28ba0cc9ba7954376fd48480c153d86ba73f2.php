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
        $__internal_0f5d6a73a0753e037f2db87427cd7b4e3efad1cb2276340112450244ef5b4562 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f5d6a73a0753e037f2db87427cd7b4e3efad1cb2276340112450244ef5b4562->enter($__internal_0f5d6a73a0753e037f2db87427cd7b4e3efad1cb2276340112450244ef5b4562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_f0724456a63ee5c50b3ef4cffe30dacdffcd5edb676ec2c4f6d5b26866454041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0724456a63ee5c50b3ef4cffe30dacdffcd5edb676ec2c4f6d5b26866454041->enter($__internal_f0724456a63ee5c50b3ef4cffe30dacdffcd5edb676ec2c4f6d5b26866454041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f5d6a73a0753e037f2db87427cd7b4e3efad1cb2276340112450244ef5b4562->leave($__internal_0f5d6a73a0753e037f2db87427cd7b4e3efad1cb2276340112450244ef5b4562_prof);

        
        $__internal_f0724456a63ee5c50b3ef4cffe30dacdffcd5edb676ec2c4f6d5b26866454041->leave($__internal_f0724456a63ee5c50b3ef4cffe30dacdffcd5edb676ec2c4f6d5b26866454041_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1542e3551065c8c76d17529c04706c76288112cfa7965eabf826ad04078d44e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1542e3551065c8c76d17529c04706c76288112cfa7965eabf826ad04078d44e4->enter($__internal_1542e3551065c8c76d17529c04706c76288112cfa7965eabf826ad04078d44e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_07b2b36108e2f2e9308c7a69e2f5d89d9932b8b832a674e9b82852d76a3b0e6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07b2b36108e2f2e9308c7a69e2f5d89d9932b8b832a674e9b82852d76a3b0e6f->enter($__internal_07b2b36108e2f2e9308c7a69e2f5d89d9932b8b832a674e9b82852d76a3b0e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_07b2b36108e2f2e9308c7a69e2f5d89d9932b8b832a674e9b82852d76a3b0e6f->leave($__internal_07b2b36108e2f2e9308c7a69e2f5d89d9932b8b832a674e9b82852d76a3b0e6f_prof);

        
        $__internal_1542e3551065c8c76d17529c04706c76288112cfa7965eabf826ad04078d44e4->leave($__internal_1542e3551065c8c76d17529c04706c76288112cfa7965eabf826ad04078d44e4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5a1e727df569e408db8f85e8be447bca6e9b0ac27540a7eb3e3d2f58b189f1cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a1e727df569e408db8f85e8be447bca6e9b0ac27540a7eb3e3d2f58b189f1cb->enter($__internal_5a1e727df569e408db8f85e8be447bca6e9b0ac27540a7eb3e3d2f58b189f1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0db53e2fbdf42f0d15bb605b4c96db09709b2b45fbdaf7016a9e2b93b2600dcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0db53e2fbdf42f0d15bb605b4c96db09709b2b45fbdaf7016a9e2b93b2600dcc->enter($__internal_0db53e2fbdf42f0d15bb605b4c96db09709b2b45fbdaf7016a9e2b93b2600dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_0db53e2fbdf42f0d15bb605b4c96db09709b2b45fbdaf7016a9e2b93b2600dcc->leave($__internal_0db53e2fbdf42f0d15bb605b4c96db09709b2b45fbdaf7016a9e2b93b2600dcc_prof);

        
        $__internal_5a1e727df569e408db8f85e8be447bca6e9b0ac27540a7eb3e3d2f58b189f1cb->leave($__internal_5a1e727df569e408db8f85e8be447bca6e9b0ac27540a7eb3e3d2f58b189f1cb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c41edfac59951592caf7bed3a7e65ca12bb6445d21b241f762520c8e482a7711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c41edfac59951592caf7bed3a7e65ca12bb6445d21b241f762520c8e482a7711->enter($__internal_c41edfac59951592caf7bed3a7e65ca12bb6445d21b241f762520c8e482a7711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0368c778ccbadf89bdf079d861f9ba52d9265f59aacdcedb351802956c273b81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0368c778ccbadf89bdf079d861f9ba52d9265f59aacdcedb351802956c273b81->enter($__internal_0368c778ccbadf89bdf079d861f9ba52d9265f59aacdcedb351802956c273b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_0368c778ccbadf89bdf079d861f9ba52d9265f59aacdcedb351802956c273b81->leave($__internal_0368c778ccbadf89bdf079d861f9ba52d9265f59aacdcedb351802956c273b81_prof);

        
        $__internal_c41edfac59951592caf7bed3a7e65ca12bb6445d21b241f762520c8e482a7711->leave($__internal_c41edfac59951592caf7bed3a7e65ca12bb6445d21b241f762520c8e482a7711_prof);

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
