<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_bd617b5dadd7f95f90c6f5a0d1c17695ce9c11eac0e02641c0dea59767a8ee6e extends Twig_Template
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
        $__internal_d36f0fc0be304687acbad74d55af189d96e8dc12848ad20c264fe54facc4f556 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d36f0fc0be304687acbad74d55af189d96e8dc12848ad20c264fe54facc4f556->enter($__internal_d36f0fc0be304687acbad74d55af189d96e8dc12848ad20c264fe54facc4f556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_62028358a0d544d94624a52c06c3063478a2c52ad27a0840f777024467938b57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62028358a0d544d94624a52c06c3063478a2c52ad27a0840f777024467938b57->enter($__internal_62028358a0d544d94624a52c06c3063478a2c52ad27a0840f777024467938b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d36f0fc0be304687acbad74d55af189d96e8dc12848ad20c264fe54facc4f556->leave($__internal_d36f0fc0be304687acbad74d55af189d96e8dc12848ad20c264fe54facc4f556_prof);

        
        $__internal_62028358a0d544d94624a52c06c3063478a2c52ad27a0840f777024467938b57->leave($__internal_62028358a0d544d94624a52c06c3063478a2c52ad27a0840f777024467938b57_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
