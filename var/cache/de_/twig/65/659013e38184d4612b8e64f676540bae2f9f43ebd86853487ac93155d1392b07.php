<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_679d3bb546733750468716b07b0049901124613ec9bf312c1ff013360bd1fa39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_837b05628c27aa2b6715b2e8241c150aea1c9cd674e6e377b620152720c3f16c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_837b05628c27aa2b6715b2e8241c150aea1c9cd674e6e377b620152720c3f16c->enter($__internal_837b05628c27aa2b6715b2e8241c150aea1c9cd674e6e377b620152720c3f16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_bf7a71349e4136ba3249c5e382abb9ede236613c29b9245d16ecd77a0c6ba947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf7a71349e4136ba3249c5e382abb9ede236613c29b9245d16ecd77a0c6ba947->enter($__internal_bf7a71349e4136ba3249c5e382abb9ede236613c29b9245d16ecd77a0c6ba947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_837b05628c27aa2b6715b2e8241c150aea1c9cd674e6e377b620152720c3f16c->leave($__internal_837b05628c27aa2b6715b2e8241c150aea1c9cd674e6e377b620152720c3f16c_prof);

        
        $__internal_bf7a71349e4136ba3249c5e382abb9ede236613c29b9245d16ecd77a0c6ba947->leave($__internal_bf7a71349e4136ba3249c5e382abb9ede236613c29b9245d16ecd77a0c6ba947_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_478cd2bf96921e8c14664e030e1598f66b006e71ed4f35a2fdda6cf31199f482 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_478cd2bf96921e8c14664e030e1598f66b006e71ed4f35a2fdda6cf31199f482->enter($__internal_478cd2bf96921e8c14664e030e1598f66b006e71ed4f35a2fdda6cf31199f482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6fdd695c14d0b04a0da587b8d380d812d31aff7d5c40f6e178c258ad7de57e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fdd695c14d0b04a0da587b8d380d812d31aff7d5c40f6e178c258ad7de57e7c->enter($__internal_6fdd695c14d0b04a0da587b8d380d812d31aff7d5c40f6e178c258ad7de57e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_6fdd695c14d0b04a0da587b8d380d812d31aff7d5c40f6e178c258ad7de57e7c->leave($__internal_6fdd695c14d0b04a0da587b8d380d812d31aff7d5c40f6e178c258ad7de57e7c_prof);

        
        $__internal_478cd2bf96921e8c14664e030e1598f66b006e71ed4f35a2fdda6cf31199f482->leave($__internal_478cd2bf96921e8c14664e030e1598f66b006e71ed4f35a2fdda6cf31199f482_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
", "@FOSUser/Group/show.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show.html.twig");
    }
}
