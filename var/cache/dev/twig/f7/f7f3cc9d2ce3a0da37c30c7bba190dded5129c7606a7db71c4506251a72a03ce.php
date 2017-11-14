<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_da0dc2f8deb66f22aca45086666854fb2f8e701afc420e24177b4cd08f54d7a0 extends Twig_Template
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
        $__internal_a90cfcc48fb097a3529c257e1342e8a92b02015d0a1832a4300a98201e2d8b62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a90cfcc48fb097a3529c257e1342e8a92b02015d0a1832a4300a98201e2d8b62->enter($__internal_a90cfcc48fb097a3529c257e1342e8a92b02015d0a1832a4300a98201e2d8b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_1e2e663119ead15e15e306c740fb00e7fa5d9d054b20443c56aa21cdf6ac763e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e2e663119ead15e15e306c740fb00e7fa5d9d054b20443c56aa21cdf6ac763e->enter($__internal_1e2e663119ead15e15e306c740fb00e7fa5d9d054b20443c56aa21cdf6ac763e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_a90cfcc48fb097a3529c257e1342e8a92b02015d0a1832a4300a98201e2d8b62->leave($__internal_a90cfcc48fb097a3529c257e1342e8a92b02015d0a1832a4300a98201e2d8b62_prof);

        
        $__internal_1e2e663119ead15e15e306c740fb00e7fa5d9d054b20443c56aa21cdf6ac763e->leave($__internal_1e2e663119ead15e15e306c740fb00e7fa5d9d054b20443c56aa21cdf6ac763e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
", "@Twig/Exception/error.json.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
