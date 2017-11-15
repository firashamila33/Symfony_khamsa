<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_29bc63d9991fb8c6f290304689dbf74f0043afcd0a724d11ed71659aebd9c6e4 extends Twig_Template
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
        $__internal_4b58b2ab763bbae34895f625928dfe787c94a9992140f816d687b132562ee597 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b58b2ab763bbae34895f625928dfe787c94a9992140f816d687b132562ee597->enter($__internal_4b58b2ab763bbae34895f625928dfe787c94a9992140f816d687b132562ee597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_2dd2d3fb969848933616af838c6c220dd37cd01cd53a5dc18bd73ee7d56fe594 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd2d3fb969848933616af838c6c220dd37cd01cd53a5dc18bd73ee7d56fe594->enter($__internal_2dd2d3fb969848933616af838c6c220dd37cd01cd53a5dc18bd73ee7d56fe594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4b58b2ab763bbae34895f625928dfe787c94a9992140f816d687b132562ee597->leave($__internal_4b58b2ab763bbae34895f625928dfe787c94a9992140f816d687b132562ee597_prof);

        
        $__internal_2dd2d3fb969848933616af838c6c220dd37cd01cd53a5dc18bd73ee7d56fe594->leave($__internal_2dd2d3fb969848933616af838c6c220dd37cd01cd53a5dc18bd73ee7d56fe594_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
