<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_69d3d4bb314848cf2bb55b0c71e9482f6090eb4334c61e9b3679b2137b1d8626 extends Twig_Template
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
        $__internal_83d4a7563089a5cf17f6ca379b1fe6fdae394306a704229c808d00a08a4befde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83d4a7563089a5cf17f6ca379b1fe6fdae394306a704229c808d00a08a4befde->enter($__internal_83d4a7563089a5cf17f6ca379b1fe6fdae394306a704229c808d00a08a4befde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_2ff24842567f3595cd8589820463dca1b658faee8be820f57ace2e73d925e0a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ff24842567f3595cd8589820463dca1b658faee8be820f57ace2e73d925e0a3->enter($__internal_2ff24842567f3595cd8589820463dca1b658faee8be820f57ace2e73d925e0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_83d4a7563089a5cf17f6ca379b1fe6fdae394306a704229c808d00a08a4befde->leave($__internal_83d4a7563089a5cf17f6ca379b1fe6fdae394306a704229c808d00a08a4befde_prof);

        
        $__internal_2ff24842567f3595cd8589820463dca1b658faee8be820f57ace2e73d925e0a3->leave($__internal_2ff24842567f3595cd8589820463dca1b658faee8be820f57ace2e73d925e0a3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
