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
        $__internal_a7d92652956230e7fc640aad4b17b936303b38d40ef1b07d89abe3f497a82b2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7d92652956230e7fc640aad4b17b936303b38d40ef1b07d89abe3f497a82b2e->enter($__internal_a7d92652956230e7fc640aad4b17b936303b38d40ef1b07d89abe3f497a82b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_fa72f45872da805b09d10af5b6e23e42e735a0372b4ab205285f29cb8f1685d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa72f45872da805b09d10af5b6e23e42e735a0372b4ab205285f29cb8f1685d6->enter($__internal_fa72f45872da805b09d10af5b6e23e42e735a0372b4ab205285f29cb8f1685d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a7d92652956230e7fc640aad4b17b936303b38d40ef1b07d89abe3f497a82b2e->leave($__internal_a7d92652956230e7fc640aad4b17b936303b38d40ef1b07d89abe3f497a82b2e_prof);

        
        $__internal_fa72f45872da805b09d10af5b6e23e42e735a0372b4ab205285f29cb8f1685d6->leave($__internal_fa72f45872da805b09d10af5b6e23e42e735a0372b4ab205285f29cb8f1685d6_prof);

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
