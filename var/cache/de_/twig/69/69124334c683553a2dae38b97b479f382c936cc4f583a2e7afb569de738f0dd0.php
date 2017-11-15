<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_fca4941082d4fac76b898d223ffdd2152a5aacaa55beb5102e1ca5f1cddbb933 extends Twig_Template
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
        $__internal_ada5cf99a64b4d21a88fc0c39641b3365fc93469f1dc5ddc5e16ac151d83daaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ada5cf99a64b4d21a88fc0c39641b3365fc93469f1dc5ddc5e16ac151d83daaf->enter($__internal_ada5cf99a64b4d21a88fc0c39641b3365fc93469f1dc5ddc5e16ac151d83daaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_65e5063e5db36fdcd6c986dc29dc75ca3cd8b0f303dcf8bcfee52ecfd8faaa4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65e5063e5db36fdcd6c986dc29dc75ca3cd8b0f303dcf8bcfee52ecfd8faaa4e->enter($__internal_65e5063e5db36fdcd6c986dc29dc75ca3cd8b0f303dcf8bcfee52ecfd8faaa4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_ada5cf99a64b4d21a88fc0c39641b3365fc93469f1dc5ddc5e16ac151d83daaf->leave($__internal_ada5cf99a64b4d21a88fc0c39641b3365fc93469f1dc5ddc5e16ac151d83daaf_prof);

        
        $__internal_65e5063e5db36fdcd6c986dc29dc75ca3cd8b0f303dcf8bcfee52ecfd8faaa4e->leave($__internal_65e5063e5db36fdcd6c986dc29dc75ca3cd8b0f303dcf8bcfee52ecfd8faaa4e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
