<?php

/* @FrontEnd/Restaurent/MenuCategories.html.twig */
class __TwigTemplate_53d220f99b0f986eefa7f8f233b085151e8937ffd45655ab641edd2de7a16230 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontEndBundle::RestaurentLayout.html.twig", "@FrontEnd/Restaurent/MenuCategories.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontEndBundle::RestaurentLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71fb379a03c792fe5362c40f410caf87f7603a540b3add3b21f248b8f989fb44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71fb379a03c792fe5362c40f410caf87f7603a540b3add3b21f248b8f989fb44->enter($__internal_71fb379a03c792fe5362c40f410caf87f7603a540b3add3b21f248b8f989fb44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FrontEnd/Restaurent/MenuCategories.html.twig"));

        $__internal_2d8b384e650dcc43e522237d93869a2822fa23ef2060781e178c1e5dd3100aef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d8b384e650dcc43e522237d93869a2822fa23ef2060781e178c1e5dd3100aef->enter($__internal_2d8b384e650dcc43e522237d93869a2822fa23ef2060781e178c1e5dd3100aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FrontEnd/Restaurent/MenuCategories.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71fb379a03c792fe5362c40f410caf87f7603a540b3add3b21f248b8f989fb44->leave($__internal_71fb379a03c792fe5362c40f410caf87f7603a540b3add3b21f248b8f989fb44_prof);

        
        $__internal_2d8b384e650dcc43e522237d93869a2822fa23ef2060781e178c1e5dd3100aef->leave($__internal_2d8b384e650dcc43e522237d93869a2822fa23ef2060781e178c1e5dd3100aef_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4fbaf06daefaa9f55a4dacfc203667d04361e216d2363e8ea3b8ea1bdd2d0f80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fbaf06daefaa9f55a4dacfc203667d04361e216d2363e8ea3b8ea1bdd2d0f80->enter($__internal_4fbaf06daefaa9f55a4dacfc203667d04361e216d2363e8ea3b8ea1bdd2d0f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9fa839afa441eaf87bd2d81f5f9aa55b1ad65e73080a3f669551dda42240535a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa839afa441eaf87bd2d81f5f9aa55b1ad65e73080a3f669551dda42240535a->enter($__internal_9fa839afa441eaf87bd2d81f5f9aa55b1ad65e73080a3f669551dda42240535a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <!-- Start Main -->
    <main>
        <div class=\"main-part\">
            <!-- Start Breadcrumb Part -->
            <section class=\"breadcrumb-part\" data-stellar-offset-parent=\"true\" data-stellar-background-ratio=\"0.5\" style=\"background-image: url('";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/breadbg1.jpg"), "html", null, true);
        echo "');\">
                <div class=\"container\">
                    <div class=\"breadcrumb-inner\">
                        <h2>Gallery</h2>
                        <a href=\"#\">Home</a>
                        <span>Gallery</span>
                    </div>
                </div>
            </section>
            <!-- End Breadcrumb Part -->

            <!-- Start Menu Part -->
            <section class=\"special-menu bg-skeen home-icon\">
                <div class=\"icon-default icon-skeen\">
                    <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/scroll-arrow.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <div class=\"container\">
                    <div class=\"menu-wrapper\">
                        <div class=\"portfolioContainer row\" data-defaultfilter=\".breakfast\">
                            <div class=\"col-md-4 col-sm-4 col-xs-12 isotope-item breakfast dinner wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                                <div class=\"menu-round\">
                                    <div class=\"menu-round-img\">
                                        <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("resto_menu_sub_categories");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img27.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                    </div>
                                    <div class=\"menu-round-info\">
                                        <h5>Lasal Cheese <span>\$ 15.00</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-4 col-sm-4 col-xs-12 isotope-item breakfast lunch wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                                <div class=\"menu-round\">
                                    <div class=\"menu-round-img\">
                                        <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("resto_menu_sub_categories");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img28.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                    </div>
                                    <div class=\"menu-round-info\">
                                        <h5>Lasal Cheese <span>\$ 15.00</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-4 col-sm-4 col-xs-12 isotope-item dessert breakfast wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                                <div class=\"menu-round\">
                                    <div class=\"menu-round-img\">
                                        <a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("resto_menu_sub_categories");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img29.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                    </div>
                                    <div class=\"menu-round-info\">
                                        <h5>Lasal Cheesse <span>\$ 15.00</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-4 col-sm-4 col-xs-12 isotope-item dinner breakfast wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                                <div class=\"menu-round\">
                                    <div class=\"menu-round-img\">
                                        <a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("resto_menu_sub_categories");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img30.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                    </div>
                                    <div class=\"menu-round-info\">
                                        <h5>Lasal Cheese <span>\$ 15.00</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-4 col-sm-4 col-xs-12 isotope-item freshfood breakfast dessert wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                                <div class=\"menu-round\">
                                    <div class=\"menu-round-img\">
                                        <a href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("resto_menu_sub_categories");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img31.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                    </div>
                                    <div class=\"menu-round-info\">
                                        <h5>Lasal Cheese <span>\$ 15.00</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-4 col-sm-4 col-xs-12 isotope-item freshfood breakfast wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                                <div class=\"menu-round\">
                                    <div class=\"menu-round-img\">
                                        <a href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("resto_menu_sub_categories");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img32.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                    </div>
                                    <div class=\"menu-round-info\">
                                        <h5>Lasal Cheese <span>\$ 15.00</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"float-main\">
                    <div class=\"icon-top-left\">
                        <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/icon7.png"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"icon-bottom-left\">
                        <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/icon8.png"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"icon-top-right\">
                        <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/icon9.png"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"icon-bottom-right\">
                        <img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/icon10.png"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                </div>
            </section>
            <!-- End Menu Part -->
        </div>
    </main>
    <!-- End Main -->
";
        
        $__internal_9fa839afa441eaf87bd2d81f5f9aa55b1ad65e73080a3f669551dda42240535a->leave($__internal_9fa839afa441eaf87bd2d81f5f9aa55b1ad65e73080a3f669551dda42240535a_prof);

        
        $__internal_4fbaf06daefaa9f55a4dacfc203667d04361e216d2363e8ea3b8ea1bdd2d0f80->leave($__internal_4fbaf06daefaa9f55a4dacfc203667d04361e216d2363e8ea3b8ea1bdd2d0f80_prof);

    }

    public function getTemplateName()
    {
        return "@FrontEnd/Restaurent/MenuCategories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 101,  187 => 98,  181 => 95,  175 => 92,  158 => 80,  143 => 70,  128 => 60,  113 => 50,  98 => 40,  83 => 30,  72 => 22,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontEndBundle::RestaurentLayout.html.twig' %}

{% block body %}
    <!-- Start Main -->
    <main>
        <div class=\"main-part\">
            <!-- Start Breadcrumb Part -->
            <section class=\"breadcrumb-part\" data-stellar-offset-parent=\"true\" data-stellar-background-ratio=\"0.5\" style=\"background-image: url('{{ asset('FrontEnd/Food/images/breadbg1.jpg') }}');\">
                <div class=\"container\">
                    <div class=\"breadcrumb-inner\">
                        <h2>Gallery</h2>
                        <a href=\"#\">Home</a>
                        <span>Gallery</span>
                    </div>
                </div>
            </section>
            <!-- End Breadcrumb Part -->

            <!-- Start Menu Part -->
            <section class=\"special-menu bg-skeen home-icon\">
                <div class=\"icon-default icon-skeen\">
                    <img src=\"{{ asset('FrontEnd/Food/images/scroll-arrow.png') }}\" alt=\"\">
                </div>
                <div class=\"container\">
                    <div class=\"menu-wrapper\">
                        <div class=\"portfolioContainer row\" data-defaultfilter=\".breakfast\">
                            <div class=\"col-md-4 col-sm-4 col-xs-12 isotope-item breakfast dinner wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                                <div class=\"menu-round\">
                                    <div class=\"menu-round-img\">
                                        <a href=\"{{ path('resto_menu_sub_categories') }}\"><img src=\"{{ asset('FrontEnd/Food/images/img27.jpg') }}\" alt=\"\"></a>
                                    </div>
                                    <div class=\"menu-round-info\">
                                        <h5>Lasal Cheese <span>\$ 15.00</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-4 col-sm-4 col-xs-12 isotope-item breakfast lunch wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                                <div class=\"menu-round\">
                                    <div class=\"menu-round-img\">
                                        <a href=\"{{ path('resto_menu_sub_categories') }}\"><img src=\"{{ asset('FrontEnd/Food/images/img28.jpg') }}\" alt=\"\"></a>
                                    </div>
                                    <div class=\"menu-round-info\">
                                        <h5>Lasal Cheese <span>\$ 15.00</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-4 col-sm-4 col-xs-12 isotope-item dessert breakfast wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                                <div class=\"menu-round\">
                                    <div class=\"menu-round-img\">
                                        <a href=\"{{ path('resto_menu_sub_categories') }}\"><img src=\"{{ asset('FrontEnd/Food/images/img29.jpg') }}\" alt=\"\"></a>
                                    </div>
                                    <div class=\"menu-round-info\">
                                        <h5>Lasal Cheesse <span>\$ 15.00</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-4 col-sm-4 col-xs-12 isotope-item dinner breakfast wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                                <div class=\"menu-round\">
                                    <div class=\"menu-round-img\">
                                        <a href=\"{{ path('resto_menu_sub_categories') }}\"><img src=\"{{ asset('FrontEnd/Food/images/img30.jpg') }}\" alt=\"\"></a>
                                    </div>
                                    <div class=\"menu-round-info\">
                                        <h5>Lasal Cheese <span>\$ 15.00</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-4 col-sm-4 col-xs-12 isotope-item freshfood breakfast dessert wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                                <div class=\"menu-round\">
                                    <div class=\"menu-round-img\">
                                        <a href=\"{{ path('resto_menu_sub_categories') }}\"><img src=\"{{ asset('FrontEnd/Food/images/img31.jpg') }}\" alt=\"\"></a>
                                    </div>
                                    <div class=\"menu-round-info\">
                                        <h5>Lasal Cheese <span>\$ 15.00</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-4 col-sm-4 col-xs-12 isotope-item freshfood breakfast wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                                <div class=\"menu-round\">
                                    <div class=\"menu-round-img\">
                                        <a href=\"{{ path('resto_menu_sub_categories') }}\"><img src=\"{{ asset('FrontEnd/Food/images/img32.jpg') }}\" alt=\"\"></a>
                                    </div>
                                    <div class=\"menu-round-info\">
                                        <h5>Lasal Cheese <span>\$ 15.00</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"float-main\">
                    <div class=\"icon-top-left\">
                        <img src=\"{{ asset('FrontEnd/Food/images/icon7.png') }}\" alt=\"\">
                    </div>
                    <div class=\"icon-bottom-left\">
                        <img src=\"{{ asset('FrontEnd/Food/images/icon8.png') }}\" alt=\"\">
                    </div>
                    <div class=\"icon-top-right\">
                        <img src=\"{{ asset('FrontEnd/Food/images/icon9.png') }}\" alt=\"\">
                    </div>
                    <div class=\"icon-bottom-right\">
                        <img src=\"{{ asset('FrontEnd/Food/images/icon10.png') }}\" alt=\"\">
                    </div>
                </div>
            </section>
            <!-- End Menu Part -->
        </div>
    </main>
    <!-- End Main -->
{% endblock body %}", "@FrontEnd/Restaurent/MenuCategories.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\src\\FrontEndBundle\\Resources\\views\\Restaurent\\MenuCategories.html.twig");
    }
}
