<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_95e95fc49ab2cadae78ce21cf954ae89bd3ddadef65e2636c385e0768b1c2427 extends Twig_Template
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
        $__internal_5688c0ba1b655b2d922e1b4866ef60730304518a69cd43a29a7e2dc61ee96175 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5688c0ba1b655b2d922e1b4866ef60730304518a69cd43a29a7e2dc61ee96175->enter($__internal_5688c0ba1b655b2d922e1b4866ef60730304518a69cd43a29a7e2dc61ee96175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_40f6c3225d49082061bb94dd46cb26a1284e8b36a01ccb83adf1cf8832ebd0ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40f6c3225d49082061bb94dd46cb26a1284e8b36a01ccb83adf1cf8832ebd0ea->enter($__internal_40f6c3225d49082061bb94dd46cb26a1284e8b36a01ccb83adf1cf8832ebd0ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5688c0ba1b655b2d922e1b4866ef60730304518a69cd43a29a7e2dc61ee96175->leave($__internal_5688c0ba1b655b2d922e1b4866ef60730304518a69cd43a29a7e2dc61ee96175_prof);

        
        $__internal_40f6c3225d49082061bb94dd46cb26a1284e8b36a01ccb83adf1cf8832ebd0ea->leave($__internal_40f6c3225d49082061bb94dd46cb26a1284e8b36a01ccb83adf1cf8832ebd0ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
