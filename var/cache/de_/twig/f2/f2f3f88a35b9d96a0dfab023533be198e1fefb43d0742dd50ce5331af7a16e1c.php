<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_86173cd7a4f53a4835eec9a302962c6dee686b78ddfc8043ef8ed4ea6f649eaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_6fa96649f17c7694eb6147554e02852003db5803fc7146e0a15cb882e15ed66b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fa96649f17c7694eb6147554e02852003db5803fc7146e0a15cb882e15ed66b->enter($__internal_6fa96649f17c7694eb6147554e02852003db5803fc7146e0a15cb882e15ed66b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_ca8bcbfd1c36fc4e47fb14d98179407d048c3869464bdaab663517730b440b90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca8bcbfd1c36fc4e47fb14d98179407d048c3869464bdaab663517730b440b90->enter($__internal_ca8bcbfd1c36fc4e47fb14d98179407d048c3869464bdaab663517730b440b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fa96649f17c7694eb6147554e02852003db5803fc7146e0a15cb882e15ed66b->leave($__internal_6fa96649f17c7694eb6147554e02852003db5803fc7146e0a15cb882e15ed66b_prof);

        
        $__internal_ca8bcbfd1c36fc4e47fb14d98179407d048c3869464bdaab663517730b440b90->leave($__internal_ca8bcbfd1c36fc4e47fb14d98179407d048c3869464bdaab663517730b440b90_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e8058c9f21acb121d48b511da5c809facdd4e28181acfff3c8280aa36941a293 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8058c9f21acb121d48b511da5c809facdd4e28181acfff3c8280aa36941a293->enter($__internal_e8058c9f21acb121d48b511da5c809facdd4e28181acfff3c8280aa36941a293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_aea03470caa7c0d2a1d2da72fdd5bf51c428a833a58032a5f902d8420065fe35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aea03470caa7c0d2a1d2da72fdd5bf51c428a833a58032a5f902d8420065fe35->enter($__internal_aea03470caa7c0d2a1d2da72fdd5bf51c428a833a58032a5f902d8420065fe35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_aea03470caa7c0d2a1d2da72fdd5bf51c428a833a58032a5f902d8420065fe35->leave($__internal_aea03470caa7c0d2a1d2da72fdd5bf51c428a833a58032a5f902d8420065fe35_prof);

        
        $__internal_e8058c9f21acb121d48b511da5c809facdd4e28181acfff3c8280aa36941a293->leave($__internal_e8058c9f21acb121d48b511da5c809facdd4e28181acfff3c8280aa36941a293_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
", "@FOSUser/Group/new.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new.html.twig");
    }
}
