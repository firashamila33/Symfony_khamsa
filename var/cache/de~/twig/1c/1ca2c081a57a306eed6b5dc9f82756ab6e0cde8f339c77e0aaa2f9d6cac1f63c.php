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
        $__internal_2b3d8fd4ad28207302c210014ea5910afcdde8fafb0a211faa8f92c6ff200a54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b3d8fd4ad28207302c210014ea5910afcdde8fafb0a211faa8f92c6ff200a54->enter($__internal_2b3d8fd4ad28207302c210014ea5910afcdde8fafb0a211faa8f92c6ff200a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_efba150976b76a90557c182c261bb629ffccba3cac79e70567287f5c6398d1af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efba150976b76a90557c182c261bb629ffccba3cac79e70567287f5c6398d1af->enter($__internal_efba150976b76a90557c182c261bb629ffccba3cac79e70567287f5c6398d1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2b3d8fd4ad28207302c210014ea5910afcdde8fafb0a211faa8f92c6ff200a54->leave($__internal_2b3d8fd4ad28207302c210014ea5910afcdde8fafb0a211faa8f92c6ff200a54_prof);

        
        $__internal_efba150976b76a90557c182c261bb629ffccba3cac79e70567287f5c6398d1af->leave($__internal_efba150976b76a90557c182c261bb629ffccba3cac79e70567287f5c6398d1af_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_aa656c34bc6f6214c9ac27a8d523c8168251226bd22fb9c89458762b9c279424 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa656c34bc6f6214c9ac27a8d523c8168251226bd22fb9c89458762b9c279424->enter($__internal_aa656c34bc6f6214c9ac27a8d523c8168251226bd22fb9c89458762b9c279424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_9c35f87ee60b24cfda62437846e89ae37baafb9cbe1322de1039eda249d54c85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c35f87ee60b24cfda62437846e89ae37baafb9cbe1322de1039eda249d54c85->enter($__internal_9c35f87ee60b24cfda62437846e89ae37baafb9cbe1322de1039eda249d54c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_9c35f87ee60b24cfda62437846e89ae37baafb9cbe1322de1039eda249d54c85->leave($__internal_9c35f87ee60b24cfda62437846e89ae37baafb9cbe1322de1039eda249d54c85_prof);

        
        $__internal_aa656c34bc6f6214c9ac27a8d523c8168251226bd22fb9c89458762b9c279424->leave($__internal_aa656c34bc6f6214c9ac27a8d523c8168251226bd22fb9c89458762b9c279424_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0e22771d103189e114cdfe57d9bb8b74db2d5aa7264a1c4499b5d84f61109276 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e22771d103189e114cdfe57d9bb8b74db2d5aa7264a1c4499b5d84f61109276->enter($__internal_0e22771d103189e114cdfe57d9bb8b74db2d5aa7264a1c4499b5d84f61109276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_8a024cb7cbdf7c7ac59094823ae6118b7471768ef587f83cab5ee875e6dc0d10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a024cb7cbdf7c7ac59094823ae6118b7471768ef587f83cab5ee875e6dc0d10->enter($__internal_8a024cb7cbdf7c7ac59094823ae6118b7471768ef587f83cab5ee875e6dc0d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8a024cb7cbdf7c7ac59094823ae6118b7471768ef587f83cab5ee875e6dc0d10->leave($__internal_8a024cb7cbdf7c7ac59094823ae6118b7471768ef587f83cab5ee875e6dc0d10_prof);

        
        $__internal_0e22771d103189e114cdfe57d9bb8b74db2d5aa7264a1c4499b5d84f61109276->leave($__internal_0e22771d103189e114cdfe57d9bb8b74db2d5aa7264a1c4499b5d84f61109276_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_fb7791a952f10e28e30dc918921459defc4f6e303e79e6a4212858ec9ca8afae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb7791a952f10e28e30dc918921459defc4f6e303e79e6a4212858ec9ca8afae->enter($__internal_fb7791a952f10e28e30dc918921459defc4f6e303e79e6a4212858ec9ca8afae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_bed44fa01e90ae5f7aa61c06b2c4e66eac14cf84c2c5fe21d3c0adb3f1660563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bed44fa01e90ae5f7aa61c06b2c4e66eac14cf84c2c5fe21d3c0adb3f1660563->enter($__internal_bed44fa01e90ae5f7aa61c06b2c4e66eac14cf84c2c5fe21d3c0adb3f1660563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_bed44fa01e90ae5f7aa61c06b2c4e66eac14cf84c2c5fe21d3c0adb3f1660563->leave($__internal_bed44fa01e90ae5f7aa61c06b2c4e66eac14cf84c2c5fe21d3c0adb3f1660563_prof);

        
        $__internal_fb7791a952f10e28e30dc918921459defc4f6e303e79e6a4212858ec9ca8afae->leave($__internal_fb7791a952f10e28e30dc918921459defc4f6e303e79e6a4212858ec9ca8afae_prof);

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
