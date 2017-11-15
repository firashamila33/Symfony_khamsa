<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_6836c2eddc2edf37801f6ee37d4d9210ff6a9f258be12f35a0a216e4fd2ea004 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_3c5c54877a06758a459b398cec0fb2d3fbbcf84da58f250af49d0aea638e76c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c5c54877a06758a459b398cec0fb2d3fbbcf84da58f250af49d0aea638e76c3->enter($__internal_3c5c54877a06758a459b398cec0fb2d3fbbcf84da58f250af49d0aea638e76c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_2b3f2609b63d923b26e69b9b9e3d2c481c85b9500cf2eba58931d82ae132fef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b3f2609b63d923b26e69b9b9e3d2c481c85b9500cf2eba58931d82ae132fef6->enter($__internal_2b3f2609b63d923b26e69b9b9e3d2c481c85b9500cf2eba58931d82ae132fef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c5c54877a06758a459b398cec0fb2d3fbbcf84da58f250af49d0aea638e76c3->leave($__internal_3c5c54877a06758a459b398cec0fb2d3fbbcf84da58f250af49d0aea638e76c3_prof);

        
        $__internal_2b3f2609b63d923b26e69b9b9e3d2c481c85b9500cf2eba58931d82ae132fef6->leave($__internal_2b3f2609b63d923b26e69b9b9e3d2c481c85b9500cf2eba58931d82ae132fef6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_24351781f615414a9d57b0a3a6956d0df7bf15d8cc418a578402275b824077be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24351781f615414a9d57b0a3a6956d0df7bf15d8cc418a578402275b824077be->enter($__internal_24351781f615414a9d57b0a3a6956d0df7bf15d8cc418a578402275b824077be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2e8b530b2a074c09066ed40874f27b3bf58bb265426b40481eba054b7f493d3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e8b530b2a074c09066ed40874f27b3bf58bb265426b40481eba054b7f493d3d->enter($__internal_2e8b530b2a074c09066ed40874f27b3bf58bb265426b40481eba054b7f493d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_2e8b530b2a074c09066ed40874f27b3bf58bb265426b40481eba054b7f493d3d->leave($__internal_2e8b530b2a074c09066ed40874f27b3bf58bb265426b40481eba054b7f493d3d_prof);

        
        $__internal_24351781f615414a9d57b0a3a6956d0df7bf15d8cc418a578402275b824077be->leave($__internal_24351781f615414a9d57b0a3a6956d0df7bf15d8cc418a578402275b824077be_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show.html.twig");
    }
}
