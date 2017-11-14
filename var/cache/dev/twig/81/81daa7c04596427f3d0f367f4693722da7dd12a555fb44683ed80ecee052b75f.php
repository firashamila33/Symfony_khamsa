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
        $__internal_f6d88839738a09a093fe764d61e48cbfd737a80d8d9fc5e25bb6edeed11412ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6d88839738a09a093fe764d61e48cbfd737a80d8d9fc5e25bb6edeed11412ec->enter($__internal_f6d88839738a09a093fe764d61e48cbfd737a80d8d9fc5e25bb6edeed11412ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle:Revision:RevisionAccueil.html.twig"));

        $__internal_1f95ac882a4c7d3b9fa40c6178f7698ff5ac85f80e8202629b47e45f2abdc0e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f95ac882a4c7d3b9fa40c6178f7698ff5ac85f80e8202629b47e45f2abdc0e5->enter($__internal_1f95ac882a4c7d3b9fa40c6178f7698ff5ac85f80e8202629b47e45f2abdc0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle:Revision:RevisionAccueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6d88839738a09a093fe764d61e48cbfd737a80d8d9fc5e25bb6edeed11412ec->leave($__internal_f6d88839738a09a093fe764d61e48cbfd737a80d8d9fc5e25bb6edeed11412ec_prof);

        
        $__internal_1f95ac882a4c7d3b9fa40c6178f7698ff5ac85f80e8202629b47e45f2abdc0e5->leave($__internal_1f95ac882a4c7d3b9fa40c6178f7698ff5ac85f80e8202629b47e45f2abdc0e5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c51f5df61f94590d7394059c17ed092331680c84971f5348c2596562e28b025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c51f5df61f94590d7394059c17ed092331680c84971f5348c2596562e28b025->enter($__internal_8c51f5df61f94590d7394059c17ed092331680c84971f5348c2596562e28b025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_25d5710706546c9d5d118e31af30c346cde2c14b983319d2c651e89bd8769214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25d5710706546c9d5d118e31af30c346cde2c14b983319d2c651e89bd8769214->enter($__internal_25d5710706546c9d5d118e31af30c346cde2c14b983319d2c651e89bd8769214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_25d5710706546c9d5d118e31af30c346cde2c14b983319d2c651e89bd8769214->leave($__internal_25d5710706546c9d5d118e31af30c346cde2c14b983319d2c651e89bd8769214_prof);

        
        $__internal_8c51f5df61f94590d7394059c17ed092331680c84971f5348c2596562e28b025->leave($__internal_8c51f5df61f94590d7394059c17ed092331680c84971f5348c2596562e28b025_prof);

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
