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
        $__internal_877b496e54d90fb653bf916b61fba6aacf3f27a25da096cb7abd2805f98b96be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_877b496e54d90fb653bf916b61fba6aacf3f27a25da096cb7abd2805f98b96be->enter($__internal_877b496e54d90fb653bf916b61fba6aacf3f27a25da096cb7abd2805f98b96be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_d20335d078e1a321d2f7e3ba0ce76f464040686b1f8b0c1a1e09cfcbdcd94c76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d20335d078e1a321d2f7e3ba0ce76f464040686b1f8b0c1a1e09cfcbdcd94c76->enter($__internal_d20335d078e1a321d2f7e3ba0ce76f464040686b1f8b0c1a1e09cfcbdcd94c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_877b496e54d90fb653bf916b61fba6aacf3f27a25da096cb7abd2805f98b96be->leave($__internal_877b496e54d90fb653bf916b61fba6aacf3f27a25da096cb7abd2805f98b96be_prof);

        
        $__internal_d20335d078e1a321d2f7e3ba0ce76f464040686b1f8b0c1a1e09cfcbdcd94c76->leave($__internal_d20335d078e1a321d2f7e3ba0ce76f464040686b1f8b0c1a1e09cfcbdcd94c76_prof);

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
