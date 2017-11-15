<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_0a189476803ec4d509104f34426976fc57612db62bcaa08fb15716dcc36bc477 extends Twig_Template
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
        $__internal_6acece75794ca2f1ca8a6ae337ccf1d9e48855a90d696bd9ca2b002d7ea5f1d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6acece75794ca2f1ca8a6ae337ccf1d9e48855a90d696bd9ca2b002d7ea5f1d9->enter($__internal_6acece75794ca2f1ca8a6ae337ccf1d9e48855a90d696bd9ca2b002d7ea5f1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_fc928345cc32bad045b70c1aeb6977c6f92295e8ede17aae977e988b162aa986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc928345cc32bad045b70c1aeb6977c6f92295e8ede17aae977e988b162aa986->enter($__internal_fc928345cc32bad045b70c1aeb6977c6f92295e8ede17aae977e988b162aa986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6acece75794ca2f1ca8a6ae337ccf1d9e48855a90d696bd9ca2b002d7ea5f1d9->leave($__internal_6acece75794ca2f1ca8a6ae337ccf1d9e48855a90d696bd9ca2b002d7ea5f1d9_prof);

        
        $__internal_fc928345cc32bad045b70c1aeb6977c6f92295e8ede17aae977e988b162aa986->leave($__internal_fc928345cc32bad045b70c1aeb6977c6f92295e8ede17aae977e988b162aa986_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
