<?php

/* kategori.html */
class __TwigTemplate_f85e6650b5ca0c8d5544bf037691303d extends Twig_Template
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
        echo "
                <div class=\"container\">
                <div class=\"page-header category-page-header\">
                    <h2 class=\"page-title\">New Books</h2>
                    <p class=\"page-subtitle\"></p>
                </div><!-- /.page-header -->

                <div class=\"page-body\">
                    <div class=\"row\">
                        <!-- ========================================= CONTENT ========================================= -->
                        <div class=\"col-sm-8 col-sm-push-4\">
                            

                            <div class=\"tab-content\">
                                <div class=\"tab-pane active  wow fadeInUp\" id=\"grid\" role=\"tabpanel\">
                                    <div class=\"category-books books grid-view\">
                                        <div class=\"row\">


                                                ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 22
            echo "                                                <div class=\"col-md-4 col-sm-6\">

                                                    <div class=\"book\">      
                                                        <div class=\"book-cover\">
                                                            <div class=\"book-inner\">
                                                               <img src=\"";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "foto"), "html", null, true);
            echo "\" width=\"193\" height=\"261\" alt=\"\">
                                                                <div class=\"fade\"></div>
                                                                <div class=\"book-price\">

                                                                    <span class=\"price\">
                                                                      ";
            // line 32
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "diskon")) {
                // line 33
                echo "                                                                <span class=\"price-before-discount\">Rp. ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "harga"), "html", null, true);
                echo " </span>
                                                                ";
            }
            // line 35
            echo "                                                                Rp. ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "totalHarga"), "html", null, true);
            echo "                     </span>
                                                                    </div><!-- /.book-price -->

                                                                    <div class=\"cart animate-effect\">
                                                                        <div class=\"action\">
                                                                            <a class=\"add-to-cart\" href=\"javascript:void(0)\" onclick=\"counter(";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id"), "html", null, true);
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
                                                                <h3 class=\"book-title\"><a href=\"#\">";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "namaBuku"), "html", null, true);
            echo " </a></h3>
                                                                <p class=\"book-author\">";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "namaPenulis"), "html", null, true);
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

                                                    </div>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 68
        echo "                                                    </div>
                                                </div><!-- /.category-books -->
                                            </div><!-- /.tab-pane -->


                                        </div><!-- /.tab-content -->

                                       ";
        // line 75
        echo (isset($context["page"]) ? $context["page"] : null);
        echo "
                                    </div><!-- /.col -->

                                    <!-- ========================================= CONTENT :END ========================================= -->

                                    <!-- ========================================= SIDEBAR ========================================= -->
                                    <div class=\"col-sm-4 col-sm-pull-8\">
                                        <aside class=\"sidebar\">
                                            <!-- ========================================= BOOK CATEGORY ========================================= -->
                                            <section class=\"module\">
                                                <header class=\"module-header\">
                                                    <h4 class=\"module-book-category-title\">Book Category</h4>
                                                </header><!-- /.module-header -->

                                                <div class=\"module-body category-module-body\">
                                                    <ul class=\"list-unstyled category-list\">
                                                       <!--  <li><a href=\"category.html\">lorem ipsum</a></li>
                                                        <li><a href=\"category.html\">dolor sit amet</a></li> -->
                                                        ";
        // line 93
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kategori"]) ? $context["kategori"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["kategori"]) {
            // line 94
            echo "                                                        <li><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "main/Kategori/kategori/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["kategori"]) ? $context["kategori"] : null), "kategori"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["kategori"]) ? $context["kategori"] : null), "kategori"), "html", null, true);
            echo "</a></li>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kategori'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 96
        echo "                                                    </ul><!-- /.list-unstyled -->
                                                </div><!-- /.module-body -->
                                            </section><!-- /.module -->
                                            <!-- ========================================= BOOK CATEGORY : END ========================================= -->                    </aside><!-- /.sidebar -->
                                        </div><!-- /.col -->
                                        <!-- ========================================= SIDEBAR :END ========================================= -->
                                    </div><!-- /.row -->
                                </div><!-- /.page-body -->
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
        // line 124
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["relate"]) ? $context["relate"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["relate"]) {
            // line 125
            echo "                                                <div class=\"item item-carousel \">
                                        
                                                <div class=\"book\">      
                                                    <div class=\"sale-ribbon\"><div class=\"sale-ribbon-content\">Bst Saller</div></div>          <div class=\"book-cover\">
                                                    <div class=\"book-inner\">
                                                        <img src=\"";
            // line 130
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["relate"]) ? $context["relate"] : null), "foto"), "html", null, true);
            echo "\" width=\"193\" height=\"261\" alt=\"\">
                                                        <div class=\"fade\"></div>
                                                        <div class=\"book-price\">

                                                            <span class=\"price\">
                                                                <!-- <span class=\"price-before-discount\">\$ 10.99</span> -->
                                                                ";
            // line 136
            if ($this->getAttribute((isset($context["relate"]) ? $context["relate"] : null), "diskon")) {
                // line 137
                echo "                                                                <span class=\"price-before-discount\">Rp. ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["relate"]) ? $context["relate"] : null), "harga"), "html", null, true);
                echo " </span>
                                                                ";
            }
            // line 139
            echo "                                                                Rp. ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["relate"]) ? $context["relate"] : null), "totalHarga"), "html", null, true);
            echo "                     </span>
                                                            </div><!-- /.book-price -->

                                                            <div class=\"cart animate-effect\">
                                                                <div class=\"action\">
                                                                    <a class=\"add-to-cart\" href=\"javascript:void(0)\" onclick=\"counter(";
            // line 144
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
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["relate"]) ? $context["relate"] : null), "id"), "html", null, true);
            echo ")\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["relate"]) ? $context["relate"] : null), "namaBuku"), "html", null, true);
            echo "</a></h3>
                                                        <p class=\"book-author\">";
            // line 158
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
        // line 172
        echo "
                                                </div><!-- /#relate-book-carousel -->                   
                                            </div><!-- /.books -->
                                        </div><!-- /.module-body -->
                                    </div><!-- /.module -->
                                </div><!-- /.row -->
                            </div><!-- /.container -->
                            <!-- ========================================= RELATE BOOKS MODULE : END ========================================= -->  
                        </div><!-- /.category page -->

                        <a class=\"scrollup hidden-xs hidden-sm\" href=\"#\" style=\"display: none;\"><img src=\"";
        // line 182
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

    // line 260
    public function block_js($context, array $blocks = array())
    {
        // line 261
        echo "
<script type=\"text/javascript\">
    function counter(id)
    {
        
            // ajax delete data to database
            \$.ajax({
                url : \"";
        // line 268
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/getData/\" + id,
                type: \"POST\",
                dataType: \"JSON\",
                success: function(data)
                {
                    window.location = \"";
        // line 273
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
        return "kategori.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  400 => 273,  392 => 268,  383 => 261,  380 => 260,  298 => 182,  286 => 172,  266 => 158,  260 => 157,  244 => 144,  235 => 139,  229 => 137,  227 => 136,  217 => 130,  210 => 125,  206 => 124,  176 => 96,  163 => 94,  159 => 93,  138 => 75,  129 => 68,  109 => 54,  105 => 53,  89 => 40,  80 => 35,  74 => 33,  72 => 32,  63 => 27,  56 => 22,  52 => 21,  31 => 2,  27 => 1,);
    }
}
