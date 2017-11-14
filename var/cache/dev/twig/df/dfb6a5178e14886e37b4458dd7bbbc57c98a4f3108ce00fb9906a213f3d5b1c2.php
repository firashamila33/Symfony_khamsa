<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_bff64f5e4a5736fed14b63e7d5964c3f4116b0c80ab1a58f7813c1395fe13b1c extends Twig_Template
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
        $__internal_d60381285f59ef2a372840d9434cb12ee9a91dd5da51ff7534e1453afdb0a7db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d60381285f59ef2a372840d9434cb12ee9a91dd5da51ff7534e1453afdb0a7db->enter($__internal_d60381285f59ef2a372840d9434cb12ee9a91dd5da51ff7534e1453afdb0a7db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_3fc08445cb6433758bdf5614228002a0e790aec4de86c243aefb101aced4ba2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fc08445cb6433758bdf5614228002a0e790aec4de86c243aefb101aced4ba2a->enter($__internal_3fc08445cb6433758bdf5614228002a0e790aec4de86c243aefb101aced4ba2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_d60381285f59ef2a372840d9434cb12ee9a91dd5da51ff7534e1453afdb0a7db->leave($__internal_d60381285f59ef2a372840d9434cb12ee9a91dd5da51ff7534e1453afdb0a7db_prof);

        
        $__internal_3fc08445cb6433758bdf5614228002a0e790aec4de86c243aefb101aced4ba2a->leave($__internal_3fc08445cb6433758bdf5614228002a0e790aec4de86c243aefb101aced4ba2a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
