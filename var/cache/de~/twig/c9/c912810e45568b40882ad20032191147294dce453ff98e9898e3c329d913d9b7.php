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
        $__internal_dbd59cffa68469a0b8451a542debc68a3a0ae89614fe3693fdbeae2f433fb238 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbd59cffa68469a0b8451a542debc68a3a0ae89614fe3693fdbeae2f433fb238->enter($__internal_dbd59cffa68469a0b8451a542debc68a3a0ae89614fe3693fdbeae2f433fb238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EspritForAllBackEndBundle:Club:UpdateClub.html.twig"));

        $__internal_59dde3bf4daf8cea9b58f689128983f8aa3389b988f471ae342e96d0f984e1ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59dde3bf4daf8cea9b58f689128983f8aa3389b988f471ae342e96d0f984e1ce->enter($__internal_59dde3bf4daf8cea9b58f689128983f8aa3389b988f471ae342e96d0f984e1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EspritForAllBackEndBundle:Club:UpdateClub.html.twig"));

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
        
        $__internal_dbd59cffa68469a0b8451a542debc68a3a0ae89614fe3693fdbeae2f433fb238->leave($__internal_dbd59cffa68469a0b8451a542debc68a3a0ae89614fe3693fdbeae2f433fb238_prof);

        
        $__internal_59dde3bf4daf8cea9b58f689128983f8aa3389b988f471ae342e96d0f984e1ce->leave($__internal_59dde3bf4daf8cea9b58f689128983f8aa3389b988f471ae342e96d0f984e1ce_prof);

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
