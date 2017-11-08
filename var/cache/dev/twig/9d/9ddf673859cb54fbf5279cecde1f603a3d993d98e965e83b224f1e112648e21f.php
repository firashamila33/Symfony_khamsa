<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_aa5ff5a2f61bd0306a03591ef892702abe61216b5c5e9bfa6d7bac16de32c465 extends Twig_Template
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
        $__internal_7a0b4e165bc337170d0a4340102943d539b71b951ccb3de133c28b3b7a93876f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a0b4e165bc337170d0a4340102943d539b71b951ccb3de133c28b3b7a93876f->enter($__internal_7a0b4e165bc337170d0a4340102943d539b71b951ccb3de133c28b3b7a93876f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_dce73e47f05a15074a88dca201b33c48de2208a7dc3ace5c458f1001382209b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce73e47f05a15074a88dca201b33c48de2208a7dc3ace5c458f1001382209b1->enter($__internal_dce73e47f05a15074a88dca201b33c48de2208a7dc3ace5c458f1001382209b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_7a0b4e165bc337170d0a4340102943d539b71b951ccb3de133c28b3b7a93876f->leave($__internal_7a0b4e165bc337170d0a4340102943d539b71b951ccb3de133c28b3b7a93876f_prof);

        
        $__internal_dce73e47f05a15074a88dca201b33c48de2208a7dc3ace5c458f1001382209b1->leave($__internal_dce73e47f05a15074a88dca201b33c48de2208a7dc3ace5c458f1001382209b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
