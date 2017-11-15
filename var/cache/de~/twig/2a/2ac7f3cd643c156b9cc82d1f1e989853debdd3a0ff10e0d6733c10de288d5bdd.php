<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_52503fe51e576e1a11b8c654937542d47654ec8738e1dbf0908a0fba02e17cdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_cb2843b23109e4f35ff7cb06e733992dea589724d57b40c3c812d1d76cb89e67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb2843b23109e4f35ff7cb06e733992dea589724d57b40c3c812d1d76cb89e67->enter($__internal_cb2843b23109e4f35ff7cb06e733992dea589724d57b40c3c812d1d76cb89e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_558d27667dc1cc0dff7d26b8962146dfe4e3157af72f43bf32b44833e947d009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_558d27667dc1cc0dff7d26b8962146dfe4e3157af72f43bf32b44833e947d009->enter($__internal_558d27667dc1cc0dff7d26b8962146dfe4e3157af72f43bf32b44833e947d009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb2843b23109e4f35ff7cb06e733992dea589724d57b40c3c812d1d76cb89e67->leave($__internal_cb2843b23109e4f35ff7cb06e733992dea589724d57b40c3c812d1d76cb89e67_prof);

        
        $__internal_558d27667dc1cc0dff7d26b8962146dfe4e3157af72f43bf32b44833e947d009->leave($__internal_558d27667dc1cc0dff7d26b8962146dfe4e3157af72f43bf32b44833e947d009_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6213f0ff7cdbd494688a8831d9926a3c01351a7b41587a4eb2b117c3178ce060 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6213f0ff7cdbd494688a8831d9926a3c01351a7b41587a4eb2b117c3178ce060->enter($__internal_6213f0ff7cdbd494688a8831d9926a3c01351a7b41587a4eb2b117c3178ce060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_20c99ebbd45748cd9618f4f1e0d50ce5fb81f23f6bf5d454df80c04348b78eb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20c99ebbd45748cd9618f4f1e0d50ce5fb81f23f6bf5d454df80c04348b78eb3->enter($__internal_20c99ebbd45748cd9618f4f1e0d50ce5fb81f23f6bf5d454df80c04348b78eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_20c99ebbd45748cd9618f4f1e0d50ce5fb81f23f6bf5d454df80c04348b78eb3->leave($__internal_20c99ebbd45748cd9618f4f1e0d50ce5fb81f23f6bf5d454df80c04348b78eb3_prof);

        
        $__internal_6213f0ff7cdbd494688a8831d9926a3c01351a7b41587a4eb2b117c3178ce060->leave($__internal_6213f0ff7cdbd494688a8831d9926a3c01351a7b41587a4eb2b117c3178ce060_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b7acb873df48711e226d65e06e09cfd7711f11c4057bd745090ab0e25cd2186 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b7acb873df48711e226d65e06e09cfd7711f11c4057bd745090ab0e25cd2186->enter($__internal_8b7acb873df48711e226d65e06e09cfd7711f11c4057bd745090ab0e25cd2186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b86c8c619cb44127cfeab699ba09fbf0ab9d629af84b5c8fc44b36042b703269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b86c8c619cb44127cfeab699ba09fbf0ab9d629af84b5c8fc44b36042b703269->enter($__internal_b86c8c619cb44127cfeab699ba09fbf0ab9d629af84b5c8fc44b36042b703269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b86c8c619cb44127cfeab699ba09fbf0ab9d629af84b5c8fc44b36042b703269->leave($__internal_b86c8c619cb44127cfeab699ba09fbf0ab9d629af84b5c8fc44b36042b703269_prof);

        
        $__internal_8b7acb873df48711e226d65e06e09cfd7711f11c4057bd745090ab0e25cd2186->leave($__internal_8b7acb873df48711e226d65e06e09cfd7711f11c4057bd745090ab0e25cd2186_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
