<?php

/* header.html */
class __TwigTemplate_49c5e033e282c4deb20e9b384b998b7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<header class=\"header\" >
            <!-- ============================================================= NAVBAR TOPBAR ============================================================= -->
            <nav class=\"navbar navbar-top-bar navbar-static-top\">
                <div class=\"container\">
                    <ul class=\"navbar-nav nav\">
                        <li><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/\">Home</a></li>
                        <li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/\">About Us</a></li>
                        <li><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/\">Customer Service</a></li>
                        <li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/\">Terms</a></li>
                    </ul><!-- /.navbar-nav -->

                    <ul class=\"navbar-nav nav navbar-right\">
                        <li><a href=\"#\">Wishlist</a></li>
                        ";
        // line 14
        if (($this->getAttribute((isset($context["logs"]) ? $context["logs"] : null), "kategori") == "user")) {
            // line 15
            echo "
                        <li><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/Member/logout\">Logout</a></li>
                        ";
        } else {
            // line 18
            echo "
                        <li><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/Id/Checkout\">Login</a></li>
                        ";
        }
        // line 21
        echo "                        <li><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/Checkout\">Checkout</a></li>
                        <li class=\"active\"><a data-toggle=\"collapse\" href=\"#my-cart\">Total : Rp.";
        // line 22
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalHarga"]) ? $context["totalHarga"] : null)), "html", null, true);
        echo "</a></li>
                    </ul><!-- /.navbar-nav -->
                </div><!-- /.container-->
            </nav><!-- /.navbar-->
            <!-- ============================================================= NAVBAR TOPBAR : END ============================================================= -->    <div class=\"yamm navbar navbar-default navbar-default-book animate-dropdown\" role=\"navigation\">
            <div class=\"container\">
                <!-- ============================================================= NAVBAR PRIMARY ============================================================= -->

                <div class=\"header-mast\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#KYbook-navbar\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>

                        <a class=\"navbar-brand\" href=\"#\">
                        <img alt=\"logo\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/user/images/logo1.png\" width=\"255.232px\" height=\"66.132px\"/>   
                    </a>

                    </div><!-- /.navbar-header -->
                    <div class=\"collapse navbar-collapse\" id=\"KYbook-navbar\">
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li class=\"dropdown yamm-fw active\">
                                <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Kategori/kategori\">Category</a>

                            </li>
                            <li class=\"hidden-sm\"><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/\">New Books</a></li>
                            <li  class=\"hidden-sm\"><a href=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/\">Best Seller</a></li>
                            <li ><a href=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/Penerbit\">Penerbit</a></li>
                            <li class=\"dropdown\">
                                <!--<a href=\"category.html\" data-toggle=\"dropdown\" data-hover=\"dropdown\" class=\"dropdown-toggle trigger\">Pages <b class=\"caret\"></b></a> -->
                                <ul class=\"dropdown-menu pages-dropdown\">
                                    <li><a href=\"category.html\">Category</a></li>
                                    <li><a href=\"detail.html\">Single Product</a></li>
                                    <li><a href=\"checkout.html\">Checkout</a></li>
                                    <li><a href=\"cart.html\">Shopping Cart</a></li>
                                    <li><a href=\"contact.html\">Contact</a></li>
                                    <li><a href=\"404.html\">404</a></li>
                                </ul><!-- /.dropdown-menu -->
                            </li> <!-- /.dropdown -->      
                        </ul><!-- /.nav -->
                    </div><!-- /.collapse -->
                    <a href=\"#my-cart\" class=\"navbar-btn btn btn-cart\" data-toggle=\"collapse\"><img src=\"";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/user/images/shopping-cart.png\" alt=\"\" /><span class=\"badge-cart-items-count\">";
        echo twig_escape_filter($this->env, (isset($context["jumlahData"]) ? $context["jumlahData"] : null), "html", null, true);
        echo "</span></a>
                </div><!-- /.header-mast -->
                <!-- ============================================================= NAVBAR PRIMARY : END ============================================================= -->           
            </div><!-- /.container -->
        </div><!-- /.yamm -->

    </header><!-- /.header -->";
    }

    public function getTemplateName()
    {
        return "header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 66,  112 => 52,  108 => 51,  104 => 50,  88 => 40,  67 => 22,  62 => 21,  57 => 19,  54 => 18,  46 => 15,  36 => 9,  32 => 8,  28 => 7,  24 => 6,  17 => 1,  433 => 260,  430 => 259,  425 => 169,  420 => 268,  418 => 259,  378 => 222,  341 => 191,  333 => 189,  329 => 188,  325 => 187,  317 => 185,  313 => 184,  309 => 183,  294 => 173,  292 => 172,  286 => 169,  267 => 153,  253 => 142,  242 => 134,  216 => 113,  205 => 108,  201 => 107,  197 => 106,  191 => 103,  180 => 98,  169 => 90,  165 => 89,  157 => 84,  148 => 79,  138 => 73,  135 => 72,  130 => 71,  127 => 70,  125 => 69,  87 => 34,  64 => 23,  60 => 22,  56 => 21,  52 => 20,  48 => 19,  44 => 14,  40 => 17,  34 => 14,  19 => 1,  477 => 344,  469 => 339,  460 => 332,  457 => 331,  374 => 252,  353 => 200,  337 => 190,  321 => 186,  305 => 182,  288 => 170,  278 => 174,  269 => 154,  235 => 130,  217 => 124,  211 => 123,  195 => 110,  187 => 102,  177 => 99,  172 => 96,  168 => 95,  141 => 74,  120 => 55,  114 => 54,  98 => 47,  89 => 36,  83 => 34,  81 => 31,  72 => 25,  68 => 24,  63 => 24,  59 => 23,  53 => 19,  49 => 16,  31 => 2,  27 => 1,);
    }
}
