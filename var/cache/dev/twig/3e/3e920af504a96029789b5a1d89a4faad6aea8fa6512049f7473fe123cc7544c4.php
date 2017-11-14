<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_991494ddf3cb80ad77496b757160a2bee5ee7701b99249bd078e015980cc9c2f extends Twig_Template
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
        $__internal_5f955cf4304b8fb1395f875844a3a7a69e0ba94ead98b475668ae1b8e37bae2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f955cf4304b8fb1395f875844a3a7a69e0ba94ead98b475668ae1b8e37bae2a->enter($__internal_5f955cf4304b8fb1395f875844a3a7a69e0ba94ead98b475668ae1b8e37bae2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_7a18365953be11731ce81adc97bfc0a79d3adeefcaa89d20d75e39da302210d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a18365953be11731ce81adc97bfc0a79d3adeefcaa89d20d75e39da302210d8->enter($__internal_7a18365953be11731ce81adc97bfc0a79d3adeefcaa89d20d75e39da302210d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_5f955cf4304b8fb1395f875844a3a7a69e0ba94ead98b475668ae1b8e37bae2a->leave($__internal_5f955cf4304b8fb1395f875844a3a7a69e0ba94ead98b475668ae1b8e37bae2a_prof);

        
        $__internal_7a18365953be11731ce81adc97bfc0a79d3adeefcaa89d20d75e39da302210d8->leave($__internal_7a18365953be11731ce81adc97bfc0a79d3adeefcaa89d20d75e39da302210d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
