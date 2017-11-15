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
        $__internal_54c6569e4b74f3f03340316a322778b233c66f36df6e970d1ea2c604e1526660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54c6569e4b74f3f03340316a322778b233c66f36df6e970d1ea2c604e1526660->enter($__internal_54c6569e4b74f3f03340316a322778b233c66f36df6e970d1ea2c604e1526660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_c1069c8f19481a740d7fce62c383578878bf9e0420a6ef7090f0689c07103763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1069c8f19481a740d7fce62c383578878bf9e0420a6ef7090f0689c07103763->enter($__internal_c1069c8f19481a740d7fce62c383578878bf9e0420a6ef7090f0689c07103763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_54c6569e4b74f3f03340316a322778b233c66f36df6e970d1ea2c604e1526660->leave($__internal_54c6569e4b74f3f03340316a322778b233c66f36df6e970d1ea2c604e1526660_prof);

        
        $__internal_c1069c8f19481a740d7fce62c383578878bf9e0420a6ef7090f0689c07103763->leave($__internal_c1069c8f19481a740d7fce62c383578878bf9e0420a6ef7090f0689c07103763_prof);

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
