<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_12f06f10cd8806023a396bfe6c1a2a765007c5ca63b85cceacf899111fca79c7 extends Twig_Template
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
        $__internal_bcc8fe81a8a33fe3a591b0ed72e740b20884842587f4bd680b5e68d85610acc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcc8fe81a8a33fe3a591b0ed72e740b20884842587f4bd680b5e68d85610acc8->enter($__internal_bcc8fe81a8a33fe3a591b0ed72e740b20884842587f4bd680b5e68d85610acc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_26487021848d494c9ff692a45889495e6eb36f4c9b86f2f39b0eca27e2316ab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26487021848d494c9ff692a45889495e6eb36f4c9b86f2f39b0eca27e2316ab4->enter($__internal_26487021848d494c9ff692a45889495e6eb36f4c9b86f2f39b0eca27e2316ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_bcc8fe81a8a33fe3a591b0ed72e740b20884842587f4bd680b5e68d85610acc8->leave($__internal_bcc8fe81a8a33fe3a591b0ed72e740b20884842587f4bd680b5e68d85610acc8_prof);

        
        $__internal_26487021848d494c9ff692a45889495e6eb36f4c9b86f2f39b0eca27e2316ab4->leave($__internal_26487021848d494c9ff692a45889495e6eb36f4c9b86f2f39b0eca27e2316ab4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
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
", "@Twig/Exception/error.txt.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
