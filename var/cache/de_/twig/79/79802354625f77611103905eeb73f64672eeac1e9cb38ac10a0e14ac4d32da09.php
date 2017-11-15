<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_90ddb2b00429899687b9e613cfc6f2c73bb9e8a73cb1cc4309b0b54cfd1d22a6 extends Twig_Template
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
        $__internal_3cd3f4f1c52b38c82b9628a4283dbc7a6e9231879eadc3f9c3852e4f29939808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cd3f4f1c52b38c82b9628a4283dbc7a6e9231879eadc3f9c3852e4f29939808->enter($__internal_3cd3f4f1c52b38c82b9628a4283dbc7a6e9231879eadc3f9c3852e4f29939808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_b85bde1041fcc4bb4c2e87345ff5a94f6e8293765e65645e885901d0bc76a532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b85bde1041fcc4bb4c2e87345ff5a94f6e8293765e65645e885901d0bc76a532->enter($__internal_b85bde1041fcc4bb4c2e87345ff5a94f6e8293765e65645e885901d0bc76a532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_3cd3f4f1c52b38c82b9628a4283dbc7a6e9231879eadc3f9c3852e4f29939808->leave($__internal_3cd3f4f1c52b38c82b9628a4283dbc7a6e9231879eadc3f9c3852e4f29939808_prof);

        
        $__internal_b85bde1041fcc4bb4c2e87345ff5a94f6e8293765e65645e885901d0bc76a532->leave($__internal_b85bde1041fcc4bb4c2e87345ff5a94f6e8293765e65645e885901d0bc76a532_prof);

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
", "@Framework/Form/choice_attributes.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
