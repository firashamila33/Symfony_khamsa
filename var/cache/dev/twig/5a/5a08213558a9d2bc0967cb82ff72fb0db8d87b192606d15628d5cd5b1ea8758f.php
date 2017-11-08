<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_89d43694789050472239c5ec4edf260345b08d9c40ec1895caf2dd5b3451070d extends Twig_Template
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
        $__internal_ef7a12753524e979c10cbb85c07bd9582721c1fb67e720326e6fe8eb5debe8c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef7a12753524e979c10cbb85c07bd9582721c1fb67e720326e6fe8eb5debe8c0->enter($__internal_ef7a12753524e979c10cbb85c07bd9582721c1fb67e720326e6fe8eb5debe8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_b0419da8b844e4d600b5adc1152877594333646487e042abf9bff349bee555fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0419da8b844e4d600b5adc1152877594333646487e042abf9bff349bee555fb->enter($__internal_b0419da8b844e4d600b5adc1152877594333646487e042abf9bff349bee555fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_ef7a12753524e979c10cbb85c07bd9582721c1fb67e720326e6fe8eb5debe8c0->leave($__internal_ef7a12753524e979c10cbb85c07bd9582721c1fb67e720326e6fe8eb5debe8c0_prof);

        
        $__internal_b0419da8b844e4d600b5adc1152877594333646487e042abf9bff349bee555fb->leave($__internal_b0419da8b844e4d600b5adc1152877594333646487e042abf9bff349bee555fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
