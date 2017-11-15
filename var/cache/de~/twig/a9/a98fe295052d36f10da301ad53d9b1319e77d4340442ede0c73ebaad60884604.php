<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_be40e6d85b9b1bec121856420f6feffed7ef66cdf05bbec68d3b21964fef1866 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_10530f4ab0f9d22e537d3f7a002bce9f359604b48f9916758a6c2449c741cf2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10530f4ab0f9d22e537d3f7a002bce9f359604b48f9916758a6c2449c741cf2e->enter($__internal_10530f4ab0f9d22e537d3f7a002bce9f359604b48f9916758a6c2449c741cf2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_f884f73772dc6dc46c13d36f30ca9f74244f0284dcbe65e8fa4910d2a7ca0df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f884f73772dc6dc46c13d36f30ca9f74244f0284dcbe65e8fa4910d2a7ca0df7->enter($__internal_f884f73772dc6dc46c13d36f30ca9f74244f0284dcbe65e8fa4910d2a7ca0df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10530f4ab0f9d22e537d3f7a002bce9f359604b48f9916758a6c2449c741cf2e->leave($__internal_10530f4ab0f9d22e537d3f7a002bce9f359604b48f9916758a6c2449c741cf2e_prof);

        
        $__internal_f884f73772dc6dc46c13d36f30ca9f74244f0284dcbe65e8fa4910d2a7ca0df7->leave($__internal_f884f73772dc6dc46c13d36f30ca9f74244f0284dcbe65e8fa4910d2a7ca0df7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a9a69c32955a86744dba20fa927e15dd86fa4a84363db467b4f1935f30efe239 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9a69c32955a86744dba20fa927e15dd86fa4a84363db467b4f1935f30efe239->enter($__internal_a9a69c32955a86744dba20fa927e15dd86fa4a84363db467b4f1935f30efe239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_da6a9d7d17f8b704b73fe3f35fce0cc2a242df5bf13c8f3bcddcf0410c614a45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da6a9d7d17f8b704b73fe3f35fce0cc2a242df5bf13c8f3bcddcf0410c614a45->enter($__internal_da6a9d7d17f8b704b73fe3f35fce0cc2a242df5bf13c8f3bcddcf0410c614a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_da6a9d7d17f8b704b73fe3f35fce0cc2a242df5bf13c8f3bcddcf0410c614a45->leave($__internal_da6a9d7d17f8b704b73fe3f35fce0cc2a242df5bf13c8f3bcddcf0410c614a45_prof);

        
        $__internal_a9a69c32955a86744dba20fa927e15dd86fa4a84363db467b4f1935f30efe239->leave($__internal_a9a69c32955a86744dba20fa927e15dd86fa4a84363db467b4f1935f30efe239_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
