<?php

/* FrontEndBundle::RestaurentLayout.html.twig */
class __TwigTemplate_9fb4f754636c486b8e62649bfab9990d31fe5cc908fc74868e60baded054e484 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e76496f37cf1abb524226871285d9d7cd349cae2626171b3f05d4054cd7ad202 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e76496f37cf1abb524226871285d9d7cd349cae2626171b3f05d4054cd7ad202->enter($__internal_e76496f37cf1abb524226871285d9d7cd349cae2626171b3f05d4054cd7ad202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle::RestaurentLayout.html.twig"));

        $__internal_fdf13d7f6f7e20c43c4e03fdb3b9f8d66c5cddcbc1190043aa3465c649e78607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdf13d7f6f7e20c43c4e03fdb3b9f8d66c5cddcbc1190043aa3465c649e78607->enter($__internal_fdf13d7f6f7e20c43c4e03fdb3b9f8d66c5cddcbc1190043aa3465c649e78607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle::RestaurentLayout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Laboom - Food & Restaurant Bistro HTML Template</title>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/plugin/bootstrap/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/plugin/bootstrap/datepicker.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/plugin/font-awesome/font-awesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/plugin/form-field/jquery.formstyler.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/plugin/revolution-plugin/extralayers.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/plugin/revolution-plugin/settings.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/plugin/owl-carousel/owl.carousel.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/plugin/owl-carousel/owl.theme.default.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/plugin/slick-slider/slick-theme.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/plugin/magnific/magnific-popup.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/plugin/scroll-bar/jquery.mCustomScrollbar.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/plugin/animation/animate.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/css/theme.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/css/responsive.css"), "html", null, true);
        echo "\">
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>

<body>
<!-- Page pre loader -->
<div id=\"pre-loader\">
    <div class=\"loader-holder\">
        <div class=\"frame\">
            <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/Preloader.gif"), "html", null, true);
        echo "\" alt=\"Laboom\" />
        </div>
    </div>
</div>
<div class=\"wrapper\">
    <!-- Start Header -->
    <header>
        <div class=\"header-part header-reduce sticky\">
            <div class=\"header-top\">
                <div class=\"container\">
                    <div class=\"header-top-inner\">
                        <div class=\"header-top-left\">
                            <a href=\"#\" class=\"top-cell\"><img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/fon.png"), "html", null, true);
        echo "\" alt=\"\"> <span>123-456-7890</span></a>
                            <a href=\"#\" class=\"top-email\"><span>support@laboom.com</span></a>
                        </div>
                        <div class=\"header-top-right\">
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
                            <div class=\"language-menu\">
                                <a href=\"#\" class=\"current-lang\">English <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i></a>
                                <ul>
                                    <li><a href=\"#\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>Turkish</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>Nederlands</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>Français</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>Deutsch</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>Italiano</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"header-bottom\">
                <div class=\"container\">
                    <div class=\"header-info\">
                        <div class=\"header-info-inner\">
                            <div class=\"book-table header-collect book-md\">
                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#booktable\"><img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/icon-table.png"), "html", null, true);
        echo "\" alt=\"\">Book a Table</a>
                            </div>
                            <div class=\"shop-cart header-collect\">
                                <a href=\"#\"><img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/icon-basket.png"), "html", null, true);
        echo "\" alt=\"\">2 items - \$ 20.89</a>
                                <div class=\"cart-wrap\">
                                    <div class=\"cart-blog\">
                                        <div class=\"cart-item\">
                                            <div class=\"cart-item-left\">
                                                <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img59.png"), "html", null, true);
        echo "\" alt=\"\">
                                            </div>
                                            <div class=\"cart-item-right\">
                                                <h6>Caramel Chesse Cake</h6>
                                                <span>\$ 14.00</span>
                                            </div>
                                            <span class=\"delete-icon\"></span>
                                        </div>
                                        <div class=\"cart-item\">
                                            <div class=\"cart-item-left\">
                                                <img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img60.png"), "html", null, true);
        echo "\" alt=\"\">
                                            </div>
                                            <div class=\"cart-item-right\">
                                                <h6>Caramel Chesse Cake</h6>
                                                <span>\$ 14.00</span>
                                            </div>
                                            <span class=\"delete-icon\"></span>
                                        </div>
                                        <div class=\"subtotal\">
                                            <div class=\"col-md-6 col-sm-6 col-xs-6\">
                                                <h6>Subtotal :</h6>
                                            </div>
                                            <div class=\"col-md-6 col-sm-6 col-xs-6\">
                                                <span>\$ 140.00</span>
                                            </div>
                                        </div>
                                        <div class=\"cart-btn\">
                                            <a href=\"#\" class=\"btn-black view\">VIEW ALL</a>
                                            <a href=\"#\" class=\"btn-main checkout\">CHECK OUT</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"search-part\">
                                <a href=\"#\"></a>
                                <div class=\"search-box\">
                                    <input type=\"text\" name=\"txt\" placeholder=\"Search\">
                                    <input type=\"submit\" name=\"submit\" value=\" \">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"menu-icon\">
                        <a href=\"#\" class=\"hambarger\">
                            <span class=\"bar-1\"></span>
                            <span class=\"bar-2\"></span>
                            <span class=\"bar-3\"></span>
                        </a>
                    </div>
                    <div class=\"book-table header-collect book-sm\">
                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#booktable\"><img src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/icon-table.png"), "html", null, true);
        echo "\" alt=\"\">Book a Table</a>
                    </div>
                    <div class=\"menu-main\">
                        <ul>
                            <li class=\"has-child\">
                                <a href=\"index.html\">Home</a>
                                <ul class=\"drop-nav\">
                                    <li><a href=\"index.html\">Home Page 1</a></li>
                                    <li><a href=\"homepage1.html\">Home Page 2</a></li>
                                    <li><a href=\"homepage2.html\">Home Page 3</a></li>
                                    <li><a href=\"homepage3.html\">Home Page 4</a></li>
                                    <li><a href=\"homepage4.html\">Home Page 5</a></li>
                                    <li class=\"drop-has-child\">
                                        <a href=\"#\">Headers</a>
                                        <ul class=\"drop-nav\">
                                            <li><a href=\"index.html\">Header 1</a></li>
                                            <li><a href=\"homepage1.html\">Header 2</a></li>
                                            <li><a href=\"homepage2.html\">Header 3</a></li>
                                            <li><a href=\"homepage3.html\">Header 4</a></li>
                                            <li><a href=\"homepage4.html\">Header 5</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"mega-menu\">
                                <a href=\"#\">Menu</a>
                                <ul class=\"drop-nav\">
                                    <li>
                                        <div class=\"drop-mega-part\">
                                            <div class=\"row\">
                                                <div class=\"col-md-5 col-sm-12 col-xs-12\">
                                                    <span class=\"mega-title\">MAIN MENU</span>
                                                    <div class=\"row\">
                                                        <div class=\"col-md-6 col-sm-12 col-xs-12\">
                                                            <ul>
                                                                <li><a href=\"#\">Ready Player One</a></li>
                                                                <li><a href=\"#\">Ernest Cline</a></li>
                                                                <li><a href=\"#\">Ender's Game</a></li>
            <li><a href=\"#\">Orson Scott Card</a></li>
            <li><a href=\"#\">Americam Gods</a></li>
            <li><a href=\"#\">Neil Gaiman</a></li>
            <li><a href=\"#\">The Great Gatsby</a></li>
            </ul>
            </div>
            <div class=\"col-md-6 col-sm-12 col-xs-12\">
            <ul>
            <li><a href=\"#\">Ready Player One</a></li>
            <li><a href=\"#\">Ernest Cline</a></li>
            <li><a href=\"#\">Ender's Game</a></li>
                                                                <li><a href=\"#\">Orson Scott Card</a></li>
                                                                <li><a href=\"#\">Americam Gods</a></li>
                                                                <li><a href=\"#\">Neil Gaiman</a></li>
                                                                <li><a href=\"#\">The Great Gatsby</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-2 col-sm-12 col-xs-12\">
                                                    <span class=\"mega-title\">IMAGE</span>
                                                    <img src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img13.png"), "html", null, true);
        echo "\" alt=\"\">
                                                </div>
                                                <div class=\"col-md-5 col-sm-12 col-xs-12\">
                                                    <div class=\"mega-preview\">
                                                        <span class=\"mega-title\">DESCRIPTION</span>
                                                        <p>This column can contain whatever you like! Add text, shortcodes, or HTML.Various versions have evolved over the years, sometimes by accident, sometimes on</p>
                                                    </div>
                                                    <div class=\"mega-position\"><img src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img14.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"has-child\">
                                <a href=\"shop.html\">Shop</a>
                                <ul class=\"drop-nav\">
                                    <li><a href=\"shop.html\">Shop Page</a></li>
                                    <li><a href=\"shop_single.html\">Shop Single</a></li>
                                    <li><a href=\"shop_cart.html\">Shop Cart</a></li>
                                    <li><a href=\"shop_checkout.html\">Shop Checkout</a></li>
                                    <li><a href=\"order_complete.html\">Order Complete</a></li>
                                    <li><a href=\"track_order.html\">Track Your Order</a></li>
                                    <li><a href=\"login_register.html\">Login & Register</a></li>
                                </ul>
                            </li>
                            <li class=\"has-child\">
                                <a href=\"#\">Pages</a>
                                <ul class=\"drop-nav\">
                                    <li><a href=\"about.html\">About Us</a></li>
                                    <li class=\"drop-has-child\">
                                        <a href=\"service1.html\">Services</a>
                                        <ul class=\"drop-nav\">
                                            <li><a href=\"service1.html\">Service 1</a></li>
                                            <li><a href=\"service2.html\">Service 2</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"drop-has-child\">
                                        <a href=\"gallery1.html\">Gallery</a>
                                        <ul class=\"drop-nav\">
                                            <li><a href=\"gallery1.html\">Gallery 2 Columns</a></li>
                                            <li><a href=\"gallery2.html\">Gallery 3 Columns</a></li>
                                            <li><a href=\"gallery3.html\">Gallery 4 Columns</a></li>
                                            <li><a href=\"gallery_masonry.html\">Gallery Masonry</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"drop-has-child\">
                                        <a href=\"menu1.html\">Menu</a>
                                        <ul class=\"drop-nav\">
                                            <li><a href=\"menu1.html\">Menu 1</a></li>
                                            <li><a href=\"menu2.html\">Menu 2</a></li>
                                            <li><a href=\"menu3.html\">Menu 3</a></li>
                                            <li><a href=\"menu4.html\">Menu 4</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"drop-has-child\">
                                        <a href=\"team.html\">Team</a>
                                        <ul class=\"drop-nav\">
                                            <li><a href=\"team.html\">Team List</a></li>
                                            <li><a href=\"team_single.html\">Team Single</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"drop-has-child\">
                                        <a href=\"contact1.html\">Contact</a>
                                        <ul class=\"drop-nav\">
                                            <li><a href=\"contact1.html\">Contact 1</a></li>
                                            <li><a href=\"contact2.html\">Contact 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"terms_condition.html\">Terms & Condition</a></li>
                                    <li><a href=\"faq.html\">FAQ</a></li>
                                    <li><a href=\"404.html\">404 Error</a></li>
                                </ul>
                            </li>
                            <li class=\"has-child\">
                                <a href=\"blog_2col.html\">Blog</a>
                                <ul class=\"drop-nav\">
                                    <li><a href=\"blog_list.html\">Blog List</a></li>
                                    <li><a href=\"blog_2col.html\">Blog 2 Columns</a></li>
                                    <li><a href=\"blog_full.html\">Blog Full Width</a></li>
                                    <li><a href=\"blog_left_sidebar.html\">Blog Left Sidebar</a></li>
                                    <li><a href=\"blog_right_sidebar.html\">Blog Right Sidebar</a></li>
                                    <li><a href=\"blog_single.html\">Blog Single</a></li>
                                </ul>
                            </li>
                            <li class=\"has-child\">
                                <a href=\"contact1.html\">Contact</a>
                                <ul class=\"drop-nav\">
                                    <li><a href=\"contact1.html\">Contact 1</a></li>
                                    <li><a href=\"contact2.html\">Contact 2</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class=\"logo\">
                        <a href=\"index.html\"><img src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->


    ";
        // line 300
        $this->displayBlock('body', $context, $blocks);
        // line 302
        echo "


    <!-- Start Footer -->
    <footer>
        <div class=\"footer-part wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
            <div class=\"icon-default icon-dark\">
                <img src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/footer-logo.png"), "html", null, true);
        echo "\" alt=\"\">
            </div>
            <div class=\"container\">
                <div class=\"footer-inner\">
                    <div class=\"footer-info\">
                        <h3>La boom Restaurant</h3>
                        <p>329 Queensberry Street, North Melbourne VIC 3051, Australia.</p>
                        <p><a href=\"#\">123 456 7890</a></p>
                        <p><a href=\"#\">support@laboom.com</a></p>
                    </div>
                </div>
                <div class=\"copy-right\">
                    <div class=\"row\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12 copyright-before\">
                            <span>Copyright © 2017 Polygon Theme. All rights reserved.</span>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12 copyright-after\">
                            <div class=\"social-round\">
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
            <div class=\"icon-find\">
                <a href=\"#\">
                    <img src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/location.png"), "html", null, true);
        echo "\" alt=\"\">
                    <span>Find us on Map</span>
                </a>
            </div>
            <div class=\"location-footer-map\">
                <div class=\"icon-find-location\">
                    <a href=\"#\">
                        <img src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/location.png"), "html", null, true);
        echo "\" alt=\"\">
            <span>Find us on Map</span>
            </a>
        </div>
        <div class=\"footer-map-outer\">
            <div id=\"footer-map\"></div>
        </div>
    </div>
