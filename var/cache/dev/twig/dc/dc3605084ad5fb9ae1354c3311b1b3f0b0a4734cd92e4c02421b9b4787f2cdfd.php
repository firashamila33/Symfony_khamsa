<?php

/* FrontEndBundle:Club:ClubAccueil.html.twig */
class __TwigTemplate_4e96cdc87919f02f80dc6647889256cddaefad8d17437646fc38b174c3f5d508 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontEndBundle::Layout.html.twig", "FrontEndBundle:Club:ClubAccueil.html.twig", 1);
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
        $__internal_857a213286866c8c0fa499b656bf7facf25afdc36dc65adb6ffa70e8ae2dbdde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_857a213286866c8c0fa499b656bf7facf25afdc36dc65adb6ffa70e8ae2dbdde->enter($__internal_857a213286866c8c0fa499b656bf7facf25afdc36dc65adb6ffa70e8ae2dbdde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle:Club:ClubAccueil.html.twig"));

        $__internal_6997ca6854fb1a2d95c30e650c2a6ff2d608baec8db95f94eaa3be0373203cdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6997ca6854fb1a2d95c30e650c2a6ff2d608baec8db95f94eaa3be0373203cdc->enter($__internal_6997ca6854fb1a2d95c30e650c2a6ff2d608baec8db95f94eaa3be0373203cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle:Club:ClubAccueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_857a213286866c8c0fa499b656bf7facf25afdc36dc65adb6ffa70e8ae2dbdde->leave($__internal_857a213286866c8c0fa499b656bf7facf25afdc36dc65adb6ffa70e8ae2dbdde_prof);

        
        $__internal_6997ca6854fb1a2d95c30e650c2a6ff2d608baec8db95f94eaa3be0373203cdc->leave($__internal_6997ca6854fb1a2d95c30e650c2a6ff2d608baec8db95f94eaa3be0373203cdc_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0a7c928078317f2e776d995186162e2cb1688736f4e2485cb0271a0037ff1ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0a7c928078317f2e776d995186162e2cb1688736f4e2485cb0271a0037ff1ca->enter($__internal_d0a7c928078317f2e776d995186162e2cb1688736f4e2485cb0271a0037ff1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f737deb12e0ab6220cffcff5a56ed6c8bf12b228a5d8cc008aabfd913cfcd3c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f737deb12e0ab6220cffcff5a56ed6c8bf12b228a5d8cc008aabfd913cfcd3c1->enter($__internal_f737deb12e0ab6220cffcff5a56ed6c8bf12b228a5d8cc008aabfd913cfcd3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <section id=\"slider\">
        <div class=\"static-banner relative\">
            <div class=\"overlay blue-overlay-5\"></div>
            <div class=\"page-head\">
                <h2 class=\"page-title\">Clubs</h2>
                <ul class=\"page-title-btn\">
                    <li><a href=\"http://www.codepixar.com/educare/php/01-home-university.php\" target=\"_blank\">Home <i
                                    class=\"fa fa-caret-right\" aria-hidden=\"true\"></i></a></li>
                    <li><a href=\"#\" class=\"active\">Department List</a></li>
                    </ul>
            </div>
        </div>
    </section>
";
        
        $__internal_f737deb12e0ab6220cffcff5a56ed6c8bf12b228a5d8cc008aabfd913cfcd3c1->leave($__internal_f737deb12e0ab6220cffcff5a56ed6c8bf12b228a5d8cc008aabfd913cfcd3c1_prof);

        
        $__internal_d0a7c928078317f2e776d995186162e2cb1688736f4e2485cb0271a0037ff1ca->leave($__internal_d0a7c928078317f2e776d995186162e2cb1688736f4e2485cb0271a0037ff1ca_prof);

    }

    public function getTemplateName()
    {
        return "FrontEndBundle:Club:ClubAccueil.html.twig";
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
                <h2 class=\"page-title\">Clubs</h2>
                <ul class=\"page-title-btn\">
                    <li><a href=\"http://www.codepixar.com/educare/php/01-home-university.php\" target=\"_blank\">Home <i
                                    class=\"fa fa-caret-right\" aria-hidden=\"true\"></i></a></li>
                    <li><a href=\"#\" class=\"active\">Department List</a></li>
                    </ul>
            </div>
        </div>
    </section>
{% endblock body %}", "FrontEndBundle:Club:ClubAccueil.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\src\\FrontEndBundle/Resources/views/Club/ClubAccueil.html.twig");
    }
}
