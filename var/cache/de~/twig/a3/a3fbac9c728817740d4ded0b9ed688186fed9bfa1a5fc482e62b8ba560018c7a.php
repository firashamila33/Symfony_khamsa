<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_aaa66d88fba478b38790aa39b7ba7260b579bdc9c03b439718296ac0cf324982 extends Twig_Template
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
        $__internal_f7e794619d3cf153067a2080183ed0186f599988f8e43bcb4bc56b1c1430baab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7e794619d3cf153067a2080183ed0186f599988f8e43bcb4bc56b1c1430baab->enter($__internal_f7e794619d3cf153067a2080183ed0186f599988f8e43bcb4bc56b1c1430baab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_7b51d6f0cb4c33a324abd5d1fc2acb0dda025b39bda6129a241d16246b1f1c99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b51d6f0cb4c33a324abd5d1fc2acb0dda025b39bda6129a241d16246b1f1c99->enter($__internal_7b51d6f0cb4c33a324abd5d1fc2acb0dda025b39bda6129a241d16246b1f1c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f7e794619d3cf153067a2080183ed0186f599988f8e43bcb4bc56b1c1430baab->leave($__internal_f7e794619d3cf153067a2080183ed0186f599988f8e43bcb4bc56b1c1430baab_prof);

        
        $__internal_7b51d6f0cb4c33a324abd5d1fc2acb0dda025b39bda6129a241d16246b1f1c99->leave($__internal_7b51d6f0cb4c33a324abd5d1fc2acb0dda025b39bda6129a241d16246b1f1c99_prof);

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
", "TwigBundle:Exception:exception.css.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
