<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_bfa36833775da565f1c8a749e319c7e3e020b8002481df49635654db169e55c2 extends Twig_Template
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
        $__internal_feb384e558018405d71d7256819b79ac6796846a147d12efc533d6d536856697 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feb384e558018405d71d7256819b79ac6796846a147d12efc533d6d536856697->enter($__internal_feb384e558018405d71d7256819b79ac6796846a147d12efc533d6d536856697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_94e1fa66735b14d3b0efe7677d3cbc6bbd3fd41c18a1f1f2cef3aadb7902b121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94e1fa66735b14d3b0efe7677d3cbc6bbd3fd41c18a1f1f2cef3aadb7902b121->enter($__internal_94e1fa66735b14d3b0efe7677d3cbc6bbd3fd41c18a1f1f2cef3aadb7902b121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_feb384e558018405d71d7256819b79ac6796846a147d12efc533d6d536856697->leave($__internal_feb384e558018405d71d7256819b79ac6796846a147d12efc533d6d536856697_prof);

        
        $__internal_94e1fa66735b14d3b0efe7677d3cbc6bbd3fd41c18a1f1f2cef3aadb7902b121->leave($__internal_94e1fa66735b14d3b0efe7677d3cbc6bbd3fd41c18a1f1f2cef3aadb7902b121_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
