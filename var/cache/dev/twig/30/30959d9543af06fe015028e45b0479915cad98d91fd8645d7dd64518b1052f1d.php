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
        $__internal_51d143fc9b0daea758941c5a17d277c600005d5881cce5b5d5a9580b1ad5e29c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51d143fc9b0daea758941c5a17d277c600005d5881cce5b5d5a9580b1ad5e29c->enter($__internal_51d143fc9b0daea758941c5a17d277c600005d5881cce5b5d5a9580b1ad5e29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7703429a7663360ac4de37e88eeb1114d0dc74f65de3cbeecfdee40aeee41279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7703429a7663360ac4de37e88eeb1114d0dc74f65de3cbeecfdee40aeee41279->enter($__internal_7703429a7663360ac4de37e88eeb1114d0dc74f65de3cbeecfdee40aeee41279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51d143fc9b0daea758941c5a17d277c600005d5881cce5b5d5a9580b1ad5e29c->leave($__internal_51d143fc9b0daea758941c5a17d277c600005d5881cce5b5d5a9580b1ad5e29c_prof);

        
        $__internal_7703429a7663360ac4de37e88eeb1114d0dc74f65de3cbeecfdee40aeee41279->leave($__internal_7703429a7663360ac4de37e88eeb1114d0dc74f65de3cbeecfdee40aeee41279_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0e3f4c3b51c3b5a45a7d1e26bcb8682faa1c930ab599ab368c4438693bd3ca01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e3f4c3b51c3b5a45a7d1e26bcb8682faa1c930ab599ab368c4438693bd3ca01->enter($__internal_0e3f4c3b51c3b5a45a7d1e26bcb8682faa1c930ab599ab368c4438693bd3ca01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e41b5f2013a77261b07363f73139ce9e42e013b039043456bc52743e4cc9f5a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e41b5f2013a77261b07363f73139ce9e42e013b039043456bc52743e4cc9f5a5->enter($__internal_e41b5f2013a77261b07363f73139ce9e42e013b039043456bc52743e4cc9f5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e41b5f2013a77261b07363f73139ce9e42e013b039043456bc52743e4cc9f5a5->leave($__internal_e41b5f2013a77261b07363f73139ce9e42e013b039043456bc52743e4cc9f5a5_prof);

        
        $__internal_0e3f4c3b51c3b5a45a7d1e26bcb8682faa1c930ab599ab368c4438693bd3ca01->leave($__internal_0e3f4c3b51c3b5a45a7d1e26bcb8682faa1c930ab599ab368c4438693bd3ca01_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bbf2fb7d133c615d485860c179c8cbc5a2dbe52f7e9aea63fee54735ff901cac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbf2fb7d133c615d485860c179c8cbc5a2dbe52f7e9aea63fee54735ff901cac->enter($__internal_bbf2fb7d133c615d485860c179c8cbc5a2dbe52f7e9aea63fee54735ff901cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f1b880a6ccc18bf92bc75191be4cf3c99e4eaa098524f6c1be4257596703359b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1b880a6ccc18bf92bc75191be4cf3c99e4eaa098524f6c1be4257596703359b->enter($__internal_f1b880a6ccc18bf92bc75191be4cf3c99e4eaa098524f6c1be4257596703359b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_f1b880a6ccc18bf92bc75191be4cf3c99e4eaa098524f6c1be4257596703359b->leave($__internal_f1b880a6ccc18bf92bc75191be4cf3c99e4eaa098524f6c1be4257596703359b_prof);

        
        $__internal_bbf2fb7d133c615d485860c179c8cbc5a2dbe52f7e9aea63fee54735ff901cac->leave($__internal_bbf2fb7d133c615d485860c179c8cbc5a2dbe52f7e9aea63fee54735ff901cac_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2c11e81c2dcce774f3f0a6bc346a9641cc393e28cad7cf51ec584bb08924e83c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c11e81c2dcce774f3f0a6bc346a9641cc393e28cad7cf51ec584bb08924e83c->enter($__internal_2c11e81c2dcce774f3f0a6bc346a9641cc393e28cad7cf51ec584bb08924e83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d55da317c2e950823c86e01dd9f0042f4a123d03815bd588456ec9dd57d40515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d55da317c2e950823c86e01dd9f0042f4a123d03815bd588456ec9dd57d40515->enter($__internal_d55da317c2e950823c86e01dd9f0042f4a123d03815bd588456ec9dd57d40515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d55da317c2e950823c86e01dd9f0042f4a123d03815bd588456ec9dd57d40515->leave($__internal_d55da317c2e950823c86e01dd9f0042f4a123d03815bd588456ec9dd57d40515_prof);

        
        $__internal_2c11e81c2dcce774f3f0a6bc346a9641cc393e28cad7cf51ec584bb08924e83c->leave($__internal_2c11e81c2dcce774f3f0a6bc346a9641cc393e28cad7cf51ec584bb08924e83c_prof);

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
