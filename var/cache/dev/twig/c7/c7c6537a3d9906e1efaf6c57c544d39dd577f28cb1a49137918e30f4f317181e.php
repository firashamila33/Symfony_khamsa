<?php

/* FrontEndBundle:Revision:RevisionAccueil.html.twig */
class __TwigTemplate_89d110f93507d6045ee7e1603abb9cc7361d4f8fabdb9535a0a8d194c60c9a8a extends Twig_Template
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
        $__internal_7dd6356615ff8dae8359972140cd55eb31784a7b7c04015c2d64352622a84edd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dd6356615ff8dae8359972140cd55eb31784a7b7c04015c2d64352622a84edd->enter($__internal_7dd6356615ff8dae8359972140cd55eb31784a7b7c04015c2d64352622a84edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle:Revision:RevisionAccueil.html.twig"));

        $__internal_d303fffc1a2939d30cf136b67cdaaceb57529fd5a036f79e3d4860a0b9ff63f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d303fffc1a2939d30cf136b67cdaaceb57529fd5a036f79e3d4860a0b9ff63f4->enter($__internal_d303fffc1a2939d30cf136b67cdaaceb57529fd5a036f79e3d4860a0b9ff63f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle:Revision:RevisionAccueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dd6356615ff8dae8359972140cd55eb31784a7b7c04015c2d64352622a84edd->leave($__internal_7dd6356615ff8dae8359972140cd55eb31784a7b7c04015c2d64352622a84edd_prof);

        
        $__internal_d303fffc1a2939d30cf136b67cdaaceb57529fd5a036f79e3d4860a0b9ff63f4->leave($__internal_d303fffc1a2939d30cf136b67cdaaceb57529fd5a036f79e3d4860a0b9ff63f4_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7a960aec15225f163f362fac87b0dc85e54f1ce1d6049882a55d403c019ad0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7a960aec15225f163f362fac87b0dc85e54f1ce1d6049882a55d403c019ad0a->enter($__internal_c7a960aec15225f163f362fac87b0dc85e54f1ce1d6049882a55d403c019ad0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_02aae40e5e10424aea517a3816cb07967a60ea8cee99ecd772e840ce9c601020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02aae40e5e10424aea517a3816cb07967a60ea8cee99ecd772e840ce9c601020->enter($__internal_02aae40e5e10424aea517a3816cb07967a60ea8cee99ecd772e840ce9c601020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_02aae40e5e10424aea517a3816cb07967a60ea8cee99ecd772e840ce9c601020->leave($__internal_02aae40e5e10424aea517a3816cb07967a60ea8cee99ecd772e840ce9c601020_prof);

        
        $__internal_c7a960aec15225f163f362fac87b0dc85e54f1ce1d6049882a55d403c019ad0a->leave($__internal_c7a960aec15225f163f362fac87b0dc85e54f1ce1d6049882a55d403c019ad0a_prof);

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
{% endblock body %}", "FrontEndBundle:Revision:RevisionAccueil.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\src\\FrontEndBundle\\Resources\\views\\Revision\\RevisionAccueil.html.twig");
    }
}
