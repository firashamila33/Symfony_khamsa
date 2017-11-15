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
        $__internal_44e679f0607d2debb26a6d2c707cb473836dc02472fc03a9b3c37f39e01c7800 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44e679f0607d2debb26a6d2c707cb473836dc02472fc03a9b3c37f39e01c7800->enter($__internal_44e679f0607d2debb26a6d2c707cb473836dc02472fc03a9b3c37f39e01c7800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_f009504548abcfc890dbb6a11dd886a43f94b57ce0a3ce2afc39f9cc919fbd18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f009504548abcfc890dbb6a11dd886a43f94b57ce0a3ce2afc39f9cc919fbd18->enter($__internal_f009504548abcfc890dbb6a11dd886a43f94b57ce0a3ce2afc39f9cc919fbd18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_44e679f0607d2debb26a6d2c707cb473836dc02472fc03a9b3c37f39e01c7800->leave($__internal_44e679f0607d2debb26a6d2c707cb473836dc02472fc03a9b3c37f39e01c7800_prof);

        
        $__internal_f009504548abcfc890dbb6a11dd886a43f94b57ce0a3ce2afc39f9cc919fbd18->leave($__internal_f009504548abcfc890dbb6a11dd886a43f94b57ce0a3ce2afc39f9cc919fbd18_prof);

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
