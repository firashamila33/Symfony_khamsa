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
        $__internal_8d91ba40ddabc4ca6bfa2ed896decd90a067ca4c15094ca11ddeb07d061b6e47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d91ba40ddabc4ca6bfa2ed896decd90a067ca4c15094ca11ddeb07d061b6e47->enter($__internal_8d91ba40ddabc4ca6bfa2ed896decd90a067ca4c15094ca11ddeb07d061b6e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_405d23383d32f3200f4f0fafb20721579792c75ee7e5ec72cd677edfb47d25b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_405d23383d32f3200f4f0fafb20721579792c75ee7e5ec72cd677edfb47d25b7->enter($__internal_405d23383d32f3200f4f0fafb20721579792c75ee7e5ec72cd677edfb47d25b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_8d91ba40ddabc4ca6bfa2ed896decd90a067ca4c15094ca11ddeb07d061b6e47->leave($__internal_8d91ba40ddabc4ca6bfa2ed896decd90a067ca4c15094ca11ddeb07d061b6e47_prof);

        
        $__internal_405d23383d32f3200f4f0fafb20721579792c75ee7e5ec72cd677edfb47d25b7->leave($__internal_405d23383d32f3200f4f0fafb20721579792c75ee7e5ec72cd677edfb47d25b7_prof);

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
