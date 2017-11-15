<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_5cf1447763e54eef7368a7702d1f895604bd6a2243311ae948c00b8a067a550c extends Twig_Template
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
        $__internal_8ecd9ae4d65e8e09cc23d0c431c13100f30eecb9634efc4418e759995d2ccaf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ecd9ae4d65e8e09cc23d0c431c13100f30eecb9634efc4418e759995d2ccaf0->enter($__internal_8ecd9ae4d65e8e09cc23d0c431c13100f30eecb9634efc4418e759995d2ccaf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_d16b28651da8846f8192977eeb7fc90e59d90688dcb800566d90e3e9b4872ae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d16b28651da8846f8192977eeb7fc90e59d90688dcb800566d90e3e9b4872ae7->enter($__internal_d16b28651da8846f8192977eeb7fc90e59d90688dcb800566d90e3e9b4872ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_8ecd9ae4d65e8e09cc23d0c431c13100f30eecb9634efc4418e759995d2ccaf0->leave($__internal_8ecd9ae4d65e8e09cc23d0c431c13100f30eecb9634efc4418e759995d2ccaf0_prof);

        
        $__internal_d16b28651da8846f8192977eeb7fc90e59d90688dcb800566d90e3e9b4872ae7->leave($__internal_d16b28651da8846f8192977eeb7fc90e59d90688dcb800566d90e3e9b4872ae7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
