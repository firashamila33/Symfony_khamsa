<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_82ddc06d9c77b180d3b7618ffd4165210dbc7788ad84688f90ddd97a6e39f480 extends Twig_Template
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
        $__internal_2f8591f270b0df09448c66fcb39dc8c84cb385b7a630e787b75ba339f176d546 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f8591f270b0df09448c66fcb39dc8c84cb385b7a630e787b75ba339f176d546->enter($__internal_2f8591f270b0df09448c66fcb39dc8c84cb385b7a630e787b75ba339f176d546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_d1cb879713dc201081748e0d9a1db970aa01d70f04ce5add17d72ce75e42dc6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1cb879713dc201081748e0d9a1db970aa01d70f04ce5add17d72ce75e42dc6e->enter($__internal_d1cb879713dc201081748e0d9a1db970aa01d70f04ce5add17d72ce75e42dc6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_2f8591f270b0df09448c66fcb39dc8c84cb385b7a630e787b75ba339f176d546->leave($__internal_2f8591f270b0df09448c66fcb39dc8c84cb385b7a630e787b75ba339f176d546_prof);

        
        $__internal_d1cb879713dc201081748e0d9a1db970aa01d70f04ce5add17d72ce75e42dc6e->leave($__internal_d1cb879713dc201081748e0d9a1db970aa01d70f04ce5add17d72ce75e42dc6e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
