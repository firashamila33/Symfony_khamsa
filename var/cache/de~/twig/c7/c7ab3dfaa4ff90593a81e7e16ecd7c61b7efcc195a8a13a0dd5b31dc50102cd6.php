<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_b8f70f44f5e1877f9a80dbc5b25691146f41bc52907a64854c6e265d0152b7ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fbd23262ad04e00353d34641c78869018fc8fc4d2a2cc5b4aeaf1155d8613df1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbd23262ad04e00353d34641c78869018fc8fc4d2a2cc5b4aeaf1155d8613df1->enter($__internal_fbd23262ad04e00353d34641c78869018fc8fc4d2a2cc5b4aeaf1155d8613df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_e372929ed418610f7af6fd71300085a3fe8175233b3090985206d073261b60a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e372929ed418610f7af6fd71300085a3fe8175233b3090985206d073261b60a5->enter($__internal_e372929ed418610f7af6fd71300085a3fe8175233b3090985206d073261b60a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fbd23262ad04e00353d34641c78869018fc8fc4d2a2cc5b4aeaf1155d8613df1->leave($__internal_fbd23262ad04e00353d34641c78869018fc8fc4d2a2cc5b4aeaf1155d8613df1_prof);

        
        $__internal_e372929ed418610f7af6fd71300085a3fe8175233b3090985206d073261b60a5->leave($__internal_e372929ed418610f7af6fd71300085a3fe8175233b3090985206d073261b60a5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ee0dbc677ea18b88d7433fd6bf245f7abc60a48e7aade2b025946fcac72272af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee0dbc677ea18b88d7433fd6bf245f7abc60a48e7aade2b025946fcac72272af->enter($__internal_ee0dbc677ea18b88d7433fd6bf245f7abc60a48e7aade2b025946fcac72272af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0159e5d8bb55b9b26c6d63de941cb9b0d222729d58f7df8e06b9acc0c1d8522c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0159e5d8bb55b9b26c6d63de941cb9b0d222729d58f7df8e06b9acc0c1d8522c->enter($__internal_0159e5d8bb55b9b26c6d63de941cb9b0d222729d58f7df8e06b9acc0c1d8522c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0159e5d8bb55b9b26c6d63de941cb9b0d222729d58f7df8e06b9acc0c1d8522c->leave($__internal_0159e5d8bb55b9b26c6d63de941cb9b0d222729d58f7df8e06b9acc0c1d8522c_prof);

        
        $__internal_ee0dbc677ea18b88d7433fd6bf245f7abc60a48e7aade2b025946fcac72272af->leave($__internal_ee0dbc677ea18b88d7433fd6bf245f7abc60a48e7aade2b025946fcac72272af_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
