<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_aaa66d88fba478b38790aa39b7ba7260b579bdc9c03b439718296ac0cf324982 extends Twig_Template
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
        $__internal_b9aceb581714126a90cb706af3cd0b1f105183e1ae3ede764d89d997e1af3dce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9aceb581714126a90cb706af3cd0b1f105183e1ae3ede764d89d997e1af3dce->enter($__internal_b9aceb581714126a90cb706af3cd0b1f105183e1ae3ede764d89d997e1af3dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_e6d50fafa52dfa463e68bd3db64e383f7b048d4e608c8613fbe8580446fae3f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6d50fafa52dfa463e68bd3db64e383f7b048d4e608c8613fbe8580446fae3f6->enter($__internal_e6d50fafa52dfa463e68bd3db64e383f7b048d4e608c8613fbe8580446fae3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b9aceb581714126a90cb706af3cd0b1f105183e1ae3ede764d89d997e1af3dce->leave($__internal_b9aceb581714126a90cb706af3cd0b1f105183e1ae3ede764d89d997e1af3dce_prof);

        
        $__internal_e6d50fafa52dfa463e68bd3db64e383f7b048d4e608c8613fbe8580446fae3f6->leave($__internal_e6d50fafa52dfa463e68bd3db64e383f7b048d4e608c8613fbe8580446fae3f6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
