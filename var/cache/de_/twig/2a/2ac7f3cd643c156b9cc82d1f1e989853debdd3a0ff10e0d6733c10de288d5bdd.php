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
        $__internal_25de03ef5758c286b7817287819d54242f16ead4c76e1d3ee64e39e5264b28dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25de03ef5758c286b7817287819d54242f16ead4c76e1d3ee64e39e5264b28dc->enter($__internal_25de03ef5758c286b7817287819d54242f16ead4c76e1d3ee64e39e5264b28dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_ccda6779f7c75aa0263e5ff99bc3b1bbaff91146cfd791327e85cb9a07716d7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccda6779f7c75aa0263e5ff99bc3b1bbaff91146cfd791327e85cb9a07716d7c->enter($__internal_ccda6779f7c75aa0263e5ff99bc3b1bbaff91146cfd791327e85cb9a07716d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25de03ef5758c286b7817287819d54242f16ead4c76e1d3ee64e39e5264b28dc->leave($__internal_25de03ef5758c286b7817287819d54242f16ead4c76e1d3ee64e39e5264b28dc_prof);

        
        $__internal_ccda6779f7c75aa0263e5ff99bc3b1bbaff91146cfd791327e85cb9a07716d7c->leave($__internal_ccda6779f7c75aa0263e5ff99bc3b1bbaff91146cfd791327e85cb9a07716d7c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6387e4a1238f8502ad1dc67fb93bf3bcbc24a91ed069d765f5c289e80a66cc76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6387e4a1238f8502ad1dc67fb93bf3bcbc24a91ed069d765f5c289e80a66cc76->enter($__internal_6387e4a1238f8502ad1dc67fb93bf3bcbc24a91ed069d765f5c289e80a66cc76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7c88a9ddb60a04bc33a380edfd9778679b9f540a1b2cffb5da4571e9f5ca7deb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c88a9ddb60a04bc33a380edfd9778679b9f540a1b2cffb5da4571e9f5ca7deb->enter($__internal_7c88a9ddb60a04bc33a380edfd9778679b9f540a1b2cffb5da4571e9f5ca7deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7c88a9ddb60a04bc33a380edfd9778679b9f540a1b2cffb5da4571e9f5ca7deb->leave($__internal_7c88a9ddb60a04bc33a380edfd9778679b9f540a1b2cffb5da4571e9f5ca7deb_prof);

        
        $__internal_6387e4a1238f8502ad1dc67fb93bf3bcbc24a91ed069d765f5c289e80a66cc76->leave($__internal_6387e4a1238f8502ad1dc67fb93bf3bcbc24a91ed069d765f5c289e80a66cc76_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_902650d665462e821062d21a5d6bb756256c743160dee8b6bf7e368baafefa37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_902650d665462e821062d21a5d6bb756256c743160dee8b6bf7e368baafefa37->enter($__internal_902650d665462e821062d21a5d6bb756256c743160dee8b6bf7e368baafefa37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_de0cee2126026e11ba596976508f1ea05aad5eabba5e5b3145f744733e9f0b21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de0cee2126026e11ba596976508f1ea05aad5eabba5e5b3145f744733e9f0b21->enter($__internal_de0cee2126026e11ba596976508f1ea05aad5eabba5e5b3145f744733e9f0b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_de0cee2126026e11ba596976508f1ea05aad5eabba5e5b3145f744733e9f0b21->leave($__internal_de0cee2126026e11ba596976508f1ea05aad5eabba5e5b3145f744733e9f0b21_prof);

        
        $__internal_902650d665462e821062d21a5d6bb756256c743160dee8b6bf7e368baafefa37->leave($__internal_902650d665462e821062d21a5d6bb756256c743160dee8b6bf7e368baafefa37_prof);

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
