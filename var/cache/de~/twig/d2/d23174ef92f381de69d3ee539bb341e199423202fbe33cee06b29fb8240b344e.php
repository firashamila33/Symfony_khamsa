<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_137a8c906fcd17c5c5808141c0f8981b30419ac9a5532daf7986c5f5c2765565 extends Twig_Template
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
        $__internal_21109731011c424a26e19e6e42d73ce1c1412974f1552906f7705c79eb3d0a16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21109731011c424a26e19e6e42d73ce1c1412974f1552906f7705c79eb3d0a16->enter($__internal_21109731011c424a26e19e6e42d73ce1c1412974f1552906f7705c79eb3d0a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_a074dd28a48e810f4baf36f234a203f1400c929092bcb4c3c48a3ee49d149ad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a074dd28a48e810f4baf36f234a203f1400c929092bcb4c3c48a3ee49d149ad5->enter($__internal_a074dd28a48e810f4baf36f234a203f1400c929092bcb4c3c48a3ee49d149ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_21109731011c424a26e19e6e42d73ce1c1412974f1552906f7705c79eb3d0a16->leave($__internal_21109731011c424a26e19e6e42d73ce1c1412974f1552906f7705c79eb3d0a16_prof);

        
        $__internal_a074dd28a48e810f4baf36f234a203f1400c929092bcb4c3c48a3ee49d149ad5->leave($__internal_a074dd28a48e810f4baf36f234a203f1400c929092bcb4c3c48a3ee49d149ad5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
