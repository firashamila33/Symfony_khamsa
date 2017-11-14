<?php

/* FrontEndBundle:Login:Loginn.html.twig */
class __TwigTemplate_0f489cd13d460e368ee4532be392ca7f0da2ba6a2d2b2176178f5bfbec949b49 extends Twig_Template
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
        $__internal_e76124bd498d221be3c71766b82f8327c0452d896cbd1e15dc4d4f1c71838f1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e76124bd498d221be3c71766b82f8327c0452d896cbd1e15dc4d4f1c71838f1c->enter($__internal_e76124bd498d221be3c71766b82f8327c0452d896cbd1e15dc4d4f1c71838f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle:Login:Loginn.html.twig"));

        $__internal_50160dc3a141ce8ba27859ea5ce13ef2afe1c47da0baffbc15bbc10cf457f14a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50160dc3a141ce8ba27859ea5ce13ef2afe1c47da0baffbc15bbc10cf457f14a->enter($__internal_50160dc3a141ce8ba27859ea5ce13ef2afe1c47da0baffbc15bbc10cf457f14a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle:Login:Loginn.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e76124bd498d221be3c71766b82f8327c0452d896cbd1e15dc4d4f1c71838f1c->leave($__internal_e76124bd498d221be3c71766b82f8327c0452d896cbd1e15dc4d4f1c71838f1c_prof);

        
        $__internal_50160dc3a141ce8ba27859ea5ce13ef2afe1c47da0baffbc15bbc10cf457f14a->leave($__internal_50160dc3a141ce8ba27859ea5ce13ef2afe1c47da0baffbc15bbc10cf457f14a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8d916a9b0e9381f6662faeb5a3844973ce9fcb12bc0c1ac1021e1ce3a94d3d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8d916a9b0e9381f6662faeb5a3844973ce9fcb12bc0c1ac1021e1ce3a94d3d0->enter($__internal_a8d916a9b0e9381f6662faeb5a3844973ce9fcb12bc0c1ac1021e1ce3a94d3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_77ecdf16af76f6539af98ee39daf9920b07576410bbba90601d19811bfe3d6c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77ecdf16af76f6539af98ee39daf9920b07576410bbba90601d19811bfe3d6c7->enter($__internal_77ecdf16af76f6539af98ee39daf9920b07576410bbba90601d19811bfe3d6c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_77ecdf16af76f6539af98ee39daf9920b07576410bbba90601d19811bfe3d6c7->leave($__internal_77ecdf16af76f6539af98ee39daf9920b07576410bbba90601d19811bfe3d6c7_prof);

        
        $__internal_a8d916a9b0e9381f6662faeb5a3844973ce9fcb12bc0c1ac1021e1ce3a94d3d0->leave($__internal_a8d916a9b0e9381f6662faeb5a3844973ce9fcb12bc0c1ac1021e1ce3a94d3d0_prof);

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
{% endblock body %}", "FrontEndBundle:Login:Loginn.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\src\\FrontEndBundle/Resources/views/Login/Loginn.html.twig");
    }
}
