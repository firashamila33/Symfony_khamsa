<?php

/* @FrontEnd/Revision/RevisionAccueil.html.twig */
class __TwigTemplate_89d110f93507d6045ee7e1603abb9cc7361d4f8fabdb9535a0a8d194c60c9a8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontEndBundle::Layout.html.twig", "@FrontEnd/Revision/RevisionAccueil.html.twig", 1);
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
        $__internal_6305d3743110490cc64a5350cb4d09a4874c498d187004c4ad23147256cbcbcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6305d3743110490cc64a5350cb4d09a4874c498d187004c4ad23147256cbcbcc->enter($__internal_6305d3743110490cc64a5350cb4d09a4874c498d187004c4ad23147256cbcbcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FrontEnd/Revision/RevisionAccueil.html.twig"));

        $__internal_1966772c4967ed402314cfd76a9ca248a46eecb7796d0a0d6281a12aadf01dc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1966772c4967ed402314cfd76a9ca248a46eecb7796d0a0d6281a12aadf01dc0->enter($__internal_1966772c4967ed402314cfd76a9ca248a46eecb7796d0a0d6281a12aadf01dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FrontEnd/Revision/RevisionAccueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6305d3743110490cc64a5350cb4d09a4874c498d187004c4ad23147256cbcbcc->leave($__internal_6305d3743110490cc64a5350cb4d09a4874c498d187004c4ad23147256cbcbcc_prof);

        
        $__internal_1966772c4967ed402314cfd76a9ca248a46eecb7796d0a0d6281a12aadf01dc0->leave($__internal_1966772c4967ed402314cfd76a9ca248a46eecb7796d0a0d6281a12aadf01dc0_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c57354a059a4167afb01d2eea7f055e935448d93c81bf8389f109f8aa069578 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c57354a059a4167afb01d2eea7f055e935448d93c81bf8389f109f8aa069578->enter($__internal_5c57354a059a4167afb01d2eea7f055e935448d93c81bf8389f109f8aa069578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c648d29886904efeac35e1c70f5d2f5f8d7ec8a85c90a55961754d94ca296a40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c648d29886904efeac35e1c70f5d2f5f8d7ec8a85c90a55961754d94ca296a40->enter($__internal_c648d29886904efeac35e1c70f5d2f5f8d7ec8a85c90a55961754d94ca296a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c648d29886904efeac35e1c70f5d2f5f8d7ec8a85c90a55961754d94ca296a40->leave($__internal_c648d29886904efeac35e1c70f5d2f5f8d7ec8a85c90a55961754d94ca296a40_prof);

        
        $__internal_5c57354a059a4167afb01d2eea7f055e935448d93c81bf8389f109f8aa069578->leave($__internal_5c57354a059a4167afb01d2eea7f055e935448d93c81bf8389f109f8aa069578_prof);

    }

    public function getTemplateName()
    {
        return "@FrontEnd/Revision/RevisionAccueil.html.twig";
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

{% endblock body %}", "@FrontEnd/Revision/RevisionAccueil.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\src\\FrontEndBundle\\Resources\\views\\Revision\\RevisionAccueil.html.twig");
    }
}
