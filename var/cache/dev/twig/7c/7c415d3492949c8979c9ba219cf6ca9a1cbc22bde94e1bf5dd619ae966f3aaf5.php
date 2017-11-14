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
        $__internal_e3193c173ca86c4573883b60787d41956960f44e4aaac6519bf897347e4f63bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3193c173ca86c4573883b60787d41956960f44e4aaac6519bf897347e4f63bb->enter($__internal_e3193c173ca86c4573883b60787d41956960f44e4aaac6519bf897347e4f63bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_9f6bcf22addd7fa862a00164336bf763e816d31b3e524e881cca7cb1012ac9f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f6bcf22addd7fa862a00164336bf763e816d31b3e524e881cca7cb1012ac9f7->enter($__internal_9f6bcf22addd7fa862a00164336bf763e816d31b3e524e881cca7cb1012ac9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3193c173ca86c4573883b60787d41956960f44e4aaac6519bf897347e4f63bb->leave($__internal_e3193c173ca86c4573883b60787d41956960f44e4aaac6519bf897347e4f63bb_prof);

        
        $__internal_9f6bcf22addd7fa862a00164336bf763e816d31b3e524e881cca7cb1012ac9f7->leave($__internal_9f6bcf22addd7fa862a00164336bf763e816d31b3e524e881cca7cb1012ac9f7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_24a42cc2f830e9c2701fa5064351072d2c5b1080b2c16e1f1f26adec806c1eb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24a42cc2f830e9c2701fa5064351072d2c5b1080b2c16e1f1f26adec806c1eb6->enter($__internal_24a42cc2f830e9c2701fa5064351072d2c5b1080b2c16e1f1f26adec806c1eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6b513b0171558f8b5c940e4b4fd396fbbe0ded924b056de07dc4d23e3dd32c1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b513b0171558f8b5c940e4b4fd396fbbe0ded924b056de07dc4d23e3dd32c1d->enter($__internal_6b513b0171558f8b5c940e4b4fd396fbbe0ded924b056de07dc4d23e3dd32c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_6b513b0171558f8b5c940e4b4fd396fbbe0ded924b056de07dc4d23e3dd32c1d->leave($__internal_6b513b0171558f8b5c940e4b4fd396fbbe0ded924b056de07dc4d23e3dd32c1d_prof);

        
        $__internal_24a42cc2f830e9c2701fa5064351072d2c5b1080b2c16e1f1f26adec806c1eb6->leave($__internal_24a42cc2f830e9c2701fa5064351072d2c5b1080b2c16e1f1f26adec806c1eb6_prof);

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
