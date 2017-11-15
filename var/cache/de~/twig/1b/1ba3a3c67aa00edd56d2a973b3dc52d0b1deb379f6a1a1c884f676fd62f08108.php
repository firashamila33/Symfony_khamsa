<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_8ac4360e8a45a40e5519b022c7dcd2ea5f069b385abdb5328bf53e0edfc2d99b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e64c796a98519be152677837d40464b549935f24b7cbbce458d76e8da0e0bde2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e64c796a98519be152677837d40464b549935f24b7cbbce458d76e8da0e0bde2->enter($__internal_e64c796a98519be152677837d40464b549935f24b7cbbce458d76e8da0e0bde2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_3684aa2e0e980ef6f4918adb3834c9e745f22fbf335137c2c48cee0a0ae4afa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3684aa2e0e980ef6f4918adb3834c9e745f22fbf335137c2c48cee0a0ae4afa9->enter($__internal_3684aa2e0e980ef6f4918adb3834c9e745f22fbf335137c2c48cee0a0ae4afa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_e64c796a98519be152677837d40464b549935f24b7cbbce458d76e8da0e0bde2->leave($__internal_e64c796a98519be152677837d40464b549935f24b7cbbce458d76e8da0e0bde2_prof);

        
        $__internal_3684aa2e0e980ef6f4918adb3834c9e745f22fbf335137c2c48cee0a0ae4afa9->leave($__internal_3684aa2e0e980ef6f4918adb3834c9e745f22fbf335137c2c48cee0a0ae4afa9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
