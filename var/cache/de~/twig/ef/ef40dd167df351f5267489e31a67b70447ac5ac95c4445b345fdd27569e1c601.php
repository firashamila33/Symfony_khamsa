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
        $__internal_b073a464271082c04e1b847b5929182721885ac128eb68abb414e0fcb067ec9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b073a464271082c04e1b847b5929182721885ac128eb68abb414e0fcb067ec9d->enter($__internal_b073a464271082c04e1b847b5929182721885ac128eb68abb414e0fcb067ec9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_bb21e6322d5244bbc89622f9503aedab8cc971b824bafedbc0d3ff5f2d700fd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb21e6322d5244bbc89622f9503aedab8cc971b824bafedbc0d3ff5f2d700fd3->enter($__internal_bb21e6322d5244bbc89622f9503aedab8cc971b824bafedbc0d3ff5f2d700fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

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
        
        $__internal_b073a464271082c04e1b847b5929182721885ac128eb68abb414e0fcb067ec9d->leave($__internal_b073a464271082c04e1b847b5929182721885ac128eb68abb414e0fcb067ec9d_prof);

        
        $__internal_bb21e6322d5244bbc89622f9503aedab8cc971b824bafedbc0d3ff5f2d700fd3->leave($__internal_bb21e6322d5244bbc89622f9503aedab8cc971b824bafedbc0d3ff5f2d700fd3_prof);

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
