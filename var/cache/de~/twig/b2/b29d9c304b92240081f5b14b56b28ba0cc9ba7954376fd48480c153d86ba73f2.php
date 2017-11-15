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
        $__internal_c835e2918a85634889178d86d02bb1b653068ac979cbaf2325fb38a928af27d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c835e2918a85634889178d86d02bb1b653068ac979cbaf2325fb38a928af27d4->enter($__internal_c835e2918a85634889178d86d02bb1b653068ac979cbaf2325fb38a928af27d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_fb071edbc94dd6558677955b5230adea64e30171d73e29d5746249b98d52db09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb071edbc94dd6558677955b5230adea64e30171d73e29d5746249b98d52db09->enter($__internal_fb071edbc94dd6558677955b5230adea64e30171d73e29d5746249b98d52db09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c835e2918a85634889178d86d02bb1b653068ac979cbaf2325fb38a928af27d4->leave($__internal_c835e2918a85634889178d86d02bb1b653068ac979cbaf2325fb38a928af27d4_prof);

        
        $__internal_fb071edbc94dd6558677955b5230adea64e30171d73e29d5746249b98d52db09->leave($__internal_fb071edbc94dd6558677955b5230adea64e30171d73e29d5746249b98d52db09_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cbcc51fd9a9ee98bc6977194f9cffe2873ac3cd13c994db43ce81b14db1c0b07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbcc51fd9a9ee98bc6977194f9cffe2873ac3cd13c994db43ce81b14db1c0b07->enter($__internal_cbcc51fd9a9ee98bc6977194f9cffe2873ac3cd13c994db43ce81b14db1c0b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3bfb76ff7cdd261b5657669a73072b95ecd21aceeadaabb21aa9ab0f9aa2544f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bfb76ff7cdd261b5657669a73072b95ecd21aceeadaabb21aa9ab0f9aa2544f->enter($__internal_3bfb76ff7cdd261b5657669a73072b95ecd21aceeadaabb21aa9ab0f9aa2544f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3bfb76ff7cdd261b5657669a73072b95ecd21aceeadaabb21aa9ab0f9aa2544f->leave($__internal_3bfb76ff7cdd261b5657669a73072b95ecd21aceeadaabb21aa9ab0f9aa2544f_prof);

        
        $__internal_cbcc51fd9a9ee98bc6977194f9cffe2873ac3cd13c994db43ce81b14db1c0b07->leave($__internal_cbcc51fd9a9ee98bc6977194f9cffe2873ac3cd13c994db43ce81b14db1c0b07_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ca501c07b9c7a36c21d393eb9153ae7804be024bd8a7337c9b07550987dd76aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca501c07b9c7a36c21d393eb9153ae7804be024bd8a7337c9b07550987dd76aa->enter($__internal_ca501c07b9c7a36c21d393eb9153ae7804be024bd8a7337c9b07550987dd76aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_585d282637315e71ae75e7a4e4181cead1d55a03fd8cfd4e9db66c9f809655f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_585d282637315e71ae75e7a4e4181cead1d55a03fd8cfd4e9db66c9f809655f9->enter($__internal_585d282637315e71ae75e7a4e4181cead1d55a03fd8cfd4e9db66c9f809655f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_585d282637315e71ae75e7a4e4181cead1d55a03fd8cfd4e9db66c9f809655f9->leave($__internal_585d282637315e71ae75e7a4e4181cead1d55a03fd8cfd4e9db66c9f809655f9_prof);

        
        $__internal_ca501c07b9c7a36c21d393eb9153ae7804be024bd8a7337c9b07550987dd76aa->leave($__internal_ca501c07b9c7a36c21d393eb9153ae7804be024bd8a7337c9b07550987dd76aa_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eb6002786fb6e3814970953fa0242743cad046870d3193208fd173f99dd44e12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb6002786fb6e3814970953fa0242743cad046870d3193208fd173f99dd44e12->enter($__internal_eb6002786fb6e3814970953fa0242743cad046870d3193208fd173f99dd44e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3f64108d91c0d2583e7d66016cbce3553f367a7edbe18e986703dd4c430b8082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f64108d91c0d2583e7d66016cbce3553f367a7edbe18e986703dd4c430b8082->enter($__internal_3f64108d91c0d2583e7d66016cbce3553f367a7edbe18e986703dd4c430b8082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_3f64108d91c0d2583e7d66016cbce3553f367a7edbe18e986703dd4c430b8082->leave($__internal_3f64108d91c0d2583e7d66016cbce3553f367a7edbe18e986703dd4c430b8082_prof);

        
        $__internal_eb6002786fb6e3814970953fa0242743cad046870d3193208fd173f99dd44e12->leave($__internal_eb6002786fb6e3814970953fa0242743cad046870d3193208fd173f99dd44e12_prof);

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
