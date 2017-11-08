<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_a22646566d641cf0ab9d5ec1121bf6460d79b7d914b60e23fab8a59322e76fc3 extends Twig_Template
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
        $__internal_959c1b57ad8499e1f10039575c3042c963f4023bcf6936510e7debde66c506ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_959c1b57ad8499e1f10039575c3042c963f4023bcf6936510e7debde66c506ef->enter($__internal_959c1b57ad8499e1f10039575c3042c963f4023bcf6936510e7debde66c506ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_ca7b825b04f90cfaa0c06515293ebca19aabd2a6110f4ea6a0603cc3ecdc44e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca7b825b04f90cfaa0c06515293ebca19aabd2a6110f4ea6a0603cc3ecdc44e1->enter($__internal_ca7b825b04f90cfaa0c06515293ebca19aabd2a6110f4ea6a0603cc3ecdc44e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_959c1b57ad8499e1f10039575c3042c963f4023bcf6936510e7debde66c506ef->leave($__internal_959c1b57ad8499e1f10039575c3042c963f4023bcf6936510e7debde66c506ef_prof);

        
        $__internal_ca7b825b04f90cfaa0c06515293ebca19aabd2a6110f4ea6a0603cc3ecdc44e1->leave($__internal_ca7b825b04f90cfaa0c06515293ebca19aabd2a6110f4ea6a0603cc3ecdc44e1_prof);

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
", "@Framework/Form/form_end.html.php", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
