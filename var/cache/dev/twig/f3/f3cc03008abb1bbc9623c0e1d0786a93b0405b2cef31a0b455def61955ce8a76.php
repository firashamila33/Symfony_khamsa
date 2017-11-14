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
        $__internal_e52e69d659549b325465ca07bd5253eec0c29746a1fc928a730e5beab3a57d85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e52e69d659549b325465ca07bd5253eec0c29746a1fc928a730e5beab3a57d85->enter($__internal_e52e69d659549b325465ca07bd5253eec0c29746a1fc928a730e5beab3a57d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_12b6cb77363d92998dd2814a47caa4b4bf80b796f2723cf2e1acdde55e12c8ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12b6cb77363d92998dd2814a47caa4b4bf80b796f2723cf2e1acdde55e12c8ec->enter($__internal_12b6cb77363d92998dd2814a47caa4b4bf80b796f2723cf2e1acdde55e12c8ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_e52e69d659549b325465ca07bd5253eec0c29746a1fc928a730e5beab3a57d85->leave($__internal_e52e69d659549b325465ca07bd5253eec0c29746a1fc928a730e5beab3a57d85_prof);

        
        $__internal_12b6cb77363d92998dd2814a47caa4b4bf80b796f2723cf2e1acdde55e12c8ec->leave($__internal_12b6cb77363d92998dd2814a47caa4b4bf80b796f2723cf2e1acdde55e12c8ec_prof);

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
