<?php

/* FrontEndBundle:Covoiturage:CovoiturageAccueil.html.twig */
class __TwigTemplate_959fa543f13b1632f96653805690704194028338daf254874579328cf0d8f537 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontEndBundle::Layout.html.twig", "FrontEndBundle:Covoiturage:CovoiturageAccueil.html.twig", 1);
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
        $__internal_1afcbbb64bec3d85a349a169f0fcaf7d8490fd705b404e1e26f838b1e95596e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1afcbbb64bec3d85a349a169f0fcaf7d8490fd705b404e1e26f838b1e95596e6->enter($__internal_1afcbbb64bec3d85a349a169f0fcaf7d8490fd705b404e1e26f838b1e95596e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle:Covoiturage:CovoiturageAccueil.html.twig"));

        $__internal_81cd36aba35d617292526c95100a1e6bb7ebd4d050891fbd9d7e2cbd45f09cf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81cd36aba35d617292526c95100a1e6bb7ebd4d050891fbd9d7e2cbd45f09cf1->enter($__internal_81cd36aba35d617292526c95100a1e6bb7ebd4d050891fbd9d7e2cbd45f09cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle:Covoiturage:CovoiturageAccueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1afcbbb64bec3d85a349a169f0fcaf7d8490fd705b404e1e26f838b1e95596e6->leave($__internal_1afcbbb64bec3d85a349a169f0fcaf7d8490fd705b404e1e26f838b1e95596e6_prof);

        
        $__internal_81cd36aba35d617292526c95100a1e6bb7ebd4d050891fbd9d7e2cbd45f09cf1->leave($__internal_81cd36aba35d617292526c95100a1e6bb7ebd4d050891fbd9d7e2cbd45f09cf1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_02988812fe82b2d908ed98fd254a70087a4c16bdda41df7586127c419eb29c38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02988812fe82b2d908ed98fd254a70087a4c16bdda41df7586127c419eb29c38->enter($__internal_02988812fe82b2d908ed98fd254a70087a4c16bdda41df7586127c419eb29c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_65df73a742c9049b0b69e545225a76120bb031887323088df608a3c7458154e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65df73a742c9049b0b69e545225a76120bb031887323088df608a3c7458154e8->enter($__internal_65df73a742c9049b0b69e545225a76120bb031887323088df608a3c7458154e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_65df73a742c9049b0b69e545225a76120bb031887323088df608a3c7458154e8->leave($__internal_65df73a742c9049b0b69e545225a76120bb031887323088df608a3c7458154e8_prof);

        
        $__internal_02988812fe82b2d908ed98fd254a70087a4c16bdda41df7586127c419eb29c38->leave($__internal_02988812fe82b2d908ed98fd254a70087a4c16bdda41df7586127c419eb29c38_prof);

    }

    public function getTemplateName()
    {
        return "FrontEndBundle:Covoiturage:CovoiturageAccueil.html.twig";
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
{% endblock body %}", "FrontEndBundle:Covoiturage:CovoiturageAccueil.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\src\\FrontEndBundle/Resources/views/Covoiturage/CovoiturageAccueil.html.twig");
    }
}
