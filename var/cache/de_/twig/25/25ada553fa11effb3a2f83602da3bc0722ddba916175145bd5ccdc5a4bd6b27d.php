<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_a1ddbaf0d8e84d64eb6808c00c4b9efb2606d05a100996b5d65200b2f62cd621 extends Twig_Template
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
        $__internal_a31b08ac96b084b3512c6c7f18902097d51c8fc060cf92d513b663068634c980 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a31b08ac96b084b3512c6c7f18902097d51c8fc060cf92d513b663068634c980->enter($__internal_a31b08ac96b084b3512c6c7f18902097d51c8fc060cf92d513b663068634c980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_18731676ff7c22f58ff6b45a900991dfa8a47a0889ab4afe6d328eb47990e744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18731676ff7c22f58ff6b45a900991dfa8a47a0889ab4afe6d328eb47990e744->enter($__internal_18731676ff7c22f58ff6b45a900991dfa8a47a0889ab4afe6d328eb47990e744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_a31b08ac96b084b3512c6c7f18902097d51c8fc060cf92d513b663068634c980->leave($__internal_a31b08ac96b084b3512c6c7f18902097d51c8fc060cf92d513b663068634c980_prof);

        
        $__internal_18731676ff7c22f58ff6b45a900991dfa8a47a0889ab4afe6d328eb47990e744->leave($__internal_18731676ff7c22f58ff6b45a900991dfa8a47a0889ab4afe6d328eb47990e744_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
