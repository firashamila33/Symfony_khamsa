<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_4361b851bf368a2046cc025f44f1a1d5e5b35e2f8875e432035c048b26372455 extends Twig_Template
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
        $__internal_0bab86cd1da70f32e5ac0c428f821db8c06a48fb44b0748caea017123cfe6f9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bab86cd1da70f32e5ac0c428f821db8c06a48fb44b0748caea017123cfe6f9e->enter($__internal_0bab86cd1da70f32e5ac0c428f821db8c06a48fb44b0748caea017123cfe6f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_af12f32ddd3fd34d79a108d88bf3064b87fcd5bf0470ff615cb81db515f555f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af12f32ddd3fd34d79a108d88bf3064b87fcd5bf0470ff615cb81db515f555f1->enter($__internal_af12f32ddd3fd34d79a108d88bf3064b87fcd5bf0470ff615cb81db515f555f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_0bab86cd1da70f32e5ac0c428f821db8c06a48fb44b0748caea017123cfe6f9e->leave($__internal_0bab86cd1da70f32e5ac0c428f821db8c06a48fb44b0748caea017123cfe6f9e_prof);

        
        $__internal_af12f32ddd3fd34d79a108d88bf3064b87fcd5bf0470ff615cb81db515f555f1->leave($__internal_af12f32ddd3fd34d79a108d88bf3064b87fcd5bf0470ff615cb81db515f555f1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
", "@Twig/Exception/exception.json.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
