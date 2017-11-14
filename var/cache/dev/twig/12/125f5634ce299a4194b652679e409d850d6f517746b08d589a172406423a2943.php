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
        $__internal_578e9e5f127b941a3ec6d7dd6b47459352ec108fa8ef5f5629dda9ffad0b4b60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_578e9e5f127b941a3ec6d7dd6b47459352ec108fa8ef5f5629dda9ffad0b4b60->enter($__internal_578e9e5f127b941a3ec6d7dd6b47459352ec108fa8ef5f5629dda9ffad0b4b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_d2bc9c352ee81b82123373acd8dc2a017e1ef645ab3aa22b785c388997cf10a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2bc9c352ee81b82123373acd8dc2a017e1ef645ab3aa22b785c388997cf10a5->enter($__internal_d2bc9c352ee81b82123373acd8dc2a017e1ef645ab3aa22b785c388997cf10a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_578e9e5f127b941a3ec6d7dd6b47459352ec108fa8ef5f5629dda9ffad0b4b60->leave($__internal_578e9e5f127b941a3ec6d7dd6b47459352ec108fa8ef5f5629dda9ffad0b4b60_prof);

        
        $__internal_d2bc9c352ee81b82123373acd8dc2a017e1ef645ab3aa22b785c388997cf10a5->leave($__internal_d2bc9c352ee81b82123373acd8dc2a017e1ef645ab3aa22b785c388997cf10a5_prof);

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
