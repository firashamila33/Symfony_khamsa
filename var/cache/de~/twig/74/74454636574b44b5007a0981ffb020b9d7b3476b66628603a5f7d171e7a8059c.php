<?php

/* @FrontEnd/Covoiturage/CovoiturageAccueil.html.twig */
class __TwigTemplate_07e7404ec353dd7deb04086a1db620239803f25363494745cc288a76ead4df39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontEndBundle::Layout.html.twig", "@FrontEnd/Covoiturage/CovoiturageAccueil.html.twig", 1);
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
        $__internal_787f3a3b88ca2169edde29d1b2bd5c064be2b93ab0628f12c5fb4ae70fe8d6a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_787f3a3b88ca2169edde29d1b2bd5c064be2b93ab0628f12c5fb4ae70fe8d6a4->enter($__internal_787f3a3b88ca2169edde29d1b2bd5c064be2b93ab0628f12c5fb4ae70fe8d6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FrontEnd/Covoiturage/CovoiturageAccueil.html.twig"));

        $__internal_4243236d6d34377565464b6d8b217ce13b7a2f6daf9aeb7e9d659af27a342553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4243236d6d34377565464b6d8b217ce13b7a2f6daf9aeb7e9d659af27a342553->enter($__internal_4243236d6d34377565464b6d8b217ce13b7a2f6daf9aeb7e9d659af27a342553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FrontEnd/Covoiturage/CovoiturageAccueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_787f3a3b88ca2169edde29d1b2bd5c064be2b93ab0628f12c5fb4ae70fe8d6a4->leave($__internal_787f3a3b88ca2169edde29d1b2bd5c064be2b93ab0628f12c5fb4ae70fe8d6a4_prof);

        
        $__internal_4243236d6d34377565464b6d8b217ce13b7a2f6daf9aeb7e9d659af27a342553->leave($__internal_4243236d6d34377565464b6d8b217ce13b7a2f6daf9aeb7e9d659af27a342553_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5acaaa22792aa0ce3113e01ff4649be6d1e3408dc10ca3f76401da0bd02a9729 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5acaaa22792aa0ce3113e01ff4649be6d1e3408dc10ca3f76401da0bd02a9729->enter($__internal_5acaaa22792aa0ce3113e01ff4649be6d1e3408dc10ca3f76401da0bd02a9729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4d3afb8a5b6f32e5f0d2f6f63a092185c0dcec53c68b9dd1f2da5b6e3e1e8fa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d3afb8a5b6f32e5f0d2f6f63a092185c0dcec53c68b9dd1f2da5b6e3e1e8fa1->enter($__internal_4d3afb8a5b6f32e5f0d2f6f63a092185c0dcec53c68b9dd1f2da5b6e3e1e8fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <section id=\"slider\">
        <div class=\"static-banner relative\">
            <div class=\"overlay blue-overlay-5\"></div>
            <div class=\"page-head\">
                <h2 class=\"page-title\">Covoiturage</h2>
                <ul class=\"page-title-btn\">
                    <li><a href=\"http://www.codepixar.com/educare/php/01-home-university.php\" target=\"_blank\">Home <i
                                    class=\"fa fa-caret-right\" aria-hidden=\"true\"></i></a></li>
                    <li><a href=\"#\" class=\"active\">Department List</a></li>
                </ul>
            </div>
        </div>
    </section>
";
        
        $__internal_4d3afb8a5b6f32e5f0d2f6f63a092185c0dcec53c68b9dd1f2da5b6e3e1e8fa1->leave($__internal_4d3afb8a5b6f32e5f0d2f6f63a092185c0dcec53c68b9dd1f2da5b6e3e1e8fa1_prof);

        
        $__internal_5acaaa22792aa0ce3113e01ff4649be6d1e3408dc10ca3f76401da0bd02a9729->leave($__internal_5acaaa22792aa0ce3113e01ff4649be6d1e3408dc10ca3f76401da0bd02a9729_prof);

    }

    public function getTemplateName()
    {
        return "@FrontEnd/Covoiturage/CovoiturageAccueil.html.twig";
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
                <h2 class=\"page-title\">Covoiturage</h2>
                <ul class=\"page-title-btn\">
                    <li><a href=\"http://www.codepixar.com/educare/php/01-home-university.php\" target=\"_blank\">Home <i
                                    class=\"fa fa-caret-right\" aria-hidden=\"true\"></i></a></li>
                    <li><a href=\"#\" class=\"active\">Department List</a></li>
                </ul>
            </div>
        </div>
    </section>
{% endblock body %}", "@FrontEnd/Covoiturage/CovoiturageAccueil.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\src\\FrontEndBundle\\Resources\\views\\Covoiturage\\CovoiturageAccueil.html.twig");
    }
}
