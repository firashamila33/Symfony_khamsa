<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_56fb50f342e36182484d04dd15c5a543b6ae60648e4c0aa0e8976faedf1a90df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_8a87b4a6fa86260e42e52b0e9e986c72e918fd034a435979ade35900ec119585 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a87b4a6fa86260e42e52b0e9e986c72e918fd034a435979ade35900ec119585->enter($__internal_8a87b4a6fa86260e42e52b0e9e986c72e918fd034a435979ade35900ec119585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_292ce88fdcb55c554eb558785c8527e4174447d2d18dd561871ecaa6b3774d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_292ce88fdcb55c554eb558785c8527e4174447d2d18dd561871ecaa6b3774d35->enter($__internal_292ce88fdcb55c554eb558785c8527e4174447d2d18dd561871ecaa6b3774d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a87b4a6fa86260e42e52b0e9e986c72e918fd034a435979ade35900ec119585->leave($__internal_8a87b4a6fa86260e42e52b0e9e986c72e918fd034a435979ade35900ec119585_prof);

        
        $__internal_292ce88fdcb55c554eb558785c8527e4174447d2d18dd561871ecaa6b3774d35->leave($__internal_292ce88fdcb55c554eb558785c8527e4174447d2d18dd561871ecaa6b3774d35_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_94dd281d7614d514ec4264b676bc6ec2a6c2164572201b4b8aa82fd603216667 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94dd281d7614d514ec4264b676bc6ec2a6c2164572201b4b8aa82fd603216667->enter($__internal_94dd281d7614d514ec4264b676bc6ec2a6c2164572201b4b8aa82fd603216667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e4319e56ffd6272c3c7cc0f5850b51d9228059dbed0bc24bdca86deeca8d3a7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4319e56ffd6272c3c7cc0f5850b51d9228059dbed0bc24bdca86deeca8d3a7d->enter($__internal_e4319e56ffd6272c3c7cc0f5850b51d9228059dbed0bc24bdca86deeca8d3a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_e4319e56ffd6272c3c7cc0f5850b51d9228059dbed0bc24bdca86deeca8d3a7d->leave($__internal_e4319e56ffd6272c3c7cc0f5850b51d9228059dbed0bc24bdca86deeca8d3a7d_prof);

        
        $__internal_94dd281d7614d514ec4264b676bc6ec2a6c2164572201b4b8aa82fd603216667->leave($__internal_94dd281d7614d514ec4264b676bc6ec2a6c2164572201b4b8aa82fd603216667_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
