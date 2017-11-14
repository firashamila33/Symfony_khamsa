<?php

/* FrontEndBundle:Covoiturage:CovoiturageAccueil.html.twig */
class __TwigTemplate_07e7404ec353dd7deb04086a1db620239803f25363494745cc288a76ead4df39 extends Twig_Template
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
        $__internal_425585bf097fe345a502ef7f4b394aac02904a4cd976196582ad412a621b6456 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_425585bf097fe345a502ef7f4b394aac02904a4cd976196582ad412a621b6456->enter($__internal_425585bf097fe345a502ef7f4b394aac02904a4cd976196582ad412a621b6456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle:Covoiturage:CovoiturageAccueil.html.twig"));

        $__internal_33e6ef85115e1a7e46cb66bb6b0d455e32a5f67e9ba21d167e2135cb77857680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33e6ef85115e1a7e46cb66bb6b0d455e32a5f67e9ba21d167e2135cb77857680->enter($__internal_33e6ef85115e1a7e46cb66bb6b0d455e32a5f67e9ba21d167e2135cb77857680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle:Covoiturage:CovoiturageAccueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_425585bf097fe345a502ef7f4b394aac02904a4cd976196582ad412a621b6456->leave($__internal_425585bf097fe345a502ef7f4b394aac02904a4cd976196582ad412a621b6456_prof);

        
        $__internal_33e6ef85115e1a7e46cb66bb6b0d455e32a5f67e9ba21d167e2135cb77857680->leave($__internal_33e6ef85115e1a7e46cb66bb6b0d455e32a5f67e9ba21d167e2135cb77857680_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b476525898bd90d6a1ca218a44fcac49d0be67c147598849904195148d903673 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b476525898bd90d6a1ca218a44fcac49d0be67c147598849904195148d903673->enter($__internal_b476525898bd90d6a1ca218a44fcac49d0be67c147598849904195148d903673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_047a09a3417c24df5b6d4eadf89d3f10bc4ad7cffc9aba6b04310f990fed37fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_047a09a3417c24df5b6d4eadf89d3f10bc4ad7cffc9aba6b04310f990fed37fd->enter($__internal_047a09a3417c24df5b6d4eadf89d3f10bc4ad7cffc9aba6b04310f990fed37fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_047a09a3417c24df5b6d4eadf89d3f10bc4ad7cffc9aba6b04310f990fed37fd->leave($__internal_047a09a3417c24df5b6d4eadf89d3f10bc4ad7cffc9aba6b04310f990fed37fd_prof);

        
        $__internal_b476525898bd90d6a1ca218a44fcac49d0be67c147598849904195148d903673->leave($__internal_b476525898bd90d6a1ca218a44fcac49d0be67c147598849904195148d903673_prof);

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
{% endblock body %}", "FrontEndBundle:Covoiturage:CovoiturageAccueil.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\src\\FrontEndBundle\\Resources\\views\\Covoiturage\\CovoiturageAccueil.html.twig");
    }
}
