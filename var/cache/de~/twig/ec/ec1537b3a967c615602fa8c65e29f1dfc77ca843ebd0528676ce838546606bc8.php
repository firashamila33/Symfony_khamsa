<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_7786f7b0d953b6c592ebf5522cdb79936036697fcc265fb54657f2b280bcff14 extends Twig_Template
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
        $__internal_db2b08ddf89fa5c3f4552cbd66e9b027229a4e349c92f35ce8f77ea23ae06abd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db2b08ddf89fa5c3f4552cbd66e9b027229a4e349c92f35ce8f77ea23ae06abd->enter($__internal_db2b08ddf89fa5c3f4552cbd66e9b027229a4e349c92f35ce8f77ea23ae06abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_2f573c80627703d006b21f2b6a5d5826691ef0e6c5767b348152522b17057d3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f573c80627703d006b21f2b6a5d5826691ef0e6c5767b348152522b17057d3e->enter($__internal_2f573c80627703d006b21f2b6a5d5826691ef0e6c5767b348152522b17057d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_db2b08ddf89fa5c3f4552cbd66e9b027229a4e349c92f35ce8f77ea23ae06abd->leave($__internal_db2b08ddf89fa5c3f4552cbd66e9b027229a4e349c92f35ce8f77ea23ae06abd_prof);

        
        $__internal_2f573c80627703d006b21f2b6a5d5826691ef0e6c5767b348152522b17057d3e->leave($__internal_2f573c80627703d006b21f2b6a5d5826691ef0e6c5767b348152522b17057d3e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
