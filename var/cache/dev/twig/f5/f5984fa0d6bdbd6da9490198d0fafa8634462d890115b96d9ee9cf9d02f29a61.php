<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_7fd6b229e26e1963b2cb9481043c23f88dfb113c70c02f8c5e1fbe31f308b8a9 extends Twig_Template
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
        $__internal_ce0eb0ba6e82c95f1e2b210505d89140c337993257836b00154f12f7c46d5376 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce0eb0ba6e82c95f1e2b210505d89140c337993257836b00154f12f7c46d5376->enter($__internal_ce0eb0ba6e82c95f1e2b210505d89140c337993257836b00154f12f7c46d5376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_263196f41964e1ab157d3b27f82b00632371aff653e774924e25d50b1155b2ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_263196f41964e1ab157d3b27f82b00632371aff653e774924e25d50b1155b2ec->enter($__internal_263196f41964e1ab157d3b27f82b00632371aff653e774924e25d50b1155b2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_ce0eb0ba6e82c95f1e2b210505d89140c337993257836b00154f12f7c46d5376->leave($__internal_ce0eb0ba6e82c95f1e2b210505d89140c337993257836b00154f12f7c46d5376_prof);

        
        $__internal_263196f41964e1ab157d3b27f82b00632371aff653e774924e25d50b1155b2ec->leave($__internal_263196f41964e1ab157d3b27f82b00632371aff653e774924e25d50b1155b2ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
