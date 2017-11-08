<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_493da5ade5743a12eb0410fe79f286b008ebc119ae3de90574b022a6bab54346 extends Twig_Template
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
        $__internal_f111828779055f24fecac3d7215061b3c0ec1908496e9a5dc8f5bea3e578c1de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f111828779055f24fecac3d7215061b3c0ec1908496e9a5dc8f5bea3e578c1de->enter($__internal_f111828779055f24fecac3d7215061b3c0ec1908496e9a5dc8f5bea3e578c1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_ffdf924f1736c41aaa2466d8d44bcedd5357e1eaead63da1cbcd1d803795d030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffdf924f1736c41aaa2466d8d44bcedd5357e1eaead63da1cbcd1d803795d030->enter($__internal_ffdf924f1736c41aaa2466d8d44bcedd5357e1eaead63da1cbcd1d803795d030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_f111828779055f24fecac3d7215061b3c0ec1908496e9a5dc8f5bea3e578c1de->leave($__internal_f111828779055f24fecac3d7215061b3c0ec1908496e9a5dc8f5bea3e578c1de_prof);

        
        $__internal_ffdf924f1736c41aaa2466d8d44bcedd5357e1eaead63da1cbcd1d803795d030->leave($__internal_ffdf924f1736c41aaa2466d8d44bcedd5357e1eaead63da1cbcd1d803795d030_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
