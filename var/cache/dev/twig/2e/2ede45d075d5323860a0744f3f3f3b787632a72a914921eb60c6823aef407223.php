<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_7fe1c97495653a3e85d74e94fed51d4ca7b505656b6626dd26b98d90277c0d30 extends Twig_Template
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
        $__internal_d5092a2c4b807cfe23be9cb08cfc20ce9f3882e1a852c3e28115c3355e76b4c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5092a2c4b807cfe23be9cb08cfc20ce9f3882e1a852c3e28115c3355e76b4c1->enter($__internal_d5092a2c4b807cfe23be9cb08cfc20ce9f3882e1a852c3e28115c3355e76b4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_1305814fad58ec6c5c932308ba5688ee5054b90ea1919c84b9ea53b9a34b6883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1305814fad58ec6c5c932308ba5688ee5054b90ea1919c84b9ea53b9a34b6883->enter($__internal_1305814fad58ec6c5c932308ba5688ee5054b90ea1919c84b9ea53b9a34b6883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_d5092a2c4b807cfe23be9cb08cfc20ce9f3882e1a852c3e28115c3355e76b4c1->leave($__internal_d5092a2c4b807cfe23be9cb08cfc20ce9f3882e1a852c3e28115c3355e76b4c1_prof);

        
        $__internal_1305814fad58ec6c5c932308ba5688ee5054b90ea1919c84b9ea53b9a34b6883->leave($__internal_1305814fad58ec6c5c932308ba5688ee5054b90ea1919c84b9ea53b9a34b6883_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
