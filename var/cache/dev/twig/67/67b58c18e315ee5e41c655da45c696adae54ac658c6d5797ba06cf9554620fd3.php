<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_933c2ab80b461e9e935cedad6b731e7ff2c8debd2564ad829f00087281d81a0b extends Twig_Template
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
        $__internal_9c6344fd77c31643a5aedfe3abc79ede5c12f840549fc309bea57428c89d1ac8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c6344fd77c31643a5aedfe3abc79ede5c12f840549fc309bea57428c89d1ac8->enter($__internal_9c6344fd77c31643a5aedfe3abc79ede5c12f840549fc309bea57428c89d1ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_21dd3763caae25e7efa99e85cb4b21ab8e1a17b1785336d46c34624fa065d2f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21dd3763caae25e7efa99e85cb4b21ab8e1a17b1785336d46c34624fa065d2f4->enter($__internal_21dd3763caae25e7efa99e85cb4b21ab8e1a17b1785336d46c34624fa065d2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_9c6344fd77c31643a5aedfe3abc79ede5c12f840549fc309bea57428c89d1ac8->leave($__internal_9c6344fd77c31643a5aedfe3abc79ede5c12f840549fc309bea57428c89d1ac8_prof);

        
        $__internal_21dd3763caae25e7efa99e85cb4b21ab8e1a17b1785336d46c34624fa065d2f4->leave($__internal_21dd3763caae25e7efa99e85cb4b21ab8e1a17b1785336d46c34624fa065d2f4_prof);

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
", "TwigBundle:Exception:error.css.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
