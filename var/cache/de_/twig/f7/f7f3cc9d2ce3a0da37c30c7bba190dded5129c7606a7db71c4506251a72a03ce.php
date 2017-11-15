<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_da0dc2f8deb66f22aca45086666854fb2f8e701afc420e24177b4cd08f54d7a0 extends Twig_Template
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
        $__internal_6c1f176eb49417a42b9227bed86aa79ed70fdc628d938e4b63b548b748485aa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c1f176eb49417a42b9227bed86aa79ed70fdc628d938e4b63b548b748485aa7->enter($__internal_6c1f176eb49417a42b9227bed86aa79ed70fdc628d938e4b63b548b748485aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_94c73d0a2dfa89195c1de6677479b64ee07c5d3690036be1772fa51e83cfeaca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94c73d0a2dfa89195c1de6677479b64ee07c5d3690036be1772fa51e83cfeaca->enter($__internal_94c73d0a2dfa89195c1de6677479b64ee07c5d3690036be1772fa51e83cfeaca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_6c1f176eb49417a42b9227bed86aa79ed70fdc628d938e4b63b548b748485aa7->leave($__internal_6c1f176eb49417a42b9227bed86aa79ed70fdc628d938e4b63b548b748485aa7_prof);

        
        $__internal_94c73d0a2dfa89195c1de6677479b64ee07c5d3690036be1772fa51e83cfeaca->leave($__internal_94c73d0a2dfa89195c1de6677479b64ee07c5d3690036be1772fa51e83cfeaca_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
