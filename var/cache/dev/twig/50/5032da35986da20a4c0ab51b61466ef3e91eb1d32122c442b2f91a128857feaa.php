<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_6d5bd6860340a4e0cbf7da2b08654acba777025569241f0dc0c67722fb3e6dd5 extends Twig_Template
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
        $__internal_2cf5976d88ddaf6b3a9b624ab5e46d991d70ac2cffa62452d003418ceea206c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cf5976d88ddaf6b3a9b624ab5e46d991d70ac2cffa62452d003418ceea206c0->enter($__internal_2cf5976d88ddaf6b3a9b624ab5e46d991d70ac2cffa62452d003418ceea206c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_b198dae125c91aff33548bab758da48c799a8a885eb5de80374c67cf0ce532fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b198dae125c91aff33548bab758da48c799a8a885eb5de80374c67cf0ce532fb->enter($__internal_b198dae125c91aff33548bab758da48c799a8a885eb5de80374c67cf0ce532fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_2cf5976d88ddaf6b3a9b624ab5e46d991d70ac2cffa62452d003418ceea206c0->leave($__internal_2cf5976d88ddaf6b3a9b624ab5e46d991d70ac2cffa62452d003418ceea206c0_prof);

        
        $__internal_b198dae125c91aff33548bab758da48c799a8a885eb5de80374c67cf0ce532fb->leave($__internal_b198dae125c91aff33548bab758da48c799a8a885eb5de80374c67cf0ce532fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
