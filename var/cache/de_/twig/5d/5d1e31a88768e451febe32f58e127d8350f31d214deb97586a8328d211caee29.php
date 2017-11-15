<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_a6140b5639b90f54269779c864f6695fdf2064da2574420d5b1161d3657d627a extends Twig_Template
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
        $__internal_03060df346ebd0cc41fd49ac871762bd6b1c8e35aceaa6d8514cc851e27928a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03060df346ebd0cc41fd49ac871762bd6b1c8e35aceaa6d8514cc851e27928a8->enter($__internal_03060df346ebd0cc41fd49ac871762bd6b1c8e35aceaa6d8514cc851e27928a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_cfe703ea33b86c248766bbc55ca58812cd10b5182ee7d41409fea7f7997eb289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfe703ea33b86c248766bbc55ca58812cd10b5182ee7d41409fea7f7997eb289->enter($__internal_cfe703ea33b86c248766bbc55ca58812cd10b5182ee7d41409fea7f7997eb289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_03060df346ebd0cc41fd49ac871762bd6b1c8e35aceaa6d8514cc851e27928a8->leave($__internal_03060df346ebd0cc41fd49ac871762bd6b1c8e35aceaa6d8514cc851e27928a8_prof);

        
        $__internal_cfe703ea33b86c248766bbc55ca58812cd10b5182ee7d41409fea7f7997eb289->leave($__internal_cfe703ea33b86c248766bbc55ca58812cd10b5182ee7d41409fea7f7997eb289_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
