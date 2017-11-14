<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_29bc63d9991fb8c6f290304689dbf74f0043afcd0a724d11ed71659aebd9c6e4 extends Twig_Template
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
        $__internal_81e64ff56c4e5a7fa35e86d08296072d51b8771ab47220078b141568e113dfbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81e64ff56c4e5a7fa35e86d08296072d51b8771ab47220078b141568e113dfbf->enter($__internal_81e64ff56c4e5a7fa35e86d08296072d51b8771ab47220078b141568e113dfbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_f10e7d41431dc2d3636e54660fa7c81f899a2004ad7f4e235d688eca7b6a07c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f10e7d41431dc2d3636e54660fa7c81f899a2004ad7f4e235d688eca7b6a07c2->enter($__internal_f10e7d41431dc2d3636e54660fa7c81f899a2004ad7f4e235d688eca7b6a07c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_81e64ff56c4e5a7fa35e86d08296072d51b8771ab47220078b141568e113dfbf->leave($__internal_81e64ff56c4e5a7fa35e86d08296072d51b8771ab47220078b141568e113dfbf_prof);

        
        $__internal_f10e7d41431dc2d3636e54660fa7c81f899a2004ad7f4e235d688eca7b6a07c2->leave($__internal_f10e7d41431dc2d3636e54660fa7c81f899a2004ad7f4e235d688eca7b6a07c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
