<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_256810312e27c432adec27d15bcf3ecd9b007326dd6787667e6c0bb8354ba7a3 extends Twig_Template
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
        $__internal_aa69841a139a85c75decdc2c6659d4f47e03520a89b3c68fcb9a80017ea04b0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa69841a139a85c75decdc2c6659d4f47e03520a89b3c68fcb9a80017ea04b0b->enter($__internal_aa69841a139a85c75decdc2c6659d4f47e03520a89b3c68fcb9a80017ea04b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_12e6926ac4793b8925ec9f1d54b141673f66bbd6bb8b92a72ddf67ccddd000a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12e6926ac4793b8925ec9f1d54b141673f66bbd6bb8b92a72ddf67ccddd000a4->enter($__internal_12e6926ac4793b8925ec9f1d54b141673f66bbd6bb8b92a72ddf67ccddd000a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_aa69841a139a85c75decdc2c6659d4f47e03520a89b3c68fcb9a80017ea04b0b->leave($__internal_aa69841a139a85c75decdc2c6659d4f47e03520a89b3c68fcb9a80017ea04b0b_prof);

        
        $__internal_12e6926ac4793b8925ec9f1d54b141673f66bbd6bb8b92a72ddf67ccddd000a4->leave($__internal_12e6926ac4793b8925ec9f1d54b141673f66bbd6bb8b92a72ddf67ccddd000a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
