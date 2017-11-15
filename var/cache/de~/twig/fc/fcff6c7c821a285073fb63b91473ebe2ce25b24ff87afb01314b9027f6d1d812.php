<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_20171cbf8f49a8ec368266f5d93f7517c66b431f5ad3e9a7032e9c4cdc11dd93 extends Twig_Template
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
        $__internal_ed996796c8a5a31d107ff89b7940b8ec192d36b711e75f4f2847ef29ecd94b02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed996796c8a5a31d107ff89b7940b8ec192d36b711e75f4f2847ef29ecd94b02->enter($__internal_ed996796c8a5a31d107ff89b7940b8ec192d36b711e75f4f2847ef29ecd94b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_c68f8bda13c8e5f77ded338265f15232218a4e25bde576179300f451feb8e9ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c68f8bda13c8e5f77ded338265f15232218a4e25bde576179300f451feb8e9ad->enter($__internal_c68f8bda13c8e5f77ded338265f15232218a4e25bde576179300f451feb8e9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_ed996796c8a5a31d107ff89b7940b8ec192d36b711e75f4f2847ef29ecd94b02->leave($__internal_ed996796c8a5a31d107ff89b7940b8ec192d36b711e75f4f2847ef29ecd94b02_prof);

        
        $__internal_c68f8bda13c8e5f77ded338265f15232218a4e25bde576179300f451feb8e9ad->leave($__internal_c68f8bda13c8e5f77ded338265f15232218a4e25bde576179300f451feb8e9ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
