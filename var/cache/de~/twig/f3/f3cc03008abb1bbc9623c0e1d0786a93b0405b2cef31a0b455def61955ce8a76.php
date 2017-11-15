<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_90adc9e26a06bbe15da64a01836e58b889b41866b047ba24153cd9242c3afb59 extends Twig_Template
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
        $__internal_4e36d23d9e052ce20678defe0d0d48a8fe75ea3ded2489c39d7cb0d167f3d148 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e36d23d9e052ce20678defe0d0d48a8fe75ea3ded2489c39d7cb0d167f3d148->enter($__internal_4e36d23d9e052ce20678defe0d0d48a8fe75ea3ded2489c39d7cb0d167f3d148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_065b0283ddb6c353a9288977ccfe742cd278777b3d4a2d6176b4fbfee8a6e0bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_065b0283ddb6c353a9288977ccfe742cd278777b3d4a2d6176b4fbfee8a6e0bc->enter($__internal_065b0283ddb6c353a9288977ccfe742cd278777b3d4a2d6176b4fbfee8a6e0bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_4e36d23d9e052ce20678defe0d0d48a8fe75ea3ded2489c39d7cb0d167f3d148->leave($__internal_4e36d23d9e052ce20678defe0d0d48a8fe75ea3ded2489c39d7cb0d167f3d148_prof);

        
        $__internal_065b0283ddb6c353a9288977ccfe742cd278777b3d4a2d6176b4fbfee8a6e0bc->leave($__internal_065b0283ddb6c353a9288977ccfe742cd278777b3d4a2d6176b4fbfee8a6e0bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
