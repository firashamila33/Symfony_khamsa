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
        $__internal_97290e8b49af64cb38bce70820487a3dfaf32936215bc57e322c36251d6512d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97290e8b49af64cb38bce70820487a3dfaf32936215bc57e322c36251d6512d5->enter($__internal_97290e8b49af64cb38bce70820487a3dfaf32936215bc57e322c36251d6512d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle:Club:ClubAccueil.html.twig"));

        $__internal_e7973b4a4f20cc9a39f90b3f7bc3bc705ad8710463b24fac35e2be1097ed1fa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7973b4a4f20cc9a39f90b3f7bc3bc705ad8710463b24fac35e2be1097ed1fa9->enter($__internal_e7973b4a4f20cc9a39f90b3f7bc3bc705ad8710463b24fac35e2be1097ed1fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle:Club:ClubAccueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97290e8b49af64cb38bce70820487a3dfaf32936215bc57e322c36251d6512d5->leave($__internal_97290e8b49af64cb38bce70820487a3dfaf32936215bc57e322c36251d6512d5_prof);

        
        $__internal_e7973b4a4f20cc9a39f90b3f7bc3bc705ad8710463b24fac35e2be1097ed1fa9->leave($__internal_e7973b4a4f20cc9a39f90b3f7bc3bc705ad8710463b24fac35e2be1097ed1fa9_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c342f307ab75047e2d368ff734f301eaf7d174c8ca873fd08f70029800edcd40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c342f307ab75047e2d368ff734f301eaf7d174c8ca873fd08f70029800edcd40->enter($__internal_c342f307ab75047e2d368ff734f301eaf7d174c8ca873fd08f70029800edcd40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0bed1080bda5d50a3d0f4c9c6a336a320a571588caf67e719e81d48fd3e95831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bed1080bda5d50a3d0f4c9c6a336a320a571588caf67e719e81d48fd3e95831->enter($__internal_0bed1080bda5d50a3d0f4c9c6a336a320a571588caf67e719e81d48fd3e95831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <section id=\"slider\">
        <div class=\"static-banner relative\">
            <div class=\"overlay blue-overlay-5\"></div>
            <div class=\"page-head\">
                <h2 class=\"page-title\">Clubs</h2>
                <ul class=\"page-title-btn\">
                    <li><a href=\"http://www.codepixar.com/educare/php/01-home-university.php\" target=\"_blank\">Home <i
                                    class=\"fa fa-caret-right\" aria-hidden=\"true\"></i></a></li>
                    <li><a href=\"#\" class=\"active\">List Club</a></li>
                    </ul>
            </div>
        </div>
    </section>






";
        
        $__internal_0bed1080bda5d50a3d0f4c9c6a336a320a571588caf67e719e81d48fd3e95831->leave($__internal_0bed1080bda5d50a3d0f4c9c6a336a320a571588caf67e719e81d48fd3e95831_prof);

        
        $__internal_c342f307ab75047e2d368ff734f301eaf7d174c8ca873fd08f70029800edcd40->leave($__internal_c342f307ab75047e2d368ff734f301eaf7d174c8ca873fd08f70029800edcd40_prof);

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
                    <li><a href=\"#\" class=\"active\">List Club</a></li>
                    </ul>
            </div>
        </div>
    </section>






{% endblock body %}", "FrontEndBundle:Club:ClubAccueil.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\src\\FrontEndBundle/Resources/views/Club/ClubAccueil.html.twig");
    }
}
