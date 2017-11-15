<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_e965ccd0d2068a933877998fbf0b3764e67c6816941340f78771894ea42780ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ac9429d9466490a63d0efe20ce9c6a136786e0c032906fa2c5b024451ba09bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ac9429d9466490a63d0efe20ce9c6a136786e0c032906fa2c5b024451ba09bc->enter($__internal_3ac9429d9466490a63d0efe20ce9c6a136786e0c032906fa2c5b024451ba09bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_0f49cf9976e84e073adb1fa1e7adf3c2ba99274057dd05e8555d34fa0f653221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f49cf9976e84e073adb1fa1e7adf3c2ba99274057dd05e8555d34fa0f653221->enter($__internal_0f49cf9976e84e073adb1fa1e7adf3c2ba99274057dd05e8555d34fa0f653221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ac9429d9466490a63d0efe20ce9c6a136786e0c032906fa2c5b024451ba09bc->leave($__internal_3ac9429d9466490a63d0efe20ce9c6a136786e0c032906fa2c5b024451ba09bc_prof);

        
        $__internal_0f49cf9976e84e073adb1fa1e7adf3c2ba99274057dd05e8555d34fa0f653221->leave($__internal_0f49cf9976e84e073adb1fa1e7adf3c2ba99274057dd05e8555d34fa0f653221_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9c075d22d408bd23720bb6a83a8c659ad64ba9a41ca2496b2889deabb0f92d26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c075d22d408bd23720bb6a83a8c659ad64ba9a41ca2496b2889deabb0f92d26->enter($__internal_9c075d22d408bd23720bb6a83a8c659ad64ba9a41ca2496b2889deabb0f92d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_aa55f11940b84add28f456c601a2e109b53bd46f42229722d0185bb40790345d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa55f11940b84add28f456c601a2e109b53bd46f42229722d0185bb40790345d->enter($__internal_aa55f11940b84add28f456c601a2e109b53bd46f42229722d0185bb40790345d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_aa55f11940b84add28f456c601a2e109b53bd46f42229722d0185bb40790345d->leave($__internal_aa55f11940b84add28f456c601a2e109b53bd46f42229722d0185bb40790345d_prof);

        
        $__internal_9c075d22d408bd23720bb6a83a8c659ad64ba9a41ca2496b2889deabb0f92d26->leave($__internal_9c075d22d408bd23720bb6a83a8c659ad64ba9a41ca2496b2889deabb0f92d26_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
