<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_3f5ed6a6dbd99de17e8b4e078da0a6b6e5119464262494a377dadb34c283d4d9 extends Twig_Template
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
        $__internal_1a8e23127693dbfcf7b3fb4f905bf6f9aa35c625e5ff64e0e88166a01cf73f30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a8e23127693dbfcf7b3fb4f905bf6f9aa35c625e5ff64e0e88166a01cf73f30->enter($__internal_1a8e23127693dbfcf7b3fb4f905bf6f9aa35c625e5ff64e0e88166a01cf73f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_2d678c0793dcdd0d928bbeadc992471f615cc8df883b2751240e60ea28145091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d678c0793dcdd0d928bbeadc992471f615cc8df883b2751240e60ea28145091->enter($__internal_2d678c0793dcdd0d928bbeadc992471f615cc8df883b2751240e60ea28145091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_1a8e23127693dbfcf7b3fb4f905bf6f9aa35c625e5ff64e0e88166a01cf73f30->leave($__internal_1a8e23127693dbfcf7b3fb4f905bf6f9aa35c625e5ff64e0e88166a01cf73f30_prof);

        
        $__internal_2d678c0793dcdd0d928bbeadc992471f615cc8df883b2751240e60ea28145091->leave($__internal_2d678c0793dcdd0d928bbeadc992471f615cc8df883b2751240e60ea28145091_prof);

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
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
