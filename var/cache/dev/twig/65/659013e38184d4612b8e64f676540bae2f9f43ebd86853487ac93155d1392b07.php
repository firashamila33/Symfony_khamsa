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
        $__internal_780e12d858181a3e8de6a6d7f73563ba4fb81ed4d45b576e08ca04f46922b393 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_780e12d858181a3e8de6a6d7f73563ba4fb81ed4d45b576e08ca04f46922b393->enter($__internal_780e12d858181a3e8de6a6d7f73563ba4fb81ed4d45b576e08ca04f46922b393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_6f435346c588bdc90635d17d3a623db8e50d2d3716a1941037a03699c817cbbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f435346c588bdc90635d17d3a623db8e50d2d3716a1941037a03699c817cbbf->enter($__internal_6f435346c588bdc90635d17d3a623db8e50d2d3716a1941037a03699c817cbbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_780e12d858181a3e8de6a6d7f73563ba4fb81ed4d45b576e08ca04f46922b393->leave($__internal_780e12d858181a3e8de6a6d7f73563ba4fb81ed4d45b576e08ca04f46922b393_prof);

        
        $__internal_6f435346c588bdc90635d17d3a623db8e50d2d3716a1941037a03699c817cbbf->leave($__internal_6f435346c588bdc90635d17d3a623db8e50d2d3716a1941037a03699c817cbbf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9e81b679996e3a3d54446c81287ac3fe5046cad3bbd0153befcf22a7df80eaba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e81b679996e3a3d54446c81287ac3fe5046cad3bbd0153befcf22a7df80eaba->enter($__internal_9e81b679996e3a3d54446c81287ac3fe5046cad3bbd0153befcf22a7df80eaba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_856c63cd9651085b2ab3698dba4fc1131d9310c4026a1764fa879c9279084c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_856c63cd9651085b2ab3698dba4fc1131d9310c4026a1764fa879c9279084c34->enter($__internal_856c63cd9651085b2ab3698dba4fc1131d9310c4026a1764fa879c9279084c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_856c63cd9651085b2ab3698dba4fc1131d9310c4026a1764fa879c9279084c34->leave($__internal_856c63cd9651085b2ab3698dba4fc1131d9310c4026a1764fa879c9279084c34_prof);

        
        $__internal_9e81b679996e3a3d54446c81287ac3fe5046cad3bbd0153befcf22a7df80eaba->leave($__internal_9e81b679996e3a3d54446c81287ac3fe5046cad3bbd0153befcf22a7df80eaba_prof);

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
