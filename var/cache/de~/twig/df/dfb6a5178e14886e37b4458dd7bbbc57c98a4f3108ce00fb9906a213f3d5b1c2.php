<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_bff64f5e4a5736fed14b63e7d5964c3f4116b0c80ab1a58f7813c1395fe13b1c extends Twig_Template
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
        $__internal_faac554eb21529ae3c2593357a867c03a9d3770863b5ac1df6dca0bbfc9f4d79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faac554eb21529ae3c2593357a867c03a9d3770863b5ac1df6dca0bbfc9f4d79->enter($__internal_faac554eb21529ae3c2593357a867c03a9d3770863b5ac1df6dca0bbfc9f4d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_adf60e265f836e5dea1cd4447cb8693164c7207b2f2d6836f55172a6846027a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adf60e265f836e5dea1cd4447cb8693164c7207b2f2d6836f55172a6846027a0->enter($__internal_adf60e265f836e5dea1cd4447cb8693164c7207b2f2d6836f55172a6846027a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_faac554eb21529ae3c2593357a867c03a9d3770863b5ac1df6dca0bbfc9f4d79->leave($__internal_faac554eb21529ae3c2593357a867c03a9d3770863b5ac1df6dca0bbfc9f4d79_prof);

        
        $__internal_adf60e265f836e5dea1cd4447cb8693164c7207b2f2d6836f55172a6846027a0->leave($__internal_adf60e265f836e5dea1cd4447cb8693164c7207b2f2d6836f55172a6846027a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
