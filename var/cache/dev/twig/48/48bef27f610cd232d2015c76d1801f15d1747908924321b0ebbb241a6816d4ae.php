<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_83388f594dc1cf53072e9c1f35745a6c931b67ba2e31eb99a7c114a0c74d6103 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_3f21627a98e2b13c742b46ae154f915e54264c45085eca8d9440502baf8f11c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f21627a98e2b13c742b46ae154f915e54264c45085eca8d9440502baf8f11c8->enter($__internal_3f21627a98e2b13c742b46ae154f915e54264c45085eca8d9440502baf8f11c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_162d9b514e820c31381fc06ef0845fee1522dd4e93d7a02c73a2a9ebd41f59d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_162d9b514e820c31381fc06ef0845fee1522dd4e93d7a02c73a2a9ebd41f59d9->enter($__internal_162d9b514e820c31381fc06ef0845fee1522dd4e93d7a02c73a2a9ebd41f59d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f21627a98e2b13c742b46ae154f915e54264c45085eca8d9440502baf8f11c8->leave($__internal_3f21627a98e2b13c742b46ae154f915e54264c45085eca8d9440502baf8f11c8_prof);

        
        $__internal_162d9b514e820c31381fc06ef0845fee1522dd4e93d7a02c73a2a9ebd41f59d9->leave($__internal_162d9b514e820c31381fc06ef0845fee1522dd4e93d7a02c73a2a9ebd41f59d9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a823c77bf0dc515fc07825ccef94d5895899c10451fb98e3babb86474a5cfdee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a823c77bf0dc515fc07825ccef94d5895899c10451fb98e3babb86474a5cfdee->enter($__internal_a823c77bf0dc515fc07825ccef94d5895899c10451fb98e3babb86474a5cfdee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5399c8c24a8f623fd0f5d5dacf897d7031e8400a86eb3a9f4dd69a871516b0e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5399c8c24a8f623fd0f5d5dacf897d7031e8400a86eb3a9f4dd69a871516b0e7->enter($__internal_5399c8c24a8f623fd0f5d5dacf897d7031e8400a86eb3a9f4dd69a871516b0e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_5399c8c24a8f623fd0f5d5dacf897d7031e8400a86eb3a9f4dd69a871516b0e7->leave($__internal_5399c8c24a8f623fd0f5d5dacf897d7031e8400a86eb3a9f4dd69a871516b0e7_prof);

        
        $__internal_a823c77bf0dc515fc07825ccef94d5895899c10451fb98e3babb86474a5cfdee->leave($__internal_a823c77bf0dc515fc07825ccef94d5895899c10451fb98e3babb86474a5cfdee_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
