<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_256810312e27c432adec27d15bcf3ecd9b007326dd6787667e6c0bb8354ba7a3 extends Twig_Template
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
        $__internal_b1d89216731fead75777dd2c4d5c47161a12f5fe5ee225d28658ca1d5395c0c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1d89216731fead75777dd2c4d5c47161a12f5fe5ee225d28658ca1d5395c0c5->enter($__internal_b1d89216731fead75777dd2c4d5c47161a12f5fe5ee225d28658ca1d5395c0c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_661045ce5521508bcae2679735c8fd71aa6ec472b6d7e0cba8577c518d31c4da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_661045ce5521508bcae2679735c8fd71aa6ec472b6d7e0cba8577c518d31c4da->enter($__internal_661045ce5521508bcae2679735c8fd71aa6ec472b6d7e0cba8577c518d31c4da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_b1d89216731fead75777dd2c4d5c47161a12f5fe5ee225d28658ca1d5395c0c5->leave($__internal_b1d89216731fead75777dd2c4d5c47161a12f5fe5ee225d28658ca1d5395c0c5_prof);

        
        $__internal_661045ce5521508bcae2679735c8fd71aa6ec472b6d7e0cba8577c518d31c4da->leave($__internal_661045ce5521508bcae2679735c8fd71aa6ec472b6d7e0cba8577c518d31c4da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
