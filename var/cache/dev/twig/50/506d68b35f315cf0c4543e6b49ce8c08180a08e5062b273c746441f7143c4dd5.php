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
        $__internal_d80393e3c893682b098f3f645d96cdc026471bf1550655f20e87305a8125ee6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d80393e3c893682b098f3f645d96cdc026471bf1550655f20e87305a8125ee6b->enter($__internal_d80393e3c893682b098f3f645d96cdc026471bf1550655f20e87305a8125ee6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_cdb3a596196f3c8b2de062ac89c0903b4560cac17b8ca02905cad319c2244bb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdb3a596196f3c8b2de062ac89c0903b4560cac17b8ca02905cad319c2244bb4->enter($__internal_cdb3a596196f3c8b2de062ac89c0903b4560cac17b8ca02905cad319c2244bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d80393e3c893682b098f3f645d96cdc026471bf1550655f20e87305a8125ee6b->leave($__internal_d80393e3c893682b098f3f645d96cdc026471bf1550655f20e87305a8125ee6b_prof);

        
        $__internal_cdb3a596196f3c8b2de062ac89c0903b4560cac17b8ca02905cad319c2244bb4->leave($__internal_cdb3a596196f3c8b2de062ac89c0903b4560cac17b8ca02905cad319c2244bb4_prof);

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
