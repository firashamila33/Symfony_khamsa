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
        $__internal_777193db0dc3ae91d28ad37917299322afef494c76b64eb98a59151990006843 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_777193db0dc3ae91d28ad37917299322afef494c76b64eb98a59151990006843->enter($__internal_777193db0dc3ae91d28ad37917299322afef494c76b64eb98a59151990006843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_0454d1938851a5999e83f644f5ab6284665c9262323b8acdc294381c97feab9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0454d1938851a5999e83f644f5ab6284665c9262323b8acdc294381c97feab9f->enter($__internal_0454d1938851a5999e83f644f5ab6284665c9262323b8acdc294381c97feab9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_777193db0dc3ae91d28ad37917299322afef494c76b64eb98a59151990006843->leave($__internal_777193db0dc3ae91d28ad37917299322afef494c76b64eb98a59151990006843_prof);

        
        $__internal_0454d1938851a5999e83f644f5ab6284665c9262323b8acdc294381c97feab9f->leave($__internal_0454d1938851a5999e83f644f5ab6284665c9262323b8acdc294381c97feab9f_prof);

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
