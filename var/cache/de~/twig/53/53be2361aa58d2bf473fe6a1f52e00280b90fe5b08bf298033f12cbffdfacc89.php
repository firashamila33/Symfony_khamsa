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
        $__internal_5013d5a75382dee29f98404036149f398615490e8c9bed1bca2a0d83f5ba53d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5013d5a75382dee29f98404036149f398615490e8c9bed1bca2a0d83f5ba53d9->enter($__internal_5013d5a75382dee29f98404036149f398615490e8c9bed1bca2a0d83f5ba53d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_3eb69d434c8aaea9b831d6a0117860d628921d70d8577ee132d21413489712d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eb69d434c8aaea9b831d6a0117860d628921d70d8577ee132d21413489712d7->enter($__internal_3eb69d434c8aaea9b831d6a0117860d628921d70d8577ee132d21413489712d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_5013d5a75382dee29f98404036149f398615490e8c9bed1bca2a0d83f5ba53d9->leave($__internal_5013d5a75382dee29f98404036149f398615490e8c9bed1bca2a0d83f5ba53d9_prof);

        
        $__internal_3eb69d434c8aaea9b831d6a0117860d628921d70d8577ee132d21413489712d7->leave($__internal_3eb69d434c8aaea9b831d6a0117860d628921d70d8577ee132d21413489712d7_prof);

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
