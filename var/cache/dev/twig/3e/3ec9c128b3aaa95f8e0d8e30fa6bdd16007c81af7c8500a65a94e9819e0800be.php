<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_096c7a840cf4df77a5537836c3f466ca6a43e10f2ad98029c59d0f3ea45b5742 extends Twig_Template
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
        $__internal_dfe6a9337b52f90021d3533766f3c614e8157cb0efdb3f8384645b9e47b12d97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfe6a9337b52f90021d3533766f3c614e8157cb0efdb3f8384645b9e47b12d97->enter($__internal_dfe6a9337b52f90021d3533766f3c614e8157cb0efdb3f8384645b9e47b12d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_34f961dd11c3b8e3455e759b8c200d1d2830b784ee6b2cae56b62ee85b3d9e29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34f961dd11c3b8e3455e759b8c200d1d2830b784ee6b2cae56b62ee85b3d9e29->enter($__internal_34f961dd11c3b8e3455e759b8c200d1d2830b784ee6b2cae56b62ee85b3d9e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_dfe6a9337b52f90021d3533766f3c614e8157cb0efdb3f8384645b9e47b12d97->leave($__internal_dfe6a9337b52f90021d3533766f3c614e8157cb0efdb3f8384645b9e47b12d97_prof);

        
        $__internal_34f961dd11c3b8e3455e759b8c200d1d2830b784ee6b2cae56b62ee85b3d9e29->leave($__internal_34f961dd11c3b8e3455e759b8c200d1d2830b784ee6b2cae56b62ee85b3d9e29_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a6cb3c67bdf8beaa009cd5272240e29c01bd84bc2ece9a3ca5036a0485a65890 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6cb3c67bdf8beaa009cd5272240e29c01bd84bc2ece9a3ca5036a0485a65890->enter($__internal_a6cb3c67bdf8beaa009cd5272240e29c01bd84bc2ece9a3ca5036a0485a65890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_15b619e26168abbecc3eb2e0c79ab2a1804becdbee560c684cd39b253bef50d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15b619e26168abbecc3eb2e0c79ab2a1804becdbee560c684cd39b253bef50d6->enter($__internal_15b619e26168abbecc3eb2e0c79ab2a1804becdbee560c684cd39b253bef50d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_15b619e26168abbecc3eb2e0c79ab2a1804becdbee560c684cd39b253bef50d6->leave($__internal_15b619e26168abbecc3eb2e0c79ab2a1804becdbee560c684cd39b253bef50d6_prof);

        
        $__internal_a6cb3c67bdf8beaa009cd5272240e29c01bd84bc2ece9a3ca5036a0485a65890->leave($__internal_a6cb3c67bdf8beaa009cd5272240e29c01bd84bc2ece9a3ca5036a0485a65890_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
