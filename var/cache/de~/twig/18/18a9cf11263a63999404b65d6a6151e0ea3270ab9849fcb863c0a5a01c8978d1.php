<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_986e5f41627e552cacbba10170479490698c0eda2fbb601e11b4cd6a13613843 extends Twig_Template
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
        $__internal_fe2ae258ba461102da4cbad0dfcde26047d89e98239bf821b5b3982790ea3420 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe2ae258ba461102da4cbad0dfcde26047d89e98239bf821b5b3982790ea3420->enter($__internal_fe2ae258ba461102da4cbad0dfcde26047d89e98239bf821b5b3982790ea3420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_4ab12a95959bb185dbaef611cdfc7639d073f7369d4a261474b6d2377ea02c9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ab12a95959bb185dbaef611cdfc7639d073f7369d4a261474b6d2377ea02c9b->enter($__internal_4ab12a95959bb185dbaef611cdfc7639d073f7369d4a261474b6d2377ea02c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_fe2ae258ba461102da4cbad0dfcde26047d89e98239bf821b5b3982790ea3420->leave($__internal_fe2ae258ba461102da4cbad0dfcde26047d89e98239bf821b5b3982790ea3420_prof);

        
        $__internal_4ab12a95959bb185dbaef611cdfc7639d073f7369d4a261474b6d2377ea02c9b->leave($__internal_4ab12a95959bb185dbaef611cdfc7639d073f7369d4a261474b6d2377ea02c9b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
