<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_960e938c843c9ed6574e460be210f053849f455a93d8583a77bf09c645e37638 extends Twig_Template
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
        $__internal_f9d4636f13c5491b9af65b9d3e25fac1ad69beb7e1f502c7b45d105bc06b9ff0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9d4636f13c5491b9af65b9d3e25fac1ad69beb7e1f502c7b45d105bc06b9ff0->enter($__internal_f9d4636f13c5491b9af65b9d3e25fac1ad69beb7e1f502c7b45d105bc06b9ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_44701e8e25bebcf2d38dc35a90d7969c4059aacd89428f2f83b5df1936ca295d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44701e8e25bebcf2d38dc35a90d7969c4059aacd89428f2f83b5df1936ca295d->enter($__internal_44701e8e25bebcf2d38dc35a90d7969c4059aacd89428f2f83b5df1936ca295d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f9d4636f13c5491b9af65b9d3e25fac1ad69beb7e1f502c7b45d105bc06b9ff0->leave($__internal_f9d4636f13c5491b9af65b9d3e25fac1ad69beb7e1f502c7b45d105bc06b9ff0_prof);

        
        $__internal_44701e8e25bebcf2d38dc35a90d7969c4059aacd89428f2f83b5df1936ca295d->leave($__internal_44701e8e25bebcf2d38dc35a90d7969c4059aacd89428f2f83b5df1936ca295d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
