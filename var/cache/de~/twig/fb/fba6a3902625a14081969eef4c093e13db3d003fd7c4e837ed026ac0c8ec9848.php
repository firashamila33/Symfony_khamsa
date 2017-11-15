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
        $__internal_58511e197384c46a6c5f3fdc11cc29a73fe93a5981fcddfd246bf970ab87fd24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58511e197384c46a6c5f3fdc11cc29a73fe93a5981fcddfd246bf970ab87fd24->enter($__internal_58511e197384c46a6c5f3fdc11cc29a73fe93a5981fcddfd246bf970ab87fd24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle:Default:index.html.twig"));

        $__internal_e186df97fcc8a4b48421c2f16cb6f77784ac833876d9e254103f0f83c5d6a962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e186df97fcc8a4b48421c2f16cb6f77784ac833876d9e254103f0f83c5d6a962->enter($__internal_e186df97fcc8a4b48421c2f16cb6f77784ac833876d9e254103f0f83c5d6a962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58511e197384c46a6c5f3fdc11cc29a73fe93a5981fcddfd246bf970ab87fd24->leave($__internal_58511e197384c46a6c5f3fdc11cc29a73fe93a5981fcddfd246bf970ab87fd24_prof);

        
        $__internal_e186df97fcc8a4b48421c2f16cb6f77784ac833876d9e254103f0f83c5d6a962->leave($__internal_e186df97fcc8a4b48421c2f16cb6f77784ac833876d9e254103f0f83c5d6a962_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_070b6ec64868d4f2e1c5bb4262bc4ee1ec944ba064ada477921704557d115081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_070b6ec64868d4f2e1c5bb4262bc4ee1ec944ba064ada477921704557d115081->enter($__internal_070b6ec64868d4f2e1c5bb4262bc4ee1ec944ba064ada477921704557d115081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7f0917ca3845305d6d41939d6785b4c6533c022631ed35811e177a2a2717320b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f0917ca3845305d6d41939d6785b4c6533c022631ed35811e177a2a2717320b->enter($__internal_7f0917ca3845305d6d41939d6785b4c6533c022631ed35811e177a2a2717320b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7f0917ca3845305d6d41939d6785b4c6533c022631ed35811e177a2a2717320b->leave($__internal_7f0917ca3845305d6d41939d6785b4c6533c022631ed35811e177a2a2717320b_prof);

        
        $__internal_070b6ec64868d4f2e1c5bb4262bc4ee1ec944ba064ada477921704557d115081->leave($__internal_070b6ec64868d4f2e1c5bb4262bc4ee1ec944ba064ada477921704557d115081_prof);

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
