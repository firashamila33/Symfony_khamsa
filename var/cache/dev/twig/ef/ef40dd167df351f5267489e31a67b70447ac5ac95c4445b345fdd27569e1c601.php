<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_921d037ac4b73e92b9e8f31e7bb5fe1cc4742753f5b09996ba6fd39b7c5de9df extends Twig_Template
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
        $__internal_1fa7f58792367dae3e1f5ae72fdd180f5a6398a739e0e0c9605ff8e381b16b8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fa7f58792367dae3e1f5ae72fdd180f5a6398a739e0e0c9605ff8e381b16b8d->enter($__internal_1fa7f58792367dae3e1f5ae72fdd180f5a6398a739e0e0c9605ff8e381b16b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_ff983508497b85318d84c6269477bcc51115e11ab29bcafbe700105f00e34e70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff983508497b85318d84c6269477bcc51115e11ab29bcafbe700105f00e34e70->enter($__internal_ff983508497b85318d84c6269477bcc51115e11ab29bcafbe700105f00e34e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_1fa7f58792367dae3e1f5ae72fdd180f5a6398a739e0e0c9605ff8e381b16b8d->leave($__internal_1fa7f58792367dae3e1f5ae72fdd180f5a6398a739e0e0c9605ff8e381b16b8d_prof);

        
        $__internal_ff983508497b85318d84c6269477bcc51115e11ab29bcafbe700105f00e34e70->leave($__internal_ff983508497b85318d84c6269477bcc51115e11ab29bcafbe700105f00e34e70_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
