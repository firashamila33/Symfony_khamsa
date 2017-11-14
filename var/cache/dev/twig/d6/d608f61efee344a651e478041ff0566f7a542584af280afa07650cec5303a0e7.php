<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_38e52be166d54411d2819437b784769294c3b78ab7997079b83d8cf68dcb5dd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_e91ff995c4cf757739ce9955337d8199f481dadf5bfbca5d23267a6acb811a7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e91ff995c4cf757739ce9955337d8199f481dadf5bfbca5d23267a6acb811a7b->enter($__internal_e91ff995c4cf757739ce9955337d8199f481dadf5bfbca5d23267a6acb811a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_8b1f7748c9508649300997cda67cdd80b4d69cdf38095d2f4f3e81666218fc2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b1f7748c9508649300997cda67cdd80b4d69cdf38095d2f4f3e81666218fc2f->enter($__internal_8b1f7748c9508649300997cda67cdd80b4d69cdf38095d2f4f3e81666218fc2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e91ff995c4cf757739ce9955337d8199f481dadf5bfbca5d23267a6acb811a7b->leave($__internal_e91ff995c4cf757739ce9955337d8199f481dadf5bfbca5d23267a6acb811a7b_prof);

        
        $__internal_8b1f7748c9508649300997cda67cdd80b4d69cdf38095d2f4f3e81666218fc2f->leave($__internal_8b1f7748c9508649300997cda67cdd80b4d69cdf38095d2f4f3e81666218fc2f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d63fabbe23d2c68bcc347e5735d42705e86ddc0183131cc922d2a0a62751c19c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d63fabbe23d2c68bcc347e5735d42705e86ddc0183131cc922d2a0a62751c19c->enter($__internal_d63fabbe23d2c68bcc347e5735d42705e86ddc0183131cc922d2a0a62751c19c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b11f749b9340fd9d053d674c5a4f75156178aa81ef7ecfdeaaa4777c4a64bfcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b11f749b9340fd9d053d674c5a4f75156178aa81ef7ecfdeaaa4777c4a64bfcc->enter($__internal_b11f749b9340fd9d053d674c5a4f75156178aa81ef7ecfdeaaa4777c4a64bfcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_b11f749b9340fd9d053d674c5a4f75156178aa81ef7ecfdeaaa4777c4a64bfcc->leave($__internal_b11f749b9340fd9d053d674c5a4f75156178aa81ef7ecfdeaaa4777c4a64bfcc_prof);

        
        $__internal_d63fabbe23d2c68bcc347e5735d42705e86ddc0183131cc922d2a0a62751c19c->leave($__internal_d63fabbe23d2c68bcc347e5735d42705e86ddc0183131cc922d2a0a62751c19c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
