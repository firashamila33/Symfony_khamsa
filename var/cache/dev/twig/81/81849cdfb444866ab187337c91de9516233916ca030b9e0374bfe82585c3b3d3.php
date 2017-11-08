<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_9bd3ca6e50fcdc47d2a124d918008121fa01bd6736b8210c34afac8a1a7bc174 extends Twig_Template
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
        $__internal_a00d3fefbbf1daee8d073a63066547cf7cea005af8c0bd4497de2492c1c4f6eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a00d3fefbbf1daee8d073a63066547cf7cea005af8c0bd4497de2492c1c4f6eb->enter($__internal_a00d3fefbbf1daee8d073a63066547cf7cea005af8c0bd4497de2492c1c4f6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_3176cc6667ce4ede6045ca866c28d224e9cf76e53320c4d48550c62598eaaf0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3176cc6667ce4ede6045ca866c28d224e9cf76e53320c4d48550c62598eaaf0e->enter($__internal_3176cc6667ce4ede6045ca866c28d224e9cf76e53320c4d48550c62598eaaf0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_a00d3fefbbf1daee8d073a63066547cf7cea005af8c0bd4497de2492c1c4f6eb->leave($__internal_a00d3fefbbf1daee8d073a63066547cf7cea005af8c0bd4497de2492c1c4f6eb_prof);

        
        $__internal_3176cc6667ce4ede6045ca866c28d224e9cf76e53320c4d48550c62598eaaf0e->leave($__internal_3176cc6667ce4ede6045ca866c28d224e9cf76e53320c4d48550c62598eaaf0e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
