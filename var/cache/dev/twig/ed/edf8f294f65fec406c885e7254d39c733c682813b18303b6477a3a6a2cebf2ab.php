<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_6332ed820e444eeb387f191604c63d9ac3a40eda77c9032d8f1e42a969f509f2 extends Twig_Template
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
        $__internal_9873f79a8e001cb365165255cfb329532a53182d7aab359e06dfb59b88ee0816 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9873f79a8e001cb365165255cfb329532a53182d7aab359e06dfb59b88ee0816->enter($__internal_9873f79a8e001cb365165255cfb329532a53182d7aab359e06dfb59b88ee0816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_bdc5734ecc6265ba4214e2bb8f33ec7d25fa1a0b331e84ce7cb4db2436be368a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdc5734ecc6265ba4214e2bb8f33ec7d25fa1a0b331e84ce7cb4db2436be368a->enter($__internal_bdc5734ecc6265ba4214e2bb8f33ec7d25fa1a0b331e84ce7cb4db2436be368a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_9873f79a8e001cb365165255cfb329532a53182d7aab359e06dfb59b88ee0816->leave($__internal_9873f79a8e001cb365165255cfb329532a53182d7aab359e06dfb59b88ee0816_prof);

        
        $__internal_bdc5734ecc6265ba4214e2bb8f33ec7d25fa1a0b331e84ce7cb4db2436be368a->leave($__internal_bdc5734ecc6265ba4214e2bb8f33ec7d25fa1a0b331e84ce7cb4db2436be368a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
