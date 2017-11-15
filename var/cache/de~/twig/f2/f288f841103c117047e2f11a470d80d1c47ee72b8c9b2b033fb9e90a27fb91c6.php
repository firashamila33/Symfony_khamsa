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
        $__internal_b73f7d2c84dbef5fa9bb78c6cbabd071b9587c7e8a04c18ab98c72676212db71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b73f7d2c84dbef5fa9bb78c6cbabd071b9587c7e8a04c18ab98c72676212db71->enter($__internal_b73f7d2c84dbef5fa9bb78c6cbabd071b9587c7e8a04c18ab98c72676212db71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_6b615986e639668a77e100341e2a93e320f011b202eefb25221461fb9be59702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b615986e639668a77e100341e2a93e320f011b202eefb25221461fb9be59702->enter($__internal_6b615986e639668a77e100341e2a93e320f011b202eefb25221461fb9be59702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_b73f7d2c84dbef5fa9bb78c6cbabd071b9587c7e8a04c18ab98c72676212db71->leave($__internal_b73f7d2c84dbef5fa9bb78c6cbabd071b9587c7e8a04c18ab98c72676212db71_prof);

        
        $__internal_6b615986e639668a77e100341e2a93e320f011b202eefb25221461fb9be59702->leave($__internal_6b615986e639668a77e100341e2a93e320f011b202eefb25221461fb9be59702_prof);

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
