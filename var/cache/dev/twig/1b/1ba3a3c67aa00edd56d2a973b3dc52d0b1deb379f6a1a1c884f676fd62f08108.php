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
        $__internal_5e0dc420c530b754d223330f1b35370ad01b127f171f958091fc4ca8093db5bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e0dc420c530b754d223330f1b35370ad01b127f171f958091fc4ca8093db5bc->enter($__internal_5e0dc420c530b754d223330f1b35370ad01b127f171f958091fc4ca8093db5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_3fa510999058cf7e1be68a07ccffa47fd5f7a2e60b8de050a6b43199473ae3d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fa510999058cf7e1be68a07ccffa47fd5f7a2e60b8de050a6b43199473ae3d2->enter($__internal_3fa510999058cf7e1be68a07ccffa47fd5f7a2e60b8de050a6b43199473ae3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_5e0dc420c530b754d223330f1b35370ad01b127f171f958091fc4ca8093db5bc->leave($__internal_5e0dc420c530b754d223330f1b35370ad01b127f171f958091fc4ca8093db5bc_prof);

        
        $__internal_3fa510999058cf7e1be68a07ccffa47fd5f7a2e60b8de050a6b43199473ae3d2->leave($__internal_3fa510999058cf7e1be68a07ccffa47fd5f7a2e60b8de050a6b43199473ae3d2_prof);

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
