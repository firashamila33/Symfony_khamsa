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
        $__internal_231fb990902386999d41cb33934300d141cdc76c3799ac8b958d0721743e2011 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_231fb990902386999d41cb33934300d141cdc76c3799ac8b958d0721743e2011->enter($__internal_231fb990902386999d41cb33934300d141cdc76c3799ac8b958d0721743e2011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_2e5b44caf201f610d5303f8c4669bf819858d87576ad37943af2b6b11dba1535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e5b44caf201f610d5303f8c4669bf819858d87576ad37943af2b6b11dba1535->enter($__internal_2e5b44caf201f610d5303f8c4669bf819858d87576ad37943af2b6b11dba1535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_231fb990902386999d41cb33934300d141cdc76c3799ac8b958d0721743e2011->leave($__internal_231fb990902386999d41cb33934300d141cdc76c3799ac8b958d0721743e2011_prof);

        
        $__internal_2e5b44caf201f610d5303f8c4669bf819858d87576ad37943af2b6b11dba1535->leave($__internal_2e5b44caf201f610d5303f8c4669bf819858d87576ad37943af2b6b11dba1535_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc59287f6c114dc3a9671e411e05945a4408686ea7cc326fdec2a68b5477f73c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc59287f6c114dc3a9671e411e05945a4408686ea7cc326fdec2a68b5477f73c->enter($__internal_bc59287f6c114dc3a9671e411e05945a4408686ea7cc326fdec2a68b5477f73c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ca60febac466591ebcdc2e4f658c8de6d01eedec0b636e5ac3c3ce01aa6b2eb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca60febac466591ebcdc2e4f658c8de6d01eedec0b636e5ac3c3ce01aa6b2eb9->enter($__internal_ca60febac466591ebcdc2e4f658c8de6d01eedec0b636e5ac3c3ce01aa6b2eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ca60febac466591ebcdc2e4f658c8de6d01eedec0b636e5ac3c3ce01aa6b2eb9->leave($__internal_ca60febac466591ebcdc2e4f658c8de6d01eedec0b636e5ac3c3ce01aa6b2eb9_prof);

        
        $__internal_bc59287f6c114dc3a9671e411e05945a4408686ea7cc326fdec2a68b5477f73c->leave($__internal_bc59287f6c114dc3a9671e411e05945a4408686ea7cc326fdec2a68b5477f73c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dda0bab31c203ebdce78ce4e5168bbfcf29b42bf26ebe79c52845d9d78323da2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dda0bab31c203ebdce78ce4e5168bbfcf29b42bf26ebe79c52845d9d78323da2->enter($__internal_dda0bab31c203ebdce78ce4e5168bbfcf29b42bf26ebe79c52845d9d78323da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4e6a2e500bb6514ec0dd2cbd5f725e53a9795ccf79bce2984779ae7591093839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e6a2e500bb6514ec0dd2cbd5f725e53a9795ccf79bce2984779ae7591093839->enter($__internal_4e6a2e500bb6514ec0dd2cbd5f725e53a9795ccf79bce2984779ae7591093839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4e6a2e500bb6514ec0dd2cbd5f725e53a9795ccf79bce2984779ae7591093839->leave($__internal_4e6a2e500bb6514ec0dd2cbd5f725e53a9795ccf79bce2984779ae7591093839_prof);

        
        $__internal_dda0bab31c203ebdce78ce4e5168bbfcf29b42bf26ebe79c52845d9d78323da2->leave($__internal_dda0bab31c203ebdce78ce4e5168bbfcf29b42bf26ebe79c52845d9d78323da2_prof);

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
