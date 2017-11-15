<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_cbf26720f9e89800ed9fd36ea5d7524b3ffef40e734ca9e5e08b6f0e588038dc extends Twig_Template
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
        $__internal_c571467e028b267f0bdda8e92828c28951def1c2ef22c1d9edd3584549ce8b0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c571467e028b267f0bdda8e92828c28951def1c2ef22c1d9edd3584549ce8b0c->enter($__internal_c571467e028b267f0bdda8e92828c28951def1c2ef22c1d9edd3584549ce8b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_b1d4e49acf2345a66743d59aa1d7f0aff5812b5a5c9955cf089079ef70f203ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1d4e49acf2345a66743d59aa1d7f0aff5812b5a5c9955cf089079ef70f203ff->enter($__internal_b1d4e49acf2345a66743d59aa1d7f0aff5812b5a5c9955cf089079ef70f203ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_c571467e028b267f0bdda8e92828c28951def1c2ef22c1d9edd3584549ce8b0c->leave($__internal_c571467e028b267f0bdda8e92828c28951def1c2ef22c1d9edd3584549ce8b0c_prof);

        
        $__internal_b1d4e49acf2345a66743d59aa1d7f0aff5812b5a5c9955cf089079ef70f203ff->leave($__internal_b1d4e49acf2345a66743d59aa1d7f0aff5812b5a5c9955cf089079ef70f203ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
