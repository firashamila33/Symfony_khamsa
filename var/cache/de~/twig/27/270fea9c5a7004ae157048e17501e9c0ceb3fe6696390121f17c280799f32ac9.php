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
        $__internal_a8c92e886abb938c5f83b3c48bf8ab16f916edf5c127238aa31b934b57496cc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8c92e886abb938c5f83b3c48bf8ab16f916edf5c127238aa31b934b57496cc5->enter($__internal_a8c92e886abb938c5f83b3c48bf8ab16f916edf5c127238aa31b934b57496cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_984bbf21b7d0bd52c1c2df3bf6b4eebd2d4054c42709d608b3b11d9b8ab412db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_984bbf21b7d0bd52c1c2df3bf6b4eebd2d4054c42709d608b3b11d9b8ab412db->enter($__internal_984bbf21b7d0bd52c1c2df3bf6b4eebd2d4054c42709d608b3b11d9b8ab412db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8c92e886abb938c5f83b3c48bf8ab16f916edf5c127238aa31b934b57496cc5->leave($__internal_a8c92e886abb938c5f83b3c48bf8ab16f916edf5c127238aa31b934b57496cc5_prof);

        
        $__internal_984bbf21b7d0bd52c1c2df3bf6b4eebd2d4054c42709d608b3b11d9b8ab412db->leave($__internal_984bbf21b7d0bd52c1c2df3bf6b4eebd2d4054c42709d608b3b11d9b8ab412db_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c4d562015885be3cb07f7b75d1218213eb700d7f796fdf72831c38d226472d62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4d562015885be3cb07f7b75d1218213eb700d7f796fdf72831c38d226472d62->enter($__internal_c4d562015885be3cb07f7b75d1218213eb700d7f796fdf72831c38d226472d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1b3182244bfa9172ef927c7fe9f7a437d850a4e46716566a913197af6e134d78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b3182244bfa9172ef927c7fe9f7a437d850a4e46716566a913197af6e134d78->enter($__internal_1b3182244bfa9172ef927c7fe9f7a437d850a4e46716566a913197af6e134d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1b3182244bfa9172ef927c7fe9f7a437d850a4e46716566a913197af6e134d78->leave($__internal_1b3182244bfa9172ef927c7fe9f7a437d850a4e46716566a913197af6e134d78_prof);

        
        $__internal_c4d562015885be3cb07f7b75d1218213eb700d7f796fdf72831c38d226472d62->leave($__internal_c4d562015885be3cb07f7b75d1218213eb700d7f796fdf72831c38d226472d62_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_80061eec1cbe561e765bdbdfefc303abe93aa3aa7e425ab336e3977b2abadaef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80061eec1cbe561e765bdbdfefc303abe93aa3aa7e425ab336e3977b2abadaef->enter($__internal_80061eec1cbe561e765bdbdfefc303abe93aa3aa7e425ab336e3977b2abadaef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3975f9b4445011fd3b74c8c5b847d2793563a7d592bee561fc90e81d90c361bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3975f9b4445011fd3b74c8c5b847d2793563a7d592bee561fc90e81d90c361bc->enter($__internal_3975f9b4445011fd3b74c8c5b847d2793563a7d592bee561fc90e81d90c361bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3975f9b4445011fd3b74c8c5b847d2793563a7d592bee561fc90e81d90c361bc->leave($__internal_3975f9b4445011fd3b74c8c5b847d2793563a7d592bee561fc90e81d90c361bc_prof);

        
        $__internal_80061eec1cbe561e765bdbdfefc303abe93aa3aa7e425ab336e3977b2abadaef->leave($__internal_80061eec1cbe561e765bdbdfefc303abe93aa3aa7e425ab336e3977b2abadaef_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dd8025789e166af56493d231bbbf77a926716eae5e85543424d725d5301a9479 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd8025789e166af56493d231bbbf77a926716eae5e85543424d725d5301a9479->enter($__internal_dd8025789e166af56493d231bbbf77a926716eae5e85543424d725d5301a9479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_196511f49603dedf4cbdff3477f806da33a41f85e78a22c52429dfd671400c3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_196511f49603dedf4cbdff3477f806da33a41f85e78a22c52429dfd671400c3f->enter($__internal_196511f49603dedf4cbdff3477f806da33a41f85e78a22c52429dfd671400c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_196511f49603dedf4cbdff3477f806da33a41f85e78a22c52429dfd671400c3f->leave($__internal_196511f49603dedf4cbdff3477f806da33a41f85e78a22c52429dfd671400c3f_prof);

        
        $__internal_dd8025789e166af56493d231bbbf77a926716eae5e85543424d725d5301a9479->leave($__internal_dd8025789e166af56493d231bbbf77a926716eae5e85543424d725d5301a9479_prof);

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
