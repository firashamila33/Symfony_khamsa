<?php

/* @FrontEnd/Club/ClubAccueil.html.twig */
class __TwigTemplate_c5bbbb6f4fa2692337a537cea5e2a97fa123cbd91379e2bf6affce624c8593f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontEndBundle::Layout.html.twig", "@FrontEnd/Club/ClubAccueil.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontEndBundle::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_450862fb73dc7f266cda570dbd11383b12e85a8a2e2fda3ba571a53b5b407bc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_450862fb73dc7f266cda570dbd11383b12e85a8a2e2fda3ba571a53b5b407bc9->enter($__internal_450862fb73dc7f266cda570dbd11383b12e85a8a2e2fda3ba571a53b5b407bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FrontEnd/Club/ClubAccueil.html.twig"));

        $__internal_29fae7355686f2a0af5603cce272ceeb900f1e27f11b26d688f702622ad0e80a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29fae7355686f2a0af5603cce272ceeb900f1e27f11b26d688f702622ad0e80a->enter($__internal_29fae7355686f2a0af5603cce272ceeb900f1e27f11b26d688f702622ad0e80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FrontEnd/Club/ClubAccueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_450862fb73dc7f266cda570dbd11383b12e85a8a2e2fda3ba571a53b5b407bc9->leave($__internal_450862fb73dc7f266cda570dbd11383b12e85a8a2e2fda3ba571a53b5b407bc9_prof);

        
        $__internal_29fae7355686f2a0af5603cce272ceeb900f1e27f11b26d688f702622ad0e80a->leave($__internal_29fae7355686f2a0af5603cce272ceeb900f1e27f11b26d688f702622ad0e80a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a9949c9d229e5e651cc7eae126dc7b2cf3710f9c8bc8900ba8f315ce8fd04d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a9949c9d229e5e651cc7eae126dc7b2cf3710f9c8bc8900ba8f315ce8fd04d3->enter($__internal_6a9949c9d229e5e651cc7eae126dc7b2cf3710f9c8bc8900ba8f315ce8fd04d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e4d7bcec6c3fbadc18dbce65903a40b84e09cb50d831d649dcf678febbb9e16f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4d7bcec6c3fbadc18dbce65903a40b84e09cb50d831d649dcf678febbb9e16f->enter($__internal_e4d7bcec6c3fbadc18dbce65903a40b84e09cb50d831d649dcf678febbb9e16f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <section id=\"slider\">
        <div class=\"static-banner relative\">
            <div class=\"overlay blue-overlay-5\"></div>
            <div class=\"page-head\">
                <h2 class=\"page-title\">Clubs</h2>
                <ul class=\"page-title-btn\">
                    <li><a href=\"http://www.codepixar.com/educare/php/01-home-university.php\" target=\"_blank\">Home <i
                                    class=\"fa fa-caret-right\" aria-hidden=\"true\"></i></a></li>
                    <li><a href=\"#\" class=\"active\">Department List</a></li>
                    </ul>
            </div>
        </div>
    </section>
";
        
        $__internal_e4d7bcec6c3fbadc18dbce65903a40b84e09cb50d831d649dcf678febbb9e16f->leave($__internal_e4d7bcec6c3fbadc18dbce65903a40b84e09cb50d831d649dcf678febbb9e16f_prof);

        
        $__internal_6a9949c9d229e5e651cc7eae126dc7b2cf3710f9c8bc8900ba8f315ce8fd04d3->leave($__internal_6a9949c9d229e5e651cc7eae126dc7b2cf3710f9c8bc8900ba8f315ce8fd04d3_prof);

    }

    public function getTemplateName()
    {
        return "@FrontEnd/Club/ClubAccueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontEndBundle::Layout.html.twig' %}
{% block body %}
    <section id=\"slider\">
        <div class=\"static-banner relative\">
            <div class=\"overlay blue-overlay-5\"></div>
            <div class=\"page-head\">
                <h2 class=\"page-title\">Clubs</h2>
                <ul class=\"page-title-btn\">
                    <li><a href=\"http://www.codepixar.com/educare/php/01-home-university.php\" target=\"_blank\">Home <i
                                    class=\"fa fa-caret-right\" aria-hidden=\"true\"></i></a></li>
                    <li><a href=\"#\" class=\"active\">Department List</a></li>
                    </ul>
            </div>
        </div>
    </section>
{% endblock body %}", "@FrontEnd/Club/ClubAccueil.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\src\\FrontEndBundle\\Resources\\views\\Club\\ClubAccueil.html.twig");
    }
}
