<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_4c47967626b679e51c1fff14dd26093f2a4efef683512900c9901af91b29645f extends Twig_Template
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
        $__internal_7f2e8dd731cc9eef90167f87316fda8b5eb4d5a52940f036b0973efb6f0c7452 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f2e8dd731cc9eef90167f87316fda8b5eb4d5a52940f036b0973efb6f0c7452->enter($__internal_7f2e8dd731cc9eef90167f87316fda8b5eb4d5a52940f036b0973efb6f0c7452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_cc19ceec0105f592e28ad69eec96bc4ae76308337feafaff22b5520c8958270a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc19ceec0105f592e28ad69eec96bc4ae76308337feafaff22b5520c8958270a->enter($__internal_cc19ceec0105f592e28ad69eec96bc4ae76308337feafaff22b5520c8958270a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_7f2e8dd731cc9eef90167f87316fda8b5eb4d5a52940f036b0973efb6f0c7452->leave($__internal_7f2e8dd731cc9eef90167f87316fda8b5eb4d5a52940f036b0973efb6f0c7452_prof);

        
        $__internal_cc19ceec0105f592e28ad69eec96bc4ae76308337feafaff22b5520c8958270a->leave($__internal_cc19ceec0105f592e28ad69eec96bc4ae76308337feafaff22b5520c8958270a_prof);

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
", "TwigBundle:Exception:error.js.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
