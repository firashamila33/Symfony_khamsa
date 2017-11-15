<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_3d42a2410f1e70da457d127c27aba08059ae0ab6f371aa654f48e7919e870e63 extends Twig_Template
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
        $__internal_0a191e6a2e950d36f703c152194dc08d8aa735137c5a2812fbff47521e49ed0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a191e6a2e950d36f703c152194dc08d8aa735137c5a2812fbff47521e49ed0e->enter($__internal_0a191e6a2e950d36f703c152194dc08d8aa735137c5a2812fbff47521e49ed0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_378ac64f19ab84906b150a3937a2571c13f0cdefb36644d7d5d0be76e2dee346 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_378ac64f19ab84906b150a3937a2571c13f0cdefb36644d7d5d0be76e2dee346->enter($__internal_378ac64f19ab84906b150a3937a2571c13f0cdefb36644d7d5d0be76e2dee346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_0a191e6a2e950d36f703c152194dc08d8aa735137c5a2812fbff47521e49ed0e->leave($__internal_0a191e6a2e950d36f703c152194dc08d8aa735137c5a2812fbff47521e49ed0e_prof);

        
        $__internal_378ac64f19ab84906b150a3937a2571c13f0cdefb36644d7d5d0be76e2dee346->leave($__internal_378ac64f19ab84906b150a3937a2571c13f0cdefb36644d7d5d0be76e2dee346_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
