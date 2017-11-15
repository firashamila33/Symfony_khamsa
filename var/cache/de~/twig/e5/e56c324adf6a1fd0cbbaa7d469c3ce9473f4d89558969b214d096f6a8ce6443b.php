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
        $__internal_3fd2ae173aed24a44235c49fbd70c8b522814328354b23e04dc3b297a5d2bd5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fd2ae173aed24a44235c49fbd70c8b522814328354b23e04dc3b297a5d2bd5d->enter($__internal_3fd2ae173aed24a44235c49fbd70c8b522814328354b23e04dc3b297a5d2bd5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_e1361576d0a74536d16eabf8b570e59563247472b4af53393d66a6759ab12772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1361576d0a74536d16eabf8b570e59563247472b4af53393d66a6759ab12772->enter($__internal_e1361576d0a74536d16eabf8b570e59563247472b4af53393d66a6759ab12772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fd2ae173aed24a44235c49fbd70c8b522814328354b23e04dc3b297a5d2bd5d->leave($__internal_3fd2ae173aed24a44235c49fbd70c8b522814328354b23e04dc3b297a5d2bd5d_prof);

        
        $__internal_e1361576d0a74536d16eabf8b570e59563247472b4af53393d66a6759ab12772->leave($__internal_e1361576d0a74536d16eabf8b570e59563247472b4af53393d66a6759ab12772_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c8b2ab7a10f4ed1a556c7e81930f65f5e1152d69300951169cc8de1bd104f960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8b2ab7a10f4ed1a556c7e81930f65f5e1152d69300951169cc8de1bd104f960->enter($__internal_c8b2ab7a10f4ed1a556c7e81930f65f5e1152d69300951169cc8de1bd104f960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_dfd423648347650ce233c9e7eeb3fc106e507e6fa101af5f9dcf21151e063ac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd423648347650ce233c9e7eeb3fc106e507e6fa101af5f9dcf21151e063ac1->enter($__internal_dfd423648347650ce233c9e7eeb3fc106e507e6fa101af5f9dcf21151e063ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_dfd423648347650ce233c9e7eeb3fc106e507e6fa101af5f9dcf21151e063ac1->leave($__internal_dfd423648347650ce233c9e7eeb3fc106e507e6fa101af5f9dcf21151e063ac1_prof);

        
        $__internal_c8b2ab7a10f4ed1a556c7e81930f65f5e1152d69300951169cc8de1bd104f960->leave($__internal_c8b2ab7a10f4ed1a556c7e81930f65f5e1152d69300951169cc8de1bd104f960_prof);

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
