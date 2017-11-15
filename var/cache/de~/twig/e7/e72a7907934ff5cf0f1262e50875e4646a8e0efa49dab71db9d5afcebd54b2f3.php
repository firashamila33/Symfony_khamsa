<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_7efe59fd45d88a2d3992e5f0d3ccc064a93f955ca09501ecf6fe9d6c3c95910a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_971cf8b1d9d9d0b5a63983a8b13d2610a5add84e9e36ad5a2ec2140d643f4e7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_971cf8b1d9d9d0b5a63983a8b13d2610a5add84e9e36ad5a2ec2140d643f4e7f->enter($__internal_971cf8b1d9d9d0b5a63983a8b13d2610a5add84e9e36ad5a2ec2140d643f4e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_f15d7a002e9210b898c97caf07cd3552557a3ec8e9b06672c2447b21415c6845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f15d7a002e9210b898c97caf07cd3552557a3ec8e9b06672c2447b21415c6845->enter($__internal_f15d7a002e9210b898c97caf07cd3552557a3ec8e9b06672c2447b21415c6845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_971cf8b1d9d9d0b5a63983a8b13d2610a5add84e9e36ad5a2ec2140d643f4e7f->leave($__internal_971cf8b1d9d9d0b5a63983a8b13d2610a5add84e9e36ad5a2ec2140d643f4e7f_prof);

        
        $__internal_f15d7a002e9210b898c97caf07cd3552557a3ec8e9b06672c2447b21415c6845->leave($__internal_f15d7a002e9210b898c97caf07cd3552557a3ec8e9b06672c2447b21415c6845_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_41b4e8c5ed6d492428d8cd8acc03e2128d34768b936201f8de6ec66463f35162 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41b4e8c5ed6d492428d8cd8acc03e2128d34768b936201f8de6ec66463f35162->enter($__internal_41b4e8c5ed6d492428d8cd8acc03e2128d34768b936201f8de6ec66463f35162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ac346b405e1e43e60368da36294f446dfad05ee02b3aebd86ea63daab6254c3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac346b405e1e43e60368da36294f446dfad05ee02b3aebd86ea63daab6254c3e->enter($__internal_ac346b405e1e43e60368da36294f446dfad05ee02b3aebd86ea63daab6254c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_ac346b405e1e43e60368da36294f446dfad05ee02b3aebd86ea63daab6254c3e->leave($__internal_ac346b405e1e43e60368da36294f446dfad05ee02b3aebd86ea63daab6254c3e_prof);

        
        $__internal_41b4e8c5ed6d492428d8cd8acc03e2128d34768b936201f8de6ec66463f35162->leave($__internal_41b4e8c5ed6d492428d8cd8acc03e2128d34768b936201f8de6ec66463f35162_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
