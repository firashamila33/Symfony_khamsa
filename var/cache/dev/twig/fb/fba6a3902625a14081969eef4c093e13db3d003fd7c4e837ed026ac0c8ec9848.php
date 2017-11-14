<?php

/* FrontEndBundle:Default:index.html.twig */
class __TwigTemplate_a3241c3e322c00532730de06583459006ff86c09ade905b2425eb9ba93e50a2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontEndBundle::Layout.html.twig", "FrontEndBundle:Default:index.html.twig", 1);
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
        $__internal_5c0552276ff912e765687ca202099eaa553888ba1b16c3c91c012a36357dc9ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c0552276ff912e765687ca202099eaa553888ba1b16c3c91c012a36357dc9ec->enter($__internal_5c0552276ff912e765687ca202099eaa553888ba1b16c3c91c012a36357dc9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle:Default:index.html.twig"));

        $__internal_aa095be3d16e59db5a9dd2c356b231e09c79f09dd8d3e7b887da6b698ff37c9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa095be3d16e59db5a9dd2c356b231e09c79f09dd8d3e7b887da6b698ff37c9e->enter($__internal_aa095be3d16e59db5a9dd2c356b231e09c79f09dd8d3e7b887da6b698ff37c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c0552276ff912e765687ca202099eaa553888ba1b16c3c91c012a36357dc9ec->leave($__internal_5c0552276ff912e765687ca202099eaa553888ba1b16c3c91c012a36357dc9ec_prof);

        
        $__internal_aa095be3d16e59db5a9dd2c356b231e09c79f09dd8d3e7b887da6b698ff37c9e->leave($__internal_aa095be3d16e59db5a9dd2c356b231e09c79f09dd8d3e7b887da6b698ff37c9e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e75174cdd4210bcdb95fa0479e638513e800a634b07527739d053030d959b53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e75174cdd4210bcdb95fa0479e638513e800a634b07527739d053030d959b53->enter($__internal_8e75174cdd4210bcdb95fa0479e638513e800a634b07527739d053030d959b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ccf9799d82742790d41fd6f4c3725501ebd3df3dc4fa30944ed53e26cd751efb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccf9799d82742790d41fd6f4c3725501ebd3df3dc4fa30944ed53e26cd751efb->enter($__internal_ccf9799d82742790d41fd6f4c3725501ebd3df3dc4fa30944ed53e26cd751efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ccf9799d82742790d41fd6f4c3725501ebd3df3dc4fa30944ed53e26cd751efb->leave($__internal_ccf9799d82742790d41fd6f4c3725501ebd3df3dc4fa30944ed53e26cd751efb_prof);

        
        $__internal_8e75174cdd4210bcdb95fa0479e638513e800a634b07527739d053030d959b53->leave($__internal_8e75174cdd4210bcdb95fa0479e638513e800a634b07527739d053030d959b53_prof);

    }

    public function getTemplateName()
    {
        return "FrontEndBundle:Default:index.html.twig";
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
{% endblock body %}", "FrontEndBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\src\\FrontEndBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
