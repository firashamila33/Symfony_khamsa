<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_b15a4b18093489f93ef5b5489dc95aeaaac7a8caddac7c1f45fd948b8772eb99 extends Twig_Template
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
        $__internal_1e6e926e2b17a56dad853a7870ec01586d3443b4b58eeede4c1a06bbed685183 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e6e926e2b17a56dad853a7870ec01586d3443b4b58eeede4c1a06bbed685183->enter($__internal_1e6e926e2b17a56dad853a7870ec01586d3443b4b58eeede4c1a06bbed685183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_d70d8eb1b47f2d47e6299bd6a17b0e6c4ac59171b262a491cf6d42198cfba64f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d70d8eb1b47f2d47e6299bd6a17b0e6c4ac59171b262a491cf6d42198cfba64f->enter($__internal_d70d8eb1b47f2d47e6299bd6a17b0e6c4ac59171b262a491cf6d42198cfba64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1e6e926e2b17a56dad853a7870ec01586d3443b4b58eeede4c1a06bbed685183->leave($__internal_1e6e926e2b17a56dad853a7870ec01586d3443b4b58eeede4c1a06bbed685183_prof);

        
        $__internal_d70d8eb1b47f2d47e6299bd6a17b0e6c4ac59171b262a491cf6d42198cfba64f->leave($__internal_d70d8eb1b47f2d47e6299bd6a17b0e6c4ac59171b262a491cf6d42198cfba64f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
