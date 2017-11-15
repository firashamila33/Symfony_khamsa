<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_52be6cd1e8fc229fbf680366a9710ebdce616e2af605dfcaa25ee7e14417f6fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_21a81f6316a5b47153de7050cb3ff899bb0103de886948f23381f246df188c9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21a81f6316a5b47153de7050cb3ff899bb0103de886948f23381f246df188c9b->enter($__internal_21a81f6316a5b47153de7050cb3ff899bb0103de886948f23381f246df188c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_47c938d1a9944c5b7872270c847947b3d280ec91768c7de0f7047d4e9478d3e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47c938d1a9944c5b7872270c847947b3d280ec91768c7de0f7047d4e9478d3e8->enter($__internal_47c938d1a9944c5b7872270c847947b3d280ec91768c7de0f7047d4e9478d3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21a81f6316a5b47153de7050cb3ff899bb0103de886948f23381f246df188c9b->leave($__internal_21a81f6316a5b47153de7050cb3ff899bb0103de886948f23381f246df188c9b_prof);

        
        $__internal_47c938d1a9944c5b7872270c847947b3d280ec91768c7de0f7047d4e9478d3e8->leave($__internal_47c938d1a9944c5b7872270c847947b3d280ec91768c7de0f7047d4e9478d3e8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f474beaa69d6b78680433885df00fe720d536e0c603fcd2062cd3091873752c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f474beaa69d6b78680433885df00fe720d536e0c603fcd2062cd3091873752c5->enter($__internal_f474beaa69d6b78680433885df00fe720d536e0c603fcd2062cd3091873752c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c00f486d86a4ba4271164ee6d14b7382a91957f72bdfb27017ec33370c2bff5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c00f486d86a4ba4271164ee6d14b7382a91957f72bdfb27017ec33370c2bff5a->enter($__internal_c00f486d86a4ba4271164ee6d14b7382a91957f72bdfb27017ec33370c2bff5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_c00f486d86a4ba4271164ee6d14b7382a91957f72bdfb27017ec33370c2bff5a->leave($__internal_c00f486d86a4ba4271164ee6d14b7382a91957f72bdfb27017ec33370c2bff5a_prof);

        
        $__internal_f474beaa69d6b78680433885df00fe720d536e0c603fcd2062cd3091873752c5->leave($__internal_f474beaa69d6b78680433885df00fe720d536e0c603fcd2062cd3091873752c5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list.html.twig");
    }
}
