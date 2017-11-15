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
        $__internal_f0bb5dffa9bb128c71e0e942c1af46966253433c9f680834ef80ba02e7d27f2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0bb5dffa9bb128c71e0e942c1af46966253433c9f680834ef80ba02e7d27f2e->enter($__internal_f0bb5dffa9bb128c71e0e942c1af46966253433c9f680834ef80ba02e7d27f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_7a2ff4fd4a6c043424feb9ccf08cb3f512d2233256fa1dfd42f895975766a28c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a2ff4fd4a6c043424feb9ccf08cb3f512d2233256fa1dfd42f895975766a28c->enter($__internal_7a2ff4fd4a6c043424feb9ccf08cb3f512d2233256fa1dfd42f895975766a28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f0bb5dffa9bb128c71e0e942c1af46966253433c9f680834ef80ba02e7d27f2e->leave($__internal_f0bb5dffa9bb128c71e0e942c1af46966253433c9f680834ef80ba02e7d27f2e_prof);

        
        $__internal_7a2ff4fd4a6c043424feb9ccf08cb3f512d2233256fa1dfd42f895975766a28c->leave($__internal_7a2ff4fd4a6c043424feb9ccf08cb3f512d2233256fa1dfd42f895975766a28c_prof);

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
