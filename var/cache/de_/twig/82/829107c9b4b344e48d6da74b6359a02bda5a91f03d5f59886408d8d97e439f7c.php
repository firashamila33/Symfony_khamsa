<?php

/* @FrontEnd/Restaurent/SingleProduct.html.twig */
class __TwigTemplate_f19ad597e3adbae29123e3e367a6458956b92abd49bcaaf2c3db9cd05c3cd2f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontEndBundle::RestaurentLayout.html.twig", "@FrontEnd/Restaurent/SingleProduct.html.twig", 1);
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
        $__internal_e5b9f6b4850d825b3b4c1f5c8716d1089b0f78939397f07417e6de94e10f5240 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5b9f6b4850d825b3b4c1f5c8716d1089b0f78939397f07417e6de94e10f5240->enter($__internal_e5b9f6b4850d825b3b4c1f5c8716d1089b0f78939397f07417e6de94e10f5240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FrontEnd/Restaurent/SingleProduct.html.twig"));

        $__internal_53a7c10d84636307357d3a994d1466e635349d7ef3042524bcce52b4e8fd8926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53a7c10d84636307357d3a994d1466e635349d7ef3042524bcce52b4e8fd8926->enter($__internal_53a7c10d84636307357d3a994d1466e635349d7ef3042524bcce52b4e8fd8926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FrontEnd/Restaurent/SingleProduct.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5b9f6b4850d825b3b4c1f5c8716d1089b0f78939397f07417e6de94e10f5240->leave($__internal_e5b9f6b4850d825b3b4c1f5c8716d1089b0f78939397f07417e6de94e10f5240_prof);

        
        $__internal_53a7c10d84636307357d3a994d1466e635349d7ef3042524bcce52b4e8fd8926->leave($__internal_53a7c10d84636307357d3a994d1466e635349d7ef3042524bcce52b4e8fd8926_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_639dd7c8d9d3dfc17819cd2edf522c5fe9b12d05c26b1c0a080e451a1508f83a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_639dd7c8d9d3dfc17819cd2edf522c5fe9b12d05c26b1c0a080e451a1508f83a->enter($__internal_639dd7c8d9d3dfc17819cd2edf522c5fe9b12d05c26b1c0a080e451a1508f83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0dccbd00ec75e9dff07356e4b2a651f88dd71dd352c10bcf0d12119d13cd70b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dccbd00ec75e9dff07356e4b2a651f88dd71dd352c10bcf0d12119d13cd70b3->enter($__internal_0dccbd00ec75e9dff07356e4b2a651f88dd71dd352c10bcf0d12119d13cd70b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <!-- Start Main -->
    <main>
        <div class=\"main-part\">
            <!-- Start Breadcrumb Part -->
            <section class=\"breadcrumb-part\" data-stellar-offset-parent=\"true\" data-stellar-background-ratio=\"0.5\" style=\"background-image: url('";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/breadbg1.jpg"), "html", null, true);
        echo "');\">
                <div class=\"container\">
                    <div class=\"breadcrumb-inner\">
                        <h2>SHOP SINGLE</h2>
                        <a href=\"#\">Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </section>
            <!-- End Breadcrumb Part -->
            <section class=\"home-icon shop-single pad-bottom-remove\">
                <div class=\"icon-default\">
                    <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/scroll-arrow.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                            <div class=\"slider slider-for slick-shop\">
                                <div>
                                    <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img64.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div>
                                    <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img64.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div>
                                    <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img64.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div>
                                    <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img64.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div>
                                    <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img64.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div>
                                    <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img64.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div>
                                    <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img64.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div>
                                    <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img64.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                            </div>
                            <div class=\"slider slider-nav slick-shop-thumb\">
                                <div><img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img65.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                <div><img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img65.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                <div><img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img65.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                <div><img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img65.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                <div><img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img65.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                <div><img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img65.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                <div><img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img65.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                <div><img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img65.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                            <h4 class=\"text-coffee\">Caramel Cheesecake</h4>
                            <div class=\"star-review-collect\">
                                <div class=\"star-rating\">
                                        <span class=\"star-rating-customer\" style=\"width: 100%\">
                                        </span>
                                </div>
                                <a href=\"#\" class=\"review-text\">03 customer review</a>
                            </div>
                            <p>If you're planning to start an online store right away, look no further, get this template on templateForest. This product page demonstrates a \"Simple Product\".</p>
                            <h3 class=\"text-coffee\">\$290.50</h3>
                            <div class=\"price-textbox\">
                                <span class=\"minus-text\"><i class=\"icon-minus\"></i></span>
                                <input type=\"text\" name=\"txt\" placeholder=\"1\" pattern=\"[0-9]\">
                                <span class=\"plus-text\"><i class=\"icon-plus\"></i></span>
                            </div>
                            <a href=\"#\" class=\"filter-btn btn-large\"><i class=\"fa fa-shopping-bag\" aria-hidden=\"true\"></i> Add to Cart</a>
                            <div class=\"share-tag\">
                                <div class=\"row\">
                                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                        <div class=\"social-wrap\">
                                            <h5>SHARE</h5>
                                            <ul class=\"social\">
                                                <li class=\"social-facebook\"><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                                <li class=\"social-tweeter\"><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                                <li class=\"social-instagram\"><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
                                                <li class=\"social-dribble\"><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                                                <li class=\"social-google\"><a href=\"#\"><i class=\"fa fa-google\" aria-hidden=\"true\"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                        <div class=\"tag-wrap\">
                                            <h5>TAGS</h5>
                                            <a href=\"#\" class=\"tag-btn\">Audio</a>
                                            <a href=\"#\" class=\"tag-btn\">Service</a>
                                            <a href=\"#\" class=\"tag-btn\">Cupcake</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Start Tab Part -->
            <section class=\"default-section comment-review-tab bg-grey v-pad-remove wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                <div class=\"container\">
                    <div class=\"tab-part\">
                        <ul class=\"nav nav-tabs\" role=\"tablist\">
                            <li role=\"presentation\">
                                <a href=\"#description\" aria-controls=\"description\" role=\"tab\" data-toggle=\"tab\">Description</a>
                            </li>
                            <li role=\"presentation\" class=\"active\">
                                <a href=\"#reviews\" aria-controls=\"reviews\" role=\"tab\" data-toggle=\"tab\">Reviews ( 5 )</a>
                            </li>
                        </ul>
                        <div class=\"tab-content\">
                            <div role=\"tabpanel\" class=\"tab-pane\" id=\"description\">
                                <div class=\"title text-left\">
                                    <h3 class=\"text-coffee\">Description About Product</h3>
                                </div>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                            </div>
                            <div role=\"tabpanel\" class=\"tab-pane active\" id=\"reviews\">
                                <div class=\"title text-center\">
                                    <h3 class=\"text-coffee\">2 Comment</h3>
                                </div>
                                <div class=\"comment-blog\">
                                    <div class=\"comment-inner-list\">
                                        <div class=\"comment-img\">
                                            <img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/comment-img1.png"), "html", null, true);
        echo "\" alt=\"\">
                                        </div>
                                        <div class=\"comment-info\">
                                            <h5>Anna Taylor</h5>
                                            <span class=\"comment-date\">AUGUST 9, 2016 10:57 AM</span>
                                            <p>Aqua Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        </div>
                                    </div>
                                    <div class=\"comment-inner-list\">
                                        <div class=\"comment-img\">
                                            <img src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/comment-img1.png"), "html", null, true);
        echo "\" alt=\"\">
                                        </div>
                                        <div class=\"comment-info\">
                                            <h5>Anna Taylor</h5>
                                            <span class=\"comment-date\">AUGUST 9, 2016 10:57 AM</span>
                                            <p>Aqua Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        </div>
                                    </div>
                                    <div class=\"title text-center\">
                                        <h3 class=\"text-coffee\">Leave a Reply</h3>
                                    </div>
                                    <form class=\"form\" method=\"post\" name=\"form\">
                                        <div class=\"row\">
                                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                                <textarea placeholder=\"Comment\"></textarea>
                                            </div>
                                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                                <input name=\"txt\" placeholder=\"Name\" type=\"text\">
                                            </div>
                                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                                <input name=\"email\" placeholder=\"Email\" type=\"email\">
                                            </div>
                                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                                <div class=\"star-review\">
                                                    <p>
                                                        <span>Your Rating</span>
                                                        <span class=\"star-review-customer\">
                                                                <a href=\"#\" class=\"star-1\"></a>
                                                                <a href=\"#\" class=\"star-2\"></a>
                                                                <a href=\"#\" class=\"star-3\"></a>
                                                                <a href=\"#\" class=\"star-4\"></a>
                                                                <a href=\"#\" class=\"star-5\"></a>
                                                            </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class=\"col-md-12 col-sm-12 col-xs-12 text-center\">
                                                <input name=\"submit\" value=\"POST COMMENT\" class=\"btn-main\" type=\"submit\">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Tab Part -->
            <!-- Start Related Product -->
            <section class=\"related-product wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                <div class=\"container\">
                    <div class=\"build-title\">
                        <h3>Related Products</h3>
                    </div>
                    <div class=\"owl-carousel owl-theme\" data-items=\"4\" data-laptop=\"3\" data-tablet=\"2\" data-mobile=\"1\" data-nav=\"false\" data-dots=\"true\" data-autoplay=\"true\" data-speed=\"1800\" data-autotime=\"5000\">
                        <div class=\"item\">
                            <div class=\"related-img\">
                                <img src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img66.png"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"related-info\">
                                <h6><a href=\"#\">Blanched Garlic</a></h6>
                                <h6><a href=\"#\"><strong>\$ 15.00</strong></a></h6>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"related-img\">
                                <img src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img67.png"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"related-info\">
                                <h6><a href=\"#\">Blanched Garlic</a></h6>
                                <h6><a href=\"#\"><strong>\$ 15.00</strong></a></h6>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"related-img\">
                                <img src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img68.png"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"related-info\">
                                <h6><a href=\"#\">Blanched Garlic</a></h6>
                                <h6><a href=\"#\"><strong>\$ 15.00</strong></a></h6>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"related-img\">
                                <img src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img69.png"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"related-info\">
                                <h6><a href=\"#\">Blanched Garlic</a></h6>
                                <h6><a href=\"#\"><strong>\$ 15.00</strong></a></h6>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"related-img\">
                                <img src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img66.png"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"related-info\">
                                <h6><a href=\"#\">Blanched Garlic</a></h6>
                                <h6><a href=\"#\"><strong>\$ 15.00</strong></a></h6>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"related-img\">
                                <img src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img67.png"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"related-info\">
                                <h6><a href=\"#\">Blanched Garlic</a></h6>
                                <h6><a href=\"#\"><strong>\$ 15.00</strong></a></h6>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"related-img\">
                                <img src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img68.png"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"related-info\">
                                <h6><a href=\"#\">Blanched Garlic</a></h6>
                                <h6><a href=\"#\"><strong>\$ 15.00</strong></a></h6>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"related-img\">
                                <img src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img69.png"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"related-info\">
                                <h6><a href=\"#\">Blanched Garlic</a></h6>
                                <h6><a href=\"#\"><strong>\$ 15.00</strong></a></h6>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"related-img\">
                                <img src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img66.png"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"related-info\">
                                <h6><a href=\"#\">Blanched Garlic</a></h6>
                                <h6><a href=\"#\"><strong>\$ 15.00</strong></a></h6>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"related-img\">
                                <img src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img67.png"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"related-info\">
                                <h6><a href=\"#\">Blanched Garlic</a></h6>
                                <h6><a href=\"#\"><strong>\$ 15.00</strong></a></h6>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"related-img\">
                                <img src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img68.png"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"related-info\">
                                <h6><a href=\"#\">Blanched Garlic</a></h6>
                                <h6><a href=\"#\"><strong>\$ 15.00</strong></a></h6>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"related-img\">
                                <img src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img69.png"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"related-info\">
                                <h6><a href=\"#\">Blanched Garlic</a></h6>
                                <h6><a href=\"#\"><strong>\$ 15.00</strong></a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Related Product -->
        </div>
    </main>
    <!-- End Main -->
";
        
        $__internal_0dccbd00ec75e9dff07356e4b2a651f88dd71dd352c10bcf0d12119d13cd70b3->leave($__internal_0dccbd00ec75e9dff07356e4b2a651f88dd71dd352c10bcf0d12119d13cd70b3_prof);

        
        $__internal_639dd7c8d9d3dfc17819cd2edf522c5fe9b12d05c26b1c0a080e451a1508f83a->leave($__internal_639dd7c8d9d3dfc17819cd2edf522c5fe9b12d05c26b1c0a080e451a1508f83a_prof);

    }

    public function getTemplateName()
    {
        return "@FrontEnd/Restaurent/SingleProduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  439 => 300,  427 => 291,  415 => 282,  403 => 273,  391 => 264,  379 => 255,  367 => 246,  355 => 237,  343 => 228,  331 => 219,  319 => 210,  307 => 201,  247 => 144,  234 => 134,  157 => 60,  153 => 59,  149 => 58,  145 => 57,  141 => 56,  137 => 55,  133 => 54,  129 => 53,  122 => 49,  116 => 46,  110 => 43,  104 => 40,  98 => 37,  92 => 34,  86 => 31,  80 => 28,  70 => 21,  55 => 9,  49 => 5,  40 => 4,  11 => 1,);
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
                        <h2>SHOP SINGLE</h2>
                        <a href=\"#\">Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </section>
            <!-- End Breadcrumb Part -->
            <section class=\"home-icon shop-single pad-bottom-remove\">
                <div class=\"icon-default\">
                    <img src=\"{{ asset('FrontEnd/Food/images/scroll-arrow.png') }}\" alt=\"\">
                </div>
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                            <div class=\"slider slider-for slick-shop\">
                                <div>
                                    <img src=\"{{ asset('FrontEnd/Food/images/img64.png') }}\" alt=\"\">
                                </div>
                                <div>
                                    <img src=\"{{ asset('FrontEnd/Food/images/img64.png') }}\" alt=\"\">
                                </div>
                                <div>
                                    <img src=\"{{ asset('FrontEnd/Food/images/img64.png') }}\" alt=\"\">
                                </div>
                                <div>
                                    <img src=\"{{ asset('FrontEnd/Food/images/img64.png') }}\" alt=\"\">
                                </div>
                                <div>
                                    <img src=\"{{ asset('FrontEnd/Food/images/img64.png') }}\" alt=\"\">
                                </div>
                                <div>
                                    <img src=\"{{ asset('FrontEnd/Food/images/img64.png') }}\" alt=\"\">
                                </div>
                                <div>
                                    <img src=\"{{ asset('FrontEnd/Food/images/img64.png') }}\" alt=\"\">
                                </div>
                                <div>
                                    <img src=\"{{ asset('FrontEnd/Food/images/img64.png') }}\" alt=\"\">
                                </div>
                            </div>
                            <div class=\"slider slider-nav slick-shop-thumb\">
                                <div><img src=\"{{ asset('FrontEnd/Food/images/img65.png') }}\" alt=\"\"></div>
                                <div><img src=\"{{ asset('FrontEnd/Food/images/img65.png') }}\" alt=\"\"></div>
                                <div><img src=\"{{ asset('FrontEnd/Food/images/img65.png') }}\" alt=\"\"></div>
                                <div><img src=\"{{ asset('FrontEnd/Food/images/img65.png') }}\" alt=\"\"></div>
                                <div><img src=\"{{ asset('FrontEnd/Food/images/img65.png') }}\" alt=\"\"></div>
                                <div><img src=\"{{ asset('FrontEnd/Food/images/img65.png') }}\" alt=\"\"></div>
                                <div><img src=\"{{ asset('FrontEnd/Food/images/img65.png') }}\" alt=\"\"></div>
                                <div><img src=\"{{ asset('FrontEnd/Food/images/img65.png') }}\" alt=\"\"></div>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                            <h4 class=\"text-coffee\">Caramel Cheesecake</h4>
                            <div class=\"star-review-collect\">
                                <div class=\"star-rating\">
                                        <span class=\"star-rating-customer\" style=\"width: 100%\">
                                        </span>
                                </div>
                                <a href=\"#\" class=\"review-text\">03 customer review</a>
                            </div>
                            <p>If you're planning to start an online store right away, look no further, get this template on templateForest. This product page demonstrates a \"Simple Product\".</p>
                            <h3 class=\"text-coffee\">\$290.50</h3>
                            <div class=\"price-textbox\">
                                <span class=\"minus-text\"><i class=\"icon-minus\"></i></span>
                                <input type=\"text\" name=\"txt\" placeholder=\"1\" pattern=\"[0-9]\">
                                <span class=\"plus-text\"><i class=\"icon-plus\"></i></span>
                            </div>
                            <a href=\"#\" class=\"filter-btn btn-large\"><i class=\"fa fa-shopping-bag\" aria-hidden=\"true\"></i> Add to Cart</a>
                            <div class=\"share-tag\">
                                <div class=\"row\">
                                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                        <div class=\"social-wrap\">
                                            <h5>SHARE</h5>
                                            <ul class=\"social\">
                                                <li class=\"social-facebook\"><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                                <li class=\"social-tweeter\"><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                                <li class=\"social-instagram\"><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
                                                <li class=\"social-dribble\"><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                                                <li class=\"social-google\"><a href=\"#\"><i class=\"fa fa-google\" aria-hidden=\"true\"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                        <div class=\"tag-wrap\">
                                            <h5>TAGS</h5>
                                            <a href=\"#\" class=\"tag-btn\">Audio</a>
                                            <a href=\"#\" class=\"tag-btn\">Service</a>
                                            <a href=\"#\" class=\"tag-btn\">Cupcake</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Start Tab Part -->
            <section class=\"default-section comment-review-tab bg-grey v-pad-remove wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                <div class=\"container\">
                    <div class=\"tab-part\">
                        <ul class=\"nav nav-tabs\" role=\"tablist\">
                            <li role=\"presentation\">
                                <a href=\"#description\" aria-controls=\"description\" role=\"tab\" data-toggle=\"tab\">Description</a>
                            </li>
                            <li role=\"presentation\" class=\"active\">
                                <a href=\"#reviews\" aria-controls=\"reviews\" role=\"tab\" data-toggle=\"tab\">Reviews ( 5 )</a>
                            </li>
                        </ul>
                        <div class=\"tab-content\">
                            <div role=\"tabpanel\" class=\"tab-pane\" id=\"description\">
                                <div class=\"title text-left\">
                                    <h3 class=\"text-coffee\">Description About Product</h3>
                                </div>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                            </div>
                            <div role=\"tabpanel\" class=\"tab-pane active\" id=\"reviews\">
                                <div class=\"title text-center\">
                                    <h3 class=\"text-coffee\">2 Comment</h3>
                                </div>
                                <div class=\"comment-blog\">
                                    <div class=\"comment-inner-list\">
                                        <div class=\"comment-img\">
                                            <img src=\"{{ asset('FrontEnd/Food/images/comment-img1.png') }}\" alt=\"\">
                                        </div>
                                        <div class=\"comment-info\">
                                            <h5>Anna Taylor</h5>
                                            <span class=\"comment-date\">AUGUST 9, 2016 10:57 AM</span>
                                            <p>Aqua Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        </div>
                                    </div>
                                    <div class=\"comment-inner-list\">
                                        <div class=\"comment-img\">
                                            <img src=\"{{ asset('FrontEnd/Food/images/comment-img1.png') }}\" alt=\"\">
                                        </div>
                                        <div class=\"comment-info\">
                                            <h5>Anna Taylor</h5>
                                            <span class=\"comment-date\">AUGUST 9, 2016 10:57 AM</span>
                                            <p>Aqua Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        </div>
                                    </div>
                                    <div class=\"title text-center\">
                                        <h3 class=\"text-coffee\">Leave a Reply</h3>
                                    </div>
                                    <form class=\"form\" method=\"post\" name=\"form\">
                                        <div class=\"row\">
                                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                                <textarea placeholder=\"Comment\"></textarea>
                                            </div>
                                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                                <input name=\"txt\" placeholder=\"Name\" type=\"text\">
                                            </div>
                                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                                <input name=\"email\" placeholder=\"Email\" type=\"email\">
                                            </div>
                                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                                <div class=\"star-review\">
                                                    <p>
                                                        <span>Your Rating</span>
                                                        <span class=\"star-review-customer\">
                                                                <a href=\"#\" class=\"star-1\"></a>
                                                                <a href=\"#\" class=\"star-2\"></a>
                                                                <a href=\"#\" class=\"star-3\"></a>
                                                                <a href=\"#\" class=\"star-4\"></a>
                                                                <a href=\"#\" class=\"star-5\"></a>
                                                            </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class=\"col-md-12 col-sm-12 col-xs-12 text-center\">
                                                <input name=\"submit\" value=\"POST COMMENT\" class=\"btn-main\" type=\"submit\">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Tab Part -->
            <!-- Start Related Product -->
            <section class=\"related-product wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                <div class=\"container\">
                    <div class=\"build-title\">
                        <h3>Related Products</h3>
                    </div>
                    <div class=\"owl-carousel owl-theme\" data-items=\"4\" data-laptop=\"3\" data-tablet=\"2\" data-mobile=\"1\" data-nav=\"false\" data-dots=\"true\" data-autoplay=\"true\" data-speed=\"1800\" data-autotime=\"5000\">
                        <div class=\"item\">
                            <div class=\"related-img\">
                                <img src=\"{{ asset('FrontEnd/Food/images/img66.png') }}\" alt=\"\">
                            </div>
                            <div class=\"related-info\">
                                <h6><a href=\"#\">Blanched Garlic</a></h6>
                                <h6><a href=\"#\"><strong>\$ 15.00</strong></a></h6>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"related-img\">
                                <img src=\"{{ asset('FrontEnd/Food/images/img67.png') }}\" alt=\"\">
                            </div>
                            <div class=\"related-info\">
                                <h6><a href=\"#\">Blanched Garlic</a></h6>
                                <h6><a href=\"#\"><strong>\$ 15.00</strong></a></h6>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"related-img\">
                                <img src=\"{{ asset('FrontEnd/Food/images/img68.png') }}\" alt=\"\">
                            </div>
                            <div class=\"related-info\">
                                <h6><a href=\"#\">Blanched Garlic</a></h6>
                                <h6><a href=\"#\"><strong>\$ 15.00</strong></a></h6>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"related-img\">
                                <img src=\"{{ asset('FrontEnd/Food/images/img69.png') }}\" alt=\"\">
                            </div>
                            <div class=\"related-info\">
                                <h6><a href=\"#\">Blanched Garlic</a></h6>
                                <h6><a href=\"#\"><strong>\$ 15.00</strong></a></h6>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"related-img\">
                                <img src=\"{{ asset('FrontEnd/Food/images/img66.png') }}\" alt=\"\">
                            </div>
                            <div class=\"related-info\">
                                <h6><a href=\"#\">Blanched Garlic</a></h6>
                                <h6><a href=\"#\"><strong>\$ 15.00</strong></a></h6>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"related-img\">
                                <img src=\"{{ asset('FrontEnd/Food/images/img67.png') }}\" alt=\"\">
                            </div>
                            <div class=\"related-info\">
                                <h6><a href=\"#\">Blanched Garlic</a></h6>
                                <h6><a href=\"#\"><strong>\$ 15.00</strong></a></h6>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"related-img\">
                                <img src=\"{{ asset('FrontEnd/Food/images/img68.png') }}\" alt=\"\">
                            </div>
                            <div class=\"related-info\">
                                <h6><a href=\"#\">Blanched Garlic</a></h6>
                                <h6><a href=\"#\"><strong>\$ 15.00</strong></a></h6>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"related-img\">
                                <img src=\"{{ asset('FrontEnd/Food/images/img69.png') }}\" alt=\"\">
                            </div>
                            <div class=\"related-info\">
                                <h6><a href=\"#\">Blanched Garlic</a></h6>
                                <h6><a href=\"#\"><strong>\$ 15.00</strong></a></h6>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"related-img\">
                                <img src=\"{{ asset('FrontEnd/Food/images/img66.png') }}\" alt=\"\">
                            </div>
                            <div class=\"related-info\">
                                <h6><a href=\"#\">Blanched Garlic</a></h6>
                                <h6><a href=\"#\"><strong>\$ 15.00</strong></a></h6>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"related-img\">
                                <img src=\"{{ asset('FrontEnd/Food/images/img67.png') }}\" alt=\"\">
                            </div>
                            <div class=\"related-info\">
                                <h6><a href=\"#\">Blanched Garlic</a></h6>
                                <h6><a href=\"#\"><strong>\$ 15.00</strong></a></h6>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"related-img\">
                                <img src=\"{{ asset('FrontEnd/Food/images/img68.png') }}\" alt=\"\">
                            </div>
                            <div class=\"related-info\">
                                <h6><a href=\"#\">Blanched Garlic</a></h6>
                                <h6><a href=\"#\"><strong>\$ 15.00</strong></a></h6>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"related-img\">
                                <img src=\"{{ asset('FrontEnd/Food/images/img69.png') }}\" alt=\"\">
                            </div>
                            <div class=\"related-info\">
                                <h6><a href=\"#\">Blanched Garlic</a></h6>
                                <h6><a href=\"#\"><strong>\$ 15.00</strong></a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Related Product -->
        </div>
    </main>
    <!-- End Main -->
{% endblock body %}", "@FrontEnd/Restaurent/SingleProduct.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\src\\FrontEndBundle\\Resources\\views\\Restaurent\\SingleProduct.html.twig");
    }
}
