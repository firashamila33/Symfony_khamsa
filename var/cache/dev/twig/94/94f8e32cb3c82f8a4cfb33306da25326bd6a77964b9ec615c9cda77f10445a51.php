<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_c34d6234bb4667c4e991ae5151af02e730b0d3e2826d78bcac48901efbba70b8 extends Twig_Template
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
        $__internal_50db6c4756b7589598990563ba200a0332cd15fd29fb1daeb54553facc039dc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50db6c4756b7589598990563ba200a0332cd15fd29fb1daeb54553facc039dc3->enter($__internal_50db6c4756b7589598990563ba200a0332cd15fd29fb1daeb54553facc039dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_c1807b2f4ef4339e7df9a11c5f9a20edbe01e418b55e8c8b8d6baa40862f8119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1807b2f4ef4339e7df9a11c5f9a20edbe01e418b55e8c8b8d6baa40862f8119->enter($__internal_c1807b2f4ef4339e7df9a11c5f9a20edbe01e418b55e8c8b8d6baa40862f8119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_50db6c4756b7589598990563ba200a0332cd15fd29fb1daeb54553facc039dc3->leave($__internal_50db6c4756b7589598990563ba200a0332cd15fd29fb1daeb54553facc039dc3_prof);

        
        $__internal_c1807b2f4ef4339e7df9a11c5f9a20edbe01e418b55e8c8b8d6baa40862f8119->leave($__internal_c1807b2f4ef4339e7df9a11c5f9a20edbe01e418b55e8c8b8d6baa40862f8119_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6d54734309e37e96939946d3afa7818381aa8d9a20bc55b84d2728e16c893fad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d54734309e37e96939946d3afa7818381aa8d9a20bc55b84d2728e16c893fad->enter($__internal_6d54734309e37e96939946d3afa7818381aa8d9a20bc55b84d2728e16c893fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_61643af04e64228e3fa4fb858a403ce960ae2a98e43ed5773a6641a3f53228ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61643af04e64228e3fa4fb858a403ce960ae2a98e43ed5773a6641a3f53228ab->enter($__internal_61643af04e64228e3fa4fb858a403ce960ae2a98e43ed5773a6641a3f53228ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_61643af04e64228e3fa4fb858a403ce960ae2a98e43ed5773a6641a3f53228ab->leave($__internal_61643af04e64228e3fa4fb858a403ce960ae2a98e43ed5773a6641a3f53228ab_prof);

        
        $__internal_6d54734309e37e96939946d3afa7818381aa8d9a20bc55b84d2728e16c893fad->leave($__internal_6d54734309e37e96939946d3afa7818381aa8d9a20bc55b84d2728e16c893fad_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1b3e65cc0c08097a802f4c378f88a78369a717b2f62f3b458b1c0a8483f89e5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b3e65cc0c08097a802f4c378f88a78369a717b2f62f3b458b1c0a8483f89e5a->enter($__internal_1b3e65cc0c08097a802f4c378f88a78369a717b2f62f3b458b1c0a8483f89e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_e82d175f4b0200b56f0e7126266ab0e4f77a3dedbc149e29132c278cf6664dda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e82d175f4b0200b56f0e7126266ab0e4f77a3dedbc149e29132c278cf6664dda->enter($__internal_e82d175f4b0200b56f0e7126266ab0e4f77a3dedbc149e29132c278cf6664dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e82d175f4b0200b56f0e7126266ab0e4f77a3dedbc149e29132c278cf6664dda->leave($__internal_e82d175f4b0200b56f0e7126266ab0e4f77a3dedbc149e29132c278cf6664dda_prof);

        
        $__internal_1b3e65cc0c08097a802f4c378f88a78369a717b2f62f3b458b1c0a8483f89e5a->leave($__internal_1b3e65cc0c08097a802f4c378f88a78369a717b2f62f3b458b1c0a8483f89e5a_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_117aff21939e891b9be59f44531214ee52d58bd367375899705f5947cc2c5f6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_117aff21939e891b9be59f44531214ee52d58bd367375899705f5947cc2c5f6c->enter($__internal_117aff21939e891b9be59f44531214ee52d58bd367375899705f5947cc2c5f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_9769a0b89a00882280149fb93a52abdf23bbecbc5e2d25f53131c9ded0c30c08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9769a0b89a00882280149fb93a52abdf23bbecbc5e2d25f53131c9ded0c30c08->enter($__internal_9769a0b89a00882280149fb93a52abdf23bbecbc5e2d25f53131c9ded0c30c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9769a0b89a00882280149fb93a52abdf23bbecbc5e2d25f53131c9ded0c30c08->leave($__internal_9769a0b89a00882280149fb93a52abdf23bbecbc5e2d25f53131c9ded0c30c08_prof);

        
        $__internal_117aff21939e891b9be59f44531214ee52d58bd367375899705f5947cc2c5f6c->leave($__internal_117aff21939e891b9be59f44531214ee52d58bd367375899705f5947cc2c5f6c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
