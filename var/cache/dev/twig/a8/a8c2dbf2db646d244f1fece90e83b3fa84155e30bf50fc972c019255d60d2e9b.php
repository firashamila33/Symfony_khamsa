<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_198cacb178539f7c34e3789f5fd9b54009759ce60926e3e6dace1175175bd8e6 extends Twig_Template
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
        $__internal_58a0b8a221428321ea9d87276baed4aa72f3c02d689155250fcf4dc66ad6bef4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58a0b8a221428321ea9d87276baed4aa72f3c02d689155250fcf4dc66ad6bef4->enter($__internal_58a0b8a221428321ea9d87276baed4aa72f3c02d689155250fcf4dc66ad6bef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_6d6498c61f88d26ef40d6f8e7c2aa2e81326058525f43aeb421e3c4db56b0f8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d6498c61f88d26ef40d6f8e7c2aa2e81326058525f43aeb421e3c4db56b0f8d->enter($__internal_6d6498c61f88d26ef40d6f8e7c2aa2e81326058525f43aeb421e3c4db56b0f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_58a0b8a221428321ea9d87276baed4aa72f3c02d689155250fcf4dc66ad6bef4->leave($__internal_58a0b8a221428321ea9d87276baed4aa72f3c02d689155250fcf4dc66ad6bef4_prof);

        
        $__internal_6d6498c61f88d26ef40d6f8e7c2aa2e81326058525f43aeb421e3c4db56b0f8d->leave($__internal_6d6498c61f88d26ef40d6f8e7c2aa2e81326058525f43aeb421e3c4db56b0f8d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
