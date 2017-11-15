<?php

/* base.html.twig */
class __TwigTemplate_f48ee6ba362d9a7b826431586c9c8424360cf32655b627a8048cc7acb5f64014 extends Twig_Template
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
        $__internal_06b9e28ebe3addcb49c7c9f980b039e5184ca92122f20a0555c6c93cbdb76f76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06b9e28ebe3addcb49c7c9f980b039e5184ca92122f20a0555c6c93cbdb76f76->enter($__internal_06b9e28ebe3addcb49c7c9f980b039e5184ca92122f20a0555c6c93cbdb76f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f0012ed987635d9c71390d9e8ddfb7cafddb134395f91478b6febfc1854002d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0012ed987635d9c71390d9e8ddfb7cafddb134395f91478b6febfc1854002d5->enter($__internal_f0012ed987635d9c71390d9e8ddfb7cafddb134395f91478b6febfc1854002d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_06b9e28ebe3addcb49c7c9f980b039e5184ca92122f20a0555c6c93cbdb76f76->leave($__internal_06b9e28ebe3addcb49c7c9f980b039e5184ca92122f20a0555c6c93cbdb76f76_prof);

        
        $__internal_f0012ed987635d9c71390d9e8ddfb7cafddb134395f91478b6febfc1854002d5->leave($__internal_f0012ed987635d9c71390d9e8ddfb7cafddb134395f91478b6febfc1854002d5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ed1727650e4b49f07f3dcdbfc3475beb24aacd7892dd92001261377b2f257d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ed1727650e4b49f07f3dcdbfc3475beb24aacd7892dd92001261377b2f257d4->enter($__internal_4ed1727650e4b49f07f3dcdbfc3475beb24aacd7892dd92001261377b2f257d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2ad14327bfa96a1c97c3a84405df6f71c8119734afca953b0168b84a9611ca9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad14327bfa96a1c97c3a84405df6f71c8119734afca953b0168b84a9611ca9f->enter($__internal_2ad14327bfa96a1c97c3a84405df6f71c8119734afca953b0168b84a9611ca9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2ad14327bfa96a1c97c3a84405df6f71c8119734afca953b0168b84a9611ca9f->leave($__internal_2ad14327bfa96a1c97c3a84405df6f71c8119734afca953b0168b84a9611ca9f_prof);

        
        $__internal_4ed1727650e4b49f07f3dcdbfc3475beb24aacd7892dd92001261377b2f257d4->leave($__internal_4ed1727650e4b49f07f3dcdbfc3475beb24aacd7892dd92001261377b2f257d4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2818fe8e132964ca957dbf1f0e2b292cd1ccd09ff102758ba975fc55498ca57b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2818fe8e132964ca957dbf1f0e2b292cd1ccd09ff102758ba975fc55498ca57b->enter($__internal_2818fe8e132964ca957dbf1f0e2b292cd1ccd09ff102758ba975fc55498ca57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a4b3dedd1ffebb3734fbcd7297beaf540b94b57af8d603a747271ae990ae1392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b3dedd1ffebb3734fbcd7297beaf540b94b57af8d603a747271ae990ae1392->enter($__internal_a4b3dedd1ffebb3734fbcd7297beaf540b94b57af8d603a747271ae990ae1392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a4b3dedd1ffebb3734fbcd7297beaf540b94b57af8d603a747271ae990ae1392->leave($__internal_a4b3dedd1ffebb3734fbcd7297beaf540b94b57af8d603a747271ae990ae1392_prof);

        
        $__internal_2818fe8e132964ca957dbf1f0e2b292cd1ccd09ff102758ba975fc55498ca57b->leave($__internal_2818fe8e132964ca957dbf1f0e2b292cd1ccd09ff102758ba975fc55498ca57b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4de19cbc1b51757c28a3dc26de620899291e22cf601695e74d0d24759068cedd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4de19cbc1b51757c28a3dc26de620899291e22cf601695e74d0d24759068cedd->enter($__internal_4de19cbc1b51757c28a3dc26de620899291e22cf601695e74d0d24759068cedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fd7a59fde9b10f1ac4137ad453df4472943cafde1bd30205a866651a4963848a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd7a59fde9b10f1ac4137ad453df4472943cafde1bd30205a866651a4963848a->enter($__internal_fd7a59fde9b10f1ac4137ad453df4472943cafde1bd30205a866651a4963848a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fd7a59fde9b10f1ac4137ad453df4472943cafde1bd30205a866651a4963848a->leave($__internal_fd7a59fde9b10f1ac4137ad453df4472943cafde1bd30205a866651a4963848a_prof);

        
        $__internal_4de19cbc1b51757c28a3dc26de620899291e22cf601695e74d0d24759068cedd->leave($__internal_4de19cbc1b51757c28a3dc26de620899291e22cf601695e74d0d24759068cedd_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_50d676dbc8c459a7428134525fe8f8af23a8c21d79de24687c9f5375763cd803 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50d676dbc8c459a7428134525fe8f8af23a8c21d79de24687c9f5375763cd803->enter($__internal_50d676dbc8c459a7428134525fe8f8af23a8c21d79de24687c9f5375763cd803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bd4879b7ad165929412827d1db1e465fe2e014def16ea1cf632af1596437f6bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd4879b7ad165929412827d1db1e465fe2e014def16ea1cf632af1596437f6bd->enter($__internal_bd4879b7ad165929412827d1db1e465fe2e014def16ea1cf632af1596437f6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bd4879b7ad165929412827d1db1e465fe2e014def16ea1cf632af1596437f6bd->leave($__internal_bd4879b7ad165929412827d1db1e465fe2e014def16ea1cf632af1596437f6bd_prof);

        
        $__internal_50d676dbc8c459a7428134525fe8f8af23a8c21d79de24687c9f5375763cd803->leave($__internal_50d676dbc8c459a7428134525fe8f8af23a8c21d79de24687c9f5375763cd803_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\app\\Resources\\views\\base.html.twig");
    }
}
