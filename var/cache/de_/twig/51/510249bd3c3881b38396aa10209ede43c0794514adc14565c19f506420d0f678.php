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
        $__internal_9f89fcce7bb9d2519e8e776fbe09f3d52fe6b9fe086a845cedfd2dec87ead1a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f89fcce7bb9d2519e8e776fbe09f3d52fe6b9fe086a845cedfd2dec87ead1a5->enter($__internal_9f89fcce7bb9d2519e8e776fbe09f3d52fe6b9fe086a845cedfd2dec87ead1a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_f6b76f1e4608e6719a790e23abfa3b852dc3fccc52f37c1d8e5331cbad519ba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6b76f1e4608e6719a790e23abfa3b852dc3fccc52f37c1d8e5331cbad519ba1->enter($__internal_f6b76f1e4608e6719a790e23abfa3b852dc3fccc52f37c1d8e5331cbad519ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f89fcce7bb9d2519e8e776fbe09f3d52fe6b9fe086a845cedfd2dec87ead1a5->leave($__internal_9f89fcce7bb9d2519e8e776fbe09f3d52fe6b9fe086a845cedfd2dec87ead1a5_prof);

        
        $__internal_f6b76f1e4608e6719a790e23abfa3b852dc3fccc52f37c1d8e5331cbad519ba1->leave($__internal_f6b76f1e4608e6719a790e23abfa3b852dc3fccc52f37c1d8e5331cbad519ba1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ec851b0c043554e1c206590300e79a54aad48dbdfb0b394a52d3a8bee2af605c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec851b0c043554e1c206590300e79a54aad48dbdfb0b394a52d3a8bee2af605c->enter($__internal_ec851b0c043554e1c206590300e79a54aad48dbdfb0b394a52d3a8bee2af605c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b95c9b8062898c0a88518852b1d98509c22796eb609b58ea78568f411d8ccd61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b95c9b8062898c0a88518852b1d98509c22796eb609b58ea78568f411d8ccd61->enter($__internal_b95c9b8062898c0a88518852b1d98509c22796eb609b58ea78568f411d8ccd61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_b95c9b8062898c0a88518852b1d98509c22796eb609b58ea78568f411d8ccd61->leave($__internal_b95c9b8062898c0a88518852b1d98509c22796eb609b58ea78568f411d8ccd61_prof);

        
        $__internal_ec851b0c043554e1c206590300e79a54aad48dbdfb0b394a52d3a8bee2af605c->leave($__internal_ec851b0c043554e1c206590300e79a54aad48dbdfb0b394a52d3a8bee2af605c_prof);

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
