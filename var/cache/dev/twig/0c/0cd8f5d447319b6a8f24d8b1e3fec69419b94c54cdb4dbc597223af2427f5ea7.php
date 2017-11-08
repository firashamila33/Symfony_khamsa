<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_31b0d601e2d6d3890b47ef27cb3e463e82f9b514a8c022d9bfde2823faf41b0a extends Twig_Template
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
        $__internal_16bbeb1f0a9d1e5b8ace086fdae5c347e0c7a826d3624613f663bc9ed28828b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16bbeb1f0a9d1e5b8ace086fdae5c347e0c7a826d3624613f663bc9ed28828b0->enter($__internal_16bbeb1f0a9d1e5b8ace086fdae5c347e0c7a826d3624613f663bc9ed28828b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_4cd7696807bb33e2fa1301037a3466d36812442bf4db3b73281bf05440caacb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cd7696807bb33e2fa1301037a3466d36812442bf4db3b73281bf05440caacb6->enter($__internal_4cd7696807bb33e2fa1301037a3466d36812442bf4db3b73281bf05440caacb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_16bbeb1f0a9d1e5b8ace086fdae5c347e0c7a826d3624613f663bc9ed28828b0->leave($__internal_16bbeb1f0a9d1e5b8ace086fdae5c347e0c7a826d3624613f663bc9ed28828b0_prof);

        
        $__internal_4cd7696807bb33e2fa1301037a3466d36812442bf4db3b73281bf05440caacb6->leave($__internal_4cd7696807bb33e2fa1301037a3466d36812442bf4db3b73281bf05440caacb6_prof);

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
", "@Framework/Form/hidden_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
