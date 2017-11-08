<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_59a2bdb4939abb523612f611e307e26f17e91b3b1e03ba8305a77bdfdb5f2471 extends Twig_Template
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
        $__internal_c24757ee8295629d3b2de4d845fc7bb91e4ba41790d6488faf7e687ab6ca7b26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c24757ee8295629d3b2de4d845fc7bb91e4ba41790d6488faf7e687ab6ca7b26->enter($__internal_c24757ee8295629d3b2de4d845fc7bb91e4ba41790d6488faf7e687ab6ca7b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_e6f1bea1cfaadf7fefeb870608ddd995aa2ef0151d98faa240f9e74499f1d63f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6f1bea1cfaadf7fefeb870608ddd995aa2ef0151d98faa240f9e74499f1d63f->enter($__internal_e6f1bea1cfaadf7fefeb870608ddd995aa2ef0151d98faa240f9e74499f1d63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_c24757ee8295629d3b2de4d845fc7bb91e4ba41790d6488faf7e687ab6ca7b26->leave($__internal_c24757ee8295629d3b2de4d845fc7bb91e4ba41790d6488faf7e687ab6ca7b26_prof);

        
        $__internal_e6f1bea1cfaadf7fefeb870608ddd995aa2ef0151d98faa240f9e74499f1d63f->leave($__internal_e6f1bea1cfaadf7fefeb870608ddd995aa2ef0151d98faa240f9e74499f1d63f_prof);

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
", "@Framework/Form/search_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
