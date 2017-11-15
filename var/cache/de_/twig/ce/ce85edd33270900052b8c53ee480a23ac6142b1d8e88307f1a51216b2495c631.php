<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_cd9acc3b2c1a9e0615fdef25022d64007ae37d505b4a9652701380431352a10b extends Twig_Template
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
        $__internal_974964d373abc784bd4a1d31ae9c3b22667e9d2c3f9ba6591fc696042dce27b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_974964d373abc784bd4a1d31ae9c3b22667e9d2c3f9ba6591fc696042dce27b9->enter($__internal_974964d373abc784bd4a1d31ae9c3b22667e9d2c3f9ba6591fc696042dce27b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_edd35bb85ef2f9ed96f745d033253ea2b9202f3a2df523e9cb9f40279fb47d09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edd35bb85ef2f9ed96f745d033253ea2b9202f3a2df523e9cb9f40279fb47d09->enter($__internal_edd35bb85ef2f9ed96f745d033253ea2b9202f3a2df523e9cb9f40279fb47d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_974964d373abc784bd4a1d31ae9c3b22667e9d2c3f9ba6591fc696042dce27b9->leave($__internal_974964d373abc784bd4a1d31ae9c3b22667e9d2c3f9ba6591fc696042dce27b9_prof);

        
        $__internal_edd35bb85ef2f9ed96f745d033253ea2b9202f3a2df523e9cb9f40279fb47d09->leave($__internal_edd35bb85ef2f9ed96f745d033253ea2b9202f3a2df523e9cb9f40279fb47d09_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
