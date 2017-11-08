<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_7641f5c6a3d8156a346780cd306f808c3970164a09088f8e36787b1926507533 extends Twig_Template
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
        $__internal_680158f765d1124383681b116c587312f42d2b10a223c707f7a5beb80b9a583e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_680158f765d1124383681b116c587312f42d2b10a223c707f7a5beb80b9a583e->enter($__internal_680158f765d1124383681b116c587312f42d2b10a223c707f7a5beb80b9a583e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_e0e87de52312c19e2c8b630b16e75c9e1ddedc175e77913642f5e623700bdc7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e87de52312c19e2c8b630b16e75c9e1ddedc175e77913642f5e623700bdc7a->enter($__internal_e0e87de52312c19e2c8b630b16e75c9e1ddedc175e77913642f5e623700bdc7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_680158f765d1124383681b116c587312f42d2b10a223c707f7a5beb80b9a583e->leave($__internal_680158f765d1124383681b116c587312f42d2b10a223c707f7a5beb80b9a583e_prof);

        
        $__internal_e0e87de52312c19e2c8b630b16e75c9e1ddedc175e77913642f5e623700bdc7a->leave($__internal_e0e87de52312c19e2c8b630b16e75c9e1ddedc175e77913642f5e623700bdc7a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
