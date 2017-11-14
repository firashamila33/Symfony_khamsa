<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_cca64bc99ca5d542e5f7b9e7078562e09de6dc014171fe835539f6802c240973 extends Twig_Template
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
        $__internal_0a9ab5a57375ad35d17259a1343b1d5697918417cfcbee44ad161991e9b07f10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a9ab5a57375ad35d17259a1343b1d5697918417cfcbee44ad161991e9b07f10->enter($__internal_0a9ab5a57375ad35d17259a1343b1d5697918417cfcbee44ad161991e9b07f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_b54a751b16e81385bb2de6d8721ca0986ba5bc9d7af9c20d89868d6180320a17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b54a751b16e81385bb2de6d8721ca0986ba5bc9d7af9c20d89868d6180320a17->enter($__internal_b54a751b16e81385bb2de6d8721ca0986ba5bc9d7af9c20d89868d6180320a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0a9ab5a57375ad35d17259a1343b1d5697918417cfcbee44ad161991e9b07f10->leave($__internal_0a9ab5a57375ad35d17259a1343b1d5697918417cfcbee44ad161991e9b07f10_prof);

        
        $__internal_b54a751b16e81385bb2de6d8721ca0986ba5bc9d7af9c20d89868d6180320a17->leave($__internal_b54a751b16e81385bb2de6d8721ca0986ba5bc9d7af9c20d89868d6180320a17_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_937137cd7d6b8ea0f31026c2c615fc925e76a326f53250427cd78b4c6be67347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_937137cd7d6b8ea0f31026c2c615fc925e76a326f53250427cd78b4c6be67347->enter($__internal_937137cd7d6b8ea0f31026c2c615fc925e76a326f53250427cd78b4c6be67347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_e584b541bd9d0eb062b524b283297bd8035d02a4a6aad96f236a4ddc2b647122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e584b541bd9d0eb062b524b283297bd8035d02a4a6aad96f236a4ddc2b647122->enter($__internal_e584b541bd9d0eb062b524b283297bd8035d02a4a6aad96f236a4ddc2b647122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_e584b541bd9d0eb062b524b283297bd8035d02a4a6aad96f236a4ddc2b647122->leave($__internal_e584b541bd9d0eb062b524b283297bd8035d02a4a6aad96f236a4ddc2b647122_prof);

        
        $__internal_937137cd7d6b8ea0f31026c2c615fc925e76a326f53250427cd78b4c6be67347->leave($__internal_937137cd7d6b8ea0f31026c2c615fc925e76a326f53250427cd78b4c6be67347_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_312d1f750b49b08d295ea8d24cca754d787c6cbe4e03c2e5b0e5b9b611cca95b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_312d1f750b49b08d295ea8d24cca754d787c6cbe4e03c2e5b0e5b9b611cca95b->enter($__internal_312d1f750b49b08d295ea8d24cca754d787c6cbe4e03c2e5b0e5b9b611cca95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_ef548b3035e6131fb451a8c13e468a11bfe978ba6611684a6e65e62e1a73c05b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef548b3035e6131fb451a8c13e468a11bfe978ba6611684a6e65e62e1a73c05b->enter($__internal_ef548b3035e6131fb451a8c13e468a11bfe978ba6611684a6e65e62e1a73c05b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ef548b3035e6131fb451a8c13e468a11bfe978ba6611684a6e65e62e1a73c05b->leave($__internal_ef548b3035e6131fb451a8c13e468a11bfe978ba6611684a6e65e62e1a73c05b_prof);

        
        $__internal_312d1f750b49b08d295ea8d24cca754d787c6cbe4e03c2e5b0e5b9b611cca95b->leave($__internal_312d1f750b49b08d295ea8d24cca754d787c6cbe4e03c2e5b0e5b9b611cca95b_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3dcf8185413e0b72411499b8513e6b63ae764aa6d0c27a7dfd87a6ac0b68c036 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dcf8185413e0b72411499b8513e6b63ae764aa6d0c27a7dfd87a6ac0b68c036->enter($__internal_3dcf8185413e0b72411499b8513e6b63ae764aa6d0c27a7dfd87a6ac0b68c036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_a960d2a93ea7f700597be9b8597a367be889f3932ec3a4c5c898254e5949519d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a960d2a93ea7f700597be9b8597a367be889f3932ec3a4c5c898254e5949519d->enter($__internal_a960d2a93ea7f700597be9b8597a367be889f3932ec3a4c5c898254e5949519d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a960d2a93ea7f700597be9b8597a367be889f3932ec3a4c5c898254e5949519d->leave($__internal_a960d2a93ea7f700597be9b8597a367be889f3932ec3a4c5c898254e5949519d_prof);

        
        $__internal_3dcf8185413e0b72411499b8513e6b63ae764aa6d0c27a7dfd87a6ac0b68c036->leave($__internal_3dcf8185413e0b72411499b8513e6b63ae764aa6d0c27a7dfd87a6ac0b68c036_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
", "@FOSUser/Registration/email.txt.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
