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
        $__internal_3f7ee49eedab3d427bd2a7491a74bd4be47e257b119f8c425db29099f0759fe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f7ee49eedab3d427bd2a7491a74bd4be47e257b119f8c425db29099f0759fe0->enter($__internal_3f7ee49eedab3d427bd2a7491a74bd4be47e257b119f8c425db29099f0759fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_4ded1f777d1d2fb7f88d755fda11f069fea439c5a59407c305e37e9a54e60168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ded1f777d1d2fb7f88d755fda11f069fea439c5a59407c305e37e9a54e60168->enter($__internal_4ded1f777d1d2fb7f88d755fda11f069fea439c5a59407c305e37e9a54e60168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_3f7ee49eedab3d427bd2a7491a74bd4be47e257b119f8c425db29099f0759fe0->leave($__internal_3f7ee49eedab3d427bd2a7491a74bd4be47e257b119f8c425db29099f0759fe0_prof);

        
        $__internal_4ded1f777d1d2fb7f88d755fda11f069fea439c5a59407c305e37e9a54e60168->leave($__internal_4ded1f777d1d2fb7f88d755fda11f069fea439c5a59407c305e37e9a54e60168_prof);

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
