<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_fe4127636ff3437d49fb74bcb18710e782bb94e031d351582a33ca45f397e730 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_2df53606c90211bb904be6194b2e34b7351c5e8f44676f44fc31e3cd9a69166a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2df53606c90211bb904be6194b2e34b7351c5e8f44676f44fc31e3cd9a69166a->enter($__internal_2df53606c90211bb904be6194b2e34b7351c5e8f44676f44fc31e3cd9a69166a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_d94018caacc994ed10a9ca8fffd759416b30f7e768c2af0757b1d47906760cf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d94018caacc994ed10a9ca8fffd759416b30f7e768c2af0757b1d47906760cf1->enter($__internal_d94018caacc994ed10a9ca8fffd759416b30f7e768c2af0757b1d47906760cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2df53606c90211bb904be6194b2e34b7351c5e8f44676f44fc31e3cd9a69166a->leave($__internal_2df53606c90211bb904be6194b2e34b7351c5e8f44676f44fc31e3cd9a69166a_prof);

        
        $__internal_d94018caacc994ed10a9ca8fffd759416b30f7e768c2af0757b1d47906760cf1->leave($__internal_d94018caacc994ed10a9ca8fffd759416b30f7e768c2af0757b1d47906760cf1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7c6cb0329f992b832013f61e6e67c110a77ee2417750137c1dd4bdf9919782ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c6cb0329f992b832013f61e6e67c110a77ee2417750137c1dd4bdf9919782ac->enter($__internal_7c6cb0329f992b832013f61e6e67c110a77ee2417750137c1dd4bdf9919782ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3781814bd85d115335f43fe96ecf6adbfa67168df8d810c78595d35087c1af5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3781814bd85d115335f43fe96ecf6adbfa67168df8d810c78595d35087c1af5f->enter($__internal_3781814bd85d115335f43fe96ecf6adbfa67168df8d810c78595d35087c1af5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_3781814bd85d115335f43fe96ecf6adbfa67168df8d810c78595d35087c1af5f->leave($__internal_3781814bd85d115335f43fe96ecf6adbfa67168df8d810c78595d35087c1af5f_prof);

        
        $__internal_7c6cb0329f992b832013f61e6e67c110a77ee2417750137c1dd4bdf9919782ac->leave($__internal_7c6cb0329f992b832013f61e6e67c110a77ee2417750137c1dd4bdf9919782ac_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
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
", "@FOSUser/Resetting/check_email.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
