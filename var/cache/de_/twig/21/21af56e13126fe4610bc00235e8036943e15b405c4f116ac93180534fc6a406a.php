<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_5d1a3e47294e3d85e572c440ba5a4936437ab797f7c197ae4e04247b05c9f15c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_4a26d5d0b32b8f259c6600cd3dcb92d168f02e09029b7d19b2392e60af78362f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a26d5d0b32b8f259c6600cd3dcb92d168f02e09029b7d19b2392e60af78362f->enter($__internal_4a26d5d0b32b8f259c6600cd3dcb92d168f02e09029b7d19b2392e60af78362f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_5d2b3a60cbdac1a92af8e152efeb584100400c8c3a07013c81be7d23b36128cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d2b3a60cbdac1a92af8e152efeb584100400c8c3a07013c81be7d23b36128cc->enter($__internal_5d2b3a60cbdac1a92af8e152efeb584100400c8c3a07013c81be7d23b36128cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a26d5d0b32b8f259c6600cd3dcb92d168f02e09029b7d19b2392e60af78362f->leave($__internal_4a26d5d0b32b8f259c6600cd3dcb92d168f02e09029b7d19b2392e60af78362f_prof);

        
        $__internal_5d2b3a60cbdac1a92af8e152efeb584100400c8c3a07013c81be7d23b36128cc->leave($__internal_5d2b3a60cbdac1a92af8e152efeb584100400c8c3a07013c81be7d23b36128cc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_74993e6106e6803926fa6f41737a2244278f4d8d2caa2f57be8bbc4de4be6c3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74993e6106e6803926fa6f41737a2244278f4d8d2caa2f57be8bbc4de4be6c3d->enter($__internal_74993e6106e6803926fa6f41737a2244278f4d8d2caa2f57be8bbc4de4be6c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_490da92ab52904c8024fe48559c6d1a9eeebe4d48ed72a71718f58077089b3cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_490da92ab52904c8024fe48559c6d1a9eeebe4d48ed72a71718f58077089b3cb->enter($__internal_490da92ab52904c8024fe48559c6d1a9eeebe4d48ed72a71718f58077089b3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_490da92ab52904c8024fe48559c6d1a9eeebe4d48ed72a71718f58077089b3cb->leave($__internal_490da92ab52904c8024fe48559c6d1a9eeebe4d48ed72a71718f58077089b3cb_prof);

        
        $__internal_74993e6106e6803926fa6f41737a2244278f4d8d2caa2f57be8bbc4de4be6c3d->leave($__internal_74993e6106e6803926fa6f41737a2244278f4d8d2caa2f57be8bbc4de4be6c3d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
