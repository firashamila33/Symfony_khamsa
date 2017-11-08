<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_a0e06a4c402e1afe6d36aee65e39723c8758d383a450b65f38dc6318d218f3a2 extends Twig_Template
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
        $__internal_e949dbc083190b83e4111d19d8d98c65d663caded905998076483abe2f908af3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e949dbc083190b83e4111d19d8d98c65d663caded905998076483abe2f908af3->enter($__internal_e949dbc083190b83e4111d19d8d98c65d663caded905998076483abe2f908af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_41ae72cf91c5b01346faaaddddfe092068ca5dd33b199996e73bfe727b2a3539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41ae72cf91c5b01346faaaddddfe092068ca5dd33b199996e73bfe727b2a3539->enter($__internal_41ae72cf91c5b01346faaaddddfe092068ca5dd33b199996e73bfe727b2a3539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_e949dbc083190b83e4111d19d8d98c65d663caded905998076483abe2f908af3->leave($__internal_e949dbc083190b83e4111d19d8d98c65d663caded905998076483abe2f908af3_prof);

        
        $__internal_41ae72cf91c5b01346faaaddddfe092068ca5dd33b199996e73bfe727b2a3539->leave($__internal_41ae72cf91c5b01346faaaddddfe092068ca5dd33b199996e73bfe727b2a3539_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
