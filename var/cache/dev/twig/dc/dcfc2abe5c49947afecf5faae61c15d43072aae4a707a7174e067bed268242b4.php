<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b34f6132a302dbc4e7232c48b3bb92cd18a2e7471a7dde2b061fcf5477679f50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_0808f5c9599decf4eee1adbe303a870cdc4ee185644c5b9d1ee25c411ae357dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0808f5c9599decf4eee1adbe303a870cdc4ee185644c5b9d1ee25c411ae357dd->enter($__internal_0808f5c9599decf4eee1adbe303a870cdc4ee185644c5b9d1ee25c411ae357dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_4547d39746ae9e24c029e58273631c9f0593510905937de85b6cbeb538d3724e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4547d39746ae9e24c029e58273631c9f0593510905937de85b6cbeb538d3724e->enter($__internal_4547d39746ae9e24c029e58273631c9f0593510905937de85b6cbeb538d3724e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0808f5c9599decf4eee1adbe303a870cdc4ee185644c5b9d1ee25c411ae357dd->leave($__internal_0808f5c9599decf4eee1adbe303a870cdc4ee185644c5b9d1ee25c411ae357dd_prof);

        
        $__internal_4547d39746ae9e24c029e58273631c9f0593510905937de85b6cbeb538d3724e->leave($__internal_4547d39746ae9e24c029e58273631c9f0593510905937de85b6cbeb538d3724e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a63c3e543af183223479683dbf9c720bca67173c6127b9530d26276612a74a9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a63c3e543af183223479683dbf9c720bca67173c6127b9530d26276612a74a9b->enter($__internal_a63c3e543af183223479683dbf9c720bca67173c6127b9530d26276612a74a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_53b03467f69c388a7fb4977f9a19a4e55019e4a351d5cfc5a8d44bfc924156c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b03467f69c388a7fb4977f9a19a4e55019e4a351d5cfc5a8d44bfc924156c0->enter($__internal_53b03467f69c388a7fb4977f9a19a4e55019e4a351d5cfc5a8d44bfc924156c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_53b03467f69c388a7fb4977f9a19a4e55019e4a351d5cfc5a8d44bfc924156c0->leave($__internal_53b03467f69c388a7fb4977f9a19a4e55019e4a351d5cfc5a8d44bfc924156c0_prof);

        
        $__internal_a63c3e543af183223479683dbf9c720bca67173c6127b9530d26276612a74a9b->leave($__internal_a63c3e543af183223479683dbf9c720bca67173c6127b9530d26276612a74a9b_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_8afab9ff427d2baf82e215ffd7c1d4605a160a3c7f5bc13ec085aa0948fbb994 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8afab9ff427d2baf82e215ffd7c1d4605a160a3c7f5bc13ec085aa0948fbb994->enter($__internal_8afab9ff427d2baf82e215ffd7c1d4605a160a3c7f5bc13ec085aa0948fbb994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_983664a40618e10fbaba6912259d374a5d3dc47d5c7d0c2379f3294579354f26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_983664a40618e10fbaba6912259d374a5d3dc47d5c7d0c2379f3294579354f26->enter($__internal_983664a40618e10fbaba6912259d374a5d3dc47d5c7d0c2379f3294579354f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_983664a40618e10fbaba6912259d374a5d3dc47d5c7d0c2379f3294579354f26->leave($__internal_983664a40618e10fbaba6912259d374a5d3dc47d5c7d0c2379f3294579354f26_prof);

        
        $__internal_8afab9ff427d2baf82e215ffd7c1d4605a160a3c7f5bc13ec085aa0948fbb994->leave($__internal_8afab9ff427d2baf82e215ffd7c1d4605a160a3c7f5bc13ec085aa0948fbb994_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_957c71408e35ea41347bce058f847dd6594aea722d1cbb65ebfcd35a32f4fee1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_957c71408e35ea41347bce058f847dd6594aea722d1cbb65ebfcd35a32f4fee1->enter($__internal_957c71408e35ea41347bce058f847dd6594aea722d1cbb65ebfcd35a32f4fee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ebe901177c0728c6c7a842e9c858784191f3eb76db1dd624147bb94b520fc680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebe901177c0728c6c7a842e9c858784191f3eb76db1dd624147bb94b520fc680->enter($__internal_ebe901177c0728c6c7a842e9c858784191f3eb76db1dd624147bb94b520fc680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ebe901177c0728c6c7a842e9c858784191f3eb76db1dd624147bb94b520fc680->leave($__internal_ebe901177c0728c6c7a842e9c858784191f3eb76db1dd624147bb94b520fc680_prof);

        
        $__internal_957c71408e35ea41347bce058f847dd6594aea722d1cbb65ebfcd35a32f4fee1->leave($__internal_957c71408e35ea41347bce058f847dd6594aea722d1cbb65ebfcd35a32f4fee1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
