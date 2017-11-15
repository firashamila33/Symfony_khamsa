<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_9ff56f35a1ec9604345979c0f35e82c6bae08e353bf56f5bd978bc13f23a93e3 extends Twig_Template
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
        $__internal_3a8b8db2269d8c37789e97bb55912ab1012500ad19d1becb1a3fa74009f88543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a8b8db2269d8c37789e97bb55912ab1012500ad19d1becb1a3fa74009f88543->enter($__internal_3a8b8db2269d8c37789e97bb55912ab1012500ad19d1becb1a3fa74009f88543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_986b2f2d0f556af60f9b6822d00634220e0af33520d657e09afe98171097c041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_986b2f2d0f556af60f9b6822d00634220e0af33520d657e09afe98171097c041->enter($__internal_986b2f2d0f556af60f9b6822d00634220e0af33520d657e09afe98171097c041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_3a8b8db2269d8c37789e97bb55912ab1012500ad19d1becb1a3fa74009f88543->leave($__internal_3a8b8db2269d8c37789e97bb55912ab1012500ad19d1becb1a3fa74009f88543_prof);

        
        $__internal_986b2f2d0f556af60f9b6822d00634220e0af33520d657e09afe98171097c041->leave($__internal_986b2f2d0f556af60f9b6822d00634220e0af33520d657e09afe98171097c041_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
