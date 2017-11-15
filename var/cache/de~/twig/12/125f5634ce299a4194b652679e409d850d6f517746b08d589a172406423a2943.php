<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_07f5a558b21c8fcb5b0ecd80ba7f52e7e0739f890595e88142783b8e9978137c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_522a7d26bdb71694bf40201d33ea2eab1017e0dfadc1c99bd80201143b73f141 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_522a7d26bdb71694bf40201d33ea2eab1017e0dfadc1c99bd80201143b73f141->enter($__internal_522a7d26bdb71694bf40201d33ea2eab1017e0dfadc1c99bd80201143b73f141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_edfbda5ba55fbc9c7891dd9d13d77678c58a3f35071ee42995074c3d377cc417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edfbda5ba55fbc9c7891dd9d13d77678c58a3f35071ee42995074c3d377cc417->enter($__internal_edfbda5ba55fbc9c7891dd9d13d77678c58a3f35071ee42995074c3d377cc417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_522a7d26bdb71694bf40201d33ea2eab1017e0dfadc1c99bd80201143b73f141->leave($__internal_522a7d26bdb71694bf40201d33ea2eab1017e0dfadc1c99bd80201143b73f141_prof);

        
        $__internal_edfbda5ba55fbc9c7891dd9d13d77678c58a3f35071ee42995074c3d377cc417->leave($__internal_edfbda5ba55fbc9c7891dd9d13d77678c58a3f35071ee42995074c3d377cc417_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
