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
        $__internal_e2329978ffb1a3511d5f4cb23029c5aa366dd177e74eb43ad4fdc5a3c714bfe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2329978ffb1a3511d5f4cb23029c5aa366dd177e74eb43ad4fdc5a3c714bfe8->enter($__internal_e2329978ffb1a3511d5f4cb23029c5aa366dd177e74eb43ad4fdc5a3c714bfe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_546e7863ccac32ad5646e9a65de5e35cbf9702c417f4aa3b7b1139a3e414805c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_546e7863ccac32ad5646e9a65de5e35cbf9702c417f4aa3b7b1139a3e414805c->enter($__internal_546e7863ccac32ad5646e9a65de5e35cbf9702c417f4aa3b7b1139a3e414805c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_e2329978ffb1a3511d5f4cb23029c5aa366dd177e74eb43ad4fdc5a3c714bfe8->leave($__internal_e2329978ffb1a3511d5f4cb23029c5aa366dd177e74eb43ad4fdc5a3c714bfe8_prof);

        
        $__internal_546e7863ccac32ad5646e9a65de5e35cbf9702c417f4aa3b7b1139a3e414805c->leave($__internal_546e7863ccac32ad5646e9a65de5e35cbf9702c417f4aa3b7b1139a3e414805c_prof);

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
