<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4537dc63c5826218d74c9c7430cab14143e3e3f6d4c5aebe4c211635f1bd8db6 extends Twig_Template
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
        $__internal_733acb10405683217ba6506dd4b533afdae8021e006f20e2e4c7729a8ac0a4a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_733acb10405683217ba6506dd4b533afdae8021e006f20e2e4c7729a8ac0a4a7->enter($__internal_733acb10405683217ba6506dd4b533afdae8021e006f20e2e4c7729a8ac0a4a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_6bd2e7065636a3a774cd3d9efe7ef70775e6e631f6d99a15744fb51575c1fe4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd2e7065636a3a774cd3d9efe7ef70775e6e631f6d99a15744fb51575c1fe4d->enter($__internal_6bd2e7065636a3a774cd3d9efe7ef70775e6e631f6d99a15744fb51575c1fe4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_733acb10405683217ba6506dd4b533afdae8021e006f20e2e4c7729a8ac0a4a7->leave($__internal_733acb10405683217ba6506dd4b533afdae8021e006f20e2e4c7729a8ac0a4a7_prof);

        
        $__internal_6bd2e7065636a3a774cd3d9efe7ef70775e6e631f6d99a15744fb51575c1fe4d->leave($__internal_6bd2e7065636a3a774cd3d9efe7ef70775e6e631f6d99a15744fb51575c1fe4d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d4eef61e0627f56deb520cdae7110d6ce1d54f1cbbba31bd2c35c9c84e32cd19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4eef61e0627f56deb520cdae7110d6ce1d54f1cbbba31bd2c35c9c84e32cd19->enter($__internal_d4eef61e0627f56deb520cdae7110d6ce1d54f1cbbba31bd2c35c9c84e32cd19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7a76f6131ebbb21252738e2402775d30edf57134195079d12fa17bb03fe7ffc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a76f6131ebbb21252738e2402775d30edf57134195079d12fa17bb03fe7ffc0->enter($__internal_7a76f6131ebbb21252738e2402775d30edf57134195079d12fa17bb03fe7ffc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7a76f6131ebbb21252738e2402775d30edf57134195079d12fa17bb03fe7ffc0->leave($__internal_7a76f6131ebbb21252738e2402775d30edf57134195079d12fa17bb03fe7ffc0_prof);

        
        $__internal_d4eef61e0627f56deb520cdae7110d6ce1d54f1cbbba31bd2c35c9c84e32cd19->leave($__internal_d4eef61e0627f56deb520cdae7110d6ce1d54f1cbbba31bd2c35c9c84e32cd19_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_441dc700a0c29d68aab3fcd4eadcf91c205be8be16c53b1c3e3bbcae239f1bbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_441dc700a0c29d68aab3fcd4eadcf91c205be8be16c53b1c3e3bbcae239f1bbd->enter($__internal_441dc700a0c29d68aab3fcd4eadcf91c205be8be16c53b1c3e3bbcae239f1bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0d3319f6c64eacea50767c7fc836fadd61b02b4dfabbbdfaa743f6607d0dc3f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d3319f6c64eacea50767c7fc836fadd61b02b4dfabbbdfaa743f6607d0dc3f5->enter($__internal_0d3319f6c64eacea50767c7fc836fadd61b02b4dfabbbdfaa743f6607d0dc3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0d3319f6c64eacea50767c7fc836fadd61b02b4dfabbbdfaa743f6607d0dc3f5->leave($__internal_0d3319f6c64eacea50767c7fc836fadd61b02b4dfabbbdfaa743f6607d0dc3f5_prof);

        
        $__internal_441dc700a0c29d68aab3fcd4eadcf91c205be8be16c53b1c3e3bbcae239f1bbd->leave($__internal_441dc700a0c29d68aab3fcd4eadcf91c205be8be16c53b1c3e3bbcae239f1bbd_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8def168d2ec0aef20033d66e6e81a308a2c95f7955b48811235ee950125c337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8def168d2ec0aef20033d66e6e81a308a2c95f7955b48811235ee950125c337->enter($__internal_c8def168d2ec0aef20033d66e6e81a308a2c95f7955b48811235ee950125c337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_08ba5927d17a43230837924ddedfd24d36b05a8488dfb9a0edede2324d4d2b2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08ba5927d17a43230837924ddedfd24d36b05a8488dfb9a0edede2324d4d2b2a->enter($__internal_08ba5927d17a43230837924ddedfd24d36b05a8488dfb9a0edede2324d4d2b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_08ba5927d17a43230837924ddedfd24d36b05a8488dfb9a0edede2324d4d2b2a->leave($__internal_08ba5927d17a43230837924ddedfd24d36b05a8488dfb9a0edede2324d4d2b2a_prof);

        
        $__internal_c8def168d2ec0aef20033d66e6e81a308a2c95f7955b48811235ee950125c337->leave($__internal_c8def168d2ec0aef20033d66e6e81a308a2c95f7955b48811235ee950125c337_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/www/Esprit4All/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
