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
        $__internal_eff3a802e260909e0c6cc72601fe4627d8ec089d083a3f9fd0b9d2803268b410 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eff3a802e260909e0c6cc72601fe4627d8ec089d083a3f9fd0b9d2803268b410->enter($__internal_eff3a802e260909e0c6cc72601fe4627d8ec089d083a3f9fd0b9d2803268b410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_dca08625939dddc5b3b02738500c6f7d8d49f04d77910f9e5fb75d4dedca2b08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dca08625939dddc5b3b02738500c6f7d8d49f04d77910f9e5fb75d4dedca2b08->enter($__internal_dca08625939dddc5b3b02738500c6f7d8d49f04d77910f9e5fb75d4dedca2b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_eff3a802e260909e0c6cc72601fe4627d8ec089d083a3f9fd0b9d2803268b410->leave($__internal_eff3a802e260909e0c6cc72601fe4627d8ec089d083a3f9fd0b9d2803268b410_prof);

        
        $__internal_dca08625939dddc5b3b02738500c6f7d8d49f04d77910f9e5fb75d4dedca2b08->leave($__internal_dca08625939dddc5b3b02738500c6f7d8d49f04d77910f9e5fb75d4dedca2b08_prof);

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
