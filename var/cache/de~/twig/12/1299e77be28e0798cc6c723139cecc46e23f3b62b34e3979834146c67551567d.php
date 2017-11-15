<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_e0cf59a4621ec8033c97de55c18f6092393182cc06584dfaa638c94fe4024dc9 extends Twig_Template
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
        $__internal_af00e1767c45d9d58ef759ae8bc2ea0eed362725bfe1261d823417d43f948b30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af00e1767c45d9d58ef759ae8bc2ea0eed362725bfe1261d823417d43f948b30->enter($__internal_af00e1767c45d9d58ef759ae8bc2ea0eed362725bfe1261d823417d43f948b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_ed8edf2ad532281c1967ffac2e49e5a5a0e95f42e8c83ac48d397ac059f95314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed8edf2ad532281c1967ffac2e49e5a5a0e95f42e8c83ac48d397ac059f95314->enter($__internal_ed8edf2ad532281c1967ffac2e49e5a5a0e95f42e8c83ac48d397ac059f95314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_af00e1767c45d9d58ef759ae8bc2ea0eed362725bfe1261d823417d43f948b30->leave($__internal_af00e1767c45d9d58ef759ae8bc2ea0eed362725bfe1261d823417d43f948b30_prof);

        
        $__internal_ed8edf2ad532281c1967ffac2e49e5a5a0e95f42e8c83ac48d397ac059f95314->leave($__internal_ed8edf2ad532281c1967ffac2e49e5a5a0e95f42e8c83ac48d397ac059f95314_prof);

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
", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
