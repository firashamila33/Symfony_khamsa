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
        $__internal_8c8bf4c1f7e68f0c355fa974910d7a1059c54ef2b68c1c45dd49e259e923f05e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c8bf4c1f7e68f0c355fa974910d7a1059c54ef2b68c1c45dd49e259e923f05e->enter($__internal_8c8bf4c1f7e68f0c355fa974910d7a1059c54ef2b68c1c45dd49e259e923f05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_66a90e219527991f0249e56b3193f82df1686b01cf4d6d8b4413c57d5fd8cac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66a90e219527991f0249e56b3193f82df1686b01cf4d6d8b4413c57d5fd8cac1->enter($__internal_66a90e219527991f0249e56b3193f82df1686b01cf4d6d8b4413c57d5fd8cac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_8c8bf4c1f7e68f0c355fa974910d7a1059c54ef2b68c1c45dd49e259e923f05e->leave($__internal_8c8bf4c1f7e68f0c355fa974910d7a1059c54ef2b68c1c45dd49e259e923f05e_prof);

        
        $__internal_66a90e219527991f0249e56b3193f82df1686b01cf4d6d8b4413c57d5fd8cac1->leave($__internal_66a90e219527991f0249e56b3193f82df1686b01cf4d6d8b4413c57d5fd8cac1_prof);

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
