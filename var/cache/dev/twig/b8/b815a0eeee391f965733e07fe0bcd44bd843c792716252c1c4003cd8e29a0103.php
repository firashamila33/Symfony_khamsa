<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_5753b48b99b7b8557b0e952804dad5a02b991268e1568b0f88e46757d01fdaa8 extends Twig_Template
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
        $__internal_706f10a422e048954309bca223ddc9a46e8d48ea8d268d4a23b5511f47d22ac1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_706f10a422e048954309bca223ddc9a46e8d48ea8d268d4a23b5511f47d22ac1->enter($__internal_706f10a422e048954309bca223ddc9a46e8d48ea8d268d4a23b5511f47d22ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_59ac532d3d54d7a0d8651c781733ccec12913cc9b40862a53f10bcb02ea5b065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59ac532d3d54d7a0d8651c781733ccec12913cc9b40862a53f10bcb02ea5b065->enter($__internal_59ac532d3d54d7a0d8651c781733ccec12913cc9b40862a53f10bcb02ea5b065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_706f10a422e048954309bca223ddc9a46e8d48ea8d268d4a23b5511f47d22ac1->leave($__internal_706f10a422e048954309bca223ddc9a46e8d48ea8d268d4a23b5511f47d22ac1_prof);

        
        $__internal_59ac532d3d54d7a0d8651c781733ccec12913cc9b40862a53f10bcb02ea5b065->leave($__internal_59ac532d3d54d7a0d8651c781733ccec12913cc9b40862a53f10bcb02ea5b065_prof);

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
", "@Framework/FormTable/form_widget_compound.html.php", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
