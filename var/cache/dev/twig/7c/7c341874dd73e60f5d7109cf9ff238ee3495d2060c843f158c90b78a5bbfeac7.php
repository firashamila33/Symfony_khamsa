<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_ea69eeda03af6a53cbcf731330411c6e88bc5c71190ff8c4c1a44134c3079beb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f1df031600042777a1e5e52433d2e6014df34518b384608f4e8308829ea694f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f1df031600042777a1e5e52433d2e6014df34518b384608f4e8308829ea694f->enter($__internal_4f1df031600042777a1e5e52433d2e6014df34518b384608f4e8308829ea694f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_fa607fdcbbb9d780d0c23426eb2471f14e489c8b69c820cf066c10d9646268f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa607fdcbbb9d780d0c23426eb2471f14e489c8b69c820cf066c10d9646268f3->enter($__internal_fa607fdcbbb9d780d0c23426eb2471f14e489c8b69c820cf066c10d9646268f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f1df031600042777a1e5e52433d2e6014df34518b384608f4e8308829ea694f->leave($__internal_4f1df031600042777a1e5e52433d2e6014df34518b384608f4e8308829ea694f_prof);

        
        $__internal_fa607fdcbbb9d780d0c23426eb2471f14e489c8b69c820cf066c10d9646268f3->leave($__internal_fa607fdcbbb9d780d0c23426eb2471f14e489c8b69c820cf066c10d9646268f3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_334d866cb1c9f2da267e3d0fbb78d6463d2bdede1df7520f8a659754b7153276 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_334d866cb1c9f2da267e3d0fbb78d6463d2bdede1df7520f8a659754b7153276->enter($__internal_334d866cb1c9f2da267e3d0fbb78d6463d2bdede1df7520f8a659754b7153276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_99351fbc9291a8b3d6b1d8819ba3f761068ca93033e7e537974bccd9e06df7ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99351fbc9291a8b3d6b1d8819ba3f761068ca93033e7e537974bccd9e06df7ce->enter($__internal_99351fbc9291a8b3d6b1d8819ba3f761068ca93033e7e537974bccd9e06df7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_99351fbc9291a8b3d6b1d8819ba3f761068ca93033e7e537974bccd9e06df7ce->leave($__internal_99351fbc9291a8b3d6b1d8819ba3f761068ca93033e7e537974bccd9e06df7ce_prof);

        
        $__internal_334d866cb1c9f2da267e3d0fbb78d6463d2bdede1df7520f8a659754b7153276->leave($__internal_334d866cb1c9f2da267e3d0fbb78d6463d2bdede1df7520f8a659754b7153276_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f8ad8f89ccc329c02c7b252e75d285a971ef301cce02376a7b8be48ab46432d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f8ad8f89ccc329c02c7b252e75d285a971ef301cce02376a7b8be48ab46432d->enter($__internal_3f8ad8f89ccc329c02c7b252e75d285a971ef301cce02376a7b8be48ab46432d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5f8d5f9dfed292d09669a80eba5eff40955e9b659509a80b70f5ceba39ec7dbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f8d5f9dfed292d09669a80eba5eff40955e9b659509a80b70f5ceba39ec7dbf->enter($__internal_5f8d5f9dfed292d09669a80eba5eff40955e9b659509a80b70f5ceba39ec7dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_5f8d5f9dfed292d09669a80eba5eff40955e9b659509a80b70f5ceba39ec7dbf->leave($__internal_5f8d5f9dfed292d09669a80eba5eff40955e9b659509a80b70f5ceba39ec7dbf_prof);

        
        $__internal_3f8ad8f89ccc329c02c7b252e75d285a971ef301cce02376a7b8be48ab46432d->leave($__internal_3f8ad8f89ccc329c02c7b252e75d285a971ef301cce02376a7b8be48ab46432d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
