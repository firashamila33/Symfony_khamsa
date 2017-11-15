<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_7063171002d43b1efdf7790f9e2533b8a76f21e489d0871dd83343ef050dea56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_2489d7d3b730cba9388a17027139be569b3ba9f348ca983bd8a2ba0fb0a55005 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2489d7d3b730cba9388a17027139be569b3ba9f348ca983bd8a2ba0fb0a55005->enter($__internal_2489d7d3b730cba9388a17027139be569b3ba9f348ca983bd8a2ba0fb0a55005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_a3264b8bebc05e0bc821d3f4ee5fdfdc0f7643390c21fe768e73573ad53be82e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3264b8bebc05e0bc821d3f4ee5fdfdc0f7643390c21fe768e73573ad53be82e->enter($__internal_a3264b8bebc05e0bc821d3f4ee5fdfdc0f7643390c21fe768e73573ad53be82e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2489d7d3b730cba9388a17027139be569b3ba9f348ca983bd8a2ba0fb0a55005->leave($__internal_2489d7d3b730cba9388a17027139be569b3ba9f348ca983bd8a2ba0fb0a55005_prof);

        
        $__internal_a3264b8bebc05e0bc821d3f4ee5fdfdc0f7643390c21fe768e73573ad53be82e->leave($__internal_a3264b8bebc05e0bc821d3f4ee5fdfdc0f7643390c21fe768e73573ad53be82e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8c9f9790e795481f8a80c10c47c2b34790f304e87a86c7e6687baab656c87802 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c9f9790e795481f8a80c10c47c2b34790f304e87a86c7e6687baab656c87802->enter($__internal_8c9f9790e795481f8a80c10c47c2b34790f304e87a86c7e6687baab656c87802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0b84ac72b6416e706bb39af654c25b2967511bf1621e86d2ce0f060919ca2a25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b84ac72b6416e706bb39af654c25b2967511bf1621e86d2ce0f060919ca2a25->enter($__internal_0b84ac72b6416e706bb39af654c25b2967511bf1621e86d2ce0f060919ca2a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_0b84ac72b6416e706bb39af654c25b2967511bf1621e86d2ce0f060919ca2a25->leave($__internal_0b84ac72b6416e706bb39af654c25b2967511bf1621e86d2ce0f060919ca2a25_prof);

        
        $__internal_8c9f9790e795481f8a80c10c47c2b34790f304e87a86c7e6687baab656c87802->leave($__internal_8c9f9790e795481f8a80c10c47c2b34790f304e87a86c7e6687baab656c87802_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show.html.twig");
    }
}
