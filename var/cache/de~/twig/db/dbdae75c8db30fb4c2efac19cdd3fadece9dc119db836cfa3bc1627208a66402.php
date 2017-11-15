<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_f4fc6c93ce59fdabb380175c3fab7398e0402c5f056babd67d5be2a19909ffcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_f4b26bb23c7ba3b17d5c594d4989bb741dc0fa228bb74d1cd458c1e3fd70e98a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4b26bb23c7ba3b17d5c594d4989bb741dc0fa228bb74d1cd458c1e3fd70e98a->enter($__internal_f4b26bb23c7ba3b17d5c594d4989bb741dc0fa228bb74d1cd458c1e3fd70e98a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_8156931ef0d24b382e404875d0de45c5d1f61e7b485ad8838c8b93ee4346e113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8156931ef0d24b382e404875d0de45c5d1f61e7b485ad8838c8b93ee4346e113->enter($__internal_8156931ef0d24b382e404875d0de45c5d1f61e7b485ad8838c8b93ee4346e113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4b26bb23c7ba3b17d5c594d4989bb741dc0fa228bb74d1cd458c1e3fd70e98a->leave($__internal_f4b26bb23c7ba3b17d5c594d4989bb741dc0fa228bb74d1cd458c1e3fd70e98a_prof);

        
        $__internal_8156931ef0d24b382e404875d0de45c5d1f61e7b485ad8838c8b93ee4346e113->leave($__internal_8156931ef0d24b382e404875d0de45c5d1f61e7b485ad8838c8b93ee4346e113_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a0cb2de3bdb4ced3b12e61f5e545233a98ea51a9e38a9faeff8d509b8f785455 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0cb2de3bdb4ced3b12e61f5e545233a98ea51a9e38a9faeff8d509b8f785455->enter($__internal_a0cb2de3bdb4ced3b12e61f5e545233a98ea51a9e38a9faeff8d509b8f785455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d50d3e6ce30792d129aecb9a173b9a2b6a7cac6c9998ceb4056fe65e45475fc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d50d3e6ce30792d129aecb9a173b9a2b6a7cac6c9998ceb4056fe65e45475fc8->enter($__internal_d50d3e6ce30792d129aecb9a173b9a2b6a7cac6c9998ceb4056fe65e45475fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d50d3e6ce30792d129aecb9a173b9a2b6a7cac6c9998ceb4056fe65e45475fc8->leave($__internal_d50d3e6ce30792d129aecb9a173b9a2b6a7cac6c9998ceb4056fe65e45475fc8_prof);

        
        $__internal_a0cb2de3bdb4ced3b12e61f5e545233a98ea51a9e38a9faeff8d509b8f785455->leave($__internal_a0cb2de3bdb4ced3b12e61f5e545233a98ea51a9e38a9faeff8d509b8f785455_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
