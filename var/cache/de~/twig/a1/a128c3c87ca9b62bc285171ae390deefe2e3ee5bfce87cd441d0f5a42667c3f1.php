<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_106127d4fa88d1a1640db57f3a26f01185526a0f3869f6c8873aec8db344b6c5 extends Twig_Template
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
        $__internal_620770ced87e824086533f8cb0231e3e2ba7d8e9c2a1295041966d75fc553db8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_620770ced87e824086533f8cb0231e3e2ba7d8e9c2a1295041966d75fc553db8->enter($__internal_620770ced87e824086533f8cb0231e3e2ba7d8e9c2a1295041966d75fc553db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_c201f366c975572c3467d478b926ec53f7be50ea1dcb2c94926e2e9cc7f47fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c201f366c975572c3467d478b926ec53f7be50ea1dcb2c94926e2e9cc7f47fd2->enter($__internal_c201f366c975572c3467d478b926ec53f7be50ea1dcb2c94926e2e9cc7f47fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_620770ced87e824086533f8cb0231e3e2ba7d8e9c2a1295041966d75fc553db8->leave($__internal_620770ced87e824086533f8cb0231e3e2ba7d8e9c2a1295041966d75fc553db8_prof);

        
        $__internal_c201f366c975572c3467d478b926ec53f7be50ea1dcb2c94926e2e9cc7f47fd2->leave($__internal_c201f366c975572c3467d478b926ec53f7be50ea1dcb2c94926e2e9cc7f47fd2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
