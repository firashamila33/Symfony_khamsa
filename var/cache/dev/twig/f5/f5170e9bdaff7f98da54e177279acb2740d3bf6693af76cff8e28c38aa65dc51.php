<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_f8b3eee931677d9853dde56523373bf7ad9afd162aa84bcd41be8af9d37ce88a extends Twig_Template
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
        $__internal_e6dc9b2e82c3e0b1804a0874d87276d0e76132038d6697e15dcd97b249c45c5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6dc9b2e82c3e0b1804a0874d87276d0e76132038d6697e15dcd97b249c45c5f->enter($__internal_e6dc9b2e82c3e0b1804a0874d87276d0e76132038d6697e15dcd97b249c45c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_7ba3a0fc787ada153bd81ae93b9d0fc6a86b3b9959ea299780e4d818ad96447e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ba3a0fc787ada153bd81ae93b9d0fc6a86b3b9959ea299780e4d818ad96447e->enter($__internal_7ba3a0fc787ada153bd81ae93b9d0fc6a86b3b9959ea299780e4d818ad96447e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_e6dc9b2e82c3e0b1804a0874d87276d0e76132038d6697e15dcd97b249c45c5f->leave($__internal_e6dc9b2e82c3e0b1804a0874d87276d0e76132038d6697e15dcd97b249c45c5f_prof);

        
        $__internal_7ba3a0fc787ada153bd81ae93b9d0fc6a86b3b9959ea299780e4d818ad96447e->leave($__internal_7ba3a0fc787ada153bd81ae93b9d0fc6a86b3b9959ea299780e4d818ad96447e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
