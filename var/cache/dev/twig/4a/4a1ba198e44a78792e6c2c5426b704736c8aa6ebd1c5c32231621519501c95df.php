<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d53c47f8ef1bc5481041e3e671bad35e1f6cfd146e007e86b1fb268e85acf7d1 extends Twig_Template
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
        $__internal_ea0b8cc24f42f30038b9595f392d1cc0281f368ed48bb11de35042d871f98738 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea0b8cc24f42f30038b9595f392d1cc0281f368ed48bb11de35042d871f98738->enter($__internal_ea0b8cc24f42f30038b9595f392d1cc0281f368ed48bb11de35042d871f98738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_0091f2f045ccf29c10bef7b460e43df37e082e67a11f567b1c5fa47a99351f1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0091f2f045ccf29c10bef7b460e43df37e082e67a11f567b1c5fa47a99351f1e->enter($__internal_0091f2f045ccf29c10bef7b460e43df37e082e67a11f567b1c5fa47a99351f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ea0b8cc24f42f30038b9595f392d1cc0281f368ed48bb11de35042d871f98738->leave($__internal_ea0b8cc24f42f30038b9595f392d1cc0281f368ed48bb11de35042d871f98738_prof);

        
        $__internal_0091f2f045ccf29c10bef7b460e43df37e082e67a11f567b1c5fa47a99351f1e->leave($__internal_0091f2f045ccf29c10bef7b460e43df37e082e67a11f567b1c5fa47a99351f1e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
