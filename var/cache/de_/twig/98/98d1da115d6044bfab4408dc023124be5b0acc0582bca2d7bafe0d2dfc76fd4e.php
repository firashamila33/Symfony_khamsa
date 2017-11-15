<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_a8c9f67d9d8a28b528cb224318fc258d821356382c736001829de92c1754d6ce extends Twig_Template
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
        $__internal_dcb2ad2825b4a3c25b02f857f55b5138d5db0b02764d7cf8b3d396be9bf6abb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcb2ad2825b4a3c25b02f857f55b5138d5db0b02764d7cf8b3d396be9bf6abb5->enter($__internal_dcb2ad2825b4a3c25b02f857f55b5138d5db0b02764d7cf8b3d396be9bf6abb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_5a29cd82661086760bc6e20912430a27a215b49e4307a6c92ff353962c40b659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a29cd82661086760bc6e20912430a27a215b49e4307a6c92ff353962c40b659->enter($__internal_5a29cd82661086760bc6e20912430a27a215b49e4307a6c92ff353962c40b659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_dcb2ad2825b4a3c25b02f857f55b5138d5db0b02764d7cf8b3d396be9bf6abb5->leave($__internal_dcb2ad2825b4a3c25b02f857f55b5138d5db0b02764d7cf8b3d396be9bf6abb5_prof);

        
        $__internal_5a29cd82661086760bc6e20912430a27a215b49e4307a6c92ff353962c40b659->leave($__internal_5a29cd82661086760bc6e20912430a27a215b49e4307a6c92ff353962c40b659_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
