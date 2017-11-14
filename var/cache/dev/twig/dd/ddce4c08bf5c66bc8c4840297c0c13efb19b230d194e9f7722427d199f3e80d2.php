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
        $__internal_d1ddbb6d9d0c459fa6c3988f55491ae25c68cdc71c644efa903ba69a777b755a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1ddbb6d9d0c459fa6c3988f55491ae25c68cdc71c644efa903ba69a777b755a->enter($__internal_d1ddbb6d9d0c459fa6c3988f55491ae25c68cdc71c644efa903ba69a777b755a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_984eefc9fbd827bbd1c6baced26bd771889b3e8e1865c4099e296b2f46cf75ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_984eefc9fbd827bbd1c6baced26bd771889b3e8e1865c4099e296b2f46cf75ef->enter($__internal_984eefc9fbd827bbd1c6baced26bd771889b3e8e1865c4099e296b2f46cf75ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_d1ddbb6d9d0c459fa6c3988f55491ae25c68cdc71c644efa903ba69a777b755a->leave($__internal_d1ddbb6d9d0c459fa6c3988f55491ae25c68cdc71c644efa903ba69a777b755a_prof);

        
        $__internal_984eefc9fbd827bbd1c6baced26bd771889b3e8e1865c4099e296b2f46cf75ef->leave($__internal_984eefc9fbd827bbd1c6baced26bd771889b3e8e1865c4099e296b2f46cf75ef_prof);

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
