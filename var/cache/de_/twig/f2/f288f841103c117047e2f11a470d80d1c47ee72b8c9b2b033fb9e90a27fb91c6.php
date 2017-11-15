<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_5b1b7f642d19768a38e465423cd5c4076405102e1b938ce9016f8cfe3bd88f59 extends Twig_Template
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
        $__internal_7f3a37d14f56649201ffdcdadef3513a6c5b650e851cffdee7724201080ea1d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f3a37d14f56649201ffdcdadef3513a6c5b650e851cffdee7724201080ea1d7->enter($__internal_7f3a37d14f56649201ffdcdadef3513a6c5b650e851cffdee7724201080ea1d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_9912ccb48c832a51be00bed91343346904dd4c196955348266952b51d9ef6e5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9912ccb48c832a51be00bed91343346904dd4c196955348266952b51d9ef6e5d->enter($__internal_9912ccb48c832a51be00bed91343346904dd4c196955348266952b51d9ef6e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_7f3a37d14f56649201ffdcdadef3513a6c5b650e851cffdee7724201080ea1d7->leave($__internal_7f3a37d14f56649201ffdcdadef3513a6c5b650e851cffdee7724201080ea1d7_prof);

        
        $__internal_9912ccb48c832a51be00bed91343346904dd4c196955348266952b51d9ef6e5d->leave($__internal_9912ccb48c832a51be00bed91343346904dd4c196955348266952b51d9ef6e5d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
