<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_a35e423c7848d2b243a0dfea47bc541b5184420c92444d84d73b104dbd2415af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e869457152644e9d7b19eaabd6720beeb3242f7a1728bab2b231ca101952cd72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e869457152644e9d7b19eaabd6720beeb3242f7a1728bab2b231ca101952cd72->enter($__internal_e869457152644e9d7b19eaabd6720beeb3242f7a1728bab2b231ca101952cd72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_8a7d92dab59257941ab9dd24de9aeb6a6d1d7037496c20616841dc591f8e2ec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a7d92dab59257941ab9dd24de9aeb6a6d1d7037496c20616841dc591f8e2ec4->enter($__internal_8a7d92dab59257941ab9dd24de9aeb6a6d1d7037496c20616841dc591f8e2ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e869457152644e9d7b19eaabd6720beeb3242f7a1728bab2b231ca101952cd72->leave($__internal_e869457152644e9d7b19eaabd6720beeb3242f7a1728bab2b231ca101952cd72_prof);

        
        $__internal_8a7d92dab59257941ab9dd24de9aeb6a6d1d7037496c20616841dc591f8e2ec4->leave($__internal_8a7d92dab59257941ab9dd24de9aeb6a6d1d7037496c20616841dc591f8e2ec4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fb1bc81371e6413347b9a1f3ee26d729984558fb7cf51a7b1ad3fec5b206b4ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb1bc81371e6413347b9a1f3ee26d729984558fb7cf51a7b1ad3fec5b206b4ed->enter($__internal_fb1bc81371e6413347b9a1f3ee26d729984558fb7cf51a7b1ad3fec5b206b4ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a75a77b0909b29d82f7d5e13238929fc5879beb1d39df3c56138afac7c88fce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a75a77b0909b29d82f7d5e13238929fc5879beb1d39df3c56138afac7c88fce8->enter($__internal_a75a77b0909b29d82f7d5e13238929fc5879beb1d39df3c56138afac7c88fce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_a75a77b0909b29d82f7d5e13238929fc5879beb1d39df3c56138afac7c88fce8->leave($__internal_a75a77b0909b29d82f7d5e13238929fc5879beb1d39df3c56138afac7c88fce8_prof);

        
        $__internal_fb1bc81371e6413347b9a1f3ee26d729984558fb7cf51a7b1ad3fec5b206b4ed->leave($__internal_fb1bc81371e6413347b9a1f3ee26d729984558fb7cf51a7b1ad3fec5b206b4ed_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
