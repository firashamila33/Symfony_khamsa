<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_4daa47ab4173bcaa9725a1517b1967a987efa2250f3c1b69affb801c58107bef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_4490375d4fd9104e7039f74e519edf9cb7beb2519bb0dacc8249ba776455811c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4490375d4fd9104e7039f74e519edf9cb7beb2519bb0dacc8249ba776455811c->enter($__internal_4490375d4fd9104e7039f74e519edf9cb7beb2519bb0dacc8249ba776455811c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_0843ab6d48b49d9ab21092f233e8908a14d661db7eb2c99e0ab4c5effe105457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0843ab6d48b49d9ab21092f233e8908a14d661db7eb2c99e0ab4c5effe105457->enter($__internal_0843ab6d48b49d9ab21092f233e8908a14d661db7eb2c99e0ab4c5effe105457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4490375d4fd9104e7039f74e519edf9cb7beb2519bb0dacc8249ba776455811c->leave($__internal_4490375d4fd9104e7039f74e519edf9cb7beb2519bb0dacc8249ba776455811c_prof);

        
        $__internal_0843ab6d48b49d9ab21092f233e8908a14d661db7eb2c99e0ab4c5effe105457->leave($__internal_0843ab6d48b49d9ab21092f233e8908a14d661db7eb2c99e0ab4c5effe105457_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cbe28f9053bffdf25df8ee13dc9d8e6147e06c0d42b486a2e3c369b9cca95057 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbe28f9053bffdf25df8ee13dc9d8e6147e06c0d42b486a2e3c369b9cca95057->enter($__internal_cbe28f9053bffdf25df8ee13dc9d8e6147e06c0d42b486a2e3c369b9cca95057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c6704f911d78a728d68b7c6ff0eee20b17c0063f8374ac1fb2318d2153a7ee31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6704f911d78a728d68b7c6ff0eee20b17c0063f8374ac1fb2318d2153a7ee31->enter($__internal_c6704f911d78a728d68b7c6ff0eee20b17c0063f8374ac1fb2318d2153a7ee31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_c6704f911d78a728d68b7c6ff0eee20b17c0063f8374ac1fb2318d2153a7ee31->leave($__internal_c6704f911d78a728d68b7c6ff0eee20b17c0063f8374ac1fb2318d2153a7ee31_prof);

        
        $__internal_cbe28f9053bffdf25df8ee13dc9d8e6147e06c0d42b486a2e3c369b9cca95057->leave($__internal_cbe28f9053bffdf25df8ee13dc9d8e6147e06c0d42b486a2e3c369b9cca95057_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
", "FOSUserBundle:Group:new.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/new.html.twig");
    }
}
