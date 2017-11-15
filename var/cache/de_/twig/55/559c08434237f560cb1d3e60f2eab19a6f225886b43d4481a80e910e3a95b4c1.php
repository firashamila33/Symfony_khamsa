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
        $__internal_d133a4d7292360694649f2ee2b5443db15ceddccfab7a811e2210f48177124b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d133a4d7292360694649f2ee2b5443db15ceddccfab7a811e2210f48177124b3->enter($__internal_d133a4d7292360694649f2ee2b5443db15ceddccfab7a811e2210f48177124b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_22c06a91504a3f84a9205404016a78885576e13693ab52099fdfd499b433386d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c06a91504a3f84a9205404016a78885576e13693ab52099fdfd499b433386d->enter($__internal_22c06a91504a3f84a9205404016a78885576e13693ab52099fdfd499b433386d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d133a4d7292360694649f2ee2b5443db15ceddccfab7a811e2210f48177124b3->leave($__internal_d133a4d7292360694649f2ee2b5443db15ceddccfab7a811e2210f48177124b3_prof);

        
        $__internal_22c06a91504a3f84a9205404016a78885576e13693ab52099fdfd499b433386d->leave($__internal_22c06a91504a3f84a9205404016a78885576e13693ab52099fdfd499b433386d_prof);

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
