<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_e384a3df3fd4d366cc50272cc8b13d103bd00e2266d2ce0fba607929bd5f1439 extends Twig_Template
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
        $__internal_35bdd733fb7226f7051d25d322624618422ec7b2aeb7c4d7d59696d0206d24b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35bdd733fb7226f7051d25d322624618422ec7b2aeb7c4d7d59696d0206d24b2->enter($__internal_35bdd733fb7226f7051d25d322624618422ec7b2aeb7c4d7d59696d0206d24b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_c6c4e386229b40640f1249bfdc8c16aee7b9e1e0a6d5a725bc4d885ef71b5c53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6c4e386229b40640f1249bfdc8c16aee7b9e1e0a6d5a725bc4d885ef71b5c53->enter($__internal_c6c4e386229b40640f1249bfdc8c16aee7b9e1e0a6d5a725bc4d885ef71b5c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_35bdd733fb7226f7051d25d322624618422ec7b2aeb7c4d7d59696d0206d24b2->leave($__internal_35bdd733fb7226f7051d25d322624618422ec7b2aeb7c4d7d59696d0206d24b2_prof);

        
        $__internal_c6c4e386229b40640f1249bfdc8c16aee7b9e1e0a6d5a725bc4d885ef71b5c53->leave($__internal_c6c4e386229b40640f1249bfdc8c16aee7b9e1e0a6d5a725bc4d885ef71b5c53_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
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
", "@FOSUser/Group/show_content.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show_content.html.twig");
    }
}
