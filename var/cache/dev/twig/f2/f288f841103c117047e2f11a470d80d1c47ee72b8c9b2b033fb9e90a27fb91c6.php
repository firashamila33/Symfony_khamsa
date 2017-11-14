<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_5b1b7f642d19768a38e465423cd5c4076405102e1b938ce9016f8cfe3bd88f59 extends Twig_Template
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
        $__internal_35b562ad7af35837772818d35dbbc5b0d1dd10494c3a1f8962aaf6bb3ce073ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35b562ad7af35837772818d35dbbc5b0d1dd10494c3a1f8962aaf6bb3ce073ef->enter($__internal_35b562ad7af35837772818d35dbbc5b0d1dd10494c3a1f8962aaf6bb3ce073ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_ac54b885d55f05b83e7cc97ab77cc424d3c54e5600ca71b94c93c3d077712ab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac54b885d55f05b83e7cc97ab77cc424d3c54e5600ca71b94c93c3d077712ab9->enter($__internal_ac54b885d55f05b83e7cc97ab77cc424d3c54e5600ca71b94c93c3d077712ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_35b562ad7af35837772818d35dbbc5b0d1dd10494c3a1f8962aaf6bb3ce073ef->leave($__internal_35b562ad7af35837772818d35dbbc5b0d1dd10494c3a1f8962aaf6bb3ce073ef_prof);

        
        $__internal_ac54b885d55f05b83e7cc97ab77cc424d3c54e5600ca71b94c93c3d077712ab9->leave($__internal_ac54b885d55f05b83e7cc97ab77cc424d3c54e5600ca71b94c93c3d077712ab9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
