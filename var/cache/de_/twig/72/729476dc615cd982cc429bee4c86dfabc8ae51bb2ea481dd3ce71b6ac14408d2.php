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
        $__internal_e244bb739f06483bed86515eeaf9904770882699338c0a3f39f5314a67f7afb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e244bb739f06483bed86515eeaf9904770882699338c0a3f39f5314a67f7afb3->enter($__internal_e244bb739f06483bed86515eeaf9904770882699338c0a3f39f5314a67f7afb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_c54c033d227bc0cee7084a6ee7c4cfc79eabbf1cc97bba77ec789e59db3e5b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c54c033d227bc0cee7084a6ee7c4cfc79eabbf1cc97bba77ec789e59db3e5b7d->enter($__internal_c54c033d227bc0cee7084a6ee7c4cfc79eabbf1cc97bba77ec789e59db3e5b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_e244bb739f06483bed86515eeaf9904770882699338c0a3f39f5314a67f7afb3->leave($__internal_e244bb739f06483bed86515eeaf9904770882699338c0a3f39f5314a67f7afb3_prof);

        
        $__internal_c54c033d227bc0cee7084a6ee7c4cfc79eabbf1cc97bba77ec789e59db3e5b7d->leave($__internal_c54c033d227bc0cee7084a6ee7c4cfc79eabbf1cc97bba77ec789e59db3e5b7d_prof);

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
