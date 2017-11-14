<?php

/* @EspritForAllBackEnd/BackEndAcceuil.html.twig */
class __TwigTemplate_14ef4ebeb9254908df8ff89a38938219afae960aa81b32067ba0810192f28e5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b9ec652953f6144c31cd89e75c00d31bb6e6ceb3efd5e87b9dc46fa6998748b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b9ec652953f6144c31cd89e75c00d31bb6e6ceb3efd5e87b9dc46fa6998748b->enter($__internal_0b9ec652953f6144c31cd89e75c00d31bb6e6ceb3efd5e87b9dc46fa6998748b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EspritForAllBackEnd/BackEndAcceuil.html.twig"));

        $__internal_58efff49fd94df5e59f836466a4ca7d221366ceb74f7211b20b0d25f6b9968ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58efff49fd94df5e59f836466a4ca7d221366ceb74f7211b20b0d25f6b9968ff->enter($__internal_58efff49fd94df5e59f836466a4ca7d221366ceb74f7211b20b0d25f6b9968ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EspritForAllBackEnd/BackEndAcceuil.html.twig"));

        // line 1
        echo "<html lang=\"en\">

<!--================================================================================
\tItem Name: Materialize - Material Design Admin Template
\tVersion: 3.1
\tAuthor: GeeksLabs
\tAuthor URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->


<!-- Mirrored from demo.geekslabs.com/materialize/v3.1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jul 2017 22:29:29 GMT -->
<head>
    ";
        // line 13
        $this->displayBlock('head', $context, $blocks);
        // line 56
        echo "
</head>

<body>
<!-- Start Page Loading -->
<div id=\"loader-wrapper\">
    <div id=\"loader\"></div>
    <div class=\"loader-section section-left\"></div>
    <div class=\"loader-section section-right\"></div>
</div>
<!-- End Page Loading -->

<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START HEADER -->
<header id=\"header\" class=\"page-topbar\">
    <!-- start header nav-->
    <div class=\"navbar-fixed\">
        <nav class=\"navbar-color\">
            <div class=\"nav-wrapper\">
                <ul class=\"left\">
                    <li><h1 class=\"logo-wrapper\"><a href=\"index.html\" class=\"brand-logo darken-1\"><img
                                        src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backend/images/materialize-logo.png"), "html", null, true);
        echo "\" alt=\"materialize logo\"></a>
                            <span
                                    class=\"logo-text\">Materialize</span></h1></li>
                </ul>
                <div class=\"header-search-wrapper hide-on-med-and-down\">
                    <i class=\"mdi-action-search\"></i>
                    <input type=\"text\" name=\"Search\" class=\"header-search-input z-depth-2\"
                           placeholder=\"Explore Materialize\"/>
                </div>
                <ul class=\"right hide-on-med-and-down\">

                    <li><a href=\"javascript:void(0);\" class=\"waves-effect waves-block waves-light toggle-fullscreen\"><i
                                    class=\"mdi-action-settings-overscan\"></i></a>
                    </li>
                    <li><a href=\"javascript:void(0);\" class=\"waves-effect waves-block waves-light notification-button\"
                           data-activates=\"notifications-dropdown\"><i class=\"mdi-social-notifications\">
                                <small class=\"notification-badge\">5</small>
                            </i>

                        </a>
                    </li>
                    <li><a href=\"#\" data-activates=\"chat-out\"
                           class=\"waves-effect waves-block waves-light chat-collapse\"><i
                                    class=\"mdi-communication-chat\"></i></a>
                    </li>
                </ul>
                <!-- translation-button -->

                <!-- notifications-dropdown -->
                <ul id=\"notifications-dropdown\" class=\"dropdown-content\">
                    <li>
                        <h5>NOTIFICATIONS <span class=\"new badge\">5</span></h5>
                    </li>
                    <li class=\"divider\"></li>
                    <li>
                        <a href=\"#!\"><i class=\"mdi-action-add-shopping-cart\"></i> A new order has been placed!</a>
                        <time class=\"media-meta\" datetime=\"2015-06-12T20:50:48+08:00\">2 hours ago</time>
                    </li>
                    <li>
                        <a href=\"#!\"><i class=\"mdi-action-stars\"></i> Completed the task</a>
                        <time class=\"media-meta\" datetime=\"2015-06-12T20:50:48+08:00\">3 days ago</time>
                    </li>
                    <li>
                        <a href=\"#!\"><i class=\"mdi-action-settings\"></i> Settings updated</a>
                        <time class=\"media-meta\" datetime=\"2015-06-12T20:50:48+08:00\">4 days ago</time>
                    </li>
                    <li>
                        <a href=\"#!\"><i class=\"mdi-editor-insert-invitation\"></i> Director meeting started</a>
                        <time class=\"media-meta\" datetime=\"2015-06-12T20:50:48+08:00\">6 days ago</time>
                    </li>
                    <li>
                        <a href=\"#!\"><i class=\"mdi-action-trending-up\"></i> Generate monthly report</a>
                        <time class=\"media-meta\" datetime=\"2015-06-12T20:50:48+08:00\">1 week ago</time>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- end header nav-->
</header>
<!-- END HEADER -->

<!-- ##################################################################################--!>


<!-- START MAIN -->
<div id=\"main\">
    <!-- START WRAPPER -->
    <div class=\"wrapper\">

        <!-- START LEFT SIDEBAR NAV-->
        <aside id=\"left-sidebar-nav\">
            <ul id=\"slide-out\" class=\"side-nav fixed leftside-navigation\">
                <li class=\"user-details cyan darken-2\">
                    <div class=\"row\">
                        <div class=\"col col s4 m4 l4\">
                            <img src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backend/images/avatar.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"circle responsive-img valign profile-image\">
                        </div>
                        <div class=\"col col s8 m8 l8\">
                            <ul id=\"profile-dropdown\" class=\"dropdown-content\">
                                <li><a href=\"#\"><i class=\"mdi-action-face-unlock\"></i> Profile</a>
                                </li>
                                <li><a href=\"#\"><i class=\"mdi-action-settings\"></i> Settings</a>
                                </li>
                                <li><a href=\"#\"><i class=\"mdi-communication-live-help\"></i> Help</a>
                                </li>
                                <li class=\"divider\"></li>
                                <li><a href=\"#\"><i class=\"mdi-action-lock-outline\"></i> Lock</a>
                                </li>
                                <li><a href=\"#\"><i class=\"mdi-hardware-keyboard-tab\"></i> Logout</a>
                                </li>
                            </ul>
                            <a class=\"btn-flat dropdown-button waves-effect waves-light white-text profile-btn\" href=\"#\"
                               data-activates=\"profile-dropdown\">John Doe<i
                                        class=\"mdi-navigation-arrow-drop-down right\"></i></a>
                            <p class=\"user-roal\">Administrator</p>
                        </div>
                    </div>
                </li>
                <li class=\"bold active\"><a href=\"index.html\" class=\"waves-effect waves-cyan\"><i
                                class=\"mdi-action-dashboard\"></i> Dashboard</a>
                </li>
                <li class=\"no-padding\">
                    <ul class=\"collapsible collapsible-accordion\">
                        <li class=\"bold\"><a class=\"collapsible-header waves-effect waves-cyan\"><i
                                        class=\"mdi-action-view-carousel\"></i> Vie Social</a>
                            <div class=\"collapsible-body\">
                                <ul>
                                    <li><a href=\"";
        // line 186
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AfficheClubs");
        echo "\">Gestion Club</a>
                                    </li>
                                    <li><a href=\"layout-horizontal-menu.html\">Gestion Evenement</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class=\"bold\"><a href=\"app-email.html\" class=\"waves-effect waves-cyan\"><i
                                class=\"mdi-communication-email\"></i> Mailbox <span class=\"new badge\">4</span></a>
                </li>
                <li class=\"bold\"><a href=\"app-calendar.html\" class=\"waves-effect waves-cyan\"><i
                                class=\"mdi-editor-insert-invitation\"></i> Calender</a>
                </li>
                <li class=\"no-padding\">
                    <ul class=\"collapsible collapsible-accordion\">
                        <li class=\"bold\"><a class=\"collapsible-header waves-effect waves-cyan\"><i
                                        class=\"mdi-action-invert-colors\"></i> CSS</a>
                            <div class=\"collapsible-body\">
                                <ul>
                                    <li><a href=\"css-typography.html\">Typography</a>
                                    </li>
                                    <li><a href=\"css-icons.html\">Icons</a>
                                    </li>
                                    <li><a href=\"css-animations.html\">Animations</a>
                                    </li>
                                    <li><a href=\"css-shadow.html\">Shadow</a>
                                    </li>
                                    <li><a href=\"css-media.html\">Media</a>
                                    </li>
                                    <li><a href=\"css-sass.html\">Sass</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class=\"bold\"><a class=\"collapsible-header  waves-effect waves-cyan\"><i
                                        class=\"mdi-image-palette\"></i> UI Elements</a>
                            <div class=\"collapsible-body\">
                                <ul>
                                    <li><a href=\"ui-alerts.html\">Alerts</a>
                                    </li>
                                    <li><a href=\"ui-buttons.html\">Buttons</a>
                                    </li>
                                    <li><a href=\"ui-badges.html\">Badges</a>
                                    </li>
                                    <li><a href=\"ui-breadcrumbs.html\">Breadcrumbs</a>
                                    </li>
                                    <li><a href=\"ui-collections.html\">Collections</a>
                                    </li>
                                    <li><a href=\"ui-collapsibles.html\">Collapsibles</a>
                                    </li>
                                    <li><a href=\"ui-tabs.html\">Tabs</a>
                                    </li>
                                    <li><a href=\"ui-navbar.html\">Navbar</a>
                                    </li>
                                    <li><a href=\"ui-pagination.html\">Pagination</a>
                                    </li>
                                    <li><a href=\"ui-preloader.html\">Preloader</a>
                                    </li>
                                    <li><a href=\"ui-toasts.html\">Toasts</a>
                                    </li>
                                    <li><a href=\"ui-tooltip.html\">Tooltip</a>
                                    </li>
                                    <li><a href=\"ui-waves.html\">Waves</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class=\"bold\"><a class=\"collapsible-header waves-effect waves-cyan\"><i
                                        class=\"mdi-av-queue\"></i> Advanced UI <span class=\"new badge\"></span></a>
                            <div class=\"collapsible-body\">
                                <ul>
                                    <li><a href=\"advanced-ui-chips.html\">Chips</a>
                                    </li>
                                    <li><a href=\"advanced-ui-cards.html\">Cards</a>
                                    </li>
                                    <li><a href=\"advanced-ui-modals.html\">Modals</a>
                                    </li>
                                    <li><a href=\"advanced-ui-media.html\">Media</a>
                                    </li>
                                    <li><a href=\"advanced-ui-range-slider.html\">Range Slider</a>
                                    </li>
                                    <li><a href=\"advanced-ui-sweetalert.html\">SweetAlert</a>
                                    </li>
                                    <li><a href=\"advanced-ui-nestable.html\">Shortable & Nestable</a>
                                    </li>
                                    <li><a href=\"advanced-ui-translation.html\">Language Translation</a>
                                    </li>
                                    <li><a href=\"advanced-ui-highlight.html\">Highlight</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class=\"bold\"><a href=\"app-widget.html\" class=\"waves-effect waves-cyan\"><i
                                        class=\"mdi-device-now-widgets\"></i> Widgets</a>
                        </li>
                        <li class=\"bold\"><a class=\"collapsible-header  waves-effect waves-cyan\"><i
                                        class=\"mdi-editor-border-all\"></i> Tables</a>
                            <div class=\"collapsible-body\">
                                <ul>
                                    <li><a href=\"table-basic.html\">Basic Tables</a>
                                    </li>
                                    <li><a href=\"table-data.html\">Data Tables</a>
                                    </li>
                                    <li><a href=\"table-jsgrid.html\">jsGrid</a>
                                    </li>
                                    <li><a href=\"table-editable.html\">Editable Table</a>
                                    </li>
                                    <li><a href=\"table-floatThead.html\">floatThead</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class=\"bold\"><a class=\"collapsible-header  waves-effect waves-cyan\"><i
                                        class=\"mdi-editor-insert-comment\"></i> Forms <span class=\"new badge\"></span></a>
                            <div class=\"collapsible-body\">
                                <ul>
                                    <li><a href=\"form-elements.html\">Form Elements</a>
                                    </li>
                                    <li><a href=\"form-layouts.html\">Form Layouts</a>
                                    </li>
                                    <li><a href=\"form-validation.html\">Form Validations</a>
                                    </li>
                                    <li><a href=\"form-masks.html\">Form Masks</a>
                                    </li>
                                    <li><a href=\"form-file-uploads.html\">File Uploads</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class=\"bold\"><a class=\"collapsible-header  waves-effect waves-cyan\"><i
                                        class=\"mdi-social-pages\"></i> Pages</a>
                            <div class=\"collapsible-body\">
                                <ul>
                                    <li><a href=\"page-contact.html\">Contact Page</a>
                                    </li>
                                    <li><a href=\"page-todo.html\">ToDos</a>
                                    </li>
                                    <li><a href=\"page-blog-1.html\">Blog Type 1</a>
                                    </li>
                                    <li><a href=\"page-blog-2.html\">Blog Type 2</a>
                                    </li>
                                    <li><a href=\"page-404.html\">404</a>
                                    </li>
                                    <li><a href=\"page-500.html\">500</a>
                                    </li>
                                    <li><a href=\"page-blank.html\">Blank</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class=\"bold\"><a class=\"collapsible-header  waves-effect waves-cyan\"><i
                                        class=\"mdi-action-shopping-cart\"></i> eCommers</a>
                            <div class=\"collapsible-body\">
                                <ul>
                                    <li><a href=\"eCommerce-products-page.html\">Products Page</a>
                                    </li>
                                    <li><a href=\"eCommerce-pricing.html\">Pricing Table</a>
                                    </li>
                                    <li><a href=\"eCommerce-invoice.html\">Invoice</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class=\"bold\"><a class=\"collapsible-header  waves-effect waves-cyan\"><i
                                        class=\"mdi-image-image\"></i> Medias</a>
                            <div class=\"collapsible-body\">
                                <ul>
                                    <li><a href=\"media-gallary-page.html\">Gallery Page</a>
                                    </li>
                                    <li><a href=\"media-hover-effects.html\">Image Hover Effects</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class=\"bold\"><a class=\"collapsible-header  waves-effect waves-cyan\"><i
                                        class=\"mdi-action-account-circle\"></i> User</a>
                            <div class=\"collapsible-body\">
                                <ul>
                                    <li><a href=\"user-profile-page.html\">User Profile</a>
                                    </li>
                                    <li><a href=\"user-login.html\">Login</a>
                                    </li>
                                    <li><a href=\"user-register.html\">Register</a>
                                    </li>
                                    <li><a href=\"user-forgot-password.html\">Forgot Password</a>
                                    </li>
                                    <li><a href=\"user-lock-screen.html\">Lock Screen</a>
                                    </li>
                                    <li><a href=\"user-session-timeout.html\">Session Timeout</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class=\"bold\"><a class=\"collapsible-header waves-effect waves-cyan\"><i
                                        class=\"mdi-editor-insert-chart\"></i> Charts</a>
                            <div class=\"collapsible-body\">
                                <ul>
                                    <li><a href=\"charts-chartjs.html\">Chart JS</a>
                                    </li>
                                    <li><a href=\"charts-chartist.html\">Chartist</a>
                                    </li>
                                    <li><a href=\"charts-morris.html\">Morris Charts</a>
                                    </li>
                                    <li><a href=\"charts-xcharts.html\">xCharts</a>
                                    </li>
                                    <li><a href=\"charts-flotcharts.html\">Flot Charts</a>
                                    </li>
                                    <li><a href=\"charts-sparklines.html\">Sparkline Charts</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class=\"li-hover\">
                    <div class=\"divider\"></div>
                </li>
                <li class=\"li-hover\"><p class=\"ultra-small margin more-text\">MORE</p></li>
                <li><a href=\"angular-ui.html\"><i class=\"mdi-action-verified-user\"></i> Angular UI <span
                                class=\"new badge\"></span></a>
                </li>
                <li><a href=\"css-grid.html\"><i class=\"mdi-image-grid-on\"></i> Grid</a>
                </li>
                <li><a href=\"css-color.html\"><i class=\"mdi-editor-format-color-fill\"></i> Color</a>
                </li>
                <li><a href=\"css-helpers.html\"><i class=\"mdi-communication-live-help\"></i> Helpers</a>
                </li>
                <li><a href=\"changelogs.html\"><i class=\"mdi-action-swap-vert-circle\"></i> Changelogs</a>
                </li>
                <li class=\"li-hover\">
                    <div class=\"divider\"></div>
                </li>
                <li class=\"li-hover\"><p class=\"ultra-small margin more-text\">Daily Sales</p></li>
                <li class=\"li-hover\">
                    <div class=\"row\">
                        <div class=\"col s12 m12 l12\">
                            <div class=\"sample-chart-wrapper\">
                                <div class=\"ct-chart ct-golden-section\" id=\"ct2-chart\"></div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <a href=\"#\" data-activates=\"slide-out\"
               class=\"sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan\"><i
                        class=\"mdi-navigation-menu\"></i></a>
        </aside>
        <!-- END LEFT SIDEBAR NAV-->
        ";
        // line 437
        $this->displayBlock('body', $context, $blocks);
        // line 440
        echo "
        <!-- ##################################################################################--!>


        <!-- START FOOTER -->
        <footer class=\"page-footer\">
            <div class=\"footer-copyright\">
                <div class=\"container\">
                    Copyright © 2015 <a class=\"grey-text text-lighten-4\"
                                        href=\"http://themeforest.net/user/geekslabs/portfolio?ref=geekslabs\"
                                        target=\"_blank\">GeeksLabs</a>
                    All rights reserved.
                    <span class=\"right\"> Design and Developed by <a class=\"grey-text text-lighten-4\"
                                                                    href=\"http://geekslabs.com/\">GeeksLabs</a></span>
                </div>
            </div>
        </footer>
        <!-- END FOOTER -->


        <!-- ================================================
        Scripts
        ================================================ -->

        <!-- jQuery Library -->
        <script type=\"text/javascript\" src=\"";
        // line 465
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backend/js/plugins/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
        <!--materialize js-->
        <script type=\"text/javascript\" src=\"";
        // line 467
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backend/js/materialize.min.js"), "html", null, true);
        echo "\"></script>
        <!--scrollbar-->
        <script type=\"text/javascript\"
                src=\"";
        // line 470
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backend/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"), "html", null, true);
        echo "\"></script>


        <!-- sparkline -->
        <script type=\"text/javascript\"
                src=\"";
        // line 475
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backend/js/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 476
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backend/js/plugins/sparkline/sparkline-script.js"), "html", null, true);
        echo "\"></script>


        <!--jvectormap-->
        <script type=\"text/javascript\"
                src=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backend/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"";
        // line 483
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backend/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 484
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backend/js/plugins/jvectormap/vectormap-script.js"), "html", null, true);
        echo "\"></script>


        <!--plugins.js - Some Specific JS codes for Plugin Settings-->
        <script type=\"text/javascript\" src=\"";
        // line 488
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backend/js/plugins.min.js"), "html", null, true);
        echo "\"></script>
        <!--custom-script.js - Add your own theme custom JS-->
        <script type=\"text/javascript\" src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backend/js/custom-script.js"), "html", null, true);
        echo "\"></script>
        <!-- Toast Notification -->
        <script type=\"text/javascript\">
            // Toast Notification
            \$(window).load(function () {
                setTimeout(function () {
                    Materialize.toast('<span>Hiya! I am a toast.</span>', 1500);
                }, 1500);
                setTimeout(function () {
                    Materialize.toast('<span>You can swipe me too!</span>', 3000);
                }, 5000);
                setTimeout(function () {
                    Materialize.toast('<span>You have new order.</span><a class=\"btn-flat yellow-text\" href=\"#\">Read<a>', 3000);
                }, 15000);
            });
        </script>
