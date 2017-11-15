<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_c95c15967f2cb7be777f0d2c15b96addb2439e154b732b056321a8f441b0b57c extends Twig_Template
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
        $__internal_a250faac82d52b4e235abd508ffea8f48c2ee113c81d960f30a3500e551d66c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a250faac82d52b4e235abd508ffea8f48c2ee113c81d960f30a3500e551d66c3->enter($__internal_a250faac82d52b4e235abd508ffea8f48c2ee113c81d960f30a3500e551d66c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_d286695b176d135d2bb98351f45076ebfa3613fa30055efe39665636bfea3cac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d286695b176d135d2bb98351f45076ebfa3613fa30055efe39665636bfea3cac->enter($__internal_d286695b176d135d2bb98351f45076ebfa3613fa30055efe39665636bfea3cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a250faac82d52b4e235abd508ffea8f48c2ee113c81d960f30a3500e551d66c3->leave($__internal_a250faac82d52b4e235abd508ffea8f48c2ee113c81d960f30a3500e551d66c3_prof);

        
        $__internal_d286695b176d135d2bb98351f45076ebfa3613fa30055efe39665636bfea3cac->leave($__internal_d286695b176d135d2bb98351f45076ebfa3613fa30055efe39665636bfea3cac_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_83523076edd9718fe78fb05c8c37d283a74f80bae75a28994a9e1a696160d4d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83523076edd9718fe78fb05c8c37d283a74f80bae75a28994a9e1a696160d4d4->enter($__internal_83523076edd9718fe78fb05c8c37d283a74f80bae75a28994a9e1a696160d4d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_347d890f4d3b689531dd3acfe34c0a7a66b3e9e3e9f0eb4c3f1df94661fc58c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_347d890f4d3b689531dd3acfe34c0a7a66b3e9e3e9f0eb4c3f1df94661fc58c0->enter($__internal_347d890f4d3b689531dd3acfe34c0a7a66b3e9e3e9f0eb4c3f1df94661fc58c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_347d890f4d3b689531dd3acfe34c0a7a66b3e9e3e9f0eb4c3f1df94661fc58c0->leave($__internal_347d890f4d3b689531dd3acfe34c0a7a66b3e9e3e9f0eb4c3f1df94661fc58c0_prof);

        
        $__internal_83523076edd9718fe78fb05c8c37d283a74f80bae75a28994a9e1a696160d4d4->leave($__internal_83523076edd9718fe78fb05c8c37d283a74f80bae75a28994a9e1a696160d4d4_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a98136215e428dc8d9bbcf3e3f86f18271c5ec3ced171b95b5c33f9dc11b25e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a98136215e428dc8d9bbcf3e3f86f18271c5ec3ced171b95b5c33f9dc11b25e3->enter($__internal_a98136215e428dc8d9bbcf3e3f86f18271c5ec3ced171b95b5c33f9dc11b25e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_81847d7aae8ea995db9926ecf2e1da92002f2700ac8fe3dcca1c5080af1d6b3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81847d7aae8ea995db9926ecf2e1da92002f2700ac8fe3dcca1c5080af1d6b3b->enter($__internal_81847d7aae8ea995db9926ecf2e1da92002f2700ac8fe3dcca1c5080af1d6b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_81847d7aae8ea995db9926ecf2e1da92002f2700ac8fe3dcca1c5080af1d6b3b->leave($__internal_81847d7aae8ea995db9926ecf2e1da92002f2700ac8fe3dcca1c5080af1d6b3b_prof);

        
        $__internal_a98136215e428dc8d9bbcf3e3f86f18271c5ec3ced171b95b5c33f9dc11b25e3->leave($__internal_a98136215e428dc8d9bbcf3e3f86f18271c5ec3ced171b95b5c33f9dc11b25e3_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_965171bd0228a608f1cfd57eacf16e45380cf7c94add07d93a4d578b17f40ac6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_965171bd0228a608f1cfd57eacf16e45380cf7c94add07d93a4d578b17f40ac6->enter($__internal_965171bd0228a608f1cfd57eacf16e45380cf7c94add07d93a4d578b17f40ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_b57102b6d158b915b78361276d539bea38d9f0c504c4034674f4d7ed3c166ea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b57102b6d158b915b78361276d539bea38d9f0c504c4034674f4d7ed3c166ea4->enter($__internal_b57102b6d158b915b78361276d539bea38d9f0c504c4034674f4d7ed3c166ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b57102b6d158b915b78361276d539bea38d9f0c504c4034674f4d7ed3c166ea4->leave($__internal_b57102b6d158b915b78361276d539bea38d9f0c504c4034674f4d7ed3c166ea4_prof);

        
        $__internal_965171bd0228a608f1cfd57eacf16e45380cf7c94add07d93a4d578b17f40ac6->leave($__internal_965171bd0228a608f1cfd57eacf16e45380cf7c94add07d93a4d578b17f40ac6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
", "@FOSUser/Resetting/email.txt.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
