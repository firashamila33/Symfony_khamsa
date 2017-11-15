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
        $__internal_8185b26ddf1de315fcc32d962a3686541d096cd58701c5e96e929db5973bec45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8185b26ddf1de315fcc32d962a3686541d096cd58701c5e96e929db5973bec45->enter($__internal_8185b26ddf1de315fcc32d962a3686541d096cd58701c5e96e929db5973bec45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_b04ef785cde63e180f026ceb0c23cd8a2050acbd9636105aad8cf651f001df69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b04ef785cde63e180f026ceb0c23cd8a2050acbd9636105aad8cf651f001df69->enter($__internal_b04ef785cde63e180f026ceb0c23cd8a2050acbd9636105aad8cf651f001df69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_8185b26ddf1de315fcc32d962a3686541d096cd58701c5e96e929db5973bec45->leave($__internal_8185b26ddf1de315fcc32d962a3686541d096cd58701c5e96e929db5973bec45_prof);

        
        $__internal_b04ef785cde63e180f026ceb0c23cd8a2050acbd9636105aad8cf651f001df69->leave($__internal_b04ef785cde63e180f026ceb0c23cd8a2050acbd9636105aad8cf651f001df69_prof);

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
