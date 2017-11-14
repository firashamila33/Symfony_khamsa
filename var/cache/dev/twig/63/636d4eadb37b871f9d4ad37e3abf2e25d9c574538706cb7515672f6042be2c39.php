<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_52be6cd1e8fc229fbf680366a9710ebdce616e2af605dfcaa25ee7e14417f6fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_e74844e330a175680eac5a6ba3629abbd9f17bb52a565fca507e54b9e258f4d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e74844e330a175680eac5a6ba3629abbd9f17bb52a565fca507e54b9e258f4d8->enter($__internal_e74844e330a175680eac5a6ba3629abbd9f17bb52a565fca507e54b9e258f4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_b76d102cd8da8c3f15a09872b97314be5bf2311982dbd3587eb7733c1d0c4342 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b76d102cd8da8c3f15a09872b97314be5bf2311982dbd3587eb7733c1d0c4342->enter($__internal_b76d102cd8da8c3f15a09872b97314be5bf2311982dbd3587eb7733c1d0c4342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e74844e330a175680eac5a6ba3629abbd9f17bb52a565fca507e54b9e258f4d8->leave($__internal_e74844e330a175680eac5a6ba3629abbd9f17bb52a565fca507e54b9e258f4d8_prof);

        
        $__internal_b76d102cd8da8c3f15a09872b97314be5bf2311982dbd3587eb7733c1d0c4342->leave($__internal_b76d102cd8da8c3f15a09872b97314be5bf2311982dbd3587eb7733c1d0c4342_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a107abe07ef640af02f96a402b5b29cebb8a15f4751a01811314a441b1d2b357 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a107abe07ef640af02f96a402b5b29cebb8a15f4751a01811314a441b1d2b357->enter($__internal_a107abe07ef640af02f96a402b5b29cebb8a15f4751a01811314a441b1d2b357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f7c99adf9a32140a13c80df6446ad0fd8671c7c6e0f5f09e3283d013ca8d3e73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7c99adf9a32140a13c80df6446ad0fd8671c7c6e0f5f09e3283d013ca8d3e73->enter($__internal_f7c99adf9a32140a13c80df6446ad0fd8671c7c6e0f5f09e3283d013ca8d3e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_f7c99adf9a32140a13c80df6446ad0fd8671c7c6e0f5f09e3283d013ca8d3e73->leave($__internal_f7c99adf9a32140a13c80df6446ad0fd8671c7c6e0f5f09e3283d013ca8d3e73_prof);

        
        $__internal_a107abe07ef640af02f96a402b5b29cebb8a15f4751a01811314a441b1d2b357->leave($__internal_a107abe07ef640af02f96a402b5b29cebb8a15f4751a01811314a441b1d2b357_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
", "FOSUserBundle:Group:list.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list.html.twig");
    }
}
