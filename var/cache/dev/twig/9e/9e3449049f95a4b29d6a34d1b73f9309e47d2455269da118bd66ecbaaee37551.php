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
        $__internal_09cb9ed0d33ef2b4528dbe663f0fb3098b9c551c2e36c99b89412cc8e5152f8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09cb9ed0d33ef2b4528dbe663f0fb3098b9c551c2e36c99b89412cc8e5152f8d->enter($__internal_09cb9ed0d33ef2b4528dbe663f0fb3098b9c551c2e36c99b89412cc8e5152f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_d8b8caf24edfdea5df52d0748e50266e4dd85a546eb4ee15b1b9dd6a8543d91e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8b8caf24edfdea5df52d0748e50266e4dd85a546eb4ee15b1b9dd6a8543d91e->enter($__internal_d8b8caf24edfdea5df52d0748e50266e4dd85a546eb4ee15b1b9dd6a8543d91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_09cb9ed0d33ef2b4528dbe663f0fb3098b9c551c2e36c99b89412cc8e5152f8d->leave($__internal_09cb9ed0d33ef2b4528dbe663f0fb3098b9c551c2e36c99b89412cc8e5152f8d_prof);

        
        $__internal_d8b8caf24edfdea5df52d0748e50266e4dd85a546eb4ee15b1b9dd6a8543d91e->leave($__internal_d8b8caf24edfdea5df52d0748e50266e4dd85a546eb4ee15b1b9dd6a8543d91e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_93d545a0cb5ef42363235f47e19348a551086085469b16b744e3ab009083b06b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93d545a0cb5ef42363235f47e19348a551086085469b16b744e3ab009083b06b->enter($__internal_93d545a0cb5ef42363235f47e19348a551086085469b16b744e3ab009083b06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ebb59aec45ebe527c4d05f1a49aec6813434c30203429890ef0704a11aa359f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebb59aec45ebe527c4d05f1a49aec6813434c30203429890ef0704a11aa359f5->enter($__internal_ebb59aec45ebe527c4d05f1a49aec6813434c30203429890ef0704a11aa359f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ebb59aec45ebe527c4d05f1a49aec6813434c30203429890ef0704a11aa359f5->leave($__internal_ebb59aec45ebe527c4d05f1a49aec6813434c30203429890ef0704a11aa359f5_prof);

        
        $__internal_93d545a0cb5ef42363235f47e19348a551086085469b16b744e3ab009083b06b->leave($__internal_93d545a0cb5ef42363235f47e19348a551086085469b16b744e3ab009083b06b_prof);

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
