<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_5cc58594a569ea5c0b4d3e72a3ba5c56c55dd8fbcfaaded15795137a2fa67169 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_a8ed78b0fbfa164d9737453faec4fb8525d785f8528628e23047c16e1e75a87f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8ed78b0fbfa164d9737453faec4fb8525d785f8528628e23047c16e1e75a87f->enter($__internal_a8ed78b0fbfa164d9737453faec4fb8525d785f8528628e23047c16e1e75a87f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_903e43f6ca08134c9bcf1771f58d010b740eeee2f80a983cdbb0f32d223ae679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_903e43f6ca08134c9bcf1771f58d010b740eeee2f80a983cdbb0f32d223ae679->enter($__internal_903e43f6ca08134c9bcf1771f58d010b740eeee2f80a983cdbb0f32d223ae679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8ed78b0fbfa164d9737453faec4fb8525d785f8528628e23047c16e1e75a87f->leave($__internal_a8ed78b0fbfa164d9737453faec4fb8525d785f8528628e23047c16e1e75a87f_prof);

        
        $__internal_903e43f6ca08134c9bcf1771f58d010b740eeee2f80a983cdbb0f32d223ae679->leave($__internal_903e43f6ca08134c9bcf1771f58d010b740eeee2f80a983cdbb0f32d223ae679_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4c2f1fe9f7abc49012942db2222519e41be9871ad8779b46c46dc1a92e31aa29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c2f1fe9f7abc49012942db2222519e41be9871ad8779b46c46dc1a92e31aa29->enter($__internal_4c2f1fe9f7abc49012942db2222519e41be9871ad8779b46c46dc1a92e31aa29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_79e818dcfab3efffe65a5a4276b06fcc6efded4d0e40cafd5d1061714b6b235b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79e818dcfab3efffe65a5a4276b06fcc6efded4d0e40cafd5d1061714b6b235b->enter($__internal_79e818dcfab3efffe65a5a4276b06fcc6efded4d0e40cafd5d1061714b6b235b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_79e818dcfab3efffe65a5a4276b06fcc6efded4d0e40cafd5d1061714b6b235b->leave($__internal_79e818dcfab3efffe65a5a4276b06fcc6efded4d0e40cafd5d1061714b6b235b_prof);

        
        $__internal_4c2f1fe9f7abc49012942db2222519e41be9871ad8779b46c46dc1a92e31aa29->leave($__internal_4c2f1fe9f7abc49012942db2222519e41be9871ad8779b46c46dc1a92e31aa29_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
