<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_86173cd7a4f53a4835eec9a302962c6dee686b78ddfc8043ef8ed4ea6f649eaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_ad77271c9249cf7b25e8701ae1eecf2d23a3ce98d5d9d1b548e62957e85e030e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad77271c9249cf7b25e8701ae1eecf2d23a3ce98d5d9d1b548e62957e85e030e->enter($__internal_ad77271c9249cf7b25e8701ae1eecf2d23a3ce98d5d9d1b548e62957e85e030e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_e0098d93cb58077e8e35d1a86c4028d253f6a0e7edc7e80b28fd82463c9b40b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0098d93cb58077e8e35d1a86c4028d253f6a0e7edc7e80b28fd82463c9b40b3->enter($__internal_e0098d93cb58077e8e35d1a86c4028d253f6a0e7edc7e80b28fd82463c9b40b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad77271c9249cf7b25e8701ae1eecf2d23a3ce98d5d9d1b548e62957e85e030e->leave($__internal_ad77271c9249cf7b25e8701ae1eecf2d23a3ce98d5d9d1b548e62957e85e030e_prof);

        
        $__internal_e0098d93cb58077e8e35d1a86c4028d253f6a0e7edc7e80b28fd82463c9b40b3->leave($__internal_e0098d93cb58077e8e35d1a86c4028d253f6a0e7edc7e80b28fd82463c9b40b3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4a91cc4c515594683ae7a633e3360dabb8ed5e56ca1f699ddc4addc59640b900 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a91cc4c515594683ae7a633e3360dabb8ed5e56ca1f699ddc4addc59640b900->enter($__internal_4a91cc4c515594683ae7a633e3360dabb8ed5e56ca1f699ddc4addc59640b900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8c5f66715ed670e8fa8ccb832e97ec6254dabc04637175af6d76e2c6fe64b60e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c5f66715ed670e8fa8ccb832e97ec6254dabc04637175af6d76e2c6fe64b60e->enter($__internal_8c5f66715ed670e8fa8ccb832e97ec6254dabc04637175af6d76e2c6fe64b60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_8c5f66715ed670e8fa8ccb832e97ec6254dabc04637175af6d76e2c6fe64b60e->leave($__internal_8c5f66715ed670e8fa8ccb832e97ec6254dabc04637175af6d76e2c6fe64b60e_prof);

        
        $__internal_4a91cc4c515594683ae7a633e3360dabb8ed5e56ca1f699ddc4addc59640b900->leave($__internal_4a91cc4c515594683ae7a633e3360dabb8ed5e56ca1f699ddc4addc59640b900_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new.html.twig");
    }
}
