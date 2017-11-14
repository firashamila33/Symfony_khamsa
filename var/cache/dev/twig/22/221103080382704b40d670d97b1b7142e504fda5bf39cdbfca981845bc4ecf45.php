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
        $__internal_99c4e8c3ce61cf41bdd63fcda09d226a6468e0d993fd39b6caa61d50f8928855 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99c4e8c3ce61cf41bdd63fcda09d226a6468e0d993fd39b6caa61d50f8928855->enter($__internal_99c4e8c3ce61cf41bdd63fcda09d226a6468e0d993fd39b6caa61d50f8928855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_b452e3efb6007c353fb02f458f6aa05cc43b894aa59785f4704794d013d8d754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b452e3efb6007c353fb02f458f6aa05cc43b894aa59785f4704794d013d8d754->enter($__internal_b452e3efb6007c353fb02f458f6aa05cc43b894aa59785f4704794d013d8d754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_99c4e8c3ce61cf41bdd63fcda09d226a6468e0d993fd39b6caa61d50f8928855->leave($__internal_99c4e8c3ce61cf41bdd63fcda09d226a6468e0d993fd39b6caa61d50f8928855_prof);

        
        $__internal_b452e3efb6007c353fb02f458f6aa05cc43b894aa59785f4704794d013d8d754->leave($__internal_b452e3efb6007c353fb02f458f6aa05cc43b894aa59785f4704794d013d8d754_prof);

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
