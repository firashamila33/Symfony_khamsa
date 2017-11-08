<?php

/* ::base.html.twig */
class __TwigTemplate_d4f8d0f9fba2f163b6bc1b1a546a006392daa38e6f4941b41fadafc976768e07 extends Twig_Template
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
        $__internal_23f84ccfb260cf1d049e0be61e675757a06e3b50452df2f69ae6a67ef104bf8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23f84ccfb260cf1d049e0be61e675757a06e3b50452df2f69ae6a67ef104bf8e->enter($__internal_23f84ccfb260cf1d049e0be61e675757a06e3b50452df2f69ae6a67ef104bf8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_b6d17dc51d6662d38bd45b4e0049416a468a338705bcd61c0cfa4306a169c405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6d17dc51d6662d38bd45b4e0049416a468a338705bcd61c0cfa4306a169c405->enter($__internal_b6d17dc51d6662d38bd45b4e0049416a468a338705bcd61c0cfa4306a169c405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_23f84ccfb260cf1d049e0be61e675757a06e3b50452df2f69ae6a67ef104bf8e->leave($__internal_23f84ccfb260cf1d049e0be61e675757a06e3b50452df2f69ae6a67ef104bf8e_prof);

        
        $__internal_b6d17dc51d6662d38bd45b4e0049416a468a338705bcd61c0cfa4306a169c405->leave($__internal_b6d17dc51d6662d38bd45b4e0049416a468a338705bcd61c0cfa4306a169c405_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cdc324e1d9523938608e543f4c731ec849f578f380a15161680210f781266b61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdc324e1d9523938608e543f4c731ec849f578f380a15161680210f781266b61->enter($__internal_cdc324e1d9523938608e543f4c731ec849f578f380a15161680210f781266b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8336c797c268c8ddf7ccd3cccaa935e2721d604178317a8e8e76e5176b7437c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8336c797c268c8ddf7ccd3cccaa935e2721d604178317a8e8e76e5176b7437c2->enter($__internal_8336c797c268c8ddf7ccd3cccaa935e2721d604178317a8e8e76e5176b7437c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8336c797c268c8ddf7ccd3cccaa935e2721d604178317a8e8e76e5176b7437c2->leave($__internal_8336c797c268c8ddf7ccd3cccaa935e2721d604178317a8e8e76e5176b7437c2_prof);

        
        $__internal_cdc324e1d9523938608e543f4c731ec849f578f380a15161680210f781266b61->leave($__internal_cdc324e1d9523938608e543f4c731ec849f578f380a15161680210f781266b61_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d21ced797acccb744e3a8b01571602a8a925411852dc16e1677a83beea85fb60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d21ced797acccb744e3a8b01571602a8a925411852dc16e1677a83beea85fb60->enter($__internal_d21ced797acccb744e3a8b01571602a8a925411852dc16e1677a83beea85fb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b9db1d51b6d867d4f1a3b8994f18a8077d666d38aa30a5ce958c9467ae9885cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9db1d51b6d867d4f1a3b8994f18a8077d666d38aa30a5ce958c9467ae9885cf->enter($__internal_b9db1d51b6d867d4f1a3b8994f18a8077d666d38aa30a5ce958c9467ae9885cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b9db1d51b6d867d4f1a3b8994f18a8077d666d38aa30a5ce958c9467ae9885cf->leave($__internal_b9db1d51b6d867d4f1a3b8994f18a8077d666d38aa30a5ce958c9467ae9885cf_prof);

        
        $__internal_d21ced797acccb744e3a8b01571602a8a925411852dc16e1677a83beea85fb60->leave($__internal_d21ced797acccb744e3a8b01571602a8a925411852dc16e1677a83beea85fb60_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d1c7eff339b1a27e3ae4c52d11784a9c9743b5c3bd15c151171c293ba76734a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d1c7eff339b1a27e3ae4c52d11784a9c9743b5c3bd15c151171c293ba76734a->enter($__internal_0d1c7eff339b1a27e3ae4c52d11784a9c9743b5c3bd15c151171c293ba76734a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b2a3f97c5d85363c0e9d87f2e7c558e41a495ed21b918eb76629e124e8fc9d6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2a3f97c5d85363c0e9d87f2e7c558e41a495ed21b918eb76629e124e8fc9d6d->enter($__internal_b2a3f97c5d85363c0e9d87f2e7c558e41a495ed21b918eb76629e124e8fc9d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b2a3f97c5d85363c0e9d87f2e7c558e41a495ed21b918eb76629e124e8fc9d6d->leave($__internal_b2a3f97c5d85363c0e9d87f2e7c558e41a495ed21b918eb76629e124e8fc9d6d_prof);

        
        $__internal_0d1c7eff339b1a27e3ae4c52d11784a9c9743b5c3bd15c151171c293ba76734a->leave($__internal_0d1c7eff339b1a27e3ae4c52d11784a9c9743b5c3bd15c151171c293ba76734a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dee838dff935d24bb68ce7bce5b3762e3d68591f94f8214e56127567e87d39aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dee838dff935d24bb68ce7bce5b3762e3d68591f94f8214e56127567e87d39aa->enter($__internal_dee838dff935d24bb68ce7bce5b3762e3d68591f94f8214e56127567e87d39aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5564762dea3413d9d6e8cb0cb79f1ac0b9848a9898b9ad6b2e52dea246b4053a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5564762dea3413d9d6e8cb0cb79f1ac0b9848a9898b9ad6b2e52dea246b4053a->enter($__internal_5564762dea3413d9d6e8cb0cb79f1ac0b9848a9898b9ad6b2e52dea246b4053a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5564762dea3413d9d6e8cb0cb79f1ac0b9848a9898b9ad6b2e52dea246b4053a->leave($__internal_5564762dea3413d9d6e8cb0cb79f1ac0b9848a9898b9ad6b2e52dea246b4053a_prof);

        
        $__internal_dee838dff935d24bb68ce7bce5b3762e3d68591f94f8214e56127567e87d39aa->leave($__internal_dee838dff935d24bb68ce7bce5b3762e3d68591f94f8214e56127567e87d39aa_prof);

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
", "::base.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/app/Resources/views/base.html.twig");
    }
}
