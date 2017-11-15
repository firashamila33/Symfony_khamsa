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
        $__internal_f6f1cced46438b89cfeeca6ecaa57b696b92ee619ae3d484e11b666703f0560e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6f1cced46438b89cfeeca6ecaa57b696b92ee619ae3d484e11b666703f0560e->enter($__internal_f6f1cced46438b89cfeeca6ecaa57b696b92ee619ae3d484e11b666703f0560e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_a7587fea0329f0f8c188be77449fb7d20a96eeeea688d684c49779826420ad67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7587fea0329f0f8c188be77449fb7d20a96eeeea688d684c49779826420ad67->enter($__internal_a7587fea0329f0f8c188be77449fb7d20a96eeeea688d684c49779826420ad67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_f6f1cced46438b89cfeeca6ecaa57b696b92ee619ae3d484e11b666703f0560e->leave($__internal_f6f1cced46438b89cfeeca6ecaa57b696b92ee619ae3d484e11b666703f0560e_prof);

        
        $__internal_a7587fea0329f0f8c188be77449fb7d20a96eeeea688d684c49779826420ad67->leave($__internal_a7587fea0329f0f8c188be77449fb7d20a96eeeea688d684c49779826420ad67_prof);

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
