<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_9ad7c7174a60fb159a4a5b45244190565e01cacf13e5f501e519dd58550d8519 extends Twig_Template
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
        $__internal_0394a8a46558c59e8e66c24620686b1aeea94f6033960c5610b260b9f26db5b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0394a8a46558c59e8e66c24620686b1aeea94f6033960c5610b260b9f26db5b4->enter($__internal_0394a8a46558c59e8e66c24620686b1aeea94f6033960c5610b260b9f26db5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_9a307a88ffac5b5f0f63b55ebae6507ce837c9b21e26e9f3ebc393f44b2c1a91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a307a88ffac5b5f0f63b55ebae6507ce837c9b21e26e9f3ebc393f44b2c1a91->enter($__internal_9a307a88ffac5b5f0f63b55ebae6507ce837c9b21e26e9f3ebc393f44b2c1a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_0394a8a46558c59e8e66c24620686b1aeea94f6033960c5610b260b9f26db5b4->leave($__internal_0394a8a46558c59e8e66c24620686b1aeea94f6033960c5610b260b9f26db5b4_prof);

        
        $__internal_9a307a88ffac5b5f0f63b55ebae6507ce837c9b21e26e9f3ebc393f44b2c1a91->leave($__internal_9a307a88ffac5b5f0f63b55ebae6507ce837c9b21e26e9f3ebc393f44b2c1a91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
