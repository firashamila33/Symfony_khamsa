<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_1dbba51ded70b2b65f0164c20bc79eabf9536dd18ccef5721b5e87215fcb9907 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c5ba40a4fc272c05c58457bccf3f05aff4dbd1b7c81938f920a9da65a1da8f3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5ba40a4fc272c05c58457bccf3f05aff4dbd1b7c81938f920a9da65a1da8f3c->enter($__internal_c5ba40a4fc272c05c58457bccf3f05aff4dbd1b7c81938f920a9da65a1da8f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_4a292b93f7b79d350efc97b97156229575e95b2ed08d0a7f38628a937ce4ce4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a292b93f7b79d350efc97b97156229575e95b2ed08d0a7f38628a937ce4ce4a->enter($__internal_4a292b93f7b79d350efc97b97156229575e95b2ed08d0a7f38628a937ce4ce4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5ba40a4fc272c05c58457bccf3f05aff4dbd1b7c81938f920a9da65a1da8f3c->leave($__internal_c5ba40a4fc272c05c58457bccf3f05aff4dbd1b7c81938f920a9da65a1da8f3c_prof);

        
        $__internal_4a292b93f7b79d350efc97b97156229575e95b2ed08d0a7f38628a937ce4ce4a->leave($__internal_4a292b93f7b79d350efc97b97156229575e95b2ed08d0a7f38628a937ce4ce4a_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_5fef34020074ce86c62c98ae88a0bacbd369b546062a77b045f1bfce15c95f70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fef34020074ce86c62c98ae88a0bacbd369b546062a77b045f1bfce15c95f70->enter($__internal_5fef34020074ce86c62c98ae88a0bacbd369b546062a77b045f1bfce15c95f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_6a52c4960cad51df0a43376437a9f9f1017cef70f1fc9b7430dab52b6f5beaa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a52c4960cad51df0a43376437a9f9f1017cef70f1fc9b7430dab52b6f5beaa4->enter($__internal_6a52c4960cad51df0a43376437a9f9f1017cef70f1fc9b7430dab52b6f5beaa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_6a52c4960cad51df0a43376437a9f9f1017cef70f1fc9b7430dab52b6f5beaa4->leave($__internal_6a52c4960cad51df0a43376437a9f9f1017cef70f1fc9b7430dab52b6f5beaa4_prof);

        
        $__internal_5fef34020074ce86c62c98ae88a0bacbd369b546062a77b045f1bfce15c95f70->leave($__internal_5fef34020074ce86c62c98ae88a0bacbd369b546062a77b045f1bfce15c95f70_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_725f614ace0a0e994696d3edd7890a32a14c6998908b57f6041f1793f909c204 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_725f614ace0a0e994696d3edd7890a32a14c6998908b57f6041f1793f909c204->enter($__internal_725f614ace0a0e994696d3edd7890a32a14c6998908b57f6041f1793f909c204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_97c406b8b1aed6398be66db63eb235e236fc19f74d09755965411076b79cc1a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97c406b8b1aed6398be66db63eb235e236fc19f74d09755965411076b79cc1a5->enter($__internal_97c406b8b1aed6398be66db63eb235e236fc19f74d09755965411076b79cc1a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_97c406b8b1aed6398be66db63eb235e236fc19f74d09755965411076b79cc1a5->leave($__internal_97c406b8b1aed6398be66db63eb235e236fc19f74d09755965411076b79cc1a5_prof);

        
        $__internal_725f614ace0a0e994696d3edd7890a32a14c6998908b57f6041f1793f909c204->leave($__internal_725f614ace0a0e994696d3edd7890a32a14c6998908b57f6041f1793f909c204_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
