<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_3710e5f4c6f5b612e9638f7d0716fb2b3f8045962178b555506456b94332b8f3 extends Twig_Template
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
        $__internal_a961fcaf6ce10d496e7de07591224096d4913ecaaa5874c5ce1ed733d1691bd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a961fcaf6ce10d496e7de07591224096d4913ecaaa5874c5ce1ed733d1691bd6->enter($__internal_a961fcaf6ce10d496e7de07591224096d4913ecaaa5874c5ce1ed733d1691bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_5497e209eab8acf0b25cdb7132b0cfab5afe8057169b267712e256832819336f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5497e209eab8acf0b25cdb7132b0cfab5afe8057169b267712e256832819336f->enter($__internal_5497e209eab8acf0b25cdb7132b0cfab5afe8057169b267712e256832819336f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_a961fcaf6ce10d496e7de07591224096d4913ecaaa5874c5ce1ed733d1691bd6->leave($__internal_a961fcaf6ce10d496e7de07591224096d4913ecaaa5874c5ce1ed733d1691bd6_prof);

        
        $__internal_5497e209eab8acf0b25cdb7132b0cfab5afe8057169b267712e256832819336f->leave($__internal_5497e209eab8acf0b25cdb7132b0cfab5afe8057169b267712e256832819336f_prof);

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
", "@Framework/Form/form_widget_simple.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
