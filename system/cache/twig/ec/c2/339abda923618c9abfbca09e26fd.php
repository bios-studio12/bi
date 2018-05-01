<?php

/* detail.html */
class __TwigTemplate_ecc2339abda923618c9abfbca09e26fd extends Twig_Template
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
        // line 2
        echo " <div class=\"breadcrumb-container\">
            <div class=\"container\">
                <ul class=\"breadcrumb pull-left\">
                    <li><a href=\"#\">Home</a></li>
                    <li><a href=\"#\">Detail Book</a></li>
                   <!-- <li class=\"active\">New Books</li> -->
                </ul><!-- /.breadcrumb -->

                <!-- ========================================= BREADCRUMB SEARCH BOX ========================================= -->
                <ul class=\"list-unstyled search-box pull-right\">
                    <li data-target=\"#search\" data-toggle=\"sub-header\"><button type=\"button\" class=\"btn btn-primary-dark search-button\"><i class=\"fa fa-search icon\"></i></button>
                        <div class=\"row search-action sub-header\" id=\"search\">
                            <div class=\"col-sm-8 col-xs-12 no-padding-right\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-btn\"><button class=\"btn btn-search\" type=\"button\"><i class=\"fa fa-search icon\"></i></button></span>
                                    <input type=\"text\" class=\"form-control search-book\" placeholder=\"Search books...\">
                                </div><!-- /.input-group -->
                            </div><!-- /.col -->

                            <div class=\"col-sm-4 col-xs-12 select-wrapper\" style=\"padding:0px;\">
                                <select id=\"id_select\" class=\"selectpicker\">
                                    <option selected>All Category</option>
                                    <option>Books</option>
                                    <option>Textbooks</option>
                                    <option>Audiobooks</option>
                                    <option>Magazines</option>
                                    <option>Kids</option>
                                </select>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </li>
                </ul><!-- /.search-box -->
                <!-- ========================================= BREADCRUMB SEARCH BOX : END ========================================= -->        

            </div><!-- /.container -->
        </div><!-- /.breadcrumb-container -->

        <div class=\"book-detail page\">
            <div class=\"container\">
                <div class=\"primary-block clearfix\">
                    <div class=\"row\">
                        <div class=\"col-sm-4\">
                            <div class=\"book-cover book detail-book-cover\">
                                <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produk"]) ? $context["produk"] : null), "fotoBesar"), "html", null, true);
        echo "\" class=\"img-responsive\" data-echo=\"";
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produk"]) ? $context["produk"] : null), "fotoBesar"), "html", null, true);
        echo "\" alt=\"\">
                                <div class=\"fade\"></div>
                            </div><!-- /.book-cover -->
                        </div><!-- /.col -->

                        <div class=\"col-sm-8\">
                            <div class=\"book-detail-header\">
                                <h2 class=\"book-title\">";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produk"]) ? $context["produk"] : null), "namaBuku"), "html", null, true);
        echo "</h2>
                                <p class=\"book-author\">By <span class=\"book-author-name\">";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produk"]) ? $context["produk"] : null), "namaPenulis"), "html", null, true);
        echo "</span></p>
                                <div class=\"star-rating\">
                                    <i class=\"fa fa-star color\"></i>
                                    <i class=\"fa fa-star color\"></i>
                                    <i class=\"fa fa-star color\"></i>
                                    <i class=\"fa fa-star color\"></i>
                                    <i class=\"fa fa-star\"></i>
                                </div><!-- /.star-rating -->    
                            </div><!-- /.book-detail-header -->

                            <div class=\"book-detail-body\">

                                <div class=\"detail-cart-button row clearfix\">
                                    <div class=\"pull-left col-md-6 col-sm-5 col-xs-12\">
                                        <div class=\"detail-book-price\">
                                            <span class=\"price\">
                                                                ";
        // line 69
        if ($this->getAttribute((isset($context["produk"]) ? $context["produk"] : null), "diskon")) {
            // line 70
            echo "                                                                <span class=\"price-before-discount\">Rp. ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produk"]) ? $context["produk"] : null), "harga"), "html", null, true);
            echo " </span>
                                                                ";
        }
        // line 72
        echo "                                                                Rp. ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produk"]) ? $context["produk"] : null), "totalHarga"), "html", null, true);
        echo "                     </span>
                                        </div><!-- /.detail-book-price -->
                                    </div><!-- /.pull-left -->

                                    <div class=\"pull-right col-md-6 col-sm-7 col-xs-12\">
                                        <div class=\"row product-actions\">
                                        
                                            <a href=\"javascript:void(0)\" onclick=\"add('";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produk"]) ? $context["produk"] : null), "kodeProduk"), "html", null, true);
        echo "')\" class=\"col-sm-6 btn btn-primary btn-addToCart\"><i class=\"icon-plus fa fa-plus-circle\"></i>Add to Cart</a>

                                          
                                            <button title=\"favourite\" class=\"hidden-xs btn btn-secondary btn-add-to-wishlist col-xs-2 \" type=\"button\"><span class=\"icon glyphicon glyphicon-heart\"></span></button>
                                        
                                        </div><!-- /.row -->
                                    </div><!-- /.pull-right -->
                                </div><!-- /.detail-cart-button -->

                                <div class=\"clearfix\"></div>

                                
                                <div class=\"product-description\">
                                    <br>
                                <table >
                                <thead>
                                    <tr>
                                        <th>Penulis  </th>
                                        <th>&emsp;: ";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produk"]) ? $context["produk"] : null), "namaPenulis"), "html", null, true);
        echo "</th>
                                    </tr>
                                    <tr>
                                        <th>ISBN  </th>
                                        <th>&emsp;: ";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produk"]) ? $context["produk"] : null), "isbn"), "html", null, true);
        echo "</th>
                                    </tr>
                                    <tr>
                                        <th>Isi</th>
                                        <th>&emsp;: ";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produk"]) ? $context["produk"] : null), "isi"), "html", null, true);
        echo " Halaman</th>
                                    </tr>
                                </thead>
                                </table>
                                </div><!-- /.product-description -->

                            </div><!-- /.book-detail-body -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    <div class=\"tab-holder clearfix\">
                        <div class=\"book-additional-details\">
                            <!-- Nav tabs -->
                            <ul class=\"nav nav-tabs book-detail-tab\">
                                <li class=\"active\" role=\"presentation\"><a href=\"#more\" data-toggle=\"tab\">Deskripsi Buku</a></li>
                            </ul><!-- /.nav -->

                            <!-- Tab panes -->
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"more\" role=\"tabpanel\">
                                    <p>";
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produk"]) ? $context["produk"] : null), "deskripsi"), "html", null, true);
        echo "</p>
                                </div><!-- /.tab-pane -->

                            </div><!-- /.tab-content -->
                        </div><!-- /.book-additional-details -->
                    </div><!-- /.col -->
                </div><!-- /.primary-block -->
            </div><!-- /.container -->

            <!-- ========================================= RELATE BOOKS MODULE ========================================= -->
            <div class=\"container\">
                <div class=\"wow fadeInUp\">
                    <div class=\"module block-relate-books module-block\">
                        <div class=\"module-heading\">
                            <h2 class=\"module-title\">Relate Books</h2>
                            <div class=\"customNavigation\">
                                <a href=\"#\" data-target=\"#relate-book-carousel\" class=\"btn btn-navigation left-nav-arrow owl-prev\"><i class='icon fa fa-caret-left'></i></a>
                                <a href=\"#\" data-target=\"#relate-book-carousel\" class=\"btn btn-navigation right-nav-arrow owl-next\"><i class='icon fa fa-caret-right'></i></a>  
                            </div><!-- /.customNavigation -->
                            <p class=\"module-subtitle\"></p>
                        </div><!-- /.module-heading -->

                        <div class=\"module-body\">
                            <div class=\"books\">

                                <div id=\"relate-book-carousel\" class=\"owl-carousel home-owl-carousel relate-books\">
                                ";
        // line 150
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["relate"]) ? $context["relate"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["relate"]) {
            // line 151
            echo "                                    <div class=\"item item-carousel \">
                                        
                                                <div class=\"book\">      
                                                    <div class=\"sale-ribbon\"><div class=\"sale-ribbon-content\">Bst Saller</div></div>          <div class=\"book-cover\">
                                                    <div class=\"book-inner\">
                                                        <img src=\"";
            // line 156
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["relate"]) ? $context["relate"] : null), "foto"), "html", null, true);
            echo "\" width=\"193\" height=\"261\" alt=\"\">
                                                        <div class=\"fade\"></div>
                                                        <div class=\"book-price\">

                                                            <span class=\"price\">
                                                                <!-- <span class=\"price-before-discount\">\$ 10.99</span> -->
                                                                Rp. ";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["relate"]) ? $context["relate"] : null), "harga"), "html", null, true);
            echo "                     </span>
                                                            </div><!-- /.book-price -->

                                                            <div class=\"cart animate-effect\">
                                                                <div class=\"action\">
                                                                    <a class=\"add-to-cart\" href=\"javascript:void(0)\" onclick=\"counter(";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["relate"]) ? $context["relate"] : null), "id"), "html", null, true);
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
            // line 180
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["relate"]) ? $context["relate"] : null), "id"), "html", null, true);
            echo ")\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["relate"]) ? $context["relate"] : null), "namaBuku"), "html", null, true);
            echo "</a></h3>
                                                        <p class=\"book-author\">";
            // line 181
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["relate"]) ? $context["relate"] : null), "namaPenulis"), "html", null, true);
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
                                                
                                    </div><!-- /.item -->
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['relate'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 195
        echo "                                </div><!-- /#relate-book-carousel -->                   
                            </div><!-- /.books -->
                        </div><!-- /.module-body -->
                    </div><!-- /.module -->
                </div><!-- /.row -->
            </div><!-- /.container -->
            <!-- ========================================= RELATE BOOKS MODULE : END ========================================= --></div><!-- /.book-detail page -->
            <a class=\"scrollup hidden-xs hidden-sm\" href=\"#\" style=\"display: none;\"><img src=\"";
        // line 202
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/user/images/top-scroll.png\" alt=\"\" ></a>
        </div>

        <div class=\"container\">
            <!-- ============================================================= BRANDS ============================================================= -->
            <div class=\"row brands-block wow fadeInUp\">
                <div class=\"col-md-12\">
                    <div class=\"page-header\">
                        <h2 class=\"page-title\">Brands</h2>
                        <p class=\"page-subtitle\">DO eiusmod tempor incid... et dolore magna aliqua</p>
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

    // line 281
    public function block_js($context, array $blocks = array())
    {
        // line 282
        echo "
<script type=\"text/javascript\">
    function counter(id)
    {
        
            // ajax delete data to database
            \$.ajax({
                url : \"";
        // line 289
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/getData/\" + id,
                type: \"POST\",
                dataType: \"JSON\",
                success: function(data)
                {
                    window.location = \"";
        // line 294
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/detail/?id=\" + id;
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error deleting data');
                }
            });

        }

    function add(id)
    {
            var status = true;
            // ajax delete data to database
            // var qty = document.getElementById('qty').value;
            var test = id,qty;
            \$.ajax({
                url : \"";
        // line 311
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Cart/addData/\" + id ,
                type: \"POST\",
                dataType: \"JSON\",
                success: function(data)
                {
                    
                    if (data.status == true) { 
                        alert(\"Menyimpan\"); 
                        window.location = \"";
        // line 319
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/\";
                        
                    }else{
                        alert(\"Buku sudah ada di Cart\"); 
                        window.location = \"";
        // line 323
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/\";
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error data');
                }
            });

        }
    


</script>



 ";
    }

    public function getTemplateName()
    {
        return "detail.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  437 => 323,  430 => 319,  419 => 311,  399 => 294,  391 => 289,  382 => 282,  379 => 281,  297 => 202,  288 => 195,  268 => 181,  262 => 180,  246 => 167,  238 => 162,  228 => 156,  221 => 151,  217 => 150,  188 => 124,  166 => 105,  159 => 101,  152 => 97,  131 => 79,  120 => 72,  114 => 70,  112 => 69,  93 => 53,  89 => 52,  75 => 45,  30 => 2,  27 => 1,);
    }
}
