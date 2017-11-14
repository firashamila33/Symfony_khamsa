<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_4c49cfaeb0c54cb0ff97be6e3f692d0d77ac4f3fac6b612073f9f4f8f2877851 extends Twig_Template
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
        $__internal_be97772106df4db9e0ea1ff684034cd822244416f39d00ca87bcbf13c4352128 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be97772106df4db9e0ea1ff684034cd822244416f39d00ca87bcbf13c4352128->enter($__internal_be97772106df4db9e0ea1ff684034cd822244416f39d00ca87bcbf13c4352128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_6a7780b98d3c7db31cbd6844b0004fb9ec693ae357593e7d80c1fadf953592a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a7780b98d3c7db31cbd6844b0004fb9ec693ae357593e7d80c1fadf953592a4->enter($__internal_6a7780b98d3c7db31cbd6844b0004fb9ec693ae357593e7d80c1fadf953592a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_be97772106df4db9e0ea1ff684034cd822244416f39d00ca87bcbf13c4352128->leave($__internal_be97772106df4db9e0ea1ff684034cd822244416f39d00ca87bcbf13c4352128_prof);

        
        $__internal_6a7780b98d3c7db31cbd6844b0004fb9ec693ae357593e7d80c1fadf953592a4->leave($__internal_6a7780b98d3c7db31cbd6844b0004fb9ec693ae357593e7d80c1fadf953592a4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
