<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_f7c553976b4b030f1b8c90f887dcacac6b87edaa62e253817bd788f5674d0c60 extends Twig_Template
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
        $__internal_f2ac7eb9c9b4bfceb42da1fa3a65166a62b39366101b20a5754fac10c56ba219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2ac7eb9c9b4bfceb42da1fa3a65166a62b39366101b20a5754fac10c56ba219->enter($__internal_f2ac7eb9c9b4bfceb42da1fa3a65166a62b39366101b20a5754fac10c56ba219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_35d37af34006354cbf3e0edc69f9bd1b98701d3c38ba7f4664186cbbaf12f9ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d37af34006354cbf3e0edc69f9bd1b98701d3c38ba7f4664186cbbaf12f9ec->enter($__internal_35d37af34006354cbf3e0edc69f9bd1b98701d3c38ba7f4664186cbbaf12f9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_f2ac7eb9c9b4bfceb42da1fa3a65166a62b39366101b20a5754fac10c56ba219->leave($__internal_f2ac7eb9c9b4bfceb42da1fa3a65166a62b39366101b20a5754fac10c56ba219_prof);

        
        $__internal_35d37af34006354cbf3e0edc69f9bd1b98701d3c38ba7f4664186cbbaf12f9ec->leave($__internal_35d37af34006354cbf3e0edc69f9bd1b98701d3c38ba7f4664186cbbaf12f9ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
