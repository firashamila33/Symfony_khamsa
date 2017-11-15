<?php

/* FrontEndBundle:Restaurent:MenuSubCategories.html.twig */
class __TwigTemplate_dcfabc134fd4c5833f54a11d2237d1a2349c3ba4aee61c7863a4739fbcce57ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontEndBundle::RestaurentLayout.html.twig", "FrontEndBundle:Restaurent:MenuSubCategories.html.twig", 1);
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
        $__internal_3b81502129e08ac4fd4202e0ce61788bec42764364cee60cd543d08c9814528b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b81502129e08ac4fd4202e0ce61788bec42764364cee60cd543d08c9814528b->enter($__internal_3b81502129e08ac4fd4202e0ce61788bec42764364cee60cd543d08c9814528b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle:Restaurent:MenuSubCategories.html.twig"));

        $__internal_d3e9fdd327edf006864dc0b3681a3cba6e3dd3135592eb5c2ca88a8259bc1a9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e9fdd327edf006864dc0b3681a3cba6e3dd3135592eb5c2ca88a8259bc1a9b->enter($__internal_d3e9fdd327edf006864dc0b3681a3cba6e3dd3135592eb5c2ca88a8259bc1a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle:Restaurent:MenuSubCategories.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b81502129e08ac4fd4202e0ce61788bec42764364cee60cd543d08c9814528b->leave($__internal_3b81502129e08ac4fd4202e0ce61788bec42764364cee60cd543d08c9814528b_prof);

        
        $__internal_d3e9fdd327edf006864dc0b3681a3cba6e3dd3135592eb5c2ca88a8259bc1a9b->leave($__internal_d3e9fdd327edf006864dc0b3681a3cba6e3dd3135592eb5c2ca88a8259bc1a9b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b64ba2bf03199af25a3bcb5fd936b73fa66be43c0570aa89fba25152c387377a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b64ba2bf03199af25a3bcb5fd936b73fa66be43c0570aa89fba25152c387377a->enter($__internal_b64ba2bf03199af25a3bcb5fd936b73fa66be43c0570aa89fba25152c387377a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_609562aaf5af991430e1330d53d1f8d6b44b056d72a8a4fc2aada177c9f5c295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_609562aaf5af991430e1330d53d1f8d6b44b056d72a8a4fc2aada177c9f5c295->enter($__internal_609562aaf5af991430e1330d53d1f8d6b44b056d72a8a4fc2aada177c9f5c295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h2>Menu Style</h2>
                        <a href=\"#\">Home</a>
                        <span>Menu Style</span>
                    </div>
                </div>
            </section>
            <!-- End Breadcrumb Part -->
            <!-- Start Menu Part -->
            <section class=\"special-menu home-icon\">
                <div class=\"icon-default\">
                    <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/scroll-arrow.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <div class=\"container\">
                    <div class=\"build-title\">
                        <h2>Our Special Menu</h2>
                        <h6>The role of a good cook ware in the preparation of a sumptuous meal cannot be over emphasized then one consider white bread</h6>
                        <ul class=\"social\">
                            <li class=\"social-google\">
                                <a id=\"btn_kaniban\" ><img  src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/kaniban.png"), "html", null, true);
        echo "\"></img></a>
                            </li>
                            <li class=\"social-instagram\">
                                <a id=\"btn_cercles\"><img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/kaniban2.png"), "html", null, true);
        echo "\"></img></a>
                            </li>

                        </ul>
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
                        <div id=\"cercle_views\" style=\"display: none;\" class=\"portfolioContainer row\">
                            <div class=\"col-md-6 col-sm-6 col-xs-12 isotope-item breakfast\">
                                <div class=\"menu-list\">
                                        <span class=\"menu-list-product\">
                                            <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img3.png"), "html", null, true);
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
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img4.png"), "html", null, true);
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
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img5.png"), "html", null, true);
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
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img6.png"), "html", null, true);
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
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img7.png"), "html", null, true);
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
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img8.png"), "html", null, true);
        echo "\" alt=\"\">
                                        </span>
                                    <h5>PRAWNS BUTTER GARLIC <span>\$ 15.00</span></h5>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-6 col-xs-12 isotope-item dessert\">
                                <div class=\"menu-list\">
                                        <span class=\"menu-list-product\">
                                            <img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img81.png"), "html", null, true);
        echo "\" alt=\"\">
                                        </span>
                                    <h5>CHInese Egg Cake <span>\$ 15.00</span></h5>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-6 col-xs-12 isotope-item dinner\">
                                <div class=\"menu-list\">
                                        <span class=\"menu-list-product\">
                                            <img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img82.png"), "html", null, true);
        echo "\" alt=\"\">
                                        </span>
                                    <h5>Beef SpaghettI <span>\$ 45.00</span></h5>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                                </div>
                            </div>
                        </div>
                        <div id=\"kanban_view\" class=\"portfolioContainer row\" data-defaultfilter=\".breakfast\" style=\" block;position: relative; height: 706px;\">
                            <div class=\"col-md-3 col-sm-4 col-xs-12 breakfast dessert dinner wow fadeInDown animated\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\" style=\"visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInDown; position: absolute; left: 0px; top: 0px;\">
                                <div class=\"shop-main-list\" style=\"height: 313px;\">
                                    <div class=\"shop-product\">
                                        <img src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img56.png"), "html", null, true);
        echo "\" alt=\"\">
                                        <div class=\"cart-overlay-wrap\">
                                            <div class=\"cart-overlay\">
                                                <a href=\"#\" class=\"shop-cart-btn\">ADD TO CART</a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href=\"#\"><h5>Paper Pouch</h5></a>
                                    <h5><strong>\$ 15.00</strong></h5>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-4 col-xs-12 breakfast dinner lunch wow fadeInDown animated\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\" style=\"visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInDown; position: absolute; left: 292px; top: 0px;\">
                                <div class=\"shop-main-list\" style=\"height: 313px;\">
                                    <div class=\"shop-product\">
                                        <img src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img57.png"), "html", null, true);
        echo "\" alt=\"\">
                                        <div class=\"cart-overlay-wrap\">
                                            <div class=\"cart-overlay\">
                                                <a href=\"#\" class=\"shop-cart-btn\">ADD TO CART</a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href=\"#\"><h5>Paper Pouch</h5></a>
                                    <h5><strong>\$ 15.00</strong></h5>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-4 col-xs-12 breakfast dessert wow fadeInDown animated\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\" style=\"visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInDown; position: absolute; left: 585px; top: 0px;\">
                                <div class=\"shop-main-list\" style=\"height: 313px;\">
                                    <div class=\"shop-product\">
                                        <img src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img58.png"), "html", null, true);
        echo "\" alt=\"\">
                                        <div class=\"cart-overlay-wrap\">
                                            <div class=\"cart-overlay\">
                                                <a href=\"#\" class=\"shop-cart-btn\">ADD TO CART</a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href=\"#\"><h5>Paper Pouch</h5></a>
                                    <h5><strong>\$ 15.00</strong></h5>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-4 col-xs-12 breakfast dinner wow fadeInDown animated\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\" style=\"visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInDown; position: absolute; left: 877px; top: 0px;\">
                                <div class=\"shop-main-list\" style=\"height: 313px;\">
                                    <div class=\"shop-product\">
                                        <img src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img59.png"), "html", null, true);
        echo "\" alt=\"\">
                                        <div class=\"cart-overlay-wrap\">
                                            <div class=\"cart-overlay\">
                                                <a href=\"#\" class=\"shop-cart-btn\">ADD TO CART</a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href=\"#\"><h5>Paper Pouch</h5></a>
                                    <h5><strong>\$ 15.00</strong></h5>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-4 col-xs-12 breakfast freshfood wow fadeInDown animated\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\" style=\"visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInDown; position: absolute; left: 0px; top: 353px;\">
                                <div class=\"shop-main-list\" style=\"height: 313px;\">
                                    <div class=\"shop-product\">
                                        <img src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img60.png"), "html", null, true);
        echo "\" alt=\"\">
                                        <div class=\"cart-overlay-wrap\">
                                            <div class=\"cart-overlay\">
                                                <a href=\"#\" class=\"shop-cart-btn\">ADD TO CART</a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href=\"#\"><h5>Paper Pouch</h5></a>
                                    <h5><strong>\$ 15.00</strong></h5>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-4 col-xs-12 breakfast lunch wow fadeInDown animated\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\" style=\"visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInDown; position: absolute; left: 292px; top: 353px;\">
                                <div class=\"shop-main-list\" style=\"height: 313px;\">
                                    <div class=\"shop-product\">
                                        <img src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img61.png"), "html", null, true);
        echo "\" alt=\"\">
                                        <div class=\"cart-overlay-wrap\">
                                            <div class=\"cart-overlay\">
                                                <a href=\"#\" class=\"shop-cart-btn\">ADD TO CART</a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href=\"#\"><h5>Paper Pouch</h5></a>
                                    <h5><strong>\$ 15.00</strong></h5>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-4 col-xs-12 breakfast freshfood wow fadeInDown animated\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\" style=\"visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInDown; position: absolute; left: 585px; top: 353px;\">
                                <div class=\"shop-main-list\" style=\"height: 313px;\">
                                    <div class=\"shop-product\">
                                        <img src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img62.png"), "html", null, true);
        echo "\" alt=\"\">
                                        <div class=\"cart-overlay-wrap\">
                                            <div class=\"cart-overlay\">
                                                <a href=\"#\" class=\"shop-cart-btn\">ADD TO CART</a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href=\"#\"><h5>Paper Pouch</h5></a>
                                    <h5><strong>\$ 15.00</strong></h5>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-4 col-xs-12 breakfast lunch wow fadeInDown animated\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\" style=\"visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInDown; position: absolute; left: 877px; top: 353px;\">
                                <div class=\"shop-main-list\" style=\"height: 313px;\">
                                    <div class=\"shop-product\">
                                        <img src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img63.png"), "html", null, true);
        echo "\" alt=\"\">
                                        <div class=\"cart-overlay-wrap\">
                                            <div class=\"cart-overlay\">
                                                <a href=\"#\" class=\"shop-cart-btn\">ADD TO CART</a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href=\"#\"><h5>Paper Pouch</h5></a>
                                    <h5><strong>\$ 15.00</strong></h5>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- End Menu Part -->

        </div>
    </main>
    <!-- End Main -->
    <script type=\"text/javascript\">
        console.log('aaaaaa');
        document.getElementById(\"btn_kaniban\").onclick= function () {
            document.getElementById(\"kanban_view\").style.display=\"\";
            document.getElementById(\"cercle_views\").style.display=\"none\";

        };
        document.getElementById(\"btn_cercles\").onclick= function () {
            document.getElementById(\"kanban_view\").style.display=\"none\";
            document.getElementById(\"cercle_views\").style.display=\"\";



        };

    </script>
";
        
        $__internal_609562aaf5af991430e1330d53d1f8d6b44b056d72a8a4fc2aada177c9f5c295->leave($__internal_609562aaf5af991430e1330d53d1f8d6b44b056d72a8a4fc2aada177c9f5c295_prof);

        
        $__internal_b64ba2bf03199af25a3bcb5fd936b73fa66be43c0570aa89fba25152c387377a->leave($__internal_b64ba2bf03199af25a3bcb5fd936b73fa66be43c0570aa89fba25152c387377a_prof);

    }

    public function getTemplateName()
    {
        return "FrontEndBundle:Restaurent:MenuSubCategories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 224,  311 => 210,  294 => 196,  277 => 182,  260 => 168,  243 => 154,  226 => 140,  209 => 126,  195 => 115,  183 => 106,  171 => 97,  159 => 88,  147 => 79,  135 => 70,  123 => 61,  111 => 52,  88 => 32,  82 => 29,  71 => 21,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
                        <h2>Menu Style</h2>
                        <a href=\"#\">Home</a>
                        <span>Menu Style</span>
                    </div>
                </div>
            </section>
            <!-- End Breadcrumb Part -->
            <!-- Start Menu Part -->
            <section class=\"special-menu home-icon\">
                <div class=\"icon-default\">
                    <img src=\"{{ asset('FrontEnd/Food/images/scroll-arrow.png') }}\" alt=\"\">
                </div>
                <div class=\"container\">
                    <div class=\"build-title\">
                        <h2>Our Special Menu</h2>
                        <h6>The role of a good cook ware in the preparation of a sumptuous meal cannot be over emphasized then one consider white bread</h6>
                        <ul class=\"social\">
                            <li class=\"social-google\">
                                <a id=\"btn_kaniban\" ><img  src=\"{{ asset('FrontEnd/Food/images/kaniban.png') }}\"></img></a>
                            </li>
                            <li class=\"social-instagram\">
                                <a id=\"btn_cercles\"><img src=\"{{ asset('FrontEnd/Food/images/kaniban2.png') }}\"></img></a>
                            </li>

                        </ul>
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
                        <div id=\"cercle_views\" style=\"display: none;\" class=\"portfolioContainer row\">
                            <div class=\"col-md-6 col-sm-6 col-xs-12 isotope-item breakfast\">
                                <div class=\"menu-list\">
                                        <span class=\"menu-list-product\">
                                            <img src=\"{{ asset('FrontEnd/Food/images/img3.png') }}\" alt=\"\">
                                        </span>
                                    <h5>LASAL CHEESE <span>\$ 15.00</span></h5>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-6 col-xs-12 isotope-item lunch\">
                                <div class=\"menu-list\">
                                        <span class=\"menu-list-product\">
                                            <img src=\"{{ asset('FrontEnd/Food/images/img4.png') }}\" alt=\"\">
                                        </span>
                                    <h5>JUMBO CARB SHRIMP <span>\$ 25.00</span></h5>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-6 col-xs-12 isotope-item dessert\">
                                <div class=\"menu-list\">
                                        <span class=\"menu-list-product\">
                                            <img src=\"{{ asset('FrontEnd/Food/images/img5.png') }}\" alt=\"\">
                                        </span>
                                    <h5>SURMAI CHILLI <span>\$ 15.00</span></h5>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-6 col-xs-12 isotope-item dinner\">
                                <div class=\"menu-list\">
                                        <span class=\"menu-list-product\">
                                            <img src=\"{{ asset('FrontEnd/Food/images/img6.png') }}\" alt=\"\">
                                        </span>
                                    <h5>CAPO STEAK <span>\$ 45.00</span></h5>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-6 col-xs-12 isotope-item freshfood\">
                                <div class=\"menu-list\">
                                        <span class=\"menu-list-product\">
                                            <img src=\"{{ asset('FrontEnd/Food/images/img7.png') }}\" alt=\"\">
                                        </span>
                                    <h5>ORGANIC FRUIT SALAD <span>\$ 15.00</span></h5>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-6 col-xs-12 isotope-item freshfood\">
                                <div class=\"menu-list\">
                                        <span class=\"menu-list-product\">
                                            <img src=\"{{ asset('FrontEnd/Food/images/img8.png') }}\" alt=\"\">
                                        </span>
                                    <h5>PRAWNS BUTTER GARLIC <span>\$ 15.00</span></h5>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-6 col-xs-12 isotope-item dessert\">
                                <div class=\"menu-list\">
                                        <span class=\"menu-list-product\">
                                            <img src=\"{{ asset('FrontEnd/Food/images/img81.png') }}\" alt=\"\">
                                        </span>
                                    <h5>CHInese Egg Cake <span>\$ 15.00</span></h5>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-6 col-xs-12 isotope-item dinner\">
                                <div class=\"menu-list\">
                                        <span class=\"menu-list-product\">
                                            <img src=\"{{ asset('FrontEnd/Food/images/img82.png') }}\" alt=\"\">
                                        </span>
                                    <h5>Beef SpaghettI <span>\$ 45.00</span></h5>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                                </div>
                            </div>
                        </div>
                        <div id=\"kanban_view\" class=\"portfolioContainer row\" data-defaultfilter=\".breakfast\" style=\" block;position: relative; height: 706px;\">
                            <div class=\"col-md-3 col-sm-4 col-xs-12 breakfast dessert dinner wow fadeInDown animated\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\" style=\"visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInDown; position: absolute; left: 0px; top: 0px;\">
                                <div class=\"shop-main-list\" style=\"height: 313px;\">
                                    <div class=\"shop-product\">
                                        <img src=\"{{ asset('FrontEnd/Food/images/img56.png') }}\" alt=\"\">
                                        <div class=\"cart-overlay-wrap\">
                                            <div class=\"cart-overlay\">
                                                <a href=\"#\" class=\"shop-cart-btn\">ADD TO CART</a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href=\"#\"><h5>Paper Pouch</h5></a>
                                    <h5><strong>\$ 15.00</strong></h5>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-4 col-xs-12 breakfast dinner lunch wow fadeInDown animated\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\" style=\"visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInDown; position: absolute; left: 292px; top: 0px;\">
                                <div class=\"shop-main-list\" style=\"height: 313px;\">
                                    <div class=\"shop-product\">
                                        <img src=\"{{ asset('FrontEnd/Food/images/img57.png') }}\" alt=\"\">
                                        <div class=\"cart-overlay-wrap\">
                                            <div class=\"cart-overlay\">
                                                <a href=\"#\" class=\"shop-cart-btn\">ADD TO CART</a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href=\"#\"><h5>Paper Pouch</h5></a>
                                    <h5><strong>\$ 15.00</strong></h5>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-4 col-xs-12 breakfast dessert wow fadeInDown animated\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\" style=\"visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInDown; position: absolute; left: 585px; top: 0px;\">
                                <div class=\"shop-main-list\" style=\"height: 313px;\">
                                    <div class=\"shop-product\">
                                        <img src=\"{{ asset('FrontEnd/Food/images/img58.png') }}\" alt=\"\">
                                        <div class=\"cart-overlay-wrap\">
                                            <div class=\"cart-overlay\">
                                                <a href=\"#\" class=\"shop-cart-btn\">ADD TO CART</a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href=\"#\"><h5>Paper Pouch</h5></a>
                                    <h5><strong>\$ 15.00</strong></h5>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-4 col-xs-12 breakfast dinner wow fadeInDown animated\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\" style=\"visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInDown; position: absolute; left: 877px; top: 0px;\">
                                <div class=\"shop-main-list\" style=\"height: 313px;\">
                                    <div class=\"shop-product\">
                                        <img src=\"{{ asset('FrontEnd/Food/images/img59.png') }}\" alt=\"\">
                                        <div class=\"cart-overlay-wrap\">
                                            <div class=\"cart-overlay\">
                                                <a href=\"#\" class=\"shop-cart-btn\">ADD TO CART</a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href=\"#\"><h5>Paper Pouch</h5></a>
                                    <h5><strong>\$ 15.00</strong></h5>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-4 col-xs-12 breakfast freshfood wow fadeInDown animated\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\" style=\"visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInDown; position: absolute; left: 0px; top: 353px;\">
                                <div class=\"shop-main-list\" style=\"height: 313px;\">
                                    <div class=\"shop-product\">
                                        <img src=\"{{ asset('FrontEnd/Food/images/img60.png') }}\" alt=\"\">
                                        <div class=\"cart-overlay-wrap\">
                                            <div class=\"cart-overlay\">
                                                <a href=\"#\" class=\"shop-cart-btn\">ADD TO CART</a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href=\"#\"><h5>Paper Pouch</h5></a>
                                    <h5><strong>\$ 15.00</strong></h5>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-4 col-xs-12 breakfast lunch wow fadeInDown animated\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\" style=\"visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInDown; position: absolute; left: 292px; top: 353px;\">
                                <div class=\"shop-main-list\" style=\"height: 313px;\">
                                    <div class=\"shop-product\">
                                        <img src=\"{{ asset('FrontEnd/Food/images/img61.png') }}\" alt=\"\">
                                        <div class=\"cart-overlay-wrap\">
                                            <div class=\"cart-overlay\">
                                                <a href=\"#\" class=\"shop-cart-btn\">ADD TO CART</a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href=\"#\"><h5>Paper Pouch</h5></a>
                                    <h5><strong>\$ 15.00</strong></h5>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-4 col-xs-12 breakfast freshfood wow fadeInDown animated\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\" style=\"visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInDown; position: absolute; left: 585px; top: 353px;\">
                                <div class=\"shop-main-list\" style=\"height: 313px;\">
                                    <div class=\"shop-product\">
                                        <img src=\"{{ asset('FrontEnd/Food/images/img62.png') }}\" alt=\"\">
                                        <div class=\"cart-overlay-wrap\">
                                            <div class=\"cart-overlay\">
                                                <a href=\"#\" class=\"shop-cart-btn\">ADD TO CART</a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href=\"#\"><h5>Paper Pouch</h5></a>
                                    <h5><strong>\$ 15.00</strong></h5>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-4 col-xs-12 breakfast lunch wow fadeInDown animated\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\" style=\"visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInDown; position: absolute; left: 877px; top: 353px;\">
                                <div class=\"shop-main-list\" style=\"height: 313px;\">
                                    <div class=\"shop-product\">
                                        <img src=\"{{ asset('FrontEnd/Food/images/img63.png') }}\" alt=\"\">
                                        <div class=\"cart-overlay-wrap\">
                                            <div class=\"cart-overlay\">
                                                <a href=\"#\" class=\"shop-cart-btn\">ADD TO CART</a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href=\"#\"><h5>Paper Pouch</h5></a>
                                    <h5><strong>\$ 15.00</strong></h5>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- End Menu Part -->

        </div>
    </main>
    <!-- End Main -->
    <script type=\"text/javascript\">
        console.log('aaaaaa');
        document.getElementById(\"btn_kaniban\").onclick= function () {
            document.getElementById(\"kanban_view\").style.display=\"\";
            document.getElementById(\"cercle_views\").style.display=\"none\";

        };
        document.getElementById(\"btn_cercles\").onclick= function () {
            document.getElementById(\"kanban_view\").style.display=\"none\";
            document.getElementById(\"cercle_views\").style.display=\"\";



        };

    </script>
{% endblock body %}", "FrontEndBundle:Restaurent:MenuSubCategories.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\src\\FrontEndBundle/Resources/views/Restaurent/MenuSubCategories.html.twig");
    }
}
