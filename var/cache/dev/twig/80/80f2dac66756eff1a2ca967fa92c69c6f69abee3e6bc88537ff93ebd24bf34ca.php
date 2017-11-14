<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_9fe1002eb0fd709832e32c1b464a07249424021a7e5e093db986e9311f012936 extends Twig_Template
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
        $__internal_11988454c0e80d6ed5e6f61e3ad5b39f8f9372e04369045fc69c68042d9c363f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11988454c0e80d6ed5e6f61e3ad5b39f8f9372e04369045fc69c68042d9c363f->enter($__internal_11988454c0e80d6ed5e6f61e3ad5b39f8f9372e04369045fc69c68042d9c363f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_036d5be7c2ee4333e68ad9d37b98601dbbf8e75409d9eb06f6761e1a50293ae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_036d5be7c2ee4333e68ad9d37b98601dbbf8e75409d9eb06f6761e1a50293ae5->enter($__internal_036d5be7c2ee4333e68ad9d37b98601dbbf8e75409d9eb06f6761e1a50293ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_11988454c0e80d6ed5e6f61e3ad5b39f8f9372e04369045fc69c68042d9c363f->leave($__internal_11988454c0e80d6ed5e6f61e3ad5b39f8f9372e04369045fc69c68042d9c363f_prof);

        
        $__internal_036d5be7c2ee4333e68ad9d37b98601dbbf8e75409d9eb06f6761e1a50293ae5->leave($__internal_036d5be7c2ee4333e68ad9d37b98601dbbf8e75409d9eb06f6761e1a50293ae5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
