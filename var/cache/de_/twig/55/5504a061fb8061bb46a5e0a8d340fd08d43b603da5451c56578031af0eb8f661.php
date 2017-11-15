<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_335e0be5afdc999282fd8a006935c9653b88102666bef3906d4b123e0d2148cb extends Twig_Template
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
        $__internal_5aede13c6b3266a6f7f519942289d39bad9d6b3001dfc477622aaf8e4252a55d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aede13c6b3266a6f7f519942289d39bad9d6b3001dfc477622aaf8e4252a55d->enter($__internal_5aede13c6b3266a6f7f519942289d39bad9d6b3001dfc477622aaf8e4252a55d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_805fc456b95ee72513733bbce127fc972d6b08017a625c8b3b1c7185c81c12ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_805fc456b95ee72513733bbce127fc972d6b08017a625c8b3b1c7185c81c12ca->enter($__internal_805fc456b95ee72513733bbce127fc972d6b08017a625c8b3b1c7185c81c12ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_5aede13c6b3266a6f7f519942289d39bad9d6b3001dfc477622aaf8e4252a55d->leave($__internal_5aede13c6b3266a6f7f519942289d39bad9d6b3001dfc477622aaf8e4252a55d_prof);

        
        $__internal_805fc456b95ee72513733bbce127fc972d6b08017a625c8b3b1c7185c81c12ca->leave($__internal_805fc456b95ee72513733bbce127fc972d6b08017a625c8b3b1c7185c81c12ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
