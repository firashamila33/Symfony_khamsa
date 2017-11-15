<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_991494ddf3cb80ad77496b757160a2bee5ee7701b99249bd078e015980cc9c2f extends Twig_Template
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
        $__internal_48dee9ba5ca0bcb9fa15428c7b83bca1f04edf7e0d24048b69b8101a3153dd8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48dee9ba5ca0bcb9fa15428c7b83bca1f04edf7e0d24048b69b8101a3153dd8b->enter($__internal_48dee9ba5ca0bcb9fa15428c7b83bca1f04edf7e0d24048b69b8101a3153dd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_4b76731ef83dc58d327ba3a1283495da1d35ec4f64e63c9c8b6bbf744c2aae88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b76731ef83dc58d327ba3a1283495da1d35ec4f64e63c9c8b6bbf744c2aae88->enter($__internal_4b76731ef83dc58d327ba3a1283495da1d35ec4f64e63c9c8b6bbf744c2aae88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_48dee9ba5ca0bcb9fa15428c7b83bca1f04edf7e0d24048b69b8101a3153dd8b->leave($__internal_48dee9ba5ca0bcb9fa15428c7b83bca1f04edf7e0d24048b69b8101a3153dd8b_prof);

        
        $__internal_4b76731ef83dc58d327ba3a1283495da1d35ec4f64e63c9c8b6bbf744c2aae88->leave($__internal_4b76731ef83dc58d327ba3a1283495da1d35ec4f64e63c9c8b6bbf744c2aae88_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
