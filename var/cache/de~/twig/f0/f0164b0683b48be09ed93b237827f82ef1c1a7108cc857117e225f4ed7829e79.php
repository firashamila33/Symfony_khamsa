<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_4daa47ab4173bcaa9725a1517b1967a987efa2250f3c1b69affb801c58107bef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_3793da3068e75f82745583adbb56506d3485c9523e61fe7a44e728609e27b0ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3793da3068e75f82745583adbb56506d3485c9523e61fe7a44e728609e27b0ac->enter($__internal_3793da3068e75f82745583adbb56506d3485c9523e61fe7a44e728609e27b0ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_31adcd8debb9a9841c91d0c2832456318385edb8a8d9a0d81b905739bc5f32f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31adcd8debb9a9841c91d0c2832456318385edb8a8d9a0d81b905739bc5f32f9->enter($__internal_31adcd8debb9a9841c91d0c2832456318385edb8a8d9a0d81b905739bc5f32f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3793da3068e75f82745583adbb56506d3485c9523e61fe7a44e728609e27b0ac->leave($__internal_3793da3068e75f82745583adbb56506d3485c9523e61fe7a44e728609e27b0ac_prof);

        
        $__internal_31adcd8debb9a9841c91d0c2832456318385edb8a8d9a0d81b905739bc5f32f9->leave($__internal_31adcd8debb9a9841c91d0c2832456318385edb8a8d9a0d81b905739bc5f32f9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5f9df6e7275afed49e6001f59e4771713a14645b44c21e35e1df1f1b8ff70d01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f9df6e7275afed49e6001f59e4771713a14645b44c21e35e1df1f1b8ff70d01->enter($__internal_5f9df6e7275afed49e6001f59e4771713a14645b44c21e35e1df1f1b8ff70d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5f87a8c4045298a9eafd8f7a08afcc654b4d1703f335ef0015bbec019a6821e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f87a8c4045298a9eafd8f7a08afcc654b4d1703f335ef0015bbec019a6821e0->enter($__internal_5f87a8c4045298a9eafd8f7a08afcc654b4d1703f335ef0015bbec019a6821e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_5f87a8c4045298a9eafd8f7a08afcc654b4d1703f335ef0015bbec019a6821e0->leave($__internal_5f87a8c4045298a9eafd8f7a08afcc654b4d1703f335ef0015bbec019a6821e0_prof);

        
        $__internal_5f9df6e7275afed49e6001f59e4771713a14645b44c21e35e1df1f1b8ff70d01->leave($__internal_5f9df6e7275afed49e6001f59e4771713a14645b44c21e35e1df1f1b8ff70d01_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/new.html.twig");
    }
}
