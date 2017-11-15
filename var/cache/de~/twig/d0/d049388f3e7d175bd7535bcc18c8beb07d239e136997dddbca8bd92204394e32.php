<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_0a189476803ec4d509104f34426976fc57612db62bcaa08fb15716dcc36bc477 extends Twig_Template
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
        $__internal_dfdf0f5d11f2d779e30d1ae2ef4d5fee13bea7e42a3f4cb9896f707b15a7f776 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfdf0f5d11f2d779e30d1ae2ef4d5fee13bea7e42a3f4cb9896f707b15a7f776->enter($__internal_dfdf0f5d11f2d779e30d1ae2ef4d5fee13bea7e42a3f4cb9896f707b15a7f776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_de69892c04c56fb2cf137d1b692d0f3cbf67ebf6325d275907525f7912f63fa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de69892c04c56fb2cf137d1b692d0f3cbf67ebf6325d275907525f7912f63fa6->enter($__internal_de69892c04c56fb2cf137d1b692d0f3cbf67ebf6325d275907525f7912f63fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_dfdf0f5d11f2d779e30d1ae2ef4d5fee13bea7e42a3f4cb9896f707b15a7f776->leave($__internal_dfdf0f5d11f2d779e30d1ae2ef4d5fee13bea7e42a3f4cb9896f707b15a7f776_prof);

        
        $__internal_de69892c04c56fb2cf137d1b692d0f3cbf67ebf6325d275907525f7912f63fa6->leave($__internal_de69892c04c56fb2cf137d1b692d0f3cbf67ebf6325d275907525f7912f63fa6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
