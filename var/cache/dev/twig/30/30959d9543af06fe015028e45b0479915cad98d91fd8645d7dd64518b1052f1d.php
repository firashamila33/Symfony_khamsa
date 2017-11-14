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
        $__internal_214c3297133851af43507db43ceab4c332ec9f4b0516419a4a9c56f437c0e52c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_214c3297133851af43507db43ceab4c332ec9f4b0516419a4a9c56f437c0e52c->enter($__internal_214c3297133851af43507db43ceab4c332ec9f4b0516419a4a9c56f437c0e52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_76fb30f4b3ea3a7b4c1a07f7b83f2eac1bab238ac13a7d9e3edf3de007281f65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76fb30f4b3ea3a7b4c1a07f7b83f2eac1bab238ac13a7d9e3edf3de007281f65->enter($__internal_76fb30f4b3ea3a7b4c1a07f7b83f2eac1bab238ac13a7d9e3edf3de007281f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_214c3297133851af43507db43ceab4c332ec9f4b0516419a4a9c56f437c0e52c->leave($__internal_214c3297133851af43507db43ceab4c332ec9f4b0516419a4a9c56f437c0e52c_prof);

        
        $__internal_76fb30f4b3ea3a7b4c1a07f7b83f2eac1bab238ac13a7d9e3edf3de007281f65->leave($__internal_76fb30f4b3ea3a7b4c1a07f7b83f2eac1bab238ac13a7d9e3edf3de007281f65_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aaa2d35af963514d87875e72f73fb260ba968fa71aa3c933b8143490af854a68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaa2d35af963514d87875e72f73fb260ba968fa71aa3c933b8143490af854a68->enter($__internal_aaa2d35af963514d87875e72f73fb260ba968fa71aa3c933b8143490af854a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_16ae3151f6bfeb20ca7f24c5cfd96e639e41ab844dee5cbd2fea803155664737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16ae3151f6bfeb20ca7f24c5cfd96e639e41ab844dee5cbd2fea803155664737->enter($__internal_16ae3151f6bfeb20ca7f24c5cfd96e639e41ab844dee5cbd2fea803155664737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_16ae3151f6bfeb20ca7f24c5cfd96e639e41ab844dee5cbd2fea803155664737->leave($__internal_16ae3151f6bfeb20ca7f24c5cfd96e639e41ab844dee5cbd2fea803155664737_prof);

        
        $__internal_aaa2d35af963514d87875e72f73fb260ba968fa71aa3c933b8143490af854a68->leave($__internal_aaa2d35af963514d87875e72f73fb260ba968fa71aa3c933b8143490af854a68_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dc3450dfb59bd78e775fc551c522d556cf9f5ce1fb34fae816941eb0b0f0f7af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc3450dfb59bd78e775fc551c522d556cf9f5ce1fb34fae816941eb0b0f0f7af->enter($__internal_dc3450dfb59bd78e775fc551c522d556cf9f5ce1fb34fae816941eb0b0f0f7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5ad2d5025d1427df91177ef5e63c9fe76dec998efb577508d4e5ff702be30a85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ad2d5025d1427df91177ef5e63c9fe76dec998efb577508d4e5ff702be30a85->enter($__internal_5ad2d5025d1427df91177ef5e63c9fe76dec998efb577508d4e5ff702be30a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_5ad2d5025d1427df91177ef5e63c9fe76dec998efb577508d4e5ff702be30a85->leave($__internal_5ad2d5025d1427df91177ef5e63c9fe76dec998efb577508d4e5ff702be30a85_prof);

        
        $__internal_dc3450dfb59bd78e775fc551c522d556cf9f5ce1fb34fae816941eb0b0f0f7af->leave($__internal_dc3450dfb59bd78e775fc551c522d556cf9f5ce1fb34fae816941eb0b0f0f7af_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_00b7efe76aec7a922d1604518f1e8497560601fe8284587313525bdcf3cc43b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00b7efe76aec7a922d1604518f1e8497560601fe8284587313525bdcf3cc43b8->enter($__internal_00b7efe76aec7a922d1604518f1e8497560601fe8284587313525bdcf3cc43b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0515638f18f9680aa6f255ce9896c05e60d2fdf10c26c20a473f74bd3edc2725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0515638f18f9680aa6f255ce9896c05e60d2fdf10c26c20a473f74bd3edc2725->enter($__internal_0515638f18f9680aa6f255ce9896c05e60d2fdf10c26c20a473f74bd3edc2725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_0515638f18f9680aa6f255ce9896c05e60d2fdf10c26c20a473f74bd3edc2725->leave($__internal_0515638f18f9680aa6f255ce9896c05e60d2fdf10c26c20a473f74bd3edc2725_prof);

        
        $__internal_00b7efe76aec7a922d1604518f1e8497560601fe8284587313525bdcf3cc43b8->leave($__internal_00b7efe76aec7a922d1604518f1e8497560601fe8284587313525bdcf3cc43b8_prof);

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
