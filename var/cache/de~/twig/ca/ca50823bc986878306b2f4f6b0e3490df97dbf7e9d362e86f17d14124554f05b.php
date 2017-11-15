<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_3f7050e66feca1fbb4468aec664dd84ea019ce917f9037234903a534b2c34710 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_dd3fc3fe7698f10993ba763a154a68b38e864bb950a975fa0ea7982d5e6a4e11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd3fc3fe7698f10993ba763a154a68b38e864bb950a975fa0ea7982d5e6a4e11->enter($__internal_dd3fc3fe7698f10993ba763a154a68b38e864bb950a975fa0ea7982d5e6a4e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_b58297e11ca4d5f40353977c434a44a66b2313edfaa6f177fec827f897f781e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b58297e11ca4d5f40353977c434a44a66b2313edfaa6f177fec827f897f781e6->enter($__internal_b58297e11ca4d5f40353977c434a44a66b2313edfaa6f177fec827f897f781e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd3fc3fe7698f10993ba763a154a68b38e864bb950a975fa0ea7982d5e6a4e11->leave($__internal_dd3fc3fe7698f10993ba763a154a68b38e864bb950a975fa0ea7982d5e6a4e11_prof);

        
        $__internal_b58297e11ca4d5f40353977c434a44a66b2313edfaa6f177fec827f897f781e6->leave($__internal_b58297e11ca4d5f40353977c434a44a66b2313edfaa6f177fec827f897f781e6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ab1890ec07f07b6a50ef96f72d56a385a5ffcc6a8649f42bf79e48bad274c729 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab1890ec07f07b6a50ef96f72d56a385a5ffcc6a8649f42bf79e48bad274c729->enter($__internal_ab1890ec07f07b6a50ef96f72d56a385a5ffcc6a8649f42bf79e48bad274c729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_769f5f6260c2afd9342bc13a72a9a7428b8ede5ce9716d2dfaa7cc067412b8d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_769f5f6260c2afd9342bc13a72a9a7428b8ede5ce9716d2dfaa7cc067412b8d9->enter($__internal_769f5f6260c2afd9342bc13a72a9a7428b8ede5ce9716d2dfaa7cc067412b8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_769f5f6260c2afd9342bc13a72a9a7428b8ede5ce9716d2dfaa7cc067412b8d9->leave($__internal_769f5f6260c2afd9342bc13a72a9a7428b8ede5ce9716d2dfaa7cc067412b8d9_prof);

        
        $__internal_ab1890ec07f07b6a50ef96f72d56a385a5ffcc6a8649f42bf79e48bad274c729->leave($__internal_ab1890ec07f07b6a50ef96f72d56a385a5ffcc6a8649f42bf79e48bad274c729_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
