<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_8a9027bcdfe32acddc52a01fddd24f34c75d8af9f1badfe360f408ce83af8436 extends Twig_Template
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
        $__internal_8988ee61bb7de98ed11817a66dab53c4da9abd4c8d56bcdd4c85c3efee9a2e8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8988ee61bb7de98ed11817a66dab53c4da9abd4c8d56bcdd4c85c3efee9a2e8d->enter($__internal_8988ee61bb7de98ed11817a66dab53c4da9abd4c8d56bcdd4c85c3efee9a2e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_3a2a1d823c4fc6600a8000b338ba5836e7a4c173b62ec8d5c4c0b7dfab21818a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a2a1d823c4fc6600a8000b338ba5836e7a4c173b62ec8d5c4c0b7dfab21818a->enter($__internal_3a2a1d823c4fc6600a8000b338ba5836e7a4c173b62ec8d5c4c0b7dfab21818a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8988ee61bb7de98ed11817a66dab53c4da9abd4c8d56bcdd4c85c3efee9a2e8d->leave($__internal_8988ee61bb7de98ed11817a66dab53c4da9abd4c8d56bcdd4c85c3efee9a2e8d_prof);

        
        $__internal_3a2a1d823c4fc6600a8000b338ba5836e7a4c173b62ec8d5c4c0b7dfab21818a->leave($__internal_3a2a1d823c4fc6600a8000b338ba5836e7a4c173b62ec8d5c4c0b7dfab21818a_prof);

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
", "@Framework/Form/radio_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