</div>
</footer>
<!-- End Footer -->
<!-- Start Book Table -->
<div class=\"modal fade booktable\" id=\"booktable\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"booktable\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <div class=\"table-title\">
                    <h2>Reservation</h2>
                    <h6 class=\"heade-xs\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h6>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <select class=\"select-dropbox\">
                            <option>Hour</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <select class=\"select-dropbox\">
                            <option>Number of People</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"text\" name=\"txt\" placeholder=\"Pick a Date\" class=\"date-pick\">
                    </div>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"text\" name=\"txt\" placeholder=\"Phone Number\">
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                        <input type=\"email\" name=\"email\" placeholder=\"Email Address\">
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                        <button class=\"btn-main btn-big\">BOOK A TABLE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Book Table -->
</div>
<!-- Back To Top Arrow -->
<a href=\"#\" class=\"top-arrow\"></a>
<script src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/plugin/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/plugin/bootstrap/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAf6My1Jfdi1Fmj-DUmX_CcNOZ6FLkQ4Os\"></script>
<script src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/plugin/form-field/jquery.formstyler.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/plugin/revolution-plugin/jquery.themepunch.plugins.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/plugin/revolution-plugin/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/plugin/owl-carousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/plugin/slick-slider/slick.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 421
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/plugin/isotop/isotop.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/plugin/isotop/packery-mode.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/plugin/magnific/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/plugin/scroll-bar/jquery.mCustomScrollbar.concat.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/plugin/animation/wow.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 426
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/plugin/parallax/jquery.stellar.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/js/app.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/js/script.js"), "html", null, true);
        echo "\"></script>
