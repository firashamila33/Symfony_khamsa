<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_1b52da00c1978832caa4be15836f6b4d4ee8fd5e2ca493a3f15e92cb1ab7206f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_2e3df6f1d9035863ce89f2933526cd328965707603576eff1a1a9c5e4441acf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e3df6f1d9035863ce89f2933526cd328965707603576eff1a1a9c5e4441acf8->enter($__internal_2e3df6f1d9035863ce89f2933526cd328965707603576eff1a1a9c5e4441acf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_481bb4d9c7f9ff24c0e2831921d1f0aa17dd7f9a112af0e6cfae2a296558b295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_481bb4d9c7f9ff24c0e2831921d1f0aa17dd7f9a112af0e6cfae2a296558b295->enter($__internal_481bb4d9c7f9ff24c0e2831921d1f0aa17dd7f9a112af0e6cfae2a296558b295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e3df6f1d9035863ce89f2933526cd328965707603576eff1a1a9c5e4441acf8->leave($__internal_2e3df6f1d9035863ce89f2933526cd328965707603576eff1a1a9c5e4441acf8_prof);

        
        $__internal_481bb4d9c7f9ff24c0e2831921d1f0aa17dd7f9a112af0e6cfae2a296558b295->leave($__internal_481bb4d9c7f9ff24c0e2831921d1f0aa17dd7f9a112af0e6cfae2a296558b295_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dc439f87816bba997648eed53ef1b39f407979f381548aba35770144ff23b63b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc439f87816bba997648eed53ef1b39f407979f381548aba35770144ff23b63b->enter($__internal_dc439f87816bba997648eed53ef1b39f407979f381548aba35770144ff23b63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_02e853c5ea8a34226035acd084283f478cdbe6acb2056a1432b0fd48eaf282ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02e853c5ea8a34226035acd084283f478cdbe6acb2056a1432b0fd48eaf282ec->enter($__internal_02e853c5ea8a34226035acd084283f478cdbe6acb2056a1432b0fd48eaf282ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_02e853c5ea8a34226035acd084283f478cdbe6acb2056a1432b0fd48eaf282ec->leave($__internal_02e853c5ea8a34226035acd084283f478cdbe6acb2056a1432b0fd48eaf282ec_prof);

        
        $__internal_dc439f87816bba997648eed53ef1b39f407979f381548aba35770144ff23b63b->leave($__internal_dc439f87816bba997648eed53ef1b39f407979f381548aba35770144ff23b63b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\check_email.html.twig");
    }
}
