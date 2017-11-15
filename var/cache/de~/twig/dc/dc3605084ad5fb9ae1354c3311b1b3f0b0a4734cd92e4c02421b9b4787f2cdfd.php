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
        $__internal_4d3c2a4165b3ab2a7f1bde72e22daa3646dc746fef7d1e609e5a96d214dbfe87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d3c2a4165b3ab2a7f1bde72e22daa3646dc746fef7d1e609e5a96d214dbfe87->enter($__internal_4d3c2a4165b3ab2a7f1bde72e22daa3646dc746fef7d1e609e5a96d214dbfe87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle:Club:ClubAccueil.html.twig"));

        $__internal_30e8ed781d4ae329863da75387560d3170c76b618ed2f9e60d6f97d3218ff982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30e8ed781d4ae329863da75387560d3170c76b618ed2f9e60d6f97d3218ff982->enter($__internal_30e8ed781d4ae329863da75387560d3170c76b618ed2f9e60d6f97d3218ff982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle:Club:ClubAccueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d3c2a4165b3ab2a7f1bde72e22daa3646dc746fef7d1e609e5a96d214dbfe87->leave($__internal_4d3c2a4165b3ab2a7f1bde72e22daa3646dc746fef7d1e609e5a96d214dbfe87_prof);

        
        $__internal_30e8ed781d4ae329863da75387560d3170c76b618ed2f9e60d6f97d3218ff982->leave($__internal_30e8ed781d4ae329863da75387560d3170c76b618ed2f9e60d6f97d3218ff982_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_993e686593971ba5ee1cd638456e56093a154f372ab63e0d8e5c69da08b147af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_993e686593971ba5ee1cd638456e56093a154f372ab63e0d8e5c69da08b147af->enter($__internal_993e686593971ba5ee1cd638456e56093a154f372ab63e0d8e5c69da08b147af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad822f3d6e1c64d06100fe985712336c2efe9384aad540e4c2bb6ebbe7692421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad822f3d6e1c64d06100fe985712336c2efe9384aad540e4c2bb6ebbe7692421->enter($__internal_ad822f3d6e1c64d06100fe985712336c2efe9384aad540e4c2bb6ebbe7692421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ad822f3d6e1c64d06100fe985712336c2efe9384aad540e4c2bb6ebbe7692421->leave($__internal_ad822f3d6e1c64d06100fe985712336c2efe9384aad540e4c2bb6ebbe7692421_prof);

        
        $__internal_993e686593971ba5ee1cd638456e56093a154f372ab63e0d8e5c69da08b147af->leave($__internal_993e686593971ba5ee1cd638456e56093a154f372ab63e0d8e5c69da08b147af_prof);

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
