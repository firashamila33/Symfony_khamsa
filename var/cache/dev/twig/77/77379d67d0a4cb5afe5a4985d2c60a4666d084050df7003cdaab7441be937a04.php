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
        $__internal_b52a89ed3b138830b951b0987fa4007b6b88ed8c59451c8af9d5783ccf860c5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b52a89ed3b138830b951b0987fa4007b6b88ed8c59451c8af9d5783ccf860c5a->enter($__internal_b52a89ed3b138830b951b0987fa4007b6b88ed8c59451c8af9d5783ccf860c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_e987c3d9debe8267dc0207338b31c2f969f48cfd65c0e1fdcfc208ac97bbe1c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e987c3d9debe8267dc0207338b31c2f969f48cfd65c0e1fdcfc208ac97bbe1c2->enter($__internal_e987c3d9debe8267dc0207338b31c2f969f48cfd65c0e1fdcfc208ac97bbe1c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_b52a89ed3b138830b951b0987fa4007b6b88ed8c59451c8af9d5783ccf860c5a->leave($__internal_b52a89ed3b138830b951b0987fa4007b6b88ed8c59451c8af9d5783ccf860c5a_prof);

        
        $__internal_e987c3d9debe8267dc0207338b31c2f969f48cfd65c0e1fdcfc208ac97bbe1c2->leave($__internal_e987c3d9debe8267dc0207338b31c2f969f48cfd65c0e1fdcfc208ac97bbe1c2_prof);

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
