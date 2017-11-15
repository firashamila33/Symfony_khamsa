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
        $__internal_9a70fae922eb02be49bc1b02b63a4cb514c9d64bf589c5b926d702db5ac7135d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a70fae922eb02be49bc1b02b63a4cb514c9d64bf589c5b926d702db5ac7135d->enter($__internal_9a70fae922eb02be49bc1b02b63a4cb514c9d64bf589c5b926d702db5ac7135d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_9d4e22563b81b09d3a7adb611d50fb7e52c5906bef9497321bc6ae5da591f33a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d4e22563b81b09d3a7adb611d50fb7e52c5906bef9497321bc6ae5da591f33a->enter($__internal_9d4e22563b81b09d3a7adb611d50fb7e52c5906bef9497321bc6ae5da591f33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_9a70fae922eb02be49bc1b02b63a4cb514c9d64bf589c5b926d702db5ac7135d->leave($__internal_9a70fae922eb02be49bc1b02b63a4cb514c9d64bf589c5b926d702db5ac7135d_prof);

        
        $__internal_9d4e22563b81b09d3a7adb611d50fb7e52c5906bef9497321bc6ae5da591f33a->leave($__internal_9d4e22563b81b09d3a7adb611d50fb7e52c5906bef9497321bc6ae5da591f33a_prof);

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
