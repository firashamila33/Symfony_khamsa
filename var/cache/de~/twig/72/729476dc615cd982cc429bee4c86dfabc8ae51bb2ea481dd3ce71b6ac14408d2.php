<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_81fa603864c9b68e0bfb3fcd4682cd68be8146cadbc5b6927ff25adab58db7cf extends Twig_Template
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
        $__internal_83064a51825c0689153001a6a7a23ca53a9501f983bb663065da1c0818a4eb17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83064a51825c0689153001a6a7a23ca53a9501f983bb663065da1c0818a4eb17->enter($__internal_83064a51825c0689153001a6a7a23ca53a9501f983bb663065da1c0818a4eb17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_01387a0757b0a924cd471d4a78963fbdc268d36b515746cd86961528d41ecf7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01387a0757b0a924cd471d4a78963fbdc268d36b515746cd86961528d41ecf7f->enter($__internal_01387a0757b0a924cd471d4a78963fbdc268d36b515746cd86961528d41ecf7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_83064a51825c0689153001a6a7a23ca53a9501f983bb663065da1c0818a4eb17->leave($__internal_83064a51825c0689153001a6a7a23ca53a9501f983bb663065da1c0818a4eb17_prof);

        
        $__internal_01387a0757b0a924cd471d4a78963fbdc268d36b515746cd86961528d41ecf7f->leave($__internal_01387a0757b0a924cd471d4a78963fbdc268d36b515746cd86961528d41ecf7f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
