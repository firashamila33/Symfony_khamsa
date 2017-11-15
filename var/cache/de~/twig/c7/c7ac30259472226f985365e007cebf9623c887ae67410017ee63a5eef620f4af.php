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
        $__internal_953b40402491d72eb23a3e38614bac1a211900c8a89580987873ca7763bef29a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_953b40402491d72eb23a3e38614bac1a211900c8a89580987873ca7763bef29a->enter($__internal_953b40402491d72eb23a3e38614bac1a211900c8a89580987873ca7763bef29a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_e9df780471010c9795c2faf0e6da1e0fcd0605113de48e88ae93cad374a1fea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9df780471010c9795c2faf0e6da1e0fcd0605113de48e88ae93cad374a1fea2->enter($__internal_e9df780471010c9795c2faf0e6da1e0fcd0605113de48e88ae93cad374a1fea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_953b40402491d72eb23a3e38614bac1a211900c8a89580987873ca7763bef29a->leave($__internal_953b40402491d72eb23a3e38614bac1a211900c8a89580987873ca7763bef29a_prof);

        
        $__internal_e9df780471010c9795c2faf0e6da1e0fcd0605113de48e88ae93cad374a1fea2->leave($__internal_e9df780471010c9795c2faf0e6da1e0fcd0605113de48e88ae93cad374a1fea2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_978e16c078156309e5486d5030cfe8292af14917924acd94e6120aafbbd8f8dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_978e16c078156309e5486d5030cfe8292af14917924acd94e6120aafbbd8f8dc->enter($__internal_978e16c078156309e5486d5030cfe8292af14917924acd94e6120aafbbd8f8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_7fac02462aeb854efe729d4ad8f37a8dbb822496e3fe54ba233bdcf09b90889d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fac02462aeb854efe729d4ad8f37a8dbb822496e3fe54ba233bdcf09b90889d->enter($__internal_7fac02462aeb854efe729d4ad8f37a8dbb822496e3fe54ba233bdcf09b90889d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_7fac02462aeb854efe729d4ad8f37a8dbb822496e3fe54ba233bdcf09b90889d->leave($__internal_7fac02462aeb854efe729d4ad8f37a8dbb822496e3fe54ba233bdcf09b90889d_prof);

        
        $__internal_978e16c078156309e5486d5030cfe8292af14917924acd94e6120aafbbd8f8dc->leave($__internal_978e16c078156309e5486d5030cfe8292af14917924acd94e6120aafbbd8f8dc_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0cd7073b84423068721856173f53654f0693fbb605148a8afe3e65391a10c3d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cd7073b84423068721856173f53654f0693fbb605148a8afe3e65391a10c3d2->enter($__internal_0cd7073b84423068721856173f53654f0693fbb605148a8afe3e65391a10c3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_8170525c03eea31cddcfd6b89ec256afd5ffe7348b82af5851493e0ca934bb1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8170525c03eea31cddcfd6b89ec256afd5ffe7348b82af5851493e0ca934bb1c->enter($__internal_8170525c03eea31cddcfd6b89ec256afd5ffe7348b82af5851493e0ca934bb1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8170525c03eea31cddcfd6b89ec256afd5ffe7348b82af5851493e0ca934bb1c->leave($__internal_8170525c03eea31cddcfd6b89ec256afd5ffe7348b82af5851493e0ca934bb1c_prof);

        
        $__internal_0cd7073b84423068721856173f53654f0693fbb605148a8afe3e65391a10c3d2->leave($__internal_0cd7073b84423068721856173f53654f0693fbb605148a8afe3e65391a10c3d2_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5eabb17aa4724290ea4287efefb2996d86d0c36f9854bb8b8cfca03eb319baa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eabb17aa4724290ea4287efefb2996d86d0c36f9854bb8b8cfca03eb319baa8->enter($__internal_5eabb17aa4724290ea4287efefb2996d86d0c36f9854bb8b8cfca03eb319baa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_ec2b46689f223503d436b948fe95d71cac60f1111e6a540a754a0047d50c11c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec2b46689f223503d436b948fe95d71cac60f1111e6a540a754a0047d50c11c3->enter($__internal_ec2b46689f223503d436b948fe95d71cac60f1111e6a540a754a0047d50c11c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ec2b46689f223503d436b948fe95d71cac60f1111e6a540a754a0047d50c11c3->leave($__internal_ec2b46689f223503d436b948fe95d71cac60f1111e6a540a754a0047d50c11c3_prof);

        
        $__internal_5eabb17aa4724290ea4287efefb2996d86d0c36f9854bb8b8cfca03eb319baa8->leave($__internal_5eabb17aa4724290ea4287efefb2996d86d0c36f9854bb8b8cfca03eb319baa8_prof);

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
