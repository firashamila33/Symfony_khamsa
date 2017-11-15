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
        $__internal_4645f23ec03c64b5bc0a02da9ef9f9b76a1e403150c90dc32d5fbfd929b39645 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4645f23ec03c64b5bc0a02da9ef9f9b76a1e403150c90dc32d5fbfd929b39645->enter($__internal_4645f23ec03c64b5bc0a02da9ef9f9b76a1e403150c90dc32d5fbfd929b39645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_e0328516b5f8f9f77f4e337a3dfed326aeef4a38781814fd11f5fac078839fa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0328516b5f8f9f77f4e337a3dfed326aeef4a38781814fd11f5fac078839fa5->enter($__internal_e0328516b5f8f9f77f4e337a3dfed326aeef4a38781814fd11f5fac078839fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4645f23ec03c64b5bc0a02da9ef9f9b76a1e403150c90dc32d5fbfd929b39645->leave($__internal_4645f23ec03c64b5bc0a02da9ef9f9b76a1e403150c90dc32d5fbfd929b39645_prof);

        
        $__internal_e0328516b5f8f9f77f4e337a3dfed326aeef4a38781814fd11f5fac078839fa5->leave($__internal_e0328516b5f8f9f77f4e337a3dfed326aeef4a38781814fd11f5fac078839fa5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c4856d7085860228f1ded97aa6f1fa489d63951f9be2db9eb3a0529b500c085c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4856d7085860228f1ded97aa6f1fa489d63951f9be2db9eb3a0529b500c085c->enter($__internal_c4856d7085860228f1ded97aa6f1fa489d63951f9be2db9eb3a0529b500c085c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_492ada1cdf41f06a89bc276db53962d7aed6df76d50716908cd0b61e962a31f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_492ada1cdf41f06a89bc276db53962d7aed6df76d50716908cd0b61e962a31f2->enter($__internal_492ada1cdf41f06a89bc276db53962d7aed6df76d50716908cd0b61e962a31f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_492ada1cdf41f06a89bc276db53962d7aed6df76d50716908cd0b61e962a31f2->leave($__internal_492ada1cdf41f06a89bc276db53962d7aed6df76d50716908cd0b61e962a31f2_prof);

        
        $__internal_c4856d7085860228f1ded97aa6f1fa489d63951f9be2db9eb3a0529b500c085c->leave($__internal_c4856d7085860228f1ded97aa6f1fa489d63951f9be2db9eb3a0529b500c085c_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_28b667140443d9c0f3476c593ab7a9f9869903cb43d6271a8801811fd6ba89a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28b667140443d9c0f3476c593ab7a9f9869903cb43d6271a8801811fd6ba89a4->enter($__internal_28b667140443d9c0f3476c593ab7a9f9869903cb43d6271a8801811fd6ba89a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_29d0ade0a3d254ba1b69183fb94373704f0810eca4d76e69ce08f0086b433446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29d0ade0a3d254ba1b69183fb94373704f0810eca4d76e69ce08f0086b433446->enter($__internal_29d0ade0a3d254ba1b69183fb94373704f0810eca4d76e69ce08f0086b433446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_29d0ade0a3d254ba1b69183fb94373704f0810eca4d76e69ce08f0086b433446->leave($__internal_29d0ade0a3d254ba1b69183fb94373704f0810eca4d76e69ce08f0086b433446_prof);

        
        $__internal_28b667140443d9c0f3476c593ab7a9f9869903cb43d6271a8801811fd6ba89a4->leave($__internal_28b667140443d9c0f3476c593ab7a9f9869903cb43d6271a8801811fd6ba89a4_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6d4abaa917bc6f544d8a9dd5a58f978576434b4f6e2b8d766ad669eade852091 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d4abaa917bc6f544d8a9dd5a58f978576434b4f6e2b8d766ad669eade852091->enter($__internal_6d4abaa917bc6f544d8a9dd5a58f978576434b4f6e2b8d766ad669eade852091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_751c1f93b593510771f40fa37cd672a7d320647cf417b039d6e266280c4b370a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_751c1f93b593510771f40fa37cd672a7d320647cf417b039d6e266280c4b370a->enter($__internal_751c1f93b593510771f40fa37cd672a7d320647cf417b039d6e266280c4b370a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_751c1f93b593510771f40fa37cd672a7d320647cf417b039d6e266280c4b370a->leave($__internal_751c1f93b593510771f40fa37cd672a7d320647cf417b039d6e266280c4b370a_prof);

        
        $__internal_6d4abaa917bc6f544d8a9dd5a58f978576434b4f6e2b8d766ad669eade852091->leave($__internal_6d4abaa917bc6f544d8a9dd5a58f978576434b4f6e2b8d766ad669eade852091_prof);

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
