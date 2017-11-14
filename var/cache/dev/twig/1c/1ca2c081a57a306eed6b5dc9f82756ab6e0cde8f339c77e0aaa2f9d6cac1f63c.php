<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_deb9eaeb025dad5dd1daafe5cc2f8838e8226f59f0831f3b26cc514f56d1bcf6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6c836fda2a8cb2a9cf32af9940dd5343a2d4100e8801956b290bef0a50f98a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6c836fda2a8cb2a9cf32af9940dd5343a2d4100e8801956b290bef0a50f98a1->enter($__internal_c6c836fda2a8cb2a9cf32af9940dd5343a2d4100e8801956b290bef0a50f98a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_953b3580d5bf9d062933e242e9e7a0ed09fd0b208de4e67fab1375f5aa1da6da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_953b3580d5bf9d062933e242e9e7a0ed09fd0b208de4e67fab1375f5aa1da6da->enter($__internal_953b3580d5bf9d062933e242e9e7a0ed09fd0b208de4e67fab1375f5aa1da6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c6c836fda2a8cb2a9cf32af9940dd5343a2d4100e8801956b290bef0a50f98a1->leave($__internal_c6c836fda2a8cb2a9cf32af9940dd5343a2d4100e8801956b290bef0a50f98a1_prof);

        
        $__internal_953b3580d5bf9d062933e242e9e7a0ed09fd0b208de4e67fab1375f5aa1da6da->leave($__internal_953b3580d5bf9d062933e242e9e7a0ed09fd0b208de4e67fab1375f5aa1da6da_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8811182b7fa18e9546e631d058390ce64bf589a6e88c5ba5cc83fa999c5f098f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8811182b7fa18e9546e631d058390ce64bf589a6e88c5ba5cc83fa999c5f098f->enter($__internal_8811182b7fa18e9546e631d058390ce64bf589a6e88c5ba5cc83fa999c5f098f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_fb9cb3a37ac8e315b905247a846a2c5da0f81828dcfc0b1db54ad657cd3d6158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb9cb3a37ac8e315b905247a846a2c5da0f81828dcfc0b1db54ad657cd3d6158->enter($__internal_fb9cb3a37ac8e315b905247a846a2c5da0f81828dcfc0b1db54ad657cd3d6158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_fb9cb3a37ac8e315b905247a846a2c5da0f81828dcfc0b1db54ad657cd3d6158->leave($__internal_fb9cb3a37ac8e315b905247a846a2c5da0f81828dcfc0b1db54ad657cd3d6158_prof);

        
        $__internal_8811182b7fa18e9546e631d058390ce64bf589a6e88c5ba5cc83fa999c5f098f->leave($__internal_8811182b7fa18e9546e631d058390ce64bf589a6e88c5ba5cc83fa999c5f098f_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_345ed6c27c1c71914b07cb11c5b5f6c91f9ee641b2e692822872b25dbe63bb08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_345ed6c27c1c71914b07cb11c5b5f6c91f9ee641b2e692822872b25dbe63bb08->enter($__internal_345ed6c27c1c71914b07cb11c5b5f6c91f9ee641b2e692822872b25dbe63bb08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_93135e2d754884a7aee3eb35143ccd721301a9519293ba1be0db5d31499ebdae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93135e2d754884a7aee3eb35143ccd721301a9519293ba1be0db5d31499ebdae->enter($__internal_93135e2d754884a7aee3eb35143ccd721301a9519293ba1be0db5d31499ebdae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_93135e2d754884a7aee3eb35143ccd721301a9519293ba1be0db5d31499ebdae->leave($__internal_93135e2d754884a7aee3eb35143ccd721301a9519293ba1be0db5d31499ebdae_prof);

        
        $__internal_345ed6c27c1c71914b07cb11c5b5f6c91f9ee641b2e692822872b25dbe63bb08->leave($__internal_345ed6c27c1c71914b07cb11c5b5f6c91f9ee641b2e692822872b25dbe63bb08_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2135f18a46d5c85d45f5d57833db786d48b534aada08295884936580e6a28492 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2135f18a46d5c85d45f5d57833db786d48b534aada08295884936580e6a28492->enter($__internal_2135f18a46d5c85d45f5d57833db786d48b534aada08295884936580e6a28492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_306dd410feb235a099735be446899b28f11b3bcf34c9bdd0689361e10eb3e190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_306dd410feb235a099735be446899b28f11b3bcf34c9bdd0689361e10eb3e190->enter($__internal_306dd410feb235a099735be446899b28f11b3bcf34c9bdd0689361e10eb3e190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_306dd410feb235a099735be446899b28f11b3bcf34c9bdd0689361e10eb3e190->leave($__internal_306dd410feb235a099735be446899b28f11b3bcf34c9bdd0689361e10eb3e190_prof);

        
        $__internal_2135f18a46d5c85d45f5d57833db786d48b534aada08295884936580e6a28492->leave($__internal_2135f18a46d5c85d45f5d57833db786d48b534aada08295884936580e6a28492_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
