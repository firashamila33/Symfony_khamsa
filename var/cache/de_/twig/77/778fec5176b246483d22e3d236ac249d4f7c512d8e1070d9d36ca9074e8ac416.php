<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_c78c6652eac5f33ee23542b6e38d083545f707d9e85d7abe20fec458b14d7b83 extends Twig_Template
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
        $__internal_1cc557263ed4470b91c0c4e01e338a9abe7a3cfe0903acf38ab552ba5402ed50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cc557263ed4470b91c0c4e01e338a9abe7a3cfe0903acf38ab552ba5402ed50->enter($__internal_1cc557263ed4470b91c0c4e01e338a9abe7a3cfe0903acf38ab552ba5402ed50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_2fab7cd680e5bbf27fcc74ea70db9cfc45a02b8588064203ed2bea22622a0899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fab7cd680e5bbf27fcc74ea70db9cfc45a02b8588064203ed2bea22622a0899->enter($__internal_2fab7cd680e5bbf27fcc74ea70db9cfc45a02b8588064203ed2bea22622a0899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_1cc557263ed4470b91c0c4e01e338a9abe7a3cfe0903acf38ab552ba5402ed50->leave($__internal_1cc557263ed4470b91c0c4e01e338a9abe7a3cfe0903acf38ab552ba5402ed50_prof);

        
        $__internal_2fab7cd680e5bbf27fcc74ea70db9cfc45a02b8588064203ed2bea22622a0899->leave($__internal_2fab7cd680e5bbf27fcc74ea70db9cfc45a02b8588064203ed2bea22622a0899_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
