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
        $__internal_8cbf0cbd9e9c4037fa826b462ff52bc4e46c6c3a89d853b5cbd2caef7f2e88ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cbf0cbd9e9c4037fa826b462ff52bc4e46c6c3a89d853b5cbd2caef7f2e88ba->enter($__internal_8cbf0cbd9e9c4037fa826b462ff52bc4e46c6c3a89d853b5cbd2caef7f2e88ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_d3cab6dd90d053f842c0a49afb85c12fb1dec47a61258808da2dd342c7ee5972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3cab6dd90d053f842c0a49afb85c12fb1dec47a61258808da2dd342c7ee5972->enter($__internal_d3cab6dd90d053f842c0a49afb85c12fb1dec47a61258808da2dd342c7ee5972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8cbf0cbd9e9c4037fa826b462ff52bc4e46c6c3a89d853b5cbd2caef7f2e88ba->leave($__internal_8cbf0cbd9e9c4037fa826b462ff52bc4e46c6c3a89d853b5cbd2caef7f2e88ba_prof);

        
        $__internal_d3cab6dd90d053f842c0a49afb85c12fb1dec47a61258808da2dd342c7ee5972->leave($__internal_d3cab6dd90d053f842c0a49afb85c12fb1dec47a61258808da2dd342c7ee5972_prof);

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
