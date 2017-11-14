<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_b70e0caa0e34136e18be232c25b36c00e1ae26d84968eb36372d75211e483396 extends Twig_Template
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
        $__internal_f8328b13821c762163af5b0bba7f9fd7dee4078398353071d2cfa488e9c6115b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8328b13821c762163af5b0bba7f9fd7dee4078398353071d2cfa488e9c6115b->enter($__internal_f8328b13821c762163af5b0bba7f9fd7dee4078398353071d2cfa488e9c6115b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_ec8b841306b754c70d06eb4b3e3b7e760f44a79b233c57a7904d117c753f4e11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec8b841306b754c70d06eb4b3e3b7e760f44a79b233c57a7904d117c753f4e11->enter($__internal_ec8b841306b754c70d06eb4b3e3b7e760f44a79b233c57a7904d117c753f4e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8328b13821c762163af5b0bba7f9fd7dee4078398353071d2cfa488e9c6115b->leave($__internal_f8328b13821c762163af5b0bba7f9fd7dee4078398353071d2cfa488e9c6115b_prof);

        
        $__internal_ec8b841306b754c70d06eb4b3e3b7e760f44a79b233c57a7904d117c753f4e11->leave($__internal_ec8b841306b754c70d06eb4b3e3b7e760f44a79b233c57a7904d117c753f4e11_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_538cc44e4f82cf05121181410cdc95e28c595876066de02dcecc28bd99c6b3ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_538cc44e4f82cf05121181410cdc95e28c595876066de02dcecc28bd99c6b3ad->enter($__internal_538cc44e4f82cf05121181410cdc95e28c595876066de02dcecc28bd99c6b3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a86fc2b0059640db49f4474dd2a39bfd5fb1acddc0941bf6f4ec3bf03f1e0b4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a86fc2b0059640db49f4474dd2a39bfd5fb1acddc0941bf6f4ec3bf03f1e0b4c->enter($__internal_a86fc2b0059640db49f4474dd2a39bfd5fb1acddc0941bf6f4ec3bf03f1e0b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_a86fc2b0059640db49f4474dd2a39bfd5fb1acddc0941bf6f4ec3bf03f1e0b4c->leave($__internal_a86fc2b0059640db49f4474dd2a39bfd5fb1acddc0941bf6f4ec3bf03f1e0b4c_prof);

        
        $__internal_538cc44e4f82cf05121181410cdc95e28c595876066de02dcecc28bd99c6b3ad->leave($__internal_538cc44e4f82cf05121181410cdc95e28c595876066de02dcecc28bd99c6b3ad_prof);

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
", "@FOSUser/Registration/register.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
