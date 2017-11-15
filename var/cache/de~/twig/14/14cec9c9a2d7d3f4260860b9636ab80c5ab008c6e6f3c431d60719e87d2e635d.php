<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_2df70fddc91cf626642b12c3159402a193f5b143a3351f9c71ada1697fd69fb3 extends Twig_Template
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
        $__internal_0a68b6288eaeb7cc9dfdafefdca1c11baefc69be1adf4e181073082d53b02de1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a68b6288eaeb7cc9dfdafefdca1c11baefc69be1adf4e181073082d53b02de1->enter($__internal_0a68b6288eaeb7cc9dfdafefdca1c11baefc69be1adf4e181073082d53b02de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_406a1bd3c0f1aff036a5f56f3c93ece37cfebf1c2c20ea414b73a66f233cff6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_406a1bd3c0f1aff036a5f56f3c93ece37cfebf1c2c20ea414b73a66f233cff6c->enter($__internal_406a1bd3c0f1aff036a5f56f3c93ece37cfebf1c2c20ea414b73a66f233cff6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_0a68b6288eaeb7cc9dfdafefdca1c11baefc69be1adf4e181073082d53b02de1->leave($__internal_0a68b6288eaeb7cc9dfdafefdca1c11baefc69be1adf4e181073082d53b02de1_prof);

        
        $__internal_406a1bd3c0f1aff036a5f56f3c93ece37cfebf1c2c20ea414b73a66f233cff6c->leave($__internal_406a1bd3c0f1aff036a5f56f3c93ece37cfebf1c2c20ea414b73a66f233cff6c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
