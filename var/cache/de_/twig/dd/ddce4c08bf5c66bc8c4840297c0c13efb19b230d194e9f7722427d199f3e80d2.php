<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_5cf1447763e54eef7368a7702d1f895604bd6a2243311ae948c00b8a067a550c extends Twig_Template
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
        $__internal_cb068e5ecbe56c715838fe4fed11ddeb79664f2e0d8cb759aa357e7d191e7cd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb068e5ecbe56c715838fe4fed11ddeb79664f2e0d8cb759aa357e7d191e7cd0->enter($__internal_cb068e5ecbe56c715838fe4fed11ddeb79664f2e0d8cb759aa357e7d191e7cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_2fd1d1c309167e7251419c6a79a501561a5eff958ac681d89be87c268fed62ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fd1d1c309167e7251419c6a79a501561a5eff958ac681d89be87c268fed62ff->enter($__internal_2fd1d1c309167e7251419c6a79a501561a5eff958ac681d89be87c268fed62ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_cb068e5ecbe56c715838fe4fed11ddeb79664f2e0d8cb759aa357e7d191e7cd0->leave($__internal_cb068e5ecbe56c715838fe4fed11ddeb79664f2e0d8cb759aa357e7d191e7cd0_prof);

        
        $__internal_2fd1d1c309167e7251419c6a79a501561a5eff958ac681d89be87c268fed62ff->leave($__internal_2fd1d1c309167e7251419c6a79a501561a5eff958ac681d89be87c268fed62ff_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
