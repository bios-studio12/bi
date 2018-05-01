<?php

/* header.html */
class __TwigTemplate_1c66e96ca774bc4a0140495707535472 extends Twig_Template
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
        return array (  129 => 66,  112 => 52,  108 => 51,  104 => 50,  98 => 47,  88 => 40,  67 => 22,  62 => 21,  57 => 19,  54 => 18,  49 => 16,  46 => 15,  44 => 14,  36 => 9,  32 => 8,  28 => 7,  24 => 6,  17 => 1,);
    }
}
