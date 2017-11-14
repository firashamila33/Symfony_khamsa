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
        $__internal_c7ebe74fb174b7b5e3f84a37934e8b9267bcbefb71abcba4d5595e5978983d85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7ebe74fb174b7b5e3f84a37934e8b9267bcbefb71abcba4d5595e5978983d85->enter($__internal_c7ebe74fb174b7b5e3f84a37934e8b9267bcbefb71abcba4d5595e5978983d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_55a2fbf3d387a6b8e5425e592be7c8f75bb79743a15b684002e36119d9fb0266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55a2fbf3d387a6b8e5425e592be7c8f75bb79743a15b684002e36119d9fb0266->enter($__internal_55a2fbf3d387a6b8e5425e592be7c8f75bb79743a15b684002e36119d9fb0266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_c7ebe74fb174b7b5e3f84a37934e8b9267bcbefb71abcba4d5595e5978983d85->leave($__internal_c7ebe74fb174b7b5e3f84a37934e8b9267bcbefb71abcba4d5595e5978983d85_prof);

        
        $__internal_55a2fbf3d387a6b8e5425e592be7c8f75bb79743a15b684002e36119d9fb0266->leave($__internal_55a2fbf3d387a6b8e5425e592be7c8f75bb79743a15b684002e36119d9fb0266_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_264ae430e987a7afcbfe70794dbc4feff05f9f3559e27dd2d84ea606c1d0a7a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_264ae430e987a7afcbfe70794dbc4feff05f9f3559e27dd2d84ea606c1d0a7a3->enter($__internal_264ae430e987a7afcbfe70794dbc4feff05f9f3559e27dd2d84ea606c1d0a7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4d4e574bc44804e9c47651747d8abac99e127def270f409ef0e35c62c4957697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d4e574bc44804e9c47651747d8abac99e127def270f409ef0e35c62c4957697->enter($__internal_4d4e574bc44804e9c47651747d8abac99e127def270f409ef0e35c62c4957697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4d4e574bc44804e9c47651747d8abac99e127def270f409ef0e35c62c4957697->leave($__internal_4d4e574bc44804e9c47651747d8abac99e127def270f409ef0e35c62c4957697_prof);

        
        $__internal_264ae430e987a7afcbfe70794dbc4feff05f9f3559e27dd2d84ea606c1d0a7a3->leave($__internal_264ae430e987a7afcbfe70794dbc4feff05f9f3559e27dd2d84ea606c1d0a7a3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c8004136498dd52ce6669864c3d172a4d46deddeb854ff214c24b080f4396307 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8004136498dd52ce6669864c3d172a4d46deddeb854ff214c24b080f4396307->enter($__internal_c8004136498dd52ce6669864c3d172a4d46deddeb854ff214c24b080f4396307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fdf0a70f5fb4169aaa3ea5fe509fb6b2283077c206d0d9c56b746392a297f5e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdf0a70f5fb4169aaa3ea5fe509fb6b2283077c206d0d9c56b746392a297f5e3->enter($__internal_fdf0a70f5fb4169aaa3ea5fe509fb6b2283077c206d0d9c56b746392a297f5e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fdf0a70f5fb4169aaa3ea5fe509fb6b2283077c206d0d9c56b746392a297f5e3->leave($__internal_fdf0a70f5fb4169aaa3ea5fe509fb6b2283077c206d0d9c56b746392a297f5e3_prof);

        
        $__internal_c8004136498dd52ce6669864c3d172a4d46deddeb854ff214c24b080f4396307->leave($__internal_c8004136498dd52ce6669864c3d172a4d46deddeb854ff214c24b080f4396307_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0945cd60751c8ea927f52aadb406a1295bf83fc398f6c8fdbbdf3761ddde25be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0945cd60751c8ea927f52aadb406a1295bf83fc398f6c8fdbbdf3761ddde25be->enter($__internal_0945cd60751c8ea927f52aadb406a1295bf83fc398f6c8fdbbdf3761ddde25be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e4fdc80e5df3a1d12b67757a8cf663281093b5ef644dab2b5a46d6127815464a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4fdc80e5df3a1d12b67757a8cf663281093b5ef644dab2b5a46d6127815464a->enter($__internal_e4fdc80e5df3a1d12b67757a8cf663281093b5ef644dab2b5a46d6127815464a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e4fdc80e5df3a1d12b67757a8cf663281093b5ef644dab2b5a46d6127815464a->leave($__internal_e4fdc80e5df3a1d12b67757a8cf663281093b5ef644dab2b5a46d6127815464a_prof);

        
        $__internal_0945cd60751c8ea927f52aadb406a1295bf83fc398f6c8fdbbdf3761ddde25be->leave($__internal_0945cd60751c8ea927f52aadb406a1295bf83fc398f6c8fdbbdf3761ddde25be_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2cc26ece656737ad5de389e5149ae874bddf82de893a811ba8e95107b3207aec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cc26ece656737ad5de389e5149ae874bddf82de893a811ba8e95107b3207aec->enter($__internal_2cc26ece656737ad5de389e5149ae874bddf82de893a811ba8e95107b3207aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b37737f7b9370d53296c4813673777cf561923ee01bef87b2c7d7dae83c1ca0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b37737f7b9370d53296c4813673777cf561923ee01bef87b2c7d7dae83c1ca0b->enter($__internal_b37737f7b9370d53296c4813673777cf561923ee01bef87b2c7d7dae83c1ca0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b37737f7b9370d53296c4813673777cf561923ee01bef87b2c7d7dae83c1ca0b->leave($__internal_b37737f7b9370d53296c4813673777cf561923ee01bef87b2c7d7dae83c1ca0b_prof);

        
        $__internal_2cc26ece656737ad5de389e5149ae874bddf82de893a811ba8e95107b3207aec->leave($__internal_2cc26ece656737ad5de389e5149ae874bddf82de893a811ba8e95107b3207aec_prof);

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
