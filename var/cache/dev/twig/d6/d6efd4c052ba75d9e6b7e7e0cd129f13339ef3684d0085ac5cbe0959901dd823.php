<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_725053b188786a69cc310fb7706bafb7e14d31c150fcfc439b0835ff35f1fcff extends Twig_Template
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
        $__internal_7e3c670223b5c92a2b216f4d2fb19157b645656b6cb5b29a40c29890c516f54f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e3c670223b5c92a2b216f4d2fb19157b645656b6cb5b29a40c29890c516f54f->enter($__internal_7e3c670223b5c92a2b216f4d2fb19157b645656b6cb5b29a40c29890c516f54f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_98047548167520ec1f1482d38d60425907c114e16624072ecdfa38689deb55bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98047548167520ec1f1482d38d60425907c114e16624072ecdfa38689deb55bd->enter($__internal_98047548167520ec1f1482d38d60425907c114e16624072ecdfa38689deb55bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_7e3c670223b5c92a2b216f4d2fb19157b645656b6cb5b29a40c29890c516f54f->leave($__internal_7e3c670223b5c92a2b216f4d2fb19157b645656b6cb5b29a40c29890c516f54f_prof);

        
        $__internal_98047548167520ec1f1482d38d60425907c114e16624072ecdfa38689deb55bd->leave($__internal_98047548167520ec1f1482d38d60425907c114e16624072ecdfa38689deb55bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
