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
        $__internal_925b83baebe0e746ae027bd4b07eab0d870bae32103ddf89e6f72eaaf3e9ac63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_925b83baebe0e746ae027bd4b07eab0d870bae32103ddf89e6f72eaaf3e9ac63->enter($__internal_925b83baebe0e746ae027bd4b07eab0d870bae32103ddf89e6f72eaaf3e9ac63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_78cefce7e456031fbc21906f65ca7d17504981c96082d7657e97829b4571b22a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78cefce7e456031fbc21906f65ca7d17504981c96082d7657e97829b4571b22a->enter($__internal_78cefce7e456031fbc21906f65ca7d17504981c96082d7657e97829b4571b22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_925b83baebe0e746ae027bd4b07eab0d870bae32103ddf89e6f72eaaf3e9ac63->leave($__internal_925b83baebe0e746ae027bd4b07eab0d870bae32103ddf89e6f72eaaf3e9ac63_prof);

        
        $__internal_78cefce7e456031fbc21906f65ca7d17504981c96082d7657e97829b4571b22a->leave($__internal_78cefce7e456031fbc21906f65ca7d17504981c96082d7657e97829b4571b22a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2007b16cf177fef4e638a4648070054032e212b34c38859fbed0a99b2b97a2df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2007b16cf177fef4e638a4648070054032e212b34c38859fbed0a99b2b97a2df->enter($__internal_2007b16cf177fef4e638a4648070054032e212b34c38859fbed0a99b2b97a2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_714ef08f62adce178691cc81a4dd4ee777775133f7c3094564faa8ed0608ed75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_714ef08f62adce178691cc81a4dd4ee777775133f7c3094564faa8ed0608ed75->enter($__internal_714ef08f62adce178691cc81a4dd4ee777775133f7c3094564faa8ed0608ed75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_714ef08f62adce178691cc81a4dd4ee777775133f7c3094564faa8ed0608ed75->leave($__internal_714ef08f62adce178691cc81a4dd4ee777775133f7c3094564faa8ed0608ed75_prof);

        
        $__internal_2007b16cf177fef4e638a4648070054032e212b34c38859fbed0a99b2b97a2df->leave($__internal_2007b16cf177fef4e638a4648070054032e212b34c38859fbed0a99b2b97a2df_prof);

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
