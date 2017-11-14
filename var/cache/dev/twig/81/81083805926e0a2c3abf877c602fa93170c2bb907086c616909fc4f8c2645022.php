<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_f903966c9af1df2c1635e6609579acdbc5181f6a1d33d8f14dc5116a8a030047 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_2cd0e74e52ae6a975f790af1b07aad13a6d6932e151fde812b63a1e766518e36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cd0e74e52ae6a975f790af1b07aad13a6d6932e151fde812b63a1e766518e36->enter($__internal_2cd0e74e52ae6a975f790af1b07aad13a6d6932e151fde812b63a1e766518e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_38283d666c8479d2382785949066137a459ef45c5945db3720be5c2d5c907ac8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38283d666c8479d2382785949066137a459ef45c5945db3720be5c2d5c907ac8->enter($__internal_38283d666c8479d2382785949066137a459ef45c5945db3720be5c2d5c907ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cd0e74e52ae6a975f790af1b07aad13a6d6932e151fde812b63a1e766518e36->leave($__internal_2cd0e74e52ae6a975f790af1b07aad13a6d6932e151fde812b63a1e766518e36_prof);

        
        $__internal_38283d666c8479d2382785949066137a459ef45c5945db3720be5c2d5c907ac8->leave($__internal_38283d666c8479d2382785949066137a459ef45c5945db3720be5c2d5c907ac8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_898bb72b4ea43466a55b1d1729f47d45cd524aeba8ba2aee6ca26e2e1d866d44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_898bb72b4ea43466a55b1d1729f47d45cd524aeba8ba2aee6ca26e2e1d866d44->enter($__internal_898bb72b4ea43466a55b1d1729f47d45cd524aeba8ba2aee6ca26e2e1d866d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_27eb587ba26b908e40d1a74a8c730c5be2dd779f219ea02c08916f9c1b40a910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27eb587ba26b908e40d1a74a8c730c5be2dd779f219ea02c08916f9c1b40a910->enter($__internal_27eb587ba26b908e40d1a74a8c730c5be2dd779f219ea02c08916f9c1b40a910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_27eb587ba26b908e40d1a74a8c730c5be2dd779f219ea02c08916f9c1b40a910->leave($__internal_27eb587ba26b908e40d1a74a8c730c5be2dd779f219ea02c08916f9c1b40a910_prof);

        
        $__internal_898bb72b4ea43466a55b1d1729f47d45cd524aeba8ba2aee6ca26e2e1d866d44->leave($__internal_898bb72b4ea43466a55b1d1729f47d45cd524aeba8ba2aee6ca26e2e1d866d44_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
