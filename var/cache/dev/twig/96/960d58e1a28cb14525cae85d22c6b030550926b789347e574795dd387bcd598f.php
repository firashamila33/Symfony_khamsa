<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_bafd6c3ba1ccf5d794debcc4cf08cf21df1f2ec9079aa3d0b2be7924ea82c044 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_a422d9e7f112d0af0574184a3e4abaca5cd1fbaf009f229652f4ec8ab09de10e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a422d9e7f112d0af0574184a3e4abaca5cd1fbaf009f229652f4ec8ab09de10e->enter($__internal_a422d9e7f112d0af0574184a3e4abaca5cd1fbaf009f229652f4ec8ab09de10e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_bab0fe78d4070317528cb93dacc5d5ddbc2e180a00ccf18c5da550332322323d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bab0fe78d4070317528cb93dacc5d5ddbc2e180a00ccf18c5da550332322323d->enter($__internal_bab0fe78d4070317528cb93dacc5d5ddbc2e180a00ccf18c5da550332322323d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a422d9e7f112d0af0574184a3e4abaca5cd1fbaf009f229652f4ec8ab09de10e->leave($__internal_a422d9e7f112d0af0574184a3e4abaca5cd1fbaf009f229652f4ec8ab09de10e_prof);

        
        $__internal_bab0fe78d4070317528cb93dacc5d5ddbc2e180a00ccf18c5da550332322323d->leave($__internal_bab0fe78d4070317528cb93dacc5d5ddbc2e180a00ccf18c5da550332322323d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_34240c25e5b61155a6324d4fa5d847f95d87cfd56f29ef315337c0f291574760 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34240c25e5b61155a6324d4fa5d847f95d87cfd56f29ef315337c0f291574760->enter($__internal_34240c25e5b61155a6324d4fa5d847f95d87cfd56f29ef315337c0f291574760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_448a39992f5174acbaa4f6980966969b420c394f47f67e4ef2498966cf85a578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_448a39992f5174acbaa4f6980966969b420c394f47f67e4ef2498966cf85a578->enter($__internal_448a39992f5174acbaa4f6980966969b420c394f47f67e4ef2498966cf85a578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_448a39992f5174acbaa4f6980966969b420c394f47f67e4ef2498966cf85a578->leave($__internal_448a39992f5174acbaa4f6980966969b420c394f47f67e4ef2498966cf85a578_prof);

        
        $__internal_34240c25e5b61155a6324d4fa5d847f95d87cfd56f29ef315337c0f291574760->leave($__internal_34240c25e5b61155a6324d4fa5d847f95d87cfd56f29ef315337c0f291574760_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
