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
        $__internal_a5448eefc80f2aa7498feaca9d78682b921d7f048c6cc3dae88ebbb706b21a6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5448eefc80f2aa7498feaca9d78682b921d7f048c6cc3dae88ebbb706b21a6d->enter($__internal_a5448eefc80f2aa7498feaca9d78682b921d7f048c6cc3dae88ebbb706b21a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_548ea14831537757a01df009b12db24338744640b592ac6a170b4f302b71d884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_548ea14831537757a01df009b12db24338744640b592ac6a170b4f302b71d884->enter($__internal_548ea14831537757a01df009b12db24338744640b592ac6a170b4f302b71d884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5448eefc80f2aa7498feaca9d78682b921d7f048c6cc3dae88ebbb706b21a6d->leave($__internal_a5448eefc80f2aa7498feaca9d78682b921d7f048c6cc3dae88ebbb706b21a6d_prof);

        
        $__internal_548ea14831537757a01df009b12db24338744640b592ac6a170b4f302b71d884->leave($__internal_548ea14831537757a01df009b12db24338744640b592ac6a170b4f302b71d884_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cd7edee8b159a24adffc7707f555bd15fc479a4a5518facb00f7d486b9786e75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd7edee8b159a24adffc7707f555bd15fc479a4a5518facb00f7d486b9786e75->enter($__internal_cd7edee8b159a24adffc7707f555bd15fc479a4a5518facb00f7d486b9786e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_81c9cdf1eef21f2bfe834bda3f0150f98d33f13aa3f3b0c5e005f07a4a4df3da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81c9cdf1eef21f2bfe834bda3f0150f98d33f13aa3f3b0c5e005f07a4a4df3da->enter($__internal_81c9cdf1eef21f2bfe834bda3f0150f98d33f13aa3f3b0c5e005f07a4a4df3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_81c9cdf1eef21f2bfe834bda3f0150f98d33f13aa3f3b0c5e005f07a4a4df3da->leave($__internal_81c9cdf1eef21f2bfe834bda3f0150f98d33f13aa3f3b0c5e005f07a4a4df3da_prof);

        
        $__internal_cd7edee8b159a24adffc7707f555bd15fc479a4a5518facb00f7d486b9786e75->leave($__internal_cd7edee8b159a24adffc7707f555bd15fc479a4a5518facb00f7d486b9786e75_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c4671f53300b8bf9a872c0774bb166d69283dadd07e9a8a5a2064430144cb64d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4671f53300b8bf9a872c0774bb166d69283dadd07e9a8a5a2064430144cb64d->enter($__internal_c4671f53300b8bf9a872c0774bb166d69283dadd07e9a8a5a2064430144cb64d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_62ba471568ac3d772be84464c956bd7397362327e9bf94b85ea5fd551e2d3905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62ba471568ac3d772be84464c956bd7397362327e9bf94b85ea5fd551e2d3905->enter($__internal_62ba471568ac3d772be84464c956bd7397362327e9bf94b85ea5fd551e2d3905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_62ba471568ac3d772be84464c956bd7397362327e9bf94b85ea5fd551e2d3905->leave($__internal_62ba471568ac3d772be84464c956bd7397362327e9bf94b85ea5fd551e2d3905_prof);

        
        $__internal_c4671f53300b8bf9a872c0774bb166d69283dadd07e9a8a5a2064430144cb64d->leave($__internal_c4671f53300b8bf9a872c0774bb166d69283dadd07e9a8a5a2064430144cb64d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7dadb04f7c42ba7991a5259221a49b83e969333f564ea6e086a4a0d13621d75b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dadb04f7c42ba7991a5259221a49b83e969333f564ea6e086a4a0d13621d75b->enter($__internal_7dadb04f7c42ba7991a5259221a49b83e969333f564ea6e086a4a0d13621d75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_accbb0136e78725839a01020b1d4b9894db9e437a6ce0816f189cdaa49c72a9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_accbb0136e78725839a01020b1d4b9894db9e437a6ce0816f189cdaa49c72a9d->enter($__internal_accbb0136e78725839a01020b1d4b9894db9e437a6ce0816f189cdaa49c72a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_accbb0136e78725839a01020b1d4b9894db9e437a6ce0816f189cdaa49c72a9d->leave($__internal_accbb0136e78725839a01020b1d4b9894db9e437a6ce0816f189cdaa49c72a9d_prof);

        
        $__internal_7dadb04f7c42ba7991a5259221a49b83e969333f564ea6e086a4a0d13621d75b->leave($__internal_7dadb04f7c42ba7991a5259221a49b83e969333f564ea6e086a4a0d13621d75b_prof);

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
