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
        $__internal_5a7adf6fd8b9875baaaefce78c57b13faf5518044fe1957f22dee91abd2129ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a7adf6fd8b9875baaaefce78c57b13faf5518044fe1957f22dee91abd2129ea->enter($__internal_5a7adf6fd8b9875baaaefce78c57b13faf5518044fe1957f22dee91abd2129ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_eadbe040af2933d1810d889f068a508bfaf1ed7eeedd2c05c621d435853267d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eadbe040af2933d1810d889f068a508bfaf1ed7eeedd2c05c621d435853267d4->enter($__internal_eadbe040af2933d1810d889f068a508bfaf1ed7eeedd2c05c621d435853267d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a7adf6fd8b9875baaaefce78c57b13faf5518044fe1957f22dee91abd2129ea->leave($__internal_5a7adf6fd8b9875baaaefce78c57b13faf5518044fe1957f22dee91abd2129ea_prof);

        
        $__internal_eadbe040af2933d1810d889f068a508bfaf1ed7eeedd2c05c621d435853267d4->leave($__internal_eadbe040af2933d1810d889f068a508bfaf1ed7eeedd2c05c621d435853267d4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f60044bd48ea7614bf453c6f2342dd93d32098bd5dde69c2b13d4f045e55a4ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f60044bd48ea7614bf453c6f2342dd93d32098bd5dde69c2b13d4f045e55a4ef->enter($__internal_f60044bd48ea7614bf453c6f2342dd93d32098bd5dde69c2b13d4f045e55a4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2a756d3d48ada957fac5f314c79eeb2249fa955de5a89481c569f87a1cdafbb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a756d3d48ada957fac5f314c79eeb2249fa955de5a89481c569f87a1cdafbb8->enter($__internal_2a756d3d48ada957fac5f314c79eeb2249fa955de5a89481c569f87a1cdafbb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_2a756d3d48ada957fac5f314c79eeb2249fa955de5a89481c569f87a1cdafbb8->leave($__internal_2a756d3d48ada957fac5f314c79eeb2249fa955de5a89481c569f87a1cdafbb8_prof);

        
        $__internal_f60044bd48ea7614bf453c6f2342dd93d32098bd5dde69c2b13d4f045e55a4ef->leave($__internal_f60044bd48ea7614bf453c6f2342dd93d32098bd5dde69c2b13d4f045e55a4ef_prof);

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
