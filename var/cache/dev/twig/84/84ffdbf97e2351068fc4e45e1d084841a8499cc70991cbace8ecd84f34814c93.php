<?php

/* @FrontEnd/Club/ClubAccueil.html.twig */
class __TwigTemplate_c5bbbb6f4fa2692337a537cea5e2a97fa123cbd91379e2bf6affce624c8593f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontEndBundle::Layout.html.twig", "@FrontEnd/Club/ClubAccueil.html.twig", 1);
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
        $__internal_b650d7c93745fec083f3ea5ee2a0bf15207a9db79edf1dab19bf4cd3b5b753d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b650d7c93745fec083f3ea5ee2a0bf15207a9db79edf1dab19bf4cd3b5b753d3->enter($__internal_b650d7c93745fec083f3ea5ee2a0bf15207a9db79edf1dab19bf4cd3b5b753d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FrontEnd/Club/ClubAccueil.html.twig"));

        $__internal_06b4c799c7dd98f3664b8db1288d72fe2b21d1278548c8c8441d4038813cb8a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06b4c799c7dd98f3664b8db1288d72fe2b21d1278548c8c8441d4038813cb8a9->enter($__internal_06b4c799c7dd98f3664b8db1288d72fe2b21d1278548c8c8441d4038813cb8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FrontEnd/Club/ClubAccueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b650d7c93745fec083f3ea5ee2a0bf15207a9db79edf1dab19bf4cd3b5b753d3->leave($__internal_b650d7c93745fec083f3ea5ee2a0bf15207a9db79edf1dab19bf4cd3b5b753d3_prof);

        
        $__internal_06b4c799c7dd98f3664b8db1288d72fe2b21d1278548c8c8441d4038813cb8a9->leave($__internal_06b4c799c7dd98f3664b8db1288d72fe2b21d1278548c8c8441d4038813cb8a9_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2f349ff856b4584cfc44d0817e87dedde3fd69d5321c2c2fff3408e69a4e347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2f349ff856b4584cfc44d0817e87dedde3fd69d5321c2c2fff3408e69a4e347->enter($__internal_c2f349ff856b4584cfc44d0817e87dedde3fd69d5321c2c2fff3408e69a4e347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2bc5306ea2408bc8bb600c4ba7d9c26d340257a917220522bc127c6d3ff35ac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bc5306ea2408bc8bb600c4ba7d9c26d340257a917220522bc127c6d3ff35ac0->enter($__internal_2bc5306ea2408bc8bb600c4ba7d9c26d340257a917220522bc127c6d3ff35ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2bc5306ea2408bc8bb600c4ba7d9c26d340257a917220522bc127c6d3ff35ac0->leave($__internal_2bc5306ea2408bc8bb600c4ba7d9c26d340257a917220522bc127c6d3ff35ac0_prof);

        
        $__internal_c2f349ff856b4584cfc44d0817e87dedde3fd69d5321c2c2fff3408e69a4e347->leave($__internal_c2f349ff856b4584cfc44d0817e87dedde3fd69d5321c2c2fff3408e69a4e347_prof);

    }

    public function getTemplateName()
    {
        return "@FrontEnd/Club/ClubAccueil.html.twig";
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
{% endblock body %}", "@FrontEnd/Club/ClubAccueil.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\src\\FrontEndBundle\\Resources\\views\\Club\\ClubAccueil.html.twig");
    }
}
