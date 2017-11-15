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
        $__internal_c7d5f7eff0dd51990d40383a4a33511108e07aeb680a4a92cfe85c04e4d39bb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7d5f7eff0dd51990d40383a4a33511108e07aeb680a4a92cfe85c04e4d39bb6->enter($__internal_c7d5f7eff0dd51990d40383a4a33511108e07aeb680a4a92cfe85c04e4d39bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_6d76b25361059a3f273da8e5d27529b996da207c587bcb78be71f59656bff031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d76b25361059a3f273da8e5d27529b996da207c587bcb78be71f59656bff031->enter($__internal_6d76b25361059a3f273da8e5d27529b996da207c587bcb78be71f59656bff031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7d5f7eff0dd51990d40383a4a33511108e07aeb680a4a92cfe85c04e4d39bb6->leave($__internal_c7d5f7eff0dd51990d40383a4a33511108e07aeb680a4a92cfe85c04e4d39bb6_prof);

        
        $__internal_6d76b25361059a3f273da8e5d27529b996da207c587bcb78be71f59656bff031->leave($__internal_6d76b25361059a3f273da8e5d27529b996da207c587bcb78be71f59656bff031_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a5590b5fdd9999b616c4684118796f379fb5fd7859d058de6a6c654a5176353e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5590b5fdd9999b616c4684118796f379fb5fd7859d058de6a6c654a5176353e->enter($__internal_a5590b5fdd9999b616c4684118796f379fb5fd7859d058de6a6c654a5176353e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_979fcd5b65c9515f840349029450a17c0f96dc3e7a7bcc10ab8888438262e75b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_979fcd5b65c9515f840349029450a17c0f96dc3e7a7bcc10ab8888438262e75b->enter($__internal_979fcd5b65c9515f840349029450a17c0f96dc3e7a7bcc10ab8888438262e75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_979fcd5b65c9515f840349029450a17c0f96dc3e7a7bcc10ab8888438262e75b->leave($__internal_979fcd5b65c9515f840349029450a17c0f96dc3e7a7bcc10ab8888438262e75b_prof);

        
        $__internal_a5590b5fdd9999b616c4684118796f379fb5fd7859d058de6a6c654a5176353e->leave($__internal_a5590b5fdd9999b616c4684118796f379fb5fd7859d058de6a6c654a5176353e_prof);

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
