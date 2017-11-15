<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_0953d52a447da264e6169d10f44cd91b9773dc928644b3b95914db420cb88ee8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed00b1ca5c58024d91f406dff8e407b50dc1608bb7dc0182ffc62723634a21cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed00b1ca5c58024d91f406dff8e407b50dc1608bb7dc0182ffc62723634a21cc->enter($__internal_ed00b1ca5c58024d91f406dff8e407b50dc1608bb7dc0182ffc62723634a21cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_4a3b2fedf7e3be60db211c1c9350f69478fb5041d8d047c029a17d3ba7835976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a3b2fedf7e3be60db211c1c9350f69478fb5041d8d047c029a17d3ba7835976->enter($__internal_4a3b2fedf7e3be60db211c1c9350f69478fb5041d8d047c029a17d3ba7835976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_ed00b1ca5c58024d91f406dff8e407b50dc1608bb7dc0182ffc62723634a21cc->leave($__internal_ed00b1ca5c58024d91f406dff8e407b50dc1608bb7dc0182ffc62723634a21cc_prof);

        
        $__internal_4a3b2fedf7e3be60db211c1c9350f69478fb5041d8d047c029a17d3ba7835976->leave($__internal_4a3b2fedf7e3be60db211c1c9350f69478fb5041d8d047c029a17d3ba7835976_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "@FOSUser/Profile/show_content.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show_content.html.twig");
    }
}
