<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_62af48e20f802544327eacbd14b78a17d85522b68ec90e1b097490f0642586bb extends Twig_Template
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
        $__internal_d50db3561733f0a19ee26e272412a940e73e0c7a25f1618dbf0b408b7a34d6f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d50db3561733f0a19ee26e272412a940e73e0c7a25f1618dbf0b408b7a34d6f2->enter($__internal_d50db3561733f0a19ee26e272412a940e73e0c7a25f1618dbf0b408b7a34d6f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_c6246fe561291c416e8c5278b7f22cfb4ea09ac5521834af20455c538025a77b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6246fe561291c416e8c5278b7f22cfb4ea09ac5521834af20455c538025a77b->enter($__internal_c6246fe561291c416e8c5278b7f22cfb4ea09ac5521834af20455c538025a77b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_d50db3561733f0a19ee26e272412a940e73e0c7a25f1618dbf0b408b7a34d6f2->leave($__internal_d50db3561733f0a19ee26e272412a940e73e0c7a25f1618dbf0b408b7a34d6f2_prof);

        
        $__internal_c6246fe561291c416e8c5278b7f22cfb4ea09ac5521834af20455c538025a77b->leave($__internal_c6246fe561291c416e8c5278b7f22cfb4ea09ac5521834af20455c538025a77b_prof);

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
", "@Framework/Form/money_widget.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
