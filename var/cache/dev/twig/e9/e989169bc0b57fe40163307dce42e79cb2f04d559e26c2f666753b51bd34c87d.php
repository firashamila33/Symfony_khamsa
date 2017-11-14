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
        $__internal_07316089c699d1becdbdff495e16a9f731b0cb2e535751109d7d5729b8f477f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07316089c699d1becdbdff495e16a9f731b0cb2e535751109d7d5729b8f477f1->enter($__internal_07316089c699d1becdbdff495e16a9f731b0cb2e535751109d7d5729b8f477f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_bb9ac5548490167ffe8e88b626174b6e33f34682dc0044610ab36f5e9b75c41f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb9ac5548490167ffe8e88b626174b6e33f34682dc0044610ab36f5e9b75c41f->enter($__internal_bb9ac5548490167ffe8e88b626174b6e33f34682dc0044610ab36f5e9b75c41f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07316089c699d1becdbdff495e16a9f731b0cb2e535751109d7d5729b8f477f1->leave($__internal_07316089c699d1becdbdff495e16a9f731b0cb2e535751109d7d5729b8f477f1_prof);

        
        $__internal_bb9ac5548490167ffe8e88b626174b6e33f34682dc0044610ab36f5e9b75c41f->leave($__internal_bb9ac5548490167ffe8e88b626174b6e33f34682dc0044610ab36f5e9b75c41f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7e2943bac2152077262fe19e3540cc4a28115cfc087f020c3f488229f2141c81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e2943bac2152077262fe19e3540cc4a28115cfc087f020c3f488229f2141c81->enter($__internal_7e2943bac2152077262fe19e3540cc4a28115cfc087f020c3f488229f2141c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_014b74b2e97e32f4597274619aed12c9636e59a10b6457fe128107cc4b8dd6c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_014b74b2e97e32f4597274619aed12c9636e59a10b6457fe128107cc4b8dd6c8->enter($__internal_014b74b2e97e32f4597274619aed12c9636e59a10b6457fe128107cc4b8dd6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_014b74b2e97e32f4597274619aed12c9636e59a10b6457fe128107cc4b8dd6c8->leave($__internal_014b74b2e97e32f4597274619aed12c9636e59a10b6457fe128107cc4b8dd6c8_prof);

        
        $__internal_7e2943bac2152077262fe19e3540cc4a28115cfc087f020c3f488229f2141c81->leave($__internal_7e2943bac2152077262fe19e3540cc4a28115cfc087f020c3f488229f2141c81_prof);

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
