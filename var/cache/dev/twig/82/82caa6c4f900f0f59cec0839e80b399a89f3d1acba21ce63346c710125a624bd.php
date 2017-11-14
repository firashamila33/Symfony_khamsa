<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_912374c95802f4d318333c28b423cad64bd4374690edaf933b86c36206fc1498 extends Twig_Template
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
        $__internal_e67bf93e3870b7fe29fbe9c48574dd7215579757c570bed385fc5339c7e7270a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e67bf93e3870b7fe29fbe9c48574dd7215579757c570bed385fc5339c7e7270a->enter($__internal_e67bf93e3870b7fe29fbe9c48574dd7215579757c570bed385fc5339c7e7270a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_cba63f17e96306ee84a4cc54bd902c623bc901cbb72f5019e1e1bc29f6fd1fad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cba63f17e96306ee84a4cc54bd902c623bc901cbb72f5019e1e1bc29f6fd1fad->enter($__internal_cba63f17e96306ee84a4cc54bd902c623bc901cbb72f5019e1e1bc29f6fd1fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_e67bf93e3870b7fe29fbe9c48574dd7215579757c570bed385fc5339c7e7270a->leave($__internal_e67bf93e3870b7fe29fbe9c48574dd7215579757c570bed385fc5339c7e7270a_prof);

        
        $__internal_cba63f17e96306ee84a4cc54bd902c623bc901cbb72f5019e1e1bc29f6fd1fad->leave($__internal_cba63f17e96306ee84a4cc54bd902c623bc901cbb72f5019e1e1bc29f6fd1fad_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
