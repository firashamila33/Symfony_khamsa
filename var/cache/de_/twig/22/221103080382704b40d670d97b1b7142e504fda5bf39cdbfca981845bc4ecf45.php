<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_8accd111751d428ef2026fcdcbe622f89cb0b45e1093d8ca115436f4f138b01c extends Twig_Template
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
        $__internal_29af98c8c74297fcb9e0a093081f565b1b51c4542cc4842b74dd4aff9a6261b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29af98c8c74297fcb9e0a093081f565b1b51c4542cc4842b74dd4aff9a6261b7->enter($__internal_29af98c8c74297fcb9e0a093081f565b1b51c4542cc4842b74dd4aff9a6261b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_ace2c940f17deb74df3c1e1bfdccc76c6c4e3c4e10055382555685bac582ce4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ace2c940f17deb74df3c1e1bfdccc76c6c4e3c4e10055382555685bac582ce4f->enter($__internal_ace2c940f17deb74df3c1e1bfdccc76c6c4e3c4e10055382555685bac582ce4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_29af98c8c74297fcb9e0a093081f565b1b51c4542cc4842b74dd4aff9a6261b7->leave($__internal_29af98c8c74297fcb9e0a093081f565b1b51c4542cc4842b74dd4aff9a6261b7_prof);

        
        $__internal_ace2c940f17deb74df3c1e1bfdccc76c6c4e3c4e10055382555685bac582ce4f->leave($__internal_ace2c940f17deb74df3c1e1bfdccc76c6c4e3c4e10055382555685bac582ce4f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
