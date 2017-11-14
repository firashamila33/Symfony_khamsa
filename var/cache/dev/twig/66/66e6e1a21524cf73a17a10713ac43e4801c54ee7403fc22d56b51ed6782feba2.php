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
        $__internal_327c34bad42e8c0a69074e6e5c18fb2b8c7d2b5c1c9900ebed5d5e5c171b6e13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_327c34bad42e8c0a69074e6e5c18fb2b8c7d2b5c1c9900ebed5d5e5c171b6e13->enter($__internal_327c34bad42e8c0a69074e6e5c18fb2b8c7d2b5c1c9900ebed5d5e5c171b6e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_96eb3dbd97cd9a53a9cc8838255e387844793f11ba28665dc43d919d1f77a0c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96eb3dbd97cd9a53a9cc8838255e387844793f11ba28665dc43d919d1f77a0c3->enter($__internal_96eb3dbd97cd9a53a9cc8838255e387844793f11ba28665dc43d919d1f77a0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_327c34bad42e8c0a69074e6e5c18fb2b8c7d2b5c1c9900ebed5d5e5c171b6e13->leave($__internal_327c34bad42e8c0a69074e6e5c18fb2b8c7d2b5c1c9900ebed5d5e5c171b6e13_prof);

        
        $__internal_96eb3dbd97cd9a53a9cc8838255e387844793f11ba28665dc43d919d1f77a0c3->leave($__internal_96eb3dbd97cd9a53a9cc8838255e387844793f11ba28665dc43d919d1f77a0c3_prof);

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
