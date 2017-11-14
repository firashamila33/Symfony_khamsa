<?php

/* FrontEndBundle:Restaurent:RestaurentAccueil.html.twig */
class __TwigTemplate_619cde504dfd5bead88932aad2678fa2fa460beb3d1fe0725c516f4dce6c6b88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontEndBundle::Layout.html.twig", "FrontEndBundle:Restaurent:RestaurentAccueil.html.twig", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontEndBundle::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39807f7f036bf9ab660c85d14b20917a0f9bf08aa5a4a46af34c7d6dab45d456 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39807f7f036bf9ab660c85d14b20917a0f9bf08aa5a4a46af34c7d6dab45d456->enter($__internal_39807f7f036bf9ab660c85d14b20917a0f9bf08aa5a4a46af34c7d6dab45d456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle:Restaurent:RestaurentAccueil.html.twig"));

        $__internal_d43be6588931f4abe3eef57ce311da424c7a8f4d6c25fd7c4deb701ce681942f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d43be6588931f4abe3eef57ce311da424c7a8f4d6c25fd7c4deb701ce681942f->enter($__internal_d43be6588931f4abe3eef57ce311da424c7a8f4d6c25fd7c4deb701ce681942f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle:Restaurent:RestaurentAccueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39807f7f036bf9ab660c85d14b20917a0f9bf08aa5a4a46af34c7d6dab45d456->leave($__internal_39807f7f036bf9ab660c85d14b20917a0f9bf08aa5a4a46af34c7d6dab45d456_prof);

        
        $__internal_d43be6588931f4abe3eef57ce311da424c7a8f4d6c25fd7c4deb701ce681942f->leave($__internal_d43be6588931f4abe3eef57ce311da424c7a8f4d6c25fd7c4deb701ce681942f_prof);

    }

    // line 2
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_aa4f430defd1c37cd7b889907ddcf4ceaf891061bd6be9deebc08df34956dedc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa4f430defd1c37cd7b889907ddcf4ceaf891061bd6be9deebc08df34956dedc->enter($__internal_aa4f430defd1c37cd7b889907ddcf4ceaf891061bd6be9deebc08df34956dedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_cbea8c2d2838377c20ab00688370163afb0a332e88e5ddcdb8baefeaab498f9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbea8c2d2838377c20ab00688370163afb0a332e88e5ddcdb8baefeaab498f9a->enter($__internal_cbea8c2d2838377c20ab00688370163afb0a332e88e5ddcdb8baefeaab498f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 3
        echo "
 ";
        
        $__internal_cbea8c2d2838377c20ab00688370163afb0a332e88e5ddcdb8baefeaab498f9a->leave($__internal_cbea8c2d2838377c20ab00688370163afb0a332e88e5ddcdb8baefeaab498f9a_prof);

        
        $__internal_aa4f430defd1c37cd7b889907ddcf4ceaf891061bd6be9deebc08df34956dedc->leave($__internal_aa4f430defd1c37cd7b889907ddcf4ceaf891061bd6be9deebc08df34956dedc_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_92da897c493960b5f90751ce1941a99e84a641505c0a2cfffa2c1f67776f7ec3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92da897c493960b5f90751ce1941a99e84a641505c0a2cfffa2c1f67776f7ec3->enter($__internal_92da897c493960b5f90751ce1941a99e84a641505c0a2cfffa2c1f67776f7ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_da534a54f0f4710e1f6505b138ecd99cd701b887be35527cf9e8710bb4cefa7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da534a54f0f4710e1f6505b138ecd99cd701b887be35527cf9e8710bb4cefa7c->enter($__internal_da534a54f0f4710e1f6505b138ecd99cd701b887be35527cf9e8710bb4cefa7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <section id=\"slider\">
        <div class=\"static-banner relative\">
            <div class=\"overlay blue-overlay-5\"></div>
            <div class=\"page-head\">
                <h2 class=\"page-title\">Restaurent</h2>
                <ul class=\"page-title-btn\">
                    <li><a href=\"http://www.codepixar.com/educare/php/01-home-university.php\" target=\"_blank\">Home <i
                                    class=\"fa fa-caret-right\" aria-hidden=\"true\"></i></a></li>
                    <li><a href=\"#\" class=\"active\">Department List</a></li>
                </ul>
            </div>
        </div>
    </section>
";
        
        $__internal_da534a54f0f4710e1f6505b138ecd99cd701b887be35527cf9e8710bb4cefa7c->leave($__internal_da534a54f0f4710e1f6505b138ecd99cd701b887be35527cf9e8710bb4cefa7c_prof);

        
        $__internal_92da897c493960b5f90751ce1941a99e84a641505c0a2cfffa2c1f67776f7ec3->leave($__internal_92da897c493960b5f90751ce1941a99e84a641505c0a2cfffa2c1f67776f7ec3_prof);

    }

    public function getTemplateName()
    {
        return "FrontEndBundle:Restaurent:RestaurentAccueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 7,  61 => 6,  50 => 3,  41 => 2,  11 => 1,);
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
 {% block stylesheet %}

 {% endblock stylesheet %}

{% block body %}
    <section id=\"slider\">
        <div class=\"static-banner relative\">
            <div class=\"overlay blue-overlay-5\"></div>
            <div class=\"page-head\">
                <h2 class=\"page-title\">Restaurent</h2>
                <ul class=\"page-title-btn\">
                    <li><a href=\"http://www.codepixar.com/educare/php/01-home-university.php\" target=\"_blank\">Home <i
                                    class=\"fa fa-caret-right\" aria-hidden=\"true\"></i></a></li>
                    <li><a href=\"#\" class=\"active\">Department List</a></li>
                </ul>
            </div>
        </div>
    </section>
{% endblock body %}", "FrontEndBundle:Restaurent:RestaurentAccueil.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\src\\FrontEndBundle/Resources/views/Restaurent/RestaurentAccueil.html.twig");
    }
}
