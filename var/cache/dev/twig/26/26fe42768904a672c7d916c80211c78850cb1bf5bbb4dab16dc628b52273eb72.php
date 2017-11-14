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
        $__internal_37b2b1cab4e3a2769b9e4bf4181842ae0570433e7fbbcf01c68c5712843576dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37b2b1cab4e3a2769b9e4bf4181842ae0570433e7fbbcf01c68c5712843576dd->enter($__internal_37b2b1cab4e3a2769b9e4bf4181842ae0570433e7fbbcf01c68c5712843576dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_3a791343efd7bde8a4a2b033ff0a1e824f2fcd68f991b817140edc6bf0d9ce22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a791343efd7bde8a4a2b033ff0a1e824f2fcd68f991b817140edc6bf0d9ce22->enter($__internal_3a791343efd7bde8a4a2b033ff0a1e824f2fcd68f991b817140edc6bf0d9ce22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37b2b1cab4e3a2769b9e4bf4181842ae0570433e7fbbcf01c68c5712843576dd->leave($__internal_37b2b1cab4e3a2769b9e4bf4181842ae0570433e7fbbcf01c68c5712843576dd_prof);

        
        $__internal_3a791343efd7bde8a4a2b033ff0a1e824f2fcd68f991b817140edc6bf0d9ce22->leave($__internal_3a791343efd7bde8a4a2b033ff0a1e824f2fcd68f991b817140edc6bf0d9ce22_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c80db0f23c224488939eefa0dfd98f7c48346fd8c43a398445716d23ba2eaa6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c80db0f23c224488939eefa0dfd98f7c48346fd8c43a398445716d23ba2eaa6c->enter($__internal_c80db0f23c224488939eefa0dfd98f7c48346fd8c43a398445716d23ba2eaa6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_733dafc7f5b0a51bdf694547428dc1213bc01ee68c8e11510c248cf2b42d916c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_733dafc7f5b0a51bdf694547428dc1213bc01ee68c8e11510c248cf2b42d916c->enter($__internal_733dafc7f5b0a51bdf694547428dc1213bc01ee68c8e11510c248cf2b42d916c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_733dafc7f5b0a51bdf694547428dc1213bc01ee68c8e11510c248cf2b42d916c->leave($__internal_733dafc7f5b0a51bdf694547428dc1213bc01ee68c8e11510c248cf2b42d916c_prof);

        
        $__internal_c80db0f23c224488939eefa0dfd98f7c48346fd8c43a398445716d23ba2eaa6c->leave($__internal_c80db0f23c224488939eefa0dfd98f7c48346fd8c43a398445716d23ba2eaa6c_prof);

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
