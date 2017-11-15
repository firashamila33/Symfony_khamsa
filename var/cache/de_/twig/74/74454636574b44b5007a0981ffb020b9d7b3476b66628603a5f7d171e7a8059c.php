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
        $__internal_1a0617b2b73990fa687a06cffbddf5034f24a93338f28a20de9475dce58cdf6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a0617b2b73990fa687a06cffbddf5034f24a93338f28a20de9475dce58cdf6e->enter($__internal_1a0617b2b73990fa687a06cffbddf5034f24a93338f28a20de9475dce58cdf6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FrontEnd/Covoiturage/CovoiturageAccueil.html.twig"));

        $__internal_489b99c88696f9fd6d7aded8af463a4ee54e51b54d5edd352badd8832c90eb13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_489b99c88696f9fd6d7aded8af463a4ee54e51b54d5edd352badd8832c90eb13->enter($__internal_489b99c88696f9fd6d7aded8af463a4ee54e51b54d5edd352badd8832c90eb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FrontEnd/Covoiturage/CovoiturageAccueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a0617b2b73990fa687a06cffbddf5034f24a93338f28a20de9475dce58cdf6e->leave($__internal_1a0617b2b73990fa687a06cffbddf5034f24a93338f28a20de9475dce58cdf6e_prof);

        
        $__internal_489b99c88696f9fd6d7aded8af463a4ee54e51b54d5edd352badd8832c90eb13->leave($__internal_489b99c88696f9fd6d7aded8af463a4ee54e51b54d5edd352badd8832c90eb13_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a7bd2ff2b1623533f14159004d6b952fd203137e550b6e943c654456b965d5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a7bd2ff2b1623533f14159004d6b952fd203137e550b6e943c654456b965d5a->enter($__internal_8a7bd2ff2b1623533f14159004d6b952fd203137e550b6e943c654456b965d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_753ba6643de5904284ee919a754917ec86732446d8b964ae956b37ad35c3759a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_753ba6643de5904284ee919a754917ec86732446d8b964ae956b37ad35c3759a->enter($__internal_753ba6643de5904284ee919a754917ec86732446d8b964ae956b37ad35c3759a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_753ba6643de5904284ee919a754917ec86732446d8b964ae956b37ad35c3759a->leave($__internal_753ba6643de5904284ee919a754917ec86732446d8b964ae956b37ad35c3759a_prof);

        
        $__internal_8a7bd2ff2b1623533f14159004d6b952fd203137e550b6e943c654456b965d5a->leave($__internal_8a7bd2ff2b1623533f14159004d6b952fd203137e550b6e943c654456b965d5a_prof);

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
