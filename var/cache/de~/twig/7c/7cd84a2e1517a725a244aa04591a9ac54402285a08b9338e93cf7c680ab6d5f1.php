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
        $__internal_05ceecbf58208d4efde9614a668b707b4028b99200063f589069de8db3868981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05ceecbf58208d4efde9614a668b707b4028b99200063f589069de8db3868981->enter($__internal_05ceecbf58208d4efde9614a668b707b4028b99200063f589069de8db3868981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_f3c0cbe151dd5a8874fc3b5d85a7bf17c122b206eff72d0f324668d1a8998a01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3c0cbe151dd5a8874fc3b5d85a7bf17c122b206eff72d0f324668d1a8998a01->enter($__internal_f3c0cbe151dd5a8874fc3b5d85a7bf17c122b206eff72d0f324668d1a8998a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_05ceecbf58208d4efde9614a668b707b4028b99200063f589069de8db3868981->leave($__internal_05ceecbf58208d4efde9614a668b707b4028b99200063f589069de8db3868981_prof);

        
        $__internal_f3c0cbe151dd5a8874fc3b5d85a7bf17c122b206eff72d0f324668d1a8998a01->leave($__internal_f3c0cbe151dd5a8874fc3b5d85a7bf17c122b206eff72d0f324668d1a8998a01_prof);

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
