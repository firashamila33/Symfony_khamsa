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
        $__internal_3bc7e5b4b15798543ed735eccce060bbd1ad1c6b848b55240d0b0e9f5335db4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bc7e5b4b15798543ed735eccce060bbd1ad1c6b848b55240d0b0e9f5335db4e->enter($__internal_3bc7e5b4b15798543ed735eccce060bbd1ad1c6b848b55240d0b0e9f5335db4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_21d83a2061bf6b76c9f13da873952694e1e4315908c5917b22d5e269799eac47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d83a2061bf6b76c9f13da873952694e1e4315908c5917b22d5e269799eac47->enter($__internal_21d83a2061bf6b76c9f13da873952694e1e4315908c5917b22d5e269799eac47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3bc7e5b4b15798543ed735eccce060bbd1ad1c6b848b55240d0b0e9f5335db4e->leave($__internal_3bc7e5b4b15798543ed735eccce060bbd1ad1c6b848b55240d0b0e9f5335db4e_prof);

        
        $__internal_21d83a2061bf6b76c9f13da873952694e1e4315908c5917b22d5e269799eac47->leave($__internal_21d83a2061bf6b76c9f13da873952694e1e4315908c5917b22d5e269799eac47_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_558c5f3c18d78f4d4b71209f2407511950224405cf479adc3f05c6e7e7e12889 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_558c5f3c18d78f4d4b71209f2407511950224405cf479adc3f05c6e7e7e12889->enter($__internal_558c5f3c18d78f4d4b71209f2407511950224405cf479adc3f05c6e7e7e12889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_676eed70127d19a4f22ad2360c2a0a71306da35fc332ba55af48dbfbd73a9628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_676eed70127d19a4f22ad2360c2a0a71306da35fc332ba55af48dbfbd73a9628->enter($__internal_676eed70127d19a4f22ad2360c2a0a71306da35fc332ba55af48dbfbd73a9628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_676eed70127d19a4f22ad2360c2a0a71306da35fc332ba55af48dbfbd73a9628->leave($__internal_676eed70127d19a4f22ad2360c2a0a71306da35fc332ba55af48dbfbd73a9628_prof);

        
        $__internal_558c5f3c18d78f4d4b71209f2407511950224405cf479adc3f05c6e7e7e12889->leave($__internal_558c5f3c18d78f4d4b71209f2407511950224405cf479adc3f05c6e7e7e12889_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_684452a134d8e6a7660522a324c87a3164310668a34b92236e3183503117619a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_684452a134d8e6a7660522a324c87a3164310668a34b92236e3183503117619a->enter($__internal_684452a134d8e6a7660522a324c87a3164310668a34b92236e3183503117619a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_1c3928d7fb9bbdfe8fe3e495d61535808b621d5ebcdee0869fbd8664ab788a6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c3928d7fb9bbdfe8fe3e495d61535808b621d5ebcdee0869fbd8664ab788a6d->enter($__internal_1c3928d7fb9bbdfe8fe3e495d61535808b621d5ebcdee0869fbd8664ab788a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1c3928d7fb9bbdfe8fe3e495d61535808b621d5ebcdee0869fbd8664ab788a6d->leave($__internal_1c3928d7fb9bbdfe8fe3e495d61535808b621d5ebcdee0869fbd8664ab788a6d_prof);

        
        $__internal_684452a134d8e6a7660522a324c87a3164310668a34b92236e3183503117619a->leave($__internal_684452a134d8e6a7660522a324c87a3164310668a34b92236e3183503117619a_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6db455b9877c20b57c9ee3aa841a83adf8f9d84d1dab2925a6d413da836a9cf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6db455b9877c20b57c9ee3aa841a83adf8f9d84d1dab2925a6d413da836a9cf5->enter($__internal_6db455b9877c20b57c9ee3aa841a83adf8f9d84d1dab2925a6d413da836a9cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_bf754cf5ba1b1282d93664016ba5f632172f4a1365cc09eff3c4ae443dae0330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf754cf5ba1b1282d93664016ba5f632172f4a1365cc09eff3c4ae443dae0330->enter($__internal_bf754cf5ba1b1282d93664016ba5f632172f4a1365cc09eff3c4ae443dae0330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_bf754cf5ba1b1282d93664016ba5f632172f4a1365cc09eff3c4ae443dae0330->leave($__internal_bf754cf5ba1b1282d93664016ba5f632172f4a1365cc09eff3c4ae443dae0330_prof);

        
        $__internal_6db455b9877c20b57c9ee3aa841a83adf8f9d84d1dab2925a6d413da836a9cf5->leave($__internal_6db455b9877c20b57c9ee3aa841a83adf8f9d84d1dab2925a6d413da836a9cf5_prof);

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
