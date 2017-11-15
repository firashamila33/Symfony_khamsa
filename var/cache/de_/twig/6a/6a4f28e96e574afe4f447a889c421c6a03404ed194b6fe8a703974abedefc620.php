<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_9d06b766dc54eb8070a3f04b2854994eb45a73edb76945f1d3bc9b81107471b9 extends Twig_Template
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
        $__internal_cc2e149ae4929d6fef2e387522f7ae82f7787c16596584fed5dd252fdf343e0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc2e149ae4929d6fef2e387522f7ae82f7787c16596584fed5dd252fdf343e0a->enter($__internal_cc2e149ae4929d6fef2e387522f7ae82f7787c16596584fed5dd252fdf343e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_74f4fa908cec859b6f3e7c0de530e2612a2e11edb07dd913be522120bad32ea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74f4fa908cec859b6f3e7c0de530e2612a2e11edb07dd913be522120bad32ea5->enter($__internal_74f4fa908cec859b6f3e7c0de530e2612a2e11edb07dd913be522120bad32ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_cc2e149ae4929d6fef2e387522f7ae82f7787c16596584fed5dd252fdf343e0a->leave($__internal_cc2e149ae4929d6fef2e387522f7ae82f7787c16596584fed5dd252fdf343e0a_prof);

        
        $__internal_74f4fa908cec859b6f3e7c0de530e2612a2e11edb07dd913be522120bad32ea5->leave($__internal_74f4fa908cec859b6f3e7c0de530e2612a2e11edb07dd913be522120bad32ea5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
