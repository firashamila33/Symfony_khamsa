<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_a35e423c7848d2b243a0dfea47bc541b5184420c92444d84d73b104dbd2415af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_8dcac3e2a2d6b1668068ad47cf7b824d00208ce2c5f2ee7df6a9e6e69dde3d4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dcac3e2a2d6b1668068ad47cf7b824d00208ce2c5f2ee7df6a9e6e69dde3d4e->enter($__internal_8dcac3e2a2d6b1668068ad47cf7b824d00208ce2c5f2ee7df6a9e6e69dde3d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_036d5e201f20fd8525c981363b022e26e9a33f5d6ad38d0002298a7612fae774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_036d5e201f20fd8525c981363b022e26e9a33f5d6ad38d0002298a7612fae774->enter($__internal_036d5e201f20fd8525c981363b022e26e9a33f5d6ad38d0002298a7612fae774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dcac3e2a2d6b1668068ad47cf7b824d00208ce2c5f2ee7df6a9e6e69dde3d4e->leave($__internal_8dcac3e2a2d6b1668068ad47cf7b824d00208ce2c5f2ee7df6a9e6e69dde3d4e_prof);

        
        $__internal_036d5e201f20fd8525c981363b022e26e9a33f5d6ad38d0002298a7612fae774->leave($__internal_036d5e201f20fd8525c981363b022e26e9a33f5d6ad38d0002298a7612fae774_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f89eb5ba8b2fe3f3a11a443e87a9d702eea1db148c5dc32a8973142bd5227e98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f89eb5ba8b2fe3f3a11a443e87a9d702eea1db148c5dc32a8973142bd5227e98->enter($__internal_f89eb5ba8b2fe3f3a11a443e87a9d702eea1db148c5dc32a8973142bd5227e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3a2b435f68d9d10623a9f419b3c6753e518f2615f07067d17b94da242943e3df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a2b435f68d9d10623a9f419b3c6753e518f2615f07067d17b94da242943e3df->enter($__internal_3a2b435f68d9d10623a9f419b3c6753e518f2615f07067d17b94da242943e3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_3a2b435f68d9d10623a9f419b3c6753e518f2615f07067d17b94da242943e3df->leave($__internal_3a2b435f68d9d10623a9f419b3c6753e518f2615f07067d17b94da242943e3df_prof);

        
        $__internal_f89eb5ba8b2fe3f3a11a443e87a9d702eea1db148c5dc32a8973142bd5227e98->leave($__internal_f89eb5ba8b2fe3f3a11a443e87a9d702eea1db148c5dc32a8973142bd5227e98_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
