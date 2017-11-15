<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_5cc58594a569ea5c0b4d3e72a3ba5c56c55dd8fbcfaaded15795137a2fa67169 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_0b7935f73b2f0a7afe9a65d0a37ddb78dad4784705cf0b17f48a70c296a7d5b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b7935f73b2f0a7afe9a65d0a37ddb78dad4784705cf0b17f48a70c296a7d5b9->enter($__internal_0b7935f73b2f0a7afe9a65d0a37ddb78dad4784705cf0b17f48a70c296a7d5b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_aff7742b6fba351640d861a3637975053fc9df4f5b0b6a7d9522fe4e64f83f80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aff7742b6fba351640d861a3637975053fc9df4f5b0b6a7d9522fe4e64f83f80->enter($__internal_aff7742b6fba351640d861a3637975053fc9df4f5b0b6a7d9522fe4e64f83f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b7935f73b2f0a7afe9a65d0a37ddb78dad4784705cf0b17f48a70c296a7d5b9->leave($__internal_0b7935f73b2f0a7afe9a65d0a37ddb78dad4784705cf0b17f48a70c296a7d5b9_prof);

        
        $__internal_aff7742b6fba351640d861a3637975053fc9df4f5b0b6a7d9522fe4e64f83f80->leave($__internal_aff7742b6fba351640d861a3637975053fc9df4f5b0b6a7d9522fe4e64f83f80_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e5b11eda6efb972d8446d7230a583a63a82b29b1853b80f121f1d49c13ff26eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5b11eda6efb972d8446d7230a583a63a82b29b1853b80f121f1d49c13ff26eb->enter($__internal_e5b11eda6efb972d8446d7230a583a63a82b29b1853b80f121f1d49c13ff26eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_dc8178107d80956895712d201defeb771da55dd4bbc387eda970c029cf0bb4fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc8178107d80956895712d201defeb771da55dd4bbc387eda970c029cf0bb4fc->enter($__internal_dc8178107d80956895712d201defeb771da55dd4bbc387eda970c029cf0bb4fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_dc8178107d80956895712d201defeb771da55dd4bbc387eda970c029cf0bb4fc->leave($__internal_dc8178107d80956895712d201defeb771da55dd4bbc387eda970c029cf0bb4fc_prof);

        
        $__internal_e5b11eda6efb972d8446d7230a583a63a82b29b1853b80f121f1d49c13ff26eb->leave($__internal_e5b11eda6efb972d8446d7230a583a63a82b29b1853b80f121f1d49c13ff26eb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
