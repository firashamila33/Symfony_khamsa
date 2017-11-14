<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_fc0b3775e19c07327ba8dca2fffd3f232b5e66832e1373189d41ba7849e2bfe4 extends Twig_Template
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
        $__internal_e9d6f85bd8fafae41a30048e7c56db08d96f7ce38483dcb07b911b18d9f7a53a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9d6f85bd8fafae41a30048e7c56db08d96f7ce38483dcb07b911b18d9f7a53a->enter($__internal_e9d6f85bd8fafae41a30048e7c56db08d96f7ce38483dcb07b911b18d9f7a53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_2a353958f6e8d269637d4aebbd97e3a1df739cec44fd4c6236db6040040e91ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a353958f6e8d269637d4aebbd97e3a1df739cec44fd4c6236db6040040e91ce->enter($__internal_2a353958f6e8d269637d4aebbd97e3a1df739cec44fd4c6236db6040040e91ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e9d6f85bd8fafae41a30048e7c56db08d96f7ce38483dcb07b911b18d9f7a53a->leave($__internal_e9d6f85bd8fafae41a30048e7c56db08d96f7ce38483dcb07b911b18d9f7a53a_prof);

        
        $__internal_2a353958f6e8d269637d4aebbd97e3a1df739cec44fd4c6236db6040040e91ce->leave($__internal_2a353958f6e8d269637d4aebbd97e3a1df739cec44fd4c6236db6040040e91ce_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
