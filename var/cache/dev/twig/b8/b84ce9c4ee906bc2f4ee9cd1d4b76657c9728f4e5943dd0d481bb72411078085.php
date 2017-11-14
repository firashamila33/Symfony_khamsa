<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_c875e60124ac7d0b1a1555f3d069d02025e827c74b704adedb01b35873ffc8d7 extends Twig_Template
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
        $__internal_9aa4b28f242efcdcfb074427fb71869ba276dfec69025fb02f0d9618dad43a66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aa4b28f242efcdcfb074427fb71869ba276dfec69025fb02f0d9618dad43a66->enter($__internal_9aa4b28f242efcdcfb074427fb71869ba276dfec69025fb02f0d9618dad43a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_e826737dba4185b4da7669842036bd7df6931deb48577d8201c2e3b8afefe9e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e826737dba4185b4da7669842036bd7df6931deb48577d8201c2e3b8afefe9e8->enter($__internal_e826737dba4185b4da7669842036bd7df6931deb48577d8201c2e3b8afefe9e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_9aa4b28f242efcdcfb074427fb71869ba276dfec69025fb02f0d9618dad43a66->leave($__internal_9aa4b28f242efcdcfb074427fb71869ba276dfec69025fb02f0d9618dad43a66_prof);

        
        $__internal_e826737dba4185b4da7669842036bd7df6931deb48577d8201c2e3b8afefe9e8->leave($__internal_e826737dba4185b4da7669842036bd7df6931deb48577d8201c2e3b8afefe9e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
