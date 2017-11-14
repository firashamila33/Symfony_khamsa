<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_7063171002d43b1efdf7790f9e2533b8a76f21e489d0871dd83343ef050dea56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_e99c695d57f824a60a29b950a55ff99f47851bb22ecd6c7a3c571bde9525ac9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e99c695d57f824a60a29b950a55ff99f47851bb22ecd6c7a3c571bde9525ac9a->enter($__internal_e99c695d57f824a60a29b950a55ff99f47851bb22ecd6c7a3c571bde9525ac9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_5ee560b817852140d67c1eee6e8a81212e071ab1a308fd5b0c5c5d8fd569e4ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ee560b817852140d67c1eee6e8a81212e071ab1a308fd5b0c5c5d8fd569e4ca->enter($__internal_5ee560b817852140d67c1eee6e8a81212e071ab1a308fd5b0c5c5d8fd569e4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e99c695d57f824a60a29b950a55ff99f47851bb22ecd6c7a3c571bde9525ac9a->leave($__internal_e99c695d57f824a60a29b950a55ff99f47851bb22ecd6c7a3c571bde9525ac9a_prof);

        
        $__internal_5ee560b817852140d67c1eee6e8a81212e071ab1a308fd5b0c5c5d8fd569e4ca->leave($__internal_5ee560b817852140d67c1eee6e8a81212e071ab1a308fd5b0c5c5d8fd569e4ca_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8c91280bd82e2ce535b50fa2b07d54a1bf87a9e0e1e78532ea2fd0bda0db555e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c91280bd82e2ce535b50fa2b07d54a1bf87a9e0e1e78532ea2fd0bda0db555e->enter($__internal_8c91280bd82e2ce535b50fa2b07d54a1bf87a9e0e1e78532ea2fd0bda0db555e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_03fab2ab976a6c4bc06bf49d21626720a4874123f32ae1de7349eaee9e06b09f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03fab2ab976a6c4bc06bf49d21626720a4874123f32ae1de7349eaee9e06b09f->enter($__internal_03fab2ab976a6c4bc06bf49d21626720a4874123f32ae1de7349eaee9e06b09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_03fab2ab976a6c4bc06bf49d21626720a4874123f32ae1de7349eaee9e06b09f->leave($__internal_03fab2ab976a6c4bc06bf49d21626720a4874123f32ae1de7349eaee9e06b09f_prof);

        
        $__internal_8c91280bd82e2ce535b50fa2b07d54a1bf87a9e0e1e78532ea2fd0bda0db555e->leave($__internal_8c91280bd82e2ce535b50fa2b07d54a1bf87a9e0e1e78532ea2fd0bda0db555e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show.html.twig");
    }
}
