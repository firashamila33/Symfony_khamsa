<?php

/* FrontEndBundle:Restaurent:RestaurentAccueil.html.twig */
class __TwigTemplate_de3aec4e51d66eaa4d82f9353f6d9565c76ac1adda8bd87565caf399390eceb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontEndBundle::RestaurentLayout.html.twig", "FrontEndBundle:Restaurent:RestaurentAccueil.html.twig", 1);
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
        $__internal_370efc7fcddc046bcf02f0802217ca3cbc3c276b879b9334a65c60f39404ccfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_370efc7fcddc046bcf02f0802217ca3cbc3c276b879b9334a65c60f39404ccfc->enter($__internal_370efc7fcddc046bcf02f0802217ca3cbc3c276b879b9334a65c60f39404ccfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle:Restaurent:RestaurentAccueil.html.twig"));

        $__internal_12c91984b82a37c99770480001888bba8691991f0baa01817e503a23fc3ae642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12c91984b82a37c99770480001888bba8691991f0baa01817e503a23fc3ae642->enter($__internal_12c91984b82a37c99770480001888bba8691991f0baa01817e503a23fc3ae642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle:Restaurent:RestaurentAccueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_370efc7fcddc046bcf02f0802217ca3cbc3c276b879b9334a65c60f39404ccfc->leave($__internal_370efc7fcddc046bcf02f0802217ca3cbc3c276b879b9334a65c60f39404ccfc_prof);

        
        $__internal_12c91984b82a37c99770480001888bba8691991f0baa01817e503a23fc3ae642->leave($__internal_12c91984b82a37c99770480001888bba8691991f0baa01817e503a23fc3ae642_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_629f33eaa88ff07e615175282621e7ce46c23e6c3b9fe3ede3bb8c5b247b871a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_629f33eaa88ff07e615175282621e7ce46c23e6c3b9fe3ede3bb8c5b247b871a->enter($__internal_629f33eaa88ff07e615175282621e7ce46c23e6c3b9fe3ede3bb8c5b247b871a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f22d73a4e63701d9df2a64b1d11e7d6a1d3b4fc3f0840bc2951d898766997060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f22d73a4e63701d9df2a64b1d11e7d6a1d3b4fc3f0840bc2951d898766997060->enter($__internal_f22d73a4e63701d9df2a64b1d11e7d6a1d3b4fc3f0840bc2951d898766997060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <!-- Start Main -->
    <main>
        <div class=\"main-part\">
            <!-- Start Slider Part -->
            <section class=\"home-slider\">
                <div class=\"tp-banner-container\">
                    <div class=\"tp-banner\">
                        <ul>
                            <li data-transition=\"zoomout\" data-slotamount=\"2\" data-masterspeed=\"1000\" data-thumb=\"\" data-saveperformance=\"on\" data-title=\"Slide\">
                                <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/dummy.png"), "html", null, true);
        echo "\" alt=\"slidebg1\" data-lazyload=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/slider1.jpg"), "html", null, true);
        echo "\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\">
                                <!-- LAYERS -->
                                <div class=\"tp-caption very_large_text\" data-x=\"center\" data-hoffset=\"0\" data-y=\"250\" data-customin=\"x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;\" data-customout=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"1000\" data-start=\"500\" data-easing=\"Back.easeInOut\" data-endspeed=\"300\">WE’RE <span>LABOOM</span> <i>Restaurant</i>
                                </div>
                                <!-- LAYERS -->
                                <div class=\"tp-caption medium_text\" data-x=\"center\" data-hoffset=\"0\" data-y=\"340\" data-customin=\"x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;\" data-customout=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"1000\" data-start=\"500\" data-easing=\"Back.easeInOut\" data-endspeed=\"300\">Traditional Turkish Delicacies
                                </div>
                                <!-- LAYERS -->
                                <div class=\"tp-caption\" data-x=\"center\" data-hoffset=\"0\" data-y=\"425\" data-customin=\"x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;\" data-customout=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"1000\" data-start=\"500\" data-easing=\"Back.easeInOut\" data-endspeed=\"300\"><a href=\"#\" class=\"button-white\">Explore NOW</a>
                                </div>
                            </li>
                            <li data-transition=\"zoomout\" data-slotamount=\"2\" data-masterspeed=\"1000\" data-thumb=\"\" data-saveperformance=\"on\" data-title=\"Slide\">
                                <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/dummy.png"), "html", null, true);
        echo "\" alt=\"slidebg1\" data-lazyload=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/slider1.jpg"), "html", null, true);
        echo "\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\">
                                <!-- LAYERS -->
                                <div class=\"tp-caption very_large_text\" data-x=\"center\" data-hoffset=\"0\" data-y=\"250\" data-customin=\"x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;\" data-customout=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"1000\" data-start=\"500\" data-easing=\"Back.easeInOut\" data-endspeed=\"300\">WE’RE <span>LABOOM</span> <i>Restaurant</i>
                                </div>
                                <!-- LAYERS -->
                                <div class=\"tp-caption medium_text\" data-x=\"center\" data-hoffset=\"0\" data-y=\"340\" data-customin=\"x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;\" data-customout=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"1000\" data-start=\"500\" data-easing=\"Back.easeInOut\" data-endspeed=\"300\">Traditional Turkish Delicacies
                                </div>
                                <!-- LAYERS -->
                                <div class=\"tp-caption\" data-x=\"center\" data-hoffset=\"0\" data-y=\"425\" data-customin=\"x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;\" data-customout=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"1000\" data-start=\"500\" data-easing=\"Back.easeInOut\" data-endspeed=\"300\"><a href=\"#\" class=\"button-white\">Explore NOW</a>
                                </div>
                            </li>
                            <li data-transition=\"zoomout\" data-slotamount=\"2\" data-masterspeed=\"1000\" data-thumb=\"\" data-saveperformance=\"on\" data-title=\"Slide\">
                                <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/dummy.png"), "html", null, true);
        echo "\" alt=\"slidebg1\" data-lazyload=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/slider1.jpg"), "html", null, true);
        echo "\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\">
                                <!-- LAYERS -->
                                <div class=\"tp-caption very_large_text\" data-x=\"center\" data-hoffset=\"0\" data-y=\"250\" data-customin=\"x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;\" data-customout=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"1000\" data-start=\"500\" data-easing=\"Back.easeInOut\" data-endspeed=\"300\">WE’RE <span>LABOOM</span> <i>Restaurant</i>
                                </div>
                                <!-- LAYERS -->
                                <div class=\"tp-caption medium_text\" data-x=\"center\" data-hoffset=\"0\" data-y=\"340\" data-customin=\"x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;\" data-customout=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"1000\" data-start=\"500\" data-easing=\"Back.easeInOut\" data-endspeed=\"300\">Traditional Turkish Delicacies
                                </div>
                                <!-- LAYERS -->
                                <div class=\"tp-caption\" data-x=\"center\" data-hoffset=\"0\" data-y=\"425\" data-customin=\"x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;\" data-customout=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"1000\" data-start=\"500\" data-easing=\"Back.easeInOut\" data-endspeed=\"300\"><a href=\"#\" class=\"button-white\">Explore NOW</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- End Slider Part -->
            <!-- Start Welcome Part -->
            <section id=\"reach-to\" class=\"welcome-part home-icon\">
                <div class=\"icon-default\">
                    <a href=\"#reach-to\" class=\"scroll\"><img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/scroll-arrow.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                </div>
                <div class=\"container\">
                    <div class=\"build-title\">
                        <h2>Welcome To The La Boom</h2>
                        <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h6>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                            <p>Welcome. This is La Boom. Elegant &amp; sophisticated restaurant template. Royal plate offers different home page layouts with smart and unique design, showcasing beautifully designed elements every restaurant website should have. Smooth animations, fast loading and engaging user experience are just some of , the features this template offers. So, give it a try and dive into a world of La Boom restaurant websites.</p>
                            <p><img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/signature.png"), "html", null, true);
        echo "\" alt=\"\"></p>
                            <p><a href=\"#\" class=\"btn-black\">LEARN MORE</a></p>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12 wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                            <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/img2.png"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                    </div>
                </div>
                <div class=\"float-main\">
                    <div class=\"icon-top-left\">
                        <img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/icon1.png"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"icon-bottom-left\">
                        <img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/icon2.png"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"icon-top-right\">
                        <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/icon3.png"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"icon-bottom-right\">
                        <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/icon4.png"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                </div>
            </section>
            <!-- End Welcome Part -->
            <!-- Start Dishes Part -->
            <section class=\"dishes banner-bg invert invert-black home-icon wow fadeInDown\" data-background=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/banner1.jpg"), "html", null, true);
        echo "\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                <div class=\"icon-default icon-black\">
                    <img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/icon5.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <div class=\"container\">
                    <div class=\"build-title\">
                        <h2>Welcome To The La Boom</h2>
                        <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h6>
                    </div>
                    <div class=\"slider multiple-items\">
                        <div class=\"product-blog\">
                            <img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/product1.png"), "html", null, true);
        echo "\" alt=\"\">
                            <h3>Quattro Formaggi</h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                            <del>\$ 55.00</del><strong class=\"txt-default\">\$ 18.00</strong>
                        </div>
                        <div class=\"product-blog\">
                            <img src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/product2.png"), "html", null, true);
        echo "\" alt=\"\">
                            <h3>Vegetarian Pasta</h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                            <del>\$ 55.00</del><strong class=\"txt-default\">\$ 18.00</strong>
                        </div>
                        <div class=\"product-blog\">
                            <img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/product3.png"), "html", null, true);
        echo "\" alt=\"\">
                            <h3>Gluten-Free Pasta</h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                            <del>\$ 55.00</del><strong class=\"txt-default\">\$ 18.00</strong>
                        </div>
                        <div class=\"product-blog\">
                            <img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/product1.png"), "html", null, true);
        echo "\" alt=\"\">
                            <h3>Quattro Formaggi</h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                            <del>\$ 55.00</del><strong class=\"txt-default\">\$ 18.00</strong>
                        </div>
                        <div class=\"product-blog\">
                            <img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/product2.png"), "html", null, true);
        echo "\" alt=\"\">
                            <h3>Vegetarian Pasta</h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                            <del>\$ 55.00</del><strong class=\"txt-default\">\$ 18.00</strong>
                        </div>
                        <div class=\"product-blog\">
                            <img src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/product3.png"), "html", null, true);
        echo "\" alt=\"\">
                            <h3>Gluten-Free Pasta</h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                            <del>\$ 55.00</del><strong class=\"txt-default\">\$ 18.00</strong>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Dishes Part -->
            <!-- Start Menu Part -->
            <section class=\"special-menu bg-skeen home-icon wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                <div class=\"icon-default icon-skeen\">
                    <img src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/icon6.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <div class=\"container\">
                    <div class=\"build-title\">
                        <h2>Our Special Menu</h2>
                        <h6>The role of a good cook ware in the preparation of a sumptuous meal cannot be over emphasized then one consider white bread</h6>
                    </div>
                    <div class=\"menu-wrapper\">
                        <div class=\"portfolioFilter\">
                            <div class=\"portfolioFilter-inner\">
                                <a href=\"javascript:;\" data-filter=\"*\" class=\"current\">All</a>
                                <a href=\"javascript:;\" data-filter=\".breakfast\">BREAKFAST</a>
                                <a href=\"javascript:;\" data-filter=\".dessert\">DESSERT</a>
                                <a href=\"javascript:;\" data-filter=\".dinner\">DINNER</a>
                                <a href=\"javascript:;\" data-filter=\".freshfood\">FRESHFOOD</a>
                                <a href=\"javascript:;\" data-filter=\".lunch\">LUNCH</a>
                            </div>
                        </div>
                        <div class=\"portfolioContainer row\">
                            <div class=\"col-md-6 col-sm-6 col-xs-12 isotope-item breakfast\">
                                <div class=\"menu-list\">
                            <span class=\"menu-list-product\">
                                <img src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/img3.png"), "html", null, true);
        echo "\" alt=\"\">
                            </span>
                                    <h5>LASAL CHEESE <span>\$ 15.00</span></h5>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-6 col-xs-12 isotope-item lunch\">
                                <div class=\"menu-list\">
                            <span class=\"menu-list-product\">
                                <img src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/img4.png"), "html", null, true);
        echo "\" alt=\"\">
                            </span>
                                    <h5>JUMBO CARB SHRIMP <span>\$ 25.00</span></h5>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-6 col-xs-12 isotope-item dessert\">
                                <div class=\"menu-list\">
                            <span class=\"menu-list-product\">
                                <img src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/img5.png"), "html", null, true);
        echo "\" alt=\"\">
                            </span>
                                    <h5>SURMAI CHILLI <span>\$ 15.00</span></h5>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-6 col-xs-12 isotope-item dinner\">
                                <div class=\"menu-list\">
                            <span class=\"menu-list-product\">
                                <img src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/img6.png"), "html", null, true);
        echo "\" alt=\"\">
                            </span>
                                    <h5>CAPO STEAK <span>\$ 45.00</span></h5>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-6 col-xs-12 isotope-item freshfood\">
                                <div class=\"menu-list\">
                            <span class=\"menu-list-product\">
                                <img src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/img7.png"), "html", null, true);
        echo "\" alt=\"\">
                            </span>
                                    <h5>ORGANIC FRUIT SALAD <span>\$ 15.00</span></h5>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-6 col-xs-12 isotope-item freshfood\">
                                <div class=\"menu-list\">
                            <span class=\"menu-list-product\">
                                <img src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/img8.png"), "html", null, true);
        echo "\" alt=\"\">
                            </span>
                                    <h5>PRAWNS BUTTER GARLIC <span>\$ 15.00</span></h5>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"btn-outer\">
                            <a href=\"#\" class=\"btn-main btn-shadow\">Explore Full Menu</a>
                        </div>
                    </div>
                </div>
                <div class=\"float-main\">
                    <div class=\"icon-top-left\">
                        <img src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/icon7.png"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"icon-bottom-left\">
                        <img src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/icon8.png"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"icon-top-right\">
                        <img src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/icon9.png"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"icon-bottom-right\">
                        <img src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/icon10.png"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                </div>
            </section>
            <!-- End Menu Part -->
            <!-- Start Chef -->
            <section class=\"chef-part home-icon wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                <div class=\"icon-default\">
                    <img src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/icon11.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <div class=\"container\">
                    <div class=\"build-title\">
                        <h2>Our Awesome Chef</h2>
                        <h6>Meet Professional Cook Team</h6>
                    </div>
                    <div class=\"owl-carousel owl-theme chef-slider\" data-items=\"4\" data-laptop=\"3\" data-tablet=\"2\" data-mobile=\"1\" data-nav=\"true\" data-dots=\"false\" data-autoplay=\"true\" data-speed=\"1800\" data-autotime=\"5000\">
                        <div class=\"item\">
                            <div class=\"chef-blog\">
                                <div class=\"chef-inner\">
                                    <div class=\"chef-member\">
                                        <img src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/chef1.png"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"chef-info\">
                                        <h5>Anna Taylor</h5>
                                        <span>Head Chief</span>
                                        <div class=\"social-top\">
                                            <ul>
                                                <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-google\" aria-hidden=\"true\"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"chef-blog\">
                                <div class=\"chef-inner\">
                                    <div class=\"chef-member\">
                                        <img src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/chef2.png"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"chef-info\">
                                        <h5>Alex Wilson</h5>
                                        <span>Head Chief</span>
                                        <div class=\"social-top\">
                                            <ul>
                                                <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-google\" aria-hidden=\"true\"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"chef-blog\">
                                <div class=\"chef-inner\">
                                    <div class=\"chef-member\">
                                        <img src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/chef3.png"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"chef-info\">
                                        <h5>Anita Golden</h5>
                                        <span>Head Chief</span>
                                        <div class=\"social-top\">
                                            <ul>
                                                <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-google\" aria-hidden=\"true\"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"chef-blog\">
                                <div class=\"chef-inner\">
                                    <div class=\"chef-member\">
                                        <img src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/chef4.png"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"chef-info\">
                                        <h5>Benderd Dimitor</h5>
                                        <span>Head Chief</span>
                                        <div class=\"social-top\">
                                            <ul>
                                                <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-google\" aria-hidden=\"true\"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"chef-blog\">
                                <div class=\"chef-inner\">
                                    <div class=\"chef-member\">
                                        <img src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/chef1.png"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"chef-info\">
                                        <h5>Anna Taylor</h5>
                                        <span>Head Chief</span>
                                        <div class=\"social-top\">
                                            <ul>
                                                <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-google\" aria-hidden=\"true\"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"chef-blog\">
                                <div class=\"chef-inner\">
                                    <div class=\"chef-member\">
                                        <img src=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/chef2.png"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"chef-info\">
                                        <h5>Alex Wilson</h5>
                                        <span>Head Chief</span>
                                        <div class=\"social-top\">
                                            <ul>
                                                <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-google\" aria-hidden=\"true\"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"chef-blog\">
                                <div class=\"chef-inner\">
                                    <div class=\"chef-member\">
                                        <img src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/chef3.png"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"chef-info\">
                                        <h5>Anita Golden</h5>
                                        <span>Head Chief</span>
                                        <div class=\"social-top\">
                                            <ul>
                                                <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-google\" aria-hidden=\"true\"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"chef-blog\">
                                <div class=\"chef-inner\">
                                    <div class=\"chef-member\">
                                        <img src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/chef4.png"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"chef-info\">
                                        <h5>Benderd Dimitor</h5>
                                        <span>Head Chief</span>
                                        <div class=\"social-top\">
                                            <ul>
                                                <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-google\" aria-hidden=\"true\"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"float-main\">
                    <div class=\"icon-top-left\">
                        <img src=\"";
        // line 439
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/icon12.png"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"icon-bottom-left\">
                        <img src=\"";
        // line 442
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/icon13.png"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"icon-top-right\">
                        <img src=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/icon14.png"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                </div>
            </section>
            <!-- End Chef -->
            <!-- Start Food Hours -->
            <section class=\"food-hours home-icon wow fadeInDown\" data-stellar-offset-parent=\"true\" data-stellar-background-ratio=\"0.5\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\" style=\"background-image: url('";
        // line 451
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/banner2.jpg"), "html", null, true);
        echo "');\">
                <div class=\"icon-default icon-gold\">
                    <img src=\"";
        // line 453
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/icon19.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <div class=\"container\">
                    <div class=\"food-blog\">
                        <div class=\"row\">
                            <div class=\"col-md-3 col-sm-3 col-xs-12 food-mxs\">
                                <div class=\"food-blog-inner\">
                                    <div class=\"food-item\">
                                        <div class=\"food-item-inner\">
                                            <img src=\"";
        // line 462
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/icon15.png"), "html", null, true);
        echo "\" alt=\"\">
                                        </div>
                                    </div>
                                    <h2>Breakfast</h2>
                                    <span>8.00 am 10.00 am</span>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-3 col-xs-12 food-mxs\">
                                <div class=\"food-blog-inner\">
                                    <div class=\"food-item\">
                                        <div class=\"food-item-inner\">
                                            <img src=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/icon16.png"), "html", null, true);
        echo "\" alt=\"\">
                                        </div>
                                    </div>
                                    <h2>Lunch</h2>
                                    <span>1.00 am 2.00 am</span>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-3 col-xs-12 food-mxs\">
                                <div class=\"food-blog-inner\">
                                    <div class=\"food-item\">
                                        <div class=\"food-item-inner\">
                                            <img src=\"";
        // line 484
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/icon17.png"), "html", null, true);
        echo "\" alt=\"\">
                                        </div>
                                    </div>
                                    <h2>Dinner</h2>
                                    <span>7.00 am 9.00 am</span>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-3 col-xs-12 food-mxs\">
                                <div class=\"food-blog-inner\">
                                    <div class=\"food-item\">
                                        <div class=\"food-item-inner\">
                                            <img src=\"";
        // line 495
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/icon18.png"), "html", null, true);
        echo "\" alt=\"\">
                                        </div>
                                    </div>
                                    <h2>Dessert</h2>
                                    <span>All Day</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Food Hours -->
            <!-- Start Feature Blog -->
            <section class=\"feature-blog-wrap bg-skeen home-icon wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                <div class=\"icon-default icon-skeen\">
                    <img src=\"";
        // line 510
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/icon20.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <div class=\"container\">
                    <div class=\"build-title\">
                        <h2>Feature Blog</h2>
                        <h6>Read Latest Delicious Posts And News</h6>
                    </div>
                    <div class=\"feature-blog\">
                        <div class=\"owl-carousel owl-theme\" data-items=\"3\" data-laptop=\"3\" data-tablet=\"2\" data-mobile=\"1\" data-nav=\"true\" data-dots=\"false\" data-autoplay=\"true\" data-speed=\"1800\" data-autotime=\"5000\">
                            <div class=\"item\">
                                <div class=\"feature-img\">
                                    <img src=\"";
        // line 521
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/feature1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    <div class=\"date-feature\">27
                                        <br> <small>may</small></div>
                                </div>
                                <div class=\"feature-info\">
                                    <span><i class=\"icon-user\"></i> By Ali TUFAN</span>
                                    <span><i class=\"icon-comment\"></i> 5 Comments</span>
                                    <h5>Easy Sparkling Sangria</h5>
                                    <p>Aptent taciti sociosqu ad litora euismod atras vulputate iltricies etri elit class.</p>
                                    <a href=\"#\">Read More <i class=\"icon-more\"></i></a>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"feature-img\">
                                    <img src=\"";
        // line 535
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/feature2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    <div class=\"date-feature\">27
                                        <br> <small>may</small></div>
                                </div>
                                <div class=\"feature-info\">
                                    <span><i class=\"icon-user\"></i> By Ali TUFAN</span>
                                    <span><i class=\"icon-comment\"></i> 5 Comments</span>
                                    <h5>Disclosue - Real food here</h5>
                                    <p>Aptent taciti sociosqu ad litora euismod atras vulputate iltricies etri elit class.</p>
                                    <a href=\"#\">Read More <i class=\"icon-more\"></i></a>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"feature-img\">
                                    <img src=\"";
        // line 549
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/feature3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    <div class=\"date-feature\">27
                                        <br> <small>may</small></div>
                                </div>
                                <div class=\"feature-info\">
                                    <span><i class=\"icon-user\"></i> By Ali TUFAN</span>
                                    <span><i class=\"icon-comment\"></i> 5 Comments</span>
                                    <h5>The Best Drink on Market</h5>
                                    <p>Aptent taciti sociosqu ad litora euismod atras vulputate iltricies etri elit class.</p>
                                    <a href=\"#\">Read More <i class=\"icon-more\"></i></a>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"feature-img\">
                                    <img src=\"";
        // line 563
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/feature1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    <div class=\"date-feature\">27
                                        <br> <small>may</small></div>
                                </div>
                                <div class=\"feature-info\">
                                    <span><i class=\"icon-user\"></i> By Ali TUFAN</span>
                                    <span><i class=\"icon-comment\"></i> 5 Comments</span>
                                    <h5>Easy Sparkling Sangria</h5>
                                    <p>Aptent taciti sociosqu ad litora euismod atras vulputate iltricies etri elit class.</p>
                                    <a href=\"#\">Read More <i class=\"icon-more\"></i></a>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"feature-img\">
                                    <img src=\"";
        // line 577
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/feature2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    <div class=\"date-feature\">27
                                        <br> <small>may</small></div>
                                </div>
                                <div class=\"feature-info\">
                                    <span><i class=\"icon-user\"></i> By Ali TUFAN</span>
                                    <span><i class=\"icon-comment\"></i> 5 Comments</span>
                                    <h5>Disclosue - Real food here</h5>
                                    <p>Aptent taciti sociosqu ad litora euismod atras vulputate iltricies etri elit class.</p>
                                    <a href=\"#\">Read More <i class=\"icon-more\"></i></a>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"feature-img\">
                                    <img src=\"";
        // line 591
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/feature3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    <div class=\"date-feature\">27
                                        <br> <small>may</small></div>
                                </div>
                                <div class=\"feature-info\">
                                    <span><i class=\"icon-user\"></i> By Ali TUFAN</span>
                                    <span><i class=\"icon-comment\"></i> 5 Comments</span>
                                    <h5>The Best Drink on Market</h5>
                                    <p>Aptent taciti sociosqu ad litora euismod atras vulputate iltricies etri elit class.</p>
                                    <a href=\"#\">Read More <i class=\"icon-more\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Feature Blog -->
            <!-- Start Client Say -->
            <section class=\"client banner-bg invert invert-black home-icon wow fadeInDown\" data-background=\"";
        // line 609
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/banner3.jpg"), "html", null, true);
        echo "\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                <div class=\"icon-default icon-black\">
                    <img src=\"";
        // line 611
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/icon21.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <div class=\"container\">
                    <div class=\"build-title\">
                        <h2>What Clients Say</h2>
                        <h6>1500+ Satisfied Clients</h6>
                    </div>
                    <div class=\"client-say\">
                        <div class=\"owl-carousel owl-theme\" data-items=\"1\" data-laptop=\"1\" data-tablet=\"1\" data-mobile=\"1\" data-nav=\"false\" data-dots=\"true\" data-autoplay=\"true\" data-speed=\"1800\" data-autotime=\"5000\">
                            <div class=\"item\">
                                <p><img src=\"";
        // line 621
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/client1.png"), "html", null, true);
        echo "\" alt=\"\"></p>
                                <h5>Alice Williams</h5>
                                <p>Kitchen Manager</p>
                                <p>Success isn’t really that difficult. There is a significant portion of the
                                    <br> population here in North America, that actually want and need
                                    <br>success really no magic to be hard.</p>
                            </div>
                            <div class=\"item\">
                                <p><img src=\"";
        // line 629
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/client1.png"), "html", null, true);
        echo "\" alt=\"\"></p>
                                <h5>Alice Williams</h5>
                                <p>Kitchen Manager</p>
                                <p>Success isn’t really that difficult. There is a significant portion of the
                                    <br> population here in North America, that actually want and need
                                    <br>success really no magic to be hard.</p>
                            </div>
                            <div class=\"item\">
                                <p><img src=\"";
        // line 637
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/client1.png"), "html", null, true);
        echo "\" alt=\"\"></p>
                                <h5>Alice Williams</h5>
                                <p>Kitchen Manager</p>
                                <p>Success isn’t really that difficult. There is a significant portion of the
                                    <br> population here in North America, that actually want and need
                                    <br>success really no magic to be hard.</p>
                            </div>
                            <div class=\"item\">
                                <p><img src=\"";
        // line 645
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/client1.png"), "html", null, true);
        echo "\" alt=\"\"></p>
                                <h5>Alice Williams</h5>
                                <p>Kitchen Manager</p>
                                <p>Success isn’t really that difficult. There is a significant portion of the
                                    <br> population here in North America, that actually want and need
                                    <br>success really no magic to be hard.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Client Say -->
            <!-- Start Feature list -->
            <section class=\"bg-skeen feature-list text-center home-icon wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                <div class=\"icon-default icon-skeen\">
                    <img src=\"";
        // line 660
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/icon22.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <div class=\"container\">
                    <div class=\"build-title\">
                        <h2>Our Some Feature</h2>
                        <h6>The role of a good cook ware in the preparation of a sumptuous meal cannot be <br> over emphasized then one consider white bread</h6>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                            <div class=\"feature-list-icon\">
                                <div class=\"feature-icon-table\">
                                    <img src=\"";
        // line 671
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/img9.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                            </div>
                            <h5>Fresh Dishes</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-</p>
                        </div>
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                            <div class=\"feature-list-icon\">
                                <div class=\"feature-icon-table\">
                                    <img src=\"";
        // line 680
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/img10.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                            </div>
                            <h5>Various Menu</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-</p>
                        </div>
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                            <div class=\"feature-list-icon\">
                                <div class=\"feature-icon-table\">
                                    <img src=\"";
        // line 689
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/img11.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                            </div>
                            <h5>Well Service</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-</p>
                        </div>
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                            <div class=\"feature-list-icon\">
                                <div class=\"feature-icon-table\">
                                    <img src=\"";
        // line 698
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/img12.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                            </div>
                            <h5>Fast Delivery</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Feature list -->
            <!-- Start Instagram -->
            <section class=\"instagram-main home-icon wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                <div class=\"icon-default\">
                    <img src=\"";
        // line 711
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/icon23.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <div class=\"container\">
                    <div class=\"build-title\">
                        <h2>#laboom</h2>
                        <h6>Enjoyed your stay at La Boom? Share your moments with us. Follow us on Instagram and use</h6>
                    </div>
                </div>
                <div class=\"gallery-slider\">
                    <div class=\"owl-carousel owl-theme\" data-items=\"6\" data-laptop=\"5\" data-tablet=\"4\" data-mobile=\"1\" data-nav=\"true\" data-dots=\"false\" data-autoplay=\"true\" data-speed=\"2000\" data-autotime=\"3000\">
                        <div class=\"item\">
                            <a href=\"";
        // line 722
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/gallery/gallery-big1.png"), "html", null, true);
        echo "\"  class=\"magnific-popup\">
                                <img src=\"";
        // line 723
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/gallery/gallery1.png"), "html", null, true);
        echo "\" alt=\"\" class=\"animated\">
                                <div class=\"gallery-overlay\">
                                    <div class=\"gallery-overlay-inner\">
                                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=\"item\">
                            <a href=\"";
        // line 732
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/gallery/gallery-big2.png"), "html", null, true);
        echo "\"  class=\"magnific-popup\">
                                <img src=\"";
        // line 733
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/gallery/gallery2.png"), "html", null, true);
        echo "\" alt=\"\" class=\"animated\">
                                <div class=\"gallery-overlay\">
                                    <div class=\"gallery-overlay-inner\">
                                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=\"item\">
                            <a href=\"";
        // line 742
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/gallery/gallery-big3.png"), "html", null, true);
        echo "\"  class=\"magnific-popup\">
                                <img src=\"";
        // line 743
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/gallery/gallery3.png"), "html", null, true);
        echo "\" alt=\"\" class=\"animated\">
                                <div class=\"gallery-overlay\">
                                    <div class=\"gallery-overlay-inner\">
                                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=\"item\">
                            <a href=\"";
        // line 752
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/gallery/gallery-big4.png"), "html", null, true);
        echo "\"  class=\"magnific-popup\">
                                <img src=\"";
        // line 753
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/gallery/gallery4.png"), "html", null, true);
        echo "\" alt=\"\" class=\"animated\">
                                <div class=\"gallery-overlay\">
                                    <div class=\"gallery-overlay-inner\">
                                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=\"item\">
                            <a href=\"";
        // line 762
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/gallery/gallery-big5.png"), "html", null, true);
        echo "\"  class=\"magnific-popup\">
                                <img src=\"";
        // line 763
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/gallery/gallery5.png"), "html", null, true);
        echo "\" alt=\"\" class=\"animated\">
                                <div class=\"gallery-overlay\">
                                    <div class=\"gallery-overlay-inner\">
                                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=\"item\">
                            <a href=\"";
        // line 772
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/gallery/gallery-big6.png"), "html", null, true);
        echo "\"  class=\"magnific-popup\">
                                <img src=\"";
        // line 773
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/gallery/gallery6.png"), "html", null, true);
        echo "\" alt=\"\" class=\"animated\">
                                <div class=\"gallery-overlay\">
                                    <div class=\"gallery-overlay-inner\">
                                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=\"item\">
                            <a href=\"";
        // line 782
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/gallery/gallery-big1.png"), "html", null, true);
        echo "\"  class=\"magnific-popup\">
                                <img src=\"";
        // line 783
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/gallery/gallery1.png"), "html", null, true);
        echo "\" alt=\"\" class=\"animated\">
                                <div class=\"gallery-overlay\">
                                    <div class=\"gallery-overlay-inner\">
                                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=\"item\">
                            <a href=\"";
        // line 792
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/gallery/gallery-big2.png"), "html", null, true);
        echo "\"  class=\"magnific-popup\">
                                <img src=\"";
        // line 793
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/gallery/gallery2.png"), "html", null, true);
        echo "\" alt=\"\" class=\"animated\">
                                <div class=\"gallery-overlay\">
                                    <div class=\"gallery-overlay-inner\">
                                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=\"item\">
                            <a href=\"";
        // line 802
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/gallery/gallery-big3.png"), "html", null, true);
        echo "\"  class=\"magnific-popup\">
                                <img src=\"";
        // line 803
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/gallery/gallery3.png"), "html", null, true);
        echo "\" alt=\"\" class=\"animated\">
                                <div class=\"gallery-overlay\">
                                    <div class=\"gallery-overlay-inner\">
                                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=\"item\">
                            <a href=\"";
        // line 812
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodvimages/gallery/gallery-big4.png"), "html", null, true);
        echo "\"  class=\"magnific-popup\">
                                <img src=\"";
        // line 813
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/gallery/gallery4.png"), "html", null, true);
        echo "\" alt=\"\" class=\"animated\">
                                <div class=\"gallery-overlay\">
                                    <div class=\"gallery-overlay-inner\">
                                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=\"item\">
                            <a href=\"";
        // line 822
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/gallery/gallery-big5.png"), "html", null, true);
        echo "\"  class=\"magnific-popup\">
                                <img src=\"";
        // line 823
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/gallery/gallery5.png"), "html", null, true);
        echo "\" alt=\"\" class=\"animated\">
                                <div class=\"gallery-overlay\">
                                    <div class=\"gallery-overlay-inner\">
                                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=\"item\">
                            <a href=\"";
        // line 832
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/gallery/gallery-big6.png"), "html", null, true);
        echo "\"  class=\"magnific-popup\">
                                <img src=\"";
        // line 833
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Foodimages/gallery/gallery6.png"), "html", null, true);
        echo "\" alt=\"\" class=\"animated\">
                                <div class=\"gallery-overlay\">
                                    <div class=\"gallery-overlay-inner\">
                                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Instagram -->
        </div>
    </main>
    <!-- End Main -->
