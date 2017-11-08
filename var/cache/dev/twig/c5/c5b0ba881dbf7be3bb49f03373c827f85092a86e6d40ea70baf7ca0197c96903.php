<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_6250e3e5cf59a8d28b21f5f7991f9f9c96a463f1ca554182ee4417e5b1b392a6 extends Twig_Template
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
        $__internal_9b10e164315401e932c2a05411d7f6a7e90744dc703a694375086ebb271dacda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b10e164315401e932c2a05411d7f6a7e90744dc703a694375086ebb271dacda->enter($__internal_9b10e164315401e932c2a05411d7f6a7e90744dc703a694375086ebb271dacda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_28697ca1f3ce15d74e9d23eb13f6264f913a0736a427ec66d7166e1e5caf9d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28697ca1f3ce15d74e9d23eb13f6264f913a0736a427ec66d7166e1e5caf9d84->enter($__internal_28697ca1f3ce15d74e9d23eb13f6264f913a0736a427ec66d7166e1e5caf9d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_9b10e164315401e932c2a05411d7f6a7e90744dc703a694375086ebb271dacda->leave($__internal_9b10e164315401e932c2a05411d7f6a7e90744dc703a694375086ebb271dacda_prof);

        
        $__internal_28697ca1f3ce15d74e9d23eb13f6264f913a0736a427ec66d7166e1e5caf9d84->leave($__internal_28697ca1f3ce15d74e9d23eb13f6264f913a0736a427ec66d7166e1e5caf9d84_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
