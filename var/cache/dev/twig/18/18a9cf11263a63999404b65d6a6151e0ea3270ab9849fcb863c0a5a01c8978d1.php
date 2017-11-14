<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_986e5f41627e552cacbba10170479490698c0eda2fbb601e11b4cd6a13613843 extends Twig_Template
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
        $__internal_42e26df6a366d3c06d65006aeb12b86a7dd3080845ac81e5c480b039da216049 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42e26df6a366d3c06d65006aeb12b86a7dd3080845ac81e5c480b039da216049->enter($__internal_42e26df6a366d3c06d65006aeb12b86a7dd3080845ac81e5c480b039da216049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_c4f041e7b3cb387bc016b0025c59fe5cb252a6e15105fd46e5756bca052a5774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4f041e7b3cb387bc016b0025c59fe5cb252a6e15105fd46e5756bca052a5774->enter($__internal_c4f041e7b3cb387bc016b0025c59fe5cb252a6e15105fd46e5756bca052a5774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_42e26df6a366d3c06d65006aeb12b86a7dd3080845ac81e5c480b039da216049->leave($__internal_42e26df6a366d3c06d65006aeb12b86a7dd3080845ac81e5c480b039da216049_prof);

        
        $__internal_c4f041e7b3cb387bc016b0025c59fe5cb252a6e15105fd46e5756bca052a5774->leave($__internal_c4f041e7b3cb387bc016b0025c59fe5cb252a6e15105fd46e5756bca052a5774_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
