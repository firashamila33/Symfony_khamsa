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
        $__internal_e9c361cba6bf3d694ad474fb3e9da9fa9d82c796d9ff2be10426a784aee04ed8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9c361cba6bf3d694ad474fb3e9da9fa9d82c796d9ff2be10426a784aee04ed8->enter($__internal_e9c361cba6bf3d694ad474fb3e9da9fa9d82c796d9ff2be10426a784aee04ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_7506c60ce060ccb58c109837f8397591f84b6735ebe81ba5a0193ad430a698c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7506c60ce060ccb58c109837f8397591f84b6735ebe81ba5a0193ad430a698c3->enter($__internal_7506c60ce060ccb58c109837f8397591f84b6735ebe81ba5a0193ad430a698c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_e9c361cba6bf3d694ad474fb3e9da9fa9d82c796d9ff2be10426a784aee04ed8->leave($__internal_e9c361cba6bf3d694ad474fb3e9da9fa9d82c796d9ff2be10426a784aee04ed8_prof);

        
        $__internal_7506c60ce060ccb58c109837f8397591f84b6735ebe81ba5a0193ad430a698c3->leave($__internal_7506c60ce060ccb58c109837f8397591f84b6735ebe81ba5a0193ad430a698c3_prof);

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
