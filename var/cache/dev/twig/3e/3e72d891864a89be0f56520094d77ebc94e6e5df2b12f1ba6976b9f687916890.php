<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_aaa34d3d7f2b5ea46cd1764a65caded6bc6da90650b4e3a07c56ccc75b722a0a extends Twig_Template
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
        $__internal_f0159e21870694669cce9eaa15bc2b11df060698054b2f85c666492eaaf08333 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0159e21870694669cce9eaa15bc2b11df060698054b2f85c666492eaaf08333->enter($__internal_f0159e21870694669cce9eaa15bc2b11df060698054b2f85c666492eaaf08333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_6008eadae9dc066063c433afb538b3232b0d0ba489073728418130f0719d023e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6008eadae9dc066063c433afb538b3232b0d0ba489073728418130f0719d023e->enter($__internal_6008eadae9dc066063c433afb538b3232b0d0ba489073728418130f0719d023e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_f0159e21870694669cce9eaa15bc2b11df060698054b2f85c666492eaaf08333->leave($__internal_f0159e21870694669cce9eaa15bc2b11df060698054b2f85c666492eaaf08333_prof);

        
        $__internal_6008eadae9dc066063c433afb538b3232b0d0ba489073728418130f0719d023e->leave($__internal_6008eadae9dc066063c433afb538b3232b0d0ba489073728418130f0719d023e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
", "TwigBundle:Exception:error.xml.twig", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
