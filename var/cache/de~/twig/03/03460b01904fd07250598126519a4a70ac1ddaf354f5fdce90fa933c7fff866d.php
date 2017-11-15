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
        $__internal_5dba87a4e7ebdc0c1c1fef9fd840d0dfd9a36127e058bc8b5a970778a021909c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dba87a4e7ebdc0c1c1fef9fd840d0dfd9a36127e058bc8b5a970778a021909c->enter($__internal_5dba87a4e7ebdc0c1c1fef9fd840d0dfd9a36127e058bc8b5a970778a021909c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_5629605d13d7ed0a127adf7dd556b1e7a941e95e019b860511b742b4adc35181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5629605d13d7ed0a127adf7dd556b1e7a941e95e019b860511b742b4adc35181->enter($__internal_5629605d13d7ed0a127adf7dd556b1e7a941e95e019b860511b742b4adc35181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5dba87a4e7ebdc0c1c1fef9fd840d0dfd9a36127e058bc8b5a970778a021909c->leave($__internal_5dba87a4e7ebdc0c1c1fef9fd840d0dfd9a36127e058bc8b5a970778a021909c_prof);

        
        $__internal_5629605d13d7ed0a127adf7dd556b1e7a941e95e019b860511b742b4adc35181->leave($__internal_5629605d13d7ed0a127adf7dd556b1e7a941e95e019b860511b742b4adc35181_prof);

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
