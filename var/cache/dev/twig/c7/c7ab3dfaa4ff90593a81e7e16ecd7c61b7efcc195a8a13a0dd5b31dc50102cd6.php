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
        $__internal_7921218d6feddf7e832b97c0200a027a098ccd3f97f9006496f007b340f1702e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7921218d6feddf7e832b97c0200a027a098ccd3f97f9006496f007b340f1702e->enter($__internal_7921218d6feddf7e832b97c0200a027a098ccd3f97f9006496f007b340f1702e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_dc2f70e387b75e4a4a3aa9fe533321678ed4fefb2b09f9cd0b98ef0e1427aead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc2f70e387b75e4a4a3aa9fe533321678ed4fefb2b09f9cd0b98ef0e1427aead->enter($__internal_dc2f70e387b75e4a4a3aa9fe533321678ed4fefb2b09f9cd0b98ef0e1427aead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7921218d6feddf7e832b97c0200a027a098ccd3f97f9006496f007b340f1702e->leave($__internal_7921218d6feddf7e832b97c0200a027a098ccd3f97f9006496f007b340f1702e_prof);

        
        $__internal_dc2f70e387b75e4a4a3aa9fe533321678ed4fefb2b09f9cd0b98ef0e1427aead->leave($__internal_dc2f70e387b75e4a4a3aa9fe533321678ed4fefb2b09f9cd0b98ef0e1427aead_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9f495fbb590817b4e8bd62d64cb4bda8a0fac1df8bcc666ffc3042831a783c87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f495fbb590817b4e8bd62d64cb4bda8a0fac1df8bcc666ffc3042831a783c87->enter($__internal_9f495fbb590817b4e8bd62d64cb4bda8a0fac1df8bcc666ffc3042831a783c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ee4d3f54dfcdbf6a007ff069e2058fe51643fc2f66cbc2f28a4b5fb7196a9e68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee4d3f54dfcdbf6a007ff069e2058fe51643fc2f66cbc2f28a4b5fb7196a9e68->enter($__internal_ee4d3f54dfcdbf6a007ff069e2058fe51643fc2f66cbc2f28a4b5fb7196a9e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ee4d3f54dfcdbf6a007ff069e2058fe51643fc2f66cbc2f28a4b5fb7196a9e68->leave($__internal_ee4d3f54dfcdbf6a007ff069e2058fe51643fc2f66cbc2f28a4b5fb7196a9e68_prof);

        
        $__internal_9f495fbb590817b4e8bd62d64cb4bda8a0fac1df8bcc666ffc3042831a783c87->leave($__internal_9f495fbb590817b4e8bd62d64cb4bda8a0fac1df8bcc666ffc3042831a783c87_prof);

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
