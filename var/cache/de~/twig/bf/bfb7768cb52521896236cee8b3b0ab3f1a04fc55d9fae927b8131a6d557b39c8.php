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
        $__internal_f2125fed81d65e6c288bfaf59f4b1da0a7dcb5b21d95a36c71b6200e9d956f34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2125fed81d65e6c288bfaf59f4b1da0a7dcb5b21d95a36c71b6200e9d956f34->enter($__internal_f2125fed81d65e6c288bfaf59f4b1da0a7dcb5b21d95a36c71b6200e9d956f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_8f12714af1a4070cd37b24e3b0504d2f2b6c72d004becca83fd50373c7406b28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f12714af1a4070cd37b24e3b0504d2f2b6c72d004becca83fd50373c7406b28->enter($__internal_8f12714af1a4070cd37b24e3b0504d2f2b6c72d004becca83fd50373c7406b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2125fed81d65e6c288bfaf59f4b1da0a7dcb5b21d95a36c71b6200e9d956f34->leave($__internal_f2125fed81d65e6c288bfaf59f4b1da0a7dcb5b21d95a36c71b6200e9d956f34_prof);

        
        $__internal_8f12714af1a4070cd37b24e3b0504d2f2b6c72d004becca83fd50373c7406b28->leave($__internal_8f12714af1a4070cd37b24e3b0504d2f2b6c72d004becca83fd50373c7406b28_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8e9cf19494af7bb7bd1c5ea552aaf868e6809030081099f56b3b80002c5d3b45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e9cf19494af7bb7bd1c5ea552aaf868e6809030081099f56b3b80002c5d3b45->enter($__internal_8e9cf19494af7bb7bd1c5ea552aaf868e6809030081099f56b3b80002c5d3b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8ac97e5ea2f9de5a35bb7814e795d982e1bc05ab7548735696a82e740c99f97d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac97e5ea2f9de5a35bb7814e795d982e1bc05ab7548735696a82e740c99f97d->enter($__internal_8ac97e5ea2f9de5a35bb7814e795d982e1bc05ab7548735696a82e740c99f97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_8ac97e5ea2f9de5a35bb7814e795d982e1bc05ab7548735696a82e740c99f97d->leave($__internal_8ac97e5ea2f9de5a35bb7814e795d982e1bc05ab7548735696a82e740c99f97d_prof);

        
        $__internal_8e9cf19494af7bb7bd1c5ea552aaf868e6809030081099f56b3b80002c5d3b45->leave($__internal_8e9cf19494af7bb7bd1c5ea552aaf868e6809030081099f56b3b80002c5d3b45_prof);

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
