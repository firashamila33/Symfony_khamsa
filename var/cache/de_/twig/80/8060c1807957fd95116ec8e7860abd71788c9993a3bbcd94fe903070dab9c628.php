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
        $__internal_d10959039b32b1aaf7ef32a0db1a3d280856a5d4a33e50c88bf76caa66b335fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d10959039b32b1aaf7ef32a0db1a3d280856a5d4a33e50c88bf76caa66b335fe->enter($__internal_d10959039b32b1aaf7ef32a0db1a3d280856a5d4a33e50c88bf76caa66b335fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_79f4f13f22b6d5cab9af1b1b200d6aa4ebfe9f11b283fef91bcd0411e1789e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79f4f13f22b6d5cab9af1b1b200d6aa4ebfe9f11b283fef91bcd0411e1789e1f->enter($__internal_79f4f13f22b6d5cab9af1b1b200d6aa4ebfe9f11b283fef91bcd0411e1789e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

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
        
        $__internal_d10959039b32b1aaf7ef32a0db1a3d280856a5d4a33e50c88bf76caa66b335fe->leave($__internal_d10959039b32b1aaf7ef32a0db1a3d280856a5d4a33e50c88bf76caa66b335fe_prof);

        
        $__internal_79f4f13f22b6d5cab9af1b1b200d6aa4ebfe9f11b283fef91bcd0411e1789e1f->leave($__internal_79f4f13f22b6d5cab9af1b1b200d6aa4ebfe9f11b283fef91bcd0411e1789e1f_prof);

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
