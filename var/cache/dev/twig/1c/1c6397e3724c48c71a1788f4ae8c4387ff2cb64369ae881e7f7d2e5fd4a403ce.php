<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_674ad5ccd8a5f16668300d1691248dbaa787336d20feab1fe6018a922b7e9891 extends Twig_Template
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
        $__internal_750d55b44aba7b94acbffcb2172d8fd05b0a956c44ea32f216e66132a0e50ab8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_750d55b44aba7b94acbffcb2172d8fd05b0a956c44ea32f216e66132a0e50ab8->enter($__internal_750d55b44aba7b94acbffcb2172d8fd05b0a956c44ea32f216e66132a0e50ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_b7094cd66d21a3bc922bc4ef26edc2d4a01f680bf0d1386e3475c00450d2e36a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7094cd66d21a3bc922bc4ef26edc2d4a01f680bf0d1386e3475c00450d2e36a->enter($__internal_b7094cd66d21a3bc922bc4ef26edc2d4a01f680bf0d1386e3475c00450d2e36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
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
        
        $__internal_750d55b44aba7b94acbffcb2172d8fd05b0a956c44ea32f216e66132a0e50ab8->leave($__internal_750d55b44aba7b94acbffcb2172d8fd05b0a956c44ea32f216e66132a0e50ab8_prof);

        
        $__internal_b7094cd66d21a3bc922bc4ef26edc2d4a01f680bf0d1386e3475c00450d2e36a->leave($__internal_b7094cd66d21a3bc922bc4ef26edc2d4a01f680bf0d1386e3475c00450d2e36a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
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
", "TwigBundle:Exception:traces.xml.twig", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
