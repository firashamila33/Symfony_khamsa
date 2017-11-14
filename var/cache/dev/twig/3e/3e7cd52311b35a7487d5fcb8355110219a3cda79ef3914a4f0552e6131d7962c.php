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
        $__internal_d2c1a0c17f0a2ce05d3e0a8e91ebd650d8fded8e9b4eb6a3d10cf676de08b890 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2c1a0c17f0a2ce05d3e0a8e91ebd650d8fded8e9b4eb6a3d10cf676de08b890->enter($__internal_d2c1a0c17f0a2ce05d3e0a8e91ebd650d8fded8e9b4eb6a3d10cf676de08b890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_b2e5411586be8c47628e0ee50703e183d59b086a07db0106a1471307b4293ae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2e5411586be8c47628e0ee50703e183d59b086a07db0106a1471307b4293ae9->enter($__internal_b2e5411586be8c47628e0ee50703e183d59b086a07db0106a1471307b4293ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_d2c1a0c17f0a2ce05d3e0a8e91ebd650d8fded8e9b4eb6a3d10cf676de08b890->leave($__internal_d2c1a0c17f0a2ce05d3e0a8e91ebd650d8fded8e9b4eb6a3d10cf676de08b890_prof);

        
        $__internal_b2e5411586be8c47628e0ee50703e183d59b086a07db0106a1471307b4293ae9->leave($__internal_b2e5411586be8c47628e0ee50703e183d59b086a07db0106a1471307b4293ae9_prof);

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
