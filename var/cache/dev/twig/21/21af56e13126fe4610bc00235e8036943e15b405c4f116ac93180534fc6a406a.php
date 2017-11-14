<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_5d1a3e47294e3d85e572c440ba5a4936437ab797f7c197ae4e04247b05c9f15c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_d5f6f2140fb3107381382c7f98ef287115dbb91f0a4d25a44fefe8957945681f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5f6f2140fb3107381382c7f98ef287115dbb91f0a4d25a44fefe8957945681f->enter($__internal_d5f6f2140fb3107381382c7f98ef287115dbb91f0a4d25a44fefe8957945681f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_4a55fe39a4de63156d0ba2da7dba9f8f88f66f8308cb832306d6ee5c18c4731b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a55fe39a4de63156d0ba2da7dba9f8f88f66f8308cb832306d6ee5c18c4731b->enter($__internal_4a55fe39a4de63156d0ba2da7dba9f8f88f66f8308cb832306d6ee5c18c4731b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5f6f2140fb3107381382c7f98ef287115dbb91f0a4d25a44fefe8957945681f->leave($__internal_d5f6f2140fb3107381382c7f98ef287115dbb91f0a4d25a44fefe8957945681f_prof);

        
        $__internal_4a55fe39a4de63156d0ba2da7dba9f8f88f66f8308cb832306d6ee5c18c4731b->leave($__internal_4a55fe39a4de63156d0ba2da7dba9f8f88f66f8308cb832306d6ee5c18c4731b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_200bb503b2ec5d82aed6046d6566c958d30319855a9cf68eb305a01cba11babc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_200bb503b2ec5d82aed6046d6566c958d30319855a9cf68eb305a01cba11babc->enter($__internal_200bb503b2ec5d82aed6046d6566c958d30319855a9cf68eb305a01cba11babc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_252457a7b41d0b2d9949454fadcc68cab07570e9d39fa98677eae1836e2adbcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_252457a7b41d0b2d9949454fadcc68cab07570e9d39fa98677eae1836e2adbcc->enter($__internal_252457a7b41d0b2d9949454fadcc68cab07570e9d39fa98677eae1836e2adbcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_252457a7b41d0b2d9949454fadcc68cab07570e9d39fa98677eae1836e2adbcc->leave($__internal_252457a7b41d0b2d9949454fadcc68cab07570e9d39fa98677eae1836e2adbcc_prof);

        
        $__internal_200bb503b2ec5d82aed6046d6566c958d30319855a9cf68eb305a01cba11babc->leave($__internal_200bb503b2ec5d82aed6046d6566c958d30319855a9cf68eb305a01cba11babc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
