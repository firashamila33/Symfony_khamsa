<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_982da817f33fb7de9cc10a20684a8dbf57dd7e33d0dcbd64b6b394ce83205247 extends Twig_Template
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
        $__internal_6c7130df4c8970bcf9700a893bf93dbce96c7abd3904c510fb28f66eb4d33428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c7130df4c8970bcf9700a893bf93dbce96c7abd3904c510fb28f66eb4d33428->enter($__internal_6c7130df4c8970bcf9700a893bf93dbce96c7abd3904c510fb28f66eb4d33428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_79a17ba290ee37cf0c2a0dff9c867b0ad043c2e8d183ff9101ba7a65f6c6ee21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79a17ba290ee37cf0c2a0dff9c867b0ad043c2e8d183ff9101ba7a65f6c6ee21->enter($__internal_79a17ba290ee37cf0c2a0dff9c867b0ad043c2e8d183ff9101ba7a65f6c6ee21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6c7130df4c8970bcf9700a893bf93dbce96c7abd3904c510fb28f66eb4d33428->leave($__internal_6c7130df4c8970bcf9700a893bf93dbce96c7abd3904c510fb28f66eb4d33428_prof);

        
        $__internal_79a17ba290ee37cf0c2a0dff9c867b0ad043c2e8d183ff9101ba7a65f6c6ee21->leave($__internal_79a17ba290ee37cf0c2a0dff9c867b0ad043c2e8d183ff9101ba7a65f6c6ee21_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
