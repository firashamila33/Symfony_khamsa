<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_17718b097f99de2d9678bd0a43607271d1d1cbd0ba5a3aac6eb8d51b262626da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_b894f7f85b1ca80857302f8cacedac03ad4f7c348a6a42a73541a4da089a1eb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b894f7f85b1ca80857302f8cacedac03ad4f7c348a6a42a73541a4da089a1eb8->enter($__internal_b894f7f85b1ca80857302f8cacedac03ad4f7c348a6a42a73541a4da089a1eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_2e1106a2bd4958a761bf6f648fe80c1d4c128ca0f67df6554477c06528f791b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e1106a2bd4958a761bf6f648fe80c1d4c128ca0f67df6554477c06528f791b4->enter($__internal_2e1106a2bd4958a761bf6f648fe80c1d4c128ca0f67df6554477c06528f791b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b894f7f85b1ca80857302f8cacedac03ad4f7c348a6a42a73541a4da089a1eb8->leave($__internal_b894f7f85b1ca80857302f8cacedac03ad4f7c348a6a42a73541a4da089a1eb8_prof);

        
        $__internal_2e1106a2bd4958a761bf6f648fe80c1d4c128ca0f67df6554477c06528f791b4->leave($__internal_2e1106a2bd4958a761bf6f648fe80c1d4c128ca0f67df6554477c06528f791b4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_67f5c355e5c16542e5146944ea3d709ee7a5787893d44f8aed50f5f2d1eed736 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67f5c355e5c16542e5146944ea3d709ee7a5787893d44f8aed50f5f2d1eed736->enter($__internal_67f5c355e5c16542e5146944ea3d709ee7a5787893d44f8aed50f5f2d1eed736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ad9a6b104661e744529e95560eadce7a4b57a739890bd658d4a50ad09c770ed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad9a6b104661e744529e95560eadce7a4b57a739890bd658d4a50ad09c770ed7->enter($__internal_ad9a6b104661e744529e95560eadce7a4b57a739890bd658d4a50ad09c770ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_ad9a6b104661e744529e95560eadce7a4b57a739890bd658d4a50ad09c770ed7->leave($__internal_ad9a6b104661e744529e95560eadce7a4b57a739890bd658d4a50ad09c770ed7_prof);

        
        $__internal_67f5c355e5c16542e5146944ea3d709ee7a5787893d44f8aed50f5f2d1eed736->leave($__internal_67f5c355e5c16542e5146944ea3d709ee7a5787893d44f8aed50f5f2d1eed736_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
