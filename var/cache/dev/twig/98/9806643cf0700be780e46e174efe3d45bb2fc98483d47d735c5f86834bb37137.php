<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_9817adcee8124632c7ae189b642461f4562c3e723355dafa544d063448a7a25c extends Twig_Template
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
        $__internal_97f283e60d5295d819d3b33c7b45cf6d950120a4f1f4e2852c415d0f07667b96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97f283e60d5295d819d3b33c7b45cf6d950120a4f1f4e2852c415d0f07667b96->enter($__internal_97f283e60d5295d819d3b33c7b45cf6d950120a4f1f4e2852c415d0f07667b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_ed12e65c1bb3c1d7fb47e7c2c8ccbf2992bc226ebc8d92fbdb9a652f3417daa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed12e65c1bb3c1d7fb47e7c2c8ccbf2992bc226ebc8d92fbdb9a652f3417daa5->enter($__internal_ed12e65c1bb3c1d7fb47e7c2c8ccbf2992bc226ebc8d92fbdb9a652f3417daa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_97f283e60d5295d819d3b33c7b45cf6d950120a4f1f4e2852c415d0f07667b96->leave($__internal_97f283e60d5295d819d3b33c7b45cf6d950120a4f1f4e2852c415d0f07667b96_prof);

        
        $__internal_ed12e65c1bb3c1d7fb47e7c2c8ccbf2992bc226ebc8d92fbdb9a652f3417daa5->leave($__internal_ed12e65c1bb3c1d7fb47e7c2c8ccbf2992bc226ebc8d92fbdb9a652f3417daa5_prof);

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
", "TwigBundle:Exception:error.txt.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
