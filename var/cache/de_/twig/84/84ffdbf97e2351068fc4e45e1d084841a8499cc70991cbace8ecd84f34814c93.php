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
        $__internal_1f085c5309b49f0f69b9840d97ef1179e8f688555275a3e55ac41a1db3604811 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f085c5309b49f0f69b9840d97ef1179e8f688555275a3e55ac41a1db3604811->enter($__internal_1f085c5309b49f0f69b9840d97ef1179e8f688555275a3e55ac41a1db3604811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FrontEnd/Club/ClubAccueil.html.twig"));

        $__internal_1269f3c861e073d12a06c2be65bbe29644494eb4ff0a384541900dd45aabe67a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1269f3c861e073d12a06c2be65bbe29644494eb4ff0a384541900dd45aabe67a->enter($__internal_1269f3c861e073d12a06c2be65bbe29644494eb4ff0a384541900dd45aabe67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FrontEnd/Club/ClubAccueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f085c5309b49f0f69b9840d97ef1179e8f688555275a3e55ac41a1db3604811->leave($__internal_1f085c5309b49f0f69b9840d97ef1179e8f688555275a3e55ac41a1db3604811_prof);

        
        $__internal_1269f3c861e073d12a06c2be65bbe29644494eb4ff0a384541900dd45aabe67a->leave($__internal_1269f3c861e073d12a06c2be65bbe29644494eb4ff0a384541900dd45aabe67a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae77c7d91e5fa1d07f2e0b197e35b64ef546776a5715053af4ce393ca5ceb2f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae77c7d91e5fa1d07f2e0b197e35b64ef546776a5715053af4ce393ca5ceb2f9->enter($__internal_ae77c7d91e5fa1d07f2e0b197e35b64ef546776a5715053af4ce393ca5ceb2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_340fd4078658a5679935df6c92f2532bd453932e5208e2ecfa94799267be80a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_340fd4078658a5679935df6c92f2532bd453932e5208e2ecfa94799267be80a1->enter($__internal_340fd4078658a5679935df6c92f2532bd453932e5208e2ecfa94799267be80a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_340fd4078658a5679935df6c92f2532bd453932e5208e2ecfa94799267be80a1->leave($__internal_340fd4078658a5679935df6c92f2532bd453932e5208e2ecfa94799267be80a1_prof);

        
        $__internal_ae77c7d91e5fa1d07f2e0b197e35b64ef546776a5715053af4ce393ca5ceb2f9->leave($__internal_ae77c7d91e5fa1d07f2e0b197e35b64ef546776a5715053af4ce393ca5ceb2f9_prof);

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
