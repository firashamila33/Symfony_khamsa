<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_f8c4b2763be726c2eb842e12ff386b8bc4bed3e7e5b42f30f21405f885508ed1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_94fa6ad2f5a118b5484aec78afdf905cb7315480ff3d285596d8b965cae1919b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94fa6ad2f5a118b5484aec78afdf905cb7315480ff3d285596d8b965cae1919b->enter($__internal_94fa6ad2f5a118b5484aec78afdf905cb7315480ff3d285596d8b965cae1919b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_a42d08dd0f9a235ea4c88895ea955578f7360ed286f61c52e874d493132fb950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a42d08dd0f9a235ea4c88895ea955578f7360ed286f61c52e874d493132fb950->enter($__internal_a42d08dd0f9a235ea4c88895ea955578f7360ed286f61c52e874d493132fb950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94fa6ad2f5a118b5484aec78afdf905cb7315480ff3d285596d8b965cae1919b->leave($__internal_94fa6ad2f5a118b5484aec78afdf905cb7315480ff3d285596d8b965cae1919b_prof);

        
        $__internal_a42d08dd0f9a235ea4c88895ea955578f7360ed286f61c52e874d493132fb950->leave($__internal_a42d08dd0f9a235ea4c88895ea955578f7360ed286f61c52e874d493132fb950_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_29ccecdf23ef2ee81bc9e1e42ae98fd8f44b3e2ba696569dcaf1f6b1f702baa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29ccecdf23ef2ee81bc9e1e42ae98fd8f44b3e2ba696569dcaf1f6b1f702baa5->enter($__internal_29ccecdf23ef2ee81bc9e1e42ae98fd8f44b3e2ba696569dcaf1f6b1f702baa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_91fcd6e37fc2546f88bd339ebed064cd5c75920a41e906826d46623307f8f7e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91fcd6e37fc2546f88bd339ebed064cd5c75920a41e906826d46623307f8f7e6->enter($__internal_91fcd6e37fc2546f88bd339ebed064cd5c75920a41e906826d46623307f8f7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_91fcd6e37fc2546f88bd339ebed064cd5c75920a41e906826d46623307f8f7e6->leave($__internal_91fcd6e37fc2546f88bd339ebed064cd5c75920a41e906826d46623307f8f7e6_prof);

        
        $__internal_29ccecdf23ef2ee81bc9e1e42ae98fd8f44b3e2ba696569dcaf1f6b1f702baa5->leave($__internal_29ccecdf23ef2ee81bc9e1e42ae98fd8f44b3e2ba696569dcaf1f6b1f702baa5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
