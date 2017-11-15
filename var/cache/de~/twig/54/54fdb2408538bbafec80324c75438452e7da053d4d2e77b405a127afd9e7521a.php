<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_3a41edc51eff277b309d61c89ca3cac0d06107af361d443589ec8ee7b51116b4 extends Twig_Template
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
        $__internal_eb39d516d52dc41e569373d6bd02ad42e38c5405dc3746e5062fbc02d8ba719f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb39d516d52dc41e569373d6bd02ad42e38c5405dc3746e5062fbc02d8ba719f->enter($__internal_eb39d516d52dc41e569373d6bd02ad42e38c5405dc3746e5062fbc02d8ba719f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_ed4425bbf019392886cd2f2c3dbbebb7612e1063fde71333c3c38d2bd7b73421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed4425bbf019392886cd2f2c3dbbebb7612e1063fde71333c3c38d2bd7b73421->enter($__internal_ed4425bbf019392886cd2f2c3dbbebb7612e1063fde71333c3c38d2bd7b73421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_eb39d516d52dc41e569373d6bd02ad42e38c5405dc3746e5062fbc02d8ba719f->leave($__internal_eb39d516d52dc41e569373d6bd02ad42e38c5405dc3746e5062fbc02d8ba719f_prof);

        
        $__internal_ed4425bbf019392886cd2f2c3dbbebb7612e1063fde71333c3c38d2bd7b73421->leave($__internal_ed4425bbf019392886cd2f2c3dbbebb7612e1063fde71333c3c38d2bd7b73421_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
