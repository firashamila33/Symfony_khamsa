<?php

/* FrontEndBundle:Restaurent:ShopCart.html.twig */
class __TwigTemplate_7380d0c7672ebaef67eb30fafd5a5275acbdeb779cbccd189164c4571403e2cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontEndBundle::RestaurentLayout.html.twig", "FrontEndBundle:Restaurent:ShopCart.html.twig", 1);
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
        $__internal_89e3b996c513b9e490f74dab083838aca4fe754a3d7dc5c6f351f43d4f8f5d89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89e3b996c513b9e490f74dab083838aca4fe754a3d7dc5c6f351f43d4f8f5d89->enter($__internal_89e3b996c513b9e490f74dab083838aca4fe754a3d7dc5c6f351f43d4f8f5d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle:Restaurent:ShopCart.html.twig"));

        $__internal_802695348d4e2c254c425b219ebb532f1ceb8a33e86cec4401f5d70d147e42c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_802695348d4e2c254c425b219ebb532f1ceb8a33e86cec4401f5d70d147e42c9->enter($__internal_802695348d4e2c254c425b219ebb532f1ceb8a33e86cec4401f5d70d147e42c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle:Restaurent:ShopCart.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89e3b996c513b9e490f74dab083838aca4fe754a3d7dc5c6f351f43d4f8f5d89->leave($__internal_89e3b996c513b9e490f74dab083838aca4fe754a3d7dc5c6f351f43d4f8f5d89_prof);

        
        $__internal_802695348d4e2c254c425b219ebb532f1ceb8a33e86cec4401f5d70d147e42c9->leave($__internal_802695348d4e2c254c425b219ebb532f1ceb8a33e86cec4401f5d70d147e42c9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e672850a1480c34a6c87e07bec511a19c0112b6942b7c1f10a2168cb6175c26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e672850a1480c34a6c87e07bec511a19c0112b6942b7c1f10a2168cb6175c26->enter($__internal_4e672850a1480c34a6c87e07bec511a19c0112b6942b7c1f10a2168cb6175c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9fa055b1f85bb04348862263c255ea5d04614f0fa80570e2c1478191955bcb13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa055b1f85bb04348862263c255ea5d04614f0fa80570e2c1478191955bcb13->enter($__internal_9fa055b1f85bb04348862263c255ea5d04614f0fa80570e2c1478191955bcb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h2>SHOP CART</h2>
                        <a href=\"#\">Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </section>
            <!-- End Breadcrumb Part -->
            <section class=\"home-icon shop-cart bg-skeen\">
                <div class=\"icon-default icon-skeen\">
                    <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/scroll-arrow.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <div class=\"container\">
                    <div class=\"checkout-wrap wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                        <ul class=\"checkout-bar\">
                            <li class=\"active\">Shopping Cart</li>
                            <li>Checkout</li>
                            <li>Order Complete</li>
                        </ul>
                    </div>
                    <div class=\"shop-cart-list wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                        <table class=\"shop-cart-table\">
                            <thead>
                            <tr>
                                <th>PRODUCT</th>
                                <th>PRICE</th>
                                <th>QUANTITY</th>
                                <th>TOTAL</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>PRODUCT</th>
                                <td>
                                    <div class=\"product-cart\">
                                        <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img70.png"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"product-cart-title\">
                                        <span>Blanched Garlic</span>
                                    </div>
                                </td>
                                <th>PRICE</th>
                                <td>
                                    <strong>\$59</strong>
                                    <del>\$5400.00</del>
                                </td>
                                <th>QUANTITY</th>
                                <td>
                                    <div class=\"price-textbox\">
                                        <span class=\"minus-text\"><i class=\"icon-minus\"></i></span>
                                        <input name=\"txt\" placeholder=\"1\" type=\"text\">
                                        <span class=\"plus-text\"><i class=\"icon-plus\"></i></span>
                                    </div>
                                </td>
                                <th>TOTAL</th>
                                <td>
                                    \$59
                                </td>
                                <td class=\"shop-cart-close\"><i class=\"icon-cancel-5\"></i></td>
                            </tr>
                            <tr>
                                <th>PRODUCT</th>
                                <td>
                                    <div class=\"product-cart\">
                                        <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img71.png"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"product-cart-title\">
                                        <span>Blanched Garlic</span>
                                    </div>
                                </td>
                                <th>PRICE</th>
                                <td>
                                    <strong>\$59</strong>
                                    <del>\$5400.00</del>
                                </td>
                                <th>QUANTITY</th>
                                <td>
                                    <div class=\"price-textbox\">
                                        <span class=\"minus-text\"><i class=\"icon-minus\"></i></span>
                                        <input name=\"txt\" placeholder=\"1\" type=\"text\">
                                        <span class=\"plus-text\"><i class=\"icon-plus\"></i></span>
                                    </div>
                                </td>
                                <th>TOTAL</th>
                                <td>
                                    \$59
                                </td>
                                <td class=\"shop-cart-close\"><i class=\"icon-cancel-5\"></i></td>
                            </tr>
                            <tr>
                                <th>PRODUCT</th>
                                <td>
                                    <div class=\"product-cart\">
                                        <img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FrontEnd/Food/images/img72.png"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"product-cart-title\">
                                        <span>Blanched Garlic</span>
                                    </div>
                                </td>
                                <th>PRICE</th>
                                <td>
                                    <strong>\$59</strong>
                                    <del>\$5400.00</del>
                                </td>
                                <th>QUANTITY</th>
                                <td>
                                    <div class=\"price-textbox\">
                                        <span class=\"minus-text\"><i class=\"icon-minus\"></i></span>
                                        <input name=\"txt\" placeholder=\"1\" type=\"text\">
                                        <span class=\"plus-text\"><i class=\"icon-plus\"></i></span>
                                    </div>
                                </td>
                                <th>TOTAL</th>
                                <td>
                                    \$59
                                </td>
                                <td class=\"shop-cart-close\"><i class=\"icon-cancel-5\"></i></td>
                            </tr>
                            </tbody>
                        </table>
                        <div class=\"product-cart-detail\">
                            <div class=\"cupon-part\">
                                <input type=\"text\" name=\"txt\" placeholder=\"Cupon Code\">
                            </div>
                            <a href=\"#\" class=\"btn-medium btn-dark-coffee\">Apply Coupon</a>
                            <a href=\"#\" class=\"btn-medium btn-skin pull-right\">UPDATE cart</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <!-- End Main -->
";
        
        $__internal_9fa055b1f85bb04348862263c255ea5d04614f0fa80570e2c1478191955bcb13->leave($__internal_9fa055b1f85bb04348862263c255ea5d04614f0fa80570e2c1478191955bcb13_prof);

        
        $__internal_4e672850a1480c34a6c87e07bec511a19c0112b6942b7c1f10a2168cb6175c26->leave($__internal_4e672850a1480c34a6c87e07bec511a19c0112b6942b7c1f10a2168cb6175c26_prof);

    }

    public function getTemplateName()
    {
        return "FrontEndBundle:Restaurent:ShopCart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 103,  130 => 74,  98 => 45,  70 => 20,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
                        <h2>SHOP CART</h2>
                        <a href=\"#\">Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </section>
            <!-- End Breadcrumb Part -->
            <section class=\"home-icon shop-cart bg-skeen\">
                <div class=\"icon-default icon-skeen\">
                    <img src=\"{{ asset('FrontEnd/Food/images/scroll-arrow.png') }}\" alt=\"\">
                </div>
                <div class=\"container\">
                    <div class=\"checkout-wrap wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                        <ul class=\"checkout-bar\">
                            <li class=\"active\">Shopping Cart</li>
                            <li>Checkout</li>
                            <li>Order Complete</li>
                        </ul>
                    </div>
                    <div class=\"shop-cart-list wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                        <table class=\"shop-cart-table\">
                            <thead>
                            <tr>
                                <th>PRODUCT</th>
                                <th>PRICE</th>
                                <th>QUANTITY</th>
                                <th>TOTAL</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>PRODUCT</th>
                                <td>
                                    <div class=\"product-cart\">
                                        <img src=\"{{ asset('FrontEnd/Food/images/img70.png') }}\" alt=\"\">
                                    </div>
                                    <div class=\"product-cart-title\">
                                        <span>Blanched Garlic</span>
                                    </div>
                                </td>
                                <th>PRICE</th>
                                <td>
                                    <strong>\$59</strong>
                                    <del>\$5400.00</del>
                                </td>
                                <th>QUANTITY</th>
                                <td>
                                    <div class=\"price-textbox\">
                                        <span class=\"minus-text\"><i class=\"icon-minus\"></i></span>
                                        <input name=\"txt\" placeholder=\"1\" type=\"text\">
                                        <span class=\"plus-text\"><i class=\"icon-plus\"></i></span>
                                    </div>
                                </td>
                                <th>TOTAL</th>
                                <td>
                                    \$59
                                </td>
                                <td class=\"shop-cart-close\"><i class=\"icon-cancel-5\"></i></td>
                            </tr>
                            <tr>
                                <th>PRODUCT</th>
                                <td>
                                    <div class=\"product-cart\">
                                        <img src=\"{{ asset('FrontEnd/Food/images/img71.png') }}\" alt=\"\">
                                    </div>
                                    <div class=\"product-cart-title\">
                                        <span>Blanched Garlic</span>
                                    </div>
                                </td>
                                <th>PRICE</th>
                                <td>
                                    <strong>\$59</strong>
                                    <del>\$5400.00</del>
                                </td>
                                <th>QUANTITY</th>
                                <td>
                                    <div class=\"price-textbox\">
                                        <span class=\"minus-text\"><i class=\"icon-minus\"></i></span>
                                        <input name=\"txt\" placeholder=\"1\" type=\"text\">
                                        <span class=\"plus-text\"><i class=\"icon-plus\"></i></span>
                                    </div>
                                </td>
                                <th>TOTAL</th>
                                <td>
                                    \$59
                                </td>
                                <td class=\"shop-cart-close\"><i class=\"icon-cancel-5\"></i></td>
                            </tr>
                            <tr>
                                <th>PRODUCT</th>
                                <td>
                                    <div class=\"product-cart\">
                                        <img src=\"{{ asset('FrontEnd/Food/images/img72.png') }}\" alt=\"\">
                                    </div>
                                    <div class=\"product-cart-title\">
                                        <span>Blanched Garlic</span>
                                    </div>
                                </td>
                                <th>PRICE</th>
                                <td>
                                    <strong>\$59</strong>
                                    <del>\$5400.00</del>
                                </td>
                                <th>QUANTITY</th>
                                <td>
                                    <div class=\"price-textbox\">
                                        <span class=\"minus-text\"><i class=\"icon-minus\"></i></span>
                                        <input name=\"txt\" placeholder=\"1\" type=\"text\">
                                        <span class=\"plus-text\"><i class=\"icon-plus\"></i></span>
                                    </div>
                                </td>
                                <th>TOTAL</th>
                                <td>
                                    \$59
                                </td>
                                <td class=\"shop-cart-close\"><i class=\"icon-cancel-5\"></i></td>
                            </tr>
                            </tbody>
                        </table>
                        <div class=\"product-cart-detail\">
                            <div class=\"cupon-part\">
                                <input type=\"text\" name=\"txt\" placeholder=\"Cupon Code\">
                            </div>
                            <a href=\"#\" class=\"btn-medium btn-dark-coffee\">Apply Coupon</a>
                            <a href=\"#\" class=\"btn-medium btn-skin pull-right\">UPDATE cart</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <!-- End Main -->
{% endblock body %}", "FrontEndBundle:Restaurent:ShopCart.html.twig", "C:\\xampp\\htdocs\\www\\Esprit4All_Symfony\\src\\FrontEndBundle/Resources/views/Restaurent/ShopCart.html.twig");
    }
}
