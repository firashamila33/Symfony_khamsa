<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_c875e60124ac7d0b1a1555f3d069d02025e827c74b704adedb01b35873ffc8d7 extends Twig_Template
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
        $__internal_c570abf52174f31428761c55bf67a2eb97f4ae329a1cde599b1b251a99d66962 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c570abf52174f31428761c55bf67a2eb97f4ae329a1cde599b1b251a99d66962->enter($__internal_c570abf52174f31428761c55bf67a2eb97f4ae329a1cde599b1b251a99d66962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_40f501af80c9d5734245cdd87c9bd20b960eb7a8574ab4d7e82132f6902902cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40f501af80c9d5734245cdd87c9bd20b960eb7a8574ab4d7e82132f6902902cb->enter($__internal_40f501af80c9d5734245cdd87c9bd20b960eb7a8574ab4d7e82132f6902902cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_c570abf52174f31428761c55bf67a2eb97f4ae329a1cde599b1b251a99d66962->leave($__internal_c570abf52174f31428761c55bf67a2eb97f4ae329a1cde599b1b251a99d66962_prof);

        
        $__internal_40f501af80c9d5734245cdd87c9bd20b960eb7a8574ab4d7e82132f6902902cb->leave($__internal_40f501af80c9d5734245cdd87c9bd20b960eb7a8574ab4d7e82132f6902902cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
