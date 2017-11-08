<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_bd190146516dcc7bc0faee50b648c5489146de209e928e83286779d79e75f73c extends Twig_Template
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
        $__internal_122675965acdf7058063ccb0a11e98e5bfe82ff5b6564ac18072c6d172d46a0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_122675965acdf7058063ccb0a11e98e5bfe82ff5b6564ac18072c6d172d46a0b->enter($__internal_122675965acdf7058063ccb0a11e98e5bfe82ff5b6564ac18072c6d172d46a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_6194d02b6f09fb67a27df523969c5f5d6761a47f8ee39b4cedf1389eaf4a1160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6194d02b6f09fb67a27df523969c5f5d6761a47f8ee39b4cedf1389eaf4a1160->enter($__internal_6194d02b6f09fb67a27df523969c5f5d6761a47f8ee39b4cedf1389eaf4a1160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_122675965acdf7058063ccb0a11e98e5bfe82ff5b6564ac18072c6d172d46a0b->leave($__internal_122675965acdf7058063ccb0a11e98e5bfe82ff5b6564ac18072c6d172d46a0b_prof);

        
        $__internal_6194d02b6f09fb67a27df523969c5f5d6761a47f8ee39b4cedf1389eaf4a1160->leave($__internal_6194d02b6f09fb67a27df523969c5f5d6761a47f8ee39b4cedf1389eaf4a1160_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
