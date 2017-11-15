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
        $__internal_5f6ecfad077c0891f1b8bc5437769975ac718d341a45615146991a1e14d901b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f6ecfad077c0891f1b8bc5437769975ac718d341a45615146991a1e14d901b3->enter($__internal_5f6ecfad077c0891f1b8bc5437769975ac718d341a45615146991a1e14d901b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_ca41475705c22e2445e0155f6f35eeb7ebd0bd5d2c53bb9f91476b01b1789d2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca41475705c22e2445e0155f6f35eeb7ebd0bd5d2c53bb9f91476b01b1789d2b->enter($__internal_ca41475705c22e2445e0155f6f35eeb7ebd0bd5d2c53bb9f91476b01b1789d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_5f6ecfad077c0891f1b8bc5437769975ac718d341a45615146991a1e14d901b3->leave($__internal_5f6ecfad077c0891f1b8bc5437769975ac718d341a45615146991a1e14d901b3_prof);

        
        $__internal_ca41475705c22e2445e0155f6f35eeb7ebd0bd5d2c53bb9f91476b01b1789d2b->leave($__internal_ca41475705c22e2445e0155f6f35eeb7ebd0bd5d2c53bb9f91476b01b1789d2b_prof);

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
