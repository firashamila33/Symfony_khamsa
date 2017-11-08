<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_8f8db681d3ab69ee713055b6cff23e3c90876cf036f1126c612dfe2c935abc36 extends Twig_Template
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
        $__internal_d1b943d670dcd4af9111109c7d7f31f6983980554023afb42c89a0ee0a567752 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1b943d670dcd4af9111109c7d7f31f6983980554023afb42c89a0ee0a567752->enter($__internal_d1b943d670dcd4af9111109c7d7f31f6983980554023afb42c89a0ee0a567752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_f3ac304dc83e6c6f9c8d52948c16ce449a1858bf595307d8193ba90bec7af400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3ac304dc83e6c6f9c8d52948c16ce449a1858bf595307d8193ba90bec7af400->enter($__internal_f3ac304dc83e6c6f9c8d52948c16ce449a1858bf595307d8193ba90bec7af400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_d1b943d670dcd4af9111109c7d7f31f6983980554023afb42c89a0ee0a567752->leave($__internal_d1b943d670dcd4af9111109c7d7f31f6983980554023afb42c89a0ee0a567752_prof);

        
        $__internal_f3ac304dc83e6c6f9c8d52948c16ce449a1858bf595307d8193ba90bec7af400->leave($__internal_f3ac304dc83e6c6f9c8d52948c16ce449a1858bf595307d8193ba90bec7af400_prof);

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
", "TwigBundle:Exception:exception.rdf.twig", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
