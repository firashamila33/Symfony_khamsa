<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_a373a61fb9b0bbd39f060a3199384e657a2fbfcb55c511060f0e0fad1f4b4bfe extends Twig_Template
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
        $__internal_0eb03272719286a4a5410a6f52e6917152c9cabd6a9a419b5c8795856a3b4c53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eb03272719286a4a5410a6f52e6917152c9cabd6a9a419b5c8795856a3b4c53->enter($__internal_0eb03272719286a4a5410a6f52e6917152c9cabd6a9a419b5c8795856a3b4c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_579f0f4ca7fb33e77288d0d5051088e6bfac0420dcc8ed979ff246c4b252c7dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_579f0f4ca7fb33e77288d0d5051088e6bfac0420dcc8ed979ff246c4b252c7dc->enter($__internal_579f0f4ca7fb33e77288d0d5051088e6bfac0420dcc8ed979ff246c4b252c7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_0eb03272719286a4a5410a6f52e6917152c9cabd6a9a419b5c8795856a3b4c53->leave($__internal_0eb03272719286a4a5410a6f52e6917152c9cabd6a9a419b5c8795856a3b4c53_prof);

        
        $__internal_579f0f4ca7fb33e77288d0d5051088e6bfac0420dcc8ed979ff246c4b252c7dc->leave($__internal_579f0f4ca7fb33e77288d0d5051088e6bfac0420dcc8ed979ff246c4b252c7dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
