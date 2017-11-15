<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_b70e0caa0e34136e18be232c25b36c00e1ae26d84968eb36372d75211e483396 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_16b8ee4a8838429c76b88ee1642a783ba455b5e35d9456b85b5ba5605e82e14f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16b8ee4a8838429c76b88ee1642a783ba455b5e35d9456b85b5ba5605e82e14f->enter($__internal_16b8ee4a8838429c76b88ee1642a783ba455b5e35d9456b85b5ba5605e82e14f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_fd097f72b98224766fef34b2182bcbb38db1b80ee5976714c0bfb468d934191b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd097f72b98224766fef34b2182bcbb38db1b80ee5976714c0bfb468d934191b->enter($__internal_fd097f72b98224766fef34b2182bcbb38db1b80ee5976714c0bfb468d934191b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16b8ee4a8838429c76b88ee1642a783ba455b5e35d9456b85b5ba5605e82e14f->leave($__internal_16b8ee4a8838429c76b88ee1642a783ba455b5e35d9456b85b5ba5605e82e14f_prof);

        
        $__internal_fd097f72b98224766fef34b2182bcbb38db1b80ee5976714c0bfb468d934191b->leave($__internal_fd097f72b98224766fef34b2182bcbb38db1b80ee5976714c0bfb468d934191b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2610081ca058e3ddb463c4cde55d0eac275b847047a3b86ab9ae9ba0b894398b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2610081ca058e3ddb463c4cde55d0eac275b847047a3b86ab9ae9ba0b894398b->enter($__internal_2610081ca058e3ddb463c4cde55d0eac275b847047a3b86ab9ae9ba0b894398b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_812492e15b6176400823386b84a387101a56ed0f27a23bbda946a897913d2e67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_812492e15b6176400823386b84a387101a56ed0f27a23bbda946a897913d2e67->enter($__internal_812492e15b6176400823386b84a387101a56ed0f27a23bbda946a897913d2e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_812492e15b6176400823386b84a387101a56ed0f27a23bbda946a897913d2e67->leave($__internal_812492e15b6176400823386b84a387101a56ed0f27a23bbda946a897913d2e67_prof);

        
        $__internal_2610081ca058e3ddb463c4cde55d0eac275b847047a3b86ab9ae9ba0b894398b->leave($__internal_2610081ca058e3ddb463c4cde55d0eac275b847047a3b86ab9ae9ba0b894398b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
", "@FOSUser/Registration/register.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
