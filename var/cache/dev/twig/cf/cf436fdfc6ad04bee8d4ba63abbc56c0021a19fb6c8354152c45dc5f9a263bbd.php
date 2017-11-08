<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_b82c6152e34999763cf1b657dc9b0153f9683c14d6a358a3ea1a713a5502ecee extends Twig_Template
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
        $__internal_b36acd3720951361ebb322dce33d966ff606ac70892d4eb40d10a5ba13daaeda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b36acd3720951361ebb322dce33d966ff606ac70892d4eb40d10a5ba13daaeda->enter($__internal_b36acd3720951361ebb322dce33d966ff606ac70892d4eb40d10a5ba13daaeda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_9ff9309f8dda4f35695101e3b014a1d469cb1146076a3ebcecc6ec3da750e5ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ff9309f8dda4f35695101e3b014a1d469cb1146076a3ebcecc6ec3da750e5ab->enter($__internal_9ff9309f8dda4f35695101e3b014a1d469cb1146076a3ebcecc6ec3da750e5ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b36acd3720951361ebb322dce33d966ff606ac70892d4eb40d10a5ba13daaeda->leave($__internal_b36acd3720951361ebb322dce33d966ff606ac70892d4eb40d10a5ba13daaeda_prof);

        
        $__internal_9ff9309f8dda4f35695101e3b014a1d469cb1146076a3ebcecc6ec3da750e5ab->leave($__internal_9ff9309f8dda4f35695101e3b014a1d469cb1146076a3ebcecc6ec3da750e5ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
