<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_9da967cdd6bb687839c203c40d7068d82cb1c1dbee68e4eb4d9334455e63d428 extends Twig_Template
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
        $__internal_897e64dd92757345b3d009a2baa9f7bd7a60e98c3125d6b90bbf3a4f8b1d7b6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_897e64dd92757345b3d009a2baa9f7bd7a60e98c3125d6b90bbf3a4f8b1d7b6a->enter($__internal_897e64dd92757345b3d009a2baa9f7bd7a60e98c3125d6b90bbf3a4f8b1d7b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_2480b05bdecbcc61773dab5b986b2ed6c0377cca1138459beda88fbf9c383f7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2480b05bdecbcc61773dab5b986b2ed6c0377cca1138459beda88fbf9c383f7d->enter($__internal_2480b05bdecbcc61773dab5b986b2ed6c0377cca1138459beda88fbf9c383f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_897e64dd92757345b3d009a2baa9f7bd7a60e98c3125d6b90bbf3a4f8b1d7b6a->leave($__internal_897e64dd92757345b3d009a2baa9f7bd7a60e98c3125d6b90bbf3a4f8b1d7b6a_prof);

        
        $__internal_2480b05bdecbcc61773dab5b986b2ed6c0377cca1138459beda88fbf9c383f7d->leave($__internal_2480b05bdecbcc61773dab5b986b2ed6c0377cca1138459beda88fbf9c383f7d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
