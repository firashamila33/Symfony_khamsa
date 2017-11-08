<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_44f4ea333c34ad58fb228b00a4c860cb14b34d5e4a6be2edee19f3926478a57a extends Twig_Template
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
        $__internal_bed1bd094a6aec20afd581e0138fe721be0f736ebad9012b315580c9fa8b0e8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bed1bd094a6aec20afd581e0138fe721be0f736ebad9012b315580c9fa8b0e8d->enter($__internal_bed1bd094a6aec20afd581e0138fe721be0f736ebad9012b315580c9fa8b0e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_1e5ac2a71c578bd6bcee00aec49769d35441fdcf6d57cea87b8b1aa5f0adb97a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e5ac2a71c578bd6bcee00aec49769d35441fdcf6d57cea87b8b1aa5f0adb97a->enter($__internal_1e5ac2a71c578bd6bcee00aec49769d35441fdcf6d57cea87b8b1aa5f0adb97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_bed1bd094a6aec20afd581e0138fe721be0f736ebad9012b315580c9fa8b0e8d->leave($__internal_bed1bd094a6aec20afd581e0138fe721be0f736ebad9012b315580c9fa8b0e8d_prof);

        
        $__internal_1e5ac2a71c578bd6bcee00aec49769d35441fdcf6d57cea87b8b1aa5f0adb97a->leave($__internal_1e5ac2a71c578bd6bcee00aec49769d35441fdcf6d57cea87b8b1aa5f0adb97a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
