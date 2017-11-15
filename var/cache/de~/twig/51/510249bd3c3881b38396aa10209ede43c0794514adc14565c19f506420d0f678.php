<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_06ad363dc8633e9af7edd796e4311ab999fa726a19daf2a96bc419a3ad6a0145 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_be0e9abd57b962524505a007743ceeaf5ab6acc2c830d49562fe9c438d07cd47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be0e9abd57b962524505a007743ceeaf5ab6acc2c830d49562fe9c438d07cd47->enter($__internal_be0e9abd57b962524505a007743ceeaf5ab6acc2c830d49562fe9c438d07cd47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_71da3155a7f70a2d8583aef6a5c0d661137ae4df08ca4192d3ae8224d2e2a701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71da3155a7f70a2d8583aef6a5c0d661137ae4df08ca4192d3ae8224d2e2a701->enter($__internal_71da3155a7f70a2d8583aef6a5c0d661137ae4df08ca4192d3ae8224d2e2a701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be0e9abd57b962524505a007743ceeaf5ab6acc2c830d49562fe9c438d07cd47->leave($__internal_be0e9abd57b962524505a007743ceeaf5ab6acc2c830d49562fe9c438d07cd47_prof);

        
        $__internal_71da3155a7f70a2d8583aef6a5c0d661137ae4df08ca4192d3ae8224d2e2a701->leave($__internal_71da3155a7f70a2d8583aef6a5c0d661137ae4df08ca4192d3ae8224d2e2a701_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f4da6622425057ead2aa698cc6af3c01a90a9304ddc9e3c48e5028aba5a05d6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4da6622425057ead2aa698cc6af3c01a90a9304ddc9e3c48e5028aba5a05d6e->enter($__internal_f4da6622425057ead2aa698cc6af3c01a90a9304ddc9e3c48e5028aba5a05d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7b936fdb0f2049c120c9893ff6815bc421baae4074ba30fbcac2b151c21444cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b936fdb0f2049c120c9893ff6815bc421baae4074ba30fbcac2b151c21444cc->enter($__internal_7b936fdb0f2049c120c9893ff6815bc421baae4074ba30fbcac2b151c21444cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_7b936fdb0f2049c120c9893ff6815bc421baae4074ba30fbcac2b151c21444cc->leave($__internal_7b936fdb0f2049c120c9893ff6815bc421baae4074ba30fbcac2b151c21444cc_prof);

        
        $__internal_f4da6622425057ead2aa698cc6af3c01a90a9304ddc9e3c48e5028aba5a05d6e->leave($__internal_f4da6622425057ead2aa698cc6af3c01a90a9304ddc9e3c48e5028aba5a05d6e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
