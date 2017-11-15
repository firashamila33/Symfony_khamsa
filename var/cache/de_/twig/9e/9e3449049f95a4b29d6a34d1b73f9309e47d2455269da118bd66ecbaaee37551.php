<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_c39d8a3a4ac5a2bd8bc6b6f5ee0f399454d54b0a854ebc00ee7fc2ff4c05d568 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2590af7efbf6c289d23817e2d5bef7c93559f3ada8b6c98a92b534f9de0df95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2590af7efbf6c289d23817e2d5bef7c93559f3ada8b6c98a92b534f9de0df95->enter($__internal_c2590af7efbf6c289d23817e2d5bef7c93559f3ada8b6c98a92b534f9de0df95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_79de07db163bdbaccb85c14e407536a6698f1e9010cff2c1e5dea3afd89fa517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79de07db163bdbaccb85c14e407536a6698f1e9010cff2c1e5dea3afd89fa517->enter($__internal_79de07db163bdbaccb85c14e407536a6698f1e9010cff2c1e5dea3afd89fa517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c2590af7efbf6c289d23817e2d5bef7c93559f3ada8b6c98a92b534f9de0df95->leave($__internal_c2590af7efbf6c289d23817e2d5bef7c93559f3ada8b6c98a92b534f9de0df95_prof);

        
        $__internal_79de07db163bdbaccb85c14e407536a6698f1e9010cff2c1e5dea3afd89fa517->leave($__internal_79de07db163bdbaccb85c14e407536a6698f1e9010cff2c1e5dea3afd89fa517_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8cfc0e36126cdfc01ebe49c881f83fa96c3321dd671708a876266d8b922b7d48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cfc0e36126cdfc01ebe49c881f83fa96c3321dd671708a876266d8b922b7d48->enter($__internal_8cfc0e36126cdfc01ebe49c881f83fa96c3321dd671708a876266d8b922b7d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f7eec8882ab205d4122a5f47dfb8c3ac3a5d4d47c5ccee07f8bad59384d193c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7eec8882ab205d4122a5f47dfb8c3ac3a5d4d47c5ccee07f8bad59384d193c7->enter($__internal_f7eec8882ab205d4122a5f47dfb8c3ac3a5d4d47c5ccee07f8bad59384d193c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f7eec8882ab205d4122a5f47dfb8c3ac3a5d4d47c5ccee07f8bad59384d193c7->leave($__internal_f7eec8882ab205d4122a5f47dfb8c3ac3a5d4d47c5ccee07f8bad59384d193c7_prof);

        
        $__internal_8cfc0e36126cdfc01ebe49c881f83fa96c3321dd671708a876266d8b922b7d48->leave($__internal_8cfc0e36126cdfc01ebe49c881f83fa96c3321dd671708a876266d8b922b7d48_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
