<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_43e489598e9c0421d75f5d96244c2588ffefc2df3fa36f986b9bed6344e23397 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_ccf21924a306d3d7cd32449731411011d98011a0e405fcc16ebdcfdf93adc90d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccf21924a306d3d7cd32449731411011d98011a0e405fcc16ebdcfdf93adc90d->enter($__internal_ccf21924a306d3d7cd32449731411011d98011a0e405fcc16ebdcfdf93adc90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_8b8124e9c2cc3a8fa28b46fb0addf44def5fc2cacf70fd981ed3525395fe04ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b8124e9c2cc3a8fa28b46fb0addf44def5fc2cacf70fd981ed3525395fe04ff->enter($__internal_8b8124e9c2cc3a8fa28b46fb0addf44def5fc2cacf70fd981ed3525395fe04ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccf21924a306d3d7cd32449731411011d98011a0e405fcc16ebdcfdf93adc90d->leave($__internal_ccf21924a306d3d7cd32449731411011d98011a0e405fcc16ebdcfdf93adc90d_prof);

        
        $__internal_8b8124e9c2cc3a8fa28b46fb0addf44def5fc2cacf70fd981ed3525395fe04ff->leave($__internal_8b8124e9c2cc3a8fa28b46fb0addf44def5fc2cacf70fd981ed3525395fe04ff_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6ac3937ba5e75f107ff38fbb03e1bb477b55254614f048194d6c6e1e0b38c3d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ac3937ba5e75f107ff38fbb03e1bb477b55254614f048194d6c6e1e0b38c3d8->enter($__internal_6ac3937ba5e75f107ff38fbb03e1bb477b55254614f048194d6c6e1e0b38c3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2f2bc7dff00c8c959bbd238c5cea532aa30e32377f8ca383b8a86d6168783052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f2bc7dff00c8c959bbd238c5cea532aa30e32377f8ca383b8a86d6168783052->enter($__internal_2f2bc7dff00c8c959bbd238c5cea532aa30e32377f8ca383b8a86d6168783052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_2f2bc7dff00c8c959bbd238c5cea532aa30e32377f8ca383b8a86d6168783052->leave($__internal_2f2bc7dff00c8c959bbd238c5cea532aa30e32377f8ca383b8a86d6168783052_prof);

        
        $__internal_6ac3937ba5e75f107ff38fbb03e1bb477b55254614f048194d6c6e1e0b38c3d8->leave($__internal_6ac3937ba5e75f107ff38fbb03e1bb477b55254614f048194d6c6e1e0b38c3d8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/edit.html.twig");
    }
}
