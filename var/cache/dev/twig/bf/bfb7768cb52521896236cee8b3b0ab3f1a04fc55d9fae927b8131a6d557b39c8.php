<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_4b1f2011408592f84a3a86573147e0b0ecee81905f3d42d8bcd129477ff021cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_b4461e31c8b136663831956a74c3f13c67bc457c0b1762b065a9d95d72170538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4461e31c8b136663831956a74c3f13c67bc457c0b1762b065a9d95d72170538->enter($__internal_b4461e31c8b136663831956a74c3f13c67bc457c0b1762b065a9d95d72170538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_68e346b4820a6e7153ec85733686292099da8214b665d1d4df286a38ba214d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68e346b4820a6e7153ec85733686292099da8214b665d1d4df286a38ba214d43->enter($__internal_68e346b4820a6e7153ec85733686292099da8214b665d1d4df286a38ba214d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4461e31c8b136663831956a74c3f13c67bc457c0b1762b065a9d95d72170538->leave($__internal_b4461e31c8b136663831956a74c3f13c67bc457c0b1762b065a9d95d72170538_prof);

        
        $__internal_68e346b4820a6e7153ec85733686292099da8214b665d1d4df286a38ba214d43->leave($__internal_68e346b4820a6e7153ec85733686292099da8214b665d1d4df286a38ba214d43_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_68d5774419bed38cfb8ae6f2a4bcbcc81b4ed974f77b482e665f066d2232b8a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68d5774419bed38cfb8ae6f2a4bcbcc81b4ed974f77b482e665f066d2232b8a8->enter($__internal_68d5774419bed38cfb8ae6f2a4bcbcc81b4ed974f77b482e665f066d2232b8a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_40895cf8be3ccb79e540d2fd1746e19272641dbf51384c4f95ec8da225a3da6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40895cf8be3ccb79e540d2fd1746e19272641dbf51384c4f95ec8da225a3da6b->enter($__internal_40895cf8be3ccb79e540d2fd1746e19272641dbf51384c4f95ec8da225a3da6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_40895cf8be3ccb79e540d2fd1746e19272641dbf51384c4f95ec8da225a3da6b->leave($__internal_40895cf8be3ccb79e540d2fd1746e19272641dbf51384c4f95ec8da225a3da6b_prof);

        
        $__internal_68d5774419bed38cfb8ae6f2a4bcbcc81b4ed974f77b482e665f066d2232b8a8->leave($__internal_68d5774419bed38cfb8ae6f2a4bcbcc81b4ed974f77b482e665f066d2232b8a8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Security/login.html.twig");
    }
}
