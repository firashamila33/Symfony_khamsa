<?php

/* FrontEndBundle:Login:Loginn.html.twig */
class __TwigTemplate_cbc90f834e680cdc5654dca4d645d484e4a94a8fc9d1f3c42f7e16a47e7cf8b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("FrontEndBundle::Layout.html.twig", "FrontEndBundle:Login:Loginn.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontEndBundle::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32e0f5a809295530f5e21832e9807b6296fe87d8d484dab0a08fcd1d17d9cf90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32e0f5a809295530f5e21832e9807b6296fe87d8d484dab0a08fcd1d17d9cf90->enter($__internal_32e0f5a809295530f5e21832e9807b6296fe87d8d484dab0a08fcd1d17d9cf90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle:Login:Loginn.html.twig"));

        $__internal_b5838c0c76eab9997ebbfba92e2f628ad1d3793161041785124598774a1974fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5838c0c76eab9997ebbfba92e2f628ad1d3793161041785124598774a1974fc->enter($__internal_b5838c0c76eab9997ebbfba92e2f628ad1d3793161041785124598774a1974fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle:Login:Loginn.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32e0f5a809295530f5e21832e9807b6296fe87d8d484dab0a08fcd1d17d9cf90->leave($__internal_32e0f5a809295530f5e21832e9807b6296fe87d8d484dab0a08fcd1d17d9cf90_prof);

        
        $__internal_b5838c0c76eab9997ebbfba92e2f628ad1d3793161041785124598774a1974fc->leave($__internal_b5838c0c76eab9997ebbfba92e2f628ad1d3793161041785124598774a1974fc_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f53bda3b8ffe354c79a9db711ad79845365ad16da19a31dfd27b3bc8eb3e8d22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f53bda3b8ffe354c79a9db711ad79845365ad16da19a31dfd27b3bc8eb3e8d22->enter($__internal_f53bda3b8ffe354c79a9db711ad79845365ad16da19a31dfd27b3bc8eb3e8d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_030e36b49646cbc8bb99742a4ed9e5623f2922247bcd2746150f63c5792929e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_030e36b49646cbc8bb99742a4ed9e5623f2922247bcd2746150f63c5792929e7->enter($__internal_030e36b49646cbc8bb99742a4ed9e5623f2922247bcd2746150f63c5792929e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <section id=\"slider\" class=\"slider-section login\">
        <div class=\"slider2\">
            <div class=\"register-bg fullscreen flex flex-middle relative\">
                <div class=\"overlay overlay-bg\"></div>
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"register-content\">
                                <h1 class=\"mb-20\">Log in to Have the Access</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                <a href=\"2#\" class=\"btn\">Don’t have an Account?</a>
                            </div>
                        </div>
                        <div class=\"col-md-offset-1 col-md-5 col-sm-6 col-xs-12\">
                            <div class=\"register-form login-form\">
                                <h3>log In</h3>
                                <form action=\"#\">
                                    <label>Username or Email Address</label>
                                    <p><input type=\"text\"  onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Username'\" placeholder=\"Username\"></p>
                                    <label>Password</label>
                                    <p><input type=\"password\"  onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = '........'\" placeholder=\"........\"></p>
                                    <div class=\"check\"><input id=\"one\" type=\"checkbox\"><label for=\"one\"><span></span>Keep me logged in</label></div>
                                    <div><button class=\"btn\">Log In</button></div>
                                    <p class=\"forgot\"><a href=\"#\">Forgot Password?</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_030e36b49646cbc8bb99742a4ed9e5623f2922247bcd2746150f63c5792929e7->leave($__internal_030e36b49646cbc8bb99742a4ed9e5623f2922247bcd2746150f63c5792929e7_prof);

        
        $__internal_f53bda3b8ffe354c79a9db711ad79845365ad16da19a31dfd27b3bc8eb3e8d22->leave($__internal_f53bda3b8ffe354c79a9db711ad79845365ad16da19a31dfd27b3bc8eb3e8d22_prof);

    }

    public function getTemplateName()
    {
        return "FrontEndBundle:Login:Loginn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'FrontEndBundle::Layout.html.twig' %}

{% block body %}
    <section id=\"slider\" class=\"slider-section login\">
        <div class=\"slider2\">
            <div class=\"register-bg fullscreen flex flex-middle relative\">
                <div class=\"overlay overlay-bg\"></div>
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"register-content\">
                                <h1 class=\"mb-20\">Log in to Have the Access</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                <a href=\"2#\" class=\"btn\">Don’t have an Account?</a>
                            </div>
                        </div>
                        <div class=\"col-md-offset-1 col-md-5 col-sm-6 col-xs-12\">
                            <div class=\"register-form login-form\">
                                <h3>log In</h3>
                                <form action=\"#\">
                                    <label>Username or Email Address</label>
                                    <p><input type=\"text\"  onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Username'\" placeholder=\"Username\"></p>
                                    <label>Password</label>
                                    <p><input type=\"password\"  onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = '........'\" placeholder=\"........\"></p>
                                    <div class=\"check\"><input id=\"one\" type=\"checkbox\"><label for=\"one\"><span></span>Keep me logged in</label></div>
                                    <div><button class=\"btn\">Log In</button></div>
                                    <p class=\"forgot\"><a href=\"#\">Forgot Password?</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock body %}", "FrontEndBundle:Login:Loginn.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\src\\FrontEndBundle\\Resources\\views\\Login\\Loginn.html.twig");
    }
}
