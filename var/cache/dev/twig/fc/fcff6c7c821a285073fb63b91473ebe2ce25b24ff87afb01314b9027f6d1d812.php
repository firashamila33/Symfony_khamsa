<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_20171cbf8f49a8ec368266f5d93f7517c66b431f5ad3e9a7032e9c4cdc11dd93 extends Twig_Template
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
        $__internal_295b5afe6c025621495f6323a29302db3acbc8c9bae6d006e50b1c68ffbb6793 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_295b5afe6c025621495f6323a29302db3acbc8c9bae6d006e50b1c68ffbb6793->enter($__internal_295b5afe6c025621495f6323a29302db3acbc8c9bae6d006e50b1c68ffbb6793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_d96717d37f68372bdcd7577423728516aad58547e8ac75ac2b21ac8cc774bde2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d96717d37f68372bdcd7577423728516aad58547e8ac75ac2b21ac8cc774bde2->enter($__internal_d96717d37f68372bdcd7577423728516aad58547e8ac75ac2b21ac8cc774bde2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_295b5afe6c025621495f6323a29302db3acbc8c9bae6d006e50b1c68ffbb6793->leave($__internal_295b5afe6c025621495f6323a29302db3acbc8c9bae6d006e50b1c68ffbb6793_prof);

        
        $__internal_d96717d37f68372bdcd7577423728516aad58547e8ac75ac2b21ac8cc774bde2->leave($__internal_d96717d37f68372bdcd7577423728516aad58547e8ac75ac2b21ac8cc774bde2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
