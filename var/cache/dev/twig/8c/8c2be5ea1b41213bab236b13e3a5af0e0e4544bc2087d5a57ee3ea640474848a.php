<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_cfe750af645384832acd2f463efc6670cd2fd90542fd1ec0820a78d7a77fa1c0 extends Twig_Template
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
        $__internal_0aa1e466dd4e4edbe8389ba1d6bb36a2f1345819f69403b19f0e36dd122a8a90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aa1e466dd4e4edbe8389ba1d6bb36a2f1345819f69403b19f0e36dd122a8a90->enter($__internal_0aa1e466dd4e4edbe8389ba1d6bb36a2f1345819f69403b19f0e36dd122a8a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_3abb9e3c3872706376311bef0c222a12189fce68df3e3b2fd229c5af2c19f932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3abb9e3c3872706376311bef0c222a12189fce68df3e3b2fd229c5af2c19f932->enter($__internal_3abb9e3c3872706376311bef0c222a12189fce68df3e3b2fd229c5af2c19f932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_0aa1e466dd4e4edbe8389ba1d6bb36a2f1345819f69403b19f0e36dd122a8a90->leave($__internal_0aa1e466dd4e4edbe8389ba1d6bb36a2f1345819f69403b19f0e36dd122a8a90_prof);

        
        $__internal_3abb9e3c3872706376311bef0c222a12189fce68df3e3b2fd229c5af2c19f932->leave($__internal_3abb9e3c3872706376311bef0c222a12189fce68df3e3b2fd229c5af2c19f932_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
