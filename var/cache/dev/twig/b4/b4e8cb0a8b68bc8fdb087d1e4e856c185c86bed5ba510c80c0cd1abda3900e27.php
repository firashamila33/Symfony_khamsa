<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_c4b3c433460a52b90794c2b6d1e99d4b104ca2ab6b75aad85dc2b26b192657ff extends Twig_Template
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
        $__internal_b276333e433a1c1769c3864b34b9968cabc64b5ab9bef65a2f28a6501a56442b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b276333e433a1c1769c3864b34b9968cabc64b5ab9bef65a2f28a6501a56442b->enter($__internal_b276333e433a1c1769c3864b34b9968cabc64b5ab9bef65a2f28a6501a56442b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_1f131c57ffd25f68e8ea7cf42757b024982be0506209399a645230990e226d11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f131c57ffd25f68e8ea7cf42757b024982be0506209399a645230990e226d11->enter($__internal_1f131c57ffd25f68e8ea7cf42757b024982be0506209399a645230990e226d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_b276333e433a1c1769c3864b34b9968cabc64b5ab9bef65a2f28a6501a56442b->leave($__internal_b276333e433a1c1769c3864b34b9968cabc64b5ab9bef65a2f28a6501a56442b_prof);

        
        $__internal_1f131c57ffd25f68e8ea7cf42757b024982be0506209399a645230990e226d11->leave($__internal_1f131c57ffd25f68e8ea7cf42757b024982be0506209399a645230990e226d11_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
