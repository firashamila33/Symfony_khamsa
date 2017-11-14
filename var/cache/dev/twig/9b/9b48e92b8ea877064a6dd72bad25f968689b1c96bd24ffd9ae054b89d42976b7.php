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
        $__internal_fe1e3a28b40f864261a4710074a08d3f03ba09ad781ddb8d5a1f1201469bbc13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe1e3a28b40f864261a4710074a08d3f03ba09ad781ddb8d5a1f1201469bbc13->enter($__internal_fe1e3a28b40f864261a4710074a08d3f03ba09ad781ddb8d5a1f1201469bbc13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_7161221332a8dcc6ac618275ab959a7b9fce7fabfa0e539afab7b217eb4f96df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7161221332a8dcc6ac618275ab959a7b9fce7fabfa0e539afab7b217eb4f96df->enter($__internal_7161221332a8dcc6ac618275ab959a7b9fce7fabfa0e539afab7b217eb4f96df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_fe1e3a28b40f864261a4710074a08d3f03ba09ad781ddb8d5a1f1201469bbc13->leave($__internal_fe1e3a28b40f864261a4710074a08d3f03ba09ad781ddb8d5a1f1201469bbc13_prof);

        
        $__internal_7161221332a8dcc6ac618275ab959a7b9fce7fabfa0e539afab7b217eb4f96df->leave($__internal_7161221332a8dcc6ac618275ab959a7b9fce7fabfa0e539afab7b217eb4f96df_prof);

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
