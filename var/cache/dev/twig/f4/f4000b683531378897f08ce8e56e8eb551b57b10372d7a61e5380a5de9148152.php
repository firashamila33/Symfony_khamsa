<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_3d42a2410f1e70da457d127c27aba08059ae0ab6f371aa654f48e7919e870e63 extends Twig_Template
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
        $__internal_b21ee67f3505b50d98bc2261e3b5054d7bde4227d709ca7d0df78a9c743fda6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b21ee67f3505b50d98bc2261e3b5054d7bde4227d709ca7d0df78a9c743fda6a->enter($__internal_b21ee67f3505b50d98bc2261e3b5054d7bde4227d709ca7d0df78a9c743fda6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_06fe05fa819211d2fc586983407f3c5327ca781c8f0100a8a1df3abc7c01a398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06fe05fa819211d2fc586983407f3c5327ca781c8f0100a8a1df3abc7c01a398->enter($__internal_06fe05fa819211d2fc586983407f3c5327ca781c8f0100a8a1df3abc7c01a398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_b21ee67f3505b50d98bc2261e3b5054d7bde4227d709ca7d0df78a9c743fda6a->leave($__internal_b21ee67f3505b50d98bc2261e3b5054d7bde4227d709ca7d0df78a9c743fda6a_prof);

        
        $__internal_06fe05fa819211d2fc586983407f3c5327ca781c8f0100a8a1df3abc7c01a398->leave($__internal_06fe05fa819211d2fc586983407f3c5327ca781c8f0100a8a1df3abc7c01a398_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
