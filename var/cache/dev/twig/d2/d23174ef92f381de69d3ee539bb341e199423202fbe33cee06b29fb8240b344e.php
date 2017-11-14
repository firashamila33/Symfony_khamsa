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
        $__internal_e0adebbe0e84726c007d577945b5ebdf4152dab9dbf54701f54d572df5f2535e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0adebbe0e84726c007d577945b5ebdf4152dab9dbf54701f54d572df5f2535e->enter($__internal_e0adebbe0e84726c007d577945b5ebdf4152dab9dbf54701f54d572df5f2535e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_a888dd09571f458069455e987ae7e88257e8619b47a969576db4f57a75aab826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a888dd09571f458069455e987ae7e88257e8619b47a969576db4f57a75aab826->enter($__internal_a888dd09571f458069455e987ae7e88257e8619b47a969576db4f57a75aab826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_e0adebbe0e84726c007d577945b5ebdf4152dab9dbf54701f54d572df5f2535e->leave($__internal_e0adebbe0e84726c007d577945b5ebdf4152dab9dbf54701f54d572df5f2535e_prof);

        
        $__internal_a888dd09571f458069455e987ae7e88257e8619b47a969576db4f57a75aab826->leave($__internal_a888dd09571f458069455e987ae7e88257e8619b47a969576db4f57a75aab826_prof);

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
