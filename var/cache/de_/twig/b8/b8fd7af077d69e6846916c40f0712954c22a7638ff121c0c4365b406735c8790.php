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
        $__internal_75461add28f353472176efbc37777abe98e2e93eb814ddea0d8ce0f66acf5d92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75461add28f353472176efbc37777abe98e2e93eb814ddea0d8ce0f66acf5d92->enter($__internal_75461add28f353472176efbc37777abe98e2e93eb814ddea0d8ce0f66acf5d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_447d207c7629177b4158433315610879626b11d52df2b212f277ffb557262fd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_447d207c7629177b4158433315610879626b11d52df2b212f277ffb557262fd8->enter($__internal_447d207c7629177b4158433315610879626b11d52df2b212f277ffb557262fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_75461add28f353472176efbc37777abe98e2e93eb814ddea0d8ce0f66acf5d92->leave($__internal_75461add28f353472176efbc37777abe98e2e93eb814ddea0d8ce0f66acf5d92_prof);

        
        $__internal_447d207c7629177b4158433315610879626b11d52df2b212f277ffb557262fd8->leave($__internal_447d207c7629177b4158433315610879626b11d52df2b212f277ffb557262fd8_prof);

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
