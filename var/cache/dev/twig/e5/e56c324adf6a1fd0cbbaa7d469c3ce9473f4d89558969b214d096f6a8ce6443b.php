<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_616a384f17e2363ede392bee12634cfef95cbc58c85db606a104ea197d450167 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_f0677bd7db2a500d914c88656d9c5991e5750a4ce2143e72f157b0ccb0b2dafb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0677bd7db2a500d914c88656d9c5991e5750a4ce2143e72f157b0ccb0b2dafb->enter($__internal_f0677bd7db2a500d914c88656d9c5991e5750a4ce2143e72f157b0ccb0b2dafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_5e0df45d7bfaad528636788e1538bd813146a622b0f6e1ef0d5ea84afea97a50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e0df45d7bfaad528636788e1538bd813146a622b0f6e1ef0d5ea84afea97a50->enter($__internal_5e0df45d7bfaad528636788e1538bd813146a622b0f6e1ef0d5ea84afea97a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0677bd7db2a500d914c88656d9c5991e5750a4ce2143e72f157b0ccb0b2dafb->leave($__internal_f0677bd7db2a500d914c88656d9c5991e5750a4ce2143e72f157b0ccb0b2dafb_prof);

        
        $__internal_5e0df45d7bfaad528636788e1538bd813146a622b0f6e1ef0d5ea84afea97a50->leave($__internal_5e0df45d7bfaad528636788e1538bd813146a622b0f6e1ef0d5ea84afea97a50_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3ec3cbf6eeda095ead92cb47eee27332d1f258064e3c991099769891680af99f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ec3cbf6eeda095ead92cb47eee27332d1f258064e3c991099769891680af99f->enter($__internal_3ec3cbf6eeda095ead92cb47eee27332d1f258064e3c991099769891680af99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3b65c75735b08e97b09edbb20ecd72b2347aca0e802ae9c3c28694dc0aa76aa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b65c75735b08e97b09edbb20ecd72b2347aca0e802ae9c3c28694dc0aa76aa5->enter($__internal_3b65c75735b08e97b09edbb20ecd72b2347aca0e802ae9c3c28694dc0aa76aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_3b65c75735b08e97b09edbb20ecd72b2347aca0e802ae9c3c28694dc0aa76aa5->leave($__internal_3b65c75735b08e97b09edbb20ecd72b2347aca0e802ae9c3c28694dc0aa76aa5_prof);

        
        $__internal_3ec3cbf6eeda095ead92cb47eee27332d1f258064e3c991099769891680af99f->leave($__internal_3ec3cbf6eeda095ead92cb47eee27332d1f258064e3c991099769891680af99f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register.html.twig");
    }
}
