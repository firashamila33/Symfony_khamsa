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
        $__internal_51a73c3954578911194363ca4a4da183e3dd8c14de4f320c25a79d65f8de6e1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51a73c3954578911194363ca4a4da183e3dd8c14de4f320c25a79d65f8de6e1d->enter($__internal_51a73c3954578911194363ca4a4da183e3dd8c14de4f320c25a79d65f8de6e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_d2c776765a63e65b6086856def46d443e2be7f3a5d4c2bdef079b870bcd602ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2c776765a63e65b6086856def46d443e2be7f3a5d4c2bdef079b870bcd602ec->enter($__internal_d2c776765a63e65b6086856def46d443e2be7f3a5d4c2bdef079b870bcd602ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51a73c3954578911194363ca4a4da183e3dd8c14de4f320c25a79d65f8de6e1d->leave($__internal_51a73c3954578911194363ca4a4da183e3dd8c14de4f320c25a79d65f8de6e1d_prof);

        
        $__internal_d2c776765a63e65b6086856def46d443e2be7f3a5d4c2bdef079b870bcd602ec->leave($__internal_d2c776765a63e65b6086856def46d443e2be7f3a5d4c2bdef079b870bcd602ec_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_17c3fc29b47a7ad9e36b4e25bdce67ca2640ec23aa8a104b6f83374d36e6858d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17c3fc29b47a7ad9e36b4e25bdce67ca2640ec23aa8a104b6f83374d36e6858d->enter($__internal_17c3fc29b47a7ad9e36b4e25bdce67ca2640ec23aa8a104b6f83374d36e6858d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9493e0e971bc0bb84d960127def4f27d3d303a86dafd0bee65f6c3061ab50e2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9493e0e971bc0bb84d960127def4f27d3d303a86dafd0bee65f6c3061ab50e2a->enter($__internal_9493e0e971bc0bb84d960127def4f27d3d303a86dafd0bee65f6c3061ab50e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_9493e0e971bc0bb84d960127def4f27d3d303a86dafd0bee65f6c3061ab50e2a->leave($__internal_9493e0e971bc0bb84d960127def4f27d3d303a86dafd0bee65f6c3061ab50e2a_prof);

        
        $__internal_17c3fc29b47a7ad9e36b4e25bdce67ca2640ec23aa8a104b6f83374d36e6858d->leave($__internal_17c3fc29b47a7ad9e36b4e25bdce67ca2640ec23aa8a104b6f83374d36e6858d_prof);

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
