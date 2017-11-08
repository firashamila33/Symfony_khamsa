<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_20a0cb185d241f8a1787f4d915b956416214ed26c7b934acdd60a969ea61cb94 extends Twig_Template
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
        $__internal_99e256d2bb3edefad947b9eda57b9d088759ae50bb3f5c93cbba5834b161c204 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99e256d2bb3edefad947b9eda57b9d088759ae50bb3f5c93cbba5834b161c204->enter($__internal_99e256d2bb3edefad947b9eda57b9d088759ae50bb3f5c93cbba5834b161c204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_2d20876ec9390d5cc5aef5436efe37c33e4df13cb2c6ff4c85a40fd101c86049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d20876ec9390d5cc5aef5436efe37c33e4df13cb2c6ff4c85a40fd101c86049->enter($__internal_2d20876ec9390d5cc5aef5436efe37c33e4df13cb2c6ff4c85a40fd101c86049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_99e256d2bb3edefad947b9eda57b9d088759ae50bb3f5c93cbba5834b161c204->leave($__internal_99e256d2bb3edefad947b9eda57b9d088759ae50bb3f5c93cbba5834b161c204_prof);

        
        $__internal_2d20876ec9390d5cc5aef5436efe37c33e4df13cb2c6ff4c85a40fd101c86049->leave($__internal_2d20876ec9390d5cc5aef5436efe37c33e4df13cb2c6ff4c85a40fd101c86049_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
