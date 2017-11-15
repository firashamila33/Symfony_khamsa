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
        $__internal_fcb53066209759308dd2dd06584bff6ec447566deb1231afb3cbc943f91bdb1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcb53066209759308dd2dd06584bff6ec447566deb1231afb3cbc943f91bdb1f->enter($__internal_fcb53066209759308dd2dd06584bff6ec447566deb1231afb3cbc943f91bdb1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_f9db4f3f915136126b758d13e4d2956e7188ae1bd7bee7e2b87ff9d8675557de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9db4f3f915136126b758d13e4d2956e7188ae1bd7bee7e2b87ff9d8675557de->enter($__internal_f9db4f3f915136126b758d13e4d2956e7188ae1bd7bee7e2b87ff9d8675557de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fcb53066209759308dd2dd06584bff6ec447566deb1231afb3cbc943f91bdb1f->leave($__internal_fcb53066209759308dd2dd06584bff6ec447566deb1231afb3cbc943f91bdb1f_prof);

        
        $__internal_f9db4f3f915136126b758d13e4d2956e7188ae1bd7bee7e2b87ff9d8675557de->leave($__internal_f9db4f3f915136126b758d13e4d2956e7188ae1bd7bee7e2b87ff9d8675557de_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a902a26b6eb6c7adf49e65090e2acbd0255a0fb0e1c67c5618d31b57876521e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a902a26b6eb6c7adf49e65090e2acbd0255a0fb0e1c67c5618d31b57876521e0->enter($__internal_a902a26b6eb6c7adf49e65090e2acbd0255a0fb0e1c67c5618d31b57876521e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_4c6e9a134651490b84d261a2edfeb3ac1434c4522f0f207654b3b90167d6b3cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c6e9a134651490b84d261a2edfeb3ac1434c4522f0f207654b3b90167d6b3cb->enter($__internal_4c6e9a134651490b84d261a2edfeb3ac1434c4522f0f207654b3b90167d6b3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_4c6e9a134651490b84d261a2edfeb3ac1434c4522f0f207654b3b90167d6b3cb->leave($__internal_4c6e9a134651490b84d261a2edfeb3ac1434c4522f0f207654b3b90167d6b3cb_prof);

        
        $__internal_a902a26b6eb6c7adf49e65090e2acbd0255a0fb0e1c67c5618d31b57876521e0->leave($__internal_a902a26b6eb6c7adf49e65090e2acbd0255a0fb0e1c67c5618d31b57876521e0_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_40697a6f4072e6940bf41652b76c34bb8d719bac87537675adf0ea53f55b98f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40697a6f4072e6940bf41652b76c34bb8d719bac87537675adf0ea53f55b98f6->enter($__internal_40697a6f4072e6940bf41652b76c34bb8d719bac87537675adf0ea53f55b98f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_9ba4608b1fae35f799fb7fbe89b99040587f16970cb64df637efaaf0c86441f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ba4608b1fae35f799fb7fbe89b99040587f16970cb64df637efaaf0c86441f4->enter($__internal_9ba4608b1fae35f799fb7fbe89b99040587f16970cb64df637efaaf0c86441f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9ba4608b1fae35f799fb7fbe89b99040587f16970cb64df637efaaf0c86441f4->leave($__internal_9ba4608b1fae35f799fb7fbe89b99040587f16970cb64df637efaaf0c86441f4_prof);

        
        $__internal_40697a6f4072e6940bf41652b76c34bb8d719bac87537675adf0ea53f55b98f6->leave($__internal_40697a6f4072e6940bf41652b76c34bb8d719bac87537675adf0ea53f55b98f6_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_91f171b4d86a0e301558e517b213be9b4f895b8b93e38291a62b39849fb7f5ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91f171b4d86a0e301558e517b213be9b4f895b8b93e38291a62b39849fb7f5ac->enter($__internal_91f171b4d86a0e301558e517b213be9b4f895b8b93e38291a62b39849fb7f5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_4e07333938714da5d10bf2f8dd00c770c4c40627108aaa5135d6054de1b1e727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e07333938714da5d10bf2f8dd00c770c4c40627108aaa5135d6054de1b1e727->enter($__internal_4e07333938714da5d10bf2f8dd00c770c4c40627108aaa5135d6054de1b1e727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4e07333938714da5d10bf2f8dd00c770c4c40627108aaa5135d6054de1b1e727->leave($__internal_4e07333938714da5d10bf2f8dd00c770c4c40627108aaa5135d6054de1b1e727_prof);

        
        $__internal_91f171b4d86a0e301558e517b213be9b4f895b8b93e38291a62b39849fb7f5ac->leave($__internal_91f171b4d86a0e301558e517b213be9b4f895b8b93e38291a62b39849fb7f5ac_prof);

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
