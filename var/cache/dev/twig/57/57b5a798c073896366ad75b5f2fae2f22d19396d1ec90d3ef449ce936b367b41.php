<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_53a55c7ca5522bf4abd09b6dd49c854a2bc9fd750f4a47021b9ac04d4696f4da extends Twig_Template
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
        $__internal_1a44a8b1bfd6ff9d6b0ce0bfa7b2ca25e596e40997083936890717ba20ab4f13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a44a8b1bfd6ff9d6b0ce0bfa7b2ca25e596e40997083936890717ba20ab4f13->enter($__internal_1a44a8b1bfd6ff9d6b0ce0bfa7b2ca25e596e40997083936890717ba20ab4f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_3df65203e0467e46ee750c1cba16dd6c3a8daf98474b3fedd7d70761034a9079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3df65203e0467e46ee750c1cba16dd6c3a8daf98474b3fedd7d70761034a9079->enter($__internal_3df65203e0467e46ee750c1cba16dd6c3a8daf98474b3fedd7d70761034a9079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_1a44a8b1bfd6ff9d6b0ce0bfa7b2ca25e596e40997083936890717ba20ab4f13->leave($__internal_1a44a8b1bfd6ff9d6b0ce0bfa7b2ca25e596e40997083936890717ba20ab4f13_prof);

        
        $__internal_3df65203e0467e46ee750c1cba16dd6c3a8daf98474b3fedd7d70761034a9079->leave($__internal_3df65203e0467e46ee750c1cba16dd6c3a8daf98474b3fedd7d70761034a9079_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.atom.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