</body>

</html>";
        
        $__internal_e76496f37cf1abb524226871285d9d7cd349cae2626171b3f05d4054cd7ad202->leave($__internal_e76496f37cf1abb524226871285d9d7cd349cae2626171b3f05d4054cd7ad202_prof);

        
        $__internal_fdf13d7f6f7e20c43c4e03fdb3b9f8d66c5cddcbc1190043aa3465c649e78607->leave($__internal_fdf13d7f6f7e20c43c4e03fdb3b9f8d66c5cddcbc1190043aa3465c649e78607_prof);

    }

    // line 300
    public function block_body($context, array $blocks = array())
    {
        $__internal_80db2d35691fd8cd92ee0eff60aef92eb3aa3523e3d67d753ac85025303d6b96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80db2d35691fd8cd92ee0eff60aef92eb3aa3523e3d67d753ac85025303d6b96->enter($__internal_80db2d35691fd8cd92ee0eff60aef92eb3aa3523e3d67d753ac85025303d6b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_27eec75b4b633f8c7d8f982eec5cb2919189b0cf5b0ed84546fb23b790b1d416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27eec75b4b633f8c7d8f982eec5cb2919189b0cf5b0ed84546fb23b790b1d416->enter($__internal_27eec75b4b633f8c7d8f982eec5cb2919189b0cf5b0ed84546fb23b790b1d416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 301
        echo "    ";
        
        $__internal_27eec75b4b633f8c7d8f982eec5cb2919189b0cf5b0ed84546fb23b790b1d416->leave($__internal_27eec75b4b633f8c7d8f982eec5cb2919189b0cf5b0ed84546fb23b790b1d416_prof);

        
        $__internal_80db2d35691fd8cd92ee0eff60aef92eb3aa3523e3d67d753ac85025303d6b96->leave($__internal_80db2d35691fd8cd92ee0eff60aef92eb3aa3523e3d67d753ac85025303d6b96_prof);

    }

    public function getTemplateName()
    {
        return "FrontEndBundle::RestaurentLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  606 => 301,  597 => 300,  583 => 428,  579 => 427,  575 => 426,  571 => 425,  567 => 424,  563 => 423,  559 => 422,  555 => 421,  551 => 420,  547 => 419,  543 => 418,  539 => 417,  535 => 416,  530 => 414,  526 => 413,  522 => 412,  456 => 349,  446 => 342,  410 => 309,  401 => 302,  399 => 300,  387 => 291,  296 => 203,  286 => 196,  224 => 137,  181 => 97,  168 => 87,  160 => 82,  154 => 79,  118 => 46,  103 => 34,  88 => 22,  84 => 21,  80 => 20,  76 => 19,  72 => 18,  68 => 17,  64 => 16,  60 => 15,  56 => 14,  52 => 13,  48 => 12,  44 => 11,  40 => 10,  36 => 9,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Laboom - Food & Restaurant Bistro HTML Template</title>
    <link rel=\"stylesheet\" href=\"{{ asset('FrontEnd/Food/plugin/bootstrap/bootstrap.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('FrontEnd/Food/plugin/bootstrap/datepicker.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('FrontEnd/Food/plugin/font-awesome/font-awesome.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('FrontEnd/Food/plugin/form-field/jquery.formstyler.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('FrontEnd/Food/plugin/revolution-plugin/extralayers.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('FrontEnd/Food/plugin/revolution-plugin/settings.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('FrontEnd/Food/plugin/owl-carousel/owl.carousel.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('FrontEnd/Food/plugin/owl-carousel/owl.theme.default.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('FrontEnd/Food/plugin/slick-slider/slick-theme.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('FrontEnd/Food/plugin/magnific/magnific-popup.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('FrontEnd/Food/plugin/scroll-bar/jquery.mCustomScrollbar.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('FrontEnd/Food/plugin/animation/animate.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('FrontEnd/Food/css/theme.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('FrontEnd/Food/css/responsive.css') }}\">
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>

<body>
<!-- Page pre loader -->
<div id=\"pre-loader\">
    <div class=\"loader-holder\">
        <div class=\"frame\">
            <img src=\"{{ asset('FrontEnd/Food/images/Preloader.gif') }}\" alt=\"Laboom\" />
        </div>
    </div>
</div>
<div class=\"wrapper\">
    <!-- Start Header -->
    <header>
        <div class=\"header-part header-reduce sticky\">
            <div class=\"header-top\">
                <div class=\"container\">
                    <div class=\"header-top-inner\">
                        <div class=\"header-top-left\">
                            <a href=\"#\" class=\"top-cell\"><img src=\"{{ asset('FrontEnd/Food/images/fon.png') }}\" alt=\"\"> <span>123-456-7890</span></a>
                            <a href=\"#\" class=\"top-email\"><span>support@laboom.com</span></a>
                        </div>
                        <div class=\"header-top-right\">
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
                            <div class=\"language-menu\">
                                <a href=\"#\" class=\"current-lang\">English <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i></a>
                                <ul>
                                    <li><a href=\"#\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>Turkish</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>Nederlands</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>Français</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>Deutsch</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>Italiano</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"header-bottom\">
                <div class=\"container\">
                    <div class=\"header-info\">
                        <div class=\"header-info-inner\">
                            <div class=\"book-table header-collect book-md\">
                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#booktable\"><img src=\"{{ asset('FrontEnd/Food/images/icon-table.png') }}\" alt=\"\">Book a Table</a>
                            </div>
                            <div class=\"shop-cart header-collect\">
                                <a href=\"#\"><img src=\"{{ asset('FrontEnd/Food/images/icon-basket.png') }}\" alt=\"\">2 items - \$ 20.89</a>
                                <div class=\"cart-wrap\">
                                    <div class=\"cart-blog\">
                                        <div class=\"cart-item\">
                                            <div class=\"cart-item-left\">
                                                <img src=\"{{ asset('FrontEnd/Food/images/img59.png') }}\" alt=\"\">
                                            </div>
                                            <div class=\"cart-item-right\">
                                                <h6>Caramel Chesse Cake</h6>
                                                <span>\$ 14.00</span>
                                            </div>
                                            <span class=\"delete-icon\"></span>
                                        </div>
                                        <div class=\"cart-item\">
                                            <div class=\"cart-item-left\">
                                                <img src=\"{{ asset('FrontEnd/Food/images/img60.png') }}\" alt=\"\">
                                            </div>
                                            <div class=\"cart-item-right\">
                                                <h6>Caramel Chesse Cake</h6>
                                                <span>\$ 14.00</span>
                                            </div>
                                            <span class=\"delete-icon\"></span>
                                        </div>
                                        <div class=\"subtotal\">
                                            <div class=\"col-md-6 col-sm-6 col-xs-6\">
                                                <h6>Subtotal :</h6>
                                            </div>
                                            <div class=\"col-md-6 col-sm-6 col-xs-6\">
                                                <span>\$ 140.00</span>
                                            </div>
                                        </div>
                                        <div class=\"cart-btn\">
                                            <a href=\"#\" class=\"btn-black view\">VIEW ALL</a>
                                            <a href=\"#\" class=\"btn-main checkout\">CHECK OUT</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"search-part\">
                                <a href=\"#\"></a>
                                <div class=\"search-box\">
                                    <input type=\"text\" name=\"txt\" placeholder=\"Search\">
                                    <input type=\"submit\" name=\"submit\" value=\" \">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"menu-icon\">
                        <a href=\"#\" class=\"hambarger\">
                            <span class=\"bar-1\"></span>
                            <span class=\"bar-2\"></span>
                            <span class=\"bar-3\"></span>
                        </a>
                    </div>
                    <div class=\"book-table header-collect book-sm\">
                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#booktable\"><img src=\"{{ asset('FrontEnd/Food/images/icon-table.png') }}\" alt=\"\">Book a Table</a>
                    </div>
                    <div class=\"menu-main\">
                        <ul>
                            <li class=\"has-child\">
                                <a href=\"index.html\">Home</a>
                                <ul class=\"drop-nav\">
                                    <li><a href=\"index.html\">Home Page 1</a></li>
                                    <li><a href=\"homepage1.html\">Home Page 2</a></li>
                                    <li><a href=\"homepage2.html\">Home Page 3</a></li>
                                    <li><a href=\"homepage3.html\">Home Page 4</a></li>
                                    <li><a href=\"homepage4.html\">Home Page 5</a></li>
                                    <li class=\"drop-has-child\">
                                        <a href=\"#\">Headers</a>
                                        <ul class=\"drop-nav\">
                                            <li><a href=\"index.html\">Header 1</a></li>
                                            <li><a href=\"homepage1.html\">Header 2</a></li>
                                            <li><a href=\"homepage2.html\">Header 3</a></li>
                                            <li><a href=\"homepage3.html\">Header 4</a></li>
                                            <li><a href=\"homepage4.html\">Header 5</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"mega-menu\">
                                <a href=\"#\">Menu</a>
                                <ul class=\"drop-nav\">
                                    <li>
                                        <div class=\"drop-mega-part\">
                                            <div class=\"row\">
                                                <div class=\"col-md-5 col-sm-12 col-xs-12\">
                                                    <span class=\"mega-title\">MAIN MENU</span>
                                                    <div class=\"row\">
                                                        <div class=\"col-md-6 col-sm-12 col-xs-12\">
                                                            <ul>
                                                                <li><a href=\"#\">Ready Player One</a></li>
                                                                <li><a href=\"#\">Ernest Cline</a></li>
                                                                <li><a href=\"#\">Ender's Game</a></li>
            <li><a href=\"#\">Orson Scott Card</a></li>
            <li><a href=\"#\">Americam Gods</a></li>
            <li><a href=\"#\">Neil Gaiman</a></li>
            <li><a href=\"#\">The Great Gatsby</a></li>
            </ul>
            </div>
            <div class=\"col-md-6 col-sm-12 col-xs-12\">
            <ul>
            <li><a href=\"#\">Ready Player One</a></li>
            <li><a href=\"#\">Ernest Cline</a></li>
            <li><a href=\"#\">Ender's Game</a></li>
                                                                <li><a href=\"#\">Orson Scott Card</a></li>
                                                                <li><a href=\"#\">Americam Gods</a></li>
                                                                <li><a href=\"#\">Neil Gaiman</a></li>
                                                                <li><a href=\"#\">The Great Gatsby</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-2 col-sm-12 col-xs-12\">
                                                    <span class=\"mega-title\">IMAGE</span>
                                                    <img src=\"{{ asset('FrontEnd/Food/images/img13.png') }}\" alt=\"\">
                                                </div>
                                                <div class=\"col-md-5 col-sm-12 col-xs-12\">
                                                    <div class=\"mega-preview\">
                                                        <span class=\"mega-title\">DESCRIPTION</span>
                                                        <p>This column can contain whatever you like! Add text, shortcodes, or HTML.Various versions have evolved over the years, sometimes by accident, sometimes on</p>
                                                    </div>
                                                    <div class=\"mega-position\"><img src=\"{{ asset('FrontEnd/Food/images/img14.png') }}\" alt=\"\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"has-child\">
                                <a href=\"shop.html\">Shop</a>
                                <ul class=\"drop-nav\">
                                    <li><a href=\"shop.html\">Shop Page</a></li>
                                    <li><a href=\"shop_single.html\">Shop Single</a></li>
                                    <li><a href=\"shop_cart.html\">Shop Cart</a></li>
                                    <li><a href=\"shop_checkout.html\">Shop Checkout</a></li>
                                    <li><a href=\"order_complete.html\">Order Complete</a></li>
                                    <li><a href=\"track_order.html\">Track Your Order</a></li>
                                    <li><a href=\"login_register.html\">Login & Register</a></li>
                                </ul>
                            </li>
                            <li class=\"has-child\">
                                <a href=\"#\">Pages</a>
                                <ul class=\"drop-nav\">
                                    <li><a href=\"about.html\">About Us</a></li>
                                    <li class=\"drop-has-child\">
                                        <a href=\"service1.html\">Services</a>
                                        <ul class=\"drop-nav\">
                                            <li><a href=\"service1.html\">Service 1</a></li>
                                            <li><a href=\"service2.html\">Service 2</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"drop-has-child\">
                                        <a href=\"gallery1.html\">Gallery</a>
                                        <ul class=\"drop-nav\">
                                            <li><a href=\"gallery1.html\">Gallery 2 Columns</a></li>
                                            <li><a href=\"gallery2.html\">Gallery 3 Columns</a></li>
                                            <li><a href=\"gallery3.html\">Gallery 4 Columns</a></li>
                                            <li><a href=\"gallery_masonry.html\">Gallery Masonry</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"drop-has-child\">
                                        <a href=\"menu1.html\">Menu</a>
                                        <ul class=\"drop-nav\">
                                            <li><a href=\"menu1.html\">Menu 1</a></li>
                                            <li><a href=\"menu2.html\">Menu 2</a></li>
                                            <li><a href=\"menu3.html\">Menu 3</a></li>
                                            <li><a href=\"menu4.html\">Menu 4</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"drop-has-child\">
                                        <a href=\"team.html\">Team</a>
                                        <ul class=\"drop-nav\">
                                            <li><a href=\"team.html\">Team List</a></li>
                                            <li><a href=\"team_single.html\">Team Single</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"drop-has-child\">
                                        <a href=\"contact1.html\">Contact</a>
                                        <ul class=\"drop-nav\">
                                            <li><a href=\"contact1.html\">Contact 1</a></li>
                                            <li><a href=\"contact2.html\">Contact 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"terms_condition.html\">Terms & Condition</a></li>
                                    <li><a href=\"faq.html\">FAQ</a></li>
                                    <li><a href=\"404.html\">404 Error</a></li>
                                </ul>
                            </li>
                            <li class=\"has-child\">
                                <a href=\"blog_2col.html\">Blog</a>
                                <ul class=\"drop-nav\">
                                    <li><a href=\"blog_list.html\">Blog List</a></li>
                                    <li><a href=\"blog_2col.html\">Blog 2 Columns</a></li>
                                    <li><a href=\"blog_full.html\">Blog Full Width</a></li>
                                    <li><a href=\"blog_left_sidebar.html\">Blog Left Sidebar</a></li>
                                    <li><a href=\"blog_right_sidebar.html\">Blog Right Sidebar</a></li>
                                    <li><a href=\"blog_single.html\">Blog Single</a></li>
                                </ul>
                            </li>
                            <li class=\"has-child\">
                                <a href=\"contact1.html\">Contact</a>
                                <ul class=\"drop-nav\">
                                    <li><a href=\"contact1.html\">Contact 1</a></li>
                                    <li><a href=\"contact2.html\">Contact 2</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class=\"logo\">
                        <a href=\"index.html\"><img src=\"{{ asset('FrontEnd/Food/images/logo.png') }}\" alt=\"\"></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->


    {% block body %}
    {% endblock body %}



    <!-- Start Footer -->
    <footer>
        <div class=\"footer-part wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
            <div class=\"icon-default icon-dark\">
                <img src=\"{{ asset('FrontEnd/Food/images/footer-logo.png') }}\" alt=\"\">
            </div>
            <div class=\"container\">
                <div class=\"footer-inner\">
                    <div class=\"footer-info\">
                        <h3>La boom Restaurant</h3>
                        <p>329 Queensberry Street, North Melbourne VIC 3051, Australia.</p>
                        <p><a href=\"#\">123 456 7890</a></p>
                        <p><a href=\"#\">support@laboom.com</a></p>
                    </div>
                </div>
                <div class=\"copy-right\">
                    <div class=\"row\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12 copyright-before\">
                            <span>Copyright © 2017 Polygon Theme. All rights reserved.</span>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12 copyright-after\">
                            <div class=\"social-round\">
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
            <div class=\"icon-find\">
                <a href=\"#\">
                    <img src=\"{{ asset('FrontEnd/Food/images/location.png') }}\" alt=\"\">
                    <span>Find us on Map</span>
                </a>
            </div>
            <div class=\"location-footer-map\">
                <div class=\"icon-find-location\">
                    <a href=\"#\">
                        <img src=\"{{ asset('FrontEnd/Food/images/location.png') }}\" alt=\"\">
            <span>Find us on Map</span>
            </a>
        </div>
        <div class=\"footer-map-outer\">
            <div id=\"footer-map\"></div>
        </div>
    </div>
</div>
</footer>
<!-- End Footer -->
<!-- Start Book Table -->
<div class=\"modal fade booktable\" id=\"booktable\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"booktable\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <div class=\"table-title\">
                    <h2>Reservation</h2>
                    <h6 class=\"heade-xs\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h6>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <select class=\"select-dropbox\">
                            <option>Hour</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <select class=\"select-dropbox\">
                            <option>Number of People</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"text\" name=\"txt\" placeholder=\"Pick a Date\" class=\"date-pick\">
                    </div>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"text\" name=\"txt\" placeholder=\"Phone Number\">
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                        <input type=\"email\" name=\"email\" placeholder=\"Email Address\">
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                        <button class=\"btn-main btn-big\">BOOK A TABLE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Book Table -->
</div>
<!-- Back To Top Arrow -->
<a href=\"#\" class=\"top-arrow\"></a>
<script src=\"{{ asset('FrontEnd/Food/js/jquery.min.js') }}\"></script>
<script src=\"{{ asset('FrontEnd/Food/plugin/bootstrap/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('FrontEnd/Food/plugin/bootstrap/bootstrap-datepicker.js') }}\"></script>
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAf6My1Jfdi1Fmj-DUmX_CcNOZ6FLkQ4Os\"></script>
<script src=\"{{ asset('FrontEnd/Food/plugin/form-field/jquery.formstyler.min.js') }}\"></script>
<script src=\"{{ asset('FrontEnd/Food/plugin/revolution-plugin/jquery.themepunch.plugins.min.js') }}\"></script>
<script src=\"{{ asset('FrontEnd/Food/plugin/revolution-plugin/jquery.themepunch.revolution.min.js') }}\"></script>
<script src=\"{{ asset('FrontEnd/Food/plugin/owl-carousel/owl.carousel.min.js') }}\"></script>
<script src=\"{{ asset('FrontEnd/Food/plugin/slick-slider/slick.min.js') }}\"></script>
<script src=\"{{ asset('FrontEnd/Food/plugin/isotop/isotop.js') }}\"></script>
<script src=\"{{ asset('FrontEnd/Food/plugin/isotop/packery-mode.pkgd.min.js') }}\"></script>
<script src=\"{{ asset('FrontEnd/Food/plugin/magnific/jquery.magnific-popup.min.js') }}\"></script>
<script src=\"{{ asset('FrontEnd/Food/plugin/scroll-bar/jquery.mCustomScrollbar.concat.min.js') }}\"></script>
<script src=\"{{ asset('FrontEnd/Food/plugin/animation/wow.min.js') }}\"></script>
<script src=\"{{ asset('FrontEnd/Food/plugin/parallax/jquery.stellar.js') }}\"></script>
<script src=\"{{ asset('FrontEnd/Food/js/app.js') }}\"></script>
<script src=\"{{ asset('FrontEnd/Food/js/script.js') }}\"></script>
</body>

</html>", "FrontEndBundle::RestaurentLayout.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\src\\FrontEndBundle/Resources/views/RestaurentLayout.html.twig");
    }
}
