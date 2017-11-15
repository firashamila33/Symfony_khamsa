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
        $__internal_4fec6a02c463ee3bc61ecb010e7dd11c4cefbbdc9b39d8384408df6baa3ca09d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fec6a02c463ee3bc61ecb010e7dd11c4cefbbdc9b39d8384408df6baa3ca09d->enter($__internal_4fec6a02c463ee3bc61ecb010e7dd11c4cefbbdc9b39d8384408df6baa3ca09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_92dc8f5b10886e2d635a987abea36b490bf2f1455b775524810040c77eaeba3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92dc8f5b10886e2d635a987abea36b490bf2f1455b775524810040c77eaeba3f->enter($__internal_92dc8f5b10886e2d635a987abea36b490bf2f1455b775524810040c77eaeba3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4fec6a02c463ee3bc61ecb010e7dd11c4cefbbdc9b39d8384408df6baa3ca09d->leave($__internal_4fec6a02c463ee3bc61ecb010e7dd11c4cefbbdc9b39d8384408df6baa3ca09d_prof);

        
        $__internal_92dc8f5b10886e2d635a987abea36b490bf2f1455b775524810040c77eaeba3f->leave($__internal_92dc8f5b10886e2d635a987abea36b490bf2f1455b775524810040c77eaeba3f_prof);

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
