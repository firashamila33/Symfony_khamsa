<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_f903966c9af1df2c1635e6609579acdbc5181f6a1d33d8f14dc5116a8a030047 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_60aa8ca55e2f54003440703934b4c215761eda0e701a110108d79407fc78f8a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60aa8ca55e2f54003440703934b4c215761eda0e701a110108d79407fc78f8a8->enter($__internal_60aa8ca55e2f54003440703934b4c215761eda0e701a110108d79407fc78f8a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_ccb1df096775102232d072a611817b9c6a3e9027de49dfbad14b1740abe25e05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccb1df096775102232d072a611817b9c6a3e9027de49dfbad14b1740abe25e05->enter($__internal_ccb1df096775102232d072a611817b9c6a3e9027de49dfbad14b1740abe25e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60aa8ca55e2f54003440703934b4c215761eda0e701a110108d79407fc78f8a8->leave($__internal_60aa8ca55e2f54003440703934b4c215761eda0e701a110108d79407fc78f8a8_prof);

        
        $__internal_ccb1df096775102232d072a611817b9c6a3e9027de49dfbad14b1740abe25e05->leave($__internal_ccb1df096775102232d072a611817b9c6a3e9027de49dfbad14b1740abe25e05_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a39e3a0182c0b75db0494a3b9fc3d209d9d3b9b3697750cf0e6574cfd2709e94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a39e3a0182c0b75db0494a3b9fc3d209d9d3b9b3697750cf0e6574cfd2709e94->enter($__internal_a39e3a0182c0b75db0494a3b9fc3d209d9d3b9b3697750cf0e6574cfd2709e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_069ef68baba4a40dc39773b396721508522ac60b72938b97412e7accf2ca168d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_069ef68baba4a40dc39773b396721508522ac60b72938b97412e7accf2ca168d->enter($__internal_069ef68baba4a40dc39773b396721508522ac60b72938b97412e7accf2ca168d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_069ef68baba4a40dc39773b396721508522ac60b72938b97412e7accf2ca168d->leave($__internal_069ef68baba4a40dc39773b396721508522ac60b72938b97412e7accf2ca168d_prof);

        
        $__internal_a39e3a0182c0b75db0494a3b9fc3d209d9d3b9b3697750cf0e6574cfd2709e94->leave($__internal_a39e3a0182c0b75db0494a3b9fc3d209d9d3b9b3697750cf0e6574cfd2709e94_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
