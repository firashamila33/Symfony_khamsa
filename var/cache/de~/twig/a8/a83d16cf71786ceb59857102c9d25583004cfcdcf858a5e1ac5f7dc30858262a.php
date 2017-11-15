<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_1b52da00c1978832caa4be15836f6b4d4ee8fd5e2ca493a3f15e92cb1ab7206f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_5914b43c5b3902208c2399a9f1e107d688fce1622d5a02bc3c9a9fef551afc94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5914b43c5b3902208c2399a9f1e107d688fce1622d5a02bc3c9a9fef551afc94->enter($__internal_5914b43c5b3902208c2399a9f1e107d688fce1622d5a02bc3c9a9fef551afc94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_2b099629573839fc4992e421c481bf2ea4c4bdd0f3af42535c370eda561d33dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b099629573839fc4992e421c481bf2ea4c4bdd0f3af42535c370eda561d33dd->enter($__internal_2b099629573839fc4992e421c481bf2ea4c4bdd0f3af42535c370eda561d33dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5914b43c5b3902208c2399a9f1e107d688fce1622d5a02bc3c9a9fef551afc94->leave($__internal_5914b43c5b3902208c2399a9f1e107d688fce1622d5a02bc3c9a9fef551afc94_prof);

        
        $__internal_2b099629573839fc4992e421c481bf2ea4c4bdd0f3af42535c370eda561d33dd->leave($__internal_2b099629573839fc4992e421c481bf2ea4c4bdd0f3af42535c370eda561d33dd_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1a18235e5e88f9c55dfd1799f4c7c37964f39c2eaebca7075b64e492ad783f04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a18235e5e88f9c55dfd1799f4c7c37964f39c2eaebca7075b64e492ad783f04->enter($__internal_1a18235e5e88f9c55dfd1799f4c7c37964f39c2eaebca7075b64e492ad783f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9668cca6916e5f796bd5d77c9893fb53e41a3a3ba028baa1df5c712cf957988d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9668cca6916e5f796bd5d77c9893fb53e41a3a3ba028baa1df5c712cf957988d->enter($__internal_9668cca6916e5f796bd5d77c9893fb53e41a3a3ba028baa1df5c712cf957988d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_9668cca6916e5f796bd5d77c9893fb53e41a3a3ba028baa1df5c712cf957988d->leave($__internal_9668cca6916e5f796bd5d77c9893fb53e41a3a3ba028baa1df5c712cf957988d_prof);

        
        $__internal_1a18235e5e88f9c55dfd1799f4c7c37964f39c2eaebca7075b64e492ad783f04->leave($__internal_1a18235e5e88f9c55dfd1799f4c7c37964f39c2eaebca7075b64e492ad783f04_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
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
", "@FOSUser/Registration/check_email.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\check_email.html.twig");
    }
}
