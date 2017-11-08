<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_6802b4126832a3cc86b093722429f9b8a3a303f506dd3d47c782379ba7f6bb59 extends Twig_Template
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
        $__internal_94c7d36ef6aa456aa794ddecb981b15f1d18a3aa48751a85b4afb48e347514b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94c7d36ef6aa456aa794ddecb981b15f1d18a3aa48751a85b4afb48e347514b2->enter($__internal_94c7d36ef6aa456aa794ddecb981b15f1d18a3aa48751a85b4afb48e347514b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_e125a48e6fed369486a93ed590027518fcdb12f620c72db2e6d6767371406f52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e125a48e6fed369486a93ed590027518fcdb12f620c72db2e6d6767371406f52->enter($__internal_e125a48e6fed369486a93ed590027518fcdb12f620c72db2e6d6767371406f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_94c7d36ef6aa456aa794ddecb981b15f1d18a3aa48751a85b4afb48e347514b2->leave($__internal_94c7d36ef6aa456aa794ddecb981b15f1d18a3aa48751a85b4afb48e347514b2_prof);

        
        $__internal_e125a48e6fed369486a93ed590027518fcdb12f620c72db2e6d6767371406f52->leave($__internal_e125a48e6fed369486a93ed590027518fcdb12f620c72db2e6d6767371406f52_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
