<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_2e38a6f61417acdf66ce1a935a483257346bd79fe67763fe3548dd1fe3cdec1d extends Twig_Template
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
        $__internal_eccb86a444d19c8cdb1318c3894e3c6955759545e1cb68a7f8a9940d371b49fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eccb86a444d19c8cdb1318c3894e3c6955759545e1cb68a7f8a9940d371b49fb->enter($__internal_eccb86a444d19c8cdb1318c3894e3c6955759545e1cb68a7f8a9940d371b49fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_b77a53abad3b877432baf3df32ca1dd1ccf6b10e344d9e6a345f3aabeb428c71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b77a53abad3b877432baf3df32ca1dd1ccf6b10e344d9e6a345f3aabeb428c71->enter($__internal_b77a53abad3b877432baf3df32ca1dd1ccf6b10e344d9e6a345f3aabeb428c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_eccb86a444d19c8cdb1318c3894e3c6955759545e1cb68a7f8a9940d371b49fb->leave($__internal_eccb86a444d19c8cdb1318c3894e3c6955759545e1cb68a7f8a9940d371b49fb_prof);

        
        $__internal_b77a53abad3b877432baf3df32ca1dd1ccf6b10e344d9e6a345f3aabeb428c71->leave($__internal_b77a53abad3b877432baf3df32ca1dd1ccf6b10e344d9e6a345f3aabeb428c71_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
