<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_7efe59fd45d88a2d3992e5f0d3ccc064a93f955ca09501ecf6fe9d6c3c95910a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_e77a2ad44dd365cbf00e5716bc295bc8bd1509e655ae57335fd892a2148a9aaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e77a2ad44dd365cbf00e5716bc295bc8bd1509e655ae57335fd892a2148a9aaf->enter($__internal_e77a2ad44dd365cbf00e5716bc295bc8bd1509e655ae57335fd892a2148a9aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_526a169feb501b83f03008434b2b0d323461c1c72c2ab95c28d3f34a607c50c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_526a169feb501b83f03008434b2b0d323461c1c72c2ab95c28d3f34a607c50c0->enter($__internal_526a169feb501b83f03008434b2b0d323461c1c72c2ab95c28d3f34a607c50c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e77a2ad44dd365cbf00e5716bc295bc8bd1509e655ae57335fd892a2148a9aaf->leave($__internal_e77a2ad44dd365cbf00e5716bc295bc8bd1509e655ae57335fd892a2148a9aaf_prof);

        
        $__internal_526a169feb501b83f03008434b2b0d323461c1c72c2ab95c28d3f34a607c50c0->leave($__internal_526a169feb501b83f03008434b2b0d323461c1c72c2ab95c28d3f34a607c50c0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1ce308c0c797701069453ceabf4748cf2c5e174cfe99a619e4ddb6b778e7b285 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ce308c0c797701069453ceabf4748cf2c5e174cfe99a619e4ddb6b778e7b285->enter($__internal_1ce308c0c797701069453ceabf4748cf2c5e174cfe99a619e4ddb6b778e7b285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3eec1e8b88b9d3e6c002e97966bb747d9fe665d9bec749a15b0446992de1d75e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eec1e8b88b9d3e6c002e97966bb747d9fe665d9bec749a15b0446992de1d75e->enter($__internal_3eec1e8b88b9d3e6c002e97966bb747d9fe665d9bec749a15b0446992de1d75e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_3eec1e8b88b9d3e6c002e97966bb747d9fe665d9bec749a15b0446992de1d75e->leave($__internal_3eec1e8b88b9d3e6c002e97966bb747d9fe665d9bec749a15b0446992de1d75e_prof);

        
        $__internal_1ce308c0c797701069453ceabf4748cf2c5e174cfe99a619e4ddb6b778e7b285->leave($__internal_1ce308c0c797701069453ceabf4748cf2c5e174cfe99a619e4ddb6b778e7b285_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
