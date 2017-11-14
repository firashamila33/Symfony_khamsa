<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_6a8b2aef05d8fa2aa42c1539800d4c4c4948406b61f72f2529831a84406542b5 extends Twig_Template
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
        $__internal_ef547141ce24d87428b3570a12df9ffe2130b0f831895e1094b44b0159bd29cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef547141ce24d87428b3570a12df9ffe2130b0f831895e1094b44b0159bd29cc->enter($__internal_ef547141ce24d87428b3570a12df9ffe2130b0f831895e1094b44b0159bd29cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_06361142f1cea1ceca06029955159360a438d73fe278c02178f4586827f68293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06361142f1cea1ceca06029955159360a438d73fe278c02178f4586827f68293->enter($__internal_06361142f1cea1ceca06029955159360a438d73fe278c02178f4586827f68293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_ef547141ce24d87428b3570a12df9ffe2130b0f831895e1094b44b0159bd29cc->leave($__internal_ef547141ce24d87428b3570a12df9ffe2130b0f831895e1094b44b0159bd29cc_prof);

        
        $__internal_06361142f1cea1ceca06029955159360a438d73fe278c02178f4586827f68293->leave($__internal_06361142f1cea1ceca06029955159360a438d73fe278c02178f4586827f68293_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
