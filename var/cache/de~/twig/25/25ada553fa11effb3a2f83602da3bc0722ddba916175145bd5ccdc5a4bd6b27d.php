<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_a1ddbaf0d8e84d64eb6808c00c4b9efb2606d05a100996b5d65200b2f62cd621 extends Twig_Template
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
        $__internal_987a71c705d2e5a3060d277faa7c42ad9f56e7d3cc353f0dccd360822593b2ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_987a71c705d2e5a3060d277faa7c42ad9f56e7d3cc353f0dccd360822593b2ee->enter($__internal_987a71c705d2e5a3060d277faa7c42ad9f56e7d3cc353f0dccd360822593b2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_44a0768abeff6e5fef85669292d6ffe78a895f8844db71e4923518184310df26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a0768abeff6e5fef85669292d6ffe78a895f8844db71e4923518184310df26->enter($__internal_44a0768abeff6e5fef85669292d6ffe78a895f8844db71e4923518184310df26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_987a71c705d2e5a3060d277faa7c42ad9f56e7d3cc353f0dccd360822593b2ee->leave($__internal_987a71c705d2e5a3060d277faa7c42ad9f56e7d3cc353f0dccd360822593b2ee_prof);

        
        $__internal_44a0768abeff6e5fef85669292d6ffe78a895f8844db71e4923518184310df26->leave($__internal_44a0768abeff6e5fef85669292d6ffe78a895f8844db71e4923518184310df26_prof);

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
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
