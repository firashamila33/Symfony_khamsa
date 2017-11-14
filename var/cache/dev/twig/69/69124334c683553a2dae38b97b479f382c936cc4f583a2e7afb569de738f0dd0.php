<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_fca4941082d4fac76b898d223ffdd2152a5aacaa55beb5102e1ca5f1cddbb933 extends Twig_Template
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
        $__internal_7900f3cd4f1a9fa0c66e827ffd3fac4b7c113b964a9f7dc8a27fe116a61556d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7900f3cd4f1a9fa0c66e827ffd3fac4b7c113b964a9f7dc8a27fe116a61556d7->enter($__internal_7900f3cd4f1a9fa0c66e827ffd3fac4b7c113b964a9f7dc8a27fe116a61556d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_dbb2712c8964f7eda4227b89f921e8c37d393a8f982972aca819bf2653167fd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbb2712c8964f7eda4227b89f921e8c37d393a8f982972aca819bf2653167fd9->enter($__internal_dbb2712c8964f7eda4227b89f921e8c37d393a8f982972aca819bf2653167fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_7900f3cd4f1a9fa0c66e827ffd3fac4b7c113b964a9f7dc8a27fe116a61556d7->leave($__internal_7900f3cd4f1a9fa0c66e827ffd3fac4b7c113b964a9f7dc8a27fe116a61556d7_prof);

        
        $__internal_dbb2712c8964f7eda4227b89f921e8c37d393a8f982972aca819bf2653167fd9->leave($__internal_dbb2712c8964f7eda4227b89f921e8c37d393a8f982972aca819bf2653167fd9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
