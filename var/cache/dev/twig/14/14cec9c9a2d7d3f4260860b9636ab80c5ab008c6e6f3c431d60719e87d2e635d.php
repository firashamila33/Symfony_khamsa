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
        $__internal_fe1c42c6d30943d70846f4181d5d8c9404c8bf59065189dd4d3a7660265a1e69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe1c42c6d30943d70846f4181d5d8c9404c8bf59065189dd4d3a7660265a1e69->enter($__internal_fe1c42c6d30943d70846f4181d5d8c9404c8bf59065189dd4d3a7660265a1e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_15e7061f7c3b2a79623fb5822df6a1a752c363a9a3ef4f7b59d0709069658316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15e7061f7c3b2a79623fb5822df6a1a752c363a9a3ef4f7b59d0709069658316->enter($__internal_15e7061f7c3b2a79623fb5822df6a1a752c363a9a3ef4f7b59d0709069658316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_fe1c42c6d30943d70846f4181d5d8c9404c8bf59065189dd4d3a7660265a1e69->leave($__internal_fe1c42c6d30943d70846f4181d5d8c9404c8bf59065189dd4d3a7660265a1e69_prof);

        
        $__internal_15e7061f7c3b2a79623fb5822df6a1a752c363a9a3ef4f7b59d0709069658316->leave($__internal_15e7061f7c3b2a79623fb5822df6a1a752c363a9a3ef4f7b59d0709069658316_prof);

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
