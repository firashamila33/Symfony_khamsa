<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_b15a4b18093489f93ef5b5489dc95aeaaac7a8caddac7c1f45fd948b8772eb99 extends Twig_Template
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
        $__internal_1c26f2317acffb2b94858242f104276430e87275c4a937aacbba50af89226221 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c26f2317acffb2b94858242f104276430e87275c4a937aacbba50af89226221->enter($__internal_1c26f2317acffb2b94858242f104276430e87275c4a937aacbba50af89226221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_80256cfadafeb96de7598f038abea6eef839baa70fa92d1b12faa15bc9c0a6ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80256cfadafeb96de7598f038abea6eef839baa70fa92d1b12faa15bc9c0a6ae->enter($__internal_80256cfadafeb96de7598f038abea6eef839baa70fa92d1b12faa15bc9c0a6ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1c26f2317acffb2b94858242f104276430e87275c4a937aacbba50af89226221->leave($__internal_1c26f2317acffb2b94858242f104276430e87275c4a937aacbba50af89226221_prof);

        
        $__internal_80256cfadafeb96de7598f038abea6eef839baa70fa92d1b12faa15bc9c0a6ae->leave($__internal_80256cfadafeb96de7598f038abea6eef839baa70fa92d1b12faa15bc9c0a6ae_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
