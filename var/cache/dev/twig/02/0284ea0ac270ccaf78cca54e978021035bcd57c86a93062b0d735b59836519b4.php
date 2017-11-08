<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_b9c13aba53095d71d226ae60964a5d96c0a048b90c3b6c581bf2b00b04335022 extends Twig_Template
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
        $__internal_3f06a6cbbaf61b3a9b3d32bd0f4b86d3d069d19d32ced15c2c92c39177e1dffc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f06a6cbbaf61b3a9b3d32bd0f4b86d3d069d19d32ced15c2c92c39177e1dffc->enter($__internal_3f06a6cbbaf61b3a9b3d32bd0f4b86d3d069d19d32ced15c2c92c39177e1dffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_7dce7213821cbc880f63f642cf45196cbadfbd163b5f03e845179000ff9fd3c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dce7213821cbc880f63f642cf45196cbadfbd163b5f03e845179000ff9fd3c8->enter($__internal_7dce7213821cbc880f63f642cf45196cbadfbd163b5f03e845179000ff9fd3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_3f06a6cbbaf61b3a9b3d32bd0f4b86d3d069d19d32ced15c2c92c39177e1dffc->leave($__internal_3f06a6cbbaf61b3a9b3d32bd0f4b86d3d069d19d32ced15c2c92c39177e1dffc_prof);

        
        $__internal_7dce7213821cbc880f63f642cf45196cbadfbd163b5f03e845179000ff9fd3c8->leave($__internal_7dce7213821cbc880f63f642cf45196cbadfbd163b5f03e845179000ff9fd3c8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
