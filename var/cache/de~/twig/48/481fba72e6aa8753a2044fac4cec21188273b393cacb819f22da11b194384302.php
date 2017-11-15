<?php

/* FrontEndBundle:Default:index.html.twig */
class __TwigTemplate_cc5a81a5132bb35fdc296a98ae48af0ebacdca910ee8394d25b90cb2f2001aae extends Twig_Template
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
        $__internal_58ad06a6b43ff0421766f7b4ba25aecc7b40beafad380aaefdbdbd734fbe18c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58ad06a6b43ff0421766f7b4ba25aecc7b40beafad380aaefdbdbd734fbe18c4->enter($__internal_58ad06a6b43ff0421766f7b4ba25aecc7b40beafad380aaefdbdbd734fbe18c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle:Default:index.html.twig"));

        $__internal_b66c4c3b5749ba32ebf48374b84cee49a22581fef98bbe6d8e25a6a2b494fd08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b66c4c3b5749ba32ebf48374b84cee49a22581fef98bbe6d8e25a6a2b494fd08->enter($__internal_b66c4c3b5749ba32ebf48374b84cee49a22581fef98bbe6d8e25a6a2b494fd08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58ad06a6b43ff0421766f7b4ba25aecc7b40beafad380aaefdbdbd734fbe18c4->leave($__internal_58ad06a6b43ff0421766f7b4ba25aecc7b40beafad380aaefdbdbd734fbe18c4_prof);

        
        $__internal_b66c4c3b5749ba32ebf48374b84cee49a22581fef98bbe6d8e25a6a2b494fd08->leave($__internal_b66c4c3b5749ba32ebf48374b84cee49a22581fef98bbe6d8e25a6a2b494fd08_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_00b86d34d8d23296da194f43f34cf003769f72da8076133e5d21e2f7f9f19ddf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00b86d34d8d23296da194f43f34cf003769f72da8076133e5d21e2f7f9f19ddf->enter($__internal_00b86d34d8d23296da194f43f34cf003769f72da8076133e5d21e2f7f9f19ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bf6c5a6962f140ebd08df5be4bd4cfdac565e2b8955cee570c5817bd84fb6341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf6c5a6962f140ebd08df5be4bd4cfdac565e2b8955cee570c5817bd84fb6341->enter($__internal_bf6c5a6962f140ebd08df5be4bd4cfdac565e2b8955cee570c5817bd84fb6341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bf6c5a6962f140ebd08df5be4bd4cfdac565e2b8955cee570c5817bd84fb6341->leave($__internal_bf6c5a6962f140ebd08df5be4bd4cfdac565e2b8955cee570c5817bd84fb6341_prof);

        
        $__internal_00b86d34d8d23296da194f43f34cf003769f72da8076133e5d21e2f7f9f19ddf->leave($__internal_00b86d34d8d23296da194f43f34cf003769f72da8076133e5d21e2f7f9f19ddf_prof);

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
{% endblock body %}", "FrontEndBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\src\\FrontEndBundle/Resources/views/Default/index.html.twig");
    }
}
