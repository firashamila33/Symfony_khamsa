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
        $__internal_0b189bd641c0b437d511581c6a267cfd0100288a7cfe752cf45ba4e42ff49181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b189bd641c0b437d511581c6a267cfd0100288a7cfe752cf45ba4e42ff49181->enter($__internal_0b189bd641c0b437d511581c6a267cfd0100288a7cfe752cf45ba4e42ff49181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_5f75cbe73e19e2f0554edc6ca7ecc6ad3a4a3496cdb0d7f59b09496dec6fed45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f75cbe73e19e2f0554edc6ca7ecc6ad3a4a3496cdb0d7f59b09496dec6fed45->enter($__internal_5f75cbe73e19e2f0554edc6ca7ecc6ad3a4a3496cdb0d7f59b09496dec6fed45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_0b189bd641c0b437d511581c6a267cfd0100288a7cfe752cf45ba4e42ff49181->leave($__internal_0b189bd641c0b437d511581c6a267cfd0100288a7cfe752cf45ba4e42ff49181_prof);

        
        $__internal_5f75cbe73e19e2f0554edc6ca7ecc6ad3a4a3496cdb0d7f59b09496dec6fed45->leave($__internal_5f75cbe73e19e2f0554edc6ca7ecc6ad3a4a3496cdb0d7f59b09496dec6fed45_prof);

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
