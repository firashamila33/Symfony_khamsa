<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_8ab8318a699a5d5c746ea4dbec4e0c9eb58fa8d0b3c85ca685f0ca8eac6b5602 extends Twig_Template
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
        $__internal_a7c2a3bcc0823217724fed4c9296c9e6f52d7fff3c407bb0a26e84584b4b83c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7c2a3bcc0823217724fed4c9296c9e6f52d7fff3c407bb0a26e84584b4b83c2->enter($__internal_a7c2a3bcc0823217724fed4c9296c9e6f52d7fff3c407bb0a26e84584b4b83c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_a8e24bfed1eee0f51db4ab9f038acd3eab5f902f3733f87057fbef6cfba32ad4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8e24bfed1eee0f51db4ab9f038acd3eab5f902f3733f87057fbef6cfba32ad4->enter($__internal_a8e24bfed1eee0f51db4ab9f038acd3eab5f902f3733f87057fbef6cfba32ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
        
        $__internal_a7c2a3bcc0823217724fed4c9296c9e6f52d7fff3c407bb0a26e84584b4b83c2->leave($__internal_a7c2a3bcc0823217724fed4c9296c9e6f52d7fff3c407bb0a26e84584b4b83c2_prof);

        
        $__internal_a8e24bfed1eee0f51db4ab9f038acd3eab5f902f3733f87057fbef6cfba32ad4->leave($__internal_a8e24bfed1eee0f51db4ab9f038acd3eab5f902f3733f87057fbef6cfba32ad4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
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
", "FOSUserBundle:Profile:show_content.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
