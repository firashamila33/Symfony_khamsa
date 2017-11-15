<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_cbf26720f9e89800ed9fd36ea5d7524b3ffef40e734ca9e5e08b6f0e588038dc extends Twig_Template
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
        $__internal_0237c75a6229c0fb5e7a4dafa7cc157dcd38558acba713e4549f0ec8e435913c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0237c75a6229c0fb5e7a4dafa7cc157dcd38558acba713e4549f0ec8e435913c->enter($__internal_0237c75a6229c0fb5e7a4dafa7cc157dcd38558acba713e4549f0ec8e435913c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_0e973f59a0333a0ba67516053f464a83b929b2b245cdb26c653d99cc4efec074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e973f59a0333a0ba67516053f464a83b929b2b245cdb26c653d99cc4efec074->enter($__internal_0e973f59a0333a0ba67516053f464a83b929b2b245cdb26c653d99cc4efec074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0237c75a6229c0fb5e7a4dafa7cc157dcd38558acba713e4549f0ec8e435913c->leave($__internal_0237c75a6229c0fb5e7a4dafa7cc157dcd38558acba713e4549f0ec8e435913c_prof);

        
        $__internal_0e973f59a0333a0ba67516053f464a83b929b2b245cdb26c653d99cc4efec074->leave($__internal_0e973f59a0333a0ba67516053f464a83b929b2b245cdb26c653d99cc4efec074_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
