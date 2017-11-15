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
        $__internal_948f256c693c91e74e50c782f6a06e53651314ff71fc85051499f3e354a00f11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_948f256c693c91e74e50c782f6a06e53651314ff71fc85051499f3e354a00f11->enter($__internal_948f256c693c91e74e50c782f6a06e53651314ff71fc85051499f3e354a00f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_5b2fd115142e7437004fc1a4662c91eea5a98ba186c24f826df7a1030338fcf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b2fd115142e7437004fc1a4662c91eea5a98ba186c24f826df7a1030338fcf3->enter($__internal_5b2fd115142e7437004fc1a4662c91eea5a98ba186c24f826df7a1030338fcf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_948f256c693c91e74e50c782f6a06e53651314ff71fc85051499f3e354a00f11->leave($__internal_948f256c693c91e74e50c782f6a06e53651314ff71fc85051499f3e354a00f11_prof);

        
        $__internal_5b2fd115142e7437004fc1a4662c91eea5a98ba186c24f826df7a1030338fcf3->leave($__internal_5b2fd115142e7437004fc1a4662c91eea5a98ba186c24f826df7a1030338fcf3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3e554807abc6b3a64cee9b76fdf5af7c2606eca0c190d999f4beb576fd93a7fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e554807abc6b3a64cee9b76fdf5af7c2606eca0c190d999f4beb576fd93a7fb->enter($__internal_3e554807abc6b3a64cee9b76fdf5af7c2606eca0c190d999f4beb576fd93a7fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_dcfe771f5ba417df94e03f6c78ee95708ef77e7909d9456640b01f51fdb3892b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcfe771f5ba417df94e03f6c78ee95708ef77e7909d9456640b01f51fdb3892b->enter($__internal_dcfe771f5ba417df94e03f6c78ee95708ef77e7909d9456640b01f51fdb3892b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_dcfe771f5ba417df94e03f6c78ee95708ef77e7909d9456640b01f51fdb3892b->leave($__internal_dcfe771f5ba417df94e03f6c78ee95708ef77e7909d9456640b01f51fdb3892b_prof);

        
        $__internal_3e554807abc6b3a64cee9b76fdf5af7c2606eca0c190d999f4beb576fd93a7fb->leave($__internal_3e554807abc6b3a64cee9b76fdf5af7c2606eca0c190d999f4beb576fd93a7fb_prof);

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
