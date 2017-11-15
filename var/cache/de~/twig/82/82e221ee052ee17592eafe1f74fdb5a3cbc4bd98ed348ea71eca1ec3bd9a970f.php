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
        $__internal_cbad8e2c7d394d747dc047cfcc44da8711699550ac8a54d0700d97892b46a661 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbad8e2c7d394d747dc047cfcc44da8711699550ac8a54d0700d97892b46a661->enter($__internal_cbad8e2c7d394d747dc047cfcc44da8711699550ac8a54d0700d97892b46a661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_33ef86a372960895d6079756f5d34a422bda66e8a5a96400b331d89c8843694c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33ef86a372960895d6079756f5d34a422bda66e8a5a96400b331d89c8843694c->enter($__internal_33ef86a372960895d6079756f5d34a422bda66e8a5a96400b331d89c8843694c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_cbad8e2c7d394d747dc047cfcc44da8711699550ac8a54d0700d97892b46a661->leave($__internal_cbad8e2c7d394d747dc047cfcc44da8711699550ac8a54d0700d97892b46a661_prof);

        
        $__internal_33ef86a372960895d6079756f5d34a422bda66e8a5a96400b331d89c8843694c->leave($__internal_33ef86a372960895d6079756f5d34a422bda66e8a5a96400b331d89c8843694c_prof);

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
