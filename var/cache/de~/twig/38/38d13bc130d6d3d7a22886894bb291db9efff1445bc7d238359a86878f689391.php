<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_6604d0ea06a70cd08403690f59a9ccebfafea0503a51a5718ad8215f491a0f3b extends Twig_Template
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
        $__internal_1fa5fedef2c3dd2d265d8149179d6c2ddc6d8e71473475c1ca8b33ba1859782a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fa5fedef2c3dd2d265d8149179d6c2ddc6d8e71473475c1ca8b33ba1859782a->enter($__internal_1fa5fedef2c3dd2d265d8149179d6c2ddc6d8e71473475c1ca8b33ba1859782a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_82619378f87291ab30408350ca5dda6e2d7bc417433032be9aeb22177e9572d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82619378f87291ab30408350ca5dda6e2d7bc417433032be9aeb22177e9572d2->enter($__internal_82619378f87291ab30408350ca5dda6e2d7bc417433032be9aeb22177e9572d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1fa5fedef2c3dd2d265d8149179d6c2ddc6d8e71473475c1ca8b33ba1859782a->leave($__internal_1fa5fedef2c3dd2d265d8149179d6c2ddc6d8e71473475c1ca8b33ba1859782a_prof);

        
        $__internal_82619378f87291ab30408350ca5dda6e2d7bc417433032be9aeb22177e9572d2->leave($__internal_82619378f87291ab30408350ca5dda6e2d7bc417433032be9aeb22177e9572d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
