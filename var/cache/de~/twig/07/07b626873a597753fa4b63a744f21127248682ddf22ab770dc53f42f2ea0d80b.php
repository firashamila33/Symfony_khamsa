<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_7c460539eb8fb17c0cef844bb32d0dd9128f59d38426bfd8808501e02c9f8853 extends Twig_Template
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
        $__internal_62360ff9ee1f92d845b3c7e29412900108f218fbd643e0529ced95b7ccde5ffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62360ff9ee1f92d845b3c7e29412900108f218fbd643e0529ced95b7ccde5ffe->enter($__internal_62360ff9ee1f92d845b3c7e29412900108f218fbd643e0529ced95b7ccde5ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_392071ee0af2a5a4179658654ae72382b7da871d9e4b59f6a69ce006f9c907d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_392071ee0af2a5a4179658654ae72382b7da871d9e4b59f6a69ce006f9c907d2->enter($__internal_392071ee0af2a5a4179658654ae72382b7da871d9e4b59f6a69ce006f9c907d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_62360ff9ee1f92d845b3c7e29412900108f218fbd643e0529ced95b7ccde5ffe->leave($__internal_62360ff9ee1f92d845b3c7e29412900108f218fbd643e0529ced95b7ccde5ffe_prof);

        
        $__internal_392071ee0af2a5a4179658654ae72382b7da871d9e4b59f6a69ce006f9c907d2->leave($__internal_392071ee0af2a5a4179658654ae72382b7da871d9e4b59f6a69ce006f9c907d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
