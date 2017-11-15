<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_95e95fc49ab2cadae78ce21cf954ae89bd3ddadef65e2636c385e0768b1c2427 extends Twig_Template
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
        $__internal_7afe8733eaa31c5a86080910d5e5b1e36eff70f6dd524da7d34dbed2f32320e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7afe8733eaa31c5a86080910d5e5b1e36eff70f6dd524da7d34dbed2f32320e0->enter($__internal_7afe8733eaa31c5a86080910d5e5b1e36eff70f6dd524da7d34dbed2f32320e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_f9c26bbdac85e446e231f23defdb7a04e3861c591f4b908f3af74385dafa86d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9c26bbdac85e446e231f23defdb7a04e3861c591f4b908f3af74385dafa86d6->enter($__internal_f9c26bbdac85e446e231f23defdb7a04e3861c591f4b908f3af74385dafa86d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7afe8733eaa31c5a86080910d5e5b1e36eff70f6dd524da7d34dbed2f32320e0->leave($__internal_7afe8733eaa31c5a86080910d5e5b1e36eff70f6dd524da7d34dbed2f32320e0_prof);

        
        $__internal_f9c26bbdac85e446e231f23defdb7a04e3861c591f4b908f3af74385dafa86d6->leave($__internal_f9c26bbdac85e446e231f23defdb7a04e3861c591f4b908f3af74385dafa86d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
