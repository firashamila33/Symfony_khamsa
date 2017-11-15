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
        $__internal_b731cc44ddcc61b5a1189fddfe89ee28bc00cb3fdd000bdaf9e887a0ea03f6bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b731cc44ddcc61b5a1189fddfe89ee28bc00cb3fdd000bdaf9e887a0ea03f6bc->enter($__internal_b731cc44ddcc61b5a1189fddfe89ee28bc00cb3fdd000bdaf9e887a0ea03f6bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_00ee74ef61f4266500dc2a1e6eba9a08510b4d423017e36ea874ce44c7eaa8bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ee74ef61f4266500dc2a1e6eba9a08510b4d423017e36ea874ce44c7eaa8bf->enter($__internal_00ee74ef61f4266500dc2a1e6eba9a08510b4d423017e36ea874ce44c7eaa8bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b731cc44ddcc61b5a1189fddfe89ee28bc00cb3fdd000bdaf9e887a0ea03f6bc->leave($__internal_b731cc44ddcc61b5a1189fddfe89ee28bc00cb3fdd000bdaf9e887a0ea03f6bc_prof);

        
        $__internal_00ee74ef61f4266500dc2a1e6eba9a08510b4d423017e36ea874ce44c7eaa8bf->leave($__internal_00ee74ef61f4266500dc2a1e6eba9a08510b4d423017e36ea874ce44c7eaa8bf_prof);

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
