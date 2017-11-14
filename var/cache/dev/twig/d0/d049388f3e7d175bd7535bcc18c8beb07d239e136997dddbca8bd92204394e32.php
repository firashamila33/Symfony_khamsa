<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_0a189476803ec4d509104f34426976fc57612db62bcaa08fb15716dcc36bc477 extends Twig_Template
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
        $__internal_7267b48ecfefa7a32dbab4a035b9eaa40806baa453263809788ee31ea275b586 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7267b48ecfefa7a32dbab4a035b9eaa40806baa453263809788ee31ea275b586->enter($__internal_7267b48ecfefa7a32dbab4a035b9eaa40806baa453263809788ee31ea275b586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_d23e076994cfedd588bcd6f3c9e6a84abe3299470bffc59e328c9698f0873aea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d23e076994cfedd588bcd6f3c9e6a84abe3299470bffc59e328c9698f0873aea->enter($__internal_d23e076994cfedd588bcd6f3c9e6a84abe3299470bffc59e328c9698f0873aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7267b48ecfefa7a32dbab4a035b9eaa40806baa453263809788ee31ea275b586->leave($__internal_7267b48ecfefa7a32dbab4a035b9eaa40806baa453263809788ee31ea275b586_prof);

        
        $__internal_d23e076994cfedd588bcd6f3c9e6a84abe3299470bffc59e328c9698f0873aea->leave($__internal_d23e076994cfedd588bcd6f3c9e6a84abe3299470bffc59e328c9698f0873aea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
