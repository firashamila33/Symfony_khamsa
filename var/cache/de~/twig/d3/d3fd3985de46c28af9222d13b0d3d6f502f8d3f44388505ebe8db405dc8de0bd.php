<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_fe4127636ff3437d49fb74bcb18710e782bb94e031d351582a33ca45f397e730 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_c33f1eb187916688b1f0fa2bfd8148fe96cb5ee98b2b2497e8cdd9d7b9148e52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c33f1eb187916688b1f0fa2bfd8148fe96cb5ee98b2b2497e8cdd9d7b9148e52->enter($__internal_c33f1eb187916688b1f0fa2bfd8148fe96cb5ee98b2b2497e8cdd9d7b9148e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_202d895dc07559e96cba51ccd4e0f8b2254b0e4c4c42f5595bdd2ff72776eea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_202d895dc07559e96cba51ccd4e0f8b2254b0e4c4c42f5595bdd2ff72776eea3->enter($__internal_202d895dc07559e96cba51ccd4e0f8b2254b0e4c4c42f5595bdd2ff72776eea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c33f1eb187916688b1f0fa2bfd8148fe96cb5ee98b2b2497e8cdd9d7b9148e52->leave($__internal_c33f1eb187916688b1f0fa2bfd8148fe96cb5ee98b2b2497e8cdd9d7b9148e52_prof);

        
        $__internal_202d895dc07559e96cba51ccd4e0f8b2254b0e4c4c42f5595bdd2ff72776eea3->leave($__internal_202d895dc07559e96cba51ccd4e0f8b2254b0e4c4c42f5595bdd2ff72776eea3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_527a2e31dba3c7d465b8274ecaa895c187c9f4c07e20c582bbc60ecf8c500a88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_527a2e31dba3c7d465b8274ecaa895c187c9f4c07e20c582bbc60ecf8c500a88->enter($__internal_527a2e31dba3c7d465b8274ecaa895c187c9f4c07e20c582bbc60ecf8c500a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c1262baadb2c73fe1d20884b8419c6a34211ed7921f7fcdef78d2d9b2f59fbf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1262baadb2c73fe1d20884b8419c6a34211ed7921f7fcdef78d2d9b2f59fbf5->enter($__internal_c1262baadb2c73fe1d20884b8419c6a34211ed7921f7fcdef78d2d9b2f59fbf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_c1262baadb2c73fe1d20884b8419c6a34211ed7921f7fcdef78d2d9b2f59fbf5->leave($__internal_c1262baadb2c73fe1d20884b8419c6a34211ed7921f7fcdef78d2d9b2f59fbf5_prof);

        
        $__internal_527a2e31dba3c7d465b8274ecaa895c187c9f4c07e20c582bbc60ecf8c500a88->leave($__internal_527a2e31dba3c7d465b8274ecaa895c187c9f4c07e20c582bbc60ecf8c500a88_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
