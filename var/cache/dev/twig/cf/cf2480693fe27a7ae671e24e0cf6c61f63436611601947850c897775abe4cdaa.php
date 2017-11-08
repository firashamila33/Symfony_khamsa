<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_103937e7411b617c9dc99bc901143f5d0f7a9db9fb455242bfc0820d6fe08695 extends Twig_Template
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
        $__internal_024cbdfd40fc46f37e9a0f10a3db962e71ef6b6954d79923e9cf109fbab397f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_024cbdfd40fc46f37e9a0f10a3db962e71ef6b6954d79923e9cf109fbab397f1->enter($__internal_024cbdfd40fc46f37e9a0f10a3db962e71ef6b6954d79923e9cf109fbab397f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_ec2a8feb2696d0cc7d5ca3417669283a81c61565de29cdd52218ca68b7373c24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec2a8feb2696d0cc7d5ca3417669283a81c61565de29cdd52218ca68b7373c24->enter($__internal_ec2a8feb2696d0cc7d5ca3417669283a81c61565de29cdd52218ca68b7373c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_024cbdfd40fc46f37e9a0f10a3db962e71ef6b6954d79923e9cf109fbab397f1->leave($__internal_024cbdfd40fc46f37e9a0f10a3db962e71ef6b6954d79923e9cf109fbab397f1_prof);

        
        $__internal_ec2a8feb2696d0cc7d5ca3417669283a81c61565de29cdd52218ca68b7373c24->leave($__internal_ec2a8feb2696d0cc7d5ca3417669283a81c61565de29cdd52218ca68b7373c24_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
