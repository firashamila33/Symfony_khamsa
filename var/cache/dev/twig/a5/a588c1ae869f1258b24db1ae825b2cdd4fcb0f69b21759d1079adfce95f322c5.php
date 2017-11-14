<?php

/* FrontEndBundle::Layout.html.twig */
class __TwigTemplate_390fb4cdc4f4b651a8fadae08dc64633d00da86596bb5578bcd408457bf8fae9 extends Twig_Template
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
        $__internal_495d05956951428256f79e19b72357539532d77fd20b13a2ca052b31e70a6489 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_495d05956951428256f79e19b72357539532d77fd20b13a2ca052b31e70a6489->enter($__internal_495d05956951428256f79e19b72357539532d77fd20b13a2ca052b31e70a6489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle::Layout.html.twig"));

        $__internal_7a9653aa1442c433461049a145615a46765b5e237a895a1d180dafeb05715bd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a9653aa1442c433461049a145615a46765b5e237a895a1d180dafeb05715bd3->enter($__internal_7a9653aa1442c433461049a145615a46765b5e237a895a1d180dafeb05715bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle::Layout.html.twig"));

        // line 1
        echo "<html>
<head>
    <!-- Mobile Specific Meta -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- Add Favicon -->
    <link rel=\"shortcut icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo/logo-esprit.png"), "html", null, true);
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
        
        $__internal_495d05956951428256f79e19b72357539532d77fd20b13a2ca052b31e70a6489->leave($__internal_495d05956951428256f79e19b72357539532d77fd20b13a2ca052b31e70a6489_prof);

        
        $__internal_7a9653aa1442c433461049a145615a46765b5e237a895a1d180dafeb05715bd3->leave($__internal_7a9653aa1442c433461049a145615a46765b5e237a895a1d180dafeb05715bd3_prof);

    }

    // line 33
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_8564cca617a539e2b0590d07b867c9a07e1297b921e09aa4c7d680906b2ffba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8564cca617a539e2b0590d07b867c9a07e1297b921e09aa4c7d680906b2ffba9->enter($__internal_8564cca617a539e2b0590d07b867c9a07e1297b921e09aa4c7d680906b2ffba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_2b1669439cf58d89c56ead6951a690972872489d3aa1f113128d48aa4bf74172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b1669439cf58d89c56ead6951a690972872489d3aa1f113128d48aa4bf74172->enter($__internal_2b1669439cf58d89c56ead6951a690972872489d3aa1f113128d48aa4bf74172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 34
        echo "    ";
        
        $__internal_2b1669439cf58d89c56ead6951a690972872489d3aa1f113128d48aa4bf74172->leave($__internal_2b1669439cf58d89c56ead6951a690972872489d3aa1f113128d48aa4bf74172_prof);

        
        $__internal_8564cca617a539e2b0590d07b867c9a07e1297b921e09aa4c7d680906b2ffba9->leave($__internal_8564cca617a539e2b0590d07b867c9a07e1297b921e09aa4c7d680906b2ffba9_prof);

    }

    // line 83
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e0f366d8750441860db855ec4f34ee75bae6768547aa27d112487d89bd65038 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e0f366d8750441860db855ec4f34ee75bae6768547aa27d112487d89bd65038->enter($__internal_9e0f366d8750441860db855ec4f34ee75bae6768547aa27d112487d89bd65038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e5f0de0c80e43563812e85045d8e2c7e8b0e0e63c73c08422fa5059edba8aea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5f0de0c80e43563812e85045d8e2c7e8b0e0e63c73c08422fa5059edba8aea2->enter($__internal_e5f0de0c80e43563812e85045d8e2c7e8b0e0e63c73c08422fa5059edba8aea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 84
        echo "        ";
        
        $__internal_e5f0de0c80e43563812e85045d8e2c7e8b0e0e63c73c08422fa5059edba8aea2->leave($__internal_e5f0de0c80e43563812e85045d8e2c7e8b0e0e63c73c08422fa5059edba8aea2_prof);

        
        $__internal_9e0f366d8750441860db855ec4f34ee75bae6768547aa27d112487d89bd65038->leave($__internal_9e0f366d8750441860db855ec4f34ee75bae6768547aa27d112487d89bd65038_prof);

    }

    // line 228
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_c9e1e180f531a2fd02fb0be251f7d4d09b85bdadd14f52c305fefbcd82a59e67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9e1e180f531a2fd02fb0be251f7d4d09b85bdadd14f52c305fefbcd82a59e67->enter($__internal_c9e1e180f531a2fd02fb0be251f7d4d09b85bdadd14f52c305fefbcd82a59e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_087cdcee2a2fae57887063282edde4124546efc8a8d2581ef4fcb5979274791f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_087cdcee2a2fae57887063282edde4124546efc8a8d2581ef4fcb5979274791f->enter($__internal_087cdcee2a2fae57887063282edde4124546efc8a8d2581ef4fcb5979274791f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_087cdcee2a2fae57887063282edde4124546efc8a8d2581ef4fcb5979274791f->leave($__internal_087cdcee2a2fae57887063282edde4124546efc8a8d2581ef4fcb5979274791f_prof);

        
        $__internal_c9e1e180f531a2fd02fb0be251f7d4d09b85bdadd14f52c305fefbcd82a59e67->leave($__internal_c9e1e180f531a2fd02fb0be251f7d4d09b85bdadd14f52c305fefbcd82a59e67_prof);

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
        return array (  417 => 228,  407 => 84,  398 => 83,  388 => 34,  379 => 33,  368 => 230,  366 => 228,  362 => 227,  358 => 226,  354 => 225,  350 => 224,  346 => 223,  342 => 222,  338 => 221,  334 => 220,  330 => 219,  326 => 218,  322 => 217,  318 => 216,  267 => 168,  246 => 150,  225 => 132,  182 => 92,  173 => 85,  171 => 83,  146 => 61,  142 => 60,  138 => 59,  129 => 53,  125 => 52,  120 => 50,  110 => 43,  100 => 35,  98 => 33,  94 => 32,  90 => 31,  86 => 30,  82 => 29,  78 => 28,  73 => 26,  69 => 25,  65 => 24,  61 => 23,  57 => 22,  53 => 21,  35 => 6,  28 => 1,);
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
    <link rel=\"shortcut icon\" href=\"{{ asset('img/logo/logo-esprit.png') }}\">
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
    <link href=\"{{ asset('https://fonts.googleapis.com/css?family=Fjalla+One') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('https://fonts.googleapis.com/css?family=Nunito:400,600,700') }}\" rel=\"stylesheet\">
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
</html>", "FrontEndBundle::Layout.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\src\\FrontEndBundle/Resources/views/Layout.html.twig");
    }
}
