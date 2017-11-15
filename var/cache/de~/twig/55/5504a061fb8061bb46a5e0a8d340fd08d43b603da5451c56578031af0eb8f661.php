<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_335e0be5afdc999282fd8a006935c9653b88102666bef3906d4b123e0d2148cb extends Twig_Template
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
        $__internal_491689628af705f1f819b564e1fec0390539e3589145f9a8fae2c7fc42f495f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_491689628af705f1f819b564e1fec0390539e3589145f9a8fae2c7fc42f495f0->enter($__internal_491689628af705f1f819b564e1fec0390539e3589145f9a8fae2c7fc42f495f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_2bc68ba9cf5882bb2f410054795e84cdf0b74c7964f4c1b2ce903d5ca055c3ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bc68ba9cf5882bb2f410054795e84cdf0b74c7964f4c1b2ce903d5ca055c3ce->enter($__internal_2bc68ba9cf5882bb2f410054795e84cdf0b74c7964f4c1b2ce903d5ca055c3ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_491689628af705f1f819b564e1fec0390539e3589145f9a8fae2c7fc42f495f0->leave($__internal_491689628af705f1f819b564e1fec0390539e3589145f9a8fae2c7fc42f495f0_prof);

        
        $__internal_2bc68ba9cf5882bb2f410054795e84cdf0b74c7964f4c1b2ce903d5ca055c3ce->leave($__internal_2bc68ba9cf5882bb2f410054795e84cdf0b74c7964f4c1b2ce903d5ca055c3ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
