<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_c3c3c07d604e1099a25c9564675692ddaccd254566a413893c7acc5f74a85c1f extends Twig_Template
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
        $__internal_f3bb26b7f6f0b5c830c1e42feea1d09aaa4479f8a80cd229ad6e5b59045f74f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3bb26b7f6f0b5c830c1e42feea1d09aaa4479f8a80cd229ad6e5b59045f74f4->enter($__internal_f3bb26b7f6f0b5c830c1e42feea1d09aaa4479f8a80cd229ad6e5b59045f74f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_edc3f74ce21403ad34ab98e43a73155c312973467adde4f6174f7867af0b2cce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edc3f74ce21403ad34ab98e43a73155c312973467adde4f6174f7867af0b2cce->enter($__internal_edc3f74ce21403ad34ab98e43a73155c312973467adde4f6174f7867af0b2cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f3bb26b7f6f0b5c830c1e42feea1d09aaa4479f8a80cd229ad6e5b59045f74f4->leave($__internal_f3bb26b7f6f0b5c830c1e42feea1d09aaa4479f8a80cd229ad6e5b59045f74f4_prof);

        
        $__internal_edc3f74ce21403ad34ab98e43a73155c312973467adde4f6174f7867af0b2cce->leave($__internal_edc3f74ce21403ad34ab98e43a73155c312973467adde4f6174f7867af0b2cce_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
