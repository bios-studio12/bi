<?php

/* layout.html */
class __TwigTemplate_e867b32dff38a6d783b07c673c9e21b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>

    <!-- Meta -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">

    <title>Toko Buku Komputer</title>

    <!-- Bootstrap Core CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/user/css/bootstrap.min.css\">

    <!-- Customizable CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/user/css/main.css\">
    <!--<link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/green.css\"> -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/user/css/dark-green.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/user/css/bootstrap-select.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/user/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/user/css/owl.carousel.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/user/css/owl.transitions.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/user/css/animate.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/user/css/jquery-ui.min.css\">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,500,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Icons/Glyphs -->
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/user/css/elegant-fonts.css\">

    <!-- Favicon -->
    <link rel=\"shortcut icon\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/user/images/iconsite.png\">

    <!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
<!--[if lt IE 9]>
<script src=\"assets/js/html5shiv.js\"></script>
<script src=\"assets/js/respond.min.js\"></script>
<![endif]-->
</head>
<body>

    <div class=\"wrapper\">

        <!-- ============================================================= MY CART HEADER ============================================================= -->
        <div id=\"my-cart\" class=\"collapse\">
            <div class=\"container\">
                <div class=\"module\">
                    <div class=\"module-heading\">
                        <h4>My Cart</h4>
                    </div><!-- /.module-heading -->
                    <div class=\"module-body\">
                        <p>DO eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                        <div class=\"order-detail table-responsive\">
                            <form method=\"post\" id=\"myForm\">
                            <table class=\"table table-cart index-dropdown-table\">
                                <thead>
                                    <tr>
                                        <th class=\"dark\">Book Name</th>
                                        <th>Unit Price</th>
                                        <th class=\"dark text-center\">Qty</th>
                                        <th>Subtotal</th>
                                        <th class=\"dark\"></th>
                                    </tr>
                                </thead><!-- /thead-->

                                <tbody class=\"index-dropdown-body\">
                                    ";
        // line 69
        $context["subTotal"] = 0;
        // line 70
        echo "                                    ";
        $context["totHarga"] = 0;
        // line 71
        echo "                                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["test"]) ? $context["test"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
            // line 72
            echo "                                    ";
            $context["totHarga"] = ($this->getAttribute((isset($context["test"]) ? $context["test"] : null), "harga") * $this->getAttribute((isset($context["test"]) ? $context["test"] : null), "qty"));
            // line 73
            echo "                                    ";
            $context["subTotal"] = ((isset($context["subTotal"]) ? $context["subTotal"] : null) + (isset($context["totHarga"]) ? $context["totHarga"] : null));
            // line 74
            echo "                                    <tr class=\"cart-book\">
                                        <td>
                                            <div class=\"media\">
                                                <a href=\"#\" class=\"cart-thumbnail-image media-left\">
                                                    <div class=\"book-cover small-book-cover\">
                                                        <img src=\"";
            // line 79
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : null), "foto"), "html", null, true);
            echo "\" alt=\"\" class=\"media-object\">
                                                        <div class=\"fade\"></div>
                                                    </div>
                                                </a>
                                                <div class=\"media-body\">
                                                    <h3 class=\"media-heading\"><a href=\"#\">";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : null), "namaBuku"), "html", null, true);
            echo "</a></h3>
                                                </div><!-- /.media-body -->
                                            </div><!-- /.media -->
                                        </td>
                                        <td>
                                            <span class=\"price\">Rp.";
            // line 89
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : null), "harga")), "html", null, true);
            echo "</span>
                                            <input type=\"hidden\" name=\"harga\" id=\"harga\" value=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : null), "harga"), "html", null, true);
            echo "\">
                                        </td>
                                        <td class=\"quantity dark text-center\">            
                                            <div class=\"quant-input\">
                                                <div class=\"arrows\">
                                                    <div class=\"arrow plus gradient\"><span class=\"ir\"></span></div>
                                                    <div class=\"arrow minus gradient\"><span class=\"ir\"></span></div>
                                                </div>
                                                <input class=\"txt-quantity\" type=\"text\" name=\"qty\" id=\"qty\" value=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : null), "qty"), "html", null, true);
            echo "\"/>
                                            </div>              
                                        </td>
                                        <td>
                                            <span class=\"price subtotal\">Rp.";
            // line 102
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totHarga"]) ? $context["totHarga"] : null)), "html", null, true);
            echo "</span>
                                            <input type=\"hidden\" name=\"totalHarga\" id=\"totalHarga\" value=\"";
            // line 103
            echo twig_escape_filter($this->env, (isset($context["totHarga"]) ? $context["totHarga"] : null), "html", null, true);
            echo "\">
                                        </td>
                                        <td>
                                            <a class=\"btn btn-primary btn-flat\" href=\"javascript:void(0)\" onclick=\"deleteData(";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : null), "id"), "html", null, true);
            echo ")\" >X</a>
                                            <input type=\"hidden\" name=\"cart_session\" id=\"cart_session\" value=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : null), "cart_session"), "html", null, true);
            echo "\">
                                            <input type=\"hidden\" name=\"id\" id=\"id\" value=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : null), "id"), "html", null, true);
            echo "\">
                                        </td>
                                    </tr><!-- /.cart-book -->

                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['test'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 113
        echo "                                </tbody><!-- /tbody -->

                            </table><!-- /.table -->
                            </form>
                        </div><!-- /.order-detail -->

                        <div class=\"row\">
                            <div class=\"col-sm-offset-3 col-sm-3 center-sm\">
                                <input type=\"text\" class=\"form-control discount-name index-dropdown-discount-name\" placeholder=\"Enter your coupon..\">
                            </div><!-- /.col -->

                            <div class=\"col-xs-12 col-sm-6 center-sm\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-cart\">
                                        <tfoot>
                                            <tr>
                                                <td ><i class=\"icon-chevron fa fa-chevron-right\"></i>&nbsp;Subtotal:</td>
                                                <td >Rp.";
        // line 130
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["subTotal"]) ? $context["subTotal"] : null)), "html", null, true);
        echo "</td>
                                            </tr>
                                            <tr>
                                                <td ><i class=\"icon-chevron fa fa-chevron-right\"></i>&nbsp;Grandtotal:</td>
                                                <td >Rp.";
        // line 134
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["subTotal"]) ? $context["subTotal"] : null)), "html", null, true);
        echo "</td>
                                            </tr>
                                        </tfoot><!-- /tfoot -->
                                    </table><!-- /.table -->
                                </div><!-- /.table-responsive -->
                            </div> <!-- /.col -->   
                            <div class=\"col-md-12\">
                                <a href=\"javascript:void(0)\" id=\"btnAdd\" onclick=\"updateData()\" class=\"pull-left btn btn-primary btn-checkout\">Updated Cart &nbsp;<i class=\"fa fa-chevron-left\"></i></a> 
                                <a href=\"";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Id/Checkout\" class=\"pull-right btn btn-primary btn-checkout\">Continued Checkout &nbsp;<i class=\"fa fa-chevron-right\"></i></a>   
                            </div>    
                        </div><!-- /.row -->

                    </div><!-- /.module-body -->
                </div><!-- /.module -->
            </div><!-- /.container -->
        </div><!-- /#my-cart -->

        <!-- ============================================================= MY CART HEADER : END ============================================================= -->
        <!-- ============================================================= HEADER ============================================================= -->
        ";
        // line 153
        $this->env->loadTemplate("header.html")->display($context);
        // line 154
        echo "
    <!-- ============================================================= HEADER : END ============================================================= -->



    <div class=\"content\">
        <div class=\"home page\">

            <!-- .slider -->
           
            <!-- /.slider -->

            
                <!-- .block-new-books -->
                <!-- ========================================= NEW BOOKS MODULE ========================================= -->
               ";
        // line 169
        $this->displayBlock('content', $context, $blocks);
        // line 170
        echo "
                            <!-- ============================================================= FOOTER ============================================================= -->
                            ";
        // line 172
        $this->env->loadTemplate("footer.html")->display($context);
        // line 173
        echo "
                                            <!-- ============================================================= FOOTER : END ============================================================= -->    </div><!-- /.wrapper -->



                                            <!-- JavaScripts placed at the end of the document so the pages load faster -->

                                            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

                                            <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/user/js/jquery-1.12.0.min.js\"></script>
                                            <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/user/js/bootstrap.min.js\"></script>
                                            <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/user/js/bootstrap-hover-dropdown.min.js\"></script>
                                            <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/user/js/echo.min.js\"></script>
                                            <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/user/js/jquery.easing.min.js\"></script>
                                            <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/user/js/owl.carousel.min.js\"></script>
                                            <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/user/js/wow.min.js\"></script>
                                            <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/user/js/bootstrap-select.min.js\"></script>
                                            <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/user/js/jquery-ui.min.js\"></script>
                                            <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/user/js/scripts.js\"></script>

                                            <script type=\"text/javascript\">
                                                function deleteData(id)
                                                {
                                                    if(confirm('Are you sure delete this data?'))
                                                    {
                                                        // ajax delete data to database
                                                        \$.ajax({
                                                            url : \"";
        // line 200
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Cart/deleteData/\" + id,
                                                            type: \"POST\",
                                                            dataType: \"JSON\",
                                                            success: function(data)
                                                            {
                                                                location.reload();
                                                            },
                                                            error: function (jqXHR, textStatus, errorThrown)
                                                            {
                                                                alert('Error deleting data');
                                                            }
                                                        });

                                                    }
                                                }


                                                function updateData()
                                                {
                                                    \$('#btnAdd').text('Updating...'); //change button text
                                                    \$('#btnAdd').attr('disabled',true); //set button disable 
                                                    var status = true;
                                                    var url = \"";
        // line 222
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "main/Cart/updateData\";

                                                if (status==true) {
                                                        // ajax adding data to database
                                                        \$.ajax({
                                                            url : url,
                                                            type: \"POST\",
                                                            data: \$('#myForm').serialize(),
                                                            dataType: \"JSON\",
                                                            success: function(data)
                                                            {
                                                                if (data.status) {
                                                                    alert(\"Menyimpan\"); 
                                                                    location.reload();
                                                                    
                                                                }
                                                                \$('#btnAdd').text('Update'); //change button text
                                                                \$('#btnAdd').attr('disabled',false); //set button enable 
                                                            },
                                                            error: function (jqXHR, textStatus, errorThrown)
                                                            {
                                                                alert(\"Gagal Menyimpan\");
                                                                \$('#btnAdd').text('Update'); //change button text
                                                                \$('#btnAdd').attr('disabled',false); //set button enable 

                                                            }
                                                        });
                                                    }
                                                    else
                                                    {
                                                        \$('#btnAdd').text('Update'); //change button text
                                                        \$('#btnAdd').attr('disabled',false); //set button enable 
                                                    }
                                                }  


                                            </script>
                                            ";
        // line 259
        $this->displayBlock('js', $context, $blocks);
        // line 268
        echo "                                        </body>
                                        </html>";
    }

    // line 169
    public function block_content($context, array $blocks = array())
    {
    }

    // line 259
    public function block_js($context, array $blocks = array())
    {
        // line 260
        echo "                                            
                                            





                                            ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  433 => 260,  430 => 259,  425 => 169,  420 => 268,  418 => 259,  378 => 222,  341 => 191,  333 => 189,  329 => 188,  325 => 187,  317 => 185,  313 => 184,  309 => 183,  294 => 173,  292 => 172,  286 => 169,  267 => 153,  253 => 142,  242 => 134,  216 => 113,  205 => 108,  201 => 107,  197 => 106,  191 => 103,  180 => 98,  169 => 90,  165 => 89,  157 => 84,  148 => 79,  138 => 73,  135 => 72,  130 => 71,  127 => 70,  125 => 69,  87 => 34,  64 => 23,  60 => 22,  56 => 21,  52 => 20,  48 => 19,  44 => 18,  40 => 17,  34 => 14,  19 => 1,  477 => 344,  469 => 339,  460 => 332,  457 => 331,  374 => 252,  353 => 200,  337 => 190,  321 => 186,  305 => 182,  288 => 170,  278 => 174,  269 => 154,  235 => 130,  217 => 124,  211 => 123,  195 => 110,  187 => 102,  177 => 99,  172 => 96,  168 => 95,  141 => 74,  120 => 55,  114 => 54,  98 => 41,  89 => 36,  83 => 34,  81 => 31,  72 => 25,  68 => 24,  63 => 24,  59 => 23,  53 => 19,  49 => 18,  31 => 2,  27 => 1,);
    }
}
