<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_7114d08941f42bc689f60dd0db82135f140d4e8de40164096b1b46e6d630a103 extends Twig_Template
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
        $__internal_f7eb7588af2960e7b9bef1a94688f79e54e37741b426da7823778ae600819eb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7eb7588af2960e7b9bef1a94688f79e54e37741b426da7823778ae600819eb8->enter($__internal_f7eb7588af2960e7b9bef1a94688f79e54e37741b426da7823778ae600819eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_ff3adfc25ee9d41bea5d8731ec301d5814ebeb83491c89f6290bd92bcb699cb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff3adfc25ee9d41bea5d8731ec301d5814ebeb83491c89f6290bd92bcb699cb9->enter($__internal_ff3adfc25ee9d41bea5d8731ec301d5814ebeb83491c89f6290bd92bcb699cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_f7eb7588af2960e7b9bef1a94688f79e54e37741b426da7823778ae600819eb8->leave($__internal_f7eb7588af2960e7b9bef1a94688f79e54e37741b426da7823778ae600819eb8_prof);

        
        $__internal_ff3adfc25ee9d41bea5d8731ec301d5814ebeb83491c89f6290bd92bcb699cb9->leave($__internal_ff3adfc25ee9d41bea5d8731ec301d5814ebeb83491c89f6290bd92bcb699cb9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
