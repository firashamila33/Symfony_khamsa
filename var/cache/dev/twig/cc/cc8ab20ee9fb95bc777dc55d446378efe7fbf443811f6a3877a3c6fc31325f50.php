<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_a7bea417ca0080d196ad12f686cfd30b31dd534b0f7f7186dc528e2c5c9727e7 extends Twig_Template
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
        $__internal_820f7f34f0d25612fc3c9446ac65324512666206f549e87dbe5d3c2356b61023 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_820f7f34f0d25612fc3c9446ac65324512666206f549e87dbe5d3c2356b61023->enter($__internal_820f7f34f0d25612fc3c9446ac65324512666206f549e87dbe5d3c2356b61023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_adcf121496b6d6f1da4b3e607403715166ca349fe4d8ee50f10689ab19de182c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adcf121496b6d6f1da4b3e607403715166ca349fe4d8ee50f10689ab19de182c->enter($__internal_adcf121496b6d6f1da4b3e607403715166ca349fe4d8ee50f10689ab19de182c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_820f7f34f0d25612fc3c9446ac65324512666206f549e87dbe5d3c2356b61023->leave($__internal_820f7f34f0d25612fc3c9446ac65324512666206f549e87dbe5d3c2356b61023_prof);

        
        $__internal_adcf121496b6d6f1da4b3e607403715166ca349fe4d8ee50f10689ab19de182c->leave($__internal_adcf121496b6d6f1da4b3e607403715166ca349fe4d8ee50f10689ab19de182c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
