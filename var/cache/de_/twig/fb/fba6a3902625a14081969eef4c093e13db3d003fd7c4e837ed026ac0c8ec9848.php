<?php

/* @FrontEnd/Default/index.html.twig */
class __TwigTemplate_a3241c3e322c00532730de06583459006ff86c09ade905b2425eb9ba93e50a2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontEndBundle::Layout.html.twig", "@FrontEnd/Default/index.html.twig", 1);
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
        $__internal_b0be8e09b4d40ca2c2474b161c8ae87bba602710bb921312c25b2f64b302fd31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0be8e09b4d40ca2c2474b161c8ae87bba602710bb921312c25b2f64b302fd31->enter($__internal_b0be8e09b4d40ca2c2474b161c8ae87bba602710bb921312c25b2f64b302fd31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FrontEnd/Default/index.html.twig"));

        $__internal_47da17e1923a420a48b169d10391e36a58045ccb020a0ec2ea59385c76a18876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47da17e1923a420a48b169d10391e36a58045ccb020a0ec2ea59385c76a18876->enter($__internal_47da17e1923a420a48b169d10391e36a58045ccb020a0ec2ea59385c76a18876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FrontEnd/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0be8e09b4d40ca2c2474b161c8ae87bba602710bb921312c25b2f64b302fd31->leave($__internal_b0be8e09b4d40ca2c2474b161c8ae87bba602710bb921312c25b2f64b302fd31_prof);

        
        $__internal_47da17e1923a420a48b169d10391e36a58045ccb020a0ec2ea59385c76a18876->leave($__internal_47da17e1923a420a48b169d10391e36a58045ccb020a0ec2ea59385c76a18876_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd04c43bcb9ced5b8d6c23b187d1b4198d0fe5ce3bb1951ca12b5b011375413f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd04c43bcb9ced5b8d6c23b187d1b4198d0fe5ce3bb1951ca12b5b011375413f->enter($__internal_bd04c43bcb9ced5b8d6c23b187d1b4198d0fe5ce3bb1951ca12b5b011375413f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6a55288b9eaad56d25e786786be431eb5eea68211de627ac4992fc0c1d804bdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a55288b9eaad56d25e786786be431eb5eea68211de627ac4992fc0c1d804bdf->enter($__internal_6a55288b9eaad56d25e786786be431eb5eea68211de627ac4992fc0c1d804bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <section id=\"slider\" class=\"slider-section\">
    <div class=\"slider1 deafult-slider\">
        <div class=\"item fullscreen flex flex-middle\" style=\"background-image: url(";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/slider/1.jpg"), "html", null, true);
        echo ");\">
            <div class=\"container\">
                <div class=\"col-lg-offset-6 col-lg-6 col-md-12\">
                    <div class=\"slide-content\">
                        <h1 class=\"light h1\">Introducing Educare University</h1>
                        <p class=\"light mt-10\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href=\"#\" target=\"_blank\" class=\"btn mt-10 mr-10\">Start Now</a>
                        <a href=\"#\" target=\"_blank\" class=\"btn mt-10\">Read More</a>
                    </div>
                </div>
            </div>
            <div class=\"overlay-slider\"></div>
        </div>
        <div class=\"item fullscreen flex flex-middle\" style=\"background-image: url(";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/slider/5ss.jpg"), "html", null, true);
        echo ");\">
            <div class=\"container\">
                <div class=\"col-lg-6 col-md-12\">
                    <div class=\"slide-content\">
                        <h1 class=\"light h1\">We are ready to take the challenge</h1>
                        <p class=\"light mt-10\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href=\"#\" target=\"_blank\" class=\"btn mt-10 mr-10\">Start Now</a>
                        <a href=\"0#\" target=\"_blank\" class=\"btn mt-10\">Read More</a>
                    </div>
                </div>
            </div>
            <div class=\"overlay-slider2\"></div>
        </div>
    </div>
    </section>
";
        
        $__internal_6a55288b9eaad56d25e786786be431eb5eea68211de627ac4992fc0c1d804bdf->leave($__internal_6a55288b9eaad56d25e786786be431eb5eea68211de627ac4992fc0c1d804bdf_prof);

        
        $__internal_bd04c43bcb9ced5b8d6c23b187d1b4198d0fe5ce3bb1951ca12b5b011375413f->leave($__internal_bd04c43bcb9ced5b8d6c23b187d1b4198d0fe5ce3bb1951ca12b5b011375413f_prof);

    }

    public function getTemplateName()
    {
        return "@FrontEnd/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 19,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontEndBundle::Layout.html.twig' %}
{% block body %}
    <section id=\"slider\" class=\"slider-section\">
    <div class=\"slider1 deafult-slider\">
        <div class=\"item fullscreen flex flex-middle\" style=\"background-image: url({{ asset('img/slider/1.jpg') }});\">
            <div class=\"container\">
                <div class=\"col-lg-offset-6 col-lg-6 col-md-12\">
                    <div class=\"slide-content\">
                        <h1 class=\"light h1\">Introducing Educare University</h1>
                        <p class=\"light mt-10\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href=\"#\" target=\"_blank\" class=\"btn mt-10 mr-10\">Start Now</a>
                        <a href=\"#\" target=\"_blank\" class=\"btn mt-10\">Read More</a>
                    </div>
                </div>
            </div>
            <div class=\"overlay-slider\"></div>
        </div>
        <div class=\"item fullscreen flex flex-middle\" style=\"background-image: url({{ asset('img/slider/5ss.jpg') }});\">
            <div class=\"container\">
                <div class=\"col-lg-6 col-md-12\">
                    <div class=\"slide-content\">
                        <h1 class=\"light h1\">We are ready to take the challenge</h1>
                        <p class=\"light mt-10\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href=\"#\" target=\"_blank\" class=\"btn mt-10 mr-10\">Start Now</a>
                        <a href=\"0#\" target=\"_blank\" class=\"btn mt-10\">Read More</a>
                    </div>
                </div>
            </div>
            <div class=\"overlay-slider2\"></div>
        </div>
    </div>
    </section>
{% endblock body %}", "@FrontEnd/Default/index.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\src\\FrontEndBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
