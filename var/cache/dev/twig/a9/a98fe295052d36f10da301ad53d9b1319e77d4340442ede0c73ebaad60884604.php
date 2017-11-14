<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_be40e6d85b9b1bec121856420f6feffed7ef66cdf05bbec68d3b21964fef1866 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_2745fc24762ea62737b58bab3fcff18f55c71f52f9b15167f8b91b13131e38dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2745fc24762ea62737b58bab3fcff18f55c71f52f9b15167f8b91b13131e38dd->enter($__internal_2745fc24762ea62737b58bab3fcff18f55c71f52f9b15167f8b91b13131e38dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_22c7d652d6d74fcccd717f957aa9cd4a2be1bea3d0d072b7dfb3d8ed677211e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c7d652d6d74fcccd717f957aa9cd4a2be1bea3d0d072b7dfb3d8ed677211e1->enter($__internal_22c7d652d6d74fcccd717f957aa9cd4a2be1bea3d0d072b7dfb3d8ed677211e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2745fc24762ea62737b58bab3fcff18f55c71f52f9b15167f8b91b13131e38dd->leave($__internal_2745fc24762ea62737b58bab3fcff18f55c71f52f9b15167f8b91b13131e38dd_prof);

        
        $__internal_22c7d652d6d74fcccd717f957aa9cd4a2be1bea3d0d072b7dfb3d8ed677211e1->leave($__internal_22c7d652d6d74fcccd717f957aa9cd4a2be1bea3d0d072b7dfb3d8ed677211e1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_de6a4f61ea5268434fe845f2bbd78dd92c63a3960895f85fe7c2cac6121cc071 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de6a4f61ea5268434fe845f2bbd78dd92c63a3960895f85fe7c2cac6121cc071->enter($__internal_de6a4f61ea5268434fe845f2bbd78dd92c63a3960895f85fe7c2cac6121cc071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fde0df730e0d963c8958df9107746f9df6300e464cb960fd1d977627de0b2f32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fde0df730e0d963c8958df9107746f9df6300e464cb960fd1d977627de0b2f32->enter($__internal_fde0df730e0d963c8958df9107746f9df6300e464cb960fd1d977627de0b2f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_fde0df730e0d963c8958df9107746f9df6300e464cb960fd1d977627de0b2f32->leave($__internal_fde0df730e0d963c8958df9107746f9df6300e464cb960fd1d977627de0b2f32_prof);

        
        $__internal_de6a4f61ea5268434fe845f2bbd78dd92c63a3960895f85fe7c2cac6121cc071->leave($__internal_de6a4f61ea5268434fe845f2bbd78dd92c63a3960895f85fe7c2cac6121cc071_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
