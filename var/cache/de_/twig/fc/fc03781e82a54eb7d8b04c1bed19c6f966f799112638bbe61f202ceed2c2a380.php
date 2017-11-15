<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_4c0353819dd500dd8475cfd12acc1b887128493d0e44e06267fcba74ee1c48ca extends Twig_Template
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
        $__internal_a41b0c81785983cecbfbd4f6e61794f8ac844d7c2a470d4368c3719b5a3a96f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a41b0c81785983cecbfbd4f6e61794f8ac844d7c2a470d4368c3719b5a3a96f9->enter($__internal_a41b0c81785983cecbfbd4f6e61794f8ac844d7c2a470d4368c3719b5a3a96f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_ca051b6c292a6efdc929851a01068094d5b7c891e22941e8b03b772aa878b417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca051b6c292a6efdc929851a01068094d5b7c891e22941e8b03b772aa878b417->enter($__internal_ca051b6c292a6efdc929851a01068094d5b7c891e22941e8b03b772aa878b417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a41b0c81785983cecbfbd4f6e61794f8ac844d7c2a470d4368c3719b5a3a96f9->leave($__internal_a41b0c81785983cecbfbd4f6e61794f8ac844d7c2a470d4368c3719b5a3a96f9_prof);

        
        $__internal_ca051b6c292a6efdc929851a01068094d5b7c891e22941e8b03b772aa878b417->leave($__internal_ca051b6c292a6efdc929851a01068094d5b7c891e22941e8b03b772aa878b417_prof);

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
", "@Framework/Form/checkbox_widget.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
