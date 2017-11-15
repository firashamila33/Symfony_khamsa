<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_982da817f33fb7de9cc10a20684a8dbf57dd7e33d0dcbd64b6b394ce83205247 extends Twig_Template
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
        $__internal_c9897920149711142e822df3c0e30715fb8518ac92d3eaeb453a3bf341849925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9897920149711142e822df3c0e30715fb8518ac92d3eaeb453a3bf341849925->enter($__internal_c9897920149711142e822df3c0e30715fb8518ac92d3eaeb453a3bf341849925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_8e93edf2220f7f044024d64253be2b39f24a57df3d4828b2cd462e197c7b83c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e93edf2220f7f044024d64253be2b39f24a57df3d4828b2cd462e197c7b83c5->enter($__internal_8e93edf2220f7f044024d64253be2b39f24a57df3d4828b2cd462e197c7b83c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c9897920149711142e822df3c0e30715fb8518ac92d3eaeb453a3bf341849925->leave($__internal_c9897920149711142e822df3c0e30715fb8518ac92d3eaeb453a3bf341849925_prof);

        
        $__internal_8e93edf2220f7f044024d64253be2b39f24a57df3d4828b2cd462e197c7b83c5->leave($__internal_8e93edf2220f7f044024d64253be2b39f24a57df3d4828b2cd462e197c7b83c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
