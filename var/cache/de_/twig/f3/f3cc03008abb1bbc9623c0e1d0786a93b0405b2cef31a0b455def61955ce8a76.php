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
        $__internal_bc0128f765d030d9b3708c64166b660c36cb1992f77596cc2debf825110d71d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc0128f765d030d9b3708c64166b660c36cb1992f77596cc2debf825110d71d4->enter($__internal_bc0128f765d030d9b3708c64166b660c36cb1992f77596cc2debf825110d71d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_3a12d32698df460360a8a589163fbd692c1a9ff4eb7412d3d6ebc72764f1f9f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a12d32698df460360a8a589163fbd692c1a9ff4eb7412d3d6ebc72764f1f9f1->enter($__internal_3a12d32698df460360a8a589163fbd692c1a9ff4eb7412d3d6ebc72764f1f9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_bc0128f765d030d9b3708c64166b660c36cb1992f77596cc2debf825110d71d4->leave($__internal_bc0128f765d030d9b3708c64166b660c36cb1992f77596cc2debf825110d71d4_prof);

        
        $__internal_3a12d32698df460360a8a589163fbd692c1a9ff4eb7412d3d6ebc72764f1f9f1->leave($__internal_3a12d32698df460360a8a589163fbd692c1a9ff4eb7412d3d6ebc72764f1f9f1_prof);

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
