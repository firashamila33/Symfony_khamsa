<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_efe10521abd69fa63dc4097b5521e3620ffad33f7c4d4be4ed4937b27f3e9eb7 extends Twig_Template
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
        $__internal_997b55bf57c1819e2a701cc8e6f2ffd6dabb514eaab38a3e826799136d5c6347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_997b55bf57c1819e2a701cc8e6f2ffd6dabb514eaab38a3e826799136d5c6347->enter($__internal_997b55bf57c1819e2a701cc8e6f2ffd6dabb514eaab38a3e826799136d5c6347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_1a69a7a1887dc9b3e3d8643581321aa9df9cc7332712d24fa3c1ad804fdf55af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a69a7a1887dc9b3e3d8643581321aa9df9cc7332712d24fa3c1ad804fdf55af->enter($__internal_1a69a7a1887dc9b3e3d8643581321aa9df9cc7332712d24fa3c1ad804fdf55af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_997b55bf57c1819e2a701cc8e6f2ffd6dabb514eaab38a3e826799136d5c6347->leave($__internal_997b55bf57c1819e2a701cc8e6f2ffd6dabb514eaab38a3e826799136d5c6347_prof);

        
        $__internal_1a69a7a1887dc9b3e3d8643581321aa9df9cc7332712d24fa3c1ad804fdf55af->leave($__internal_1a69a7a1887dc9b3e3d8643581321aa9df9cc7332712d24fa3c1ad804fdf55af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
