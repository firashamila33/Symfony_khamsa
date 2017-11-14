<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_edbb44d6e36d2ccb6b634c073b146417c87a8fa96fc07b4187c2544f156ec688 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_16dab7bebc0d8a158618e1ee08460e2a142afbcc431eee59f42a56a86fb95aa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16dab7bebc0d8a158618e1ee08460e2a142afbcc431eee59f42a56a86fb95aa8->enter($__internal_16dab7bebc0d8a158618e1ee08460e2a142afbcc431eee59f42a56a86fb95aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_0bdc4c8cbd3d79fa69318a83ef067281b60698af6f149e853f52f392a5216fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bdc4c8cbd3d79fa69318a83ef067281b60698af6f149e853f52f392a5216fd2->enter($__internal_0bdc4c8cbd3d79fa69318a83ef067281b60698af6f149e853f52f392a5216fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16dab7bebc0d8a158618e1ee08460e2a142afbcc431eee59f42a56a86fb95aa8->leave($__internal_16dab7bebc0d8a158618e1ee08460e2a142afbcc431eee59f42a56a86fb95aa8_prof);

        
        $__internal_0bdc4c8cbd3d79fa69318a83ef067281b60698af6f149e853f52f392a5216fd2->leave($__internal_0bdc4c8cbd3d79fa69318a83ef067281b60698af6f149e853f52f392a5216fd2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bc77acd9524c8526d4c1bce05d3729aae2b9b874e9cd62f704b5b120dbdce86c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc77acd9524c8526d4c1bce05d3729aae2b9b874e9cd62f704b5b120dbdce86c->enter($__internal_bc77acd9524c8526d4c1bce05d3729aae2b9b874e9cd62f704b5b120dbdce86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5faa1b6edfcb49eadaea09af12121ab8e80cf2a3eb9a68b1574fa7acce13966d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5faa1b6edfcb49eadaea09af12121ab8e80cf2a3eb9a68b1574fa7acce13966d->enter($__internal_5faa1b6edfcb49eadaea09af12121ab8e80cf2a3eb9a68b1574fa7acce13966d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_5faa1b6edfcb49eadaea09af12121ab8e80cf2a3eb9a68b1574fa7acce13966d->leave($__internal_5faa1b6edfcb49eadaea09af12121ab8e80cf2a3eb9a68b1574fa7acce13966d_prof);

        
        $__internal_bc77acd9524c8526d4c1bce05d3729aae2b9b874e9cd62f704b5b120dbdce86c->leave($__internal_bc77acd9524c8526d4c1bce05d3729aae2b9b874e9cd62f704b5b120dbdce86c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
", "@FOSUser/Profile/show.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
