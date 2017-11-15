<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_4cc88372ed60176f22a648a571f5ea6e229cd3821d765590b0c20ef1c491fe7b extends Twig_Template
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
        $__internal_bc34ca070fe610613b66a8043323cc90a5d9803f9f599ea9a8f160b974ddb7b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc34ca070fe610613b66a8043323cc90a5d9803f9f599ea9a8f160b974ddb7b8->enter($__internal_bc34ca070fe610613b66a8043323cc90a5d9803f9f599ea9a8f160b974ddb7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_40d1f572a0de90692112cd31971533f5f86c3d1307ebb16d52b0ea3d304cd0ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40d1f572a0de90692112cd31971533f5f86c3d1307ebb16d52b0ea3d304cd0ab->enter($__internal_40d1f572a0de90692112cd31971533f5f86c3d1307ebb16d52b0ea3d304cd0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_bc34ca070fe610613b66a8043323cc90a5d9803f9f599ea9a8f160b974ddb7b8->leave($__internal_bc34ca070fe610613b66a8043323cc90a5d9803f9f599ea9a8f160b974ddb7b8_prof);

        
        $__internal_40d1f572a0de90692112cd31971533f5f86c3d1307ebb16d52b0ea3d304cd0ab->leave($__internal_40d1f572a0de90692112cd31971533f5f86c3d1307ebb16d52b0ea3d304cd0ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
