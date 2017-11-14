<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_335e0be5afdc999282fd8a006935c9653b88102666bef3906d4b123e0d2148cb extends Twig_Template
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
        $__internal_f7eb07451a40d92a40c8d767d564bdba84e91720464954d21aa23fc307d13198 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7eb07451a40d92a40c8d767d564bdba84e91720464954d21aa23fc307d13198->enter($__internal_f7eb07451a40d92a40c8d767d564bdba84e91720464954d21aa23fc307d13198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_337d74db6a62bdabfe35210d8b03367e187cc98172a8209d23c473adfb023be0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_337d74db6a62bdabfe35210d8b03367e187cc98172a8209d23c473adfb023be0->enter($__internal_337d74db6a62bdabfe35210d8b03367e187cc98172a8209d23c473adfb023be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_f7eb07451a40d92a40c8d767d564bdba84e91720464954d21aa23fc307d13198->leave($__internal_f7eb07451a40d92a40c8d767d564bdba84e91720464954d21aa23fc307d13198_prof);

        
        $__internal_337d74db6a62bdabfe35210d8b03367e187cc98172a8209d23c473adfb023be0->leave($__internal_337d74db6a62bdabfe35210d8b03367e187cc98172a8209d23c473adfb023be0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
