<?php

/* FrontEndBundle:Revision:RevisionAccueil.html.twig */
class __TwigTemplate_7dbfe8932226e8ad22957da3e9054e004e784440133ae7c85df7cb333f3617ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontEndBundle::Layout.html.twig", "FrontEndBundle:Revision:RevisionAccueil.html.twig", 1);
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
        $__internal_54582a3565982336a6decd5f4b0d4a565bc06b04ca7183d88c5b2a1916e82b32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54582a3565982336a6decd5f4b0d4a565bc06b04ca7183d88c5b2a1916e82b32->enter($__internal_54582a3565982336a6decd5f4b0d4a565bc06b04ca7183d88c5b2a1916e82b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle:Revision:RevisionAccueil.html.twig"));

        $__internal_e8f0f43c2a7667727bb296d452cb369fc97b9c15dcd443858237473e15c9cca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8f0f43c2a7667727bb296d452cb369fc97b9c15dcd443858237473e15c9cca9->enter($__internal_e8f0f43c2a7667727bb296d452cb369fc97b9c15dcd443858237473e15c9cca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle:Revision:RevisionAccueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54582a3565982336a6decd5f4b0d4a565bc06b04ca7183d88c5b2a1916e82b32->leave($__internal_54582a3565982336a6decd5f4b0d4a565bc06b04ca7183d88c5b2a1916e82b32_prof);

        
        $__internal_e8f0f43c2a7667727bb296d452cb369fc97b9c15dcd443858237473e15c9cca9->leave($__internal_e8f0f43c2a7667727bb296d452cb369fc97b9c15dcd443858237473e15c9cca9_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5382fe65484370534f726fc146d354d479a3ae4ffc830f72d84785a330ef7f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5382fe65484370534f726fc146d354d479a3ae4ffc830f72d84785a330ef7f9->enter($__internal_a5382fe65484370534f726fc146d354d479a3ae4ffc830f72d84785a330ef7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_754e45e4f95d7511075cb5f2b032fa043780393f0b92af314c7d2798327c7003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_754e45e4f95d7511075cb5f2b032fa043780393f0b92af314c7d2798327c7003->enter($__internal_754e45e4f95d7511075cb5f2b032fa043780393f0b92af314c7d2798327c7003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <section id=\"slider\">
        <div class=\"static-banner relative\">
            <div class=\"overlay blue-overlay-5\"></div>
            <div class=\"page-head\">
                <h2 class=\"page-title\">Revision</h2>
                <ul class=\"page-title-btn\">
                    <li><a href=\"http://www.codepixar.com/educare/php/01-home-university.php\" target=\"_blank\">Home <i
                                    class=\"fa fa-caret-right\" aria-hidden=\"true\"></i></a></li>
                    <li><a href=\"#\" class=\"active\">Department List</a></li>
                    </ul>
            </div>
        </div>
    </section>

";
        
        $__internal_754e45e4f95d7511075cb5f2b032fa043780393f0b92af314c7d2798327c7003->leave($__internal_754e45e4f95d7511075cb5f2b032fa043780393f0b92af314c7d2798327c7003_prof);

        
        $__internal_a5382fe65484370534f726fc146d354d479a3ae4ffc830f72d84785a330ef7f9->leave($__internal_a5382fe65484370534f726fc146d354d479a3ae4ffc830f72d84785a330ef7f9_prof);

    }

    public function getTemplateName()
    {
        return "FrontEndBundle:Revision:RevisionAccueil.html.twig";
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
                <h2 class=\"page-title\">Revision</h2>
                <ul class=\"page-title-btn\">
                    <li><a href=\"http://www.codepixar.com/educare/php/01-home-university.php\" target=\"_blank\">Home <i
                                    class=\"fa fa-caret-right\" aria-hidden=\"true\"></i></a></li>
                    <li><a href=\"#\" class=\"active\">Department List</a></li>
                    </ul>
            </div>
        </div>
    </section>

{% endblock body %}", "FrontEndBundle:Revision:RevisionAccueil.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\src\\FrontEndBundle/Resources/views/Revision/RevisionAccueil.html.twig");
    }
}
