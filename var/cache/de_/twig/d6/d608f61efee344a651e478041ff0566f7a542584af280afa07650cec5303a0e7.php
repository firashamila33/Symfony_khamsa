<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_38e52be166d54411d2819437b784769294c3b78ab7997079b83d8cf68dcb5dd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4ff25071c0e2841d8a7bf0b01dd6582ce88aed9bb5194acdc1e6f40d3216381 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4ff25071c0e2841d8a7bf0b01dd6582ce88aed9bb5194acdc1e6f40d3216381->enter($__internal_a4ff25071c0e2841d8a7bf0b01dd6582ce88aed9bb5194acdc1e6f40d3216381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_cc25686d4bc9db5be7d9ab76690cf59a3f4c067bcf2fb0d5c16bb96981d0fcbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc25686d4bc9db5be7d9ab76690cf59a3f4c067bcf2fb0d5c16bb96981d0fcbd->enter($__internal_cc25686d4bc9db5be7d9ab76690cf59a3f4c067bcf2fb0d5c16bb96981d0fcbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4ff25071c0e2841d8a7bf0b01dd6582ce88aed9bb5194acdc1e6f40d3216381->leave($__internal_a4ff25071c0e2841d8a7bf0b01dd6582ce88aed9bb5194acdc1e6f40d3216381_prof);

        
        $__internal_cc25686d4bc9db5be7d9ab76690cf59a3f4c067bcf2fb0d5c16bb96981d0fcbd->leave($__internal_cc25686d4bc9db5be7d9ab76690cf59a3f4c067bcf2fb0d5c16bb96981d0fcbd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5071d4cb0bfcdcfd3b9f54d707bd42f3312eb54b1285b76a34f84b3836d73769 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5071d4cb0bfcdcfd3b9f54d707bd42f3312eb54b1285b76a34f84b3836d73769->enter($__internal_5071d4cb0bfcdcfd3b9f54d707bd42f3312eb54b1285b76a34f84b3836d73769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_668f9302bd6ca3892920809af53b630955fd881ea584e0342fb48064c9fe139a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_668f9302bd6ca3892920809af53b630955fd881ea584e0342fb48064c9fe139a->enter($__internal_668f9302bd6ca3892920809af53b630955fd881ea584e0342fb48064c9fe139a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_668f9302bd6ca3892920809af53b630955fd881ea584e0342fb48064c9fe139a->leave($__internal_668f9302bd6ca3892920809af53b630955fd881ea584e0342fb48064c9fe139a_prof);

        
        $__internal_5071d4cb0bfcdcfd3b9f54d707bd42f3312eb54b1285b76a34f84b3836d73769->leave($__internal_5071d4cb0bfcdcfd3b9f54d707bd42f3312eb54b1285b76a34f84b3836d73769_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
