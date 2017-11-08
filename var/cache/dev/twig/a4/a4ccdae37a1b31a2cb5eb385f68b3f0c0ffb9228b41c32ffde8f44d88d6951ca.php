<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_f1b7575bc63549170d6672ebe401ba3a1d51a3056dbe48a0227ad17b919bcd12 extends Twig_Template
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
        $__internal_458ad39c892f2d926ffaf902147083a1f410e67a4127b72b363366417e77efff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_458ad39c892f2d926ffaf902147083a1f410e67a4127b72b363366417e77efff->enter($__internal_458ad39c892f2d926ffaf902147083a1f410e67a4127b72b363366417e77efff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_2e02ba9901696fc0cb7735d94c59f88911c5d50d9e83031af05381702657e546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e02ba9901696fc0cb7735d94c59f88911c5d50d9e83031af05381702657e546->enter($__internal_2e02ba9901696fc0cb7735d94c59f88911c5d50d9e83031af05381702657e546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_458ad39c892f2d926ffaf902147083a1f410e67a4127b72b363366417e77efff->leave($__internal_458ad39c892f2d926ffaf902147083a1f410e67a4127b72b363366417e77efff_prof);

        
        $__internal_2e02ba9901696fc0cb7735d94c59f88911c5d50d9e83031af05381702657e546->leave($__internal_2e02ba9901696fc0cb7735d94c59f88911c5d50d9e83031af05381702657e546_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
