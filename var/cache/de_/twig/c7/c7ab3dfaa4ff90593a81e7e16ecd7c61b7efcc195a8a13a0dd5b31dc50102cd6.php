<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_b8f70f44f5e1877f9a80dbc5b25691146f41bc52907a64854c6e265d0152b7ec extends Twig_Template
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
        $__internal_48776003cdc3cd59e9d4e7ce637685471367dc372fa310d7a9b22c6e74cf3639 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48776003cdc3cd59e9d4e7ce637685471367dc372fa310d7a9b22c6e74cf3639->enter($__internal_48776003cdc3cd59e9d4e7ce637685471367dc372fa310d7a9b22c6e74cf3639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_44bafd7a3c566801bb27a925af173996dda6079d9119f06d62571094c91a86fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44bafd7a3c566801bb27a925af173996dda6079d9119f06d62571094c91a86fa->enter($__internal_44bafd7a3c566801bb27a925af173996dda6079d9119f06d62571094c91a86fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_48776003cdc3cd59e9d4e7ce637685471367dc372fa310d7a9b22c6e74cf3639->leave($__internal_48776003cdc3cd59e9d4e7ce637685471367dc372fa310d7a9b22c6e74cf3639_prof);

        
        $__internal_44bafd7a3c566801bb27a925af173996dda6079d9119f06d62571094c91a86fa->leave($__internal_44bafd7a3c566801bb27a925af173996dda6079d9119f06d62571094c91a86fa_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cc2150f5b2134522c59fcaa1ce3dcc50943b6def1e75e92de7f93d306677debc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc2150f5b2134522c59fcaa1ce3dcc50943b6def1e75e92de7f93d306677debc->enter($__internal_cc2150f5b2134522c59fcaa1ce3dcc50943b6def1e75e92de7f93d306677debc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9de5985577089ab9ff3deb4f4b5699ab10f62d9083c1ad7c997209d36ded38e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9de5985577089ab9ff3deb4f4b5699ab10f62d9083c1ad7c997209d36ded38e5->enter($__internal_9de5985577089ab9ff3deb4f4b5699ab10f62d9083c1ad7c997209d36ded38e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9de5985577089ab9ff3deb4f4b5699ab10f62d9083c1ad7c997209d36ded38e5->leave($__internal_9de5985577089ab9ff3deb4f4b5699ab10f62d9083c1ad7c997209d36ded38e5_prof);

        
        $__internal_cc2150f5b2134522c59fcaa1ce3dcc50943b6def1e75e92de7f93d306677debc->leave($__internal_cc2150f5b2134522c59fcaa1ce3dcc50943b6def1e75e92de7f93d306677debc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
