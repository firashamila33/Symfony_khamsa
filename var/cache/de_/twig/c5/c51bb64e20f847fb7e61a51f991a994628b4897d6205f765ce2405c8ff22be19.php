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
        $__internal_84712271c4d525bc05726d1741c2e376e93ef4fcd6d6dea5193b20470e783241 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84712271c4d525bc05726d1741c2e376e93ef4fcd6d6dea5193b20470e783241->enter($__internal_84712271c4d525bc05726d1741c2e376e93ef4fcd6d6dea5193b20470e783241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_9b80e3b6ccdb17f6117678c248a258d41207c55cea004113c0114ab799bfc4a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b80e3b6ccdb17f6117678c248a258d41207c55cea004113c0114ab799bfc4a4->enter($__internal_9b80e3b6ccdb17f6117678c248a258d41207c55cea004113c0114ab799bfc4a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_84712271c4d525bc05726d1741c2e376e93ef4fcd6d6dea5193b20470e783241->leave($__internal_84712271c4d525bc05726d1741c2e376e93ef4fcd6d6dea5193b20470e783241_prof);

        
        $__internal_9b80e3b6ccdb17f6117678c248a258d41207c55cea004113c0114ab799bfc4a4->leave($__internal_9b80e3b6ccdb17f6117678c248a258d41207c55cea004113c0114ab799bfc4a4_prof);

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
