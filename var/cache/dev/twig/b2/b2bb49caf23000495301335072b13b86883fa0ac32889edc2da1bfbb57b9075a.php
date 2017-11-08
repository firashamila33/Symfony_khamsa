<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_8d0065390af37b0441633234567d58794e27184699ee86b5aeda777e1346db35 extends Twig_Template
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
        $__internal_f280f3c94176a8278792d9861844ea89e5a5d07b9cde9d6a475a86879d2adeef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f280f3c94176a8278792d9861844ea89e5a5d07b9cde9d6a475a86879d2adeef->enter($__internal_f280f3c94176a8278792d9861844ea89e5a5d07b9cde9d6a475a86879d2adeef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_8c8f6f816df51560c062d5a0a0d9f2fa5bf674313a32d5cac2f6c93ea1ada782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c8f6f816df51560c062d5a0a0d9f2fa5bf674313a32d5cac2f6c93ea1ada782->enter($__internal_8c8f6f816df51560c062d5a0a0d9f2fa5bf674313a32d5cac2f6c93ea1ada782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_f280f3c94176a8278792d9861844ea89e5a5d07b9cde9d6a475a86879d2adeef->leave($__internal_f280f3c94176a8278792d9861844ea89e5a5d07b9cde9d6a475a86879d2adeef_prof);

        
        $__internal_8c8f6f816df51560c062d5a0a0d9f2fa5bf674313a32d5cac2f6c93ea1ada782->leave($__internal_8c8f6f816df51560c062d5a0a0d9f2fa5bf674313a32d5cac2f6c93ea1ada782_prof);

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
", "@Framework/Form/number_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
