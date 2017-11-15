<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_53a55c7ca5522bf4abd09b6dd49c854a2bc9fd750f4a47021b9ac04d4696f4da extends Twig_Template
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
        $__internal_f85f91afa902d7d320a2d39eeffa43a6b9c9507f45e358370dea8b10ee34ea4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f85f91afa902d7d320a2d39eeffa43a6b9c9507f45e358370dea8b10ee34ea4a->enter($__internal_f85f91afa902d7d320a2d39eeffa43a6b9c9507f45e358370dea8b10ee34ea4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_7e92a0c16d9a19e5d7b844071007fdbd1076afef3416a102606b531162e5bb8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e92a0c16d9a19e5d7b844071007fdbd1076afef3416a102606b531162e5bb8b->enter($__internal_7e92a0c16d9a19e5d7b844071007fdbd1076afef3416a102606b531162e5bb8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_f85f91afa902d7d320a2d39eeffa43a6b9c9507f45e358370dea8b10ee34ea4a->leave($__internal_f85f91afa902d7d320a2d39eeffa43a6b9c9507f45e358370dea8b10ee34ea4a_prof);

        
        $__internal_7e92a0c16d9a19e5d7b844071007fdbd1076afef3416a102606b531162e5bb8b->leave($__internal_7e92a0c16d9a19e5d7b844071007fdbd1076afef3416a102606b531162e5bb8b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
