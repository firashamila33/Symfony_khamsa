<?php

/* @EspritForAllBackEnd/Club/UpdateClub.html.twig */
class __TwigTemplate_54aba3b2b124f7d02f76eaaa7c2d8d653868b3e30456013f3af9a6b3f3fe734b extends Twig_Template
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
        $__internal_a5f806298a9976ac64009744426f5b12d57c5263ccf7cbf0ddd3ecf3770326a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5f806298a9976ac64009744426f5b12d57c5263ccf7cbf0ddd3ecf3770326a0->enter($__internal_a5f806298a9976ac64009744426f5b12d57c5263ccf7cbf0ddd3ecf3770326a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EspritForAllBackEnd/Club/UpdateClub.html.twig"));

        $__internal_6706c2b3e9f850b0656f848fafa6c5799ff3fa61db2d1215c4dd38fe6f494377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6706c2b3e9f850b0656f848fafa6c5799ff3fa61db2d1215c4dd38fe6f494377->enter($__internal_6706c2b3e9f850b0656f848fafa6c5799ff3fa61db2d1215c4dd38fe6f494377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EspritForAllBackEnd/Club/UpdateClub.html.twig"));

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
        
        $__internal_a5f806298a9976ac64009744426f5b12d57c5263ccf7cbf0ddd3ecf3770326a0->leave($__internal_a5f806298a9976ac64009744426f5b12d57c5263ccf7cbf0ddd3ecf3770326a0_prof);

        
        $__internal_6706c2b3e9f850b0656f848fafa6c5799ff3fa61db2d1215c4dd38fe6f494377->leave($__internal_6706c2b3e9f850b0656f848fafa6c5799ff3fa61db2d1215c4dd38fe6f494377_prof);

    }

    public function getTemplateName()
    {
        return "@EspritForAllBackEnd/Club/UpdateClub.html.twig";
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
{{ form_end(form) }}", "@EspritForAllBackEnd/Club/UpdateClub.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\src\\EspritForAll\\BackEndBundle\\Resources\\views\\Club\\UpdateClub.html.twig");
    }
}
