<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_52335dd7a43314a21138f830466a90bf44f2f538f7fbbd2351efbbd4be4b4ce8 extends Twig_Template
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
        $__internal_ea068aba175d1568c596c22fd0de2d0510c424dd385d8c798403a4b29ba16073 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea068aba175d1568c596c22fd0de2d0510c424dd385d8c798403a4b29ba16073->enter($__internal_ea068aba175d1568c596c22fd0de2d0510c424dd385d8c798403a4b29ba16073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_1ae857e90277337748dd3304c6a1f57f0a9e82ca464d8b63d9cc28a4d8bc92e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ae857e90277337748dd3304c6a1f57f0a9e82ca464d8b63d9cc28a4d8bc92e9->enter($__internal_1ae857e90277337748dd3304c6a1f57f0a9e82ca464d8b63d9cc28a4d8bc92e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ea068aba175d1568c596c22fd0de2d0510c424dd385d8c798403a4b29ba16073->leave($__internal_ea068aba175d1568c596c22fd0de2d0510c424dd385d8c798403a4b29ba16073_prof);

        
        $__internal_1ae857e90277337748dd3304c6a1f57f0a9e82ca464d8b63d9cc28a4d8bc92e9->leave($__internal_1ae857e90277337748dd3304c6a1f57f0a9e82ca464d8b63d9cc28a4d8bc92e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
