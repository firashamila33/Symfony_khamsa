<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_c78c6652eac5f33ee23542b6e38d083545f707d9e85d7abe20fec458b14d7b83 extends Twig_Template
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
        $__internal_a9c94e9699c8fa40ca02f0e64e0198b90a4422eb6c14bd3efdad5973f2d507e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9c94e9699c8fa40ca02f0e64e0198b90a4422eb6c14bd3efdad5973f2d507e2->enter($__internal_a9c94e9699c8fa40ca02f0e64e0198b90a4422eb6c14bd3efdad5973f2d507e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_baf603d347c1af3bac5555e3aa1abdf32685ebffe425091fb1a25c44f9e4c34e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baf603d347c1af3bac5555e3aa1abdf32685ebffe425091fb1a25c44f9e4c34e->enter($__internal_baf603d347c1af3bac5555e3aa1abdf32685ebffe425091fb1a25c44f9e4c34e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_a9c94e9699c8fa40ca02f0e64e0198b90a4422eb6c14bd3efdad5973f2d507e2->leave($__internal_a9c94e9699c8fa40ca02f0e64e0198b90a4422eb6c14bd3efdad5973f2d507e2_prof);

        
        $__internal_baf603d347c1af3bac5555e3aa1abdf32685ebffe425091fb1a25c44f9e4c34e->leave($__internal_baf603d347c1af3bac5555e3aa1abdf32685ebffe425091fb1a25c44f9e4c34e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
