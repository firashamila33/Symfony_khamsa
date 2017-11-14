<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_17718b097f99de2d9678bd0a43607271d1d1cbd0ba5a3aac6eb8d51b262626da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_8707db58c94de135be40a6cad6637e040f50ef77685145d6da686fa5ee636916 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8707db58c94de135be40a6cad6637e040f50ef77685145d6da686fa5ee636916->enter($__internal_8707db58c94de135be40a6cad6637e040f50ef77685145d6da686fa5ee636916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_55ed3ae43141d853114f4fb599de263aaa83b617914d86a3f468f646c5180173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55ed3ae43141d853114f4fb599de263aaa83b617914d86a3f468f646c5180173->enter($__internal_55ed3ae43141d853114f4fb599de263aaa83b617914d86a3f468f646c5180173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8707db58c94de135be40a6cad6637e040f50ef77685145d6da686fa5ee636916->leave($__internal_8707db58c94de135be40a6cad6637e040f50ef77685145d6da686fa5ee636916_prof);

        
        $__internal_55ed3ae43141d853114f4fb599de263aaa83b617914d86a3f468f646c5180173->leave($__internal_55ed3ae43141d853114f4fb599de263aaa83b617914d86a3f468f646c5180173_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cc8ce84529cad1861629424a7f58bcf3a2a181f7b4cb4a03085dfd4a94476d0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc8ce84529cad1861629424a7f58bcf3a2a181f7b4cb4a03085dfd4a94476d0e->enter($__internal_cc8ce84529cad1861629424a7f58bcf3a2a181f7b4cb4a03085dfd4a94476d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c3341be14ae076a89525a5613391ea4a10ce244376f4b090f6c18df293813506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3341be14ae076a89525a5613391ea4a10ce244376f4b090f6c18df293813506->enter($__internal_c3341be14ae076a89525a5613391ea4a10ce244376f4b090f6c18df293813506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_c3341be14ae076a89525a5613391ea4a10ce244376f4b090f6c18df293813506->leave($__internal_c3341be14ae076a89525a5613391ea4a10ce244376f4b090f6c18df293813506_prof);

        
        $__internal_cc8ce84529cad1861629424a7f58bcf3a2a181f7b4cb4a03085dfd4a94476d0e->leave($__internal_cc8ce84529cad1861629424a7f58bcf3a2a181f7b4cb4a03085dfd4a94476d0e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