";
        
        $__internal_f22d73a4e63701d9df2a64b1d11e7d6a1d3b4fc3f0840bc2951d898766997060->leave($__internal_f22d73a4e63701d9df2a64b1d11e7d6a1d3b4fc3f0840bc2951d898766997060_prof);

        
        $__internal_629f33eaa88ff07e615175282621e7ce46c23e6c3b9fe3ede3bb8c5b247b871a->leave($__internal_629f33eaa88ff07e615175282621e7ce46c23e6c3b9fe3ede3bb8c5b247b871a_prof);

    }

    public function getTemplateName()
    {
        return "FrontEndBundle:Restaurent:RestaurentAccueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1152 => 833,  1148 => 832,  1136 => 823,  1132 => 822,  1120 => 813,  1116 => 812,  1104 => 803,  1100 => 802,  1088 => 793,  1084 => 792,  1072 => 783,  1068 => 782,  1056 => 773,  1052 => 772,  1040 => 763,  1036 => 762,  1024 => 753,  1020 => 752,  1008 => 743,  1004 => 742,  992 => 733,  988 => 732,  976 => 723,  972 => 722,  958 => 711,  942 => 698,  930 => 689,  918 => 680,  906 => 671,  892 => 660,  874 => 645,  863 => 637,  852 => 629,  841 => 621,  828 => 611,  823 => 609,  802 => 591,  785 => 577,  768 => 563,  751 => 549,  734 => 535,  717 => 521,  703 => 510,  685 => 495,  671 => 484,  657 => 473,  643 => 462,  631 => 453,  626 => 451,  617 => 445,  611 => 442,  605 => 439,  579 => 416,  553 => 393,  527 => 370,  501 => 347,  475 => 324,  449 => 301,  423 => 278,  397 => 255,  382 => 243,  371 => 235,  365 => 232,  359 => 229,  353 => 226,  336 => 212,  324 => 203,  312 => 194,  300 => 185,  288 => 176,  276 => 167,  251 => 145,  236 => 133,  227 => 127,  218 => 121,  209 => 115,  200 => 109,  191 => 103,  179 => 94,  174 => 92,  165 => 86,  159 => 83,  153 => 80,  147 => 77,  138 => 71,  131 => 67,  118 => 57,  94 => 38,  77 => 26,  60 => 14,  49 => 5,  40 => 4,  11 => 1,);
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
            <!-- Start Slider Part -->
            <section class=\"home-slider\">
                <div class=\"tp-banner-container\">
                    <div class=\"tp-banner\">
                        <ul>
                            <li data-transition=\"zoomout\" data-slotamount=\"2\" data-masterspeed=\"1000\" data-thumb=\"\" data-saveperformance=\"on\" data-title=\"Slide\">
                                <img src=\"{{ asset('FrontEnd/Foodimages/dummy.png') }}\" alt=\"slidebg1\" data-lazyload=\"{{ asset('FrontEnd/Foodimages/slider1.jpg') }}\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\">
                                <!-- LAYERS -->
                                <div class=\"tp-caption very_large_text\" data-x=\"center\" data-hoffset=\"0\" data-y=\"250\" data-customin=\"x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;\" data-customout=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"1000\" data-start=\"500\" data-easing=\"Back.easeInOut\" data-endspeed=\"300\">WE’RE <span>LABOOM</span> <i>Restaurant</i>
                                </div>
                                <!-- LAYERS -->
                                <div class=\"tp-caption medium_text\" data-x=\"center\" data-hoffset=\"0\" data-y=\"340\" data-customin=\"x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;\" data-customout=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"1000\" data-start=\"500\" data-easing=\"Back.easeInOut\" data-endspeed=\"300\">Traditional Turkish Delicacies
                                </div>
                                <!-- LAYERS -->
                                <div class=\"tp-caption\" data-x=\"center\" data-hoffset=\"0\" data-y=\"425\" data-customin=\"x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;\" data-customout=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"1000\" data-start=\"500\" data-easing=\"Back.easeInOut\" data-endspeed=\"300\"><a href=\"#\" class=\"button-white\">Explore NOW</a>
                                </div>
                            </li>
                            <li data-transition=\"zoomout\" data-slotamount=\"2\" data-masterspeed=\"1000\" data-thumb=\"\" data-saveperformance=\"on\" data-title=\"Slide\">
                                <img src=\"{{ asset('FrontEnd/Foodimages/dummy.png') }}\" alt=\"slidebg1\" data-lazyload=\"{{ asset('FrontEnd/Foodimages/slider1.jpg') }}\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\">
                                <!-- LAYERS -->
                                <div class=\"tp-caption very_large_text\" data-x=\"center\" data-hoffset=\"0\" data-y=\"250\" data-customin=\"x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;\" data-customout=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"1000\" data-start=\"500\" data-easing=\"Back.easeInOut\" data-endspeed=\"300\">WE’RE <span>LABOOM</span> <i>Restaurant</i>
                                </div>
                                <!-- LAYERS -->
                                <div class=\"tp-caption medium_text\" data-x=\"center\" data-hoffset=\"0\" data-y=\"340\" data-customin=\"x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;\" data-customout=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"1000\" data-start=\"500\" data-easing=\"Back.easeInOut\" data-endspeed=\"300\">Traditional Turkish Delicacies
                                </div>
                                <!-- LAYERS -->
                                <div class=\"tp-caption\" data-x=\"center\" data-hoffset=\"0\" data-y=\"425\" data-customin=\"x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;\" data-customout=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"1000\" data-start=\"500\" data-easing=\"Back.easeInOut\" data-endspeed=\"300\"><a href=\"#\" class=\"button-white\">Explore NOW</a>
                                </div>
                            </li>
                            <li data-transition=\"zoomout\" data-slotamount=\"2\" data-masterspeed=\"1000\" data-thumb=\"\" data-saveperformance=\"on\" data-title=\"Slide\">
                                <img src=\"{{ asset('FrontEnd/Foodimages/dummy.png') }}\" alt=\"slidebg1\" data-lazyload=\"{{ asset('FrontEnd/Foodimages/slider1.jpg') }}\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\">
                                <!-- LAYERS -->
                                <div class=\"tp-caption very_large_text\" data-x=\"center\" data-hoffset=\"0\" data-y=\"250\" data-customin=\"x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;\" data-customout=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"1000\" data-start=\"500\" data-easing=\"Back.easeInOut\" data-endspeed=\"300\">WE’RE <span>LABOOM</span> <i>Restaurant</i>
                                </div>
                                <!-- LAYERS -->
                                <div class=\"tp-caption medium_text\" data-x=\"center\" data-hoffset=\"0\" data-y=\"340\" data-customin=\"x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;\" data-customout=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"1000\" data-start=\"500\" data-easing=\"Back.easeInOut\" data-endspeed=\"300\">Traditional Turkish Delicacies
                                </div>
                                <!-- LAYERS -->
                                <div class=\"tp-caption\" data-x=\"center\" data-hoffset=\"0\" data-y=\"425\" data-customin=\"x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;\" data-customout=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"1000\" data-start=\"500\" data-easing=\"Back.easeInOut\" data-endspeed=\"300\"><a href=\"#\" class=\"button-white\">Explore NOW</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- End Slider Part -->
            <!-- Start Welcome Part -->
            <section id=\"reach-to\" class=\"welcome-part home-icon\">
                <div class=\"icon-default\">
                    <a href=\"#reach-to\" class=\"scroll\"><img src=\"{{ asset('FrontEnd/Foodimages/scroll-arrow.png') }}\" alt=\"\"></a>
                </div>
                <div class=\"container\">
                    <div class=\"build-title\">
                        <h2>Welcome To The La Boom</h2>
                        <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h6>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                            <p>Welcome. This is La Boom. Elegant &amp; sophisticated restaurant template. Royal plate offers different home page layouts with smart and unique design, showcasing beautifully designed elements every restaurant website should have. Smooth animations, fast loading and engaging user experience are just some of , the features this template offers. So, give it a try and dive into a world of La Boom restaurant websites.</p>
                            <p><img src=\"{{ asset('FrontEnd/Foodimages/signature.png') }}\" alt=\"\"></p>
                            <p><a href=\"#\" class=\"btn-black\">LEARN MORE</a></p>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12 wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                            <img src=\"{{ asset('FrontEnd/Foodimages/img2.png') }}\" alt=\"\">
                        </div>
                    </div>
                </div>
                <div class=\"float-main\">
                    <div class=\"icon-top-left\">
                        <img src=\"{{ asset('FrontEnd/Foodimages/icon1.png') }}\" alt=\"\">
                    </div>
                    <div class=\"icon-bottom-left\">
                        <img src=\"{{ asset('FrontEnd/Foodimages/icon2.png') }}\" alt=\"\">
                    </div>
                    <div class=\"icon-top-right\">
                        <img src=\"{{ asset('FrontEnd/Foodimages/icon3.png') }}\" alt=\"\">
                    </div>
                    <div class=\"icon-bottom-right\">
                        <img src=\"{{ asset('FrontEnd/Foodimages/icon4.png') }}\" alt=\"\">
                    </div>
                </div>
            </section>
            <!-- End Welcome Part -->
            <!-- Start Dishes Part -->
            <section class=\"dishes banner-bg invert invert-black home-icon wow fadeInDown\" data-background=\"{{ asset('FrontEnd/Foodimages/banner1.jpg') }}\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                <div class=\"icon-default icon-black\">
                    <img src=\"{{ asset('FrontEnd/Foodimages/icon5.png') }}\" alt=\"\">
                </div>
                <div class=\"container\">
                    <div class=\"build-title\">
                        <h2>Welcome To The La Boom</h2>
                        <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h6>
                    </div>
                    <div class=\"slider multiple-items\">
                        <div class=\"product-blog\">
                            <img src=\"{{ asset('FrontEnd/Foodimages/product1.png') }}\" alt=\"\">
                            <h3>Quattro Formaggi</h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                            <del>\$ 55.00</del><strong class=\"txt-default\">\$ 18.00</strong>
                        </div>
                        <div class=\"product-blog\">
                            <img src=\"{{ asset('FrontEnd/Foodimages/product2.png') }}\" alt=\"\">
                            <h3>Vegetarian Pasta</h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                            <del>\$ 55.00</del><strong class=\"txt-default\">\$ 18.00</strong>
                        </div>
                        <div class=\"product-blog\">
                            <img src=\"{{ asset('FrontEnd/Foodimages/product3.png') }}\" alt=\"\">
                            <h3>Gluten-Free Pasta</h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                            <del>\$ 55.00</del><strong class=\"txt-default\">\$ 18.00</strong>
                        </div>
                        <div class=\"product-blog\">
                            <img src=\"{{ asset('FrontEnd/Foodimages/product1.png') }}\" alt=\"\">
                            <h3>Quattro Formaggi</h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                            <del>\$ 55.00</del><strong class=\"txt-default\">\$ 18.00</strong>
                        </div>
                        <div class=\"product-blog\">
                            <img src=\"{{ asset('FrontEnd/Foodimages/product2.png') }}\" alt=\"\">
                            <h3>Vegetarian Pasta</h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                            <del>\$ 55.00</del><strong class=\"txt-default\">\$ 18.00</strong>
                        </div>
                        <div class=\"product-blog\">
                            <img src=\"{{ asset('FrontEnd/Foodimages/product3.png') }}\" alt=\"\">
                            <h3>Gluten-Free Pasta</h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                            <del>\$ 55.00</del><strong class=\"txt-default\">\$ 18.00</strong>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Dishes Part -->
            <!-- Start Menu Part -->
            <section class=\"special-menu bg-skeen home-icon wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                <div class=\"icon-default icon-skeen\">
                    <img src=\"{{ asset('FrontEnd/Foodimages/icon6.png') }}\" alt=\"\">
                </div>
                <div class=\"container\">
                    <div class=\"build-title\">
                        <h2>Our Special Menu</h2>
                        <h6>The role of a good cook ware in the preparation of a sumptuous meal cannot be over emphasized then one consider white bread</h6>
                    </div>
                    <div class=\"menu-wrapper\">
                        <div class=\"portfolioFilter\">
                            <div class=\"portfolioFilter-inner\">
                                <a href=\"javascript:;\" data-filter=\"*\" class=\"current\">All</a>
                                <a href=\"javascript:;\" data-filter=\".breakfast\">BREAKFAST</a>
                                <a href=\"javascript:;\" data-filter=\".dessert\">DESSERT</a>
                                <a href=\"javascript:;\" data-filter=\".dinner\">DINNER</a>
                                <a href=\"javascript:;\" data-filter=\".freshfood\">FRESHFOOD</a>
                                <a href=\"javascript:;\" data-filter=\".lunch\">LUNCH</a>
                            </div>
                        </div>
                        <div class=\"portfolioContainer row\">
                            <div class=\"col-md-6 col-sm-6 col-xs-12 isotope-item breakfast\">
                                <div class=\"menu-list\">
                            <span class=\"menu-list-product\">
                                <img src=\"{{ asset('FrontEnd/Foodimages/img3.png') }}\" alt=\"\">
                            </span>
                                    <h5>LASAL CHEESE <span>\$ 15.00</span></h5>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-6 col-xs-12 isotope-item lunch\">
                                <div class=\"menu-list\">
                            <span class=\"menu-list-product\">
                                <img src=\"{{ asset('FrontEnd/Foodimages/img4.png') }}\" alt=\"\">
                            </span>
                                    <h5>JUMBO CARB SHRIMP <span>\$ 25.00</span></h5>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-6 col-xs-12 isotope-item dessert\">
                                <div class=\"menu-list\">
                            <span class=\"menu-list-product\">
                                <img src=\"{{ asset('FrontEnd/Foodimages/img5.png') }}\" alt=\"\">
                            </span>
                                    <h5>SURMAI CHILLI <span>\$ 15.00</span></h5>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-6 col-xs-12 isotope-item dinner\">
                                <div class=\"menu-list\">
                            <span class=\"menu-list-product\">
                                <img src=\"{{ asset('FrontEnd/Foodimages/img6.png') }}\" alt=\"\">
                            </span>
                                    <h5>CAPO STEAK <span>\$ 45.00</span></h5>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-6 col-xs-12 isotope-item freshfood\">
                                <div class=\"menu-list\">
                            <span class=\"menu-list-product\">
                                <img src=\"{{ asset('FrontEnd/Foodimages/img7.png') }}\" alt=\"\">
                            </span>
                                    <h5>ORGANIC FRUIT SALAD <span>\$ 15.00</span></h5>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-6 col-xs-12 isotope-item freshfood\">
                                <div class=\"menu-list\">
                            <span class=\"menu-list-product\">
                                <img src=\"{{ asset('FrontEnd/Foodimages/img8.png') }}\" alt=\"\">
                            </span>
                                    <h5>PRAWNS BUTTER GARLIC <span>\$ 15.00</span></h5>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"btn-outer\">
                            <a href=\"#\" class=\"btn-main btn-shadow\">Explore Full Menu</a>
                        </div>
                    </div>
                </div>
                <div class=\"float-main\">
                    <div class=\"icon-top-left\">
                        <img src=\"{{ asset('FrontEnd/Foodimages/icon7.png') }}\" alt=\"\">
                    </div>
                    <div class=\"icon-bottom-left\">
                        <img src=\"{{ asset('FrontEnd/Foodimages/icon8.png') }}\" alt=\"\">
                    </div>
                    <div class=\"icon-top-right\">
                        <img src=\"{{ asset('FrontEnd/Foodimages/icon9.png') }}\" alt=\"\">
                    </div>
                    <div class=\"icon-bottom-right\">
                        <img src=\"{{ asset('FrontEnd/Foodimages/icon10.png') }}\" alt=\"\">
                    </div>
                </div>
            </section>
            <!-- End Menu Part -->
            <!-- Start Chef -->
            <section class=\"chef-part home-icon wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                <div class=\"icon-default\">
                    <img src=\"{{ asset('FrontEnd/Foodimages/icon11.png') }}\" alt=\"\">
                </div>
                <div class=\"container\">
                    <div class=\"build-title\">
                        <h2>Our Awesome Chef</h2>
                        <h6>Meet Professional Cook Team</h6>
                    </div>
                    <div class=\"owl-carousel owl-theme chef-slider\" data-items=\"4\" data-laptop=\"3\" data-tablet=\"2\" data-mobile=\"1\" data-nav=\"true\" data-dots=\"false\" data-autoplay=\"true\" data-speed=\"1800\" data-autotime=\"5000\">
                        <div class=\"item\">
                            <div class=\"chef-blog\">
                                <div class=\"chef-inner\">
                                    <div class=\"chef-member\">
                                        <img src=\"{{ asset('FrontEnd/Foodimages/chef1.png') }}\" alt=\"\">
                                    </div>
                                    <div class=\"chef-info\">
                                        <h5>Anna Taylor</h5>
                                        <span>Head Chief</span>
                                        <div class=\"social-top\">
                                            <ul>
                                                <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-google\" aria-hidden=\"true\"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"chef-blog\">
                                <div class=\"chef-inner\">
                                    <div class=\"chef-member\">
                                        <img src=\"{{ asset('FrontEnd/Foodimages/chef2.png') }}\" alt=\"\">
                                    </div>
                                    <div class=\"chef-info\">
                                        <h5>Alex Wilson</h5>
                                        <span>Head Chief</span>
                                        <div class=\"social-top\">
                                            <ul>
                                                <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-google\" aria-hidden=\"true\"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"chef-blog\">
                                <div class=\"chef-inner\">
                                    <div class=\"chef-member\">
                                        <img src=\"{{ asset('FrontEnd/Foodimages/chef3.png') }}\" alt=\"\">
                                    </div>
                                    <div class=\"chef-info\">
                                        <h5>Anita Golden</h5>
                                        <span>Head Chief</span>
                                        <div class=\"social-top\">
                                            <ul>
                                                <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-google\" aria-hidden=\"true\"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"chef-blog\">
                                <div class=\"chef-inner\">
                                    <div class=\"chef-member\">
                                        <img src=\"{{ asset('FrontEnd/Foodimages/chef4.png') }}\" alt=\"\">
                                    </div>
                                    <div class=\"chef-info\">
                                        <h5>Benderd Dimitor</h5>
                                        <span>Head Chief</span>
                                        <div class=\"social-top\">
                                            <ul>
                                                <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-google\" aria-hidden=\"true\"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"chef-blog\">
                                <div class=\"chef-inner\">
                                    <div class=\"chef-member\">
                                        <img src=\"{{ asset('FrontEnd/Foodimages/chef1.png') }}\" alt=\"\">
                                    </div>
                                    <div class=\"chef-info\">
                                        <h5>Anna Taylor</h5>
                                        <span>Head Chief</span>
                                        <div class=\"social-top\">
                                            <ul>
                                                <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-google\" aria-hidden=\"true\"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"chef-blog\">
                                <div class=\"chef-inner\">
                                    <div class=\"chef-member\">
                                        <img src=\"{{ asset('FrontEnd/Foodimages/chef2.png') }}\" alt=\"\">
                                    </div>
                                    <div class=\"chef-info\">
                                        <h5>Alex Wilson</h5>
                                        <span>Head Chief</span>
                                        <div class=\"social-top\">
                                            <ul>
                                                <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-google\" aria-hidden=\"true\"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"chef-blog\">
                                <div class=\"chef-inner\">
                                    <div class=\"chef-member\">
                                        <img src=\"{{ asset('FrontEnd/Foodimages/chef3.png') }}\" alt=\"\">
                                    </div>
                                    <div class=\"chef-info\">
                                        <h5>Anita Golden</h5>
                                        <span>Head Chief</span>
                                        <div class=\"social-top\">
                                            <ul>
                                                <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-google\" aria-hidden=\"true\"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"chef-blog\">
                                <div class=\"chef-inner\">
                                    <div class=\"chef-member\">
                                        <img src=\"{{ asset('FrontEnd/Foodimages/chef4.png') }}\" alt=\"\">
                                    </div>
                                    <div class=\"chef-info\">
                                        <h5>Benderd Dimitor</h5>
                                        <span>Head Chief</span>
                                        <div class=\"social-top\">
                                            <ul>
                                                <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-google\" aria-hidden=\"true\"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"float-main\">
                    <div class=\"icon-top-left\">
                        <img src=\"{{ asset('FrontEnd/Foodimages/icon12.png') }}\" alt=\"\">
                    </div>
                    <div class=\"icon-bottom-left\">
                        <img src=\"{{ asset('FrontEnd/Foodimages/icon13.png') }}\" alt=\"\">
                    </div>
                    <div class=\"icon-top-right\">
                        <img src=\"{{ asset('FrontEnd/Foodimages/icon14.png') }}\" alt=\"\">
                    </div>
                </div>
            </section>
            <!-- End Chef -->
            <!-- Start Food Hours -->
            <section class=\"food-hours home-icon wow fadeInDown\" data-stellar-offset-parent=\"true\" data-stellar-background-ratio=\"0.5\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\" style=\"background-image: url('{{ asset('FrontEnd/Foodimages/banner2.jpg') }}');\">
                <div class=\"icon-default icon-gold\">
                    <img src=\"{{ asset('FrontEnd/Foodimages/icon19.png') }}\" alt=\"\">
                </div>
                <div class=\"container\">
                    <div class=\"food-blog\">
                        <div class=\"row\">
                            <div class=\"col-md-3 col-sm-3 col-xs-12 food-mxs\">
                                <div class=\"food-blog-inner\">
                                    <div class=\"food-item\">
                                        <div class=\"food-item-inner\">
                                            <img src=\"{{ asset('FrontEnd/Foodimages/icon15.png') }}\" alt=\"\">
                                        </div>
                                    </div>
                                    <h2>Breakfast</h2>
                                    <span>8.00 am 10.00 am</span>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-3 col-xs-12 food-mxs\">
                                <div class=\"food-blog-inner\">
                                    <div class=\"food-item\">
                                        <div class=\"food-item-inner\">
                                            <img src=\"{{ asset('FrontEnd/Foodimages/icon16.png') }}\" alt=\"\">
                                        </div>
                                    </div>
                                    <h2>Lunch</h2>
                                    <span>1.00 am 2.00 am</span>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-3 col-xs-12 food-mxs\">
                                <div class=\"food-blog-inner\">
                                    <div class=\"food-item\">
                                        <div class=\"food-item-inner\">
                                            <img src=\"{{ asset('FrontEnd/Foodimages/icon17.png') }}\" alt=\"\">
                                        </div>
                                    </div>
                                    <h2>Dinner</h2>
                                    <span>7.00 am 9.00 am</span>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-3 col-xs-12 food-mxs\">
                                <div class=\"food-blog-inner\">
                                    <div class=\"food-item\">
                                        <div class=\"food-item-inner\">
                                            <img src=\"{{ asset('FrontEnd/Foodimages/icon18.png') }}\" alt=\"\">
                                        </div>
                                    </div>
                                    <h2>Dessert</h2>
                                    <span>All Day</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Food Hours -->
            <!-- Start Feature Blog -->
            <section class=\"feature-blog-wrap bg-skeen home-icon wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                <div class=\"icon-default icon-skeen\">
                    <img src=\"{{ asset('FrontEnd/Foodimages/icon20.png') }}\" alt=\"\">
                </div>
                <div class=\"container\">
                    <div class=\"build-title\">
                        <h2>Feature Blog</h2>
                        <h6>Read Latest Delicious Posts And News</h6>
                    </div>
                    <div class=\"feature-blog\">
                        <div class=\"owl-carousel owl-theme\" data-items=\"3\" data-laptop=\"3\" data-tablet=\"2\" data-mobile=\"1\" data-nav=\"true\" data-dots=\"false\" data-autoplay=\"true\" data-speed=\"1800\" data-autotime=\"5000\">
                            <div class=\"item\">
                                <div class=\"feature-img\">
                                    <img src=\"{{ asset('FrontEnd/Foodimages/feature1.jpg') }}\" alt=\"\">
                                    <div class=\"date-feature\">27
                                        <br> <small>may</small></div>
                                </div>
                                <div class=\"feature-info\">
                                    <span><i class=\"icon-user\"></i> By Ali TUFAN</span>
                                    <span><i class=\"icon-comment\"></i> 5 Comments</span>
                                    <h5>Easy Sparkling Sangria</h5>
                                    <p>Aptent taciti sociosqu ad litora euismod atras vulputate iltricies etri elit class.</p>
                                    <a href=\"#\">Read More <i class=\"icon-more\"></i></a>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"feature-img\">
                                    <img src=\"{{ asset('FrontEnd/Foodimages/feature2.jpg') }}\" alt=\"\">
                                    <div class=\"date-feature\">27
                                        <br> <small>may</small></div>
                                </div>
                                <div class=\"feature-info\">
                                    <span><i class=\"icon-user\"></i> By Ali TUFAN</span>
                                    <span><i class=\"icon-comment\"></i> 5 Comments</span>
                                    <h5>Disclosue - Real food here</h5>
                                    <p>Aptent taciti sociosqu ad litora euismod atras vulputate iltricies etri elit class.</p>
                                    <a href=\"#\">Read More <i class=\"icon-more\"></i></a>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"feature-img\">
                                    <img src=\"{{ asset('FrontEnd/Foodimages/feature3.jpg') }}\" alt=\"\">
                                    <div class=\"date-feature\">27
                                        <br> <small>may</small></div>
                                </div>
                                <div class=\"feature-info\">
                                    <span><i class=\"icon-user\"></i> By Ali TUFAN</span>
                                    <span><i class=\"icon-comment\"></i> 5 Comments</span>
                                    <h5>The Best Drink on Market</h5>
                                    <p>Aptent taciti sociosqu ad litora euismod atras vulputate iltricies etri elit class.</p>
                                    <a href=\"#\">Read More <i class=\"icon-more\"></i></a>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"feature-img\">
                                    <img src=\"{{ asset('FrontEnd/Foodimages/feature1.jpg') }}\" alt=\"\">
                                    <div class=\"date-feature\">27
                                        <br> <small>may</small></div>
                                </div>
                                <div class=\"feature-info\">
                                    <span><i class=\"icon-user\"></i> By Ali TUFAN</span>
                                    <span><i class=\"icon-comment\"></i> 5 Comments</span>
                                    <h5>Easy Sparkling Sangria</h5>
                                    <p>Aptent taciti sociosqu ad litora euismod atras vulputate iltricies etri elit class.</p>
                                    <a href=\"#\">Read More <i class=\"icon-more\"></i></a>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"feature-img\">
                                    <img src=\"{{ asset('FrontEnd/Foodimages/feature2.jpg') }}\" alt=\"\">
                                    <div class=\"date-feature\">27
                                        <br> <small>may</small></div>
                                </div>
                                <div class=\"feature-info\">
                                    <span><i class=\"icon-user\"></i> By Ali TUFAN</span>
                                    <span><i class=\"icon-comment\"></i> 5 Comments</span>
                                    <h5>Disclosue - Real food here</h5>
                                    <p>Aptent taciti sociosqu ad litora euismod atras vulputate iltricies etri elit class.</p>
                                    <a href=\"#\">Read More <i class=\"icon-more\"></i></a>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"feature-img\">
                                    <img src=\"{{ asset('FrontEnd/Foodimages/feature3.jpg') }}\" alt=\"\">
                                    <div class=\"date-feature\">27
                                        <br> <small>may</small></div>
                                </div>
                                <div class=\"feature-info\">
                                    <span><i class=\"icon-user\"></i> By Ali TUFAN</span>
                                    <span><i class=\"icon-comment\"></i> 5 Comments</span>
                                    <h5>The Best Drink on Market</h5>
                                    <p>Aptent taciti sociosqu ad litora euismod atras vulputate iltricies etri elit class.</p>
                                    <a href=\"#\">Read More <i class=\"icon-more\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Feature Blog -->
            <!-- Start Client Say -->
            <section class=\"client banner-bg invert invert-black home-icon wow fadeInDown\" data-background=\"{{ asset('FrontEnd/Foodimages/banner3.jpg') }}\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                <div class=\"icon-default icon-black\">
                    <img src=\"{{ asset('FrontEnd/Foodimages/icon21.png') }}\" alt=\"\">
                </div>
                <div class=\"container\">
                    <div class=\"build-title\">
                        <h2>What Clients Say</h2>
                        <h6>1500+ Satisfied Clients</h6>
                    </div>
                    <div class=\"client-say\">
                        <div class=\"owl-carousel owl-theme\" data-items=\"1\" data-laptop=\"1\" data-tablet=\"1\" data-mobile=\"1\" data-nav=\"false\" data-dots=\"true\" data-autoplay=\"true\" data-speed=\"1800\" data-autotime=\"5000\">
                            <div class=\"item\">
                                <p><img src=\"{{ asset('FrontEnd/Foodimages/client1.png') }}\" alt=\"\"></p>
                                <h5>Alice Williams</h5>
                                <p>Kitchen Manager</p>
                                <p>Success isn’t really that difficult. There is a significant portion of the
                                    <br> population here in North America, that actually want and need
                                    <br>success really no magic to be hard.</p>
                            </div>
                            <div class=\"item\">
                                <p><img src=\"{{ asset('FrontEnd/Foodimages/client1.png') }}\" alt=\"\"></p>
                                <h5>Alice Williams</h5>
                                <p>Kitchen Manager</p>
                                <p>Success isn’t really that difficult. There is a significant portion of the
                                    <br> population here in North America, that actually want and need
                                    <br>success really no magic to be hard.</p>
                            </div>
                            <div class=\"item\">
                                <p><img src=\"{{ asset('FrontEnd/Foodimages/client1.png') }}\" alt=\"\"></p>
                                <h5>Alice Williams</h5>
                                <p>Kitchen Manager</p>
                                <p>Success isn’t really that difficult. There is a significant portion of the
                                    <br> population here in North America, that actually want and need
                                    <br>success really no magic to be hard.</p>
                            </div>
                            <div class=\"item\">
                                <p><img src=\"{{ asset('FrontEnd/Foodimages/client1.png') }}\" alt=\"\"></p>
                                <h5>Alice Williams</h5>
                                <p>Kitchen Manager</p>
                                <p>Success isn’t really that difficult. There is a significant portion of the
                                    <br> population here in North America, that actually want and need
                                    <br>success really no magic to be hard.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Client Say -->
            <!-- Start Feature list -->
            <section class=\"bg-skeen feature-list text-center home-icon wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                <div class=\"icon-default icon-skeen\">
                    <img src=\"{{ asset('FrontEnd/Foodimages/icon22.png') }}\" alt=\"\">
                </div>
                <div class=\"container\">
                    <div class=\"build-title\">
                        <h2>Our Some Feature</h2>
                        <h6>The role of a good cook ware in the preparation of a sumptuous meal cannot be <br> over emphasized then one consider white bread</h6>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                            <div class=\"feature-list-icon\">
                                <div class=\"feature-icon-table\">
                                    <img src=\"{{ asset('FrontEnd/Foodimages/img9.png') }}\" alt=\"\">
                                </div>
                            </div>
                            <h5>Fresh Dishes</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-</p>
                        </div>
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                            <div class=\"feature-list-icon\">
                                <div class=\"feature-icon-table\">
                                    <img src=\"{{ asset('FrontEnd/Foodimages/img10.png') }}\" alt=\"\">
                                </div>
                            </div>
                            <h5>Various Menu</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-</p>
                        </div>
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                            <div class=\"feature-list-icon\">
                                <div class=\"feature-icon-table\">
                                    <img src=\"{{ asset('FrontEnd/Foodimages/img11.png') }}\" alt=\"\">
                                </div>
                            </div>
                            <h5>Well Service</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-</p>
                        </div>
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                            <div class=\"feature-list-icon\">
                                <div class=\"feature-icon-table\">
                                    <img src=\"{{ asset('FrontEnd/Foodimages/img12.png') }}\" alt=\"\">
                                </div>
                            </div>
                            <h5>Fast Delivery</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Feature list -->
            <!-- Start Instagram -->
            <section class=\"instagram-main home-icon wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                <div class=\"icon-default\">
                    <img src=\"{{ asset('FrontEnd/Foodimages/icon23.png') }}\" alt=\"\">
                </div>
                <div class=\"container\">
                    <div class=\"build-title\">
                        <h2>#laboom</h2>
                        <h6>Enjoyed your stay at La Boom? Share your moments with us. Follow us on Instagram and use</h6>
                    </div>
                </div>
                <div class=\"gallery-slider\">
                    <div class=\"owl-carousel owl-theme\" data-items=\"6\" data-laptop=\"5\" data-tablet=\"4\" data-mobile=\"1\" data-nav=\"true\" data-dots=\"false\" data-autoplay=\"true\" data-speed=\"2000\" data-autotime=\"3000\">
                        <div class=\"item\">
                            <a href=\"{{ asset('FrontEnd/Foodimages/gallery/gallery-big1.png') }}\"  class=\"magnific-popup\">
                                <img src=\"{{ asset('FrontEnd/Foodimages/gallery/gallery1.png') }}\" alt=\"\" class=\"animated\">
                                <div class=\"gallery-overlay\">
                                    <div class=\"gallery-overlay-inner\">
                                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=\"item\">
                            <a href=\"{{ asset('FrontEnd/Foodimages/gallery/gallery-big2.png') }}\"  class=\"magnific-popup\">
                                <img src=\"{{ asset('FrontEnd/Foodimages/gallery/gallery2.png') }}\" alt=\"\" class=\"animated\">
                                <div class=\"gallery-overlay\">
                                    <div class=\"gallery-overlay-inner\">
                                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=\"item\">
                            <a href=\"{{ asset('images/gallery/gallery-big3.png') }}\"  class=\"magnific-popup\">
                                <img src=\"{{ asset('FrontEnd/Foodimages/gallery/gallery3.png') }}\" alt=\"\" class=\"animated\">
                                <div class=\"gallery-overlay\">
                                    <div class=\"gallery-overlay-inner\">
                                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=\"item\">
                            <a href=\"{{ asset('FrontEnd/Foodimages/gallery/gallery-big4.png') }}\"  class=\"magnific-popup\">
                                <img src=\"{{ asset('FrontEnd/Foodimages/gallery/gallery4.png') }}\" alt=\"\" class=\"animated\">
                                <div class=\"gallery-overlay\">
                                    <div class=\"gallery-overlay-inner\">
                                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=\"item\">
                            <a href=\"{{ asset('FrontEnd/Foodimages/gallery/gallery-big5.png') }}\"  class=\"magnific-popup\">
                                <img src=\"{{ asset('FrontEnd/Foodimages/gallery/gallery5.png') }}\" alt=\"\" class=\"animated\">
                                <div class=\"gallery-overlay\">
                                    <div class=\"gallery-overlay-inner\">
                                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=\"item\">
                            <a href=\"{{ asset('FrontEnd/Foodimages/gallery/gallery-big6.png') }}\"  class=\"magnific-popup\">
                                <img src=\"{{ asset('FrontEnd/Foodimages/gallery/gallery6.png') }}\" alt=\"\" class=\"animated\">
                                <div class=\"gallery-overlay\">
                                    <div class=\"gallery-overlay-inner\">
                                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=\"item\">
                            <a href=\"{{ asset('FrontEnd/Foodimages/gallery/gallery-big1.png') }}\"  class=\"magnific-popup\">
                                <img src=\"{{ asset('FrontEnd/Foodimages/gallery/gallery1.png') }}\" alt=\"\" class=\"animated\">
                                <div class=\"gallery-overlay\">
                                    <div class=\"gallery-overlay-inner\">
                                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=\"item\">
                            <a href=\"{{ asset('FrontEnd/Foodimages/gallery/gallery-big2.png') }}\"  class=\"magnific-popup\">
                                <img src=\"{{ asset('FrontEnd/Foodimages/gallery/gallery2.png') }}\" alt=\"\" class=\"animated\">
                                <div class=\"gallery-overlay\">
                                    <div class=\"gallery-overlay-inner\">
                                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=\"item\">
                            <a href=\"{{ asset('FrontEnd/Foodimages/gallery/gallery-big3.png') }}\"  class=\"magnific-popup\">
                                <img src=\"{{ asset('FrontEnd/Foodimages/gallery/gallery3.png') }}\" alt=\"\" class=\"animated\">
                                <div class=\"gallery-overlay\">
                                    <div class=\"gallery-overlay-inner\">
                                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=\"item\">
                            <a href=\"{{ asset('FrontEnd/Foodvimages/gallery/gallery-big4.png') }}\"  class=\"magnific-popup\">
                                <img src=\"{{ asset('FrontEnd/Foodimages/gallery/gallery4.png') }}\" alt=\"\" class=\"animated\">
                                <div class=\"gallery-overlay\">
                                    <div class=\"gallery-overlay-inner\">
                                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=\"item\">
                            <a href=\"{{ asset('FrontEnd/Foodimages/gallery/gallery-big5.png') }}\"  class=\"magnific-popup\">
                                <img src=\"{{ asset('FrontEnd/Foodimages/gallery/gallery5.png') }}\" alt=\"\" class=\"animated\">
                                <div class=\"gallery-overlay\">
                                    <div class=\"gallery-overlay-inner\">
                                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=\"item\">
                            <a href=\"{{ asset('FrontEnd/Foodimages/gallery/gallery-big6.png') }}\"  class=\"magnific-popup\">
                                <img src=\"{{ asset('FrontEnd/Foodimages/gallery/gallery6.png') }}\" alt=\"\" class=\"animated\">
                                <div class=\"gallery-overlay\">
                                    <div class=\"gallery-overlay-inner\">
                                        <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Instagram -->
        </div>
    </main>
    <!-- End Main -->
{% endblock body %}", "FrontEndBundle:Restaurent:RestaurentAccueil.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\src\\FrontEndBundle\\Resources\\views\\Restaurent\\RestaurentAccueil.html.twig");
    }
}
