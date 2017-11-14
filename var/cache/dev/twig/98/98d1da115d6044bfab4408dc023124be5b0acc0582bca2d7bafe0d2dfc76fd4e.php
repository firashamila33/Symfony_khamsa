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
        $__internal_c468149d988eba22980b773de35289712141e149cfefd4d1874f8da95854cc05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c468149d988eba22980b773de35289712141e149cfefd4d1874f8da95854cc05->enter($__internal_c468149d988eba22980b773de35289712141e149cfefd4d1874f8da95854cc05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_845b1224e27b30d2380fade328db371ebd90c38af014257448ebdf87756ad160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_845b1224e27b30d2380fade328db371ebd90c38af014257448ebdf87756ad160->enter($__internal_845b1224e27b30d2380fade328db371ebd90c38af014257448ebdf87756ad160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c468149d988eba22980b773de35289712141e149cfefd4d1874f8da95854cc05->leave($__internal_c468149d988eba22980b773de35289712141e149cfefd4d1874f8da95854cc05_prof);

        
        $__internal_845b1224e27b30d2380fade328db371ebd90c38af014257448ebdf87756ad160->leave($__internal_845b1224e27b30d2380fade328db371ebd90c38af014257448ebdf87756ad160_prof);

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
