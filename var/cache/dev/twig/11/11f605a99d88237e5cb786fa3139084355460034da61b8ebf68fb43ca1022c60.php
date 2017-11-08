<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_bd215047d862697b317f435a1035a4499b005ec98784a3ce6b4165dd17a9308f extends Twig_Template
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
        $__internal_a9729858a343222d7a24e95cc9c975bbe31c5a6265531df87132047f98cae2ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9729858a343222d7a24e95cc9c975bbe31c5a6265531df87132047f98cae2ca->enter($__internal_a9729858a343222d7a24e95cc9c975bbe31c5a6265531df87132047f98cae2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_3640daf84951acfbabc98a347111f2af05b4165fece6411b57183855419ab595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3640daf84951acfbabc98a347111f2af05b4165fece6411b57183855419ab595->enter($__internal_3640daf84951acfbabc98a347111f2af05b4165fece6411b57183855419ab595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_a9729858a343222d7a24e95cc9c975bbe31c5a6265531df87132047f98cae2ca->leave($__internal_a9729858a343222d7a24e95cc9c975bbe31c5a6265531df87132047f98cae2ca_prof);

        
        $__internal_3640daf84951acfbabc98a347111f2af05b4165fece6411b57183855419ab595->leave($__internal_3640daf84951acfbabc98a347111f2af05b4165fece6411b57183855419ab595_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
