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
        $__internal_b826f884180869d273c7a2323d06733551d84f8e52ae64eccf65c480fa439d6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b826f884180869d273c7a2323d06733551d84f8e52ae64eccf65c480fa439d6b->enter($__internal_b826f884180869d273c7a2323d06733551d84f8e52ae64eccf65c480fa439d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_7379e7af2326068c32d32245533d6c259b2386f5926b28ae0de974e4fadb941d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7379e7af2326068c32d32245533d6c259b2386f5926b28ae0de974e4fadb941d->enter($__internal_7379e7af2326068c32d32245533d6c259b2386f5926b28ae0de974e4fadb941d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b826f884180869d273c7a2323d06733551d84f8e52ae64eccf65c480fa439d6b->leave($__internal_b826f884180869d273c7a2323d06733551d84f8e52ae64eccf65c480fa439d6b_prof);

        
        $__internal_7379e7af2326068c32d32245533d6c259b2386f5926b28ae0de974e4fadb941d->leave($__internal_7379e7af2326068c32d32245533d6c259b2386f5926b28ae0de974e4fadb941d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6d46b2e1191b532275d049c1fa26ede4f1d2b4507c871348d40dc23f96ec2533 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d46b2e1191b532275d049c1fa26ede4f1d2b4507c871348d40dc23f96ec2533->enter($__internal_6d46b2e1191b532275d049c1fa26ede4f1d2b4507c871348d40dc23f96ec2533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a863f9fb9ed4914034f6a5ba178c4ae74ff6698899bbca177b43218e80f9c29c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a863f9fb9ed4914034f6a5ba178c4ae74ff6698899bbca177b43218e80f9c29c->enter($__internal_a863f9fb9ed4914034f6a5ba178c4ae74ff6698899bbca177b43218e80f9c29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a863f9fb9ed4914034f6a5ba178c4ae74ff6698899bbca177b43218e80f9c29c->leave($__internal_a863f9fb9ed4914034f6a5ba178c4ae74ff6698899bbca177b43218e80f9c29c_prof);

        
        $__internal_6d46b2e1191b532275d049c1fa26ede4f1d2b4507c871348d40dc23f96ec2533->leave($__internal_6d46b2e1191b532275d049c1fa26ede4f1d2b4507c871348d40dc23f96ec2533_prof);

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
