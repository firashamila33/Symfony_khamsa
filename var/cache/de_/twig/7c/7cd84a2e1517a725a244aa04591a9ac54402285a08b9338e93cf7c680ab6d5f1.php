<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_9855bbc556bd12ad234b04e72d0494bb0d9e130ca9d16ba07cc3c0daf43c4a9b extends Twig_Template
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
        $__internal_050ead34269472175c815182eab4e58ab2ba49583f3b93855560ebfc9817ad53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_050ead34269472175c815182eab4e58ab2ba49583f3b93855560ebfc9817ad53->enter($__internal_050ead34269472175c815182eab4e58ab2ba49583f3b93855560ebfc9817ad53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_e279a0117844d072467bcd19fe4d738d48755d1d8897940ab700554aee57bffd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e279a0117844d072467bcd19fe4d738d48755d1d8897940ab700554aee57bffd->enter($__internal_e279a0117844d072467bcd19fe4d738d48755d1d8897940ab700554aee57bffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_050ead34269472175c815182eab4e58ab2ba49583f3b93855560ebfc9817ad53->leave($__internal_050ead34269472175c815182eab4e58ab2ba49583f3b93855560ebfc9817ad53_prof);

        
        $__internal_e279a0117844d072467bcd19fe4d738d48755d1d8897940ab700554aee57bffd->leave($__internal_e279a0117844d072467bcd19fe4d738d48755d1d8897940ab700554aee57bffd_prof);

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
", "@Framework/Form/form_widget_compound.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
