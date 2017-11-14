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
        $__internal_9a0cdc37584bda2b7a465dbe425c0b6d80a792f884388bf0e1e32a3f7216cf92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a0cdc37584bda2b7a465dbe425c0b6d80a792f884388bf0e1e32a3f7216cf92->enter($__internal_9a0cdc37584bda2b7a465dbe425c0b6d80a792f884388bf0e1e32a3f7216cf92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_0f84fea576199861750b6900df5ffab0cb5bc8a0d627984620d002f7e9d1a90b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f84fea576199861750b6900df5ffab0cb5bc8a0d627984620d002f7e9d1a90b->enter($__internal_0f84fea576199861750b6900df5ffab0cb5bc8a0d627984620d002f7e9d1a90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a0cdc37584bda2b7a465dbe425c0b6d80a792f884388bf0e1e32a3f7216cf92->leave($__internal_9a0cdc37584bda2b7a465dbe425c0b6d80a792f884388bf0e1e32a3f7216cf92_prof);

        
        $__internal_0f84fea576199861750b6900df5ffab0cb5bc8a0d627984620d002f7e9d1a90b->leave($__internal_0f84fea576199861750b6900df5ffab0cb5bc8a0d627984620d002f7e9d1a90b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_de8fef2fff5dec03517fc52b45ae190f05ccdb832ccd4a98327c04546159f141 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de8fef2fff5dec03517fc52b45ae190f05ccdb832ccd4a98327c04546159f141->enter($__internal_de8fef2fff5dec03517fc52b45ae190f05ccdb832ccd4a98327c04546159f141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c979750d38421e8b3fc4de9156085ace0ca4bc4051d153f7fb4cecdf939ea5eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c979750d38421e8b3fc4de9156085ace0ca4bc4051d153f7fb4cecdf939ea5eb->enter($__internal_c979750d38421e8b3fc4de9156085ace0ca4bc4051d153f7fb4cecdf939ea5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_c979750d38421e8b3fc4de9156085ace0ca4bc4051d153f7fb4cecdf939ea5eb->leave($__internal_c979750d38421e8b3fc4de9156085ace0ca4bc4051d153f7fb4cecdf939ea5eb_prof);

        
        $__internal_de8fef2fff5dec03517fc52b45ae190f05ccdb832ccd4a98327c04546159f141->leave($__internal_de8fef2fff5dec03517fc52b45ae190f05ccdb832ccd4a98327c04546159f141_prof);

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
