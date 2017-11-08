<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_edfae43a6e4de82a947e3664cd5a43b33309fe521310290421bb05e1665c20fa extends Twig_Template
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
        $__internal_e557b055c2c76214a2dd6ec57c3a9c2e72c165b55a063a7e2fcc81e7734c4e48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e557b055c2c76214a2dd6ec57c3a9c2e72c165b55a063a7e2fcc81e7734c4e48->enter($__internal_e557b055c2c76214a2dd6ec57c3a9c2e72c165b55a063a7e2fcc81e7734c4e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_3332712632caab275ae3ac0b91f6437cdae33fffe984bd3c110605699986e0da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3332712632caab275ae3ac0b91f6437cdae33fffe984bd3c110605699986e0da->enter($__internal_3332712632caab275ae3ac0b91f6437cdae33fffe984bd3c110605699986e0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_e557b055c2c76214a2dd6ec57c3a9c2e72c165b55a063a7e2fcc81e7734c4e48->leave($__internal_e557b055c2c76214a2dd6ec57c3a9c2e72c165b55a063a7e2fcc81e7734c4e48_prof);

        
        $__internal_3332712632caab275ae3ac0b91f6437cdae33fffe984bd3c110605699986e0da->leave($__internal_3332712632caab275ae3ac0b91f6437cdae33fffe984bd3c110605699986e0da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
