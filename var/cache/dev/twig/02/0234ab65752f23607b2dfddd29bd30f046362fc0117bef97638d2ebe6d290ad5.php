<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_88aaad0bd78e5f65c7bebaaa0f4d5f56e2560c7fc7ce53bfe01558aff088ef81 extends Twig_Template
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
        $__internal_9f9fde0b2ae43a46b661e1850d35b44ca8b1443b3076cc979af8873ede9d7041 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f9fde0b2ae43a46b661e1850d35b44ca8b1443b3076cc979af8873ede9d7041->enter($__internal_9f9fde0b2ae43a46b661e1850d35b44ca8b1443b3076cc979af8873ede9d7041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_51ddc86d6fb32e7dac781ac18c41a308c781505a5e404606c0e0e6c5815b4386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51ddc86d6fb32e7dac781ac18c41a308c781505a5e404606c0e0e6c5815b4386->enter($__internal_51ddc86d6fb32e7dac781ac18c41a308c781505a5e404606c0e0e6c5815b4386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_9f9fde0b2ae43a46b661e1850d35b44ca8b1443b3076cc979af8873ede9d7041->leave($__internal_9f9fde0b2ae43a46b661e1850d35b44ca8b1443b3076cc979af8873ede9d7041_prof);

        
        $__internal_51ddc86d6fb32e7dac781ac18c41a308c781505a5e404606c0e0e6c5815b4386->leave($__internal_51ddc86d6fb32e7dac781ac18c41a308c781505a5e404606c0e0e6c5815b4386_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
