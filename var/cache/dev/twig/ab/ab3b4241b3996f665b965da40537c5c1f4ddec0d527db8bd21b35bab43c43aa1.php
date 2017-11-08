<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_455232d266d15d97e19f6ed9f55c0e5895fb990be0e2dcc9565e0136d7d32647 extends Twig_Template
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
        $__internal_6f4b817d1bb92b0d3b84b67c02d7a4bd7089f322e1481f43175eff8be25aa7fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f4b817d1bb92b0d3b84b67c02d7a4bd7089f322e1481f43175eff8be25aa7fb->enter($__internal_6f4b817d1bb92b0d3b84b67c02d7a4bd7089f322e1481f43175eff8be25aa7fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_5d7b0434c052abb46442435a26b97b674158943320dddce4edb36f726ee5c5b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d7b0434c052abb46442435a26b97b674158943320dddce4edb36f726ee5c5b4->enter($__internal_5d7b0434c052abb46442435a26b97b674158943320dddce4edb36f726ee5c5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f4b817d1bb92b0d3b84b67c02d7a4bd7089f322e1481f43175eff8be25aa7fb->leave($__internal_6f4b817d1bb92b0d3b84b67c02d7a4bd7089f322e1481f43175eff8be25aa7fb_prof);

        
        $__internal_5d7b0434c052abb46442435a26b97b674158943320dddce4edb36f726ee5c5b4->leave($__internal_5d7b0434c052abb46442435a26b97b674158943320dddce4edb36f726ee5c5b4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8d68de00d8605d1982757005989459f9c11213e99a3310a12e669d0fabe09713 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d68de00d8605d1982757005989459f9c11213e99a3310a12e669d0fabe09713->enter($__internal_8d68de00d8605d1982757005989459f9c11213e99a3310a12e669d0fabe09713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0b066e22d38344c1d837c292c43f6677e807cd3f0b274487176d138d5861ea9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b066e22d38344c1d837c292c43f6677e807cd3f0b274487176d138d5861ea9d->enter($__internal_0b066e22d38344c1d837c292c43f6677e807cd3f0b274487176d138d5861ea9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_0b066e22d38344c1d837c292c43f6677e807cd3f0b274487176d138d5861ea9d->leave($__internal_0b066e22d38344c1d837c292c43f6677e807cd3f0b274487176d138d5861ea9d_prof);

        
        $__internal_8d68de00d8605d1982757005989459f9c11213e99a3310a12e669d0fabe09713->leave($__internal_8d68de00d8605d1982757005989459f9c11213e99a3310a12e669d0fabe09713_prof);

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
", "@FOSUser/Security/login.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
