<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_6e915253feda63b6668304bf319ad990967fff23d3d81d9a7f2caa84a9b2265d extends Twig_Template
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
        $__internal_a9e0b6b376c705d36638d70417f39232f8d80fd65cec47da91fb9b826cff935e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9e0b6b376c705d36638d70417f39232f8d80fd65cec47da91fb9b826cff935e->enter($__internal_a9e0b6b376c705d36638d70417f39232f8d80fd65cec47da91fb9b826cff935e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_fb048a48c160d9808fa55e6ac7cd5aae5226b8f8b82f5b66e21795345e3ce271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb048a48c160d9808fa55e6ac7cd5aae5226b8f8b82f5b66e21795345e3ce271->enter($__internal_fb048a48c160d9808fa55e6ac7cd5aae5226b8f8b82f5b66e21795345e3ce271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_a9e0b6b376c705d36638d70417f39232f8d80fd65cec47da91fb9b826cff935e->leave($__internal_a9e0b6b376c705d36638d70417f39232f8d80fd65cec47da91fb9b826cff935e_prof);

        
        $__internal_fb048a48c160d9808fa55e6ac7cd5aae5226b8f8b82f5b66e21795345e3ce271->leave($__internal_fb048a48c160d9808fa55e6ac7cd5aae5226b8f8b82f5b66e21795345e3ce271_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
