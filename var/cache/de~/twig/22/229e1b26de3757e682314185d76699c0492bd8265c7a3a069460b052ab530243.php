<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_67a3b3d2f18b98fc95bd7ad9bf721dc5da9c603c0673fad56cc4bc6eb9175635 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_70206348f4e4826ef1f3a9b654309e2b38d46a1671b85e4efbdef75f330927ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70206348f4e4826ef1f3a9b654309e2b38d46a1671b85e4efbdef75f330927ac->enter($__internal_70206348f4e4826ef1f3a9b654309e2b38d46a1671b85e4efbdef75f330927ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_9501e67410f8345e1a300292d0869ae1addb0bf37791c49ea586665169e20ef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9501e67410f8345e1a300292d0869ae1addb0bf37791c49ea586665169e20ef9->enter($__internal_9501e67410f8345e1a300292d0869ae1addb0bf37791c49ea586665169e20ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70206348f4e4826ef1f3a9b654309e2b38d46a1671b85e4efbdef75f330927ac->leave($__internal_70206348f4e4826ef1f3a9b654309e2b38d46a1671b85e4efbdef75f330927ac_prof);

        
        $__internal_9501e67410f8345e1a300292d0869ae1addb0bf37791c49ea586665169e20ef9->leave($__internal_9501e67410f8345e1a300292d0869ae1addb0bf37791c49ea586665169e20ef9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_91f7591a6b5ab7853ba1a8cdc598caeae68a55f1ed8aba2cc6771b7f22191454 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91f7591a6b5ab7853ba1a8cdc598caeae68a55f1ed8aba2cc6771b7f22191454->enter($__internal_91f7591a6b5ab7853ba1a8cdc598caeae68a55f1ed8aba2cc6771b7f22191454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b8b0e880e81919b5b09fd9c22201426b8fc207b855d2c18d9852af700400f398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8b0e880e81919b5b09fd9c22201426b8fc207b855d2c18d9852af700400f398->enter($__internal_b8b0e880e81919b5b09fd9c22201426b8fc207b855d2c18d9852af700400f398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_b8b0e880e81919b5b09fd9c22201426b8fc207b855d2c18d9852af700400f398->leave($__internal_b8b0e880e81919b5b09fd9c22201426b8fc207b855d2c18d9852af700400f398_prof);

        
        $__internal_91f7591a6b5ab7853ba1a8cdc598caeae68a55f1ed8aba2cc6771b7f22191454->leave($__internal_91f7591a6b5ab7853ba1a8cdc598caeae68a55f1ed8aba2cc6771b7f22191454_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c9be3a8052ec3114e4eec20a97d538603207330a20100de175b1db0ab809f26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c9be3a8052ec3114e4eec20a97d538603207330a20100de175b1db0ab809f26->enter($__internal_6c9be3a8052ec3114e4eec20a97d538603207330a20100de175b1db0ab809f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_66daa06d731e8b68132b43385d3430f0c2eb888fd483c9dc9dee32cd57034769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66daa06d731e8b68132b43385d3430f0c2eb888fd483c9dc9dee32cd57034769->enter($__internal_66daa06d731e8b68132b43385d3430f0c2eb888fd483c9dc9dee32cd57034769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_66daa06d731e8b68132b43385d3430f0c2eb888fd483c9dc9dee32cd57034769->leave($__internal_66daa06d731e8b68132b43385d3430f0c2eb888fd483c9dc9dee32cd57034769_prof);

        
        $__internal_6c9be3a8052ec3114e4eec20a97d538603207330a20100de175b1db0ab809f26->leave($__internal_6c9be3a8052ec3114e4eec20a97d538603207330a20100de175b1db0ab809f26_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
