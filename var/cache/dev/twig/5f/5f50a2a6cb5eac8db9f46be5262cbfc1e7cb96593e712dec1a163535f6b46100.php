<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_4fac9495156d2835e79fb849c25569230a3a7fa597781f439d80a9e9663bcef7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27d2d76425bdd1f75c82cfc640cb50299fa8f878a511aa2fec96babb72e7fc22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27d2d76425bdd1f75c82cfc640cb50299fa8f878a511aa2fec96babb72e7fc22->enter($__internal_27d2d76425bdd1f75c82cfc640cb50299fa8f878a511aa2fec96babb72e7fc22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_7cbd1dad52ec863df1d7de48d5cda33a154cb7dd9e492dd69e634816247328b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cbd1dad52ec863df1d7de48d5cda33a154cb7dd9e492dd69e634816247328b7->enter($__internal_7cbd1dad52ec863df1d7de48d5cda33a154cb7dd9e492dd69e634816247328b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27d2d76425bdd1f75c82cfc640cb50299fa8f878a511aa2fec96babb72e7fc22->leave($__internal_27d2d76425bdd1f75c82cfc640cb50299fa8f878a511aa2fec96babb72e7fc22_prof);

        
        $__internal_7cbd1dad52ec863df1d7de48d5cda33a154cb7dd9e492dd69e634816247328b7->leave($__internal_7cbd1dad52ec863df1d7de48d5cda33a154cb7dd9e492dd69e634816247328b7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_781b9d9470d52b6bf280477989f13baec31a08298eae37220bf059dd2240e1c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_781b9d9470d52b6bf280477989f13baec31a08298eae37220bf059dd2240e1c4->enter($__internal_781b9d9470d52b6bf280477989f13baec31a08298eae37220bf059dd2240e1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e944fd862e500cb1298aad88e1503dce00b0e437c5dc1ddeb9a97515ffe1f88a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e944fd862e500cb1298aad88e1503dce00b0e437c5dc1ddeb9a97515ffe1f88a->enter($__internal_e944fd862e500cb1298aad88e1503dce00b0e437c5dc1ddeb9a97515ffe1f88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_e944fd862e500cb1298aad88e1503dce00b0e437c5dc1ddeb9a97515ffe1f88a->leave($__internal_e944fd862e500cb1298aad88e1503dce00b0e437c5dc1ddeb9a97515ffe1f88a_prof);

        
        $__internal_781b9d9470d52b6bf280477989f13baec31a08298eae37220bf059dd2240e1c4->leave($__internal_781b9d9470d52b6bf280477989f13baec31a08298eae37220bf059dd2240e1c4_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e1bf93448296c6c94a33f5977068b3322fa4ea0c3b8a27ad64bf1aa0ac188ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e1bf93448296c6c94a33f5977068b3322fa4ea0c3b8a27ad64bf1aa0ac188ac->enter($__internal_4e1bf93448296c6c94a33f5977068b3322fa4ea0c3b8a27ad64bf1aa0ac188ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2391024b0c9841a01a150f376eff55550dae9cc56fe8c0852e83b183d0d035c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2391024b0c9841a01a150f376eff55550dae9cc56fe8c0852e83b183d0d035c4->enter($__internal_2391024b0c9841a01a150f376eff55550dae9cc56fe8c0852e83b183d0d035c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2391024b0c9841a01a150f376eff55550dae9cc56fe8c0852e83b183d0d035c4->leave($__internal_2391024b0c9841a01a150f376eff55550dae9cc56fe8c0852e83b183d0d035c4_prof);

        
        $__internal_4e1bf93448296c6c94a33f5977068b3322fa4ea0c3b8a27ad64bf1aa0ac188ac->leave($__internal_4e1bf93448296c6c94a33f5977068b3322fa4ea0c3b8a27ad64bf1aa0ac188ac_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_1259fc3dd94b0df1e1c41120be92231315e1a91afebd3dbd743e7fe5f6bea120 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1259fc3dd94b0df1e1c41120be92231315e1a91afebd3dbd743e7fe5f6bea120->enter($__internal_1259fc3dd94b0df1e1c41120be92231315e1a91afebd3dbd743e7fe5f6bea120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4af179c9de6b48d1b17659324cd1887a332f0032c0dadbee8d2f75685712428d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4af179c9de6b48d1b17659324cd1887a332f0032c0dadbee8d2f75685712428d->enter($__internal_4af179c9de6b48d1b17659324cd1887a332f0032c0dadbee8d2f75685712428d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_4af179c9de6b48d1b17659324cd1887a332f0032c0dadbee8d2f75685712428d->leave($__internal_4af179c9de6b48d1b17659324cd1887a332f0032c0dadbee8d2f75685712428d_prof);

        
        $__internal_1259fc3dd94b0df1e1c41120be92231315e1a91afebd3dbd743e7fe5f6bea120->leave($__internal_1259fc3dd94b0df1e1c41120be92231315e1a91afebd3dbd743e7fe5f6bea120_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
