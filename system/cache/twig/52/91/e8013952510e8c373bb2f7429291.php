<?php

/* index.html */
class __TwigTemplate_5291e8013952510e8c373bb2f7429291 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 1
    public function block_content($context, array $blocks = array())
    {
        $this->env->loadTemplate("slider.html")->display($context);
        // line 2
        echo "<div class=\"container\">
            <div class=\"wow fadeInUp\">
                    <div class=\"module block-new-books module-block\">
                        <div class=\"module-heading\">
                            <h2 class=\"module-title\">New Books</h2>
                            <div class=\"customNavigation\">
                                <a href=\"#\" data-target=\"#new-carousel\" class=\"btn btn-navigation left-nav-arrow owl-prev\"><i class='icon fa fa-caret-left'></i></a>
                                <a href=\"#\"  data-target=\"#new-carousel\" class=\"btn btn-navigation right-nav-arrow owl-next\"><i class='icon fa fa-caret-right'></i></a> 
                            </div><!-- /.customNavigation -->
                            <p class=\"module-subtitle\"></p>
                        </div><!-- /.module-heading -->

                        <div class=\"module-body\">
                            <div class=\"books\">
                            
                                <div id=\"new-carousel\" class=\"owl-carousel home-owl-carousel\">
                                    ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produk"]) ? $context["produk"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["produk"]) {
            // line 19
            echo "                                    <div class=\"item item-carousel\">
                                        <div class=\"books\">

                                            <div class=\"book\">  
                                            ";
            // line 23
            if (($this->getAttribute((isset($context["produk"]) ? $context["produk"] : null), "diskon") != 0)) {
                echo "    
                                                <div class=\"sale-ribbon\"><div class=\"sale-ribbon-content\">  ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produk"]) ? $context["produk"] : null), "diskon"), "html", null, true);
                echo " %</div></div> 
                                                ";
            }
            // line 26
            echo "                                                <div class=\"book-cover\">
                                                    <div class=\"book-inner\">
                                                        <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produk"]) ? $context["produk"] : null), "foto"), "html", null, true);
            echo "\" width=\"193\" height=\"261\" alt=\"\">
                                                        <div class=\"fade\"></div>
                                                        <div class=\"book-price\">

                                                            <span class=\"price\">
                                                                ";
            // line 33
            if ($this->getAttribute((isset($context["produk"]) ? $context["produk"] : null), "diskon")) {
                // line 34
                echo "                                                                <span class=\"price-before-discount\">Rp. ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produk"]) ? $context["produk"] : null), "harga"), "html", null, true);
                echo " </span>
                                                                ";
            }
            // line 36
            echo "                                                                Rp. ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produk"]) ? $context["produk"] : null), "totalHarga"), "html", null, true);
            echo "                     </span>
                                                            </div><!-- /.book-price -->

                                                            <div class=\"cart animate-effect\">
                                                                <div class=\"action\">
                                                                    <a class=\"add-to-cart\" href=\"javascript:void(0)\" onclick=\"counter(";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produk"]) ? $context["produk"] : null), "id"), "html", null, true);
            echo ")\" title=\"Add to Cart\">
                                                                        <i class=\"icon icon-plus fa fa-plus-circle\"></i>
                                                                    </a>
                                                                    <a class=\"add-to-cart\" href=\"#\" title=\"Favourite\">
                                                                        <i class=\"icon icon-heart fa fa-heart\"></i>
                                                                    </a>
                                                                </div><!-- /.action -->
                                                            </div><!-- /.cart -->
                                                        </div><!-- /.book-inner -->
                                                    </div><!-- /.book-cover -->


                                                    <div class=\"book-details\">
                                                        <h3 class=\"book-title\"><a href=\"javascript:void(0)\" onclick=\"counter(";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produk"]) ? $context["produk"] : null), "id"), "html", null, true);
            echo ")\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produk"]) ? $context["produk"] : null), "namaBuku"), "html", null, true);
            echo "</a></h3>
                                                        <p class=\"book-author\">";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produk"]) ? $context["produk"] : null), "namaPenulis"), "html", null, true);
            echo "</p>
                                                        <div class=\"star-rating\">
                                                            <i class=\"fa fa-star color\"></i>
                                                            <i class=\"fa fa-star color\"></i>
                                                            <i class=\"fa fa-star color\"></i>
                                                            <i class=\"fa fa-star color\"></i>
                                                            <i class=\"fa fa-star \"></i>
                                                        </div><!-- /.star-rating -->

                                                    </div><!-- /.book-details -->
                                                </div><!-- /.book -->

                                            </div><!-- /.books -->
                                        </div><!-- /.item -->   
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produk'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 70
        echo "                                        </div><!-- /#new-carousel -->           
                                    </div><!-- /.books -->
                                </div><!-- /.module-body -->
                            </div><!-- /.module -->
                        </div><!-- /.row -->
                        <!-- ========================================= NEW BOOKS MODULE : END ========================================= -->     <!-- /.block-new-books -->

                        <!-- .block-best-sellers -->        
                        <!-- ========================================= BEST SELLER MODULE ========================================= -->
                        <div class=\"wow fadeInUp\">
                            <div class=\"module block-best-sellers module-block\">
                                <div class=\"module-heading\">
                                    <h2 class=\"module-title\">Best Sellers</h2>
                                    <div class=\"customNavigation\">
                                        <a href=\"#\" data-target=\"#seller-carousel\" class=\"btn btn-navigation left-nav-arrow-seller owl-prev\"><i class='icon fa fa-caret-left'></i></a>
                                        <a href=\"#\" data-target=\"#seller-carousel\" class=\"btn btn-navigation right-nav-arrow-seller owl-next\"><i class='icon fa fa-caret-right'></i></a>    
                                    </div><!-- /.customNavigation -->
                                    <p class=\"module-subtitle\"></p>
                                </div><!-- /.module-heading -->

                                <div class=\"module-body\">
                                    <div class=\"books\">

                                        <div id=\"seller-carousel\" class=\"owl-carousel home-owl-carousel\">
                                            <div class=\"item item-carousel\">
                                                ";
        // line 95
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["best"]) ? $context["best"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["best"]) {
            // line 96
            echo "                                                <div class=\"book\">      
                                                    <div class=\"sale-ribbon\"><div class=\"sale-ribbon-content\">Bst Saller</div></div>          <div class=\"book-cover\">
                                                    <div class=\"book-inner\">
                                                        <img src=\"";
            // line 99
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["best"]) ? $context["best"] : null), "foto"), "html", null, true);
            echo "\" width=\"193\" height=\"261\" alt=\"\">
                                                        <div class=\"fade\"></div>
                                                        <div class=\"book-price\">

                                                            <span class=\"price\">
                                                                <!-- <span class=\"price-before-discount\">\$ 10.99</span> -->
                                                                Rp. ";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["best"]) ? $context["best"] : null), "harga"), "html", null, true);
            echo "                     </span>
                                                            </div><!-- /.book-price -->

                                                            <div class=\"cart animate-effect\">
                                                                <div class=\"action\">
                                                                    <a class=\"add-to-cart\" href=\"javascript:void(0)\" onclick=\"counter(";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["best"]) ? $context["best"] : null), "id"), "html", null, true);
            echo ")\" title=\"Add to Cart\">
                                                                        <i class=\"icon icon-plus fa fa-plus-circle\"></i>
                                                                    </a>
                                                                    <a class=\"add-to-cart\" href=\"#\" title=\"Favourite\">
                                                                        <i class=\"icon icon-heart fa fa-heart\"></i>
                                                                    </a>
                                                                </div><!-- /.action -->
                                                            </div><!-- /.cart -->
                                                        </div><!-- /.book-inner -->
                                                    </div><!-- /.book-cover -->


                                                    <div class=\"book-details\">
                                                        <h3 class=\"book-title\"><a href=\"javascript:void(0)\" onclick=\"counter(";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["best"]) ? $context["best"] : null), "id"), "html", null, true);
            echo ")\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["best"]) ? $context["best"] : null), "namaBuku"), "html", null, true);
            echo "</a></h3>
                                                        <p class=\"book-author\">";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["best"]) ? $context["best"] : null), "namaPenulis"), "html", null, true);
            echo "</p>
                                                        <div class=\"star-rating\">
                                                            <i class=\"fa fa-star color\"></i>
                                                            <i class=\"fa fa-star color\"></i>
                                                            <i class=\"fa fa-star color\"></i>
                                                            <i class=\"fa fa-star color\"></i>
                                                            <i class=\"fa fa-star \"></i>
                                                        </div><!-- /.star-rating -->

                                                    </div><!-- /.book-details -->
                                                </div><!-- /.book -->
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['best'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 136
        echo "                                            </div><!-- /.item -->
                                                    </div><!-- /#seller-carousel -->        
                                                </div><!-- /.books --> 
                                            </div><!-- /.module-body -->    
                                        </div><!-- /.module --> 
                                    </div><!-- /.row -->    
                                    <!-- ========================================= BEST SELLER MODULE : END ========================================= -->       <!-- /.block-best-sellers -->
                                </div><!-- /.container -->

                                <!-- .block-featured-author -->
                                <div class=\"featured-item-block\">
                                    <div class=\"container\">
                                        <!-- ========================================= FEATURED AUTHOR MODULE ========================================= -->
                                        <div class=\"wow fadeInUp\">
                                            <div class=\"module block-featured-author module-block\">
                                                <div class=\"module-heading\">
                                                    <h2 class=\"module-title\">Featured Author</h2>
                                                    <div class=\"customNavigation\">
                                                        <a href=\"#\" data-target=\"#featured-author-carousel\" class=\"btn btn-navigation left-nav-arrow-featured owl-prev\"><i class='icon fa fa-caret-left'></i></a>
                                                        <a href=\"#\" data-target=\"#featured-author-carousel\" class=\"btn btn-navigation right-nav-arrow-featured owl-next\"><i class='icon fa fa-caret-right'></i></a> 
                                                    </div><!-- /.customNavigation -->
                                                    <p class=\"module-subtitle\"></p>

                                                </div><!-- /.module-heading -->

                                                <div class=\"module-body\" id=\"featured-author\">
                                                    <div class=\"authors\">

                                                        <div id=\"featured-author-carousel\" class=\"owl-carousel\">
                                                            <div class=\"item item-author-block author\">
                                                                <a href=\"detail.html\">
                                                                    <div class=\"author-dp\">
                                                                        <img src=\"";
        // line 168
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/user/images/1/p2.png\"  alt=\"\">
                                                                    </div>
                                                                </a>
                                                                <div class=\"author-details\">
                                                                    <h3 class=\"author-name\"><a href=\"detail.html\">Rinaldi Munir</a></h3>
                                                                    <blockquote class=\"author-testimonial\">..Lorem ipsum dolor sit amet,<br>consectetur adipisicing elit...</blockquote>
                                                                    <a href=\"";
        // line 174
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/\" class=\"btn btn-primary btn-view-books\">View Books</a>
                                                                </div><!-- /.author-details -->
                                                            </div><!-- /.item -->

                                                            <div class=\"item item-author-block author\">
                                                                <a href=\"detail.html\">
                                                                    <div class=\"author-dp\">
                                                                        <img src=\"";
        // line 181
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/user/images/1/p2.png\"  alt=\"\">
                                                                    </div>
                                                                </a>
                                                                <div class=\"author-details\">
                                                                    <h3 class=\"author-name\"><a href=\"detail.html\">Rinaldi Munir</a></h3>
                                                                    <blockquote class=\"author-testimonial\">..Lorem ipsum dolor sit amet,<br>consectetur adipisicing elit...</blockquote>
                                                                    <a href=\"#\" class=\"btn btn-primary btn-view-books\">View Books</a>
                                                                </div><!-- /.author-details -->
                                                            </div><!-- /.item -->


                                                            <div class=\"item item-author-block author\">
                                                                <a href=\"detail.html\">
                                                                    <div class=\"author-dp\">
                                                                        <img src=\"";
        // line 195
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/user/images/1/p2.png\"  alt=\"\">
                                                                    </div>
                                                                </a>
                                                                <div class=\"author-details\">
                                                                    <h3 class=\"author-name\"><a href=\"detail.html\">Rinaldi Munir</a></h3>
                                                                    <blockquote class=\"author-testimonial\">..Lorem ipsum dolor sit amet,<br>consectetur adipisicing elit...</blockquote>
                                                                    <a href=\"#\" class=\"btn btn-primary btn-view-books\">View Books</a>
                                                                </div><!-- /.author-details -->
                                                            </div><!-- /.item -->

                                                            <div class=\"item item-author-block author\">
                                                                <a href=\"detail.html\">
                                                                    <div class=\"author-dp\">
                                                                        <img src=\"";
        // line 208
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/user/images/1/p2.png\"  alt=\"\">
                                                                    </div>
                                                                </a>
                                                                <div class=\"author-details\">
                                                                    <h3 class=\"author-name\"><a href=\"detail.html\">Rinaldi Munir</a></h3>
                                                                    <blockquote class=\"author-testimonial\">..Lorem ipsum dolor sit amet,<br>consectetur adipisicing elit...</blockquote>
                                                                    <a href=\"#\" class=\"btn btn-primary btn-view-books\">View Books</a>
                                                                </div><!-- /.author-details -->
                                                            </div><!-- /.item -->

                                                            <div class=\"item item-author-block author\">
                                                                <a href=\"detail.html\">
                                                                    <div class=\"author-dp\">
                                                                        <img src=\"";
        // line 221
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/user/images/1/p2.png\"  alt=\"\">
                                                                    </div>
                                                                </a>
                                                                <div class=\"author-details\">
                                                                    <h3 class=\"author-name\"><a href=\"detail.html\">Rinaldi Munir</a></h3>
                                                                    <blockquote class=\"author-testimonial\">..Lorem ipsum dolor sit amet,<br>consectetur adipisicing elit...</blockquote>
                                                                    <a href=\"#\" class=\"btn btn-primary btn-view-books\">View Books</a>
                                                                </div><!-- /.author-details -->
                                                            </div><!-- /.item -->

                                                            <div class=\"item item-author-block author\">
                                                                <a href=\"detail.html\">
                                                                    <div class=\"author-dp\">
                                                                        <img src=\"";
        // line 234
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/user/images/1/p2.png\"  alt=\"\">
                                                                    </div>
                                                                </a>
                                                                <div class=\"author-details\">
                                                                    <h3 class=\"author-name\"><a href=\"detail.html\">Rinaldi Munir</a></h3>
                                                                    <blockquote class=\"author-testimonial\">..Lorem ipsum dolor sit amet,<br>consectetur adipisicing elit...</blockquote>
                                                                    <a href=\"#\" class=\"btn btn-primary btn-view-books\">View Books</a>
                                                                </div><!-- /.author-details -->
                                                            </div><!-- /.item -->
                                                        </div><!-- /#featured-author-carousel -->
                                                    </div><!-- /.authors -->
                                                </div><!-- /.module-body -->
                                            </div><!-- /.module -->
                                        </div><!-- /.row -->
                                        <!-- ========================================= FEATURED AUTHOR MODULE : END ========================================= -->       </div>
                                    </div><!-- /.featured-item-block -->
                                    <!-- /.block-featured-author -->
                                </div><!-- /.home-page -->
                                <a class=\"scrollup hidden-xs hidden-sm\" href=\"#\" style=\"display: none;\"><img src=\"";
        // line 252
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/user/images/top-scroll.png\" alt=\"\" ></a>
                            </div>

                            <div class=\"container\">
                                <!-- ============================================================= BRANDS ============================================================= -->
                                <div class=\"row brands-block wow fadeInUp\">
                                    <div class=\"col-md-12\">
                                        <div class=\"page-header\">
                                            <h2 class=\"page-title\">Brands</h2>
                                            <p class=\"page-subtitle\"></p>
                                        </div><!-- /.page-header -->

                                        <div class=\"page-body\">
                                            <div id=\"owl-demo\" class=\"owl-carousel brand-carousel\">
                                                <div class=\"item desat\">
                                                    <div class=\"brand-logo\">
                                                        <h5>brand</h5>
                                                        <h4>logo</h4>
                                                    </div>
                                                </div><!-- /.item -->

                                                <div class=\"item desat\">
                                                    <div class=\"brand-logo\">
                                                        <h5>brand</h5>
                                                        <h4>logo</h4>
                                                    </div>
                                                </div><!-- /.item -->

                                                <div class=\"item desat\">
                                                    <div class=\"brand-logo\">
                                                        <h5>brand</h5>
                                                        <h4>logo</h4>
                                                    </div>
                                                </div><!-- /.item -->

                                                <div class=\"item desat\">
                                                    <div class=\"brand-logo\">
                                                        <h5>brand</h5>
                                                        <h4>logo</h4>
                                                    </div>
                                                </div><!-- /.item -->

                                                <div class=\"item desat\">
                                                    <div class=\"brand-logo\">
                                                        <h5>brand</h5>
                                                        <h4>logo</h4>
                                                    </div>
                                                </div><!-- /.item -->

                                                <div class=\"item desat\">
                                                    <div class=\"brand-logo\">
                                                        <h5>brand</h5>
                                                        <h4>logo</h4>
                                                    </div>
                                                </div><!-- /.item -->

                                                <div class=\"item desat\">
                                                    <div class=\"brand-logo\">
                                                        <h5>brand</h5>
                                                        <h4>logo</h4>
                                                    </div>
                                                </div><!-- /.item -->

                                                <div class=\"item desat\">
                                                    <div class=\"brand-logo\">
                                                        <h5>brand</h5>
                                                        <h4>logo</h4>
                                                    </div>
                                                </div><!-- /.item -->

                                            </div><!-- /#owl-demo -->           
                                        </div><!-- /.page-body -->
                                    </div><!-- /.col -->
                                </div><!-- /.row -->
                                <!-- ============================================================= BRANDS : END ============================================================= -->       
                            </div><!-- /.container -->
           

";
    }

    // line 331
    public function block_js($context, array $blocks = array())
    {
        // line 332
        echo "
<script type=\"text/javascript\">
    function counter(id)
    {
        
            // ajax delete data to database
            \$.ajax({
                url : \"";
        // line 339
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/getData/\" + id,
                type: \"POST\",
                dataType: \"JSON\",
                success: function(data)
                {
                    window.location = \"";
        // line 344
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/detail/?id=\" + id;
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error deleting data');
                }
            });

        }
    


</script>



 ";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  477 => 344,  469 => 339,  460 => 332,  457 => 331,  374 => 252,  353 => 234,  337 => 221,  321 => 208,  305 => 195,  288 => 181,  278 => 174,  269 => 168,  235 => 136,  217 => 124,  211 => 123,  195 => 110,  187 => 105,  177 => 99,  172 => 96,  168 => 95,  141 => 70,  120 => 55,  114 => 54,  98 => 41,  89 => 36,  83 => 34,  81 => 33,  72 => 28,  68 => 26,  63 => 24,  59 => 23,  53 => 19,  49 => 18,  31 => 2,  27 => 1,);
    }
}
