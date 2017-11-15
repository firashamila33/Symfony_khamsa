<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_a8c9f67d9d8a28b528cb224318fc258d821356382c736001829de92c1754d6ce extends Twig_Template
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
        $__internal_03a52beef055937433453ec9ed80455ebdf3a88b394fad87a3c88a9b674e0337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03a52beef055937433453ec9ed80455ebdf3a88b394fad87a3c88a9b674e0337->enter($__internal_03a52beef055937433453ec9ed80455ebdf3a88b394fad87a3c88a9b674e0337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_ece41e41d0f61d03944dd538e69731f982aa1a85de6811f5537a5c98c2b71241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ece41e41d0f61d03944dd538e69731f982aa1a85de6811f5537a5c98c2b71241->enter($__internal_ece41e41d0f61d03944dd538e69731f982aa1a85de6811f5537a5c98c2b71241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_03a52beef055937433453ec9ed80455ebdf3a88b394fad87a3c88a9b674e0337->leave($__internal_03a52beef055937433453ec9ed80455ebdf3a88b394fad87a3c88a9b674e0337_prof);

        
        $__internal_ece41e41d0f61d03944dd538e69731f982aa1a85de6811f5537a5c98c2b71241->leave($__internal_ece41e41d0f61d03944dd538e69731f982aa1a85de6811f5537a5c98c2b71241_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
