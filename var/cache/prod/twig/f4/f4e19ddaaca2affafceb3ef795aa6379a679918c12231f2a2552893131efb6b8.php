<?php

/* FrontEndBundle:Default:Layout.html.twig */
class __TwigTemplate_dcc930f70bfc6d7e6c218bfa61dd361781938ff7aa5fbcc1d41bbd14c69dd48e extends Twig_Template
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
        // line 1
        echo "<html>
<head>
    <!-- Mobile Specific Meta -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- Add Favicon -->
    <link rel=\"shortcut icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo/favicon.png"), "html", null, true);
        echo "\">
    <!-- Author Meta -->
    <meta name=\"author\" content=\"CodePixar\">
    <!-- Meta Description -->
    <meta name=\"description\" content=\"\">
    <!-- Meta Keyword -->
    <meta name=\"keywords\" content=\"\">
    <!-- meta character set -->
    <meta charset=\"utf-8\">
    <!-- Site Title -->
    <title>Educare</title>

    <!--
    CSS
    ============================================= -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://fonts.googleapis.com/css?family=Fjalla+One"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://fonts.googleapis.com/css?family=Nunito:400,600,700"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/materialize.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.carousel.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/et-line.css"), "html", null, true);
        echo "\">
    <!-- <link rel=\"stylesheet\" href=\"css/animate.css\"> -->
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/slicknav.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/flaticon.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
    <!-- <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/minified.css"), "html", null, true);
        echo "\"> -->
</head>
<body>
<header id=\"header1\" class=\"blue-bg default-header\">
    <div class=\"container\">
        <div class=\"navbar-area flex space-between\">
            <div class=\"left-bar\">
                <div class=\"logo\">
                    <a href=\"#\">
                        <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo/logo_esprit.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 165px; height: 60px\">
                    </a>
                </div>
            </div>
            <div class=\"right-bar flex\">
                <nav>
                    <ul id=\"mobile\" class=\"main-menu  hidden-xs\">
                        <li class=\"my-active\"><a href=\"#\">Accueil</a>
                        </li>
                        <li><a href=\"#\">Révision</a></li>
                        <li><a href=\"#\">Annonces</a>
                            <ul class=\"sub-menu\">
                                <li><li><a href=\"#\" target=\"_blank\">Objet perdu</a></li>
                                <li><a href=\"#\" target=\"_blank\">Collocation</a></li>
                            </ul>
                        </li>
                        <li><a href=\"#\">Covoiturage</a></li>
                        <li><a href=\"#\">Club</a></li>
                        <li><a href=\" /accueilrestaurent\">Restaurant</a></li>
                        <li><a href=\"#\">Document administratif</a></li>
                    </ul>
                </nav>
                <div class=\"search-icon hidden-xs\">
                    <span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span>
                </div>
            </div>
        </div>
    </div>
</header>
    <div class=\"search-area\">
        <div class=\"container\">
            <div class=\"row fitscreen flex flex-middle relative\">
                <form action=\"#\" class=\"search-form\">
                    <input id=\"focus\" placeholder=\"Search your query and press “Enter”\" type=\"text\">
                </form>
            </div>
        </div>
    </div>
    <main>
        <section id=\"slider\" class=\"slider-section\">
            <div class=\"slider1 deafult-slider\">
                <div class=\"item fullscreen flex flex-middle\" style=\"background-image: url(";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/slider/1.jpg"), "html", null, true);
        echo ");\">
                    <div class=\"container\">
                        <div class=\"col-lg-offset-6 col-lg-6 col-md-12\">
                            <div class=\"slide-content\">
                                <h1 class=\"light h1\">Introducing Educare University</h1>
                                <p class=\"light mt-10\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href=\"#\" target=\"_blank\" class=\"btn mt-10 mr-10\">Start Now</a>
                                <a href=\"#\" target=\"_blank\" class=\"btn mt-10\">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"overlay-slider\"></div>
                </div>
                <div class=\"item fullscreen flex flex-middle\" style=\"background-image: url(";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/slider/5.jpg"), "html", null, true);
        echo ");\">
                    <div class=\"container\">
                        <div class=\"col-lg-6 col-md-12\">
                            <div class=\"slide-content\">
                                <h1 class=\"light h1\">We are ready to take the challenge</h1>
                                <p class=\"light mt-10\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
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
        // line 110
        $this->displayBlock('body', $context, $blocks);
        // line 112
        echo "</main>
