<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_5de5c24634830ac0e5e5ab43374ab022742071d383dc1cefb6be1be150fadf44 extends Twig_Template
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
        $__internal_7a8bfb498d7776eb116c5000382b66e2621be73e5f9c2376f634447fb9ff37c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a8bfb498d7776eb116c5000382b66e2621be73e5f9c2376f634447fb9ff37c1->enter($__internal_7a8bfb498d7776eb116c5000382b66e2621be73e5f9c2376f634447fb9ff37c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_6cbeacc4e38a0825f3ab9e071d1ac6426ccf4c8562765046cb21c3d24714f723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cbeacc4e38a0825f3ab9e071d1ac6426ccf4c8562765046cb21c3d24714f723->enter($__internal_6cbeacc4e38a0825f3ab9e071d1ac6426ccf4c8562765046cb21c3d24714f723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_7a8bfb498d7776eb116c5000382b66e2621be73e5f9c2376f634447fb9ff37c1->leave($__internal_7a8bfb498d7776eb116c5000382b66e2621be73e5f9c2376f634447fb9ff37c1_prof);

        
        $__internal_6cbeacc4e38a0825f3ab9e071d1ac6426ccf4c8562765046cb21c3d24714f723->leave($__internal_6cbeacc4e38a0825f3ab9e071d1ac6426ccf4c8562765046cb21c3d24714f723_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
