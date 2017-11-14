<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b8a17a0fae2f7bfd95eb86ef7e8c7aa15c40a070d0988588af92791ed83aa1e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c6e21ea43d5f1324df0a363010326795ca4b1d6e9c5e4b1e5cd8449911f10bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c6e21ea43d5f1324df0a363010326795ca4b1d6e9c5e4b1e5cd8449911f10bf->enter($__internal_8c6e21ea43d5f1324df0a363010326795ca4b1d6e9c5e4b1e5cd8449911f10bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_ff18e928af168dd0e728771d766358b8a894a65377675a08af21f51675c59585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff18e928af168dd0e728771d766358b8a894a65377675a08af21f51675c59585->enter($__internal_ff18e928af168dd0e728771d766358b8a894a65377675a08af21f51675c59585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c6e21ea43d5f1324df0a363010326795ca4b1d6e9c5e4b1e5cd8449911f10bf->leave($__internal_8c6e21ea43d5f1324df0a363010326795ca4b1d6e9c5e4b1e5cd8449911f10bf_prof);

        
        $__internal_ff18e928af168dd0e728771d766358b8a894a65377675a08af21f51675c59585->leave($__internal_ff18e928af168dd0e728771d766358b8a894a65377675a08af21f51675c59585_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2afeea0791d5b5956449e2a8e59d08658e951914853b5cc08093e405a73a77f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2afeea0791d5b5956449e2a8e59d08658e951914853b5cc08093e405a73a77f2->enter($__internal_2afeea0791d5b5956449e2a8e59d08658e951914853b5cc08093e405a73a77f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d72bfdc7029f5b8be15cd544fd77ad8e81aeaa29a37df21dd91b9386bef545e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d72bfdc7029f5b8be15cd544fd77ad8e81aeaa29a37df21dd91b9386bef545e1->enter($__internal_d72bfdc7029f5b8be15cd544fd77ad8e81aeaa29a37df21dd91b9386bef545e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d72bfdc7029f5b8be15cd544fd77ad8e81aeaa29a37df21dd91b9386bef545e1->leave($__internal_d72bfdc7029f5b8be15cd544fd77ad8e81aeaa29a37df21dd91b9386bef545e1_prof);

        
        $__internal_2afeea0791d5b5956449e2a8e59d08658e951914853b5cc08093e405a73a77f2->leave($__internal_2afeea0791d5b5956449e2a8e59d08658e951914853b5cc08093e405a73a77f2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a8dc083bc97b89be7b663c517f6c67c87415696fa7e046b35a8afd068819157 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a8dc083bc97b89be7b663c517f6c67c87415696fa7e046b35a8afd068819157->enter($__internal_6a8dc083bc97b89be7b663c517f6c67c87415696fa7e046b35a8afd068819157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7ca4e37e2a241b5cb96f62836a3f30b87e19b336a8149b362fb89741ebedafa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ca4e37e2a241b5cb96f62836a3f30b87e19b336a8149b362fb89741ebedafa4->enter($__internal_7ca4e37e2a241b5cb96f62836a3f30b87e19b336a8149b362fb89741ebedafa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_7ca4e37e2a241b5cb96f62836a3f30b87e19b336a8149b362fb89741ebedafa4->leave($__internal_7ca4e37e2a241b5cb96f62836a3f30b87e19b336a8149b362fb89741ebedafa4_prof);

        
        $__internal_6a8dc083bc97b89be7b663c517f6c67c87415696fa7e046b35a8afd068819157->leave($__internal_6a8dc083bc97b89be7b663c517f6c67c87415696fa7e046b35a8afd068819157_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
