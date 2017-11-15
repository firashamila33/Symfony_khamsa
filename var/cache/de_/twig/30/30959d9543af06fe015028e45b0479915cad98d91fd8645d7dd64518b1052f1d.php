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
        $__internal_4d117b4cda3d301a130f382598deb8f0a52ff8296b6ae460c08b37a4144dad11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d117b4cda3d301a130f382598deb8f0a52ff8296b6ae460c08b37a4144dad11->enter($__internal_4d117b4cda3d301a130f382598deb8f0a52ff8296b6ae460c08b37a4144dad11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_49bd3b4df640fc5f2858604c0bad0e6a167e1696ed9b57a78e5e4da094a29d49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49bd3b4df640fc5f2858604c0bad0e6a167e1696ed9b57a78e5e4da094a29d49->enter($__internal_49bd3b4df640fc5f2858604c0bad0e6a167e1696ed9b57a78e5e4da094a29d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d117b4cda3d301a130f382598deb8f0a52ff8296b6ae460c08b37a4144dad11->leave($__internal_4d117b4cda3d301a130f382598deb8f0a52ff8296b6ae460c08b37a4144dad11_prof);

        
        $__internal_49bd3b4df640fc5f2858604c0bad0e6a167e1696ed9b57a78e5e4da094a29d49->leave($__internal_49bd3b4df640fc5f2858604c0bad0e6a167e1696ed9b57a78e5e4da094a29d49_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_545b21911b79bd032bb996ab6101d62700ef6b6ab9e56714dd6afa7c16dc18b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_545b21911b79bd032bb996ab6101d62700ef6b6ab9e56714dd6afa7c16dc18b5->enter($__internal_545b21911b79bd032bb996ab6101d62700ef6b6ab9e56714dd6afa7c16dc18b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0bfb3663888ef402ad1c803d9b7f6b58a48155eed78bcb531e965f5c8c16d6e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bfb3663888ef402ad1c803d9b7f6b58a48155eed78bcb531e965f5c8c16d6e9->enter($__internal_0bfb3663888ef402ad1c803d9b7f6b58a48155eed78bcb531e965f5c8c16d6e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0bfb3663888ef402ad1c803d9b7f6b58a48155eed78bcb531e965f5c8c16d6e9->leave($__internal_0bfb3663888ef402ad1c803d9b7f6b58a48155eed78bcb531e965f5c8c16d6e9_prof);

        
        $__internal_545b21911b79bd032bb996ab6101d62700ef6b6ab9e56714dd6afa7c16dc18b5->leave($__internal_545b21911b79bd032bb996ab6101d62700ef6b6ab9e56714dd6afa7c16dc18b5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9a9bf74d4b67863be2aaf41f8723e6c4cf27a2986551ea8a68064d3ec6d93844 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a9bf74d4b67863be2aaf41f8723e6c4cf27a2986551ea8a68064d3ec6d93844->enter($__internal_9a9bf74d4b67863be2aaf41f8723e6c4cf27a2986551ea8a68064d3ec6d93844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_15ac2888378a86cfa46553e9e1a509c7ad7c7e6383fafccdb29c347da8e0091d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15ac2888378a86cfa46553e9e1a509c7ad7c7e6383fafccdb29c347da8e0091d->enter($__internal_15ac2888378a86cfa46553e9e1a509c7ad7c7e6383fafccdb29c347da8e0091d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_15ac2888378a86cfa46553e9e1a509c7ad7c7e6383fafccdb29c347da8e0091d->leave($__internal_15ac2888378a86cfa46553e9e1a509c7ad7c7e6383fafccdb29c347da8e0091d_prof);

        
        $__internal_9a9bf74d4b67863be2aaf41f8723e6c4cf27a2986551ea8a68064d3ec6d93844->leave($__internal_9a9bf74d4b67863be2aaf41f8723e6c4cf27a2986551ea8a68064d3ec6d93844_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d292b981e394d75e31cb83331ca6dbca52cd2c0d9629fbab8c6501013a04ff63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d292b981e394d75e31cb83331ca6dbca52cd2c0d9629fbab8c6501013a04ff63->enter($__internal_d292b981e394d75e31cb83331ca6dbca52cd2c0d9629fbab8c6501013a04ff63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1dc3d3aced8a699b58d4398d80f7322e913167bf11b826847ca1a8a13cb52300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dc3d3aced8a699b58d4398d80f7322e913167bf11b826847ca1a8a13cb52300->enter($__internal_1dc3d3aced8a699b58d4398d80f7322e913167bf11b826847ca1a8a13cb52300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_1dc3d3aced8a699b58d4398d80f7322e913167bf11b826847ca1a8a13cb52300->leave($__internal_1dc3d3aced8a699b58d4398d80f7322e913167bf11b826847ca1a8a13cb52300_prof);

        
        $__internal_d292b981e394d75e31cb83331ca6dbca52cd2c0d9629fbab8c6501013a04ff63->leave($__internal_d292b981e394d75e31cb83331ca6dbca52cd2c0d9629fbab8c6501013a04ff63_prof);

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
