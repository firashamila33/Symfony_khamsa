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
        $__internal_f2569814a9e1daf6e4aa71286b4fce7ffb5070fce6b0187d9cc883d981d47c90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2569814a9e1daf6e4aa71286b4fce7ffb5070fce6b0187d9cc883d981d47c90->enter($__internal_f2569814a9e1daf6e4aa71286b4fce7ffb5070fce6b0187d9cc883d981d47c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EspritForAllBackEnd/Club/UpdateClub.html.twig"));

        $__internal_b14a53dfe9916b01d1842cdcdb0534de34ac250b7d5d6e60273191de6d0827b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b14a53dfe9916b01d1842cdcdb0534de34ac250b7d5d6e60273191de6d0827b8->enter($__internal_b14a53dfe9916b01d1842cdcdb0534de34ac250b7d5d6e60273191de6d0827b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EspritForAllBackEnd/Club/UpdateClub.html.twig"));

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
        
        $__internal_f2569814a9e1daf6e4aa71286b4fce7ffb5070fce6b0187d9cc883d981d47c90->leave($__internal_f2569814a9e1daf6e4aa71286b4fce7ffb5070fce6b0187d9cc883d981d47c90_prof);

        
        $__internal_b14a53dfe9916b01d1842cdcdb0534de34ac250b7d5d6e60273191de6d0827b8->leave($__internal_b14a53dfe9916b01d1842cdcdb0534de34ac250b7d5d6e60273191de6d0827b8_prof);

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
