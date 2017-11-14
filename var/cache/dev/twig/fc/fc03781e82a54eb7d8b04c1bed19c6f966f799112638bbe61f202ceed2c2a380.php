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
        $__internal_7a9a98a06ef828a5d6f6378e3593c8953d275a08c29e2317f70a6c563a4154e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a9a98a06ef828a5d6f6378e3593c8953d275a08c29e2317f70a6c563a4154e2->enter($__internal_7a9a98a06ef828a5d6f6378e3593c8953d275a08c29e2317f70a6c563a4154e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_f04fadcaaea39ae9446a866c3297e72a8061db41d4a0476c3b8991c886bb4551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f04fadcaaea39ae9446a866c3297e72a8061db41d4a0476c3b8991c886bb4551->enter($__internal_f04fadcaaea39ae9446a866c3297e72a8061db41d4a0476c3b8991c886bb4551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7a9a98a06ef828a5d6f6378e3593c8953d275a08c29e2317f70a6c563a4154e2->leave($__internal_7a9a98a06ef828a5d6f6378e3593c8953d275a08c29e2317f70a6c563a4154e2_prof);

        
        $__internal_f04fadcaaea39ae9446a866c3297e72a8061db41d4a0476c3b8991c886bb4551->leave($__internal_f04fadcaaea39ae9446a866c3297e72a8061db41d4a0476c3b8991c886bb4551_prof);

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
