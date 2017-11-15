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
        $__internal_62c85caaccb40430fea1150a42712484d1bf75519f595ef2dd3e1d859166a473 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62c85caaccb40430fea1150a42712484d1bf75519f595ef2dd3e1d859166a473->enter($__internal_62c85caaccb40430fea1150a42712484d1bf75519f595ef2dd3e1d859166a473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_150eae42fe9f418f137894e024caec0ef790ac08b3e01280d45ba295c6f4fef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_150eae42fe9f418f137894e024caec0ef790ac08b3e01280d45ba295c6f4fef4->enter($__internal_150eae42fe9f418f137894e024caec0ef790ac08b3e01280d45ba295c6f4fef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_62c85caaccb40430fea1150a42712484d1bf75519f595ef2dd3e1d859166a473->leave($__internal_62c85caaccb40430fea1150a42712484d1bf75519f595ef2dd3e1d859166a473_prof);

        
        $__internal_150eae42fe9f418f137894e024caec0ef790ac08b3e01280d45ba295c6f4fef4->leave($__internal_150eae42fe9f418f137894e024caec0ef790ac08b3e01280d45ba295c6f4fef4_prof);

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
