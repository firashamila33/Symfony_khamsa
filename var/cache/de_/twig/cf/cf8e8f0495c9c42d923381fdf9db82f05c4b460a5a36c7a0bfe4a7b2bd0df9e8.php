<?php

/* ::base.html.twig */
class __TwigTemplate_4d5eb3cb3ee12bb2d22de85423fd5bb6cfacb303cc8fb418afa970d99cdf199f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61f1135ded3bcba54da174f134c6b413331bcf6bd0fd0cff93c6753cf4d74e33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61f1135ded3bcba54da174f134c6b413331bcf6bd0fd0cff93c6753cf4d74e33->enter($__internal_61f1135ded3bcba54da174f134c6b413331bcf6bd0fd0cff93c6753cf4d74e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_c7f1bfc3d4eca3f37d56e5eca14771b225f3fa6b7f3a11e2edb756be52ee713a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f1bfc3d4eca3f37d56e5eca14771b225f3fa6b7f3a11e2edb756be52ee713a->enter($__internal_c7f1bfc3d4eca3f37d56e5eca14771b225f3fa6b7f3a11e2edb756be52ee713a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_61f1135ded3bcba54da174f134c6b413331bcf6bd0fd0cff93c6753cf4d74e33->leave($__internal_61f1135ded3bcba54da174f134c6b413331bcf6bd0fd0cff93c6753cf4d74e33_prof);

        
        $__internal_c7f1bfc3d4eca3f37d56e5eca14771b225f3fa6b7f3a11e2edb756be52ee713a->leave($__internal_c7f1bfc3d4eca3f37d56e5eca14771b225f3fa6b7f3a11e2edb756be52ee713a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_19a9c595e9020ff99b9f03584159a5ac35a85f5c676c4b325286a87058a0f06c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19a9c595e9020ff99b9f03584159a5ac35a85f5c676c4b325286a87058a0f06c->enter($__internal_19a9c595e9020ff99b9f03584159a5ac35a85f5c676c4b325286a87058a0f06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1140c3525acf133eeb8cb1b54cb509a7e3b2eab7a077f1202a4d581acb2da9d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1140c3525acf133eeb8cb1b54cb509a7e3b2eab7a077f1202a4d581acb2da9d3->enter($__internal_1140c3525acf133eeb8cb1b54cb509a7e3b2eab7a077f1202a4d581acb2da9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1140c3525acf133eeb8cb1b54cb509a7e3b2eab7a077f1202a4d581acb2da9d3->leave($__internal_1140c3525acf133eeb8cb1b54cb509a7e3b2eab7a077f1202a4d581acb2da9d3_prof);

        
        $__internal_19a9c595e9020ff99b9f03584159a5ac35a85f5c676c4b325286a87058a0f06c->leave($__internal_19a9c595e9020ff99b9f03584159a5ac35a85f5c676c4b325286a87058a0f06c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_16f5aef0c99649f76d1938d8b71934e13c688f76699337dcee29764b650c8b8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16f5aef0c99649f76d1938d8b71934e13c688f76699337dcee29764b650c8b8e->enter($__internal_16f5aef0c99649f76d1938d8b71934e13c688f76699337dcee29764b650c8b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_dea0605d15b7b21101a6994d06d69920e5c40857811a75ab22c15f6716cbb9b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dea0605d15b7b21101a6994d06d69920e5c40857811a75ab22c15f6716cbb9b1->enter($__internal_dea0605d15b7b21101a6994d06d69920e5c40857811a75ab22c15f6716cbb9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_dea0605d15b7b21101a6994d06d69920e5c40857811a75ab22c15f6716cbb9b1->leave($__internal_dea0605d15b7b21101a6994d06d69920e5c40857811a75ab22c15f6716cbb9b1_prof);

        
        $__internal_16f5aef0c99649f76d1938d8b71934e13c688f76699337dcee29764b650c8b8e->leave($__internal_16f5aef0c99649f76d1938d8b71934e13c688f76699337dcee29764b650c8b8e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6d7232dd240430cceaf0b910cb2b632cb30dce64a587a21239b6fc06d94068c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6d7232dd240430cceaf0b910cb2b632cb30dce64a587a21239b6fc06d94068c->enter($__internal_d6d7232dd240430cceaf0b910cb2b632cb30dce64a587a21239b6fc06d94068c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b20dd7b81e1b9eac80b91b54ac1b82d381aed5b13d202a474290e385391ce653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b20dd7b81e1b9eac80b91b54ac1b82d381aed5b13d202a474290e385391ce653->enter($__internal_b20dd7b81e1b9eac80b91b54ac1b82d381aed5b13d202a474290e385391ce653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b20dd7b81e1b9eac80b91b54ac1b82d381aed5b13d202a474290e385391ce653->leave($__internal_b20dd7b81e1b9eac80b91b54ac1b82d381aed5b13d202a474290e385391ce653_prof);

        
        $__internal_d6d7232dd240430cceaf0b910cb2b632cb30dce64a587a21239b6fc06d94068c->leave($__internal_d6d7232dd240430cceaf0b910cb2b632cb30dce64a587a21239b6fc06d94068c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fffa7ee4329e174c2cac9be2a2db8307a8d5ca6f953233f143f55b64bb3f0b4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fffa7ee4329e174c2cac9be2a2db8307a8d5ca6f953233f143f55b64bb3f0b4e->enter($__internal_fffa7ee4329e174c2cac9be2a2db8307a8d5ca6f953233f143f55b64bb3f0b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_75667fe3686f392f9a7908ed42c31c7da75d0e6ab2a7d9abdff1db60c7c92471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75667fe3686f392f9a7908ed42c31c7da75d0e6ab2a7d9abdff1db60c7c92471->enter($__internal_75667fe3686f392f9a7908ed42c31c7da75d0e6ab2a7d9abdff1db60c7c92471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_75667fe3686f392f9a7908ed42c31c7da75d0e6ab2a7d9abdff1db60c7c92471->leave($__internal_75667fe3686f392f9a7908ed42c31c7da75d0e6ab2a7d9abdff1db60c7c92471_prof);

        
        $__internal_fffa7ee4329e174c2cac9be2a2db8307a8d5ca6f953233f143f55b64bb3f0b4e->leave($__internal_fffa7ee4329e174c2cac9be2a2db8307a8d5ca6f953233f143f55b64bb3f0b4e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\app/Resources\\views/base.html.twig");
    }
}
