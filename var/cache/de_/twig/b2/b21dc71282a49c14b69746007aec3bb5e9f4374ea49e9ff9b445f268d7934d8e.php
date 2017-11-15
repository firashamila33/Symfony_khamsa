<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b8a17a0fae2f7bfd95eb86ef7e8c7aa15c40a070d0988588af92791ed83aa1e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_89b55be2445ec1d26548206d0bd4bdb88a4705fb1ec6e150c047d0ed303dafbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89b55be2445ec1d26548206d0bd4bdb88a4705fb1ec6e150c047d0ed303dafbd->enter($__internal_89b55be2445ec1d26548206d0bd4bdb88a4705fb1ec6e150c047d0ed303dafbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_2e08de5f4731825fc808e0a52030dd544a65a43546dc3904d2ac530815dce8e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e08de5f4731825fc808e0a52030dd544a65a43546dc3904d2ac530815dce8e6->enter($__internal_2e08de5f4731825fc808e0a52030dd544a65a43546dc3904d2ac530815dce8e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89b55be2445ec1d26548206d0bd4bdb88a4705fb1ec6e150c047d0ed303dafbd->leave($__internal_89b55be2445ec1d26548206d0bd4bdb88a4705fb1ec6e150c047d0ed303dafbd_prof);

        
        $__internal_2e08de5f4731825fc808e0a52030dd544a65a43546dc3904d2ac530815dce8e6->leave($__internal_2e08de5f4731825fc808e0a52030dd544a65a43546dc3904d2ac530815dce8e6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d910382609f6cf6118cc627a334603fbba4ea0572b6b2cee4f9b8bacd42974ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d910382609f6cf6118cc627a334603fbba4ea0572b6b2cee4f9b8bacd42974ea->enter($__internal_d910382609f6cf6118cc627a334603fbba4ea0572b6b2cee4f9b8bacd42974ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_14ff288f449848e0353863f45e2f2f953b993e87e9a3a5d7ea6f4fbb74f8e064 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14ff288f449848e0353863f45e2f2f953b993e87e9a3a5d7ea6f4fbb74f8e064->enter($__internal_14ff288f449848e0353863f45e2f2f953b993e87e9a3a5d7ea6f4fbb74f8e064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_14ff288f449848e0353863f45e2f2f953b993e87e9a3a5d7ea6f4fbb74f8e064->leave($__internal_14ff288f449848e0353863f45e2f2f953b993e87e9a3a5d7ea6f4fbb74f8e064_prof);

        
        $__internal_d910382609f6cf6118cc627a334603fbba4ea0572b6b2cee4f9b8bacd42974ea->leave($__internal_d910382609f6cf6118cc627a334603fbba4ea0572b6b2cee4f9b8bacd42974ea_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0eb4a53771abd92e569e855b5eb2f8946fbfbc6ba39a3e44e663492adf5662c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eb4a53771abd92e569e855b5eb2f8946fbfbc6ba39a3e44e663492adf5662c9->enter($__internal_0eb4a53771abd92e569e855b5eb2f8946fbfbc6ba39a3e44e663492adf5662c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ca147cfe5ddb7fafec1c70afef396d7c5bec2a192a9868e3138eecba0686a108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca147cfe5ddb7fafec1c70afef396d7c5bec2a192a9868e3138eecba0686a108->enter($__internal_ca147cfe5ddb7fafec1c70afef396d7c5bec2a192a9868e3138eecba0686a108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ca147cfe5ddb7fafec1c70afef396d7c5bec2a192a9868e3138eecba0686a108->leave($__internal_ca147cfe5ddb7fafec1c70afef396d7c5bec2a192a9868e3138eecba0686a108_prof);

        
        $__internal_0eb4a53771abd92e569e855b5eb2f8946fbfbc6ba39a3e44e663492adf5662c9->leave($__internal_0eb4a53771abd92e569e855b5eb2f8946fbfbc6ba39a3e44e663492adf5662c9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
