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
        $__internal_b90023024d4296f71fbbeb3c05d7b2bd138db21651d2c9b1f7659c2823f702a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b90023024d4296f71fbbeb3c05d7b2bd138db21651d2c9b1f7659c2823f702a4->enter($__internal_b90023024d4296f71fbbeb3c05d7b2bd138db21651d2c9b1f7659c2823f702a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle:Covoiturage:CovoiturageAccueil.html.twig"));

        $__internal_03723e4186dcd807a6c639cac53bc3c57e7df537304601fac9bce54fa433c89b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03723e4186dcd807a6c639cac53bc3c57e7df537304601fac9bce54fa433c89b->enter($__internal_03723e4186dcd807a6c639cac53bc3c57e7df537304601fac9bce54fa433c89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle:Covoiturage:CovoiturageAccueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b90023024d4296f71fbbeb3c05d7b2bd138db21651d2c9b1f7659c2823f702a4->leave($__internal_b90023024d4296f71fbbeb3c05d7b2bd138db21651d2c9b1f7659c2823f702a4_prof);

        
        $__internal_03723e4186dcd807a6c639cac53bc3c57e7df537304601fac9bce54fa433c89b->leave($__internal_03723e4186dcd807a6c639cac53bc3c57e7df537304601fac9bce54fa433c89b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d03eb1d3f0cdba6a21c57e8553279dfeb01caeffe8c0a038716becc58e20649 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d03eb1d3f0cdba6a21c57e8553279dfeb01caeffe8c0a038716becc58e20649->enter($__internal_7d03eb1d3f0cdba6a21c57e8553279dfeb01caeffe8c0a038716becc58e20649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fe534004cbe6948a5e9ea37e2c1a82133aacd45fdd3600107ea97f3471698490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe534004cbe6948a5e9ea37e2c1a82133aacd45fdd3600107ea97f3471698490->enter($__internal_fe534004cbe6948a5e9ea37e2c1a82133aacd45fdd3600107ea97f3471698490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fe534004cbe6948a5e9ea37e2c1a82133aacd45fdd3600107ea97f3471698490->leave($__internal_fe534004cbe6948a5e9ea37e2c1a82133aacd45fdd3600107ea97f3471698490_prof);

        
        $__internal_7d03eb1d3f0cdba6a21c57e8553279dfeb01caeffe8c0a038716becc58e20649->leave($__internal_7d03eb1d3f0cdba6a21c57e8553279dfeb01caeffe8c0a038716becc58e20649_prof);

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
