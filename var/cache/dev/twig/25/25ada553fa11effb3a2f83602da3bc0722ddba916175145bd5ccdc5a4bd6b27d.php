<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_a1ddbaf0d8e84d64eb6808c00c4b9efb2606d05a100996b5d65200b2f62cd621 extends Twig_Template
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
        $__internal_74ba007461b6d95679df2f7ca67813980c308c8dc575a063c21367531b210af5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74ba007461b6d95679df2f7ca67813980c308c8dc575a063c21367531b210af5->enter($__internal_74ba007461b6d95679df2f7ca67813980c308c8dc575a063c21367531b210af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_284136e79b93fec435c9be0609434c620b601be344b06cfdebef437690206a79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_284136e79b93fec435c9be0609434c620b601be344b06cfdebef437690206a79->enter($__internal_284136e79b93fec435c9be0609434c620b601be344b06cfdebef437690206a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_74ba007461b6d95679df2f7ca67813980c308c8dc575a063c21367531b210af5->leave($__internal_74ba007461b6d95679df2f7ca67813980c308c8dc575a063c21367531b210af5_prof);

        
        $__internal_284136e79b93fec435c9be0609434c620b601be344b06cfdebef437690206a79->leave($__internal_284136e79b93fec435c9be0609434c620b601be344b06cfdebef437690206a79_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
