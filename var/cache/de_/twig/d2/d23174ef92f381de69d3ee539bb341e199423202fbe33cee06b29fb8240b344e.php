<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_137a8c906fcd17c5c5808141c0f8981b30419ac9a5532daf7986c5f5c2765565 extends Twig_Template
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
        $__internal_c28c045ed4cd54532e43a7b7601e29119736c00c74b8a4ce695039d933305474 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c28c045ed4cd54532e43a7b7601e29119736c00c74b8a4ce695039d933305474->enter($__internal_c28c045ed4cd54532e43a7b7601e29119736c00c74b8a4ce695039d933305474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_02c7ee8c1073b4e9e66d8eea3f1cc101c40c090ef20706913e2dbefedee29203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02c7ee8c1073b4e9e66d8eea3f1cc101c40c090ef20706913e2dbefedee29203->enter($__internal_02c7ee8c1073b4e9e66d8eea3f1cc101c40c090ef20706913e2dbefedee29203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_c28c045ed4cd54532e43a7b7601e29119736c00c74b8a4ce695039d933305474->leave($__internal_c28c045ed4cd54532e43a7b7601e29119736c00c74b8a4ce695039d933305474_prof);

        
        $__internal_02c7ee8c1073b4e9e66d8eea3f1cc101c40c090ef20706913e2dbefedee29203->leave($__internal_02c7ee8c1073b4e9e66d8eea3f1cc101c40c090ef20706913e2dbefedee29203_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
