<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_4c49cfaeb0c54cb0ff97be6e3f692d0d77ac4f3fac6b612073f9f4f8f2877851 extends Twig_Template
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
        $__internal_fb2445242fac2bb68dee94b441a43ed8a135f19f2d045a0668a825221829a6a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb2445242fac2bb68dee94b441a43ed8a135f19f2d045a0668a825221829a6a9->enter($__internal_fb2445242fac2bb68dee94b441a43ed8a135f19f2d045a0668a825221829a6a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_4859ea334e4f6616510162db2f13f27215c868fa4b67d98084bedf1e807872ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4859ea334e4f6616510162db2f13f27215c868fa4b67d98084bedf1e807872ca->enter($__internal_4859ea334e4f6616510162db2f13f27215c868fa4b67d98084bedf1e807872ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_fb2445242fac2bb68dee94b441a43ed8a135f19f2d045a0668a825221829a6a9->leave($__internal_fb2445242fac2bb68dee94b441a43ed8a135f19f2d045a0668a825221829a6a9_prof);

        
        $__internal_4859ea334e4f6616510162db2f13f27215c868fa4b67d98084bedf1e807872ca->leave($__internal_4859ea334e4f6616510162db2f13f27215c868fa4b67d98084bedf1e807872ca_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
