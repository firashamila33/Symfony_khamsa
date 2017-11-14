<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_52503fe51e576e1a11b8c654937542d47654ec8738e1dbf0908a0fba02e17cdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31d280ede1e767a3b873f756953baa7e6c7ec0188dad99a9a83928e25595fcca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31d280ede1e767a3b873f756953baa7e6c7ec0188dad99a9a83928e25595fcca->enter($__internal_31d280ede1e767a3b873f756953baa7e6c7ec0188dad99a9a83928e25595fcca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_c21dfc6d9a0a0a2120d7bedd17a151dc183d09be0345a12ae7034292bc158a3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c21dfc6d9a0a0a2120d7bedd17a151dc183d09be0345a12ae7034292bc158a3b->enter($__internal_c21dfc6d9a0a0a2120d7bedd17a151dc183d09be0345a12ae7034292bc158a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31d280ede1e767a3b873f756953baa7e6c7ec0188dad99a9a83928e25595fcca->leave($__internal_31d280ede1e767a3b873f756953baa7e6c7ec0188dad99a9a83928e25595fcca_prof);

        
        $__internal_c21dfc6d9a0a0a2120d7bedd17a151dc183d09be0345a12ae7034292bc158a3b->leave($__internal_c21dfc6d9a0a0a2120d7bedd17a151dc183d09be0345a12ae7034292bc158a3b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3fc9b457dc986f122068c887b76684b01f9d9a4fc6f87d5d9abbe45c25b584a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3fc9b457dc986f122068c887b76684b01f9d9a4fc6f87d5d9abbe45c25b584a->enter($__internal_e3fc9b457dc986f122068c887b76684b01f9d9a4fc6f87d5d9abbe45c25b584a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_405f6783adecd24630b5825ebcf8e2d1aa8da1cbf15fc474808faa0878319f72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_405f6783adecd24630b5825ebcf8e2d1aa8da1cbf15fc474808faa0878319f72->enter($__internal_405f6783adecd24630b5825ebcf8e2d1aa8da1cbf15fc474808faa0878319f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_405f6783adecd24630b5825ebcf8e2d1aa8da1cbf15fc474808faa0878319f72->leave($__internal_405f6783adecd24630b5825ebcf8e2d1aa8da1cbf15fc474808faa0878319f72_prof);

        
        $__internal_e3fc9b457dc986f122068c887b76684b01f9d9a4fc6f87d5d9abbe45c25b584a->leave($__internal_e3fc9b457dc986f122068c887b76684b01f9d9a4fc6f87d5d9abbe45c25b584a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7cf888f177c6eb80fa96db7d1db200bcfc78f15cb20434dd513a1d4d989875e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cf888f177c6eb80fa96db7d1db200bcfc78f15cb20434dd513a1d4d989875e7->enter($__internal_7cf888f177c6eb80fa96db7d1db200bcfc78f15cb20434dd513a1d4d989875e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a30074dd0e4aa276195e2634c0f0d8caa0a12a43af6abff195fcf70e608fb6c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a30074dd0e4aa276195e2634c0f0d8caa0a12a43af6abff195fcf70e608fb6c1->enter($__internal_a30074dd0e4aa276195e2634c0f0d8caa0a12a43af6abff195fcf70e608fb6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a30074dd0e4aa276195e2634c0f0d8caa0a12a43af6abff195fcf70e608fb6c1->leave($__internal_a30074dd0e4aa276195e2634c0f0d8caa0a12a43af6abff195fcf70e608fb6c1_prof);

        
        $__internal_7cf888f177c6eb80fa96db7d1db200bcfc78f15cb20434dd513a1d4d989875e7->leave($__internal_7cf888f177c6eb80fa96db7d1db200bcfc78f15cb20434dd513a1d4d989875e7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
