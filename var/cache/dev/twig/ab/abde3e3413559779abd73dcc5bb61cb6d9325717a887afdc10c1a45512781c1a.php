<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_4cca27f58ea4f26f68b1141d2a312a0e8c0a27d60b994852430406251d6bc149 extends Twig_Template
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
        $__internal_68efef82f246c067a0e13a54e623d475d40cf2ae07eda49cda08c5d808520235 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68efef82f246c067a0e13a54e623d475d40cf2ae07eda49cda08c5d808520235->enter($__internal_68efef82f246c067a0e13a54e623d475d40cf2ae07eda49cda08c5d808520235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_2d6098d2f9d4b9f13178c1a430c4311b606996143c877d6d1ed7d3a1c8b6463c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d6098d2f9d4b9f13178c1a430c4311b606996143c877d6d1ed7d3a1c8b6463c->enter($__internal_2d6098d2f9d4b9f13178c1a430c4311b606996143c877d6d1ed7d3a1c8b6463c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_68efef82f246c067a0e13a54e623d475d40cf2ae07eda49cda08c5d808520235->leave($__internal_68efef82f246c067a0e13a54e623d475d40cf2ae07eda49cda08c5d808520235_prof);

        
        $__internal_2d6098d2f9d4b9f13178c1a430c4311b606996143c877d6d1ed7d3a1c8b6463c->leave($__internal_2d6098d2f9d4b9f13178c1a430c4311b606996143c877d6d1ed7d3a1c8b6463c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
