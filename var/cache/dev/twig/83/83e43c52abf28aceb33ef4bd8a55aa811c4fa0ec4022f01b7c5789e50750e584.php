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
        $__internal_f75cd9ad62da53e61f7f242cbfd2159c529b20176f8f50c2d63cf6b4dfac25b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f75cd9ad62da53e61f7f242cbfd2159c529b20176f8f50c2d63cf6b4dfac25b9->enter($__internal_f75cd9ad62da53e61f7f242cbfd2159c529b20176f8f50c2d63cf6b4dfac25b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle::RestaurentLayout.html.twig"));

        $__internal_9207c32ec55face317e13b7a9dea637afcacc3016a072911df917c49b85ada28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9207c32ec55face317e13b7a9dea637afcacc3016a072911df917c49b85ada28->enter($__internal_9207c32ec55face317e13b7a9dea637afcacc3016a072911df917c49b85ada28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle::RestaurentLayout.html.twig"));

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
                                <a href=\"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("resto_menu_categories");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/icon_table.png"), "html", null, true);
        echo "\" alt=\"\">Our Menu</a>
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
                                            <a href=\"";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("resto_shop_cart");
        echo "\" class=\"btn-black view\">VIEW ALL</a>
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
                                <a href=\"";
        // line 142
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("front_end_resto_home");
        echo "\">Home</a>
                            </li>


                            <li class=\"has-child\">
                                <a href=\"";
        // line 147
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("resto_menu_categories");
        echo "\">Menu</a>

                            </li>


                        </ul>
                    </div>
                    <div class=\"logo\">
                        <a href=\"index.html\"><img src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->


    ";
        // line 164
        $this->displayBlock('body', $context, $blocks);
        // line 166
        echo "


    <!-- Start Footer -->
    <footer>
        <div class=\"footer-part wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
            <div class=\"icon-default icon-dark\">
                <img src=\"";
        // line 173
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
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/location.png"), "html", null, true);
        echo "\" alt=\"\">
                    <span>Find us on Map</span>
                </a>
            </div>
            <div class=\"location-footer-map\">
                <div class=\"icon-find-location\">
                    <a href=\"#\">
                        <img src=\"";
        // line 213
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
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/plugin/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/plugin/bootstrap/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAf6My1Jfdi1Fmj-DUmX_CcNOZ6FLkQ4Os\"></script>
<script src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/plugin/form-field/jquery.formstyler.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/plugin/revolution-plugin/jquery.themepunch.plugins.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/plugin/revolution-plugin/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/plugin/owl-carousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/plugin/slick-slider/slick.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/plugin/isotop/isotop.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/plugin/isotop/packery-mode.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/plugin/magnific/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/plugin/scroll-bar/jquery.mCustomScrollbar.concat.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/plugin/animation/wow.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/plugin/parallax/jquery.stellar.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/js/app.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/js/script.js"), "html", null, true);
        echo "\"></script>


</body>

</html>";
        
        $__internal_f75cd9ad62da53e61f7f242cbfd2159c529b20176f8f50c2d63cf6b4dfac25b9->leave($__internal_f75cd9ad62da53e61f7f242cbfd2159c529b20176f8f50c2d63cf6b4dfac25b9_prof);

        
        $__internal_9207c32ec55face317e13b7a9dea637afcacc3016a072911df917c49b85ada28->leave($__internal_9207c32ec55face317e13b7a9dea637afcacc3016a072911df917c49b85ada28_prof);

    }

    // line 164
    public function block_body($context, array $blocks = array())
    {
        $__internal_e795b1564f722f19be18b6aedec2a9d3f4e0aa94ff1a190b67c6e672975ef63c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e795b1564f722f19be18b6aedec2a9d3f4e0aa94ff1a190b67c6e672975ef63c->enter($__internal_e795b1564f722f19be18b6aedec2a9d3f4e0aa94ff1a190b67c6e672975ef63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e9a9985a62face3cb4bd2bee3611de39f74264cc35e53ad0642edaaa58d99ee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9a9985a62face3cb4bd2bee3611de39f74264cc35e53ad0642edaaa58d99ee7->enter($__internal_e9a9985a62face3cb4bd2bee3611de39f74264cc35e53ad0642edaaa58d99ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 165
        echo "    ";
        
        $__internal_e9a9985a62face3cb4bd2bee3611de39f74264cc35e53ad0642edaaa58d99ee7->leave($__internal_e9a9985a62face3cb4bd2bee3611de39f74264cc35e53ad0642edaaa58d99ee7_prof);

        
        $__internal_e795b1564f722f19be18b6aedec2a9d3f4e0aa94ff1a190b67c6e672975ef63c->leave($__internal_e795b1564f722f19be18b6aedec2a9d3f4e0aa94ff1a190b67c6e672975ef63c_prof);

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
        return array (  480 => 165,  471 => 164,  455 => 295,  451 => 294,  447 => 293,  443 => 292,  439 => 291,  435 => 290,  431 => 289,  427 => 288,  423 => 287,  419 => 286,  415 => 285,  411 => 284,  407 => 283,  402 => 281,  398 => 280,  394 => 279,  325 => 213,  315 => 206,  279 => 173,  270 => 166,  268 => 164,  256 => 155,  245 => 147,  237 => 142,  229 => 137,  203 => 114,  183 => 97,  170 => 87,  162 => 82,  154 => 79,  118 => 46,  103 => 34,  88 => 22,  84 => 21,  80 => 20,  76 => 19,  72 => 18,  68 => 17,  64 => 16,  60 => 15,  56 => 14,  52 => 13,  48 => 12,  44 => 11,  40 => 10,  36 => 9,  26 => 1,);
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
                                <a href=\"{{ path('resto_menu_categories') }}\"><img src=\"{{ asset('FrontEnd/Food/images/icon_table.png') }}\" alt=\"\">Our Menu</a>
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
                                            <a href=\"{{ path('resto_shop_cart') }}\" class=\"btn-black view\">VIEW ALL</a>
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
                                <a href=\"{{ path ('front_end_resto_home') }}\">Home</a>
                            </li>


                            <li class=\"has-child\">
                                <a href=\"{{ path ('resto_menu_categories') }}\">Menu</a>

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
