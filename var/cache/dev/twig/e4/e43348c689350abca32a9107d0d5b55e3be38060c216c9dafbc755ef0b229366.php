<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_040ed301752bb85cebb68c0668b58ccf3c51984479b2dcc96de2632e647d5119 extends Twig_Template
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
        $__internal_47f2101be56ccb8f5ed86a2b8c866c923796066db62ae7f13dec246d2117bf27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47f2101be56ccb8f5ed86a2b8c866c923796066db62ae7f13dec246d2117bf27->enter($__internal_47f2101be56ccb8f5ed86a2b8c866c923796066db62ae7f13dec246d2117bf27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_a646a050c7ec445dfeeb9f78184845b189ef0fe3b7a5a93ac9063bdcd3e77780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a646a050c7ec445dfeeb9f78184845b189ef0fe3b7a5a93ac9063bdcd3e77780->enter($__internal_a646a050c7ec445dfeeb9f78184845b189ef0fe3b7a5a93ac9063bdcd3e77780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_47f2101be56ccb8f5ed86a2b8c866c923796066db62ae7f13dec246d2117bf27->leave($__internal_47f2101be56ccb8f5ed86a2b8c866c923796066db62ae7f13dec246d2117bf27_prof);

        
        $__internal_a646a050c7ec445dfeeb9f78184845b189ef0fe3b7a5a93ac9063bdcd3e77780->leave($__internal_a646a050c7ec445dfeeb9f78184845b189ef0fe3b7a5a93ac9063bdcd3e77780_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
