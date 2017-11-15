<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_3a41edc51eff277b309d61c89ca3cac0d06107af361d443589ec8ee7b51116b4 extends Twig_Template
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
        $__internal_5bc316456235a603c905bfe70db6b1587ca89a26caa9b59db5f50bf5e55eb6a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bc316456235a603c905bfe70db6b1587ca89a26caa9b59db5f50bf5e55eb6a2->enter($__internal_5bc316456235a603c905bfe70db6b1587ca89a26caa9b59db5f50bf5e55eb6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_437a3a7edd69f00b6f6ef2676219553a127bdba3e63b26154376af25a5952e53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_437a3a7edd69f00b6f6ef2676219553a127bdba3e63b26154376af25a5952e53->enter($__internal_437a3a7edd69f00b6f6ef2676219553a127bdba3e63b26154376af25a5952e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_5bc316456235a603c905bfe70db6b1587ca89a26caa9b59db5f50bf5e55eb6a2->leave($__internal_5bc316456235a603c905bfe70db6b1587ca89a26caa9b59db5f50bf5e55eb6a2_prof);

        
        $__internal_437a3a7edd69f00b6f6ef2676219553a127bdba3e63b26154376af25a5952e53->leave($__internal_437a3a7edd69f00b6f6ef2676219553a127bdba3e63b26154376af25a5952e53_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
