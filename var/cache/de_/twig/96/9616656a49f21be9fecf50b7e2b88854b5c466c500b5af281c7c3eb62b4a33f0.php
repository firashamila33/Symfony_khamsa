<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_edbb44d6e36d2ccb6b634c073b146417c87a8fa96fc07b4187c2544f156ec688 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_d0eb8963b6427d843ab038082af9adec245139414002f5be5fcf447b1366cc4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0eb8963b6427d843ab038082af9adec245139414002f5be5fcf447b1366cc4e->enter($__internal_d0eb8963b6427d843ab038082af9adec245139414002f5be5fcf447b1366cc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_d9909af8556bd75f4e3c2dd8bd55f1d275b8420939c10fcf62f3baa2ebf1340a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9909af8556bd75f4e3c2dd8bd55f1d275b8420939c10fcf62f3baa2ebf1340a->enter($__internal_d9909af8556bd75f4e3c2dd8bd55f1d275b8420939c10fcf62f3baa2ebf1340a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0eb8963b6427d843ab038082af9adec245139414002f5be5fcf447b1366cc4e->leave($__internal_d0eb8963b6427d843ab038082af9adec245139414002f5be5fcf447b1366cc4e_prof);

        
        $__internal_d9909af8556bd75f4e3c2dd8bd55f1d275b8420939c10fcf62f3baa2ebf1340a->leave($__internal_d9909af8556bd75f4e3c2dd8bd55f1d275b8420939c10fcf62f3baa2ebf1340a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5c300c2898f3b39d5dcb66451cf77b63e01c34f1e8484434a04853d25d060af0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c300c2898f3b39d5dcb66451cf77b63e01c34f1e8484434a04853d25d060af0->enter($__internal_5c300c2898f3b39d5dcb66451cf77b63e01c34f1e8484434a04853d25d060af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_dc3c2c825763758d2e3a93a5ea9f1c3df9a876e0ca46427d10165214424b38b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc3c2c825763758d2e3a93a5ea9f1c3df9a876e0ca46427d10165214424b38b2->enter($__internal_dc3c2c825763758d2e3a93a5ea9f1c3df9a876e0ca46427d10165214424b38b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_dc3c2c825763758d2e3a93a5ea9f1c3df9a876e0ca46427d10165214424b38b2->leave($__internal_dc3c2c825763758d2e3a93a5ea9f1c3df9a876e0ca46427d10165214424b38b2_prof);

        
        $__internal_5c300c2898f3b39d5dcb66451cf77b63e01c34f1e8484434a04853d25d060af0->leave($__internal_5c300c2898f3b39d5dcb66451cf77b63e01c34f1e8484434a04853d25d060af0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
