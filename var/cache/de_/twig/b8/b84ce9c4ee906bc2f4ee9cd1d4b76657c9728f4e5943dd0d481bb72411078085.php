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
        $__internal_15cffa1de69344ec1fd71d277e80b8c1b9bfbbb491ab6ce5b91105a7e89c8673 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15cffa1de69344ec1fd71d277e80b8c1b9bfbbb491ab6ce5b91105a7e89c8673->enter($__internal_15cffa1de69344ec1fd71d277e80b8c1b9bfbbb491ab6ce5b91105a7e89c8673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_86fa2052722f0ef049ce9875707dbb110b8af645c6e81a51472ac7bd7ec265c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86fa2052722f0ef049ce9875707dbb110b8af645c6e81a51472ac7bd7ec265c3->enter($__internal_86fa2052722f0ef049ce9875707dbb110b8af645c6e81a51472ac7bd7ec265c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_15cffa1de69344ec1fd71d277e80b8c1b9bfbbb491ab6ce5b91105a7e89c8673->leave($__internal_15cffa1de69344ec1fd71d277e80b8c1b9bfbbb491ab6ce5b91105a7e89c8673_prof);

        
        $__internal_86fa2052722f0ef049ce9875707dbb110b8af645c6e81a51472ac7bd7ec265c3->leave($__internal_86fa2052722f0ef049ce9875707dbb110b8af645c6e81a51472ac7bd7ec265c3_prof);

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
