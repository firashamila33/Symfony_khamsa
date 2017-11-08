<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_6817db8b938ab0aa0848585f19271a12680ef1806b64ebbd703a8ed19c287e54 extends Twig_Template
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
        $__internal_dd676859dc33ac659f6eb7f9917216200a41c71b3ea5b9244b2c5f2fc3c710cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd676859dc33ac659f6eb7f9917216200a41c71b3ea5b9244b2c5f2fc3c710cf->enter($__internal_dd676859dc33ac659f6eb7f9917216200a41c71b3ea5b9244b2c5f2fc3c710cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_3ef25a3f6406543b310f7e7b62df2111c736c41d5c454e2602c9f9890bfaccf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ef25a3f6406543b310f7e7b62df2111c736c41d5c454e2602c9f9890bfaccf9->enter($__internal_3ef25a3f6406543b310f7e7b62df2111c736c41d5c454e2602c9f9890bfaccf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_dd676859dc33ac659f6eb7f9917216200a41c71b3ea5b9244b2c5f2fc3c710cf->leave($__internal_dd676859dc33ac659f6eb7f9917216200a41c71b3ea5b9244b2c5f2fc3c710cf_prof);

        
        $__internal_3ef25a3f6406543b310f7e7b62df2111c736c41d5c454e2602c9f9890bfaccf9->leave($__internal_3ef25a3f6406543b310f7e7b62df2111c736c41d5c454e2602c9f9890bfaccf9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
