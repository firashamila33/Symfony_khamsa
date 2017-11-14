<?php

/* FrontEndBundle::Layout.html.twig */
class __TwigTemplate_a8ba50438a1cbc4ff64f98198ac7e1af10d57719673456179138153e7ac9c749 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02178685633ce8f7a4c9abf1f523b5e1a98f198a642771f0745c0f664b7360f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02178685633ce8f7a4c9abf1f523b5e1a98f198a642771f0745c0f664b7360f8->enter($__internal_02178685633ce8f7a4c9abf1f523b5e1a98f198a642771f0745c0f664b7360f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle::Layout.html.twig"));

        $__internal_8f91d0df13234e8d19eb7d73a9815115066e11d14bbcf8151d2563922ef4c57d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f91d0df13234e8d19eb7d73a9815115066e11d14bbcf8151d2563922ef4c57d->enter($__internal_8f91d0df13234e8d19eb7d73a9815115066e11d14bbcf8151d2563922ef4c57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle::Layout.html.twig"));

        // line 1
        echo "<html>
<head>
    <!-- Mobile Specific Meta -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- Add Favicon -->
    <link rel=\"shortcut icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo/logoEsprit.png"), "html", null, true);
        echo "\" style=\"width: 80px; height: 30px\">
    <!-- Author Meta -->
    <meta name=\"author\" content=\"CodePixar\">
    <!-- Meta Description -->
    <meta name=\"description\" content=\"\">
    <!-- Meta Keyword -->
    <meta name=\"keywords\" content=\"\">
    <!-- meta character set -->
    <meta charset=\"utf-8\">
    <!-- Site Title -->
    <title>Khamsa</title>

    <!--
    CSS
    ============================================= -->
    <link href=\"https://fonts.googleapis.com/css?family=Fjalla+One\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Nunito:400,600,700\" rel=\"stylesheet\">
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
    ";
        // line 33
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 35
        echo "</head>
<body>
<header id=\"header1\" class=\"blue-bg default-header\">
    <div class=\"container\">
        <div class=\"navbar-area flex space-between\">
            <div class=\"left-bar\">
                <div class=\"logo\">
                    <a href=\"#\">
                        <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo/logo_esprit.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 165px; height: 60px\">
                    </a>
                </div>
            </div>
            <div class=\"right-bar flex\">
                <nav>
                    <ul id=\"mobile\" class=\"main-menu  hidden-xs\">
                        <li class=\"my-active\"><a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("front_end_homepage");
        echo "\">Accueil</a>
                        </li>
                        <li><a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("front_end_revision");
        echo "\">Révision</a></li>
                        <li><a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_root");
        echo "\">Annonces</a>
                            <ul class=\"sub-menu\">
                                <li><li><a href=\"#\" target=\"_blank\">Objet perdu</a></li>
                                <li><a href=\"#\" target=\"_blank\">Collocation</a></li>
                            </ul>
                        </li>
                        <li><a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("front_end_covoiturage");
        echo "\">Covoiturage</a></li>
                        <li><a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("front_end_club");
        echo "\">Club</a></li>
                        <li><a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("front_end_resto");
        echo "\">Restaurant</a></li>
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

        ";
        // line 83
        $this->displayBlock('body', $context, $blocks);
        // line 85
        echo "</main>
<footer id=\"footer1\" class=\"bg-gray\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"footer-widget\">
                <div class=\"col-sm-6 col-md-3 col-xs-12 tb-height\">
                    <div class=\"footer-widget-address\">
                        <img src=\"";
        // line 92
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
        // line 132
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
        // line 150
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
        // line 168
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
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/materialize.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.slicknav.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://maps.googleapis.com/maps/api/js?key=AIzaSyCqCaX4fFEQRiTJoeclXKZRaFh2fYfps_Y"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.nice-select.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.jCounter-0.1.4.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
<!-- <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/minified/minified.js"), "html", null, true);
        echo "\"></script> -->
<script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/map-init.js"), "html", null, true);
        echo "\"></script>
";
        // line 228
        $this->displayBlock('javascript', $context, $blocks);
        // line 230
        echo "</body>
