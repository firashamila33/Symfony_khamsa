<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_8a8eb7c2bcdd773ac03f8874bcaea5bc3e98355a6bd43c7207326d1182518e58 extends Twig_Template
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
        $__internal_450f174f1230932c7469827ec8a8db55437e3fa1c6677628efb0425c43c48573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_450f174f1230932c7469827ec8a8db55437e3fa1c6677628efb0425c43c48573->enter($__internal_450f174f1230932c7469827ec8a8db55437e3fa1c6677628efb0425c43c48573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_cbcb828de45941d8f0f8eb6a5771403056577e5e1829e7d6b761c2bd765b046c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbcb828de45941d8f0f8eb6a5771403056577e5e1829e7d6b761c2bd765b046c->enter($__internal_cbcb828de45941d8f0f8eb6a5771403056577e5e1829e7d6b761c2bd765b046c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_450f174f1230932c7469827ec8a8db55437e3fa1c6677628efb0425c43c48573->leave($__internal_450f174f1230932c7469827ec8a8db55437e3fa1c6677628efb0425c43c48573_prof);

        
        $__internal_cbcb828de45941d8f0f8eb6a5771403056577e5e1829e7d6b761c2bd765b046c->leave($__internal_cbcb828de45941d8f0f8eb6a5771403056577e5e1829e7d6b761c2bd765b046c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
