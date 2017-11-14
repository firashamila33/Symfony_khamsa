<?php

/* EspritForAllBackEndBundle:Club:UpdateClub.html.twig */
class __TwigTemplate_7b2354e8fed99a9424cb37db22416114d6352a83d22d2b4ef4174d699b63a670 extends Twig_Template
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
        $__internal_c00c099a93cc90b5db66e9a2e15f35ef758d60b2a5b0bff26abe2276a7b6629e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c00c099a93cc90b5db66e9a2e15f35ef758d60b2a5b0bff26abe2276a7b6629e->enter($__internal_c00c099a93cc90b5db66e9a2e15f35ef758d60b2a5b0bff26abe2276a7b6629e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EspritForAllBackEndBundle:Club:UpdateClub.html.twig"));

        $__internal_70a6e344076b460e6f7a776b7f76e11e47b7d6306945e254429532cef556aa8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70a6e344076b460e6f7a776b7f76e11e47b7d6306945e254429532cef556aa8a->enter($__internal_70a6e344076b460e6f7a776b7f76e11e47b7d6306945e254429532cef556aa8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EspritForAllBackEndBundle:Club:UpdateClub.html.twig"));

        // line 1
        echo "<h1>Update</h1>
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
<table>
    <tr>
        <td>Id</td>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "id", array()), 'widget');
        echo "</td>
    </tr>
    <tr>
        <td>Libelle</td>
        <td>";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "libelle", array()), 'widget');
        echo "</td>
    </tr>



</table>
";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        
        $__internal_c00c099a93cc90b5db66e9a2e15f35ef758d60b2a5b0bff26abe2276a7b6629e->leave($__internal_c00c099a93cc90b5db66e9a2e15f35ef758d60b2a5b0bff26abe2276a7b6629e_prof);

        
        $__internal_70a6e344076b460e6f7a776b7f76e11e47b7d6306945e254429532cef556aa8a->leave($__internal_70a6e344076b460e6f7a776b7f76e11e47b7d6306945e254429532cef556aa8a_prof);

    }

    public function getTemplateName()
    {
        return "EspritForAllBackEndBundle:Club:UpdateClub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  42 => 10,  35 => 6,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Update</h1>
{{ form_start(form) }}
<table>
    <tr>
        <td>Id</td>
        <td>{{ form_widget(form.id) }}</td>
    </tr>
    <tr>
        <td>Libelle</td>
        <td>{{ form_widget(form.libelle) }}</td>
    </tr>



</table>
{{ form_end(form) }}", "EspritForAllBackEndBundle:Club:UpdateClub.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\src\\EspritForAll\\BackEndBundle/Resources/views/Club/UpdateClub.html.twig");
    }
}
