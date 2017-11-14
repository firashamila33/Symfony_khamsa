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
        $__internal_782d845ae74c079f86017aa6a77489fd697369972f492e42750df359ae145d26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_782d845ae74c079f86017aa6a77489fd697369972f492e42750df359ae145d26->enter($__internal_782d845ae74c079f86017aa6a77489fd697369972f492e42750df359ae145d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_7b3c64e4446ace6dfd82fba482b2df616ac488c3f7c6396df382bff9173b1f16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b3c64e4446ace6dfd82fba482b2df616ac488c3f7c6396df382bff9173b1f16->enter($__internal_7b3c64e4446ace6dfd82fba482b2df616ac488c3f7c6396df382bff9173b1f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_782d845ae74c079f86017aa6a77489fd697369972f492e42750df359ae145d26->leave($__internal_782d845ae74c079f86017aa6a77489fd697369972f492e42750df359ae145d26_prof);

        
        $__internal_7b3c64e4446ace6dfd82fba482b2df616ac488c3f7c6396df382bff9173b1f16->leave($__internal_7b3c64e4446ace6dfd82fba482b2df616ac488c3f7c6396df382bff9173b1f16_prof);

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
