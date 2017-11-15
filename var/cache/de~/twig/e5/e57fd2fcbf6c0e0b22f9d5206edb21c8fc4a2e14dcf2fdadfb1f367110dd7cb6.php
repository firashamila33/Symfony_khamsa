<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_b4e1d601111e71205667c236ba6b5b4d28f27d8cbf575ed46fd11f998a6262a6 extends Twig_Template
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
        $__internal_a7fc1b5f45ee428096cbd2f6a95e64c65078fd08be3ef7c9a1e39ee8a75ca8da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7fc1b5f45ee428096cbd2f6a95e64c65078fd08be3ef7c9a1e39ee8a75ca8da->enter($__internal_a7fc1b5f45ee428096cbd2f6a95e64c65078fd08be3ef7c9a1e39ee8a75ca8da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_09de82a5b70fa90719d92f9eb236024c0cdacc44f8c1e6135087301930055297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09de82a5b70fa90719d92f9eb236024c0cdacc44f8c1e6135087301930055297->enter($__internal_09de82a5b70fa90719d92f9eb236024c0cdacc44f8c1e6135087301930055297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_a7fc1b5f45ee428096cbd2f6a95e64c65078fd08be3ef7c9a1e39ee8a75ca8da->leave($__internal_a7fc1b5f45ee428096cbd2f6a95e64c65078fd08be3ef7c9a1e39ee8a75ca8da_prof);

        
        $__internal_09de82a5b70fa90719d92f9eb236024c0cdacc44f8c1e6135087301930055297->leave($__internal_09de82a5b70fa90719d92f9eb236024c0cdacc44f8c1e6135087301930055297_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
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
", "TwigBundle:Exception:traces.txt.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
