<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_f91e656c09bd581a3719edcf6bcf3b8bb32586c4f4b78be426705783d372b8a7 extends Twig_Template
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
        $__internal_86640d42b8f0bce3f4c1fbce771713128b6654cf566337803c3659ca7ecc33bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86640d42b8f0bce3f4c1fbce771713128b6654cf566337803c3659ca7ecc33bb->enter($__internal_86640d42b8f0bce3f4c1fbce771713128b6654cf566337803c3659ca7ecc33bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_b4ab86b7e2a65fc6992a51dec7acceb72e8f8eae4e6f8cedef9f91039f0fef7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4ab86b7e2a65fc6992a51dec7acceb72e8f8eae4e6f8cedef9f91039f0fef7a->enter($__internal_b4ab86b7e2a65fc6992a51dec7acceb72e8f8eae4e6f8cedef9f91039f0fef7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_86640d42b8f0bce3f4c1fbce771713128b6654cf566337803c3659ca7ecc33bb->leave($__internal_86640d42b8f0bce3f4c1fbce771713128b6654cf566337803c3659ca7ecc33bb_prof);

        
        $__internal_b4ab86b7e2a65fc6992a51dec7acceb72e8f8eae4e6f8cedef9f91039f0fef7a->leave($__internal_b4ab86b7e2a65fc6992a51dec7acceb72e8f8eae4e6f8cedef9f91039f0fef7a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