</html>";
        
        $__internal_02178685633ce8f7a4c9abf1f523b5e1a98f198a642771f0745c0f664b7360f8->leave($__internal_02178685633ce8f7a4c9abf1f523b5e1a98f198a642771f0745c0f664b7360f8_prof);

        
        $__internal_8f91d0df13234e8d19eb7d73a9815115066e11d14bbcf8151d2563922ef4c57d->leave($__internal_8f91d0df13234e8d19eb7d73a9815115066e11d14bbcf8151d2563922ef4c57d_prof);

    }

    // line 33
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_878b82426aba1b9a7e1cb87386745a50bc40b3daaa32af8706ca59aea68676d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_878b82426aba1b9a7e1cb87386745a50bc40b3daaa32af8706ca59aea68676d0->enter($__internal_878b82426aba1b9a7e1cb87386745a50bc40b3daaa32af8706ca59aea68676d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_bd93d8e4ddb829b755266e973d9e78471651dfcf88d2b1fcff992a0aabb22ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd93d8e4ddb829b755266e973d9e78471651dfcf88d2b1fcff992a0aabb22ae4->enter($__internal_bd93d8e4ddb829b755266e973d9e78471651dfcf88d2b1fcff992a0aabb22ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 34
        echo "    ";
        
        $__internal_bd93d8e4ddb829b755266e973d9e78471651dfcf88d2b1fcff992a0aabb22ae4->leave($__internal_bd93d8e4ddb829b755266e973d9e78471651dfcf88d2b1fcff992a0aabb22ae4_prof);

        
        $__internal_878b82426aba1b9a7e1cb87386745a50bc40b3daaa32af8706ca59aea68676d0->leave($__internal_878b82426aba1b9a7e1cb87386745a50bc40b3daaa32af8706ca59aea68676d0_prof);

    }

    // line 83
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a840dbaee66ce5632782b5e7afe46bf93c17fa9a44bd43595caa5bffc00eaee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a840dbaee66ce5632782b5e7afe46bf93c17fa9a44bd43595caa5bffc00eaee->enter($__internal_7a840dbaee66ce5632782b5e7afe46bf93c17fa9a44bd43595caa5bffc00eaee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_69f689e6e0cbf44aeea90f8cd2c3455592ea0c0a942710489a92af436b58d3c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69f689e6e0cbf44aeea90f8cd2c3455592ea0c0a942710489a92af436b58d3c2->enter($__internal_69f689e6e0cbf44aeea90f8cd2c3455592ea0c0a942710489a92af436b58d3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 84
        echo "        ";
        
        $__internal_69f689e6e0cbf44aeea90f8cd2c3455592ea0c0a942710489a92af436b58d3c2->leave($__internal_69f689e6e0cbf44aeea90f8cd2c3455592ea0c0a942710489a92af436b58d3c2_prof);

        
        $__internal_7a840dbaee66ce5632782b5e7afe46bf93c17fa9a44bd43595caa5bffc00eaee->leave($__internal_7a840dbaee66ce5632782b5e7afe46bf93c17fa9a44bd43595caa5bffc00eaee_prof);

    }

    // line 228
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_2042718d22a2758711012bf0dbd5c4a0a408474b2a96e4a3ba40e3a73b54e956 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2042718d22a2758711012bf0dbd5c4a0a408474b2a96e4a3ba40e3a73b54e956->enter($__internal_2042718d22a2758711012bf0dbd5c4a0a408474b2a96e4a3ba40e3a73b54e956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_18fd99251c3f1146e1d198a4de166bb2ea6a85a433fefeb31bff5e7ca9a2ab10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18fd99251c3f1146e1d198a4de166bb2ea6a85a433fefeb31bff5e7ca9a2ab10->enter($__internal_18fd99251c3f1146e1d198a4de166bb2ea6a85a433fefeb31bff5e7ca9a2ab10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_18fd99251c3f1146e1d198a4de166bb2ea6a85a433fefeb31bff5e7ca9a2ab10->leave($__internal_18fd99251c3f1146e1d198a4de166bb2ea6a85a433fefeb31bff5e7ca9a2ab10_prof);

        
        $__internal_2042718d22a2758711012bf0dbd5c4a0a408474b2a96e4a3ba40e3a73b54e956->leave($__internal_2042718d22a2758711012bf0dbd5c4a0a408474b2a96e4a3ba40e3a73b54e956_prof);

    }

    public function getTemplateName()
    {
        return "FrontEndBundle::Layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 228,  401 => 84,  392 => 83,  382 => 34,  373 => 33,  362 => 230,  360 => 228,  356 => 227,  352 => 226,  348 => 225,  344 => 224,  340 => 223,  336 => 222,  332 => 221,  328 => 220,  324 => 219,  320 => 218,  316 => 217,  312 => 216,  261 => 168,  240 => 150,  219 => 132,  176 => 92,  167 => 85,  165 => 83,  140 => 61,  136 => 60,  132 => 59,  123 => 53,  119 => 52,  114 => 50,  104 => 43,  94 => 35,  92 => 33,  88 => 32,  84 => 31,  80 => 30,  76 => 29,  72 => 28,  67 => 26,  63 => 25,  59 => 24,  55 => 23,  35 => 6,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>
    <!-- Mobile Specific Meta -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- Add Favicon -->
    <link rel=\"shortcut icon\" href=\"{{ asset('img/logo/logoEsprit.png') }}\" style=\"width: 80px; height: 30px\">
    <!-- Author Meta -->
    <meta name=\"author\" content=\"CodePixar\">
    <!-- Meta Description -->
    <meta name=\"description\" content=\"\">
    <!-- Meta Keyword -->
    <meta name=\"keywords\" content=\"\">
    <!-- meta character set -->
    <meta charset=\"utf-8\">
    <!-- Site Title -->
    <title>Khamsa</title>

    <!--
    CSS
    ============================================= -->
    <link href=\"https://fonts.googleapis.com/css?family=Fjalla+One\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Nunito:400,600,700\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/materialize.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/owl.carousel.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/et-line.css') }}\">
    <!-- <link rel=\"stylesheet\" href=\"css/animate.css\"> -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/slicknav.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/flaticon.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/main.css')}}\">
    <!-- <link rel=\"stylesheet\" href=\"{{ asset('css/minified.css') }}\"> -->
    {% block stylesheet %}
    {% endblock stylesheet %}
</head>
<body>
<header id=\"header1\" class=\"blue-bg default-header\">
    <div class=\"container\">
        <div class=\"navbar-area flex space-between\">
            <div class=\"left-bar\">
                <div class=\"logo\">
                    <a href=\"#\">
                        <img src=\"{{ asset('img/logo/logo_esprit.png') }}\" alt=\"\" style=\"width: 165px; height: 60px\">
                    </a>
                </div>
            </div>
            <div class=\"right-bar flex\">
                <nav>
                    <ul id=\"mobile\" class=\"main-menu  hidden-xs\">
                        <li class=\"my-active\"><a href=\"{{ path('front_end_homepage') }}\">Accueil</a>
                        </li>
                        <li><a href=\"{{ path('front_end_revision') }}\">Révision</a></li>
                        <li><a href=\"{{ path('login_root') }}\">Annonces</a>
                            <ul class=\"sub-menu\">
                                <li><li><a href=\"#\" target=\"_blank\">Objet perdu</a></li>
                                <li><a href=\"#\" target=\"_blank\">Collocation</a></li>
                            </ul>
                        </li>
                        <li><a href=\"{{ path('front_end_covoiturage') }}\">Covoiturage</a></li>
                        <li><a href=\"{{ path('front_end_club') }}\">Club</a></li>
                        <li><a href=\"{{ path('front_end_resto') }}\">Restaurant</a></li>
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

        {% block body %}
        {% endblock body %}
</main>
<footer id=\"footer1\" class=\"bg-gray\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"footer-widget\">
                <div class=\"col-sm-6 col-md-3 col-xs-12 tb-height\">
                    <div class=\"footer-widget-address\">
                        <img src=\"{{ asset('img/footer/1.jpg') }}\" alt=\"\" class=\"img-responsive\">
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
                                    <img class=\"media-object\" src=\"{{ asset('img/footer/2.jpg') }}\" alt=\"\">
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
                                    <img class=\"media-object\" src=\"{{ asset('img/footer/3.jpg') }}\" alt=\"\">
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
                                    <img class=\"media-object\" src=\"{{ asset('img/footer/2.jpg') }}\" alt=\"\">
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
<script src=\"{{ asset('js/vendor/jquery-2.2.4.min.js') }}\"></script>
<script src=\"{{ asset('js/vendor/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('js/vendor/materialize.min.js') }}\"></script>
<script src=\"{{ asset('js/owl.carousel.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery.sticky.js') }}\"></script>
<script src=\"{{ asset('js/jquery.slicknav.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyCqCaX4fFEQRiTJoeclXKZRaFh2fYfps_Y') }}\"></script>
<script src=\"{{ asset('js/jquery.nice-select.js') }}\"></script>
<script src=\"{{ asset('js/jquery.jCounter-0.1.4.js') }}\"></script>
<script src=\"{{ asset('js/main.js') }}\"></script>
<!-- <script src=\"{{ asset('js/minified/minified.js') }}\"></script> -->
<script src=\"{{ asset('js/map-init.js') }}\"></script>
{% block javascript %}
{% endblock javascript %}
</body>
</html>", "FrontEndBundle::Layout.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\src\\FrontEndBundle\\Resources\\views\\Layout.html.twig");
    }
}
