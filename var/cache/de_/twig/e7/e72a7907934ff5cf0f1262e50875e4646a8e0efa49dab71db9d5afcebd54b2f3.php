<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_7efe59fd45d88a2d3992e5f0d3ccc064a93f955ca09501ecf6fe9d6c3c95910a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_5a7212aba9803e8bbdfe0bee0cd5a9372614caeb352cc1797b82be281c62494e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a7212aba9803e8bbdfe0bee0cd5a9372614caeb352cc1797b82be281c62494e->enter($__internal_5a7212aba9803e8bbdfe0bee0cd5a9372614caeb352cc1797b82be281c62494e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_b780712ab7de0029ea986a621e7ed62357200af95c147633f3adc030fc07f954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b780712ab7de0029ea986a621e7ed62357200af95c147633f3adc030fc07f954->enter($__internal_b780712ab7de0029ea986a621e7ed62357200af95c147633f3adc030fc07f954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a7212aba9803e8bbdfe0bee0cd5a9372614caeb352cc1797b82be281c62494e->leave($__internal_5a7212aba9803e8bbdfe0bee0cd5a9372614caeb352cc1797b82be281c62494e_prof);

        
        $__internal_b780712ab7de0029ea986a621e7ed62357200af95c147633f3adc030fc07f954->leave($__internal_b780712ab7de0029ea986a621e7ed62357200af95c147633f3adc030fc07f954_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_13ca0690a8db1e17eb038891f95f18a003ec526d8a260777c4b09b18d738fc29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13ca0690a8db1e17eb038891f95f18a003ec526d8a260777c4b09b18d738fc29->enter($__internal_13ca0690a8db1e17eb038891f95f18a003ec526d8a260777c4b09b18d738fc29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_03305ca0e81bab42ee179c4f1fc77a24df6d5d160a9336a4c656e415ef91c866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03305ca0e81bab42ee179c4f1fc77a24df6d5d160a9336a4c656e415ef91c866->enter($__internal_03305ca0e81bab42ee179c4f1fc77a24df6d5d160a9336a4c656e415ef91c866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_03305ca0e81bab42ee179c4f1fc77a24df6d5d160a9336a4c656e415ef91c866->leave($__internal_03305ca0e81bab42ee179c4f1fc77a24df6d5d160a9336a4c656e415ef91c866_prof);

        
        $__internal_13ca0690a8db1e17eb038891f95f18a003ec526d8a260777c4b09b18d738fc29->leave($__internal_13ca0690a8db1e17eb038891f95f18a003ec526d8a260777c4b09b18d738fc29_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
