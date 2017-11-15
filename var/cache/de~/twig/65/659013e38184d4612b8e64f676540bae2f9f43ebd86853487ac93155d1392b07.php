<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_679d3bb546733750468716b07b0049901124613ec9bf312c1ff013360bd1fa39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_38c817e558775e9d49a406ec158dea64ad307e590b6dd4a4943afb29a5461fdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38c817e558775e9d49a406ec158dea64ad307e590b6dd4a4943afb29a5461fdd->enter($__internal_38c817e558775e9d49a406ec158dea64ad307e590b6dd4a4943afb29a5461fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_a7025b3d467f6f55b32c7d7f808878f649ac3342a2cfcd0b8251e4bdb89ef4e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7025b3d467f6f55b32c7d7f808878f649ac3342a2cfcd0b8251e4bdb89ef4e9->enter($__internal_a7025b3d467f6f55b32c7d7f808878f649ac3342a2cfcd0b8251e4bdb89ef4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38c817e558775e9d49a406ec158dea64ad307e590b6dd4a4943afb29a5461fdd->leave($__internal_38c817e558775e9d49a406ec158dea64ad307e590b6dd4a4943afb29a5461fdd_prof);

        
        $__internal_a7025b3d467f6f55b32c7d7f808878f649ac3342a2cfcd0b8251e4bdb89ef4e9->leave($__internal_a7025b3d467f6f55b32c7d7f808878f649ac3342a2cfcd0b8251e4bdb89ef4e9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e35745125016953ce469c86ac1d59274d3b74e1149984fda7201b138b806f494 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e35745125016953ce469c86ac1d59274d3b74e1149984fda7201b138b806f494->enter($__internal_e35745125016953ce469c86ac1d59274d3b74e1149984fda7201b138b806f494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_77ff5e47caced5f74c8d4557baa7ec7ed08601d0c7c74d2536457ce8572ce295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77ff5e47caced5f74c8d4557baa7ec7ed08601d0c7c74d2536457ce8572ce295->enter($__internal_77ff5e47caced5f74c8d4557baa7ec7ed08601d0c7c74d2536457ce8572ce295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_77ff5e47caced5f74c8d4557baa7ec7ed08601d0c7c74d2536457ce8572ce295->leave($__internal_77ff5e47caced5f74c8d4557baa7ec7ed08601d0c7c74d2536457ce8572ce295_prof);

        
        $__internal_e35745125016953ce469c86ac1d59274d3b74e1149984fda7201b138b806f494->leave($__internal_e35745125016953ce469c86ac1d59274d3b74e1149984fda7201b138b806f494_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
", "@FOSUser/Group/show.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show.html.twig");
    }
}
