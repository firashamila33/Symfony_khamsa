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
        $__internal_07961532971a994e4fead1fcd264a7274a30a1c67e8c3e2af07ef719aad80d32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07961532971a994e4fead1fcd264a7274a30a1c67e8c3e2af07ef719aad80d32->enter($__internal_07961532971a994e4fead1fcd264a7274a30a1c67e8c3e2af07ef719aad80d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_8bb1853a4c5eac7b7b4cbbe2feda5c676d888cb1d44a9caf8f5f09bfe1196727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bb1853a4c5eac7b7b4cbbe2feda5c676d888cb1d44a9caf8f5f09bfe1196727->enter($__internal_8bb1853a4c5eac7b7b4cbbe2feda5c676d888cb1d44a9caf8f5f09bfe1196727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_07961532971a994e4fead1fcd264a7274a30a1c67e8c3e2af07ef719aad80d32->leave($__internal_07961532971a994e4fead1fcd264a7274a30a1c67e8c3e2af07ef719aad80d32_prof);

        
        $__internal_8bb1853a4c5eac7b7b4cbbe2feda5c676d888cb1d44a9caf8f5f09bfe1196727->leave($__internal_8bb1853a4c5eac7b7b4cbbe2feda5c676d888cb1d44a9caf8f5f09bfe1196727_prof);

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
