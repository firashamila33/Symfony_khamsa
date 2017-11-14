<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_cfe0d6abe06efd1dd30dc0d1159b2937fc153b7f0f26a5f2de62760e0ce77a10 extends Twig_Template
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
        $__internal_d729d37692dfabf7b4597e8233609e16c328669165ec213f2ab4b1881e8589d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d729d37692dfabf7b4597e8233609e16c328669165ec213f2ab4b1881e8589d7->enter($__internal_d729d37692dfabf7b4597e8233609e16c328669165ec213f2ab4b1881e8589d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_feece255bc6c6fa00ba9346eecc71d365349c6d9255148bf63dd0e2ef718d5da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feece255bc6c6fa00ba9346eecc71d365349c6d9255148bf63dd0e2ef718d5da->enter($__internal_feece255bc6c6fa00ba9346eecc71d365349c6d9255148bf63dd0e2ef718d5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_d729d37692dfabf7b4597e8233609e16c328669165ec213f2ab4b1881e8589d7->leave($__internal_d729d37692dfabf7b4597e8233609e16c328669165ec213f2ab4b1881e8589d7_prof);

        
        $__internal_feece255bc6c6fa00ba9346eecc71d365349c6d9255148bf63dd0e2ef718d5da->leave($__internal_feece255bc6c6fa00ba9346eecc71d365349c6d9255148bf63dd0e2ef718d5da_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