</body>


<!-- Mirrored from demo.geekslabs.com/materialize/v3.1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jul 2017 22:30:54 GMT -->
</html>";
        
        $__internal_0b9ec652953f6144c31cd89e75c00d31bb6e6ceb3efd5e87b9dc46fa6998748b->leave($__internal_0b9ec652953f6144c31cd89e75c00d31bb6e6ceb3efd5e87b9dc46fa6998748b_prof);

        
        $__internal_58efff49fd94df5e59f836466a4ca7d221366ceb74f7211b20b0d25f6b9968ff->leave($__internal_58efff49fd94df5e59f836466a4ca7d221366ceb74f7211b20b0d25f6b9968ff_prof);

    }

    // line 13
    public function block_head($context, array $blocks = array())
    {
        $__internal_107ab05cdc3eba137d3dbb0971ad2b446ff7678735116970a2239dea88ef3d4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_107ab05cdc3eba137d3dbb0971ad2b446ff7678735116970a2239dea88ef3d4e->enter($__internal_107ab05cdc3eba137d3dbb0971ad2b446ff7678735116970a2239dea88ef3d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8fd140695e3e30ea1c9fdcb59586de22e176ef8f716ff91099788390284bfeed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fd140695e3e30ea1c9fdcb59586de22e176ef8f716ff91099788390284bfeed->enter($__internal_8fd140695e3e30ea1c9fdcb59586de22e176ef8f716ff91099788390284bfeed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 14
        echo "        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"msapplication-tap-highlight\" content=\"no\">
        <meta name=\"description\"
              content=\"Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. \">
        <meta name=\"keywords\"
              content=\"materialize, admin template, dashboard template, flat admin template, responsive admin template,\">

        <title>";
        // line 23
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <!-- Favicons-->
        <link rel=\"icon\" href=\"images/favicon/favicon-32x32.png\" sizes=\"32x32\">
        <!-- Favicons-->
        <link rel=\"apple-touch-icon-precomposed\" href=\"images/favicon/apple-touch-icon-152x152.png\">
        <!-- For iPhone -->
        <meta name=\"msapplication-TileColor\" content=\"#00bcd4\">
        <meta name=\"msapplication-TileImage\" content=\"images/favicon/mstile-144x144.png\">
        <!-- For Windows Phone -->


        <!-- CORE CSS-->

        <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backend/css/materialize.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"
              media=\"screen,projection\">


        <link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backend/css/style.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"
              media=\"screen,projection\">

        <!-- Custome CSS-->

        <link href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backend/css/custom/custom.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"
              media=\"screen,projection\">

        <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
        <link href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backend/js/plugins/perfect-scrollbar/perfect-scrollbar.css\" type=\"text/css\" rel=\"stylesheet\"
              media=\"screen,projection"), "html", null, true);
        // line 51
        echo "\">
        <link href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backend/js/plugins/jvectormap/jquery-jvectormap.css\" type=\"text/css\" rel=\"stylesheet\"
              media=\"screen,projection"), "html", null, true);
        // line 53
        echo "\">
        <link href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backend/js/plugins/chartist-js/chartist.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen,projection"), "html", null, true);
        echo "\">
    ";
        
        $__internal_8fd140695e3e30ea1c9fdcb59586de22e176ef8f716ff91099788390284bfeed->leave($__internal_8fd140695e3e30ea1c9fdcb59586de22e176ef8f716ff91099788390284bfeed_prof);

        
        $__internal_107ab05cdc3eba137d3dbb0971ad2b446ff7678735116970a2239dea88ef3d4e->leave($__internal_107ab05cdc3eba137d3dbb0971ad2b446ff7678735116970a2239dea88ef3d4e_prof);

    }

    // line 23
    public function block_title($context, array $blocks = array())
    {
        $__internal_53c72cf485c62c2f367b40f951052e2532cfd99b5b6ee5376e5cb027e6f95108 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53c72cf485c62c2f367b40f951052e2532cfd99b5b6ee5376e5cb027e6f95108->enter($__internal_53c72cf485c62c2f367b40f951052e2532cfd99b5b6ee5376e5cb027e6f95108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4b56cc872a2fec30df83f533e197ce74131b5c99b133197b72c3311c0e8efeae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b56cc872a2fec30df83f533e197ce74131b5c99b133197b72c3311c0e8efeae->enter($__internal_4b56cc872a2fec30df83f533e197ce74131b5c99b133197b72c3311c0e8efeae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Esprit4All-Dashboard";
        
        $__internal_4b56cc872a2fec30df83f533e197ce74131b5c99b133197b72c3311c0e8efeae->leave($__internal_4b56cc872a2fec30df83f533e197ce74131b5c99b133197b72c3311c0e8efeae_prof);

        
        $__internal_53c72cf485c62c2f367b40f951052e2532cfd99b5b6ee5376e5cb027e6f95108->leave($__internal_53c72cf485c62c2f367b40f951052e2532cfd99b5b6ee5376e5cb027e6f95108_prof);

    }

    // line 437
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a5163f4c282d6e8fa4e028cdfaf1dd81824d529601602d92de02b2e80774b4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a5163f4c282d6e8fa4e028cdfaf1dd81824d529601602d92de02b2e80774b4c->enter($__internal_0a5163f4c282d6e8fa4e028cdfaf1dd81824d529601602d92de02b2e80774b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ff2eac657eef600441846b4a3b8ac4e7d20a8718a04e3f8eb5415592e23e3566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff2eac657eef600441846b4a3b8ac4e7d20a8718a04e3f8eb5415592e23e3566->enter($__internal_ff2eac657eef600441846b4a3b8ac4e7d20a8718a04e3f8eb5415592e23e3566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 438
        echo "
        ";
        
        $__internal_ff2eac657eef600441846b4a3b8ac4e7d20a8718a04e3f8eb5415592e23e3566->leave($__internal_ff2eac657eef600441846b4a3b8ac4e7d20a8718a04e3f8eb5415592e23e3566_prof);

        
        $__internal_0a5163f4c282d6e8fa4e028cdfaf1dd81824d529601602d92de02b2e80774b4c->leave($__internal_0a5163f4c282d6e8fa4e028cdfaf1dd81824d529601602d92de02b2e80774b4c_prof);

    }

    public function getTemplateName()
    {
        return "@EspritForAllBackEnd/BackEndAcceuil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  658 => 438,  649 => 437,  631 => 23,  619 => 54,  616 => 53,  613 => 52,  610 => 51,  607 => 50,  600 => 46,  592 => 41,  585 => 37,  568 => 23,  557 => 14,  548 => 13,  517 => 490,  512 => 488,  505 => 484,  501 => 483,  496 => 481,  488 => 476,  484 => 475,  476 => 470,  470 => 467,  465 => 465,  438 => 440,  436 => 437,  182 => 186,  147 => 154,  68 => 78,  44 => 56,  42 => 13,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html lang=\"en\">

<!--================================================================================
\tItem Name: Materialize - Material Design Admin Template
\tVersion: 3.1
\tAuthor: GeeksLabs
\tAuthor URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->


<!-- Mirrored from demo.geekslabs.com/materialize/v3.1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jul 2017 22:29:29 GMT -->
<head>
    {% block head %}
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"msapplication-tap-highlight\" content=\"no\">
        <meta name=\"description\"
              content=\"Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. \">
        <meta name=\"keywords\"
              content=\"materialize, admin template, dashboard template, flat admin template, responsive admin template,\">

        <title>{% block title %}Esprit4All-Dashboard{% endblock %}</title>

        <!-- Favicons-->
        <link rel=\"icon\" href=\"images/favicon/favicon-32x32.png\" sizes=\"32x32\">
        <!-- Favicons-->
        <link rel=\"apple-touch-icon-precomposed\" href=\"images/favicon/apple-touch-icon-152x152.png\">
        <!-- For iPhone -->
        <meta name=\"msapplication-TileColor\" content=\"#00bcd4\">
        <meta name=\"msapplication-TileImage\" content=\"images/favicon/mstile-144x144.png\">
        <!-- For Windows Phone -->


        <!-- CORE CSS-->

        <link href=\"{{ asset('backend/css/materialize.min.css') }}\" type=\"text/css\" rel=\"stylesheet\"
              media=\"screen,projection\">


        <link href=\"{{ asset('backend/css/style.min.css') }}\" type=\"text/css\" rel=\"stylesheet\"
              media=\"screen,projection\">

        <!-- Custome CSS-->

        <link href=\"{{ asset('backend/css/custom/custom.min.css') }}\" type=\"text/css\" rel=\"stylesheet\"
              media=\"screen,projection\">

        <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
        <link href=\"{{ asset('backend/js/plugins/perfect-scrollbar/perfect-scrollbar.css\" type=\"text/css\" rel=\"stylesheet\"
              media=\"screen,projection') }}\">
        <link href=\"{{ asset('backend/js/plugins/jvectormap/jquery-jvectormap.css\" type=\"text/css\" rel=\"stylesheet\"
              media=\"screen,projection') }}\">
        <link href=\"{{ asset('backend/js/plugins/chartist-js/chartist.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen,projection') }}\">
    {% endblock %}

</head>

<body>
<!-- Start Page Loading -->
<div id=\"loader-wrapper\">
    <div id=\"loader\"></div>
    <div class=\"loader-section section-left\"></div>
    <div class=\"loader-section section-right\"></div>
</div>
<!-- End Page Loading -->

<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START HEADER -->
<header id=\"header\" class=\"page-topbar\">
    <!-- start header nav-->
    <div class=\"navbar-fixed\">
        <nav class=\"navbar-color\">
            <div class=\"nav-wrapper\">
                <ul class=\"left\">
                    <li><h1 class=\"logo-wrapper\"><a href=\"index.html\" class=\"brand-logo darken-1\"><img
                                        src=\"{{ asset('backend/images/materialize-logo.png') }}\" alt=\"materialize logo\"></a>
                            <span
                                    class=\"logo-text\">Materialize</span></h1></li>
                </ul>
                <div class=\"header-search-wrapper hide-on-med-and-down\">
                    <i class=\"mdi-action-search\"></i>
                    <input type=\"text\" name=\"Search\" class=\"header-search-input z-depth-2\"
                           placeholder=\"Explore Materialize\"/>
                </div>
                <ul class=\"right hide-on-med-and-down\">

                    <li><a href=\"javascript:void(0);\" class=\"waves-effect waves-block waves-light toggle-fullscreen\"><i
                                    class=\"mdi-action-settings-overscan\"></i></a>
                    </li>
                    <li><a href=\"javascript:void(0);\" class=\"waves-effect waves-block waves-light notification-button\"
                           data-activates=\"notifications-dropdown\"><i class=\"mdi-social-notifications\">
                                <small class=\"notification-badge\">5</small>
                            </i>

                        </a>
                    </li>
                    <li><a href=\"#\" data-activates=\"chat-out\"
                           class=\"waves-effect waves-block waves-light chat-collapse\"><i
                                    class=\"mdi-communication-chat\"></i></a>
                    </li>
                </ul>
                <!-- translation-button -->

                <!-- notifications-dropdown -->
                <ul id=\"notifications-dropdown\" class=\"dropdown-content\">
                    <li>
                        <h5>NOTIFICATIONS <span class=\"new badge\">5</span></h5>
                    </li>
                    <li class=\"divider\"></li>
                    <li>
                        <a href=\"#!\"><i class=\"mdi-action-add-shopping-cart\"></i> A new order has been placed!</a>
                        <time class=\"media-meta\" datetime=\"2015-06-12T20:50:48+08:00\">2 hours ago</time>
                    </li>
                    <li>
                        <a href=\"#!\"><i class=\"mdi-action-stars\"></i> Completed the task</a>
                        <time class=\"media-meta\" datetime=\"2015-06-12T20:50:48+08:00\">3 days ago</time>
                    </li>
                    <li>
                        <a href=\"#!\"><i class=\"mdi-action-settings\"></i> Settings updated</a>
                        <time class=\"media-meta\" datetime=\"2015-06-12T20:50:48+08:00\">4 days ago</time>
                    </li>
                    <li>
                        <a href=\"#!\"><i class=\"mdi-editor-insert-invitation\"></i> Director meeting started</a>
                        <time class=\"media-meta\" datetime=\"2015-06-12T20:50:48+08:00\">6 days ago</time>
                    </li>
                    <li>
                        <a href=\"#!\"><i class=\"mdi-action-trending-up\"></i> Generate monthly report</a>
                        <time class=\"media-meta\" datetime=\"2015-06-12T20:50:48+08:00\">1 week ago</time>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- end header nav-->
</header>
<!-- END HEADER -->

<!-- ##################################################################################--!>


<!-- START MAIN -->
<div id=\"main\">
    <!-- START WRAPPER -->
    <div class=\"wrapper\">

        <!-- START LEFT SIDEBAR NAV-->
        <aside id=\"left-sidebar-nav\">
            <ul id=\"slide-out\" class=\"side-nav fixed leftside-navigation\">
                <li class=\"user-details cyan darken-2\">
                    <div class=\"row\">
                        <div class=\"col col s4 m4 l4\">
                            <img src=\"{{ asset('backend/images/avatar.jpg')}}\" alt=\"\" class=\"circle responsive-img valign profile-image\">
                        </div>
                        <div class=\"col col s8 m8 l8\">
                            <ul id=\"profile-dropdown\" class=\"dropdown-content\">
                                <li><a href=\"#\"><i class=\"mdi-action-face-unlock\"></i> Profile</a>
                                </li>
                                <li><a href=\"#\"><i class=\"mdi-action-settings\"></i> Settings</a>
                                </li>
                                <li><a href=\"#\"><i class=\"mdi-communication-live-help\"></i> Help</a>
                                </li>
                                <li class=\"divider\"></li>
                                <li><a href=\"#\"><i class=\"mdi-action-lock-outline\"></i> Lock</a>
                                </li>
                                <li><a href=\"#\"><i class=\"mdi-hardware-keyboard-tab\"></i> Logout</a>
                                </li>
                            </ul>
                            <a class=\"btn-flat dropdown-button waves-effect waves-light white-text profile-btn\" href=\"#\"
                               data-activates=\"profile-dropdown\">John Doe<i
                                        class=\"mdi-navigation-arrow-drop-down right\"></i></a>
                            <p class=\"user-roal\">Administrator</p>
                        </div>
                    </div>
                </li>
                <li class=\"bold active\"><a href=\"index.html\" class=\"waves-effect waves-cyan\"><i
                                class=\"mdi-action-dashboard\"></i> Dashboard</a>
                </li>
                <li class=\"no-padding\">
                    <ul class=\"collapsible collapsible-accordion\">
                        <li class=\"bold\"><a class=\"collapsible-header waves-effect waves-cyan\"><i
                                        class=\"mdi-action-view-carousel\"></i> Vie Social</a>
                            <div class=\"collapsible-body\">
                                <ul>
                                    <li><a href=\"{{ path('AfficheClubs') }}\">Gestion Club</a>
                                    </li>
                                    <li><a href=\"layout-horizontal-menu.html\">Gestion Evenement</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class=\"bold\"><a href=\"app-email.html\" class=\"waves-effect waves-cyan\"><i
                                class=\"mdi-communication-email\"></i> Mailbox <span class=\"new badge\">4</span></a>
                </li>
                <li class=\"bold\"><a href=\"app-calendar.html\" class=\"waves-effect waves-cyan\"><i
                                class=\"mdi-editor-insert-invitation\"></i> Calender</a>
                </li>
                <li class=\"no-padding\">
                    <ul class=\"collapsible collapsible-accordion\">
                        <li class=\"bold\"><a class=\"collapsible-header waves-effect waves-cyan\"><i
                                        class=\"mdi-action-invert-colors\"></i> CSS</a>
                            <div class=\"collapsible-body\">
                                <ul>
                                    <li><a href=\"css-typography.html\">Typography</a>
                                    </li>
                                    <li><a href=\"css-icons.html\">Icons</a>
                                    </li>
                                    <li><a href=\"css-animations.html\">Animations</a>
                                    </li>
                                    <li><a href=\"css-shadow.html\">Shadow</a>
                                    </li>
                                    <li><a href=\"css-media.html\">Media</a>
                                    </li>
                                    <li><a href=\"css-sass.html\">Sass</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class=\"bold\"><a class=\"collapsible-header  waves-effect waves-cyan\"><i
                                        class=\"mdi-image-palette\"></i> UI Elements</a>
                            <div class=\"collapsible-body\">
                                <ul>
                                    <li><a href=\"ui-alerts.html\">Alerts</a>
                                    </li>
                                    <li><a href=\"ui-buttons.html\">Buttons</a>
                                    </li>
                                    <li><a href=\"ui-badges.html\">Badges</a>
                                    </li>
                                    <li><a href=\"ui-breadcrumbs.html\">Breadcrumbs</a>
                                    </li>
                                    <li><a href=\"ui-collections.html\">Collections</a>
                                    </li>
                                    <li><a href=\"ui-collapsibles.html\">Collapsibles</a>
                                    </li>
                                    <li><a href=\"ui-tabs.html\">Tabs</a>
                                    </li>
                                    <li><a href=\"ui-navbar.html\">Navbar</a>
                                    </li>
                                    <li><a href=\"ui-pagination.html\">Pagination</a>
                                    </li>
                                    <li><a href=\"ui-preloader.html\">Preloader</a>
                                    </li>
                                    <li><a href=\"ui-toasts.html\">Toasts</a>
                                    </li>
                                    <li><a href=\"ui-tooltip.html\">Tooltip</a>
                                    </li>
                                    <li><a href=\"ui-waves.html\">Waves</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class=\"bold\"><a class=\"collapsible-header waves-effect waves-cyan\"><i
                                        class=\"mdi-av-queue\"></i> Advanced UI <span class=\"new badge\"></span></a>
                            <div class=\"collapsible-body\">
                                <ul>
                                    <li><a href=\"advanced-ui-chips.html\">Chips</a>
                                    </li>
                                    <li><a href=\"advanced-ui-cards.html\">Cards</a>
                                    </li>
                                    <li><a href=\"advanced-ui-modals.html\">Modals</a>
                                    </li>
                                    <li><a href=\"advanced-ui-media.html\">Media</a>
                                    </li>
                                    <li><a href=\"advanced-ui-range-slider.html\">Range Slider</a>
                                    </li>
                                    <li><a href=\"advanced-ui-sweetalert.html\">SweetAlert</a>
                                    </li>
                                    <li><a href=\"advanced-ui-nestable.html\">Shortable & Nestable</a>
                                    </li>
                                    <li><a href=\"advanced-ui-translation.html\">Language Translation</a>
                                    </li>
                                    <li><a href=\"advanced-ui-highlight.html\">Highlight</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class=\"bold\"><a href=\"app-widget.html\" class=\"waves-effect waves-cyan\"><i
                                        class=\"mdi-device-now-widgets\"></i> Widgets</a>
                        </li>
                        <li class=\"bold\"><a class=\"collapsible-header  waves-effect waves-cyan\"><i
                                        class=\"mdi-editor-border-all\"></i> Tables</a>
                            <div class=\"collapsible-body\">
                                <ul>
                                    <li><a href=\"table-basic.html\">Basic Tables</a>
                                    </li>
                                    <li><a href=\"table-data.html\">Data Tables</a>
                                    </li>
                                    <li><a href=\"table-jsgrid.html\">jsGrid</a>
                                    </li>
                                    <li><a href=\"table-editable.html\">Editable Table</a>
                                    </li>
                                    <li><a href=\"table-floatThead.html\">floatThead</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class=\"bold\"><a class=\"collapsible-header  waves-effect waves-cyan\"><i
                                        class=\"mdi-editor-insert-comment\"></i> Forms <span class=\"new badge\"></span></a>
                            <div class=\"collapsible-body\">
                                <ul>
                                    <li><a href=\"form-elements.html\">Form Elements</a>
                                    </li>
                                    <li><a href=\"form-layouts.html\">Form Layouts</a>
                                    </li>
                                    <li><a href=\"form-validation.html\">Form Validations</a>
                                    </li>
                                    <li><a href=\"form-masks.html\">Form Masks</a>
                                    </li>
                                    <li><a href=\"form-file-uploads.html\">File Uploads</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class=\"bold\"><a class=\"collapsible-header  waves-effect waves-cyan\"><i
                                        class=\"mdi-social-pages\"></i> Pages</a>
                            <div class=\"collapsible-body\">
                                <ul>
                                    <li><a href=\"page-contact.html\">Contact Page</a>
                                    </li>
                                    <li><a href=\"page-todo.html\">ToDos</a>
                                    </li>
                                    <li><a href=\"page-blog-1.html\">Blog Type 1</a>
                                    </li>
                                    <li><a href=\"page-blog-2.html\">Blog Type 2</a>
                                    </li>
                                    <li><a href=\"page-404.html\">404</a>
                                    </li>
                                    <li><a href=\"page-500.html\">500</a>
                                    </li>
                                    <li><a href=\"page-blank.html\">Blank</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class=\"bold\"><a class=\"collapsible-header  waves-effect waves-cyan\"><i
                                        class=\"mdi-action-shopping-cart\"></i> eCommers</a>
                            <div class=\"collapsible-body\">
                                <ul>
                                    <li><a href=\"eCommerce-products-page.html\">Products Page</a>
                                    </li>
                                    <li><a href=\"eCommerce-pricing.html\">Pricing Table</a>
                                    </li>
                                    <li><a href=\"eCommerce-invoice.html\">Invoice</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class=\"bold\"><a class=\"collapsible-header  waves-effect waves-cyan\"><i
                                        class=\"mdi-image-image\"></i> Medias</a>
                            <div class=\"collapsible-body\">
                                <ul>
                                    <li><a href=\"media-gallary-page.html\">Gallery Page</a>
                                    </li>
                                    <li><a href=\"media-hover-effects.html\">Image Hover Effects</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class=\"bold\"><a class=\"collapsible-header  waves-effect waves-cyan\"><i
                                        class=\"mdi-action-account-circle\"></i> User</a>
                            <div class=\"collapsible-body\">
                                <ul>
                                    <li><a href=\"user-profile-page.html\">User Profile</a>
                                    </li>
                                    <li><a href=\"user-login.html\">Login</a>
                                    </li>
                                    <li><a href=\"user-register.html\">Register</a>
                                    </li>
                                    <li><a href=\"user-forgot-password.html\">Forgot Password</a>
                                    </li>
                                    <li><a href=\"user-lock-screen.html\">Lock Screen</a>
                                    </li>
                                    <li><a href=\"user-session-timeout.html\">Session Timeout</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class=\"bold\"><a class=\"collapsible-header waves-effect waves-cyan\"><i
                                        class=\"mdi-editor-insert-chart\"></i> Charts</a>
                            <div class=\"collapsible-body\">
                                <ul>
                                    <li><a href=\"charts-chartjs.html\">Chart JS</a>
                                    </li>
                                    <li><a href=\"charts-chartist.html\">Chartist</a>
                                    </li>
                                    <li><a href=\"charts-morris.html\">Morris Charts</a>
                                    </li>
                                    <li><a href=\"charts-xcharts.html\">xCharts</a>
                                    </li>
                                    <li><a href=\"charts-flotcharts.html\">Flot Charts</a>
                                    </li>
                                    <li><a href=\"charts-sparklines.html\">Sparkline Charts</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class=\"li-hover\">
                    <div class=\"divider\"></div>
                </li>
                <li class=\"li-hover\"><p class=\"ultra-small margin more-text\">MORE</p></li>
                <li><a href=\"angular-ui.html\"><i class=\"mdi-action-verified-user\"></i> Angular UI <span
                                class=\"new badge\"></span></a>
                </li>
                <li><a href=\"css-grid.html\"><i class=\"mdi-image-grid-on\"></i> Grid</a>
                </li>
                <li><a href=\"css-color.html\"><i class=\"mdi-editor-format-color-fill\"></i> Color</a>
                </li>
                <li><a href=\"css-helpers.html\"><i class=\"mdi-communication-live-help\"></i> Helpers</a>
                </li>
                <li><a href=\"changelogs.html\"><i class=\"mdi-action-swap-vert-circle\"></i> Changelogs</a>
                </li>
                <li class=\"li-hover\">
                    <div class=\"divider\"></div>
                </li>
                <li class=\"li-hover\"><p class=\"ultra-small margin more-text\">Daily Sales</p></li>
                <li class=\"li-hover\">
                    <div class=\"row\">
                        <div class=\"col s12 m12 l12\">
                            <div class=\"sample-chart-wrapper\">
                                <div class=\"ct-chart ct-golden-section\" id=\"ct2-chart\"></div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <a href=\"#\" data-activates=\"slide-out\"
               class=\"sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan\"><i
                        class=\"mdi-navigation-menu\"></i></a>
        </aside>
        <!-- END LEFT SIDEBAR NAV-->
        {% block body %}

        {% endblock  %}

        <!-- ##################################################################################--!>


        <!-- START FOOTER -->
        <footer class=\"page-footer\">
            <div class=\"footer-copyright\">
                <div class=\"container\">
                    Copyright © 2015 <a class=\"grey-text text-lighten-4\"
                                        href=\"http://themeforest.net/user/geekslabs/portfolio?ref=geekslabs\"
                                        target=\"_blank\">GeeksLabs</a>
                    All rights reserved.
                    <span class=\"right\"> Design and Developed by <a class=\"grey-text text-lighten-4\"
                                                                    href=\"http://geekslabs.com/\">GeeksLabs</a></span>
                </div>
            </div>
        </footer>
        <!-- END FOOTER -->


        <!-- ================================================
        Scripts
        ================================================ -->

        <!-- jQuery Library -->
        <script type=\"text/javascript\" src=\"{{ asset('backend/js/plugins/jquery-1.11.2.min.js') }}\"></script>
        <!--materialize js-->
        <script type=\"text/javascript\" src=\"{{ asset('backend/js/materialize.min.js') }}\"></script>
        <!--scrollbar-->
        <script type=\"text/javascript\"
                src=\"{{ asset('backend/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}\"></script>


        <!-- sparkline -->
        <script type=\"text/javascript\"
                src=\"{{ asset('backend/js/plugins/sparkline/jquery.sparkline.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('backend/js/plugins/sparkline/sparkline-script.js') }}\"></script>


        <!--jvectormap-->
        <script type=\"text/javascript\"
                src=\"{{ asset('backend/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}\"></script>
        <script type=\"text/javascript\"
                src=\"{{ asset('backend/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('backend/js/plugins/jvectormap/vectormap-script.js') }}\"></script>


        <!--plugins.js - Some Specific JS codes for Plugin Settings-->
        <script type=\"text/javascript\" src=\"{{ asset('backend/js/plugins.min.js') }}\"></script>
        <!--custom-script.js - Add your own theme custom JS-->
        <script type=\"text/javascript\" src=\"{{ asset('backend/js/custom-script.js') }}\"></script>
        <!-- Toast Notification -->
        <script type=\"text/javascript\">
            // Toast Notification
            \$(window).load(function () {
                setTimeout(function () {
                    Materialize.toast('<span>Hiya! I am a toast.</span>', 1500);
                }, 1500);
                setTimeout(function () {
                    Materialize.toast('<span>You can swipe me too!</span>', 3000);
                }, 5000);
                setTimeout(function () {
                    Materialize.toast('<span>You have new order.</span><a class=\"btn-flat yellow-text\" href=\"#\">Read<a>', 3000);
                }, 15000);
            });
        </script>
</body>


<!-- Mirrored from demo.geekslabs.com/materialize/v3.1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jul 2017 22:30:54 GMT -->
</html>", "@EspritForAllBackEnd/BackEndAcceuil.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\src\\EspritForAll\\BackEndBundle\\Resources\\views\\BackEndAcceuil.html.twig");
    }
}
