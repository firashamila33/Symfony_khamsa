<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_9999e561e97c7d82641790bb34f8bc4755632d88fa346b3928b7f70f606bf09e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_355f97ef450c72a3900f5a96d891d7c6c40410b3dc35a3c53c227c633feb4847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_355f97ef450c72a3900f5a96d891d7c6c40410b3dc35a3c53c227c633feb4847->enter($__internal_355f97ef450c72a3900f5a96d891d7c6c40410b3dc35a3c53c227c633feb4847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_e4c47577ea4907f4edc02c84fc5490d265a760658d126654347ca298bdd0de01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4c47577ea4907f4edc02c84fc5490d265a760658d126654347ca298bdd0de01->enter($__internal_e4c47577ea4907f4edc02c84fc5490d265a760658d126654347ca298bdd0de01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_355f97ef450c72a3900f5a96d891d7c6c40410b3dc35a3c53c227c633feb4847->leave($__internal_355f97ef450c72a3900f5a96d891d7c6c40410b3dc35a3c53c227c633feb4847_prof);

        
        $__internal_e4c47577ea4907f4edc02c84fc5490d265a760658d126654347ca298bdd0de01->leave($__internal_e4c47577ea4907f4edc02c84fc5490d265a760658d126654347ca298bdd0de01_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c5c2df582177286757901020d24e729f26fd7d5ae19da8d09b2004f497860a0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5c2df582177286757901020d24e729f26fd7d5ae19da8d09b2004f497860a0a->enter($__internal_c5c2df582177286757901020d24e729f26fd7d5ae19da8d09b2004f497860a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_871110d2855d6585b02485b81a778a67358485c2a6dc0db028da5f9fd43b1401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_871110d2855d6585b02485b81a778a67358485c2a6dc0db028da5f9fd43b1401->enter($__internal_871110d2855d6585b02485b81a778a67358485c2a6dc0db028da5f9fd43b1401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_871110d2855d6585b02485b81a778a67358485c2a6dc0db028da5f9fd43b1401->leave($__internal_871110d2855d6585b02485b81a778a67358485c2a6dc0db028da5f9fd43b1401_prof);

        
        $__internal_c5c2df582177286757901020d24e729f26fd7d5ae19da8d09b2004f497860a0a->leave($__internal_c5c2df582177286757901020d24e729f26fd7d5ae19da8d09b2004f497860a0a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_928a9c6702b095f617a67a36a5f72aa96fef189d2a171977bcf75c3324a6d2b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_928a9c6702b095f617a67a36a5f72aa96fef189d2a171977bcf75c3324a6d2b2->enter($__internal_928a9c6702b095f617a67a36a5f72aa96fef189d2a171977bcf75c3324a6d2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6e931054c79c29be7d36e58a20ef69f35c7d67d2d97951e7c3088b0ab2cbad1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e931054c79c29be7d36e58a20ef69f35c7d67d2d97951e7c3088b0ab2cbad1a->enter($__internal_6e931054c79c29be7d36e58a20ef69f35c7d67d2d97951e7c3088b0ab2cbad1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6e931054c79c29be7d36e58a20ef69f35c7d67d2d97951e7c3088b0ab2cbad1a->leave($__internal_6e931054c79c29be7d36e58a20ef69f35c7d67d2d97951e7c3088b0ab2cbad1a_prof);

        
        $__internal_928a9c6702b095f617a67a36a5f72aa96fef189d2a171977bcf75c3324a6d2b2->leave($__internal_928a9c6702b095f617a67a36a5f72aa96fef189d2a171977bcf75c3324a6d2b2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bfab8b14f5d9f9b1dd638b3f028c00232d2ab8d6e6c9d234136c6a2856582152 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfab8b14f5d9f9b1dd638b3f028c00232d2ab8d6e6c9d234136c6a2856582152->enter($__internal_bfab8b14f5d9f9b1dd638b3f028c00232d2ab8d6e6c9d234136c6a2856582152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_12f205eec348422c27bcbc44889b0a9443638c81791af3cea763ace0fb01db82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12f205eec348422c27bcbc44889b0a9443638c81791af3cea763ace0fb01db82->enter($__internal_12f205eec348422c27bcbc44889b0a9443638c81791af3cea763ace0fb01db82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_12f205eec348422c27bcbc44889b0a9443638c81791af3cea763ace0fb01db82->leave($__internal_12f205eec348422c27bcbc44889b0a9443638c81791af3cea763ace0fb01db82_prof);

        
        $__internal_bfab8b14f5d9f9b1dd638b3f028c00232d2ab8d6e6c9d234136c6a2856582152->leave($__internal_bfab8b14f5d9f9b1dd638b3f028c00232d2ab8d6e6c9d234136c6a2856582152_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
