<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_3f049738ec7af49024618937ed61a82c79c0069fe91585260ae68253834a1d9f extends Twig_Template
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
        $__internal_2b10ebe5a4ffa733d350b77a0a3b5f32dd6614ab71480efe2dd765fc12b44953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b10ebe5a4ffa733d350b77a0a3b5f32dd6614ab71480efe2dd765fc12b44953->enter($__internal_2b10ebe5a4ffa733d350b77a0a3b5f32dd6614ab71480efe2dd765fc12b44953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_542af3bb47e12c903d9cbb2423288f07bba1f6c1138555a4c74657e261887298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_542af3bb47e12c903d9cbb2423288f07bba1f6c1138555a4c74657e261887298->enter($__internal_542af3bb47e12c903d9cbb2423288f07bba1f6c1138555a4c74657e261887298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2b10ebe5a4ffa733d350b77a0a3b5f32dd6614ab71480efe2dd765fc12b44953->leave($__internal_2b10ebe5a4ffa733d350b77a0a3b5f32dd6614ab71480efe2dd765fc12b44953_prof);

        
        $__internal_542af3bb47e12c903d9cbb2423288f07bba1f6c1138555a4c74657e261887298->leave($__internal_542af3bb47e12c903d9cbb2423288f07bba1f6c1138555a4c74657e261887298_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
