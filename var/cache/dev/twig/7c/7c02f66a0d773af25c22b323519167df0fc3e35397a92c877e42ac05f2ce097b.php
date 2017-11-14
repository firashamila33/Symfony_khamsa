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
        $__internal_d8c040446b4afe6d0cda2ec173f82d20b2ccac43bcd541eb879f40cd1f8256fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8c040446b4afe6d0cda2ec173f82d20b2ccac43bcd541eb879f40cd1f8256fd->enter($__internal_d8c040446b4afe6d0cda2ec173f82d20b2ccac43bcd541eb879f40cd1f8256fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_70172913b65fab7add19b785461385cd348268e25c1ad559080660bb63f8ab0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70172913b65fab7add19b785461385cd348268e25c1ad559080660bb63f8ab0d->enter($__internal_70172913b65fab7add19b785461385cd348268e25c1ad559080660bb63f8ab0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d8c040446b4afe6d0cda2ec173f82d20b2ccac43bcd541eb879f40cd1f8256fd->leave($__internal_d8c040446b4afe6d0cda2ec173f82d20b2ccac43bcd541eb879f40cd1f8256fd_prof);

        
        $__internal_70172913b65fab7add19b785461385cd348268e25c1ad559080660bb63f8ab0d->leave($__internal_70172913b65fab7add19b785461385cd348268e25c1ad559080660bb63f8ab0d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f26409d71daf1ce2014140a3e7c72b7092dc699496703b3d90825857f6327c0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f26409d71daf1ce2014140a3e7c72b7092dc699496703b3d90825857f6327c0e->enter($__internal_f26409d71daf1ce2014140a3e7c72b7092dc699496703b3d90825857f6327c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_116195f6bed0bf282840881a4904b70649874b963fffd4d10b12cfdb7d948908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_116195f6bed0bf282840881a4904b70649874b963fffd4d10b12cfdb7d948908->enter($__internal_116195f6bed0bf282840881a4904b70649874b963fffd4d10b12cfdb7d948908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_116195f6bed0bf282840881a4904b70649874b963fffd4d10b12cfdb7d948908->leave($__internal_116195f6bed0bf282840881a4904b70649874b963fffd4d10b12cfdb7d948908_prof);

        
        $__internal_f26409d71daf1ce2014140a3e7c72b7092dc699496703b3d90825857f6327c0e->leave($__internal_f26409d71daf1ce2014140a3e7c72b7092dc699496703b3d90825857f6327c0e_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_08d02485638262cc122e5e57d57d067198985e6ed778c71d8a48a0236a4c53c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08d02485638262cc122e5e57d57d067198985e6ed778c71d8a48a0236a4c53c0->enter($__internal_08d02485638262cc122e5e57d57d067198985e6ed778c71d8a48a0236a4c53c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_0eb3be427ff0a2d4ed62dda81d86ed536c19ba3254f0e0388b3ff43004c77e4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eb3be427ff0a2d4ed62dda81d86ed536c19ba3254f0e0388b3ff43004c77e4b->enter($__internal_0eb3be427ff0a2d4ed62dda81d86ed536c19ba3254f0e0388b3ff43004c77e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0eb3be427ff0a2d4ed62dda81d86ed536c19ba3254f0e0388b3ff43004c77e4b->leave($__internal_0eb3be427ff0a2d4ed62dda81d86ed536c19ba3254f0e0388b3ff43004c77e4b_prof);

        
        $__internal_08d02485638262cc122e5e57d57d067198985e6ed778c71d8a48a0236a4c53c0->leave($__internal_08d02485638262cc122e5e57d57d067198985e6ed778c71d8a48a0236a4c53c0_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_94634533c70fa451057f1cdb0f4dc091b7ffc28157bba63aa03eb54f139339bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94634533c70fa451057f1cdb0f4dc091b7ffc28157bba63aa03eb54f139339bd->enter($__internal_94634533c70fa451057f1cdb0f4dc091b7ffc28157bba63aa03eb54f139339bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_c46af3a19bc2a990413b255761ef9b7cccb9a7ce3dbc8745228e893730cd07fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c46af3a19bc2a990413b255761ef9b7cccb9a7ce3dbc8745228e893730cd07fc->enter($__internal_c46af3a19bc2a990413b255761ef9b7cccb9a7ce3dbc8745228e893730cd07fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c46af3a19bc2a990413b255761ef9b7cccb9a7ce3dbc8745228e893730cd07fc->leave($__internal_c46af3a19bc2a990413b255761ef9b7cccb9a7ce3dbc8745228e893730cd07fc_prof);

        
        $__internal_94634533c70fa451057f1cdb0f4dc091b7ffc28157bba63aa03eb54f139339bd->leave($__internal_94634533c70fa451057f1cdb0f4dc091b7ffc28157bba63aa03eb54f139339bd_prof);

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
