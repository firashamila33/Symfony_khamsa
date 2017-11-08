<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ae8c398b09bb0aa77bc8d48476935e48a63e21db2be51db90c158b52d563d280 extends Twig_Template
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
        $__internal_ef843864df0b9189f3e7d723311a6fe79a8b8e18b955b20f1d739b9529cdf83c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef843864df0b9189f3e7d723311a6fe79a8b8e18b955b20f1d739b9529cdf83c->enter($__internal_ef843864df0b9189f3e7d723311a6fe79a8b8e18b955b20f1d739b9529cdf83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ded303eb7e6708dfefeb47d275cf1592ce3df0623603b587914705b7f03e7e2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ded303eb7e6708dfefeb47d275cf1592ce3df0623603b587914705b7f03e7e2e->enter($__internal_ded303eb7e6708dfefeb47d275cf1592ce3df0623603b587914705b7f03e7e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef843864df0b9189f3e7d723311a6fe79a8b8e18b955b20f1d739b9529cdf83c->leave($__internal_ef843864df0b9189f3e7d723311a6fe79a8b8e18b955b20f1d739b9529cdf83c_prof);

        
        $__internal_ded303eb7e6708dfefeb47d275cf1592ce3df0623603b587914705b7f03e7e2e->leave($__internal_ded303eb7e6708dfefeb47d275cf1592ce3df0623603b587914705b7f03e7e2e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7791468b1535f949dd68c7d8df13bd92feb74ff2334818accd1b0a24c2fbb2e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7791468b1535f949dd68c7d8df13bd92feb74ff2334818accd1b0a24c2fbb2e3->enter($__internal_7791468b1535f949dd68c7d8df13bd92feb74ff2334818accd1b0a24c2fbb2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d0bf5a29900640089dcb803855492cf14e617fc370451a4150f0177c27e09498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0bf5a29900640089dcb803855492cf14e617fc370451a4150f0177c27e09498->enter($__internal_d0bf5a29900640089dcb803855492cf14e617fc370451a4150f0177c27e09498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d0bf5a29900640089dcb803855492cf14e617fc370451a4150f0177c27e09498->leave($__internal_d0bf5a29900640089dcb803855492cf14e617fc370451a4150f0177c27e09498_prof);

        
        $__internal_7791468b1535f949dd68c7d8df13bd92feb74ff2334818accd1b0a24c2fbb2e3->leave($__internal_7791468b1535f949dd68c7d8df13bd92feb74ff2334818accd1b0a24c2fbb2e3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b4a31c8f10bf4d93f63399dd3355d3808836cef82782840121204abab515c797 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4a31c8f10bf4d93f63399dd3355d3808836cef82782840121204abab515c797->enter($__internal_b4a31c8f10bf4d93f63399dd3355d3808836cef82782840121204abab515c797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_84c04b2179fbdfec7bbb46892903dae7ca170b60d662f119992acf85579e1d49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84c04b2179fbdfec7bbb46892903dae7ca170b60d662f119992acf85579e1d49->enter($__internal_84c04b2179fbdfec7bbb46892903dae7ca170b60d662f119992acf85579e1d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_84c04b2179fbdfec7bbb46892903dae7ca170b60d662f119992acf85579e1d49->leave($__internal_84c04b2179fbdfec7bbb46892903dae7ca170b60d662f119992acf85579e1d49_prof);

        
        $__internal_b4a31c8f10bf4d93f63399dd3355d3808836cef82782840121204abab515c797->leave($__internal_b4a31c8f10bf4d93f63399dd3355d3808836cef82782840121204abab515c797_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e9228b8904730febe49a3ae7d1dfb51ea16bf4c041ba69d015f1da32f12a51a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9228b8904730febe49a3ae7d1dfb51ea16bf4c041ba69d015f1da32f12a51a0->enter($__internal_e9228b8904730febe49a3ae7d1dfb51ea16bf4c041ba69d015f1da32f12a51a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_933efcdc4a428b6641702aef9ddd8b576a4575e3336b5b41a470b3aa1e8d50af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_933efcdc4a428b6641702aef9ddd8b576a4575e3336b5b41a470b3aa1e8d50af->enter($__internal_933efcdc4a428b6641702aef9ddd8b576a4575e3336b5b41a470b3aa1e8d50af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_933efcdc4a428b6641702aef9ddd8b576a4575e3336b5b41a470b3aa1e8d50af->leave($__internal_933efcdc4a428b6641702aef9ddd8b576a4575e3336b5b41a470b3aa1e8d50af_prof);

        
        $__internal_e9228b8904730febe49a3ae7d1dfb51ea16bf4c041ba69d015f1da32f12a51a0->leave($__internal_e9228b8904730febe49a3ae7d1dfb51ea16bf4c041ba69d015f1da32f12a51a0_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