<footer id=\"footer1\" class=\"bg-gray\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"footer-widget\">
                <div class=\"col-sm-6 col-md-3 col-xs-12 tb-height\">
                    <div class=\"footer-widget-address\">
                        <img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/footer/1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
                        <ul class=\"footer-address\">
                            <li><span class=\"et-line icon-map-pin\"></span>56/8, West panthapath,India.</li>
                            <li><span class=\"et-line icon-mic\"></span> +00 91 234 567 890</li>
                            <li><span class=\"et-line icon-global\"></span>www.educare.com</li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3 col-xs-12 tb-height\">
                    <div class=\"footer-widget-link\">
                        <h4 class=\"second-title\">Useful Links</h4>
                        <div class=\"row\">
                            <div class=\"col-sm-4\">
                                <ul>
                                    <li><a href=\"#\" target=\"_blank\">About Us</a></li>
                                    <li><a href=\"#\" target=\"_blank\">Blog</a></li>
                                    <li><a href=\"#\" target=\"_blank\">Contact</a></li>
                                    <li><a href=\"#\" target=\"_blank\">Courses</a></li>
                                    <li><a href=\"#\" target=\"_blank\">FAQS</a></li>
                                    <li><a href=\"#\" target=\"_blank\">Events</a></li>
                                </ul>
                            </div>
                            <div class=\"col-sm-8 col-xs-12\">
                                <ul>
                                    <li><a href=\"#\">Become a Teacher</a></li>
                                    <li><a href=\"#\">Maintenance</a></li>
                                    <li><a href=\"#\">Language Packs</a></li>
                                    <li><a href=\"#\">LearnPress</a></li>
                                    <li><a href=\"#\">Release Status</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3 col-xs-12 tb-height\">
                    <div class=\"footer-widget-course\">
                        <h4 class=\"second-title\">Recent Courses</h4>
                        <div class=\"media single-widget-course\">
                            <div class=\"media-left\">
                                <a href=\"#\" target=\"_blank\">
                                    <img class=\"media-object\" src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/footer/2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </div>
                            <div class=\"media-body\">
                                <h4 class=\"media-heading\"><a href=\"#\" target=\"_blank\">Graphic Design Course</a></h4>
                                <p class=\"reviews\">
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <span>20 Reviews</span>
                                </p>
                            </div>
                        </div>
                        <div class=\"media single-widget-course\">
                            <div class=\"media-left\">
                                <a href=\"#\" target=\"_blank\">
                                    <img class=\"media-object\" src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/footer/3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </div>
                            <div class=\"media-body\">
                                <h4 class=\"media-heading\"><a href=\"#\" target=\"_blank\">Adobe sketch Course</a></h4>
                                <p class=\"reviews\">
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <span>35 Reviews</span>
                                </p>
                            </div>
                        </div>
                        <div class=\"media single-widget-course\">
                            <div class=\"media-left\">
                                <a href=\"#\" target=\"_blank\">
                                    <img class=\"media-object\" src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/footer/2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </div>
                            <div class=\"media-body\">
                                <h4 class=\"media-heading\"><a href=\"#\" target=\"_blank\"> Adobe Indesign Course</a></h4>
                                <p class=\"reviews\">
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <span>35 Reviews</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3 col-xs-12 tb-height\">
                    <div class=\"footer-widget-contact\">
                        <h4 class=\"second-title\">Send Message</h4>
                        <form action=\"#\">
                            <p><input placeholder=\"Name\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'First Name'\" type=\"text\" required></p>
                            <p><input placeholder=\"Email\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Email Address'\" type=\"email\" required></p>
                            <p><textarea cols=\"30\" rows=\"10\" placeholder=\"Comment\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Comment'\" required></textarea></p>
                            <p><button class=\"btn submit-btn\">Send</button></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"footer-social-link\">
                    <ul class=\"flex flex-center\">
                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-rss\"></i></a></li>
                    </ul>
                </div>
                <div class=\"footer-bottom-text\">
                    <p>Copyright &amp; copy 2017. Designed by <a href=\"#\">Codepixar Studio</a>. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/materialize.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.slicknav.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://maps.googleapis.com/maps/api/js?key=AIzaSyCqCaX4fFEQRiTJoeclXKZRaFh2fYfps_Y"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.nice-select.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.jCounter-0.1.4.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
<!-- <script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/minified/minified.js"), "html", null, true);
        echo "\"></script> -->
<script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/map-init.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
    }

    // line 110
    public function block_body($context, array $blocks = array())
    {
        // line 111
        echo "        ";
    }

    public function getTemplateName()
    {
        return "FrontEndBundle:Default:Layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 111,  374 => 110,  367 => 254,  363 => 253,  359 => 252,  355 => 251,  351 => 250,  347 => 249,  343 => 248,  339 => 247,  335 => 246,  331 => 245,  327 => 244,  323 => 243,  272 => 195,  251 => 177,  230 => 159,  187 => 119,  178 => 112,  176 => 110,  158 => 95,  142 => 82,  98 => 41,  86 => 32,  82 => 31,  78 => 30,  74 => 29,  70 => 28,  65 => 26,  61 => 25,  57 => 24,  53 => 23,  49 => 22,  45 => 21,  27 => 6,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontEndBundle:Default:Layout.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\src\\FrontEndBundle/Resources/views/Default/Layout.html.twig");
    }
}
