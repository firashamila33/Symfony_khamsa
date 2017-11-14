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
        $__internal_92c256d424a01e88432671941b39161683a8b59fd947b32509e94fa3d1208358 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92c256d424a01e88432671941b39161683a8b59fd947b32509e94fa3d1208358->enter($__internal_92c256d424a01e88432671941b39161683a8b59fd947b32509e94fa3d1208358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_6afa826b8e127f8bc1a65b2dedfe2780586f5c714c7733af93f3549cdd3dd916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6afa826b8e127f8bc1a65b2dedfe2780586f5c714c7733af93f3549cdd3dd916->enter($__internal_6afa826b8e127f8bc1a65b2dedfe2780586f5c714c7733af93f3549cdd3dd916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_92c256d424a01e88432671941b39161683a8b59fd947b32509e94fa3d1208358->leave($__internal_92c256d424a01e88432671941b39161683a8b59fd947b32509e94fa3d1208358_prof);

        
        $__internal_6afa826b8e127f8bc1a65b2dedfe2780586f5c714c7733af93f3549cdd3dd916->leave($__internal_6afa826b8e127f8bc1a65b2dedfe2780586f5c714c7733af93f3549cdd3dd916_prof);

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
