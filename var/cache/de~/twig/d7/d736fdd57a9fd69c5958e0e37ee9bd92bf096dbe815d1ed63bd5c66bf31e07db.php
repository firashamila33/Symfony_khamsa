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
        $__internal_ae2573430dec75751c38c5adabd25fdafee71772b78196538e3c90e91d1c5c12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae2573430dec75751c38c5adabd25fdafee71772b78196538e3c90e91d1c5c12->enter($__internal_ae2573430dec75751c38c5adabd25fdafee71772b78196538e3c90e91d1c5c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_8a6d39e47226e2ca15bff64133001cc92c4f54da2a4a942f57f7680306ec5a33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a6d39e47226e2ca15bff64133001cc92c4f54da2a4a942f57f7680306ec5a33->enter($__internal_8a6d39e47226e2ca15bff64133001cc92c4f54da2a4a942f57f7680306ec5a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae2573430dec75751c38c5adabd25fdafee71772b78196538e3c90e91d1c5c12->leave($__internal_ae2573430dec75751c38c5adabd25fdafee71772b78196538e3c90e91d1c5c12_prof);

        
        $__internal_8a6d39e47226e2ca15bff64133001cc92c4f54da2a4a942f57f7680306ec5a33->leave($__internal_8a6d39e47226e2ca15bff64133001cc92c4f54da2a4a942f57f7680306ec5a33_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_71d1104ec3ae83348737096f918bdc9ee205fd57553eb5926d10fcca8c243b2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71d1104ec3ae83348737096f918bdc9ee205fd57553eb5926d10fcca8c243b2f->enter($__internal_71d1104ec3ae83348737096f918bdc9ee205fd57553eb5926d10fcca8c243b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1300f667e26d1507d30e6322bb8331d1307161c64ed2dff6c664034c9b81cb6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1300f667e26d1507d30e6322bb8331d1307161c64ed2dff6c664034c9b81cb6e->enter($__internal_1300f667e26d1507d30e6322bb8331d1307161c64ed2dff6c664034c9b81cb6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_1300f667e26d1507d30e6322bb8331d1307161c64ed2dff6c664034c9b81cb6e->leave($__internal_1300f667e26d1507d30e6322bb8331d1307161c64ed2dff6c664034c9b81cb6e_prof);

        
        $__internal_71d1104ec3ae83348737096f918bdc9ee205fd57553eb5926d10fcca8c243b2f->leave($__internal_71d1104ec3ae83348737096f918bdc9ee205fd57553eb5926d10fcca8c243b2f_prof);

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
