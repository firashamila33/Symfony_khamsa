<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_b8d7d15eeeabe3737c1780bb7b21aef51f576037a5deff14eb148286f360d5d3 extends Twig_Template
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
        $__internal_42780487eab1480e56142479a37ac7ed73278af987bf3f302841725f31789f00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42780487eab1480e56142479a37ac7ed73278af987bf3f302841725f31789f00->enter($__internal_42780487eab1480e56142479a37ac7ed73278af987bf3f302841725f31789f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_f1845e999dcb6711ae2e3c73321b3d11f1b48200911b37be4510b089fe31b141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1845e999dcb6711ae2e3c73321b3d11f1b48200911b37be4510b089fe31b141->enter($__internal_f1845e999dcb6711ae2e3c73321b3d11f1b48200911b37be4510b089fe31b141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_42780487eab1480e56142479a37ac7ed73278af987bf3f302841725f31789f00->leave($__internal_42780487eab1480e56142479a37ac7ed73278af987bf3f302841725f31789f00_prof);

        
        $__internal_f1845e999dcb6711ae2e3c73321b3d11f1b48200911b37be4510b089fe31b141->leave($__internal_f1845e999dcb6711ae2e3c73321b3d11f1b48200911b37be4510b089fe31b141_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
